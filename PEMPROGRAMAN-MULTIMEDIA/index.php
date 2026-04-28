<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multimedia Engineering</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,wght@0,300;0,700;0,900;1,300&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">

    <style>
        :root {
            --cream:    #f5ede0;
            --sand:     #e8d5bc;
            --caramel:  #c49a6c;
            --brown:    #8b5e35;
            --dark:     #1a1008;
            --white:    #ffffff;
            --radius-sm: 12px;
            --radius-md: 24px;
            --radius-lg: 40px;
            --shadow:   0 20px 60px rgba(26,16,8,0.12);
            --transition: 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        html { scroll-behavior: smooth; }
        body { font-family: 'DM Sans', sans-serif; background-color: var(--cream); color: var(--dark); overflow-x: hidden; }

        body::before {
            content: '';
            position: fixed;
            inset: 0;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
            pointer-events: none;
            z-index: 9999;
            opacity: 0.4;
        }

        header {
            position: fixed; top: 0; left: 0; right: 0; z-index: 1000;
            display: flex; align-items: center; justify-content: space-between;
            padding: 18px 60px;
            background: rgba(245, 237, 224, 0.85);
            backdrop-filter: blur(20px); -webkit-backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(139,94,53,0.15);
        }
        .logo-top img { width: 42px; height: 42px; object-fit: contain; border-radius: 10px; }
        nav { display: flex; gap: 8px; background: var(--brown); padding: 8px 16px; border-radius: 100px; }
        nav a { text-decoration: none; color: var(--sand); font-weight: 400; font-size: 13px; letter-spacing: 0.02em; padding: 6px 16px; border-radius: 100px; transition: var(--transition); }
        nav a:hover, nav a.active { background: var(--caramel); color: var(--white); }

        #home { min-height: 100vh; display: grid; grid-template-columns: 1fr 1fr; align-items: center; padding: 100px 60px 60px; gap: 60px; position: relative; overflow: hidden; }
        #home::after { content: ''; position: absolute; right: -100px; top: 50%; transform: translateY(-50%); width: 600px; height: 600px; background: radial-gradient(circle, var(--caramel) 0%, transparent 70%); opacity: 0.25; pointer-events: none; }
        .hero-text { z-index: 1; }
        .hero-tag { display: inline-block; background: var(--brown); color: var(--sand); font-size: 11px; letter-spacing: 0.15em; text-transform: uppercase; padding: 6px 16px; border-radius: 100px; margin-bottom: 28px; }
        .hero-text h1 { font-family: 'Fraunces', serif; font-weight: 900; font-size: clamp(48px, 6vw, 88px); line-height: 0.95; text-transform: uppercase; letter-spacing: -3px; color: var(--dark); margin-bottom: 36px; }
        .hero-text h1 em { font-style: italic; color: var(--brown); }
        .description-box { background: var(--brown); padding: 28px 32px; border-radius: var(--radius-md); max-width: 480px; box-shadow: 0 24px 48px rgba(26,16,8,0.16); }
        .description-box p { color: var(--sand); font-size: 15px; line-height: 1.7; font-weight: 300;  }
        .hero-image-wrap { display: flex; justify-content: center; align-items: center; z-index: 1; }
       .hero-image-frame {
    width: 360px;
    height: 420px;
    background: transparent; /* HAPUS WARNA */
    border-radius: var(--radius-lg);
    overflow: hidden;
    box-shadow: none; /* opsional: biar bersih */
    border: none;     /* opsional */
    display: flex;
    justify-content: center;
    align-items: center;
}.hero-image-frame img {
    width: 100%;
    height: 100%;
    object-fit: contain; /* biar gak ke-crop */
}
        section { padding: 100px 60px; }
        .section-label { display: inline-block; font-size: 11px; letter-spacing: 0.15em; text-transform: uppercase; color: var(--brown); margin-bottom: 20px; font-weight: 500; }
        .section-heading { font-family: 'Fraunces', serif; font-size: clamp(36px, 5vw, 64px); font-weight: 700; line-height: 1.05; margin-bottom: 60px; }
/* ===== ANIMASI HERO ===== */

/* awal hidden */
.hero-text,
.hero-image-frame {
    opacity: 0;
    transform: translateY(40px);
}

/* aktif */
.hero-text.show {
    opacity: 1;
    transform: translateY(0);
    transition: all 0.8s ease;
}

.hero-image-frame.show {
    opacity: 1;
    transform: translateY(0) scale(1);
    transition: all 0.9s ease;
}

/* efek hover halus */
.hero-image-frame {
    transition: transform 0.5s ease, box-shadow 0.5s ease;
}

.hero-image-frame:hover {
    transform: scale(1.03) rotate(-1deg);
    box-shadow: 0 30px 70px rgba(26,16,8,0.25);
}

/* animasi tulisan muncul bertahap */
.hero-text h1 span {
    display: inline-block;
    opacity: 0;
    transform: translateY(20px);
}
        #tentang { background: var(--dark); color: var(--cream); }
        #tentang .section-label { color: var(--caramel); }
        #tentang .section-heading { color: var(--cream); }
        .about-layout { display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: start; }
        .about-text p { font-size: 16px; line-height: 1.8; color: rgba(245,237,224,0.75); font-weight: 300; margin-bottom: 20px; }
        .about-stats { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }
        .stat-card { background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.08); border-radius: var(--radius-md); padding: 28px; transition: var(--transition); }
        .stat-card:hover { background: rgba(196,154,108,0.15); border-color: var(--caramel); }
        .stat-num { font-family: 'Fraunces', serif; font-size: 52px; font-weight: 900; color: var(--caramel); line-height: 1; margin-bottom: 8px; }
        .stat-label { font-size: 13px; color: rgba(245,237,224,0.5); letter-spacing: 0.05em; }

        #struktur { background: var(--cream); }
        .struktur-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 24px; }
        .struktur-card { background: var(--white); border-radius: var(--radius-md); overflow: hidden; box-shadow: 0 4px 20px rgba(26,16,8,0.08); transition: var(--transition); border: 1px solid rgba(139,94,53,0.1); }
        .struktur-card:hover { transform: translateY(-8px); box-shadow: 0 24px 48px rgba(26,16,8,0.16); }
        .struktur-img { width: 100%; aspect-ratio: 1; background: var(--sand); overflow: hidden; display: flex; justify-content: center; align-items: center; }
        .struktur-img img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s ease; }
        .struktur-card:hover .struktur-img img { transform: scale(1.06); }
        .struktur-info { padding: 20px 22px; }
        .struktur-role { font-size: 11px; letter-spacing: 0.1em; text-transform: uppercase; color: var(--brown); margin-bottom: 6px; }
        .struktur-name { font-family: 'Fraunces', serif; font-size: 20px; font-weight: 700; color: var(--dark); }

        /* ANGGOTA */
        #anggota { background: var(--sand); }
        .anggota-grid { display: grid; grid-template-columns: repeat(5, 1fr); gap: 16px; }
        .anggota-card { background: var(--white); border-radius: var(--radius-md); overflow: hidden; box-shadow: 0 4px 16px rgba(26,16,8,0.07); transition: var(--transition); border: 1px solid rgba(139,94,53,0.1); }
        .anggota-card:hover { transform: translateY(-6px); box-shadow: 0 16px 40px rgba(26,16,8,0.14); }
        .anggota-img { width: 100%; aspect-ratio: 1; background: var(--sand); overflow: hidden; }
        .anggota-img img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease; display: block; }
        .anggota-card:hover .anggota-img img { transform: scale(1.08); }
        .anggota-info { padding: 14px 16px 18px; }
        .anggota-info p { font-weight: 500; font-size: 14px; color: var(--dark); margin-bottom: 3px; }
        .anggota-info span { font-size: 11px; color: var(--brown); letter-spacing: 0.05em; }

        #galery { background: var(--dark); color: var(--cream); }
        #galery .section-label { color: var(--caramel); }
        #galery .section-heading { color: var(--cream); }
        .galery-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 24px; }
        .galery-card { position: relative; border-radius: var(--radius-md); overflow: hidden; aspect-ratio: 4/3; cursor: pointer; }
        .galery-card img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s ease; display: block; }
        .galery-card:hover img { transform: scale(1.06); }
        .galery-overlay { position: absolute; inset: 0; background: linear-gradient(to top, rgba(26,16,8,0.85) 0%, transparent 60%); display: flex; align-items: flex-end; padding: 28px; opacity: 0; transition: var(--transition); }
        .galery-card:hover .galery-overlay { opacity: 1; }
        .galery-overlay-name { font-family: 'Fraunces', serif; font-size: 26px; color: var(--cream); font-weight: 700; }

        #jadwal { background: var(--cream); }
        .jadwal-grid { display: grid; grid-template-columns: repeat(5, 1fr); gap: 16px; }
        .jadwal-col { display: flex; flex-direction: column; gap: 12px; }
        .hari-badge { background: var(--brown); color: var(--cream); font-size: 12px; font-weight: 500; letter-spacing: 0.08em; text-transform: uppercase; padding: 8px 16px; border-radius: 100px; text-align: center; }
        .jadwal-card { background: var(--white); border-radius: var(--radius-md); padding: 24px 20px; min-height: 200px; box-shadow: 0 4px 20px rgba(26,16,8,0.07); border: 1px solid rgba(139,94,53,0.1); display: flex; flex-direction: column; gap: 16px; transition: var(--transition); }
        .jadwal-card:hover { transform: translateY(-4px); border-color: var(--caramel); box-shadow: 0 12px 36px rgba(26,16,8,0.13); }
        .jadwal-mata { background: var(--sand); border-radius: var(--radius-sm); padding: 12px 14px; }
        .jadwal-mata-name { font-weight: 500; font-size: 13px; color: var(--dark); margin-bottom: 4px; }
        .jadwal-mata-time { font-size: 11px; color: var(--brown); }
        .jadwal-kosong { color: rgba(26,16,8,0.25); font-size: 13px; font-style: italic; text-align: center; margin: auto; }

        footer { background: var(--dark); color: var(--cream); padding: 40px 60px; display: flex; justify-content: space-between; align-items: center; border-top: 1px solid rgba(255,255,255,0.06); }
        .footer-brand { font-family: 'Fraunces', serif; font-size: 22px; font-weight: 700; }
        .footer-note { font-size: 13px; color: rgba(245,237,224,0.4); }

        .reveal { opacity: 0; transform: translateY(30px); transition: opacity 0.7s ease, transform 0.7s ease; }
        .reveal.visible { opacity: 1; transform: translateY(0); }

        @media (max-width: 1100px) {
            .anggota-grid { grid-template-columns: repeat(4, 1fr); }
            .struktur-grid { grid-template-columns: repeat(2, 1fr); }
        }
        @media (max-width: 900px) {
            header { padding: 16px 30px; }
            nav { display: none; }
            section { padding: 80px 30px; }
            #home { grid-template-columns: 1fr; padding: 120px 30px 60px; text-align: center; }
            .hero-image-wrap { order: -1; }
            .hero-image-frame { width: 260px; height: 300px; margin: 0 auto; }
            .description-box { margin: 0 auto; }
            .about-layout { grid-template-columns: 1fr; }
            .galery-grid { grid-template-columns: 1fr; }
            .jadwal-grid { grid-template-columns: repeat(3, 1fr); }
            .anggota-grid { grid-template-columns: repeat(3, 1fr); }
            footer { flex-direction: column; gap: 12px; text-align: center; }
        }
        @media (max-width: 600px) {
            .struktur-grid { grid-template-columns: 1fr; }
            .anggota-grid { grid-template-columns: repeat(2, 1fr); }
            .jadwal-grid { grid-template-columns: 1fr; }
            .about-stats { grid-template-columns: 1fr; }
        }
        /* ===== MODAL ===== */
