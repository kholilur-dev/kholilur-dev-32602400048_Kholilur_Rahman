<?php
/**
 * @var string $title
 * @var array $skills
 */
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title) ?></title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Segoe UI', system-ui, sans-serif;
            background: linear-gradient(135deg, #0f172a, #1e293b);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 24px;
        }

        .skill-card {
            background: #ffffff;
            border-radius: 20px;
            max-width: 480px;
            width: 100%;
            padding: 40px 32px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            animation: fadeUp 0.6s ease-out;
        }

        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(16px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .skill-header {
            text-align: center;
            margin-bottom: 28px;
        }

        .skill-header h1 {
            font-size: 22px;
            color: #0f172a;
            font-weight: 700;
        }

        .skill-header p {
            font-size: 13px;
            color: #94a3b8;
            margin-top: 6px;
        }

        .skill-item { margin-bottom: 20px; }

        .skill-item:last-child { margin-bottom: 0; }

        .skill-label {
            display: flex;
            justify-content: space-between;
            font-size: 14px;
            font-weight: 600;
            color: #334155;
            margin-bottom: 8px;
        }

        .skill-label span:last-child { color: #6366f1; }

        .skill-bar-bg {
            background: #f1f5f9;
            border-radius: 999px;
            height: 10px;
            overflow: hidden;
        }

        .skill-bar-fill {
            height: 100%;
            border-radius: 999px;
            background: linear-gradient(90deg, #6366f1, #8b5cf6);
            width: 0%;
            transition: width 1s ease-out;
        }

        .back-link {
            display: block;
            text-align: center;
            margin-top: 28px;
            font-size: 13px;
            color: #94a3b8;
            text-decoration: none;
        }

        .back-link:hover { color: #6366f1; }
    </style>
</head>
<body>

    <div class="skill-card">
        <div class="skill-header">
            <h1>💡 <?= esc($title) ?></h1>
            <p>Kemampuan teknis yang sedang saya kembangkan</p>
        </div>

        <?php foreach ($skills as $skill): ?>
            <div class="skill-item">
                <div class="skill-label">
                    <span><?= esc($skill['name']) ?></span>
                    <span><?= esc((string) $skill['level']) ?>%</span>
                </div>
                <div class="skill-bar-bg">
                    <div class="skill-bar-fill" data-level="<?= esc((string) $skill['level']) ?>"></div>
                </div>
            </div>
        <?php endforeach; ?>

        <a href="/profile" class="back-link">← Kembali ke Profile</a>
    </div>

    <script>
        // Animasi progress bar setelah halaman selesai load
        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('.skill-bar-fill').forEach(bar => {
                const level = bar.dataset.level;
                setTimeout(() => {
                    bar.style.width = level + '%';
                }, 100);
            });
        });
    </script>
</body>
</html>