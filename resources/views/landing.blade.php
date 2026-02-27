<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>El Buen Pie | Clínica especializada en láser en Tijuana</title>
    <meta name="description" content="Clínica No. 1 especializada en láser en Tijuana. Tratamiento láser 4K contra la onicomicosis. Pedicure médico frecuente. Sucursales en 4 puntos de la ciudad." />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,600;1,500;1,600&display=swap" rel="stylesheet">

    <style>
        :root{
            --bg: #0b1220;
            --card: rgba(255,255,255,.06);
            --card2: rgba(255,255,255,.10);
            --text: rgba(255,255,255,.92);
            --muted: rgba(255,255,255,.72);
            --accent: #33e6b2;
            --accent2:#47a7ff;
            --danger:#ff4d6d;
            --shadow: 0 20px 60px rgba(0,0,0,.35);
            --radius: 18px;
        }
        *{box-sizing:border-box}
        html,body{margin:0;padding:0;background: radial-gradient(1200px 800px at 20% 0%, rgba(71,167,255,.18), transparent 55%),
                                         radial-gradient(900px 700px at 85% 10%, rgba(51,230,178,.16), transparent 50%),
                                         var(--bg); color:var(--text);
                 font-family: ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial, "Apple Color Emoji","Segoe UI Emoji";}
        a{color:inherit;text-decoration:none}
        .container{max-width:1180px;margin:0 auto;padding:0 20px}

        .custom-navbar {
            background: #EDEDED;
            padding: 20px 0;
            border-bottom-left-radius: 40px;
            border-bottom-right-radius: 40px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
            position: relative;
            z-index: 100;
        }

        .navbar-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 40px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .navbar-left img {
            height: 65px;
        }

        .navbar-menu {
            display: flex;
            gap: 60px;
        }

        .nav-link {
            font-family: 'Poppins', sans-serif;
            font-size: 26px;
            font-weight: 600;
            color: #4A4A4A;
            text-decoration: none;
            padding: 14px 28px;
            border-radius: 18px;
            transition: 0.3s ease;
        }

        .nav-link:hover {
            background: #D5D5D5;
        }

        .nav-link.active {
            background: #4A4A4A;
            color: white;
        }

        .chat-button {
            background: #5AA031;
            color: white;
            font-family: 'Poppins', sans-serif;
            font-size: 24px;
            font-weight: 600;
            padding: 14px 30px;
            border-radius: 40px;
            display: flex;
            align-items: center;
            gap: 12px;
            text-decoration: none;
            transition: 0.3s ease;
        }

        .chat-button svg {
            width: 28px;
            height: 28px;
        }

        .chat-button:hover {
            background: #4b8929;
            transform: translateY(-2px);
        }
        .brand{display:flex;align-items:center;gap:12px}
        .logo{
            width:38px;height:38px;border-radius:12px;
            background: linear-gradient(135deg,var(--accent),var(--accent2));
            box-shadow: var(--shadow);
        }
        .brand b{letter-spacing:.3px}
        .menu{display:flex;gap:18px;align-items:center;flex-wrap:wrap}
        .menu a{
            padding:10px 12px;border-radius:12px;
            color:var(--muted);
        }
        .menu a:hover{background:rgba(255,255,255,.06);color:var(--text)}
        .cta{
            display:flex;gap:10px;align-items:center
        }
        .btn{
            border: 1px solid rgba(255,255,255,.14);
            background: rgba(255,255,255,.06);
            color: var(--text);
            padding:10px 14px;border-radius:14px;
            display:inline-flex;align-items:center;gap:10px;
            cursor:pointer;
        }
        .btn:hover{background: rgba(255,255,255,.10)}
        .btn-primary{
            border: none;
            background: linear-gradient(135deg,var(--accent),var(--accent2));
            color:#06101d;
            font-weight:700;
        }
        .badge{
            display:inline-flex;align-items:center;gap:8px;
            padding:8px 12px;border-radius:999px;
            background: rgba(255,255,255,.06);
            border:1px solid rgba(255,255,255,.10);
            color:var(--muted);
        }

        
        @media (max-width: 920px)
        .panel{
            background: linear-gradient(180deg, rgba(255,255,255,.08), rgba(255,255,255,.04));
            border:1px solid rgba(255,255,255,.10);
            border-radius: var(--radius);
            box-shadow: var(--shadow);
        }
        .kicker{display:flex;gap:10px;flex-wrap:wrap;margin-bottom:14px}
        .h1{
            font-size: clamp(34px, 4.5vw, 54px);
            line-height: 1.02;
            margin:0 0 12px;
            letter-spacing:-.8px;
        }
        .sub{
            margin:0 0 18px;
            color:var(--muted);
            font-size: 16px;
            line-height: 1.45;
            max-width: 56ch;
        }
        .stat-row{display:grid;grid-template-columns:repeat(2,1fr);gap:12px;margin-top:18px}
        @media (max-width:520px){.stat-row{grid-template-columns:1fr}}
        .stat{
            padding:14px;border-radius:16px;background:rgba(255,255,255,.05);
            border:1px solid rgba(255,255,255,.08);
        }
        .stat b{font-size:22px}
        .stat div{color:var(--muted);font-size:13px;margin-top:4px}

        .card{padding:16px;border-radius:16px;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.08)}
        .card h3{margin:0 0 10px;font-size:16px}
        .quote{color:var(--muted);line-height:1.45;margin:0}
        .pill{
            display:inline-flex;align-items:center;gap:8px;
            padding:8px 10px;border-radius:999px;
            background: rgba(51,230,178,.12);
            border: 1px solid rgba(51,230,178,.22);
            color: #c8fff0;
            font-weight:700;
            width:max-content;
        }

        /* Sections */
        .section{padding:28px 0}
        .section h2{
            margin:0 0 14px;
            font-size: clamp(22px, 2.6vw, 30px);
            letter-spacing:-.2px;
        }
        .grid-3{display:grid;grid-template-columns:repeat(3,1fr);gap:14px}
        @media (max-width: 920px){.grid-3{grid-template-columns:1fr}}
        .benefit{display:flex;gap:12px;align-items:flex-start}
        .dot{
            width:12px;height:12px;border-radius:999px;margin-top:6px;
            background: linear-gradient(135deg,var(--accent),var(--accent2));
            box-shadow: 0 0 0 6px rgba(71,167,255,.10);
        }
        .benefit b{display:block;margin-bottom:3px}
        .benefit span{color:var(--muted);font-size:14px;line-height:1.4}

        .branches{display:flex;gap:10px;flex-wrap:wrap}
        .branch{
            padding:10px 12px;border-radius:14px;
            border:1px solid rgba(255,255,255,.10);
            background: rgba(255,255,255,.05);
            cursor:pointer;
        }
        .branch.active{
            background: rgba(71,167,255,.14);
            border-color: rgba(71,167,255,.26);
        }

        /* Contact */
        .contact-grid{display:grid;grid-template-columns:1fr 1fr;gap:16px;align-items:start}
        @media (max-width: 920px){.contact-grid{grid-template-columns:1fr}}
        .field{display:flex;flex-direction:column;gap:6px;margin-bottom:10px}
        .field label{font-size:13px;color:var(--muted)}
        .input, .textarea, .select{
            width:100%;
            padding:12px 12px;
            border-radius:14px;
            border:1px solid rgba(255,255,255,.12);
            background: rgba(0,0,0,.20);
            color: var(--text);
            outline:none;
        }
        .textarea{min-height:120px;resize:vertical}
        .radio-row{display:flex;gap:10px;flex-wrap:wrap;margin:10px 0}
        .chip{
            display:inline-flex;align-items:center;gap:8px;
            padding:10px 12px;border-radius:14px;
            border:1px solid rgba(255,255,255,.12);
            background: rgba(255,255,255,.05);
            cursor:pointer;
            user-select:none;
        }
        .chip input{accent-color: var(--accent)}
        .help{color:var(--muted);font-size:13px;line-height:1.45}

      
        /* Floating buttons */
        .float-wrap{
            position:fixed;right:16px;bottom:16px;z-index:70;
            display:flex;flex-direction:column;gap:10px;
        }
        .float-btn{
            width:52px;height:52px;border-radius:16px;
            display:flex;align-items:center;justify-content:center;
            box-shadow: var(--shadow);
            border:1px solid rgba(255,255,255,.14);
            background: rgba(255,255,255,.08);
            backdrop-filter: blur(12px);
        }
        .float-btn:hover{background: rgba(255,255,255,.12)}
        .float-btn.call{
            outline: 2px solid rgba(71,167,255,.18);
            color: #47a7ff;
        }
        .float-btn.call svg{
            fill: #47a7ff;
        }
        .float-btn.wa{
            outline: 2px solid rgba(51,230,178,.16);
            color: #25D366;
        }
        .float-btn.wa svg{
            fill: #25D366;
        }

        /* Chat widget */
        .chat{
            position:fixed;right:16px;bottom:92px;z-index:80;
            width:320px;max-width: calc(100vw - 32px);
            display:none;
        }
        .chat.open{display:block}
        .chat .panel{overflow:hidden}
        .chat-head{
            display:flex;align-items:center;justify-content:space-between;
            padding:12px 12px;border-bottom:1px solid rgba(255,255,255,.08);
            background: rgba(255,255,255,.04);
        }
        .chat-body{padding:12px}
        .chat-msg{
            padding:10px 12px;border-radius:14px;
            background: rgba(255,255,255,.06);
            border:1px solid rgba(255,255,255,.08);
            color:var(--muted);
            font-size:14px;line-height:1.4
        }
        .chat-actions{display:flex;gap:10px;margin-top:10px}
        .xbtn{border:none;background:transparent;color:var(--muted);cursor:pointer;font-size:18px}
        .alert-ok{
            padding:12px;border-radius:14px;margin-bottom:12px;
            background: rgba(51,230,178,.12);
            border: 1px solid rgba(51,230,178,.25);
            color:#c8fff0;
        }
        .alert-err{
            padding:10px;border-radius:14px;margin:8px 0;
            background: rgba(255,77,109,.10);
            border: 1px solid rgba(255,77,109,.22);
            color:#ffd0d8;
            font-size:13px;
        }
        .beneficios-section {
            background: #EDEDED;
            padding: 80px 0;
            text-align: center;
        }

        .beneficios-title {
            font-size: 48px;
            font-weight: 700;
            color: #4a4a4a;
            margin-bottom: 60px;
            font-family: 'Poppins', sans-serif;
        }

        .beneficios-grid {
            display: flex;
            justify-content: center;
            gap: 60px;
            flex-wrap: wrap;
            margin-bottom: 80px;
        }

        .beneficio-svg {
            width: 220px;
            height: 220px;
        }

        .ubicacion-text h3 {
            font-size: 36px;
            color: #4a4a4a;
            font-weight: 600;
            line-height: 1.4;
            margin-bottom: 60px;
            font-family: 'Poppins', sans-serif;
        }

        .sucursales-grid {
            display: flex;
            justify-content: center;
            gap: 60px;
            flex-wrap: wrap;
        }

        .sucursal-circle {
            width: 220px;
            height: 220px;
            background: #3F6287;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 22px;
            font-style: italic;
            font-weight: 600;
            font-family: 'Poppins', sans-serif;
        }

        .casos-reales-grid {
            display: flex;
            justify-content: center;
            gap: 40px;
            flex-wrap: wrap;
            margin-bottom: 80px;
        }

        .caso-real-item {
            width: 280px;
            height: 280px;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
            background: #fff;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .caso-real-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 30px rgba(0,0,0,0.25);
        }

        .caso-real-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }
        .footer-section {
            background: #EDEDED;
            color: #4A4A4A;
            padding-top: 0;
            font-family: 'Poppins', sans-serif;
        }

        .footer-top-bar {
            display: flex;
            height: 8px;
            width: 100%;
        }

        .bar-blue {
            background: #3F6287;
            flex: 1;
        }

        .bar-purple {
            background: #8E4A97;
            flex: 1;
        }

        .bar-blue-light {
            background: #5C84B5;
            flex: 1;
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 60px 20px;
            display: flex;
            justify-content: space-between;
            gap: 60px;
            flex-wrap: wrap;
        }

        .footer-left {
            flex: 1;
            min-width: 300px;
        }

        .footer-left p {
            font-size: 16px;
            line-height: 1.6;
        }

        .footer-logo img {
            margin-top: 40px;
            width: 260px;
        }

        .footer-right {
            flex: 1;
            min-width: 300px;
            text-align: right;
        }

        .footer-slogan {
            font-size: 36px;
            font-style: italic;
            font-weight: 500;
            margin-bottom: 30px;
        }

        .footer-horarios {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 30px;
        }

        .footer-social {
            display: flex;
            justify-content: flex-end;
            gap: 15px;
        }
        .social-icon {
            width: 42px;
            height: 42px;
            background: #333;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: 0.3s ease;
        }

        .social-icon svg {
            width: 20px;
            height: 20px;
        }

        .social-icon:hover {
            transform: translateY(-3px);
            background: #8E4A97;
        }

        .footer-bottom {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 30px;
            padding: 25px 20px;
            font-size: 14px;
            color: #4A4A4A;
            flex-wrap: wrap;
        }

        .footer-bottom-logo {
            display: flex;
            align-items: center;
        }

        .footer-bottom-logo img {
            height: 50px;
            width: auto;
        }

        .footer-bottom-links {
            display: flex;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap;
            justify-content: center;
        }
        .contact-section {
            background: #EDEDED;
            padding: 80px 20px;
            display: flex;
            justify-content: center;
        }

        .contact-card {
            background: #F3F3F3;
            width: 100%;
            max-width: 1100px;
            padding: 50px 60px;
            border-radius: 25px;
            box-shadow: 8px 12px 20px rgba(0,0,0,0.25);
        }

        .contact-title {
            text-align: center;
            font-size: 48px;
            font-style: italic;
            font-weight: 600;
            color: #3F6287;
            margin-bottom: 40px;
            font-family: 'Poppins', sans-serif;
        }

        .contact-row {
            display: grid;
            grid-template-columns: 280px 1fr;
            align-items: center;
            margin-bottom: 25px;
            column-gap: 30px;
        }

        .contact-row.align-top {
            align-items: flex-start;
        }

        .contact-row label {
            width: 280px;
            font-size: 20px;
            font-weight: 500;
            color: #3F6287;
            font-family: 'Poppins', sans-serif;
        }

        .contact-input {
            flex: 1;
            height: 50px;
            border-radius: 30px;
            border: none;
            background: #D9D9D9;
            padding: 0 20px;
            font-size: 18px;
        }

        .contact-textarea {
            flex: 1;
            height: 150px;
            border-radius: 25px;
            border: none;
            background: #D9D9D9;
            padding: 20px;
            font-size: 18px;
            resize: none;
        }

        .contact-radio-wrapper.single-row {
            width: 100%;
            background: #D9D9D9;
            border-radius: 30px;
            padding: 12px 25px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 25px;
            flex-wrap: wrap;
        }
        .contact-input,
        .contact-textarea {
            width: 100%;
        }
        .radio-option {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 20px;
            color: #3F6287;
            font-weight: 500;
            cursor: pointer;
            white-space: nowrap;
            flex: 0 1 auto;
            min-width: 0;
        }

        .radio-option input {
            display: none;
        }

        .custom-check {
            width: 18px;
            height: 18px;
            border: 2px solid #3F6287;
            border-radius: 50%;
            background: transparent;
            display: inline-block;
            position: relative;
            flex-shrink: 0;
        }

        /* Estado seleccionado */
        .radio-option input:checked + .custom-check {
            background: #3F6287;
            border-color: #3F6287;
        }

        .radio-option input:checked + .custom-check::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 8px;
            height: 8px;
            background: white;
            border-radius: 50%;
        }


        .contact-button-wrapper {
            display: flex;
            justify-content: flex-end;
            margin-top: 30px;
        }

        .contact-button {
            background: #3F6287;
            color: white;
            font-size: 26px;
            font-style: italic;
            padding: 8px 30px;
            border-radius: 12px;
            border: none;
            cursor: pointer;
            transition: 0.3s ease;
        }

        .contact-button:hover {
            background: #2e4b68;
        }

        .hero-carousel {
            padding: 30px 20px;
            background: #fff;
        }

        .carousel-container {
            position: relative;
            overflow: hidden;
            border-radius: 40px;
            max-width: 1400px;
            margin: 0 auto;
        }

        .carousel-track {
            display: flex;
            transition: transform 0.6s ease;
        }

        .carousel-slide {
            min-width: 100%;
            user-select: none;
        }

        .carousel-slide img {
            width: 100%;
            height: 550px;
            object-fit: cover;
            display: block;
        }

        /* Flechas */
        .carousel-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(255,255,255,0.85);
            border: none;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            cursor: pointer;
            font-size: 22px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
            z-index: 10;
        }

        .carousel-btn.prev { left: 15px; }
        .carousel-btn.next { right: 15px; }

        .carousel-btn:hover {
            background: #fff;
        }

        /* Miniaturas */
        .carousel-thumbs {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
            flex-wrap: wrap;
        }

        .carousel-thumbs img {
            width: 220px;
            height: 120px;
            object-fit: cover;
            border-radius: 15px;
            cursor: pointer;
            opacity: 0.6;
            transition: 0.3s ease;
        }

        .carousel-thumbs img.active {
            opacity: 1;
            border: 3px solid #8E4A97;
        }

        .doctor-section {
            background: #EDEDED;
            padding: 80px 20px;
            display: flex;
            justify-content: center;
        }

        .doctor-container {
            position: relative;
            max-width: 1400px;
            width: 100%;
            border-radius: 40px;
            overflow: hidden;
        }

        .doctor-container img {
            width: 100%;
            display: block;
        }

        /* Botón llamar */
        .doctor-call {
            position: absolute;
            right: 30px;
            top: 35%;
            background: #3F6287;
            color: white;
            padding: 12px 18px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            box-shadow: 0 5px 12px rgba(0,0,0,0.25);
            transition: 0.3s ease;
        }

        .doctor-call svg {
            width: 20px;
            height: 20px;
        }

        .doctor-call:hover {
            background: #2e4b68;
            transform: translateY(-3px);
        }

        /* Botón WhatsApp */
        .doctor-wa {
            position: absolute;
            right: 30px;
            bottom: 20%;
            background: #4CAF50;
            color: white;
            padding: 14px 20px;
            border-radius: 50px;
            display: flex;
            align-items: center;
            gap: 12px;
            text-decoration: none;
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            box-shadow: 0 6px 16px rgba(0,0,0,0.25);
            transition: 0.3s ease;
        }

        .doctor-wa svg {
            width: 22px;
            height: 22px;
        }

        .doctor-wa:hover {
            background: #3d8b41;
            transform: translateY(-3px);
        }


        @media (max-width: 992px) {

            .contact-row {
                grid-template-columns: 1fr;
                row-gap: 10px;
            }

            .contact-row label {
                width: 100%;
                font-size: 20px;
            }

            .contact-radio-wrapper.single-row {
                justify-content: flex-start;
                padding: 15px 20px;
                gap: 20px;
            }

            .radio-option {
                font-size: 14px;
                white-space: normal;
                flex: 1 1 calc(50% - 10px);
                min-width: 160px;
            }

        }

        @media (max-width: 576px) {
            .contact-radio-wrapper.single-row {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }

            .radio-option {
                flex: 1 1 100%;
                width: 100%;
                min-width: 100%;
            }
        }
        @media (max-width: 992px) {
            .navbar-container {
                flex-direction: column;
                gap: 20px;
            }
            .navbar-menu {
                gap: 30px;
            }
            .nav-link {
                font-size: 20px;
                padding: 10px 18px;
            }
            .chat-button {
                font-size: 20px;
                padding: 10px 22px;
            }
        }
        @media (max-width: 992px) {
            .carousel-slide img {
                height: 350px;
            }
            .carousel-thumbs img {
                width: 140px;
                height: 80px;
            }
        }

        @media (max-width: 992px) {
            .doctor-call,
            .doctor-wa {
                right: 15px;
                padding: 10px 14px;
                font-size: 14px;
            }

            .doctor-call {
                top: 30%;
            }

            .doctor-wa {
                bottom: 15%;
            }

            }

    </style>
