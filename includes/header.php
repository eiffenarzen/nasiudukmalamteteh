<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= e($site['nama']) ?> | <?= e($site['tagline']) ?></title>
    <meta name="description" content="<?= e($site['tentang']) ?>">
    <link rel="icon" type="image/png" href="assets/img/logo.png">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header class="topbar">
    <a class="brand" href="#beranda">
        <img src="assets/img/logo.png" alt="Logo <?= e($site['nama']) ?>" width="40" height="40">
        <span><?= e($site['nama']) ?></span>
    </a>
    <nav>
        <a href="#tentang">Tentang</a>
        <a href="#menu">Menu</a>
        <a href="#pesan">Cara Pesan</a>
        <a href="#info">Info</a>
    </nav>
</header>
