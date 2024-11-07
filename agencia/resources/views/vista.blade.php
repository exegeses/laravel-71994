@include('layouts.header')

    <main class="container">
        <h1>soy una vista</h1>

        <!-- handlebars   o   mustache -->
        Nombre: {{ $nombre }}
        <hr>
        Numero: {{ $numero }}
        <hr>
        <!-- directivas  -->
        @if( $numero < 100 )
            es menor que 100
        @else
            no es menor que 100
        @endif

        <ul>
            @foreach($datos as $clave => $elemento)
                <li>{{ $elemento }}</li>
            @endforeach
        </ul>

    </main>

@include('layouts.footer')