.modal {
    display: none;
    position: fixed;
    z-index: 99999;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.6);
    justify-content: center;
    align-items: center;
}

.modal-content {
    background: var(--white);
    padding: 24px;
    border-radius: var(--radius-md);
    width: 320px;
    text-align: center;
    position: relative;
    animation: pop .3s ease;
}

.modal-content img {
    width: 120px;
    height: 120px;
    object-fit: cover;
    border-radius: 50%;
    margin-bottom: 12px;
}

.close-btn {
    position: absolute;
    right: 14px;
    top: 10px;
    font-size: 22px;
    cursor: pointer;
}

@keyframes pop {
    from { transform: scale(0.8); opacity: 0; }
    to { transform: scale(1); opacity: 1; }
}
/* ===== GALERI MODAL ===== */
.galeri-modal {
    display: none;
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,0.65);
    z-index: 99999;
    justify-content: center;
    align-items: center;
}

.galeri-modal-content {
    width: 80%;
    max-width: 900px;
    background: var(--white);
    border-radius: var(--radius-md);
    padding: 24px;
    animation: pop .25s ease;
    position: relative;
}

.galeri-close {
    position: absolute;
    right: 16px;
    top: 10px;
    font-size: 26px;
    cursor: pointer;
}

.galeri-body {
    display: flex;
    gap: 20px;
    align-items: center;
}

