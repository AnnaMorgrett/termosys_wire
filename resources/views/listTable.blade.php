<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg dark:border-gray-200">
                <div class="p-6 bg-white border-b border-gray-200 dark:bg-gray-800">

                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg dark:border-gray-200">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                       #
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Suhu Kolam
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Kadar pH Kolam
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Ketinggian Air
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Arus Air
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tables as $key => $value)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <td class="px-6 py-4"> {{ $value->id }} </td>
                                        <td class="px-6 py-4"> {{ $value->temp_1 }} </td>
                                        <td class="px-6 py-4"> {{ $value->ph_1 }} </td>
                                        <td class="px-6 py-4"> {{ $value->water_distance }} </td>
                                        <td class="px-6 py-4"> {{ $value->water_flow }} </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$tables->links() }}
                    </div>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
