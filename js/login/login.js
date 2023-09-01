function salvar()
{
var nome = document.formLogin.nome.value;
var email = document.formLogin.email.value;
var login = document.formLogin.login.value;
var password = document.formLogin.password.value;
var permissao = document.formLogin.permissao.value;
var grupo = document.formLogin.grupo.value;

if (nome == "" || email == "" || login == "" || permissao == "" || grupo == "" || password == "")
{
alert("É necessário preencher todos os campos para poder adicionar o usuário.");
}
else
{
document.formLogin.submit();
}
}

