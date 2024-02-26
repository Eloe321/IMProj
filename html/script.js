$(document).ready(function (){
    $('#file1').show();
    $('#file2').hide();





});
function togglePass() {
    let pass = document.getElementById("regPass");
    console.log("This is the type: " + pass);
    if(pass.type === "password"){
        pass.type = "text";
    }else{
        pass.type = "password";
    }
}
$("#OpenLog").click(function (){
    window.location.href = "loginPage.php";
});
$("#OpenReg").click(function(){

    window.location.href = "registerPage.php";

});