.galeri-img {
    flex: 1;
}

.galeri-img img {
    width: 100%;
    border-radius: var(--radius-sm);
    object-fit: cover;
}

.galeri-text {
    flex: 1;
}

.galeri-text h2 {
    font-family: 'Fraunces', serif;
    margin-bottom: 10px;
}

.g-desc {
    margin-top: 10px;
    line-height: 1.6;
    color: #333;
}

@media (max-width: 768px) {
    .galeri-body {
        flex-direction: column;
    }
}
    </style>
</head>
<body>

    <!-- ====== HEADER ====== -->
    <header>
        <div class="logo-top">
            <img src="asset/logo.png" alt="Logo" onerror="this.style.display='none'">
        </div>
        <nav>
            <a href="#home" class="active">Home</a>
            <a href="#tentang">Tentang</a>
            <a href="#struktur">Struktur</a>
            <a href="#anggota">Anggota</a>
            <a href="#galery">Galeri</a>
            <a href="#jadwal">Jadwal</a>
        </nav>
    </header>

    <!-- ====== HOME ====== -->
    <section id="home">
        <div class="hero-text">
            <span class="hero-tag">Kelas · 2024/2025</span>
            <h1>Multi<br><em>media</em><br>Engi<br>neering</h1>
            <div class="description-box">
                <p>Struktur Kelas adalah sebuah website yang dirancang untuk memberikan pengalaman berbeda dalam melihat dan memahami susunan kelas. Website ini menyajikan informasi struktur kelas secara lebih interaktif, visual, dan mudah dipahami.</p>
            </div>
        </div>
        <div class="hero-image-wrap">
            <div class="hero-image-frame">
                <img src="asset/logo.png" alt="Hero Image" onerror="this.src='https://placehold.co/360x420/e8d5bc/8b5e35?text=ME'">
            </div>
        </div>
    </section>

    <!-- ====== TENTANG ====== -->
    <section id="tentang">
        <span class="section-label reveal">01 — Tentang</span>
        <h2 class="section-heading reveal">About<br>Multimedia<br>Engineering</h2>
        <h1>
