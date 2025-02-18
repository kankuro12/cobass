<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <style>
    </style>
</head>

<body style="background-color:#E4EFA1">
    <div class="mt-3">
        <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-5" style="box-shadow: 12px 12px 22px gray">
                <form action="{{ route('admin.login') }}" method="POST">
                    @csrf
                    <div class="mr-5 mt-5">
                        <div class="text-center">
                            <h1 class="h2 text-gray-900 mb-4">Welcome !</h1>
                        </div>
                        <div class="form-group">
                            <div class="mb-2">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control"
                                    placeholder="Enter your mail" required>
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="mb-2">
                                <label for="passowrd">Password</label>
                                <input type="password" name="password" id="password" class="form-control"
                                    placeholder="Enter your password" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="mb-2">
                                <div class="custom-control custom-checkbox small">
                                    <input type="checkbox" class="custom-control-input" id="customCheck" name="me"
                                        value="1">
                                    <label class="custom-control-label" for="customCheck">Remember Me</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-2" >
                            <button class="btn btn-success">
                                login
                            </button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
