@include('layouts.header')

<main>
    <div class="mx-auto max-w-4xl py-12 px-8">

        <h1 class="text-2xl font-bold">Panel de administración de destinos</h1>

        @if( session('mensaje') )
            <x-alert></x-alert>
        @endif
        <table class="mx-auto mt-8">
            <thead>
            <tr>
                <th class="py-1 px-3 text-left w1/9">id</th>
                <th class="py-1 px-3 text-left w3/9">Destino</th>
                <th class="py-1 px-3 text-left w1/9">Precio</th>
                <th class="py-1 px-3 text-left w3/9">Región</th>
                <th  class="py-1 px-3 text-right w1/9">
                    <a href="/destino/create"
                       class="inline-flex items-center px-1 py-1 px-3 border-2 rounded-md border-green-400 dark:border-green-600 text-sm font-medium leading-5 text-gray-900 dark:text-green-400 hover:bg-green-900 focus:outline-none focus:border-green-700 transition duration-150 ease-in-out"
                    >&nbsp; agregar &nbsp;</a>
                </th>
            </tr>
            </thead>

            <tbody>
        @foreach( $destinos as $destino )
            <tr class="hover:bg-gray-950 odd:bg-gray-700">
                <td class="py-2 px-3">{{ $destino->idDestino }}</td>
                <td class="py-2 px-3 text-xl">{{ $destino->aeropuerto }}</td>
                <td class="py-2 px-3 text-xl">{{ $destino->precio }}</td>
                <td class="py-2 px-3 text-xl">{{ $destino->nombre }}</td>
                <td class="text-right py-2 px-3">
                    <a href="/destino/edit/{{ 'idDestino' }}"
                       class="inline-flex items-center px-1 py-1 px-3 border-2 rounded-md border-green-400 dark:border-green-600 text-sm font-medium leading-5 text-gray-900 dark:text-green-400 hover:bg-green-900 focus:outline-none focus:border-green-700 transition duration-150 ease-in-out"
                    >&nbsp; Modificar &nbsp;</a>
                    <a href="/destino/delete/{{ 'idDestino' }}"
                       class="inline-flex items-center px-1 py-1 px-3 border-2 rounded-md border-green-400 dark:border-green-600 text-sm font-medium leading-5 text-gray-900 dark:text-green-400 hover:bg-green-900 focus:outline-none focus:border-green-700 transition duration-150 ease-in-out"
                    >&nbsp; Eliminar &nbsp;</a>
                </td>
            </tr>
        @endforeach
            </tbody>
        </table>



    </div>
</main>

@include('layouts.footer')
