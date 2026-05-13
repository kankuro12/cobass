<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ManageUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'manage:user {action? : list, create, update, or delete}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Interactively manage application users from the terminal';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $action = $this->argument('action');

        if ($action !== null) {
            return $this->runAction(strtolower($action));
        }

        while (true) {
            $choice = $this->choice(
                'User management menu',
                ['list users', 'create user', 'update user', 'change password', 'delete user', 'exit'],
                'list users'
            );

            $result = match ($choice) {
                'list users' => $this->listUsers(),
                'create user' => $this->createUser(),
                'update user' => $this->updateUser(),
                'change password' => $this->changePasswordUser(),
                'delete user' => $this->deleteUser(),
                'exit' => Command::SUCCESS,
            };

            if ($choice === 'exit') {
                $this->line('No changes made.');

                return $result;
            }

            $this->newLine();
        }
    }

    protected function runAction(string $action): int
    {
        return match ($action) {
            'list', 'list users' => $this->listUsers(),
            'create', 'create user' => $this->createUser(),
            'update', 'update user' => $this->updateUser(),
            'change password', 'change-password', 'password' => $this->changePasswordUser(),
            'delete', 'delete user' => $this->deleteUser(),
            default => $this->invalidAction($action),
        };
    }

    protected function listUsers(): int
    {
        $users = User::query()
            ->orderBy('id')
            ->get(['id', 'name', 'email', 'created_at']);

        if ($users->isEmpty()) {
            $this->warn('No users found.');

            return Command::SUCCESS;
        }

        $this->table(
            ['ID', 'Name', 'Email', 'Created'],
            $users->map(function (User $user) {
                return [
                    $user->id,
                    $user->name,
                    $user->email,
                    optional($user->created_at)->format('Y-m-d H:i:s'),
                ];
            })->all()
        );

        return Command::SUCCESS;
    }

    protected function createUser(): int
    {
        $name = $this->askForName();
        $email = $this->askForEmail();
        $password = $this->askForPassword();

        User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
        ]);

        $this->info('User created successfully.');

        return Command::SUCCESS;
    }

    protected function updateUser(): int
    {
        $user = $this->selectUser('update');

        if ($user === null) {
            return Command::FAILURE;
        }

        $name = $this->askForName($user->name);
        $email = $this->askForEmail($user->email, $user->id);
        $changePassword = $this->confirm('Do you want to change the password?', false);

        $user->name = $name;
        $user->email = $email;

        if ($changePassword) {
            $user->password = Hash::make($this->askForPassword());
        }

        $user->save();

        $this->info('User updated successfully.');

        return Command::SUCCESS;
    }

    protected function changePasswordUser(): int
    {
        $user = $this->selectUser('change password for');

        if ($user === null) {
            return Command::FAILURE;
        }

        $user->password = Hash::make($this->askForPassword());
        $user->save();

        $this->info('Password changed successfully.');

        return Command::SUCCESS;
    }

    protected function deleteUser(): int
    {
        $user = $this->selectUser('delete');

        if ($user === null) {
            return Command::FAILURE;
        }

        if (! $this->confirm("Delete {$user->name} <{$user->email}>?", false)) {
            $this->line('Deletion cancelled.');

            return Command::SUCCESS;
        }

        $user->delete();

        $this->info('User deleted successfully.');

        return Command::SUCCESS;
    }

    protected function selectUser(string $action): ?User
    {
        $users = User::query()->orderBy('id')->get(['id', 'name', 'email']);

        if ($users->isEmpty()) {
            $this->warn('No users found.');

            return null;
        }

        $this->table(
            ['ID', 'Name', 'Email'],
            $users->map(function (User $user) {
                return [$user->id, $user->name, $user->email];
            })->all()
        );

        $userId = $this->ask("Enter the user ID to {$action}");

        if (! ctype_digit((string) $userId)) {
            $this->error('Please enter a valid numeric user ID.');

            return null;
        }

        $user = User::find((int) $userId);

        if ($user === null) {
            $this->error('User not found.');

            return null;
        }

        return $user;
    }

    protected function askForName(?string $default = null): string
    {
        return $this->askWithValidation(
            'Name',
            'name',
            ['name' => ['required', 'string', 'max:255']],
            $default
        );
    }

    protected function askForEmail(?string $default = null, ?int $ignoreUserId = null): string
    {
        $rules = ['required', 'email', 'max:255'];

        if ($ignoreUserId !== null) {
            $rules[] = Rule::unique('users', 'email')->ignore($ignoreUserId);
        } else {
            $rules[] = Rule::unique('users', 'email');
        }

        return $this->askWithValidation(
            'Email',
            'email',
            ['email' => $rules],
            $default
        );
    }

    protected function askForPassword(): string
    {
        while (true) {
            $password = (string) $this->secret('Password');
            $confirmation = (string) $this->secret('Confirm password');

            if ($password === '') {
                $this->error('Password cannot be empty.');

                continue;
            }

            if ($password !== $confirmation) {
                $this->error('Passwords do not match.');

                continue;
            }

            return $password;
        }
    }

    protected function askWithValidation(string $question, string $field, array $rules, ?string $default = null): string
    {
        while (true) {
            $value = $this->ask($question, $default);

            $validator = Validator::make([
                $field => $value,
            ], $rules);

            if ($validator->passes()) {
                return (string) $value;
            }

            foreach ($validator->errors()->all() as $message) {
                $this->error($message);
            }
        }
    }

    protected function invalidAction(string $action): int
    {
        $this->error("Unknown action [{$action}]. Use list, create, update, delete, or run the command without an action to use the menu.");

        return Command::FAILURE;
    }
}