</h1>
        <div class="about-layout">
            <div class="about-text reveal">
                <p>Multimedia Engineering adalah bidang yang menggabungkan teknologi, desain, dan kreativitas untuk menciptakan karya digital seperti website, animasi, video, dan desain grafis.</p>
                <p>Dalam kelas ini, setiap anggota belajar berpikir kreatif, menguasai keterampilan teknis, serta bekerja sama menghasilkan karya yang inovatif dan berdampak nyata.</p>
                <p>Website ini menjadi media informasi dan representasi aktivitas kelas Multimedia Engineering — menjangkau siapa pun yang ingin mengenal kami lebih dekat.</p>
            </div>
            <div class="about-stats reveal">
                <div class="stat-card"><div class="stat-num">29</div><div class="stat-label">Total Anggota Kelas</div></div>
                <div class="stat-card"><div class="stat-num">4</div><div class="stat-label">Mata Kuliah Aktif</div></div>
                <div class="stat-card"><div class="stat-num">4</div><div class="stat-label">Karya Ditampilkan</div></div>
                <div class="stat-card"><div class="stat-num">5</div><div class="stat-label">Hari Perkuliahan</div></div>
            </div>
        </div>
    </section>

    <!-- ====== STRUKTUR KELAS ====== -->
    <section id="struktur">
        <span class="section-label reveal">02 — Organisasi</span>
        <h2 class="section-heading reveal">Struktur<br>Kelas</h2>
        <div class="struktur-grid">
            <div class="struktur-card reveal" 
                onclick="openModal('asset/komti.PNG','Fadhel Muhammad Sahari','4A','Komti','2024 - 2026')">
                <div class="struktur-img"><img src="asset/komti.PNG" alt="Komti" onerror="this.src='https://placehold.co/400x400/e8d5bc/8b5e35?text=Komti'"></div>
                <div class="struktur-info"><p class="struktur-role">Fadhel M.S</p><p class="struktur-name">Komti</p></div>
            </div>
            <div class="struktur-card reveal" 
onclick="openModal('asset/wakil-komti.PNG','Muhammad Maulana Ripqi','4A','Wakil Komti','2024 - 2026')">
                
                <div class="struktur-img"><img src="asset/wakil-komti.PNG" alt="Wakil Komti" onerror="this.src='https://placehold.co/400x400/e8d5bc/8b5e35?text=Wakil'"></div>
                <div class="struktur-info"><p class="struktur-role">M.Maulana R</p><p class="struktur-name">Wakil Komti</p></div>
            </div>
           <div class="struktur-card reveal" 
onclick="openModal('asset/sekretaris.PNG','Hrizka Adhana','4A','Sekretaris','2024 - 2026')">
                <div class="struktur-img"><img src="asset/sekretaris.PNG" alt="Sekretaris" onerror="this.src='https://placehold.co/400x400/e8d5bc/8b5e35?text=Sekre'"></div>
                <div class="struktur-info"><p class="struktur-role">Hrizka A</p><p class="struktur-name">Sekretaris</p></div>
            </div>
             <div class="struktur-card reveal" 
                onclick="openModal('asset/bendahara.PNG','Dwi Arsih Arani','4A','Bendahara','2024 - 2026')">
                <div class="struktur-img"><img src="asset/bendahara.PNG" alt="Bendahara" onerror="this.src='https://placehold.co/400x400/e8d5bc/8b5e35?text=Bendahara'"></div>
                <div class="struktur-info"><p class="struktur-role">Dwi A.A</p><p class="struktur-name">Bendahara</p></div>
            </div>
        </div>
    </section>
    <!-- ===== MODAL POPUP STRUKTUR ===== -->
