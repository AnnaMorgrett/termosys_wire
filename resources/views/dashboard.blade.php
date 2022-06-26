<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
   google.charts.load('current', {'packages':['gauge']});
   google.charts.setOnLoadCallback(drawChart);

   function drawChart() {

     var data = google.visualization.arrayToDataTable([
       ['Label', 'Value'],
       ['Memory', 24],
       ['CPU', 25],
       ['Network', 26]
     ]);

     var options = {
       width: 800, height: 400,
       redFrom: 29, redTo: 30,
       yellowFrom:26, yellowTo: 28,
                min: 18,
                max: 30,

       minorTicks: 5
     };

     var chart = new google.visualization.Gauge(document.getElementById('chart_div'));

     chart.draw(data, options);

     setInterval(function() {
    //    data.setValue(0, 1, 40 + Math.round(60 * Math.random()));
       chart.draw(data, options);
     }, 13000);
     setInterval(function() {
    //    data.setValue(1, 1, 40 + Math.round(60 * Math.random()));
       chart.draw(data, options);
     }, 5000);
     setInterval(function() {
    //    data.setValue(2, 1, 60 + Math.round(20 * Math.random()));
       chart.draw(data, options);
     }, 26000);
   }
 </script>


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
                    <div id="chart_div"></div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
