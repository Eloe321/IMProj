<?php
    include 'connect.php';
?>

<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link href="styles2.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
</head>

<!-- <body class="loginBody" style="align-items: center; background-position: 50% 60%; background-size: 77%;background-image: url('https://images.unsplash.com/photo-1543797414-a0c3ad076f7c?q=80&w=1933&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');"> -->

<body class="loginBody">
<main class="loginMain">
    <div class="loginLeft">
        <div class="login">
            <div class="loginMessage">
                <p class="registerText" style="font-family: Playfair Display">Create an account</p>
                <p style="font-size: 17px; font-weight: 200; opacity: 0.5;text-align: center;">Always remember to drink water</p>
            </div>
            <form class="loginForm">
                <div class="loginFields">
                    <div class="loginInput">
                        <label for="registerName" style="font-family: Playfair Display">Name</label>
                        <input type="text" class="htmlForm-control loginTextField" id="loginUsername" placeholder="What shall we call you" />
                    </div>
                    <div class="loginInput">
                        <label for="registerEmail" style="font-family: Playfair Display">Email</label>
                        <input type="text" class="htmlForm-control loginTextField" id="loginUsername" placeholder="Enter your email" />
                    </div>
                    <div class="loginInput">
                        <label for="registerPassword" style="font-family: Playfair Display">Password</label>
                        <input type="password" class="htmlForm-control loginTextField" id="loginPassword" placeholder="*******" />
                        <p>Must be atleast 8 characters</p>
                    </div>
                </div>

                <div class="loginButtons">
                    <button type="button" class="loginBtn" style="font-family: Playfair Display">Register</button>
                </div>
            </form>
            <p style="font-family: Playfair Display">Been here before? <a href="loginPage.php" style="color: black; text-decoration: none;">Log in</a></p>
        </div>
    </div>
    <img src="/html/assets/wallpaperflare.com_wallpaper.jpg" alt="tets" class="coolPic">
</main>
</body>

</html>
<?php
if(isset($_POST['btnRegister'])){
    //retrieve data from form and save the value to a variable
    //for tbluserprofile
    $fname=$_POST['txtfirstname'];
    $lname=$_POST['txtlastname'];


    //for tbluseraccount
    $email=$_POST['txtemail'];
    $uname=$_POST['txtpassword'];
    $pword=$_POST['txtpassword'];

    //save data to tbluserprofile
    $sql1 ="Insert into tbluserprofile(firstname,lastname) values('".$fname."','".$lname."')";
    mysqli_query($connection,$sql1);

    //Check tbluseraccount if username is already existing. Save info if false. Prompt msg if true.
    $sql2 ="Select * from tbluseraccount where username='".$uname."'";
    $result = mysqli_query($connection,$sql2);
    $row = mysqli_num_rows($result);
    if($row == 0){
        $sql ="Insert into tbluseraccount(emaivscladd,username,password) values('".$email."','".$uname."','".$pword."')";
        mysqli_query($connection,$sql);
        echo "<script>
						alert('New record saved.');
				  </script>";
    }else{
        echo "<script>
						alert('Username already existing');
				  </script>";
    }


}


?>
