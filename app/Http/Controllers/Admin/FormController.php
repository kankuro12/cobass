<?>
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Registration;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        $registrations = Registration::latest()->get();
        return view('admin.form.index', compact('registrations'));
    }
}
