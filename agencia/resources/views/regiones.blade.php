@include('layouts.header')

<main>
    <div class="mx-auto max-w-4xl py-12 px-8">

        <h1 class="text-2xl font-bold">Panel de administración de regiones</h1>

        <table class="w-2/3 mx-auto mt-8">
            <thead>
            <tr>
                <th class="py-1 px-3 text-left w1/6">id</th>
                <th class="py-1 px-3 text-left w4/6">Región</th>
                <th  class="py-1 px-3 text-right w1/6">
                    <a href="/region/create"
                       class="inline-flex items-center px-1 py-1 px-3 border-2 rounded-md border-green-400 dark:border-green-600 text-sm font-medium leading-5 text-gray-900 dark:text-green-400 hover:bg-green-900 focus:outline-none focus:border-green-700 transition duration-150 ease-in-out"
                    >&nbsp; agregar &nbsp;</a>
                </th>
            </tr>
            </thead>

            <tbody>
            @foreach( $regiones as $region )
                <tr class="hover:bg-gray-950 odd:bg-gray-700">
                    <td class="py-2 px-3">{{ $region->idRegion }}</td>
                    <td class="py-2 px-3 text-xl">{{ $region->nombre }}</td>
                    <td class="text-right py-2 px-3">
                        <a href="/region/edit/{{ 'idRegion' }}"
                           class="inline-flex items-center px-1 py-1 px-3 border-2 rounded-md border-green-400 dark:border-green-600 text-sm font-medium leading-5 text-gray-900 dark:text-green-400 hover:bg-green-900 focus:outline-none focus:border-green-700 transition duration-150 ease-in-out"
                        >&nbsp; Modificar &nbsp;</a>
                        <x-botones href="{{ url('/region/delete/'.'idRegion')}}">Eliminar</x-botones>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>



    </div>
</main>

@include('layouts.footer')
