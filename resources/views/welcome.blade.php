<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Univisa</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('resources/css/app.css') }}">
    <style>
        .fade-out {
            opacity: 0;
            transition: opacity 1s ease;
            pointer-events: none;
        }
        .hidden {
            display: none;
        }
    </style>
</head>
<body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] min-h-screen flex flex-col items-center justify-center">
    <!-- Splash con logo -->
    <div id="splash" class="flex flex-col items-center justify-center min-h-screen w-full absolute top-0 left-0 bg-[#FDFDFC] dark:bg-[#0a0a0a] z-10">
        <img src="{{ asset('logo.png') }}" alt="Logo Univisa" class="w-32 h-32 mb-6">
        <h1 class="text-3xl font-bold mb-2">Bienvenido a Univisa</h1>
        <p class="text-lg text-[#706f6c]">Tu plataforma universitaria</p>
    </div>

    <!-- Portada principal -->
    <div id="portada" class="hidden flex flex-col items-center justify-center min-h-screen w-full px-4">
        <h2 class="text-2xl font-bold mb-4">Nuestros logros</h2>
        <ul class="mb-6 text-[#1b1b18]">
            <li>✔️ Acreditación internacional</li>
            <li>✔️ Más de 10,000 egresados</li>
            <li>✔️ Laboratorios modernos</li>
        </ul>
        <h2 class="text-xl font-semibold mb-2">Visión</h2>
        <p class="mb-4 text-[#706f6c]">Ser la universidad líder en innovación y excelencia académica.</p>
        <h2 class="text-xl font-semibold mb-2">Misión</h2>
        <p class="mb-4 text-[#706f6c]">Formar profesionales íntegros y comprometidos con el desarrollo social.</p>
        <h2 class="text-xl font-semibold mb-2">¿Por qué estudiar en Univisa?</h2>
        <div class="bg-[#f3f3f3] p-4 rounded shadow w-full max-w-md mb-6">
            <p>Univisa te ofrece educación de calidad, docentes expertos y oportunidades de crecimiento profesional.</p>
        </div>
        <textarea class="w-full max-w-md p-2 border rounded" rows="3" placeholder="Escribe aquí por qué te gustaría estudiar en Univisa..."></textarea>
        <a href="{{ route('login') }}" class="bg-blue-600 text-white px-4 py-2 rounded mb-6 hover:bg-blue-700 transition">Iniciar sesión</a>
    </div>

    <!-- Pie de página oculto al inicio -->
    <div id="footer" class="hidden">
        @include('footer')
    </div>

    <script>
        // Oculta el splash y muestra la portada y el footer después de 2.5 segundos
        setTimeout(function() {
            document.getElementById('splash').classList.add('fade-out');
            setTimeout(function() {
                document.getElementById('splash').classList.add('hidden');
                document.getElementById('portada').classList.remove('hidden');
                document.getElementById('footer').classList.remove('hidden');
            }, 1000);
        }, 2500);
    </script>
</body>
</html>