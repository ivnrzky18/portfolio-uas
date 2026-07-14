<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M. Ivan Rizky — Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Space+Grotesk:wght@700&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg-main: #07080a;        /* Hitam solid titanium */
            --bg-surface: #0e1117;     /* Abu-abu baja gelap pekat untuk semua komponen */
            --primary: #c21818;        /* Tactical Crimson Red solid */
            --primary-hover: #9e1212;
            --primary-glow: rgba(194, 24, 24, 0.25);
            --text-main: #e2e8f0;      /* Putih soft premium */
            --text-muted: #94a3b8;
            --border: #1e2530;         /* Border tegas antarkomponen */
            --border-hover: #c21818;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Plus Jakarta Sans', sans-serif;
            scroll-behavior: smooth;
        }

        body {
            background-color: var(--bg-main);
            color: var(--text-main);
            overflow-x: hidden;
            padding: 0;
        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
            width: 90%;
        }

        /* HEADER NAV */
        header {
            border-bottom: 1px solid var(--border);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            position: sticky;
            top: 0;
            z-index: 100;
            background: rgba(14, 17, 23, 0.9);
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
            position: relative;
        }

        .brand-name {
            font-family: 'Space Grotesk', sans-serif;
            font-size: 20px;
            font-weight: 700;
            letter-spacing: -0.5px;
            color: #ffffff;
        }
        .brand-name span { color: var(--primary); }

        nav ul {
            display: flex;
            list-style: none;
            gap: 8px;
        }
        nav ul li a {
            color: var(--text-muted);
            text-decoration: none;
            font-size: 14.5px;
            font-weight: 600;
            padding: 8px 16px;
            border-radius: 8px;
            transition: all 0.3s;
        }
        nav ul li a:hover, nav ul li a.active {
            color: #ffffff;
            background: rgba(255, 255, 255, 0.03);
        }

        /* DROPDOWN CONTACT SYSTEM */
        .contact-wrapper {
            position: relative;
        }
        
        .btn-cta {
            background: var(--primary);
            color: #ffffff;
            padding: 10px 22px;
            border-radius: 8px;
            font-weight: 700;
            font-size: 14px;
            border: none;
            cursor: pointer;
            transition: all 0.3s;
        }
        .btn-cta:hover {
            background: var(--primary-hover);
            box-shadow: 0 0 20px var(--primary-glow);
            transform: translateY(-1px);
        }

        .contact-dropdown {
            position: absolute;
            top: 120%;
            right: 0;
            background: var(--bg-surface);
            border: 1px solid var(--border);
            border-radius: 12px;
            width: 200px;
            padding: 8px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.7);
            display: none;
            flex-direction: column;
            gap: 4px;
            z-index: 110;
        }
        .contact-dropdown.show { display: flex; }
        
        .dropdown-item {
            display: flex;
            align-items: center;
            gap: 10px;
            color: var(--text-main);
            text-decoration: none;
            padding: 12px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 600;
            transition: background 0.2s;
        }
        .dropdown-item:hover {
            background: rgba(255, 255, 255, 0.03);
            color: var(--primary);
        }

        /* HERO SECTION */
        .hero {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 40px;
            padding: 120px 0;
        }

        .hero-left { flex: 1.2; }
        .hero-tag {
            font-size: 12px;
            font-weight: 800;
            color: var(--primary);
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-bottom: 16px;
            display: block;
        }
        .hero-left h1 {
            font-family: 'Space Grotesk', sans-serif;
            font-size: 52px;
            font-weight: 700;
            line-height: 1.15;
            margin-bottom: 24px;
            letter-spacing: -1.5px;
            color: #ffffff;
        }
        .hero-left p {
            color: var(--text-muted);
            font-size: 16.5px;
            line-height: 1.65;
            margin-bottom: 36px;
        }

        .hero-right {
            flex: 0.8;
            display: flex;
            justify-content: flex-end;
        }

        /* Tactical Profile Frame */
        .profile-card {
            background: var(--bg-surface);
            border: 1px solid var(--border);
            border-radius: 20px;
            padding: 14px;
            width: 100%;
            max-width: 320px;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.6);
            position: relative;
        }
        .profile-card::before {
            content: ''; position: absolute; top: -1px; left: -1px; width: 40px; height: 40px;
            border-top: 2px solid var(--primary); border-left: 2px solid var(--primary); border-top-left-radius: 20px;
        }
        .profile-img-wrapper {
            width: 100%;
            height: 350px;
            border-radius: 14px;
            overflow: hidden;
            background: #07080a;
        }
        .profile-img-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .profile-info {
            margin-top: 16px;
            text-align: center;
        }
        .profile-info h3 { font-size: 17px; font-weight: 700; letter-spacing: -0.3px; color: #ffffff; }
        .profile-info p { font-size: 13px; color: var(--text-muted); margin-top: 4px; }

        /* SKILLS SECTION */
        .skills { padding: 90px 0; border-top: 1px solid var(--border); }
        .section-title { font-family: 'Space Grotesk', sans-serif; font-size: 32px; font-weight: 700; letter-spacing: -0.5px; margin-bottom: 48px; text-align: center; color: #ffffff; }

        .skills-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 16px;
        }
        .skill-card {
            background: var(--bg-surface);
            border: 1px solid var(--border);
            padding: 24px;
            border-radius: 12px;
            text-align: center;
            font-weight: 700;
            font-size: 14.5px;
            transition: all 0.3s;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .skill-card:hover {
            border-color: var(--border-hover);
            transform: translateY(-3px);
            background: rgba(194, 24, 24, 0.04);
        }

        /* PROJECTS SECTION */
        .projects { padding: 90px 0; border-top: 1px solid var(--border); }
        .project-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 36px;
        }
        .project-card {
            background: var(--bg-surface);
            border: 1px solid var(--border);
            border-radius: 16px;
            overflow: hidden;
            transition: all 0.3s;
            position: relative;
        }
        .project-card::before {
            content: ''; position: absolute; top: -1px; left: -1px; width: 30px; height: 30px;
            border-top: 2px solid var(--primary); border-left: 2px solid var(--primary); border-top-left-radius: 16px;
            opacity: 0; transition: opacity 0.3s;
        }
        .project-card:hover::before {
            opacity: 1;
        }
        .project-card:hover {
            border-color: var(--border-hover);
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.5);
        }
        .project-img {
            height: 230px;
            overflow: hidden;
            border-bottom: 1px solid var(--border);
            background: #07080a;
        }
        .project-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .project-desc {
            padding: 28px;
        }
        .project-desc h3 { font-size: 19px; font-weight: 700; margin-bottom: 12px; letter-spacing: -0.3px; color: #ffffff; }
        .project-desc p { color: var(--text-muted); font-size: 14px; line-height: 1.6; }

        /* TIMELINE SECTION */
        .timeline { padding: 90px 0; border-top: 1px solid var(--border); }
        .timeline-stack { display: flex; flex-direction: column; gap: 16px; max-width: 700px; margin: 0 auto; }
        .timeline-item {
            background: var(--bg-surface);
            border: 1px solid var(--border);
            padding: 24px;
            border-radius: 14px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .timeline-item h3 { color: #ffffff; }
        .time-badge { font-size: 12px; font-weight: 800; color: #ffffff; background: var(--primary); padding: 6px 14px; border-radius: 6px; }

        /* FAQ SECTION */
        .faq { padding: 90px 0; border-top: 1px solid var(--border); }
        .faq-stack { display: flex; flex-direction: column; gap: 12px; max-width: 700px; margin: 0 auto; }
        .faq-item {
            background: var(--bg-surface);
            border: 1px solid var(--border);
            border-radius: 12px;
            padding: 22px;
            cursor: pointer;
            transition: all 0.2s;
        }
        .faq-item:hover { border-color: rgba(255, 255, 255, 0.08); }
        .faq-head { display: flex; justify-content: space-between; font-weight: 700; font-size: 15px; color: #ffffff; }
        .faq-body { max-height: 0; overflow: hidden; transition: max-height 0.3s ease, margin-top 0.3s ease; color: var(--text-muted); font-size: 14px; line-height: 1.5; }
        .faq-item.active .faq-body { max-height: 80px; margin-top: 10px; }
        .faq-item.active { border-color: var(--primary); }

        footer {
            border-top: 1px solid var(--border);
            padding: 40px 0;
            text-align: center;
            color: var(--text-muted);
            font-size: 13.5px;
            background: #0a0c10;
        }
    </style>
</head>
<body>

    <!-- NAV BAR -->
    <header>
        <div class="container nav-container">
            <div class="brand-name">M. Ivan Rizky<span>.</span></div>
            <nav>
                <ul>
                    <li><a href="#home" class="active">Beranda</a></li>
                    <li><a href="#skills">Keahlian</a></li>
                    <li><a href="#karya">Karya</a></li>
                    <li><a href="#timeline">Pendidikan</a></li>
                    <li><a href="#faq">FAQ</a></li>
                </ul>
            </nav>
            
            <div class="contact-wrapper">
                <button class="btn-cta" id="dropdownBtn">Contact Me</button>
                <div class="contact-dropdown" id="contactDropdown">
                    <a href="https://wa.me/6282283275453" target="_blank" class="dropdown-item">
                        <span>💬</span> WhatsApp
                    </a>
                    <a href="https://www.instagram.com/ivnnrzky?igsh=MW4xdGR0Y2NyZWthOQ==" target="_blank" class="dropdown-item">
                        <span>📸</span> Instagram
                    </a>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        
        <!-- HERO -->
        <section class="hero" id="home">
            <div class="hero-left">
                <span class="hero-tag">Sistem Informasi • Universitas Hang Tuah Pekanbaru</span>
                <h1>Mentransformasi Data.<br>Membangun Solusi Digital.</h1>
                <p>Halo, saya M. Ivan Rizky. Mahasiswa Sistem Informasi yang berfokus pada analisis proses bisnis, pengelolaan database relasional, dan implementasi aplikasi web menggunakan Full-Stack Laravel secara efisien.</p>
                <button class="btn-cta" style="padding: 14px 28px;" onclick="document.getElementById('karya').scrollIntoView();">Lihat Portofolio &rarr;</button>
            </div>
            <div class="hero-right">
                <div class="profile-card">
                    <div class="profile-img-wrapper">
                        <img src="{{ asset('img/ivanrz.jpeg') }}" alt="M. Ivan Rizky">
                    </div>
                    <div class="profile-info">
                        <h3>M. Ivan Rizky</h3>
                        <p>Information Systems Student</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- SKILLS WITH REAL LOGOS -->
        <section class="skills" id="skills">
            <h2 class="section-title">Keahlian Teknologi</h2>
            <div class="skills-grid">
                <div class="skill-card">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/laravel/laravel-original.svg" alt="Laravel" style="width: 32px; height: 32px; margin-bottom: 12px;">
                    <div>Laravel Framework</div>
                </div>
                <div class="skill-card">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/mysql/mysql-original.svg" alt="MySQL" style="width: 32px; height: 32px; margin-bottom: 12px;">
                    <div>MySQL Database</div>
                </div>
                <div class="skill-card">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/javascript/javascript-original.svg" alt="JavaScript" style="width: 32px; height: 32px; margin-bottom: 12px;">
                    <div>JavaScript Logic</div>
                </div>
                <div class="skill-card">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/figma/figma-original.svg" alt="Figma" style="width: 32px; height: 32px; margin-bottom: 12px;">
                    <div>UI/UX Figma</div>
                </div>
                <div class="skill-card">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/php/php-original.svg" alt="PHP" style="width: 32px; height: 32px; margin-bottom: 12px;">
                    <div>PHP Engine</div>
                </div>
                <div class="skill-card">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/html5/html5-original.svg" alt="HTML5" style="width: 32px; height: 32px; margin-bottom: 12px;">
                    <div>HTML5 &amp; CSS3</div>
                </div>
                <div class="skill-card">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/git/git-original.svg" alt="Git" style="width: 32px; height: 32px; margin-bottom: 12px;">
                    <div>Git Integration</div>
                </div>
                <div class="skill-card">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/backbonejs/backbonejs-original.svg" alt="Business Analysis" style="width: 32px; height: 32px; margin-bottom: 12px; filter: invert(35%) sepia(96%) saturate(1987%) hue-rotate(346deg) brightness(88%) contrast(93%);">
                    <div>Business Analysis</div>
                </div>
            </div>
        </section>

        <!-- KARYA -->
        <section class="projects" id="karya">
            <h2 class="section-title">Karya Pilihan</h2>
            <div class="project-grid">
                <div class="project-card">
                    <div class="project-img">
                        <img src="{{ asset('img/RETRIS.png') }}" alt="RETRIS">
                    </div>
                    <div class="project-desc">
                        <h3>RETRIS — Kelola Retribusi Sampah</h3>
                        <p>Platform digital untuk modernisasi pembayaran online dan konfirmasi angkutan sampah warga guna efisiensi tata kelola kas kebersihan tingkat RT.</p>
                    </div>
                </div>
                <div class="project-card">
                    <div class="project-img">
                        <img src="{{ asset('img/SekolahKU.png') }}" alt="SekolahKU">
                    </div>
                    <div class="project-desc">
                        <h3>SekolahKU — Sistem Informasi Sekolah</h3>
                        <p>Dashboard terpadu manajemen data akademik sekolah, mencakup data siswa, data pengajar, nilai, dan rekapitulasi poin pelanggaran kedisiplinan.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- TIMELINE -->
        <section class="timeline" id="timeline">
            <h2 class="section-title">Rekam Jejak Akademik</h2>
            <div class="timeline-stack">
                <div class="timeline-item">
                    <div>
                        <h3>S1 Sistem Informasi</h3>
                        <p style="color: var(--text-muted); font-size: 13.5px; margin-top: 2px;">Universitas Hang Tuah Pekanbaru (Semester 4)</p>
                    </div>
                    <span class="time-badge">2023 - Aktif</span>
                </div>
                <div class="timeline-item">
                    <div>
                        <h3>Jurusan IPA</h3>
                        <p style="color: var(--text-muted); font-size: 13.5px; margin-top: 2px;">SMA Masmur Pekanbaru</p>
                    </div>
                    <span class="time-badge">2020 - 2023</span>
                </div>
            </div>
        </section>

        <!-- FAQ -->
        <section class="faq" id="faq">
            <h2 class="section-title">FAQ</h2>
            <div class="faq-stack">
                <div class="faq-item">
                    <div class="faq-head"><span>Apa fokus utama dalam pengerjaan sistem?</span><span>+</span></div>
                    <div class="faq-body">Fokus saya menjamin struktur database yang ternormalisasi dengan baik, alur data backend Laravel yang aman, serta desain antarmuka yang clean.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-head"><span>Bagaimana cara menghubungi untuk kolaborasi?</span><span>+</span></div>
                    <div class="faq-body">Anda dapat membuka menu Contact di pojok kanan atas untuk terhubung langsung melalui WhatsApp atau Instagram resmi saya.</div>
                </div>
            </div>
        </section>

        <!-- FOOTER -->
        <footer>
            <p>© 2026 M. Ivan Rizky — Pekanbaru, Riau.</p>
        </footer>

    </div>

    <!-- SCRIPT INTERAKSI -->
    <script>
        // Dropdown Contact Toggle
        const dropdownBtn = document.getElementById('dropdownBtn');
        const contactDropdown = document.getElementById('contactDropdown');
        
        dropdownBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            contactDropdown.classList.toggle('show');
        });
        
        window.addEventListener('click', () => {
            contactDropdown.classList.remove('show');
        });

        // FAQ Accordion
        const faqs = document.querySelectorAll('.faq-item');
        faqs.forEach(item => {
            item.addEventListener('click', () => {
                faqs.forEach(el => { if(el !== item) el.classList.remove('active'); });
                item.classList.toggle('active');
            });
        });

        // Smooth Scrollspy Active Link
        const links = document.querySelectorAll('nav ul li a');
        const sections = document.querySelectorAll('section');
        window.addEventListener('scroll', () => {
            let current = '';
            sections.forEach(section => {
                if (pageYOffset >= section.offsetTop - 120) {
                    current = section.getAttribute('id');
                }
            });
            links.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href').includes(current)) link.classList.add('active');
            });
        });
    </script>
</body>
</html>