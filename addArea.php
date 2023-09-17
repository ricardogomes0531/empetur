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
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>AddArea</h3>
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
                    <a href="#" class="nav-item nav-link"><i class="bi bi-building-add me-2"></i>Áreas</a>
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
                        <h6 class="mb-0">Cadastro de Áreas</h6>
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
                              <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastra de Áreas</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form name="formArea" action="" method="post">
                                    <div class="bg-light rounded-top p-4">
                                        <div class="bg-light rounded h-100 p-1">
                                            <!--
                                            <fieldset class="row col-sm-4 form-floating mb-2">
                                                <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                                                <div class="col-sm-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="gridRadios"
                                                            id="gridRadios1" value="option1" checked>
                                                        <label class="form-check-label" for="gridRadios1">
                                                            Pessoa jurídica
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="gridRadios"
                                                            id="gridRadios2" value="option2">
                                                        <label class="form-check-label" for="gridRadios2">
                                                            Pessoa Física
                                                        </label>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            -->
                                            <div class="col-md-2 form-floating mb-2">
                                                <select class="form-select" id="Tipo de área" name="tipoArea"
                                                    aria-label="Floating label select example">
                                                    <option selected>Selecione ...</option>
                                                    <option value="1">Teatro</option>
                                                    <option value="2">Auditório</option>
                                                    <option value="2">Sala</option>
                                                    <option value="2">Setores</option>
                                                    <option value="2">Pavilhão</option>
                                                    <option value="2">Outros</option>
                                                </select>
                                                <label for="floatingSelect">Tipo de área</label>
                                            </div>
                                            <div class="form-floating mb-2">
                                                <input type="text" class="form-control" id="floatingInput"
                                                    placeholder="Nome" name="nome">
                                                <label for="floatingInput">Nome</label>
                                            </div>
                                            <div class="row g-3">
                                                <div class="col-md-4 form-floating mb-2">
                                                    <input type="text" class="form-control" id="floatingInput"
                                                        placeholder="Capacidade" name="capacidade">
                                                    <label for="floatingInput">Capacidade</label>
                                                </div>
                                                <div class="col-md-4 form-floating mb-2">
                                                    <input type="text" class="form-control" id="floatingInput"
                                                        placeholder="Dimensão" name="dimensao">
                                                    <label for="floatingInput">Dimensão</label>
                                                </div>
                                                <div class="col-md-4 form-floating mb-2">
                                                    <input type="text" class="form-control" id="floatingInput"
                                                        placeholder="Pé direito" name="peDireito">
                                                    <label for="floatingInput">Pé direito</label>
                                                </div>
                                            </div>
                                            <div class="row g-3">
                                                <div class="col-md-6 form-floating mb-2">
                                                    <select class="form-select" id="Dependência" name="dependencia"
                                                        aria-label="Floating label select example">
                                                        <option selected>Selecione ...</option>
                                                        <option value="118">Ala Leste (Portões E / F / G e H) dos Pavilhões de Feiras</option>
                                                        <option value="7">Ala Norte (Portões C, D, E, F) dos Pavilhões de Feiras</option>
                                                        <option value="117">Ala Oeste (Portões A / B / C e D) dos Pavilhões de Feiras</option>
                                                        <option value="6">Ala Sul (Portões A, B, G, H) dos Pavilhões de Feiras</option>
                                                        <option value="83">Area em frente ao TABOCAS</option>
                                                        <option value="45">Área Externa</option>
                                                        <option value="86">Área Externa (1000)</option>
                                                        <option value="95">Área Externa (10000)</option>
                                                        <option value="96">Área Externa (11000)</option>
                                                        <option value="97">Área Externa (12000)</option>
                                                        <option value="98">Área Externa (13000)</option>
                                                        <option value="99">Área Externa (14000)</option>
                                                        <option value="100">Área Externa (15000)</option>
                                                        <option value="101">Área Externa (16000)</option>
                                                        <option value="102">Área Externa (17000)</option>
                                                        <option value="103">Área Externa (18000)</option>
                                                        <option value="104">Área Externa (19000)</option>
                                                        <option value="87">Área Externa (2000)</option>
                                                        <option value="105">Área Externa (20000)</option>
                                                        <option value="106">Área Externa (21000)</option>
                                                        <option value="107">Área Externa (22000)</option>
                                                        <option value="108">Área Externa (23000)</option>
                                                        <option value="109">Área Externa (24000)</option>
                                                        <option value="110">Área Externa (25000)</option>
                                                        <option value="111">Área Externa (26000)</option>
                                                        <option value="112">Área Externa (27000)</option>
                                                        <option value="113">Área Externa (28000)</option>
                                                        <option value="114">Área Externa (29000)</option>
                                                        <option value="89">Área Externa (3000)</option>
                                                        <option value="115">Área Externa (30000)</option>
                                                        <option value="88">Área Externa (4000)</option>
                                                        <option value="90">Área Externa (5000)</option>
                                                        <option value="91">Área Externa (6000)</option>
                                                        <option value="92">Área Externa (7000)</option>
                                                        <option value="93">Área Externa (8000)</option>
                                                        <option value="94">Área Externa (9000)</option>
                                                        <option value="80">Área externa leste</option>
                                                        <option value="81">Área externa norte</option>
                                                        <option value="82">Área externa oeste</option>
                                                        <option value="77">Área para coquetel</option>
                                                        <option value="5">Área Total dos Pavilhões de Feiras</option>
                                                        <option value="3">Auditório Brum</option>
                                                        <option value="32">Auditório República Pernambucana (INATIVA)</option>
                                                        <option value="36">Auditório Ribeira</option>
                                                        <option value="4">Auditório Tabocas</option>
                                                        <option value="52">Balcão (INATIVA)</option>
                                                        <option value="51">Cozinha do Mezanino</option>
                                                        <option value="33">Cozinha do Tabocas (INATIVA)</option>
                                                        <option value="53">depósito 1 (INATIVA)</option>
                                                        <option value="54">depósito 2 (INATIVA)</option>
                                                        <option value="55">depósito 3 (INATIVA)</option>
                                                        <option value="56">depósito 6 (INATIVA)</option>
                                                        <option value="35">Depósitos para Feiras (INATIVA)</option>
                                                        <option value="46">Estúdio Fotográfico no Setor C (INATIVA)</option>
                                                        <option value="73">Estudio fotografico no Setor D (INATIVA)</option>
                                                        <option value="79">Guarda Volume</option>
                                                        <option value="47">Loja 12 (INATIVA)</option>
                                                        <option value="50">Loja 17 (INATIVA)</option>
                                                        <option value="49">Loja 20 (INATIVA)</option>
                                                        <option value="16">Mezanino</option>
                                                        <option value="61">Portão A dos Pavilhões de Feiras</option>
                                                        <option value="62">Portão B dos Pavilhões de Feiras</option>
                                                        <option value="63">Portão C dos Pavilhões de Feiras</option>
                                                        <option value="64">Portão D dos Pavilhões de Feiras</option>
                                                        <option value="65">Portão E dos Pavilhões de Feiras</option>
                                                        <option value="66">Portão F dos Pavilhões de Feiras</option>
                                                        <option value="67">Portão G dos Pavilhões de Feiras</option>
                                                        <option value="68">Portão H dos Pavilhões de Feiras</option>
                                                        <option value="34">Restaurante Tabocas (INATIVA)</option>
                                                        <option value="57">Sala 1 - Taquaritinga do Norte</option>
                                                        <option value="58">Sala 2 - Garanhuns</option>
                                                        <option value="59">Sala 3 - Exu</option>
                                                        <option value="60">Sala 4 - Caruaru</option>
                                                        <option value="74">Sala 5 - São José do Belmonte</option>
                                                        <option value="75">Sala 6 - Arcoverde</option>
                                                        <option value="76">Sala 7 - Petrolândia</option>
                                                        <option value="78">Sala 8 - Petrolina</option>
                                                        <option value="22">Sala A1 (INATIVA)</option>
                                                        <option value="23">Sala A2 (INATIVA)</option>
                                                        <option value="25">Sala A3 (INATIVA)</option>
                                                        <option value="26">Sala A4 (INATIVA)</option>
                                                        <option value="28">Sala A5 (INATIVA)</option>
                                                        <option value="18">Sala B1 (INATIVA)</option>
                                                        <option value="69">Sala b1 - Triunfo</option>
                                                        <option value="21">Sala B2 (INATIVA)</option>
                                                        <option value="70">Sala b2 - Tamandaré</option>
                                                        <option value="24">Sala B3 (INATIVA)</option>
                                                        <option value="71">Sala b3 - Tracunhaém</option>
                                                        <option value="72">Sala b4 - Itamaracá</option>
                                                        <option value="8">Sala C1 (INATIVA)</option>
                                                        <option value="11">Sala C2 (INATIVA)</option>
                                                        <option value="13">Sala C3 (INATIVA)</option>
                                                        <option value="19">Sala C4 (INATIVA)</option>
                                                        <option value="20">Sala C5 (INATIVA)</option>
                                                        <option value="48">Sala de apoio ao Pavilhão de Feiras (INATIVA)</option>
                                                        <option value="116">Sala Floresta</option>
                                                        <option value="84">SALA PARA DEPÓSITO</option>
                                                        <option value="85">Sala Pernambuco</option>
                                                        <option value="27">Sala VIP (INATIVA)</option>
                                                        <option value="9">Setor A (INATIVA)</option>
                                                        <option value="14">Setor A - Em frente ao Mezanino</option>
                                                        <option value="10">Setor B (INATIVA)</option>
                                                        <option value="15">Setor B - Em frente as sala de 1 a 5</option>
                                                        <option value="29">Setor C – Hall do Guararapes</option>
                                                        <option value="17">Setor D – Hall do Teatro Beberibe e Auditórios Brum e Ribeira</option>
                                                        <option value="2">Teatro Beberibe</option>
                                                        <option value="1">Teatro Guararapes Chico Science</option>
                                                        <option value="2">Outros</option>
                                                    </select>
                                                    <label for="floatingSelect">Dependência</label>
                                                </div>
                                                <div class="col-md-6 form-floating mb-2">
                                                    <input type="text" class="form-control" id="floatingInput"
                                                        placeholder="Caução" name="caucao">
                                                    <label for="floatingInput">Caução</label>
                                                </div>
                                            </div>
                                            <fieldset class="row col-sm-4 form-floating mb-2">
                                                <legend class="col-form-label col-sm-2 pt-0">Áreas</legend>
                                                <div class="col-sm-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="situacao"
                                                            id="gridRadios1" value="inativa" checked>
                                                        <label class="form-check-label" for="gridRadios1">
                                                            Inativa
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="situacao"
                                                            id="gridRadios2" value="visualizada">
                                                        <label class="form-check-label" for="gridRadios2">
                                                            Visualizada
                                                        </label>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <div class="row g-3">
                                                <div class="col-md-6 form-floating mb-2">
                                                    <input type="text" class="form-control" id="floatingInput"
                                                        placeholder="Nome">
                                                    <label for="floatingInput">Nome</label>
                                                </div>
                                                <div class="col-md-6 form-floating mb-2">
                                                    <input type="text" class="form-control" id="floatingInput"
                                                        placeholder="Descrição" name="descricao">
                                                    <label for="floatingInput">Descrição</label>
                                                </div>
                                            </div>
                                            <div class="row g-3">
                                                <div class="col-md-3 form-floating mb-2">
                                                    <input type="text" class="form-control" id="floatingInput"
                                                        placeholder="Preço" name="preco">
                                                    <label for="floatingInput">Preço</label>
                                                </div>
                                                <div class="col-md-3 form-floating mb-2">
                                                    <select class="form-select" id="Turno" name="turno"
                                                        aria-label="Floating label select example">
                                                        <option selected>Selecione ...</option>
                                                        <option value="1">Dia</option>
                                                        <option value="2">Noite</option>
                                                        <option value="3">Madrugada</option>
                                                    </select>
                                                    <label for="floatingSelect">Turno</label>
                                                </div>
                                                <div class="col-md-3 form-floating mb-2">
                                                    <input type="text" class="form-control" id="floatingInput"
                                                        placeholder="Qtde" name="quantidade">
                                                    <label for="floatingInput">Qtde</label>
                                                </div>
                                                <div class="col-md-3 form-floating mb-2">
                                                    <select class="form-select" id="inativa" name="inativa"
                                                        aria-label="Floating label select example">
                                                        <option selected>Selecione ...</option>
                                                        <option value="1">Sim</option>
                                                        <option value="2">Não</option>
                                                    </select>
                                                    <label for="floatingSelect">Inativa</label>
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
                        <input class="form-control bg-transparent" type="text" placeholder="Pesquisar cliente">
                        <button type="button" class="btn btn-primary ms-2"><i class="bi bi-search"></i></button>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">
                                    <th scope="col"></th>
                                    <th scope="col">Nome da reserva</th>
                                    <th scope="col">Áreas</th>
                                    <th scope="col">Responsável</th>
                                    <th scope="col">Data reserva</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Gecom</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td>01 Jan 2045</td>
                                    <td>INV-0123</td>
                                    <td>Jhon Doe</td>
                                    <td>$123</td>
                                    <td>Paid</td>
                                    <td>Paid</td>
                                    <td>
                                        <a class="btn btn-sm btn-primary" href=""><i class="bi bi-info-square"></i></a>
                                        <a class="btn btn-sm btn-warning" href=""><i class="bi bi-pencil-square"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>01 Jan 2045</td>
                                    <td>INV-0123</td>
                                    <td>Jhon Doe</td>
                                    <td>$123</td>
                                    <td>Paid</td>
                                    <td>Paid</td>
                                    <td>
                                        <a class="btn btn-sm btn-primary" href=""><i class="bi bi-info-square"></i></a>
                                        <a class="btn btn-sm btn-warning" href=""><i class="bi bi-pencil-square"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>01 Jan 2045</td>
                                    <td>INV-0123</td>
                                    <td>Jhon Doe</td>
                                    <td>$123</td>
                                    <td>Paid</td>
                                    <td>Paid</td>
                                    <td>
                                        <a class="btn btn-sm btn-primary" href=""><i class="bi bi-info-square"></i></a>
                                        <a class="btn btn-sm btn-warning" href=""><i class="bi bi-pencil-square"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>01 Jan 2045</td>
                                    <td>INV-0123</td>
                                    <td>Jhon Doe</td>
                                    <td>$123</td>
                                    <td>Paid</td>
                                    <td>Paid</td>
                                    <td>
                                        <a class="btn btn-sm btn-primary" href=""><i class="bi bi-info-square"></i></a>
                                        <a class="btn btn-sm btn-warning" href=""><i class="bi bi-pencil-square"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>01 Jan 2045</td>
                                    <td>INV-0123</td>
                                    <td>Jhon Doe</td>
                                    <td>$123</td>
                                    <td>Paid</td>
                                    <td>Paid</td>
                                    <td>
                                        <a class="btn btn-sm btn-primary" href=""><i class="bi bi-info-square"></i></a>
                                        <a class="btn btn-sm btn-warning" href=""><i class="bi bi-pencil-square"></i></a>
                                    </td>
                                </tr>
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
    <script src="js/area/area.js"></script>
</body>

</html>