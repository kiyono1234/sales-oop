<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title></title>
</head>
<body>
<div class="container mt-5">
    <div class="card border-0 mx-auto w-50">
        <div class="card-header border-0 bg-white mt-5">
            <h1 class="display-4 fw-bold text-center text-danger"><i class="fa-solid fa-user-plus">Registration</i></h1>
        </div>
        <div class="card-body">
            <form action="../actions/register.php" method="post">
                <div class="mb-3">
                    <div class="row">
                        <div class="col-6">
                            <label for="first-name" class="form-label">First Name</label>
                            <input type="text" name="first_name" id="first-name" class="form-control" required autofocus>
                        </div>
                        <div class="col-6">
                            <label for="last-name" class="form-label">Last Name</label>
                            <input type="text" name="last_name" id="last-name" class="form-control" required>
                        </div>
                    </div>
                </div>
            <div class="mb-3">
                <label for="username" class="form-label fw-bold">Username</label>
                <input type="text" name="username" id="username" class="form-control fw-bold" maxlength="15" required>
            </div>
            <div class="mb-5">
                <label for="password" class="form-label fw-bold">Password</label>
                <input type="password" name="password" id="password" class="form-control"  aria-describedby="password-info" required>
            </div>
                <button type="submit" class="btn btn-danger w-100">Register</button>
            </form>
        </div>
    </div>
</div>





        <!-- always put script at  the bottom -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</body>
</html>