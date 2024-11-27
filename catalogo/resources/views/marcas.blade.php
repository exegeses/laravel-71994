@include('layouts.header')

<main>
    <div class="mx-auto max-w-4xl py-12 px-8">

        <h1 class="text-2xl font-bold">Panel de administración de marcas</h1>

        @if( session('mensaje') )
            <x-alert></x-alert>
        @endif

        <table class="w-2/3 mx-auto mt-8">
            <thead>
            <tr>
                <th class="py-1 px-3 text-left w1/6">id</th>
                <th class="py-1 px-3 text-left w4/6">Marca</th>
                <th  class="py-1 px-3 text-right w1/6">
                    <a href="/marca/create"
                       class="inline-flex items-center px-1 py-1 px-3 border-2 rounded-md border-teal-400 dark:border-teal-600 text-sm font-medium leading-5 text-gray-900 dark:text-teal-400 hover:bg-teal-900 focus:outline-none focus:border-teal-700 transition duration-150 ease-in-out"
                    >&nbsp; Agregar &nbsp;</a>
                </th>
            </tr>
            </thead>

            <tbody>

                <tr class="hover:bg-gray-950 odd:bg-gray-700">
                    <td class="py-2 px-3">{{ 'idMarca' }}</td>
                    <td class="py-2 px-3 text-xl">{{ 'mkNombre' }}</td>
                    <td class="text-right py-2 px-3">
                        <a href="/marca/edit/{{ 'idMarca' }}"
                           class="inline-flex items-center px-1 py-1 px-3 border-2 rounded-md border-teal-400 dark:border-teal-600 text-sm font-medium leading-5 text-gray-900 dark:text-teal-400 hover:bg-teal-900 focus:outline-none focus:border-teal-700 transition duration-150 ease-in-out"
                        >&nbsp; Modificar &nbsp;</a>
                        <a href="/marca/delete/{{ 'idMarca' }}"
                           class="inline-flex items-center px-1 py-1 px-3 border-2 rounded-md border-teal-400 dark:border-teal-600 text-sm font-medium leading-5 text-gray-900 dark:text-teal-400 hover:bg-teal-900 focus:outline-none focus:border-teal-700 transition duration-150 ease-in-out"
                        >&nbsp; Eliminar &nbsp;</a>
                    </td>
                </tr>

            </tbody>
        </table>



    </div>
</main>

@include('layouts.footer')
