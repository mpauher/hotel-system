@vite('resources/css/app.css')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('COMODIDADES') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-table-amenitie  dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                   
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <caption class="p-5 text-lg font-semibold text-center text-gray-900 bg-title-table-amenitie dark:text-white dark:bg-gray-800">
                                <div class="flex justify-between">
                                    <h2 class="h2-amenities">Comodidades</h2>
                                    <a href="{{ route ('amenitie.new') }}" type="button" class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Agregar</a>
                                </div>
                            </caption>
                            <thead class="sub-title-amenitie text-xs text-gray-700 uppercase dark:bg-gray-700 dark:text-gray-400 text-center">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                       Id
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Nombre
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Actualizar
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Eliminar
                                    </th>
                                </tr>
                            </thead>
                            @foreach ($amenities as $amenitie)
                                <tbody>
                                    <tr class="bg-row-amenitie border-b dark:bg-gray-800 dark:border-gray-700 text-center">
                                        <th scope="row" class="bg-row-amenitie px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                            {{$amenitie -> id}}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{$amenitie -> name}}
                                        </td>
                                        <td class="px-6 py-4">
                                            <a href="{{ route('amenitie.put', $amenitie->id) }}" class="bg-row-amenitie icon-update text-blue-600 dark:text-blue-500 hover:underline">
                                                Actualizar
                                            </a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <form action="{{ Route('amenitie.delete',$amenitie) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button class="bg-row-amenitie icon-delete text-blue-600 dark:text-blue-500 hover:underline">Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>   
    </div>
</x-app-layout>