<div id="strukturModal" class="modal">
    <div class="modal-content">
        <span class="close-btn" onclick="closeModal()">&times;</span>

        <img id="modalImg" src="" alt="Foto">

        <h2 id="modalName">Nama</h2>
        <p id="modalClass">Kelas: -</p>
        <p id="modalRole">Jabatan: -</p>
        <p id="modalPeriod">Masa Jabatan: -</p>
    </div>
</div>

    <!-- ====== ANGGOTA ====== -->
    <section id="anggota">
        <span class="section-label reveal">03 — Tim</span>
        <h2 class="section-heading reveal">Anggota<br>Kelas</h2>
        <div class="anggota-grid">

            <!-- Anggota 1 — ganti src, nama, dan jabatan -->
            <div class="anggota-card reveal">
                <div class="anggota-img"><img src="asset/user-men.PNG" alt="Anggota 1" onerror="this.src='https://placehold.co/300x300/e8d5bc/8b5e35?text=A1'"></div>
                <div class="anggota-info"><p>Azim</p><span>4202404001</span></div>
            </div>

            <!-- Anggota 2 -->
            <div class="anggota-card reveal">
                <div class="anggota-img"><img src="asset/user-women.PNG" alt="Anggota 2" onerror="this.src='https://placehold.co/300x300/e8d5bc/8b5e35?text=A2'"></div>
                <div class="anggota-info"><p>Adinda Ikhfani</p><span>4202404002</span></div>
            </div>

            <!-- Anggota 3 -->
            <div class="anggota-card reveal">
                <div class="anggota-img"><img src="asset/user-women.PNG" alt="Anggota 3" onerror="this.src='https://placehold.co/300x300/e8d5bc/8b5e35?text=A3'"></div>
                <div class="anggota-info"><p>Maulia Arsya Nanda</p><span>4202404003</span></div>
            </div>

            <!-- Anggota 4 -->
            <div class="anggota-card reveal">
                <div class="anggota-img"><img src="asset/user-women.PNG" alt="Anggota 4" onerror="this.src='https://placehold.co/300x300/e8d5bc/8b5e35?text=A4'"></div>
                <div class="anggota-info"><p>Tasa</p><span>4202404004</span></div>
            </div>

            <!-- Anggota 5 -->
            <div class="anggota-card reveal">
                <div class="anggota-img"><img src="asset/user-women.PNG" alt="Anggota 5" onerror="this.src='https://placehold.co/300x300/e8d5bc/8b5e35?text=A5'"></div>
                <div class="anggota-info"><p>Nisa</p><span>4202404006</span></div>
            </div>

            <!-- Anggota 6 -->
            <div class="anggota-card reveal">
                <div class="anggota-img"><img src="asset/user-women.PNG" alt="Anggota 6" onerror="this.src='https://placehold.co/300x300/e8d5bc/8b5e35?text=A6'"></div>
                <div class="anggota-info"><p>Aisah</p><span>4202404007</span></div>
            </div>

            <!-- Anggota 7 -->
            <div class="anggota-card reveal">
                <div class="anggota-img"><img src="asset/user-men.PNG" alt="Anggota 7" onerror="this.src='https://placehold.co/300x300/e8d5bc/8b5e35?text=A7'"></div>
                <div class="anggota-info"><p>Febri Setiawan</p><span>4202404022</span></div>
            </div>

            <!-- Anggota 8 -->
            <div class="anggota-card reveal">
                <div class="anggota-img"><img src="asset/user-men.PNG" alt="Anggota 8" onerror="this.src='https://placehold.co/300x300/e8d5bc/8b5e35?text=A8'"></div>
                <div class="anggota-info"><p>Riyan Adiat</p><span>4202404025</span></div>
            </div>

            <!-- Anggota 9 -->
            <div class="anggota-card reveal">
                <div class="anggota-img"><img src="asset/user-women.PNG" alt="Anggota 9" onerror="this.src='https://placehold.co/300x300/e8d5bc/8b5e35?text=A9'"></div>
                <div class="anggota-info"><p>Ayu Selvia Prihatini</p><span>4202404026</span></div>
            </div>

            <!-- Anggota 10 -->
            <div class="anggota-card reveal">
                <div class="anggota-img"><img src="asset/user-men.PNG" alt="Anggota 10" onerror="this.src='https://placehold.co/300x300/e8d5bc/8b5e35?text=A10'"></div>
                <div class="anggota-info"><p>Tio</p><span>4202404027</span></div>
            </div>

            <!-- Anggota 11 -->
            <div class="anggota-card reveal">
                <div class="anggota-img"><img src="asset/user-women.PNG" alt="Anggota 11" onerror="this.src='https://placehold.co/300x300/e8d5bc/8b5e35?text=A11'"></div>
                <div class="anggota-info"><p>Nurul Hidayah</p><span>420240400328</span></div>
            </div>

            <!-- Anggota 12 -->
            <div class="anggota-card reveal">
                <div class="anggota-img"><img src="asset/user-women.PNG" alt="Anggota 12" onerror="this.src='https://placehold.co/300x300/e8d5bc/8b5e35?text=A12'"></div>
                <div class="anggota-info"><p>Tasya Paloh</p><span>4202404029</span></div>
            </div>

            <!-- Anggota 13 -->
            <div class="anggota-card reveal">
                <div class="anggota-img"><img src="asset/user-men.PNG" alt="Anggota 13" onerror="this.src='https://placehold.co/300x300/e8d5bc/8b5e35?text=A13'"></div>
                <div class="anggota-info"><p>Dedi Satriadi</p><span>4202404030</span></div>
            </div>

            <!-- Anggota 14 -->
            <div class="anggota-card reveal">
                <div class="anggota-img"><img src="asset/user-men.PNG" alt="Anggota 14" onerror="this.src='https://placehold.co/300x300/e8d5bc/8b5e35?text=A14'"></div>
                <div class="anggota-info"><p>Ali Sadikin</p><span>4202404031</span></div>
            </div>

            <!-- Anggota 15 -->
            <div class="anggota-card reveal">
                <div class="anggota-img"><img src="asset/user-men.PNG" alt="Anggota 15" onerror="this.src='https://placehold.co/300x300/e8d5bc/8b5e35?text=A15'"></div>
                <div class="anggota-info"><p>Rangga</p><span>4202404032</span></div>
            </div>

            <!-- Anggota 16 -->
            <div class="anggota-card reveal">
                <div class="anggota-img"><img src="asset/user-women.PNG" alt="Anggota 16" onerror="this.src='https://placehold.co/300x300/e8d5bc/8b5e35?text=A16'"></div>
                <div class="anggota-info"><p>Rizti Andini</p><span>4202404033</span></div>
            </div>

            <!-- Anggota 17 -->
            <div class="anggota-card reveal">
                <div class="anggota-img"><img src="asset/user-women.PNG" alt="Anggota 17" onerror="this.src='https://placehold.co/300x300/e8d5bc/8b5e35?text=A17'"></div>
                <div class="anggota-info"><p>Nadya Rahmadani</p><span>4202404034</span></div>
            </div>

            <!-- Anggota 18 -->
            <div class="anggota-card reveal">
                <div class="anggota-img"><img src="asset/user-men.PNG" alt="Anggota 18" onerror="this.src='https://placehold.co/300x300/e8d5bc/8b5e35?text=A18'"></div>
                <div class="anggota-info"><p>Ablinagil</p><span>4202404062</span></div>
            </div>

            <!-- Anggota 19 -->
            <div class="anggota-card reveal">
                <div class="anggota-img"><img src="asset/user-men.PNG" alt="Anggota 19" onerror="this.src='https://placehold.co/300x300/e8d5bc/8b5e35?text=A19'"></div>
                <div class="anggota-info"><p>Arief Rachman Hawari</p><span>4202404063</span></div>
            </div>

            <!-- Anggota 20 -->
            <div class="anggota-card reveal">
                <div class="anggota-img"><img src="asset/user-men.PNG" alt="Anggota 20" onerror="this.src='https://placehold.co/300x300/e8d5bc/8b5e35?text=A20'"></div>
                <div class="anggota-info"><p>Raja Adyes Ghufranuttamam</p><span>4202404064</span></div>
            </div>

            <!-- Anggota 21 -->
            <div class="anggota-card reveal">
                <div class="anggota-img"><img src="asset/user-men.PNG" alt="Anggota 21" onerror="this.src='https://placehold.co/300x300/e8d5bc/8b5e35?text=A21'"></div>
                <div class="anggota-info"><p>Syahrul Rahmadan</p><span>4202404065</span></div>
            </div>

            <!-- Anggota 22 -->
            <div class="anggota-card reveal">
                <div class="anggota-img"><img src="asset/user-men.PNG" alt="Anggota 22" onerror="this.src='https://placehold.co/300x300/e8d5bc/8b5e35?text=A22'"></div>
                <div class="anggota-info"><p>Yayan</p><span>4202404080</span></div>
            </div>

            <!-- Anggota 23 -->
            <div class="anggota-card reveal">
                <div class="anggota-img"><img src="asset/user-women.PNG" alt="Anggota 23" onerror="this.src='https://placehold.co/300x300/e8d5bc/8b5e35?text=A23'"></div>
                <div class="anggota-info"><p>Helena Agustina</p><span>4202404081</span></div>
            </div>

            <!-- Anggota 24 -->
            <div class="anggota-card reveal">
                <div class="anggota-img"><img src="asset/user-men.PNG" alt="Anggota 24" onerror="this.src='https://placehold.co/300x300/e8d5bc/8b5e35?text=A24'"></div>
                <div class="anggota-info"><p>Musni</p><span>4202404082</span></div>
            </div>

            <!-- Anggota 25 -->
            <div class="anggota-card reveal">
                <div class="anggota-img"><img src="asset/user-men.PNG" alt="Anggota 25" onerror="this.src='https://placehold.co/300x300/e8d5bc/8b5e35?text=A25'"></div>
                <div class="anggota-info"><p>Rendi</p><span>4202404083</span></div>
            </div>

        </div>
    </section>

    <!-- ====== GALERI KARYA ====== -->
    <section id="galery">
        <span class="section-label reveal">04 — Showcase</span>
        <h2 class="section-heading reveal">Galeri<br>Karya</h2>
        
        <div class="galery-grid">
                            <div class="galery-card reveal"
                onclick="openGaleri(
                'asset/karya4.jpeg',
                'Modeling 3D Character',
                'Raja Adyes.G',
                '3D Modeling',
                'Karya ini dibuat menggunakan Blender untuk membuat model karakter 3D dengan detail high-poly dan tekstur realistis.'
                )">
                                <img src="asset/karya4.jpeg" alt="Karya 1" onerror="this.src='https://placehold.co/800x600/c49a6c/ffffff?text=Modeling+3D'">
                <div class="galery-overlay"><p class="galery-overlay-name">Modeling 3D</p></div>
            </div>
                    <div class="galery-card reveal"
