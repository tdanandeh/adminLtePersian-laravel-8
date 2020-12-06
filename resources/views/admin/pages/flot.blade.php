@extends('admin.layout.admin')
@section('title','flot ')

@section('body')

    <div class="content-wrapper" style="min-height: 845px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Flot Charts</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="#">خانه</a></li>
                            <li class="breadcrumb-item active">نمودار Flot</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!-- interactive chart -->
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fa fa-bar-chart-o"></i>
                                    نمودار منطقه‌ای
                                </h3>

                                <div class="card-tools">
                                    لحظه‌ای
                                    <div class="btn-group" id="realtime" data-toggle="btn-toggle">
                                        <button type="button" class="btn btn-default btn-sm active" data-toggle="on">روشن</button>
                                        <button type="button" class="btn btn-default btn-sm" data-toggle="off">خاموش</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="interactive" style="height: 300px; padding: 0px; position: relative;"><canvas class="flot-base" width="1169" height="300" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 1169px; height: 300px;"></canvas><div class="flot-text" style="position: absolute; inset: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; inset: 0px;"><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 106px; top: 280px; left: 25px; text-align: center;">0</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 106px; top: 280px; left: 136px; text-align: center;">10</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 106px; top: 280px; left: 250px; text-align: center;">20</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 106px; top: 280px; left: 365px; text-align: center;">30</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 106px; top: 280px; left: 479px; text-align: center;">40</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 106px; top: 280px; left: 593px; text-align: center;">50</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 106px; top: 280px; left: 708px; text-align: center;">60</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 106px; top: 280px; left: 822px; text-align: center;">70</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 106px; top: 280px; left: 936px; text-align: center;">80</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 106px; top: 280px; left: 1051px; text-align: center;">90</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; inset: 0px;"><div class="flot-tick-label tickLabel" style="position: absolute; top: 266px; left: 16px; text-align: right;">0</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 213px; left: 8px; text-align: right;">20</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 160px; left: 8px; text-align: right;">40</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 107px; left: 9px; text-align: right;">60</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 54px; left: 8px; text-align: right;">80</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 1px; left: 1px; text-align: right;">100</div></div></div><canvas class="flot-overlay" width="1169" height="300" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 1169px; height: 300px;"></canvas></div>
                            </div>
                            <!-- /.card-body-->
                        </div>
                        <!-- /.card -->

                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-md-6">
                        <!-- Line chart -->
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fa fa-bar-chart-o"></i>
                                    نمودار خطی
                                </h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="line-chart" style="height: 300px; padding: 0px; position: relative;"><canvas class="flot-base" width="557" height="300" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 557px; height: 300px;"></canvas><div class="flot-text" style="position: absolute; inset: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; inset: 0px;"><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 69px; top: 280px; left: 25px; text-align: center;">0</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 69px; top: 280px; left: 102px; text-align: center;">2</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 69px; top: 280px; left: 179px; text-align: center;">4</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 69px; top: 280px; left: 256px; text-align: center;">6</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 69px; top: 280px; left: 333px; text-align: center;">8</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 69px; top: 280px; left: 407px; text-align: center;">10</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 69px; top: 280px; left: 484px; text-align: center;">12</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; inset: 0px;"><div class="flot-tick-label tickLabel" style="position: absolute; top: 266px; left: 1px; text-align: right;">-1.5</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 221px; left: 1px; text-align: right;">-1.0</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 177px; left: 1px; text-align: right;">-0.5</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 133px; left: 5px; text-align: right;">0.0</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 89px; left: 5px; text-align: right;">0.5</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 45px; left: 5px; text-align: right;">1.0</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 1px; left: 5px; text-align: right;">1.5</div></div></div><canvas class="flot-overlay" width="557" height="300" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 557px; height: 300px;"></canvas></div>
                            </div>
                            <!-- /.card-body-->
                        </div>
                        <!-- /.card -->

                        <!-- Area chart -->
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fa fa-bar-chart-o"></i>
                                    نمودار منطقه ای با عرض کامل
                                </h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="area-chart" style="height: 338px; padding: 0px; position: relative;" class="full-width-chart"><canvas class="flot-base" width="595" height="338" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 595px; height: 338px;"></canvas><canvas class="flot-overlay" width="595" height="338" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 595px; height: 338px;"></canvas></div>
                            </div>
                            <!-- /.card-body-->
                        </div>
                        <!-- /.card -->

                    </div>
                    <!-- /.col -->

                    <div class="col-md-6">
                        <!-- Bar chart -->
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fa fa-bar-chart-o"></i>
                                    نمودار ستونی
                                </h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-widget="collapse">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-widget="remove">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="bar-chart" style="height: 300px; padding: 0px; position: relative;"><canvas class="flot-base" width="557" height="300" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 557px; height: 300px;"></canvas><div class="flot-text" style="position: absolute; inset: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; inset: 0px;"><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 92px; top: 280px; left: 25px; text-align: center;">January</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 92px; top: 280px; left: 115px; text-align: center;">February</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 92px; top: 280px; left: 214px; text-align: center;">March</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 92px; top: 280px; left: 311px; text-align: center;">April</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 92px; top: 280px; left: 404px; text-align: center;">May</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 92px; top: 280px; left: 493px; text-align: center;">June</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; inset: 0px;"><div class="flot-tick-label tickLabel" style="position: absolute; top: 266px; left: 8px; text-align: right;">0</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 199px; left: 8px; text-align: right;">5</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 133px; left: 1px; text-align: right;">10</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 67px; left: 1px; text-align: right;">15</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 1px; left: 1px; text-align: right;">20</div></div></div><canvas class="flot-overlay" width="557" height="300" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 557px; height: 300px;"></canvas></div>
                            </div>
                            <!-- /.card-body-->
                        </div>
                        <!-- /.card -->

                        <!-- Donut chart -->
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fa fa-bar-chart-o"></i>
                                    نمودار حلقه‌ای
                                </h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="donut-chart" style="height: 300px; padding: 0px; position: relative;"><canvas class="flot-base" width="557" height="300" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 557px; height: 300px;"></canvas><canvas class="flot-overlay" width="557" height="300" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 557px; height: 300px;"></canvas><span class="pieLabel" id="pieLabel0" style="position: absolute; top: 70px; left: 335.305px;"><div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">Series2<br>30%</div></span><span class="pieLabel" id="pieLabel1" style="position: absolute; top: 210px; left: 313.305px;"><div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">Series3<br>20%</div></span><span class="pieLabel" id="pieLabel2" style="position: absolute; top: 129px; left: 154.305px;"><div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">Series4<br>50%</div></span></div>
                            </div>
                            <!-- /.card-body-->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

