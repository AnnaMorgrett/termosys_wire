<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Suhu Air</th>
                                <th>Kadar pH Air</th>
                                <th>Ketinggian Air</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tables as $key => $value)
                                <tr>
                                    <td> {{ $value->id }} </td>
                                    <td> {{ $value->temp_1 }} </td>
                                    <td> {{ $value->ph_1 }} </td>
                                    <td> {{ $value->distance_water }} </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