onclick="openGaleri(
'asset/karya1.jpeg',
'Modeling 3D Character',
'Musni',
'3D Modeling',
'Karya ini dibuat menggunakan Blender untuk membuat model karakter 3D dengan detail high-poly dan tekstur realistis.'
)">
       
                <img src="asset/karya1.jpeg" alt="Karya 2" onerror="this.src='https://placehold.co/800x600/8b5e35/ffffff?text=Modeling+3D'">
                <div class="galery-overlay"><p class="galery-overlay-name">Modeling 3D</p></div>
            </div>
                      <div class="galery-card reveal"
onclick="openGaleri(
'asset/karya2.jpeg',
'Sketsa 2D',
'Tasya Paloh',
'Sketsa 2D',
'Karya ini dibuat menggunakan Pencil dan juga krayon dikertas gambar untuk membuat model sketsa kartun kuda.'
)">
       
                <img src="asset/karya2.jpeg" alt="Karya 3" onerror="this.src='https://placehold.co/800x600/c49a6c/ffffff?text=Sketsa+2D'">
                <div class="galery-overlay"><p class="galery-overlay-name">Sketsa 2D</p></div>
            </div>
                   <div class="galery-card reveal"
onclick="openGaleri(
'asset/karya3.JPEG',
'Poster 2D',
'Riyan Adiat',
'Poster 2D',
'Karya ini dibuat menggunakan Adobe Photoshop untuk membuat model poster dengan memadukan warna-warna yang menarik.'
)">
       
                <img src="asset/karya3.JPEG" alt="Karya 4" onerror="this.src='https://placehold.co/800x600/8b5e35/ffffff?text=Poster+2D'">
                <div class="galery-overlay"><p class="galery-overlay-name">Poster 2D</p></div>
            </div>
        </div>
    </section>
    <!-- ===== MODAL GALERI ===== -->
