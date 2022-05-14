<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--DataTable-->
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<nav class="navbar navbar-expand navbar-light bg-faded">
    <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url(); ?>tipoconsulta">TIPO CONSULTA<span
                        class="visually-hidden">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url(); ?>consultas">CONSULTAS<span
                        class="visually-hidden">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>hospitales">HOSPITAL</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">PACIENTES</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <a class="dropdown-item" href="<?php echo base_url(); ?>pacientes">NIÑOS</a>
                    <a class="dropdown-item" href="<?php echo base_url(); ?>pacientes/list_J">JOVENES</a>
                    <a class="dropdown-item" href="<?php echo base_url(); ?>pacientes/list_A">ANCIANOS</a>
                    <a class="dropdown-item" href="<?php echo base_url(); ?>pacientes/list_riesgo">MAYOR RIESGO</a>
                    <a class="dropdown-item" href="<?php echo base_url(); ?>pacientes/list_fum">FUMADORES</a>
                </div>
            </li>
        </ul>

    </div>
</nav>

<body>
    <div class="container">