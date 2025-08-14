<footer class="w-full bg-[#f3f3f3] text-[#1b1b18] py-6 mt-8">
    <div class="max-w-4xl mx-auto px-4 flex flex-col md:flex-row justify-between items-center">
        <div class="mb-4 md:mb-0">
            <strong>Contacto:</strong><br>
            Tel: +51 123 456 789<br>
            Email: contacto@univisa.edu.pe
        </div>
        <div class="mb-4 md:mb-0">
            <strong>Dirección:</strong><br>
            Av. Universitaria 123, Lima, Perú
        </div>
        <div>
            <a href="{{ url('/about') }}" class="text-blue-600 hover:underline mr-4">Sobre Univisa</a>
            <a href="{{ url('/contact') }}" class="text-blue-600 hover:underline">Contáctanos</a>
        </div>
    </div>
    <div class="text-center text-xs text-[#706f6c] mt-4">
        &copy; {{ date('Y') }} Univisa. Todos los derechos reservados.
    </div>
</footer>