<div id="galeriModal" class="galeri-modal">
    <div class="galeri-modal-content">

        <span class="galeri-close" onclick="closeGaleri()">&times;</span>

        <div class="galeri-body">

            <!-- FOTO -->
            <div class="galeri-img">
                <img id="gImg" src="" alt="">
            </div>

            <!-- TEKS -->
            <div class="galeri-text">
                <h2 id="gTitle">Judul Karya</h2>

                <p><b>Pembuat:</b> <span id="gAuthor"></span></p>
                <p><b>Jenis:</b> <span id="gType"></span></p>

                <p class="g-desc" id="gDesc"></p>
            </div>

        </div>
    </div>
</div>
    <!-- ====== JADWAL ====== -->
    <section id="jadwal">
        <span class="section-label reveal">05 — Akademik</span>
        <h2 class="section-heading reveal">Jadwal<br>Perkuliahan</h2>
        <div class="jadwal-grid">
            <div class="jadwal-col reveal">
                <div class="hari-badge">Senin</div>
                <div class="jadwal-card">
                    <div class="jadwal-mata"><p class="jadwal-mata-name">Special Effet Animation</p><p class="jadwal-mata-time">07.30 – 11.30</p></div>
                    <div class="jadwal-mata"><p class="jadwal-mata-name">3D Modeling</p><p class="jadwal-mata-time">12.30 – 17.45</p></div>
                </div>
            </div>
            <div class="jadwal-col reveal">
                <div class="hari-badge">Selasa</div>
                <div class="jadwal-card">
                    <div class="jadwal-mata"><p class="jadwal-mata-name">Statistik</p><p class="jadwal-mata-time">07.30 – 10.30</p></div>
                    <div class="jadwal-mata"><p class="jadwal-mata-name">Desain Grafis Internet dan Web</p><p class="jadwal-mata-time">12.30 – 16.15</p></div>
                </div>
            </div>
            <div class="jadwal-col reveal">
                <div class="hari-badge">Rabu</div>
                <div class="jadwal-card">
                    <div class="jadwal-mata"><p class="jadwal-mata-name">Pemprograman Multimedia</p><p class="jadwal-mata-time">07.30 – 11.15</p></div>
                </div>
            </div>
            <div class="jadwal-col reveal">
                <div class="hari-badge">Kamis</div>
                <div class="jadwal-card"><p class="jadwal-kosong">Tidak ada kelas</p></div>
            </div>
            <div class="jadwal-col reveal">
                <div class="hari-badge">Jumat</div>
                <div class="jadwal-card">
                    <div class="jadwal-mata"><p class="jadwal-mata-name">Cinematografi</p><p class="jadwal-mata-time">08.30 – 11.30</p></div>
                    <div class="jadwal-mata"><p class="jadwal-mata-name">Video Editing dan Effect</p><p class="jadwal-mata-time">13.00 – 18.15</p></div>
                </div>
            </div>
        </div>
    </section>

    <!-- ====== FOOTER ====== -->
    <footer>
        <span class="footer-brand">Multimedia Engineering</span>
        <span class="footer-note">© 2024/2025 · Semua karya adalah milik anggota kelas</span>
    </footer>
    <script>
