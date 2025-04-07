<?php
if (session_status() === PHP_SESSION_NONE) session_start();
?>
<!DOCTYPE html>
<html lang="fr" data-theme="light">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MySandBox – EPSI Toulouse</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg sticky-top py-3" id="main-navbar">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="index.php">
        <img id="logo" src="assets/logo_light.png" alt="Logo MySandBox" height="40" class="me-2">
        <span class="fw-bold">MySandBox</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarContent">
        <ul class="navbar-nav mb-2 mb-lg-0 gap-2">
          <li class="nav-item">
            <a class="nav-link" href="formulaire.php">Formulaires</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#apropos">À propos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#statuts">Statuts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="description.php">Description</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="status.php">Tous les statuts</a>
          </li>
        </ul>
        <button class="btn btn-outline-violet ms-3" id="toggle-theme">🌙 / ☀️</button>
      </div>
    </div>
  </nav>

  <main class="container my-5">