</head>

<body>
    <header class="custom-navbar">
        <div class="navbar-container">

            <!-- Logo -->
            <div class="navbar-left">
                <img src="{{ asset('images/logo-buenpie.png') }}" alt="Buen Pie Logo">
            </div>

            <!-- Menu -->
            <nav class="navbar-menu">
                <a href="#home" class="nav-link active">HOME</a>
            </nav>

            <!-- Chat Button -->
            <div class="navbar-right">
                <a href="{{ $contact['whatsapp_link'] }}" target="_blank" class="chat-button">
                <svg viewBox="0 0 24 24" fill="white">
                    <path d="M12 2a10 10 0 0 0-8.7 14.9L2 22l5.2-1.3A10 10 0 1 0 12 2zm0 18a8 8 0 0 1-4-1.1l-.3-.2-3.1.8.8-3.1-.2-.3A8 8 0 1 1 12 20zm4.3-6.2c-.2-.1-1.4-.7-1.6-.8-.2-.1-.4-.1-.6.1-.2.2-.7.8-.8.9-.1.1-.3.1-.5 0a6.6 6.6 0 0 1-2-1.3 7.3 7.3 0 0 1-1.4-1.7c-.1-.2 0-.3.1-.4.1-.1.2-.3.3-.4.1-.1.1-.2.2-.3.1-.1 0-.2 0-.3s-.6-1.4-.8-1.9c-.2-.5-.4-.4-.6-.4h-.5a1 1 0 0 0-.7.3 3 3 0 0 0-.9 2.2 5.2 5.2 0 0 0 1.1 2.7 12 12 0 0 0 4.6 4.1 5.4 5.4 0 0 0 2.8.7 3 3 0 0 0 2-.7 2.5 2.5 0 0 0 .6-1.8c0-.2-.1-.3-.3-.4z"/>
                </svg>
                    CHAT
                </a>
            </div>

        </div>
    </header>

    <section class="hero-carousel">

        <div class="carousel-container">

            <!-- Slides -->
            <div class="carousel-track">

                <div class="carousel-slide active">
                    <img src="{{ asset('images/slide1.jpg') }}" alt="">
                </div>

                <div class="carousel-slide">
                    <img src="{{ asset('images/slide2.jpg') }}" alt="">
                </div>

                <div class="carousel-slide">
                    <img src="{{ asset('images/slide3.jpg') }}" alt="">
                </div>

                <div class="carousel-slide">
                    <img src="{{ asset('images/slide4.jpg') }}" alt="">
                </div>

            </div>

            <!-- Flechas -->
            <button class="carousel-btn prev">&#10094;</button>
            <button class="carousel-btn next">&#10095;</button>

        </div>

        <!-- Miniaturas -->
        <div class="carousel-thumbs">
            <img src="{{ asset('images/slide1.jpg') }}" data-index="0" class="thumb active">
            <img src="{{ asset('images/slide2.jpg') }}" data-index="1" class="thumb">
            <img src="{{ asset('images/slide3.jpg') }}" data-index="2" class="thumb">
            <img src="{{ asset('images/slide4.jpg') }}" data-index="3" class="thumb">
        </div>

    </section>

    <section class="doctor-section">

    <div class="doctor-container">

        <!-- Imagen completa -->
        <img src="{{ asset('images/doctor-section.jpg') }}" alt="Brindamos bienestar para tus pies">

    </div>

    </section>



    <section class="beneficios-section">

        <h2 class="beneficios-title">Casos Reales:</h2>

        <div class="casos-reales-grid">
            <!-- Caso Real 1 -->
            <div class="caso-real-item">
                <img src="{{ asset('images/caso-real-1.jpg') }}" alt="Caso Real 1">
            </div>

            <!-- Caso Real 2 -->
            <div class="caso-real-item">
                <img src="{{ asset('images/caso-real-2.jpg') }}" alt="Caso Real 2">
            </div>

            <!-- Caso Real 3 -->
            <div class="caso-real-item">
                <img src="{{ asset('images/caso-real-3.jpg') }}" alt="Caso Real 3">
            </div>

            <!-- Caso Real 4 -->
            <div class="caso-real-item">
                <img src="{{ asset('images/caso-real-4.jpg') }}" alt="Caso Real 4">
            </div>

        </div>

    </section>



    <section class="beneficios-section">

    <h2 class="beneficios-title">Beneficios:</h2>

    <div class="beneficios-grid">

        <!-- 1 -->
        <div class="beneficio-item">
            <svg viewBox="0 0 220 220" class="beneficio-svg">
                <defs>
                    <path id="circlePath1"
                        d="M110,110 m-85,0 a85,85 0 1,1 170,0 a85,85 0 1,1 -170,0" />
                </defs>

                <circle cx="110" cy="110" r="75" fill="#8E4A97" />

                <text font-family="Poppins" font-size="14" fill="#4a4a4a" font-weight="600">
                    <textPath href="#circlePath1" startOffset="20%" text-anchor="middle">
                        Elimina callosidades
                    </textPath>
                </text>
            </svg>
        </div>

        <!-- 2 -->
        <div class="beneficio-item">
            <svg viewBox="0 0 220 220" class="beneficio-svg">
                <defs>
                    <path id="circlePath2"
                        d="M110,110 m-85,0 a85,85 0 1,1 170,0 a85,85 0 1,1 -170,0" />
                </defs>

                <circle cx="110" cy="110" r="75" fill="#8E4A97" />

                <text font-family="Poppins" font-size="14" fill="#4a4a4a" font-weight="600">
                    <textPath href="#circlePath2" startOffset="20%" text-anchor="middle">
                        Promueve la circulación sanguínea
                    </textPath>
                </text>
            </svg>
        </div>

        <!-- 3 -->
        <div class="beneficio-item">
            <svg viewBox="0 0 220 220" class="beneficio-svg">
                <defs>
                    <path id="circlePath3"
                        d="M110,110 m-85,0 a85,85 0 1,1 170,0 a85,85 0 1,1 -170,0" />
                </defs>

                <circle cx="110" cy="110" r="75" fill="#8E4A97" />

                <text font-family="Poppins" font-size="14" fill="#4a4a4a" font-weight="600">
                    <textPath href="#circlePath3" startOffset="20%" text-anchor="middle">
                        Recupera tu bienestar
                    </textPath>
                </text>
            </svg>
        </div>

        <!-- 4 -->
        <div class="beneficio-item">
            <svg viewBox="0 0 220 220" class="beneficio-svg">
                <defs>
                    <path id="circlePath4"
                        d="M110,110 m-85,0 a85,85 0 1,1 170,0 a85,85 0 1,1 -170,0" />
                </defs>

                <circle cx="110" cy="110" r="75" fill="#8E4A97" />

                <text font-family="Poppins" font-size="14" fill="#4a4a4a" font-weight="600">
                    <textPath href="#circlePath4" startOffset="20%" text-anchor="middle">
                        Mejora tu apariencia
                    </textPath>
                </text>
            </svg>
        </div>

    </div>


    <!-- SEGUNDA PARTE -->

    <div class="ubicacion-text">
        <h3>
            Ubicados estratégicamente en 4 puntos<br>
            de la ciudad para tu comodidad.<br>
            Encuentra la sucursal más cercana.
        </h3>
    </div>

    <div class="sucursales-grid">
        <div class="sucursal-circle">Insurgentes</div>
        <div class="sucursal-circle">Otay</div>
        <div class="sucursal-circle">Centro</div>
        <div class="sucursal-circle">Playas</div>
    </div>

