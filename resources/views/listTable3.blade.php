<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-white leading-tight">
            {{ __('Kolam 3') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg dark:border-gray-200">
                <div class="p-6 bg-white border-b border-gray-200 dark:bg-gray-800">

                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg dark:border-gray-200">

                        <form action="/table/cari" method="GET">   
                            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Search</label>
                            <div class="relative">
                                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                                </div>
                                <input type="text" name="cari" placeholder="Cari Data .." value="{{ old('cari3') }}" class="block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Mockups, Logos..." required>
                                <button type="submit" value="cari" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                            </div>
                        </form>

                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 mt-2">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        @sortablelink('id', '#')
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        @sortablelink('temp_3', 'Suhu Air ( °C)')
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        @sortablelink('created_at', 'Timestamps')
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $nomor = 1 + (($table->currentPage()-1) * $table->perPage());
                                @endphp
                                @foreach ($table as $key => $value)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <td class="px-6 py-4"> {{ $nomor++ }} </td>
                                        <td class="px-6 py-4"> {{ $value->temp_3 }} </td>
                                        <td class="px-6 py-4"> {{ $value->created_at }} </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {!! $table->appends(\Request::except('page'))->render() !!}
                    </div>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
