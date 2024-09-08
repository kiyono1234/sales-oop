<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Login</title>
</head>
<body>
<div class="container mt-5">
        <div class="card border-0 mx-auto w-50">
            <div class="card-header border-0 bg-white mt-5">
                <h1 class="display-4 fw-bold text-center text-primary">LOGIN <i class="fa-solid fa-right-to-bracket"></i></h1>
            </div>
            <div class="card-body">
                <form action="../actions/user-actions.php" method="post" class="w-75 mx-auto">
                    <div class="row mb-3 g-2">
                        <label for="username" class="col-md-3 col-form-label text-md-end text-secondary small">Username</label>
                        <div class="col-md-8">
                            <input type="text" name="username" id="username" class="form-control" placeholder="Username">
                        </div>
                    </div>
                    <div class="row mb-3 g-2">
                        <label for="password" class="col-md-3 col-form-label text-md-end text-secondary small">Password</label>
                        <div class="col-md-8">
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                        </div>
                    </div>
                    <div class="row mb-3 g-2">
                        <div class="col-md-8 offset-md-3">
                            <button type="submit" class="btn btn-primary w-100" name="login">Login</button>
                        </div>
                    </div>
                    <div class="row mb-3 g-2">
                        <div class="col-md-8 offset-md-3 text-center">
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"><a href="register.php" class="text-white">Create an Account</a></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



        <!-- always put script at  the bottom -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</body>
</html>