function openGaleri(img, title, author, type, desc) {
    document.getElementById("galeriModal").style.display = "flex";

    document.getElementById("gImg").src = img;
    document.getElementById("gTitle").innerText = title;
    document.getElementById("gAuthor").innerText = author;
    document.getElementById("gType").innerText = type;
    document.getElementById("gDesc").innerText = desc;
}

function closeGaleri() {
    document.getElementById("galeriModal").style.display = "none";
}

window.onclick = function(e) {
    let modal = document.getElementById("galeriModal");
    if (e.target == modal) {
        modal.style.display = "none";
    }
}
</script>

    <!-- ====== SCRIPTS ====== -->
    <script>
        /* ── Scroll Reveal ── */
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.classList.add('visible');
                    }, 60 * (entry.target.dataset.delay || 0));
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('.reveal').forEach((el, i) => {
            el.dataset.delay = i % 8;
            observer.observe(el);
        });

        /* ── Active Nav on Scroll ── */
        const sections = document.querySelectorAll('section[id]');
        const navLinks = document.querySelectorAll('nav a');

        window.addEventListener('scroll', () => {
            let current = '';
            sections.forEach(section => {
                if (window.scrollY >= section.offsetTop - 200) {
                    current = section.getAttribute('id');
                }
            });
            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === '#' + current) {
                    link.classList.add('active');
                }
            });
        });
    </script>
    <script>
function openModal(img, name, kelas, jabatan, masa) {
    document.getElementById("strukturModal").style.display = "flex";
    document.getElementById("modalImg").src = img;
    document.getElementById("modalName").innerText = name;
    document.getElementById("modalClass").innerText = "Kelas: " + kelas;
    document.getElementById("modalRole").innerText = "Jabatan: " + jabatan;
    document.getElementById("modalPeriod").innerText = "Masa Jabatan: " + masa;
}

function closeModal() {
    document.getElementById("strukturModal").style.display = "none";
}

// klik luar modal untuk close
window.onclick = function(e) {
    let modal = document.getElementById("strukturModal");
    if (e.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<script>
// animasi saat halaman load
window.addEventListener("load", () => {
    const text = document.querySelector(".hero-text");
    const image = document.querySelector(".hero-image-frame");

    text.classList.add("show");

    setTimeout(() => {
        image.classList.add("show");
    }, 200);

    // animasi huruf per baris
    const spans = document.querySelectorAll(".hero-text h1 span");
    spans.forEach((span, i) => {
        setTimeout(() => {
            span.style.opacity = "1";
            span.style.transform = "translateY(0)";
            span.style.transition = "all 0.5s ease";
        }, 300 + (i * 150));
    });
});
</script>

</body>
</html>