</section>


  
    <section class="contact-section">

    <div class="contact-card">

        <h2 class="contact-title">Queremos conocerte</h2>

        <form method="POST" action="{{ route('contact.submit') }}">
            @csrf

            <div class="contact-row">
                <label>Nombre:</label>
                <input type="text" name="nombre" class="contact-input" required>
            </div>

            <div class="contact-row">
                <label>Correo Electrónico:</label>
                <input type="email" name="correo" class="contact-input" required>
            </div>

            <div class="contact-row">
                <label>Número de Teléfono:</label>
                <input type="text" name="telefono" class="contact-input" required>
            </div>

            <div class="contact-row align-top">
                <label>Motivo del Contacto:</label>

                <div class="contact-radio-wrapper single-row">

                    <label class="radio-option">
                        <input type="radio" name="opcion" value="Solicitar información" required>
                        <span class="custom-check"></span>
                        Solicitar información:
                    </label>

                    <label class="radio-option">
                        <input type="radio" name="opcion" value="Agendar cita">
                        <span class="custom-check"></span>
                        Agendar cita:
                    </label>

                    <label class="radio-option">
                        <input type="radio" name="opcion" value="Consultar promociones">
                        <span class="custom-check"></span>
                        Consultar promociones:
                    </label>

                    <label class="radio-option">
                        <input type="radio" name="opcion" value="Otros">
                        <span class="custom-check"></span>
                        Otros:
                    </label>

                </div>
            </div>

            <div class="contact-row align-top">
                <label>Mensaje o Consulta:</label>
                <textarea name="mensaje" class="contact-textarea"></textarea>
            </div>

            <div class="contact-button-wrapper">
                <button type="submit" class="contact-button">Enviar</button>
            </div>

        </form>

    </div>

