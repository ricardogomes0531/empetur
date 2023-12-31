<?php
session_start();
if (!isset($_SESSION["email"]))
{
header("Location: signin.php");
exit;
}

?>

<?php
require_once("Php/Repository/ReservaResponsavelRepository.php");
@$saved = false;
if (isset($_POST["nome"]))
{
@$nome = $_POST["nome"];
@$telefone = $_POST["telefone"];
@$email = $_POST["email"];
@$rg=$_POST["rg"];
@$orgaoEmissor = $_POST["orgaoEmissor"];
@$cpf=$_POST["cpf"];
@$profissao = $_POST["profissao"];
@$nacionalidade = $_POST["nacionalidade"];
@$estadoCivil = $_POST["estadoCivil"];
@$logradouro=$_POST["logradouro"];
@$numero=$_POST["numero"];
@$complemento=$_POST["complemento"];
@$bairro=$_POST["bairro"];
@$cidade=$_POST["cidade"];
@$cep=$_POST["cep"];
@$uf=$_POST["uf"];
$userIsSaved = inserir($nome, $telefone, $email, $nacionalidade, $estadoCivil, $rg, $cpf, $orgaoEmissor, $profissao, $logradouro, $numero, $bairro, $cidade, $cep, $complemento, $uf);
if ($userIsSaved)
{
$saved = true;
}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SYS-Empetur - XXXX</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>Responsável</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <!--
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/avatar_003.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Jhon Doe</h6>
                        <span>Admin</span>
                    </div>
                    -->
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <!--
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Elements</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="button.html" class="dropdown-item">Buttons</a>
                            <a href="typography.html" class="dropdown-item">Typography</a>
                            <a href="element.html" class="dropdown-item">Other Elements</a>
                        </div>
                    </div>
                    -->
                    <a href="#" class="nav-item nav-link"><i class="bi bi-briefcase me-2"></i>Responsável</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.php" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <!--
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notificatin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/avatar_003.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">John Doe</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="signin.html" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
                -->
            </nav>
            <!-- Navbar End -->


            <!-- Sale & Revenue Start -->
            <!--
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Today Sale</p>
                                <h6 class="mb-0">$1234</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Sale</p>
                                <h6 class="mb-0">$1234</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Today Revenue</p>
                                <h6 class="mb-0">$1234</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Revenue</p>
                                <h6 class="mb-0">$1234</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            -->
            <!-- Sale & Revenue End -->


            <!-- Sales Chart Start -->
            <!--
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Worldwide Sales</h6>
                                <a href="">Show All</a>
                            </div>
                            <canvas id="worldwide-sales"></canvas>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Salse & Revenue</h6>
                                <a href="">Show All</a>
                            </div>
                            <canvas id="salse-revenue"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            -->
            <!-- Sales Chart End -->


            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Cadastro de Responsável</h6>
                        <a href="">Show All</a>
                    </div>
                    <!-- Button trigger modal -->
                    <div class="d-flex align-items-center mb-2">
                        <button type="button" class="btn btn-success ms-1" data-bs-toggle="modal" data-bs-target="#novoModal">Novo</button>
                    </div>
                    <!-- End Button trigger modal -->
                    <!-- Modal -->
                    <div class="modal fade" id="novoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl modal-dialog-scrollable">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastra Responsável</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form name="formResponsavel" action="" method="post">
                                    <div class="bg-light rounded-top p-4">
                                        <div class="bg-light rounded h-100 p-1">
                                            <!--
                                            <fieldset class="row col-sm-4 form-floating mb-2">
                                                <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                                                <div class="col-sm-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="tipoPessoa"
                                                            id="gridRadios1" value="j" checked>
                                                        <label class="form-check-label" for="gridRadios1">
                                                            Pessoa jurídica
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="tipoPessoa"
                                                            id="gridRadios2" value="f">
                                                        <label class="form-check-label" for="gridRadios2">
                                                            Pessoa Física
                                                        </label>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            -->
                                            <div class="form-floating mb-2">
                                                <input type="text" class="form-control" id="floatingInput"
                                                    placeholder="Nome" name="nome">
                                                <label for="floatingInput">Nome</label>
                                            </div>
                                            <div class="form-floating mb-2">
                                                <input type="text" class="form-control" id="floatingInput"
                                                    placeholder="Telefone" name="telefone">
                                                <label for="floatingInput">E-mail</label>
                                            </div>
                                            <div class="form-floating mb-2">
                                                <input type="text" class="form-control" id="floatingInput"
                                                    placeholder="E-mail" name="email">
                                                <label for="floatingInput">E-mail</label>
                                            </div>
                                            <div class="row g-3">
                                                <div class="col-md-4 form-floating mb-2">
                                                    <input type="text" class="form-control" id="floatingInput"
                                                        placeholder="Identidade" name="rg">
                                                    <label for="floatingInput">Identidade</label>
                                                </div>
                                                <div class="col-md-4 form-floating mb-2">
                                                    <input type="text" class="form-control" id="floatingInput"
                                                        placeholder="Orgão emissor" name="orgaoEmissor">
                                                    <label for="floatingInput">Orgão emissor</label>
                                                </div>
                                                <div class="col-md-4 form-floating mb-2">
                                                    <input type="text" class="form-control" id="floatingInput"
                                                        placeholder="CPF" name="cpf">
                                                    <label for="floatingInput">CPF</label>
                                                </div>
                                            </div>
                                            <div class="row g-3">
                                                <div class="col-md-4 form-floating mb-2">
                                                    <input type="text" class="form-control" id="floatingInput"
                                                        placeholder="Profissão" name="profissao">
                                                    <label for="floatingInput">Profissão</label>
                                                </div>
                                                <div class="col-md-4 form-floating mb-2">
                                                    <input type="text" class="form-control" id="floatingInput"
                                                        placeholder="Nacionalidade" name="nacionalidade">
                                                    <label for="floatingInput">Nacionalidade</label>
                                                </div>
                                                <div class="col-md-2 form-floating mb-2">
                                                    <select class="form-select" id="Estado civil" name="estadoCivil"
                                                        aria-label="Floating label select example">
                                                        <option selected>Selecione ...</option>
                                                        <option value="s">Solteiro(a)</option>
                                                        <option value="c">Casado(a)</option>
                                                        <option value="d">Divorciado(a)</option>
                                                        <option value="v">Viúvo(a)</option>
                                                    </select>
                                                    <label for="floatingSelect">Estado civil</label>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-2">
                                                <input type="text" class="form-control" id="floatingInput"
                                                    placeholder="Logradouro" name="logradouro">
                                                <label for="floatingInput">Logradouro</label>
                                            </div>
                                            <div class="row g-3">
                                                <div class="col-md-4 form-floating mb-2">
                                                    <input type="text" class="form-control" id="floatingInput"
                                                        placeholder="Número" name="numero">
                                                    <label for="floatingInput">Número</label>
                                                </div>
                                                <div class="col-md-8 form-floating mb-2">
                                                    <input type="text" class="form-control" id="floatingInput"
                                                        placeholder="Complemento" name="complemento">
                                                    <label for="floatingInput">Complemento</label>
                                                </div>
                                            </div>
                                            <div class="row g-3">
                                                <div class="col-md-3 form-floating mb-2">
                                                    <input type="text" class="form-control" id="floatingInput"
                                                        placeholder="Bairro" name="bairro">
                                                    <label for="floatingInput">Bairro</label>
                                                </div>
                                                <div class="col-md-3 form-floating mb-2">
                                                    <input type="text" class="form-control" id="floatingInput"
                                                        placeholder="Cidade" name="cidade">
                                                    <label for="floatingInput">Cidade</label>
                                                </div>
                                                <div class="col-md-4 form-floating mb-2">
                                                    <input type="text" class="form-control" id="floatingInput"
                                                        placeholder="CEP" name="cep">
                                                    <label for="floatingInput">CEP</label>
                                                </div>
                                                <div class="col-md-2 form-floating mb-2">
                                                    <select class="form-select" id="UF" name="uf"
                                                        aria-label="Floating label select example">
                                                        <option selected>Selecione ...</option>
                                                        <option value="pe">PE</option>
                                                        <option value="am">AM</option>
                                                    </select>
                                                    <label for="floatingSelect">UF</label>
                                                </div>
                                            </div>
                                            <!--
                                            <div class="form-floating">
                                                <textarea class="form-control" placeholder="Leave a comment here"
                                                    id="floatingTextarea" style="height: 150px;"></textarea>
                                                <label for="floatingTextarea">Comments</label>
                                            </div>
                                            -->
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
                              <button type="button" onClick="salvar()" class="btn btn-primary"><i class="bi bi-save2"></i> Salvar</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    <!-- End Modal -->
                    <div class="d-flex mb-2">
<form action="" method="get">
                        <input class="form-control bg-transparent" type="text" placeholder="Pesquisar Responsável" name="pesquisar">
                        <button type="submit" class="btn btn-primary ms-2"><i class="bi bi-search"></i></button>
</form>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">
                                    <th scope="col"></th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Telefone</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
<?php
require_once("Php/Repository/ReservaResponsavelRepository.php");
@$pesquisa = $_GET["pesquisar"];
if (isset($pesquisa))
{
$query = PesquisarPorNome($pesquisa);
}
else
{
$query = Listar();
}
while($result = mysqli_fetch_array($query))
{
$dataFormatada = explode("-", $result["date_created"]);

echo "
                                <tr>
                                    <td>".$result["nome"]."</td>
                                    <td>".$result["telefone"]."</td>
                                    <td>".$result["email"]."</td>
                                    <td><a class='btn btn-sm btn-primary m-2' href=''><i class='bi bi-info-square-fill'></i></a></td>
                                </tr>";
}
?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->


            <!-- Widgets Start -->
            <!--
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="h-100 bg-light rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <h6 class="mb-0">Messages</h6>
                                <a href="">Show All</a>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-3">
                                <img class="rounded-circle flex-shrink-0" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-0">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-3">
                                <img class="rounded-circle flex-shrink-0" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-0">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-3">
                                <img class="rounded-circle flex-shrink-0" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-0">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center pt-3">
                                <img class="rounded-circle flex-shrink-0" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-0">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="h-100 bg-light rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Calender</h6>
                                <a href="">Show All</a>
                            </div>
                            <div id="calender"></div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="h-100 bg-light rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">To Do List</h6>
                                <a href="">Show All</a>
                            </div>
                            <div class="d-flex mb-2">
                                <input class="form-control bg-transparent" type="text" placeholder="Enter task">
                                <button type="button" class="btn btn-primary ms-2">Add</button>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-2">
                                <input class="form-check-input m-0" type="checkbox">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <span>Short task goes here...</span>
                                        <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-2">
                                <input class="form-check-input m-0" type="checkbox">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <span>Short task goes here...</span>
                                        <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-2">
                                <input class="form-check-input m-0" type="checkbox" checked>
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <span><del>Short task goes here...</del></span>
                                        <button class="btn btn-sm text-primary"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-2">
                                <input class="form-check-input m-0" type="checkbox">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <span>Short task goes here...</span>
                                        <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center pt-2">
                                <input class="form-check-input m-0" type="checkbox">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <span>Short task goes here...</span>
                                        <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            -->
            <!-- Widgets End -->
<?php
if ($saved)
{
echo "<p role='alert'>Usuário cadastrado com sucesso!</p>";
}
?>


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">pernambucocecon.com.br</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="#">RR_consultoria</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="js/responsavel/responsavel.js"></script>
</body>

</html>