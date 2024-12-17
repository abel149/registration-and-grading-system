<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saint Mary's University</title>
    
     <!-- Bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 
     <!-- Google Font -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
     
     <!-- Font-awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
     <!--Css-->
    <link rel="stylesheet" href="loginstyle.css">

    <link rel="icon" href="image/stmary.png" >
    
</head>

<body>
    <div class="login-container">
        <h2>Login</h2>

        <form>
            <span name="loginvalid">  </span>
            <!-- Role Selection -->
            <div class="mb-3">
                <label for="role" class="form-label">Who are you</label>
                <select class="form-select" name="selectrole" id="role" required>
                    <option value="administrator">Administrator</option>
                    <option value="student">Student</option>
                    <option value="teacher">Teacher</option>
                    <option value="registrar">Registrar</option>
                </select>
            </div>

            <!-- Username Field -->
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" id="username" placeholder="Enter username" required>
            </div>

            <!-- Password Field -->
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Enter password" required>
            </div>

            <!-- Sign In Button -->
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-light" name="signin">Sign In</button>
                <a href="index.php" class="btn btn-light" >Back To Home</a>
            </div>
        </form>
    </div>

</body>

</html>