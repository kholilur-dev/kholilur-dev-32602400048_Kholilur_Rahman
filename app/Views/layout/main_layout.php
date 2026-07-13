<?php
/**
 * @var string $name
 * @var string $nim
 * @var string $major
 * @var string $university
 * @var string $city
 * @var string $bio
 * @var string $email
 * @var array $socials
 * @var string $title
 */
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title) ?></title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', system-ui, sans-serif;
            background: linear-gradient(135deg, #0f172a, #1e293b);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 24px;
        }

        .profile-card {
            background: #ffffff;
            border-radius: 20px;
            max-width: 480px;
            width: 100%;
            padding: 40px 32px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            text-align: center;
            animation: fadeUp 0.6s ease-out;
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(16px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .avatar {
            width: 110px;
            height: 110px;
            border-radius: 50%;
            background: linear-gradient(135deg, #6366f1, #8b5cf6);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 42px;
            font-weight: 700;
            color: #fff;
        }

        .name {
            font-size: 24px;
            font-weight: 700;
            color: #0f172a;
        }

        .nim {
            font-size: 14px;
            color: #6366f1;
            font-weight: 600;
            margin-top: 4px;
        }

        .major {
            font-size: 15px;
            color: #64748b;
            margin-top: 8px;
        }

        .badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: #eef2ff;
            color: #4338ca;
            font-size: 13px;
            font-weight: 600;
            padding: 6px 14px;
            border-radius: 999px;
            margin-top: 16px;
        }

        .bio {
            margin-top: 20px;
            font-size: 14px;
            line-height: 1.6;
            color: #475569;
            text-align: left;
        }

        .info-list {
            margin-top: 24px;
            text-align: left;
            border-top: 1px solid #e2e8f0;
            padding-top: 20px;
        }

        .info-item {
            display: flex;
            justify-content: space-between;
            font-size: 14px;
            padding: 8px 0;
            color: #334155;
        }

        .info-item span:first-child {
            color: #94a3b8;
        }

        .socials {
            display: flex;
            justify-content: center;
            gap: 12px;
            margin-top: 24px;
        }

        .socials a {
            text-decoration: none;
            padding: 8px 16px;
            border-radius: 10px;
            background: #f1f5f9;
            color: #334155;
            font-size: 13px;
            font-weight: 600;
            transition: 0.2s ease;
        }

        .socials a:hover {
            background: #6366f1;
            color: #fff;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>

    <div class="profile-card">
        <div class="avatar"><?= esc(strtoupper(substr($name, 0, 1))) ?></div>

        <div class="name"><?= esc($name) ?></div>
        <div class="nim">NIM: <?= esc($nim) ?></div>
        <div class="major"><?= esc($major) ?> — <?= esc($university) ?></div>

        <div class="badge">📍 <?= esc($city) ?></div>

        <p class="bio"><?= esc($bio) ?></p>

        <div class="info-list">
            <div class="info-item">
                <span>Email</span>
                <span><?= esc($email) ?></span>
            </div>
            <div class="info-item">
                <span>Universitas</span>
                <span><?= esc($university) ?></span>
            </div>
        </div>

        <div class="socials">
            <?php foreach ($socials as $social): ?>
                <a href="<?= esc($social['url']) ?>" target="_blank">
                    <?= esc($social['name']) ?>
                </a>
            <?php endforeach; ?>
        </div>
    </div>

</body>
</html>