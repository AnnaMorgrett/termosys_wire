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

                        <form method="GET">
                            <div class="flex justify-end">
                                <div class="mb-3 xl:w-96">
                                  <div class="input-group relative flex flex-wrap items-stretch w-full mb-4 rounded">
                                    <input type="cari" class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="cari" aria-label="cari" aria-describedby="button-addon2">
                                  
                                  </div>
                                </div>
                              </div>
                        </form>
                        {{-- <form method="GET">
                            <div class="form-group row">
                                 <label for=""class="col-sm-2col-form-label">
                                     Cari Data
                                 </label>
                                 <div class="col-sm-10">
                                     <input type="text"name="cari"id="cari" class="form-control" placeholder="Cari Data Sensor" autofocus="true" value="{{ $cari }}">
                                 </div>
                            </div>
                        </form> --}}

                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        @sortablelink('id', '#')

                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        @sortablelink('temp_1', 'Suhu Air')
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        @sortablelink('ph_1', 'pH Air')
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        @sortablelink('water_distance', 'Ketinggian Air')
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        @sortablelink('water_flow', 'Arus Air')
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($table as $key => $value)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <td class="px-6 py-4"> {{ $value->id }} </td>
                                        <td class="px-6 py-4"> {{ $value->temp_1 }} </td>
                                        <td class="px-6 py-4"> {{ $value->ph_1 }} </td>
                                        <td class="px-6 py-4"> {{ $value->water_distance }} </td>
                                        <td class="px-6 py-4"> {{ $value->water_flow }} </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table class="mb-4">>
                        {{-- {{$tables->links() }} --}}
                        {!! $table->appends(\Request::except('page'))->render() !!}
                    </div>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
