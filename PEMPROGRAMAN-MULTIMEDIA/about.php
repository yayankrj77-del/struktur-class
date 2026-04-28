<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Register - Multimedia Engineering</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&family=Poppins:wght@400;600&family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg-color: #f1d5b9;
            --accent-brown: #a67443;
            --text-dark: #000000;
            --white: #ffffff;
            --input-bg: rgba(255, 255, 255, 0.9);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f1d5b9 0%, #e6c8a8 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .auth-container {
            background: var(--white);
            width: 100%;
            max-width: 450px;
            padding: 40px;
            border-radius: 30px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            border-bottom: 5px solid var(--accent-brown);
            text-align: center;
        }

        .logo-box {
            margin-bottom: 25px;
        }

        .logo-box img {
            width: 60px;
            height: auto;
        }

        h2 {
            font-family: 'Montserrat', sans-serif;
            font-size: 24px;
            color: var(--text-dark);
            margin-bottom: 10px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        p.subtitle {
            font-size: 14px;
            color: #666;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .form-group label {
            display: block;
            font-weight: 600;
            margin-bottom: 8px;
            font-size: 14px;
        }

        .form-group input {
            width: 100%;
            padding: 14px 20px;
            border-radius: 15px;
            border: 2px solid #eee;
            background: var(--input-bg);
            font-family: 'Inter', sans-serif;
            font-size: 15px;
            transition: all 0.3s ease;
        }

        .form-group input:focus {
            outline: none;
            border-color: var(--accent-brown);
            box-shadow: 0 0 0 4px rgba(166, 116, 67, 0.1);
        }

        .btn-auth {
            width: 100%;
            padding: 15px;
            background-color: var(--accent-brown);
            color: white;
            border: none;
            border-radius: 15px;
            font-size: 16px;
            font-weight: 700;
            cursor: pointer;
            transition: transform 0.2s, background 0.3s;
            margin-top: 10px;
        }

        .btn-auth:hover {
            background-color: #8e6238;
            transform: translateY(-2px);
        }

        .switch-mode {
            margin-top: 25px;
            font-size: 14px;
        }

        .switch-mode a {
            color: var(--accent-brown);
            text-decoration: none;
            font-weight: 700;
        }

        .switch-mode a:hover {
            text-decoration: underline;
        }

        /* Dekorasi tambahan ala desain sebelumnya */
        .decor-circle {
            position: fixed;
            width: 300px;
            height: 300px;
            background: rgba(166, 116, 67, 0.1);
            border-radius: 50%;
            z-index: -1;
        }

        .circle-1 { top: -100px; left: -100px; }
        .circle-2 { bottom: -100px; right: -100px; }
    </style>
</head>
<body>

    <div class="decor-circle circle-1"></div>
    <div class="decor-circle circle-2"></div>

    <div class="auth-container">
        <div class="logo-box">
            <img src="asset/logo.png" alt="Logo" onerror="this.src='https://via.placeholder.com/60x60?text=Logo'">
        </div>

        <?php
        // Logika sederhana untuk simulasi pindah halaman via URL parameter ?page=register
        $page = isset($_GET['page']) ? $_GET['page'] : 'login';

        if ($page === 'register') : ?>
            <!-- HALAMAN REGISTER -->
            <h2>Daftar Siswa</h2>
            <p class="subtitle">Buat akun Multimedia Engineering anda</p>
            
            <form action="" method="POST">
                <div class="form-group">
                    <label for="nim">Nomor Induk Mahasiswa (NIM)</label>
                    <input type="text" id="nim" name="nim" placeholder="Masukkan NIM anda" required>
                </div>
                <div class="form-group">
                    <label for="password">Kata Sandi</label>
                    <input type="password" id="password" name="password" placeholder="Buat kata sandi" required>
                </div>
                <button type="submit" class="btn-auth">Daftar Sekarang</button>
            </form>

            <div class="switch-mode">
                Sudah punya akun? <a href="?page=login">Masuk di sini</a>
            </div>

        <?php else : ?>
            <!-- HALAMAN LOGIN -->
            <h2>Masuk Siswa</h2>
            <p class="subtitle">Silahkan masuk ke akun anda</p>
            
            <form action="" method="POST">
                <div class="form-group">
                    <label for="login-nim">NIM</label>
                    <input type="text" id="login-nim" name="nim" placeholder="Masukkan NIM" required>
                </div>
                <div class="form-group">
                    <label for="login-password">Kata Sandi</label>
                    <input type="password" id="login-password" name="password" placeholder="Masukkan kata sandi" required>
                </div>
                <button type="submit" class="btn-auth">Masuk</button>
            </form>

            <div class="switch-mode">
                Belum punya akun? <a href="?page=register">Daftar sekarang</a>
            </div>
        <?php endif; ?>
    </div>

</body>
</html>