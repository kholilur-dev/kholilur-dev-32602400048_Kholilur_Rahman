<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kholilur — Frontend Developer</title>
    <link rel="stylesheet" href="<?= base_url('asset/css/style.css') ?>">
</head>
<body>
    <div class="navbar">
        <div class="navbar-page">
            <ul>
                <li><a href="<?= base_url('/') ?>">Home</a></li>
                <li><a href="<?= base_url('about') ?>">About</a></li>
                <li><a href="<?= base_url('porto') ?>">My Porto</a></li>
                <li><a href="<?= base_url('contact') ?>">Contact</a></li>
            </ul>
        </div>

        <div class="navbar-sosmed">
            <ul>
                <li><a href="https://linkedin.com/in/username-kamu" target="_blank" rel="noopener">LinkedIn</a></li>
                <li><a href="https://instagram.com/username-kamu" target="_blank" rel="noopener">Instagram</a></li>
            </ul>
        </div>
    </div>

    <div class="biodata">
        <img src="<?= base_url('asset/image/kholilur.jpeg') ?>" class="profile-photo" alt="Foto Kholilur">
        <span class="name">
            Kholilur
        </span> <br>
        <span class="Biodata">
            Mahasiswa Teknik Informatika
        </span>
    </div>

    <?= $this->renderSection('content') ?>
</body>
</html>