</section>


    <footer class="footer-section">

    <!-- Barra superior de colores -->
    <div class="footer-top-bar">
        <div class="bar-blue"></div>
        <div class="bar-purple"></div>
        <div class="bar-blue-light"></div>
        <div class="bar-purple"></div>
    </div>

    <div class="footer-container">

        <!-- Columna izquierda -->
        <div class="footer-left">

            <p><strong>Dirección Matriz:</strong><br>
            Av de los Insurgentes 17017-Local 5,<br>
            Los Alamos, 22110 Tijuana, B.C.</p>

            <br>

            <p><strong>Contáctenos:</strong><br>
            <strong>Teléfono:</strong> 664-731-4805<br>
            <strong>WhatsApp:</strong> 664-731-4805.<br>
            <strong>Correo electrónico:</strong> elbuenpie.tijuana@gmail.com</p>
        </div>


        <!-- Columna derecha -->
        <div class="footer-right">

            <h2 class="footer-slogan">Empieza con Buen Pie</h2>

            <div class="footer-horarios">
                <strong>Horarios de atención:</strong><br>
                Lunes a Viernes: 10:00 AM a 7:00 PM<br>
                Sábados: 9:00 AM a 4:00 PM
            </div>

            <div class="footer-social">

    <!-- Facebook -->
    <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer" class="social-icon" aria-label="Facebook">
        <svg viewBox="0 0 24 24" fill="white">
            <path d="M22 12A10 10 0 1 0 10.5 21.9v-7H8v-2.9h2.5V9.8c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.2.2 2.2.2v2.4h-1.2c-1.2 0-1.6.8-1.6 1.5v1.9h2.7L16 14.9h-2.3v7A10 10 0 0 0 22 12"/>
        </svg>
    </a>

    <!-- Instagram -->
    <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer" class="social-icon" aria-label="Instagram">
        <svg viewBox="0 0 24 24" fill="white">
            <path d="M7 2C4.8 2 3 3.8 3 6v12c0 2.2 1.8 4 4 4h10c2.2 0 4-1.8 4-4V6c0-2.2-1.8-4-4-4H7zm10 2c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H7c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2h10zm-5 3.5A5.5 5.5 0 1 0 17.5 13 5.5 5.5 0 0 0 12 7.5zm0 9A3.5 3.5 0 1 1 15.5 13 3.5 3.5 0 0 1 12 16.5zm4.8-9.8a1.3 1.3 0 1 0 1.3 1.3 1.3 1.3 0 0 0-1.3-1.3z"/>
        </svg>
    </a>

    <!-- TikTok -->
    <a href="https://www.tiktok.com/" target="_blank" rel="noopener noreferrer" class="social-icon" aria-label="TikTok">
        <svg viewBox="0 0 24 24" fill="white">
            <path d="M19 8.3a5.5 5.5 0 0 1-3.2-1V15a6 6 0 1 1-6-6 5.7 5.7 0 0 1 1.1.1v3a2.8 2.8 0 1 0 2.1 2.7V2h2.8a5.5 5.5 0 0 0 3.2 3.2v3.1z"/>
        </svg>
    </a>

    <!-- WhatsApp -->
    <a href="https://wa.me/526647314805" target="_blank" rel="noopener noreferrer" class="social-icon" aria-label="WhatsApp">
        <svg viewBox="0 0 24 24" fill="white">
            <path d="M12 2a10 10 0 0 0-8.7 14.9L2 22l5.2-1.3A10 10 0 1 0 12 2zm0 18a8 8 0 0 1-4-1.1l-.3-.2-3.1.8.8-3.1-.2-.3A8 8 0 1 1 12 20zm4.3-6.2c-.2-.1-1.4-.7-1.6-.8-.2-.1-.4-.1-.6.1-.2.2-.7.8-.8.9-.1.1-.3.1-.5 0a6.6 6.6 0 0 1-2-1.3 7.3 7.3 0 0 1-1.4-1.7c-.1-.2 0-.3.1-.4.1-.1.2-.3.3-.4.1-.1.1-.2.2-.3.1-.1 0-.2 0-.3s-.6-1.4-.8-1.9c-.2-.5-.4-.4-.6-.4h-.5a1 1 0 0 0-.7.3 3 3 0 0 0-.9 2.2 5.2 5.2 0 0 0 1.1 2.7 12 12 0 0 0 4.6 4.1 5.4 5.4 0 0 0 2.8.7 3 3 0 0 0 2-.7 2.5 2.5 0 0 0 .6-1.8c0-.2-.1-.3-.3-.4z"/>
        </svg>
    </a>

