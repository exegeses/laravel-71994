<nav class="flex items-center space-x-4 mr-2">

    <x-nav-link href="/dashboard" :active="request()->is('dashboard')">
        Dashboard
    </x-nav-link>
    <x-nav-link href="/regiones" :active="request()->is('regiones')">
        Regiones
    </x-nav-link>
    <x-nav-link href="/destinos" :active="request()->is('destinos')">
        Destinos
    </x-nav-link>

</nav>
