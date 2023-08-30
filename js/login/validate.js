function checkFields()
{
var email= document.getElementById("floatingInput").value;
var password = document.getElementById("floatingPassword").value;
if (email == "" || password == "")
{
alert("Favor informar e-mail e senha para realizar o login.");
}
else
{
document.formLogin.submit();
}
}