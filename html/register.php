<?php
global $connection;
if(isset($_POST['registerBtn'])){
    //retrieve data from form and save the value to a variable
    //for tbluserprofile
    $fname=$_POST['txtfirstname'];
    $lname=$_POST['txtlastname'];


    //for tbluseraccount
    $email=$_POST['registerUsername'];
    $uname=$_POST['registerUsername'];
    $pword=$_POST['registerPassword'];

    //save data to tbluserprofile
    $sql1 ="Insert into tbluserprofile(firstname,lastname) values('".$fname."','".$lname."')";
    mysqli_query($connection,$sql1);

    //Check tbluseraccount if username is already existing. Save info if false. Prompt msg if true.
    $sql2 ="Select * from tbluseraccount where username='".$uname."'";
    $result = mysqli_query($connection,$sql2);
    $row = mysqli_num_rows($result);
    if($row == 0){
        $sql ="Insert into tbluseraccount(emailadd,username,password) values('".$email."','".$uname."','".$pword."')";
        mysqli_query($connection,$sql);
        echo "<script language='javascript'>
						alert('New record saved.');
				  </script>";
    }else{
        echo "<script language='javascript'>
						alert('Username already existing');
				  </script>";
    }
}
?>