
<html lang="en">
<head>
    <link href="styles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <title>Register Page</title>
</head>
<body style="background-image: url('https://imgur.com/dc7Xg05.jpg'); background-size: 100%; background-position: 50% 45%">
<div id = "registerWeb">
    <header><p>TrekkerTracker</p></header>
    <hr>
        <p>Sign Up</p>
    <div class="form-floating mb-3">
        <input type="email" class="form-control" id="RegEmail" placeholder="Email Address" required>
        <label for="RegEmail" >Email Address</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="RegFname" placeholder="First Name" required>
        <label for="RegFname">First Name</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="RegLname" placeholder="Last Name" required>
        <label for="RegLname">Last Name</label>
    </div>

    <div class="form-floating">
        <input type="password" class="form-control" id="regPass" placeholder="Password" required>
        <label for="regPass" class = "forInp">Password</label>
        <div class="password-toggle" onclick="togglePass()">
            <img src="https://cdn-icons-png.freepik.com/256/709/709612.png?uid=R115184418&ga=GA1.1.475352177.1708440339&"
                 alt="Show Password">
        </div>
    </div>
    <input type="checkbox" id ="checkiReg">
    <label for="checkiReg">I agree to the Terms and Conditions stated, and the Privacy
        Policy for membership</label>
    <div class="d-grid gap-2">
        <button class="btn btn-primary" type="button">Sign Up</button>

    </div>
    <a href = "loginPage.php">Already Have An Account?</a>
    </div>
</body>
<script src = "script.js"></script>

</html>