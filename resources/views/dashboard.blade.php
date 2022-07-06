
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/series-label.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-white leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    {{-- <?= $created_at ?> --}}
                    
                    <div id="line-chart"></div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    $(function() {
        Highcharts.chart('line-chart', {

            title: {
                text: 'Monitoring Kolam Pendederan Ikan Koi Berbasis Website'
            },

            subtitle: {
                text: 'Sumber: Dinas Peternakan dan Perikanan Kab. Magetan'
            },

            yAxis: {
                title: {
                    text: 'Nilai'
                }
            },

            xAxis: {
                accessibility: {
                    rangeDescription: 'Data Rekam'
                },
                //  {
                //     categories: <?= $created_at ?>
                // },
            },

            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },

            plotOptions: {
                series: {
                    label: {
                        connectorAllowed: false
                    },
                    // pointStart: 2010
                }
            },

            series: [{
                name: 'Temperatur Kolam 1 ( °C)',
                data: <?= $temp_1 ?>
            }, {
                name: 'Temperatur Kolam 2 ( °C)',
                data: <?= $temp_2 ?>
            }, {
                name: 'Temperatur Kolam 3 ( °C)',
                data: <?= $temp_3 ?>
            }, {
                name: 'Kadar pH Kolam 1 ( pH)',
                data: <?= $ph_1 ?>
            }, {
                name: 'Ketinggian Pakan ( cm)',
                data: <?= $feeder_distance ?>
            }, {
                name: 'Ketinggian Air ( cm)',
                data: <?= $water_distance ?>
            }, {
                name: 'Arus Air (l/min)',
                data: <?= $water_flow ?>
            }],

            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            layout: 'horizontal',
                            align: 'center',
                            verticalAlign: 'bottom'
                        }
                    }
                }]
            }
        });
    });
</script>
