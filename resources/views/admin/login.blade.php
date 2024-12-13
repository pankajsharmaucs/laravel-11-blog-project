<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login Page</title>
</head>

<body>

    <form method="POST" action="{{ route('admin.login') }}" class="">
        @csrf
        <div class="row p-md-5 justify-content-center">
            <div class="col-md-4 col-10 border p-3 rounded">
                <h3 class="mb-3">Admin Login</h3>

                <div class="col-12  mb-3">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" required class="form-control">
                </div>
                <div class="col-12  mb-3">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" required class="form-control">
                </div>
                <button class="btn btn-primary" type="submit">Login</button>

                <!-- Display error messages if any -->
                @if ($errors->any())
                    <div class="alert alert-danger my-3 py-1 pt-3">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

            </div>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>
