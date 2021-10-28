<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
</head>
<body>
    <header>
        <div class="title-header">
            <div class="text-center">
                <h1>User Management</h1>
            </div>
    
            <div class="container-fx-sa">
                <a href="{{ route('createUser') }}"><button class="btn btn-outline-dark"> Create User</button></a>
                <a href="{{ route('users') }}"><button class="btn btn-outline-dark">Show all users</button></a>
            </div>
        </div>
    </header>

    <div class="container">
        @yield('content')
    </div>

    <footer>
    </footer>
</body>
</html>