</div>


        </div>

    </div>

    <!-- Políticas -->
    <div class="footer-bottom">
        <div class="footer-bottom-logo">
            <img src="{{ asset('images/logo-buenpie.png') }}" alt="Buen Pie Logo">
        </div>
        <div class="footer-bottom-links">
            <span>POLÍTICA DE PRIVACIDAD</span>
            <span>TÉRMINOS Y CONDICIONES</span>
            <span>POLÍTICA DE CALIDAD, INOCUIDAD Y GESTIÓN AMBIENTAL</span>
        </div>
    </div>

</footer>


    <!-- Floating buttons -->
    <div class="float-wrap" aria-label="Accesos rápidos">
        <a class="float-btn call" href="tel:+{{ $contact['phone_link'] }}" title="Llámanos" aria-label="Llámanos">
            <svg viewBox="0 0 24 24" fill="currentColor" width="24" height="24">
                <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
            </svg>
        </a>
        <a class="float-btn wa" href="{{ $contact['whatsapp_link'] }}" target="_blank" rel="noopener" title="WhatsApp" aria-label="WhatsApp">
            <svg viewBox="0 0 24 24" fill="currentColor" width="24" height="24">
                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
            </svg>
        </a>
    </div>

    <!-- Chat widget -->
    <div class="chat" id="chatWidget" aria-live="polite">
        <div class="panel">
            <div class="chat-head">
                <b>CHAT</b>
                <button class="xbtn" type="button" id="chatClose" aria-label="Cerrar">×</button>
            </div>
            <div class="chat-body">
                <div class="chat-msg">
                    Hola 👋 ¿En qué podemos ayudarte?<br/>
                    • Agendar cita<br/>
                    • Consultar promociones<br/>
                    • Información de tratamientos
                </div>
                <div class="chat-actions">
                    <a class="btn btn-primary" href="{{ $contact['whatsapp_link'] }}" target="_blank" rel="noopener">Abrir WhatsApp</a>
                    <a class="btn" href="#contacto">Formulario</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        const track = document.querySelector('.carousel-track');
        const slides = document.querySelectorAll('.carousel-slide');
        const thumbs = document.querySelectorAll('.thumb');
        const prevBtn = document.querySelector('.prev');
        const nextBtn = document.querySelector('.next');

        let currentIndex = 0;

        function updateCarousel(index) {
            currentIndex = index;
            track.style.transform = `translateX(-${index * 100}%)`;

            thumbs.forEach(t => t.classList.remove('active'));
            thumbs[index].classList.add('active');
        }

        nextBtn.addEventListener('click', () => {
            let newIndex = currentIndex + 1;
            if(newIndex >= slides.length) newIndex = 0;
            updateCarousel(newIndex);
        });

        prevBtn.addEventListener('click', () => {
            let newIndex = currentIndex - 1;
            if(newIndex < 0) newIndex = slides.length - 1;
            updateCarousel(newIndex);
        });

        thumbs.forEach(thumb => {
            thumb.addEventListener('click', () => {
                updateCarousel(parseInt(thumb.dataset.index));
            });
        });

        // Chat open/close
        const chatWidget = document.getElementById('chatWidget');
        document.getElementById('chatOpen')?.addEventListener('click', (e) => {
            e.preventDefault();
            chatWidget.classList.add('open');
            chatWidget.scrollIntoView({behavior:'smooth', block:'nearest'});
        });
        document.getElementById('chatClose')?.addEventListener('click', () => chatWidget.classList.remove('open'));

        // Branch selector (placeholder)
        document.querySelectorAll('[data-branch]').forEach(btn => {
            btn.addEventListener('click', () => {
                document.querySelectorAll('.branch').forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
            });
        });
    </script>
</body>
</html>
