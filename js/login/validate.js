function checkFields()
{
var email= document.getElementById("email").value;
var password = document.getElementById("password").value;
if (email == "" || password == "")
{
alert("Favor informar e-mail e senha para realizar o login.");
}
else
{
document.formLogin.submit();
}
}