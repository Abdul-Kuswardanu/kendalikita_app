<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>KendaliKita</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/custom.css') ?>">
    <style>
        body { background: #F4F6FB; }
        .nav-bottom { position:fixed; bottom:0; left:0; width:100%; z-index:1000; box-shadow:0 -1px 10px #e3e3e3;}
        .appbar {background:linear-gradient(90deg,#0ea5e9,#3b82f6); color:#fff; border-bottom-left-radius: 20px; border-bottom-right-radius:20px; box-shadow:0 2px 8px #aaa;}
        .appbar .navbar-brand { font-size:1.4rem; font-weight:700; letter-spacing:1px;}
        .btn-lg { font-size: 1.1rem; padding: 0.7rem 1.3rem;}
        .card-status { border:none; border-radius:18px; box-shadow:0 3px 24px #d4e5ff60;}
        .card-status .fw-bold { color: #2563eb;}
        .badge-status {font-size:1em; border-radius:8px;}
        .form-label { margin-bottom: .1rem; font-weight: 500; }
        .glass {background:rgba(255,255,255,.88)!important;backdrop-filter:blur(3px);}
        .btn-gradient {background:linear-gradient(90deg,#0ea5e9,#3b82f6);color:#fff;}
        .btn-gradient:hover {background:linear-gradient(90deg,#3b82f6,#0ea5e9);}
        .nav-link.active { color:#3b82f6 !important;}
    </style>
</head>
<body>
<nav class="navbar appbar py-3 px-3 mb-3">
    <span class="navbar-brand d-flex align-items-center">
        <i class="bi bi-sliders2-vertical me-2"></i> KendaliKita
    </span>
</nav>
<div class="container my-2">
