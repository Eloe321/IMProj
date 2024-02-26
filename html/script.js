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
function OpenLog(){
    window.close();
    window.open("loginPage.php", "_self");

}
function OpenReg(){
    window.close();
    window.open("registerPage.php", "_self");
}