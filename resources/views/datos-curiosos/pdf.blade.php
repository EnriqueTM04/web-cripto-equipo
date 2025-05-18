<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ $fact->titulo }}</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; margin: 40px; }
        h1 { color: #4f46e5; }
        .desc { margin-top: 20px; }
        .footer { font-size: 12px; color: #888; margin-top: 40px; }
    </style>
</head>
<body>
    <h1>{{ $fact->titulo }}</h1>
    <div class="desc">
        @if(isset($fact->descripcion))
            <p>{{ $fact->descripcion }}</p>
        @else
            <p>No hay descripción disponible.</p>
        @endif
    </div>
    <div class="footer">
        © 2025 CriptTeam.
    </div>
</body>
</html>
