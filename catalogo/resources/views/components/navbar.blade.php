<nav class="flex items-center space-x-4 mr-2">

    <x-nav-link href="/dashboard" :active="request()->is('dashboard')">
        Dashboard
    </x-nav-link>
    <x-nav-link href="/marcas" :active="request()->is('marcas')">
        Marcas
    </x-nav-link>
    <x-nav-link href="/categorias" :active="request()->is('categorias')">
        Categorias
    </x-nav-link>
    <x-nav-link href="/productos" :active="request()->is('productos')">
        Productos
    </x-nav-link>

</nav>
