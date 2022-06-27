<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>How To Create Dynamic Line Chart In Laravel 9 - Websolutionstuff</title>	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="{{asset('assets/css/components.min.css')}}" rel="stylesheet" type="text/css">	
	<link href="{{asset('assets/css/components.min.css')}}" rel="stylesheet" type="text/css">  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/echarts/5.3.1/echarts.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
<div class="col-md-12">
	<h1 class="text-center">How To Create Dynamic Line Chart In Laravel 9 - Websolutionstuff</h1>
    <div class="col-md-8 col-md-offset-2">
    	<div class="col-xl-6">
    		<div class="card">
    			<div class="card-body">
    				<div class="chart-container">
    					<div class="chart has-fixed-height" id="line_stacked"></div>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>	
</div>
</body>
</html>

<script type="text/javascript">
var line_stacked_element = document.getElementById('line_stacked');
if (line_stacked_element) {
    var line_stacked = echarts.init(line_stacked_element);
    line_stacked.setOption({
        animationDuration: 750,
        grid: {
            left: 0,
            right: 20,
            top: 35,
            bottom: 0,
            containLabel: true
        },        
        legend: {
            data: ['Laptop', 'Phone', 'Desktop'],
            itemHeight: 8,
            itemGap: 20
        },

        // Add tooltip
        tooltip: {
            trigger: 'axis',
            backgroundColor: 'rgba(0,0,0,0.75)',
            padding: [10, 15],
            textStyle: {
                fontSize: 13,
                fontFamily: 'Roboto, sans-serif'
            }
        },
        
        xAxis: [{
            type: 'category',
            boundaryGap: false,
            data: [
                '2020', '2021', '2022'
            ],
            axisLabel: {
                color: '#333'
            },
            axisLine: {
                lineStyle: {
                    color: '#999'
                }
            },
            splitLine: {
                lineStyle: {
                    color: ['#eee']
                }
            }
        }],

        // Vertical axis
        yAxis: [{
            type: 'value',
            axisLabel: {
                color: '#333'
            },
            axisLine: {
                lineStyle: {
                    color: '#999'
                }
            },
            splitLine: {
                lineStyle: {
                    color: ['#eee']
                }
            },
            splitArea: {
                show: true,
                areaStyle: {
                    color: ['rgba(250,250,250,0.1)', 'rgba(0,0,0,0.01)']
                }
            }
        }],

        // Add series
        series: [            
            {
                name: 'Laptop',
                type: 'line',
                stack: 'Total',
                smooth: true,
                symbolSize: 7,
                data: [{{$laptop_count_20}},{{$laptop_count_21}},{{$laptop_count_22}}],
                itemStyle: {
                    normal: {
                        borderWidth: 2
                    }
                }
            },
            {
                name: 'Phone',
                type: 'line',
                stack: 'Total',
                smooth: true,
                symbolSize: 7,
                data: [{{$phone_count_20}},{{$phone_count_21}},{{$phone_count_22}}],
                itemStyle: {
                    normal: {
                        borderWidth: 2
                    }
                }
            },
            {
                name: 'Desktop',
                type: 'line',
                stack: 'Total',
                smooth: true,
                symbolSize: 7,
                data: [{{$desktop_count_20}},{{$desktop_count_21}},{{$desktop_count_22}}],
                itemStyle: {
                    normal: {
                        borderWidth: 2
                    }
                }
            }
        ]
    });
}
</script>