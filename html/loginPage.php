<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link href="styles.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arima+Madurai&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jaldi&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body style="align-items: center; background-position: 50% 60%; background-size: 77%;background-image: url('https://images.unsplash.com/photo-1543797414-a0c3ad076f7c?q=80&w=1933&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
<!-- <body style="align-items: center; background-size:110% ;background-image: url('https://images.unsplash.com/photo-1573068057232-fa17a193d54d?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');"> -->
<div id = "logInWeb">
          <p style=" font-family: 'Arima Madurai', sans-serif; font-size: 70px; color: antiquewhite"><b>Login</b></p>
        <div class="form-floating mb-3">
            <input type="email" class="form-control " id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword" >Password</label>
        </div>
        <div style="display: flex; flex-direction: row; margin: 15px 0">
            <input type ="checkbox" id = "Checker">
            <label for="Checker"  style="margin-left: 5px;">Remember Me </label>
            <a href = "#" style="margin-left: 140px;color: white;">Forgot Password?</a>
        </div>
        <div class="d-grid gap-2">
            <button type="button" id ="logBut"><b>Log In</b></button>
        </div>

        <p style="margin-top: 10px;">Don't Have an Account? <a href="registerPage.php" style="color: white;">Register Here!</a></p>

    </div>
</body>

</html>