@endsection
@section('js')

    <script src="{{asset('livedars/admin/plugins/flot/jquery.flot.min.js')}}"></script>
    <!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
    <script src="{{asset('livedars/admin/plugins/flot/jquery.flot.resize.min.js')}}"></script>
    <!-- FLOT PIE PLUGIN - also used to draw donut charts -->
    <script src="{{asset('livedars/admin/plugins/flot/jquery.flot.pie.min.js')}}"></script>
    <!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
    <script src="{{asset('livedars/admin/plugins/flot/jquery.flot.categories.min.js')}}"></script>
    <!-- Page script -->
    <script>
        $(function () {
            /*
             * Flot Interactive Chart
             * -----------------------
             */
            // We use an inline data source in the example, usually data would
            // be fetched from a server
            var data        = [],
                totalPoints = 100

            function getRandomData() {

                if (data.length > 0) {
                    data = data.slice(1)
                }

                // Do a random walk
                while (data.length < totalPoints) {

                    var prev = data.length > 0 ? data[data.length - 1] : 50,
                        y    = prev + Math.random() * 10 - 5

                    if (y < 0) {
                        y = 0
                    } else if (y > 100) {
                        y = 100
                    }

                    data.push(y)
                }

                // Zip the generated y values with the x values
                var res = []
                for (var i = 0; i < data.length; ++i) {
                    res.push([i, data[i]])
                }

                return res
            }

            var interactive_plot = $.plot('#interactive', [getRandomData()], {
                grid  : {
                    borderColor: '#f3f3f3',
                    borderWidth: 1,
                    tickColor  : '#f3f3f3'
                },
                series: {
                    shadowSize: 0, // Drawing is faster without shadows
                    color     : '#3c8dbc'
                },
                lines : {
                    fill : true, //Converts the line chart to area chart
                    color: '#3c8dbc'
                },
                yaxis : {
                    min : 0,
                    max : 100,
                    show: true
                },
                xaxis : {
                    show: true
                }
            })

            var updateInterval = 500 //Fetch data ever x milliseconds
            var realtime       = 'on' //If == to on then fetch data every x seconds. else stop fetching
            function update() {

                interactive_plot.setData([getRandomData()])

                // Since the axes don't change, we don't need to call plot.setupGrid()
                interactive_plot.draw()
                if (realtime === 'on') {
                    setTimeout(update, updateInterval)
                }
            }

            //INITIALIZE REALTIME DATA FETCHING
            if (realtime === 'on') {
                update()
            }
            //REALTIME TOGGLE
            $('#realtime .btn').click(function () {
                if ($(this).data('toggle') === 'on') {
                    realtime = 'on'
                }
                else {
                    realtime = 'off'
                }
                update()
            })
            /*
             * END INTERACTIVE CHART
             */


            /*
             * LINE CHART
             * ----------
             */
            //LINE randomly generated data

            var sin = [],
                cos = []
            for (var i = 0; i < 14; i += 0.5) {
                sin.push([i, Math.sin(i)])
                cos.push([i, Math.cos(i)])
            }
            var line_data1 = {
                data : sin,
                color: '#3c8dbc'
            }
            var line_data2 = {
                data : cos,
                color: '#00c0ef'
            }
            $.plot('#line-chart', [line_data1, line_data2], {
                grid  : {
                    hoverable  : true,
                    borderColor: '#f3f3f3',
                    borderWidth: 1,
                    tickColor  : '#f3f3f3'
                },
                series: {
                    shadowSize: 0,
                    lines     : {
                        show: true
                    },
                    points    : {
                        show: true
                    }
                },
                lines : {
                    fill : false,
                    color: ['#3c8dbc', '#f56954']
                },
                yaxis : {
                    show: true
                },
                xaxis : {
                    show: true
                }
            })
            //Initialize tooltip on hover
            $('<div class="tooltip-inner" id="line-chart-tooltip"></div>').css({
                position: 'absolute',
                display : 'none',
                opacity : 0.8
            }).appendTo('body')
            $('#line-chart').bind('plothover', function (event, pos, item) {

                if (item) {
                    var x = item.datapoint[0].toFixed(2),
                        y = item.datapoint[1].toFixed(2)

                    $('#line-chart-tooltip').html(item.series.label + ' of ' + x + ' = ' + y)
                        .css({
                            top : item.pageY + 5,
                            left: item.pageX + 5
                        })
                        .fadeIn(200)
                } else {
                    $('#line-chart-tooltip').hide()
                }

            })
            /* END LINE CHART */

            /*
             * FULL WIDTH STATIC AREA CHART
             * -----------------
             */
            var areaData = [[2, 88.0], [3, 93.3], [4, 102.0], [5, 108.5], [6, 115.7], [7, 115.6],
                [8, 124.6], [9, 130.3], [10, 134.3], [11, 141.4], [12, 146.5], [13, 151.7], [14, 159.9],
                [15, 165.4], [16, 167.8], [17, 168.7], [18, 169.5], [19, 168.0]]
            $.plot('#area-chart', [areaData], {
                grid  : {
                    borderWidth: 0
                },
                series: {
                    shadowSize: 0, // Drawing is faster without shadows
                    color     : '#00c0ef'
                },
                lines : {
                    fill: true //Converts the line chart to area chart
                },
                yaxis : {
                    show: false
                },
                xaxis : {
                    show: false
                }
            })

            /* END AREA CHART */

            /*
             * BAR CHART
             * ---------
             */

            var bar_data = {
                data : [['January', 10], ['February', 8], ['March', 4], ['April', 13], ['May', 17], ['June', 9]],
                color: '#3c8dbc'
            }
            $.plot('#bar-chart', [bar_data], {
                grid  : {
                    borderWidth: 1,
                    borderColor: '#f3f3f3',
                    tickColor  : '#f3f3f3'
                },
                series: {
                    bars: {
                        show    : true,
                        barWidth: 0.5,
                        align   : 'center'
                    }
                },
                xaxis : {
                    mode      : 'categories',
                    tickLength: 0
                }
            })
            /* END BAR CHART */

            /*
             * DONUT CHART
             * -----------
             */

            var donutData = [
                {
                    label: 'Series2',
                    data : 30,
                    color: '#3c8dbc'
                },
                {
                    label: 'Series3',
                    data : 20,
                    color: '#0073b7'
                },
                {
                    label: 'Series4',
                    data : 50,
                    color: '#00c0ef'
                }
            ]
            $.plot('#donut-chart', donutData, {
                series: {
                    pie: {
                        show       : true,
                        radius     : 1,
                        innerRadius: 0.5,
                        label      : {
                            show     : true,
                            radius   : 2 / 3,
                            formatter: labelFormatter,
                            threshold: 0.1
                        }

                    }
                },
                legend: {
                    show: false
                }
            })
            /*
             * END DONUT CHART
             */

        })

        /*
         * Custom Label formatter
         * ----------------------
         */
        function labelFormatter(label, series) {
            return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
                + label
                + '<br>'
                + Math.round(series.percent) + '%</div>'
        }
    </script>
@endsection
