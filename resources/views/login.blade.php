<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Login Univisa</title>
    <link rel="stylesheet" href="{{ asset('resources/css/app.css') }}">
</head>
<body class="bg-[#FDFDFC] flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded shadow w-full max-w-sm">
        <h2 class="text-2xl font-bold mb-6 text-center">Iniciar sesión</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-4">
                <label class="block mb-1 font-semibold" for="email">Correo electrónico</label>
                <input type="email" name="email" id="email" class="w-full p-2 border rounded" required>
            </div>
            <div class="mb-6">
                <label class="block mb-1 font-semibold" for="password">Contraseña</label>
                <input type="password" name="password" id="password" class="w-full p-2 border rounded" required>
            </div>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded w-full hover:bg-blue-700 transition">Entrar</button>
        </form>
    </div>
</body>
</html>