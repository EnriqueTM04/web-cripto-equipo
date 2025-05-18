<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ $fact->titulo }}</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            margin: 0;
            padding: 0;
            background: #f3f4f6;
        }
        .pdf-container {
            background: #fff;
            border-radius: 16px;
            margin: 40px auto;
            max-width: 580px;
            box-shadow: 0 6px 32px #18181b0d;
            padding: 40px 38px 30px 38px;
        }
        .logo {
            display: block;
            margin: 0 auto 24px auto;
            width: 82px;
            height: auto;
        }
        h1 {
            color: #4338ca;
            text-align: center;
            margin-bottom: 16px;
            font-size: 2.1em;
            line-height: 1.1;
            letter-spacing: 0.01em;
        }
        .desc {
            margin-top: 12px;
            margin-bottom: 36px;
            font-size: 1.13em;
            color: #262626;
            text-align: justify;
        }
        .divider {
            width: 60%;
            height: 3px;
            margin: 30px auto 20px auto;
            border-radius: 4px;
            background: linear-gradient(90deg, #6366f1 30%, #38bdf8 100%);
        }
        .claim {
            margin: 20px auto 32px auto;
            color: #4338ca;
            font-size: 1.05em;
            font-weight: 600;
            text-align: center;
            letter-spacing: 0.03em;
        }
        .footer {
            font-size: 0.97em;
            color: #888;
            text-align: right;
            margin-top: 24px;
            border-top: 1px solid #e5e7eb;
            padding-top: 10px;
            letter-spacing: 0.02em;
        }
    </style>
</head>
<body>
    <div class="pdf-container">
        <!-- Logo (ajusta la ruta según sea necesario) -->
        <img src="{{ public_path('img/Logo.png') }}"
            alt="Criptografía Icon"
            style="display:block; margin:0 auto 24px auto; width:130px; height:auto;">


        <h1>{{ $fact->titulo }}</h1>

        <div class="divider"></div>

        <div class="desc">
            @if(isset($fact->descripcion))
                <p>{{ $fact->descripcion }}</p>
            @else
                <p>No hay descripción disponible.</p>
            @endif
        </div>

        <div class="claim">
            {{ __('Tu fuente confiable de datos y curiosidades de criptografía.') }}
        </div>

        <div class="footer">
            © 2025 CriptTeam.
        </div>
    </div>
</body>
</html>
