<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>KendaliKita - Smart Control</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/custom.css') ?>">
    <style>
        body {
            min-height: 100vh;
            background: linear-gradient(125deg, #0ea5e9 60%, #3b82f6 100%);
            color: #fff;
        }
        .main-landing {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        .brand-logo {
            font-size: 2.9rem;
            margin-bottom: 18px;
            animation: popIn 0.8s cubic-bezier(.34,1.56,.64,1) 0.2s both;
        }
        @keyframes popIn {
            0% { opacity: 0; transform: scale(0.8);}
            100% { opacity: 1; transform: scale(1);}
        }
        .landing-card {
            background: rgba(255,255,255,0.11);
            border-radius: 28px;
            box-shadow: 0 6px 44px #14437e41;
            padding: 38px 24px 36px;
            margin-bottom: 18px;
            animation: fadeDown 0.8s cubic-bezier(.42,1.45,.62,1) 0.45s both;
        }
        @keyframes fadeDown {
            0% { opacity:0; transform: translateY(-20px);}
            100% { opacity:1; transform: translateY(0);}
        }
        .btn-mulai {
            font-size: 1.13em;
            font-weight: 600;
            border-radius: 16px;
            padding: 0.8em 2.4em;
            margin-top: 12px;
            background: linear-gradient(90deg,#fff,#b9e2fc);
            color: #1570ef;
            box-shadow: 0 4px 24px #fff3;
            border: none;
            transition: background 0.28s, color 0.21s, box-shadow 0.28s;
        }
        .btn-mulai:hover {
            background: linear-gradient(90deg,#3b82f6 60%,#0ea5e9 100%);
            color: #fff;
            box-shadow: 0 4px 44px #2563eb66;
        }
        .slogan {
            font-size: 1.15em;
            letter-spacing: 0.3px;
            margin-bottom: 16px;
            opacity: .86;
        }
        .landing-bg-circle {
            position: absolute;
            top: -60px; right: -90px;
            width: 230px; height: 230px;
            background: linear-gradient(135deg,#f0f9ffbb,#dbeafe99,#93c5fd88 60%);
            border-radius: 50%;
            z-index: 0;
            filter: blur(10px);
        }
        @media (max-width: 600px){
            .landing-card { padding: 30px 8px 28px; }
            .brand-logo { font-size: 2.1rem; }
            .landing-bg-circle { width: 140px; height: 140px; top: -20px; right: -40px;}
        }
    </style>
</head>
<body>
<div class="landing-bg-circle"></div>
<div class="main-landing position-relative">
    <div class="brand-logo mb-2">
        <i class="bi bi-sliders2-vertical me-2"></i> KendaliKita
    </div>
    <div class="landing-card mx-auto" style="max-width:420px;">
        <div class="mb-3">
            <img src="https://cdn-icons-png.flaticon.com/512/2490/2490285.png" width="78" alt="water pump" style="margin-bottom:10px;filter:drop-shadow(0 4px 32px #38bdf833)">
        </div>
        <div class="slogan mb-2">
            Smart Monitoring & Kontrol Pompa Air Otomatis<br>
            <span style="font-size:0.96em;opacity:.7;">Terkoneksi, Efisien, Real-time</span>
        </div>
        <a href="<?= site_url('pompa/dashboard') ?>" class="btn btn-mulai shadow-lg mt-3">Mulai<i class="bi bi-chevron-right ms-2"></i></a>
    </div>
    <footer class="mt-5 text-white-50 small" style="opacity:0.80;">&copy; <?= date('Y') ?> KendaliKita | Smart IoT App</footer>
</div>
</body>
</html>
