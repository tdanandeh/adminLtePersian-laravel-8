@extends('admin.layout.admin')
@section('title','chartjs ')

@section('body')

    <div class="content-wrapper" style="min-height: 403px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>نمودار خطی</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="#">خانه</a></li>
                            <li class="breadcrumb-item active">نمودار خطی</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- row -->
                <div class="row">
                    <div class="col-12">
                        <!-- jQuery Knob -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fa fa-bar-chart-o"></i>
                                    jQuery Knob
                                </h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6 col-md-3 text-center">
                                        <div style="display:inline;width:90px;height:90px;"><canvas width="90" height="90"></canvas><input type="text" class="knob" value="30" data-width="90" data-height="90" data-fgcolor="#3c8dbc" style="width: 49px; height: 30px; position: absolute; vertical-align: middle; margin-top: 30px; margin-left: -69px; border: 0px; background: none; font: bold 18px Arial; text-align: center; color: rgb(60, 141, 188); padding: 0px; appearance: none;"></div>

                                        <div class="knob-label">بازدید جدید</div>
                                    </div>
                                    <!-- ./col -->
                                    <div class="col-6 col-md-3 text-center">
                                        <div style="display:inline;width:90px;height:90px;"><canvas width="90" height="90"></canvas><input type="text" class="knob" value="70" data-width="90" data-height="90" data-fgcolor="#f56954" style="width: 49px; height: 30px; position: absolute; vertical-align: middle; margin-top: 30px; margin-left: -69px; border: 0px; background: none; font: bold 18px Arial; text-align: center; color: rgb(245, 105, 84); padding: 0px; appearance: none;"></div>

                                        <div class="knob-label">نرخ بازگشت</div>
                                    </div>
                                    <!-- ./col -->
                                    <div class="col-6 col-md-3 text-center">
                                        <div style="display:inline;width:90px;height:90px;"><canvas width="90" height="90"></canvas><input type="text" class="knob" value="-80" data-min="-150" data-max="150" data-width="90" data-height="90" data-fgcolor="#00a65a" style="width: 49px; height: 30px; position: absolute; vertical-align: middle; margin-top: 30px; margin-left: -69px; border: 0px; background: none; font: bold 18px Arial; text-align: center; color: rgb(0, 166, 90); padding: 0px; appearance: none;"></div>

                                        <div class="knob-label">آپتایم سرور</div>
                                    </div>
                                    <!-- ./col -->
                                    <div class="col-6 col-md-3 text-center">
                                        <div style="display:inline;width:90px;height:90px;"><canvas width="90" height="90"></canvas><input type="text" class="knob" value="40" data-width="90" data-height="90" data-fgcolor="#00c0ef" style="width: 49px; height: 30px; position: absolute; vertical-align: middle; margin-top: 30px; margin-left: -69px; border: 0px; background: none; font: bold 18px Arial; text-align: center; color: rgb(0, 192, 239); padding: 0px; appearance: none;"></div>

                                        <div class="knob-label">فضای سرور</div>
                                    </div>
                                    <!-- ./col -->
                                </div>
                                <!-- /.row -->

                                <div class="row">
                                    <div class="col-6 text-center">
                                        <div style="display:inline;width:90px;height:90px;"><canvas width="90" height="90"></canvas><input type="text" class="knob" value="90" data-width="90" data-height="90" data-fgcolor="#932ab6" style="width: 49px; height: 30px; position: absolute; vertical-align: middle; margin-top: 30px; margin-left: -69px; border: 0px; background: none; font: bold 18px Arial; text-align: center; color: rgb(147, 42, 182); padding: 0px; appearance: none;"></div>

                                        <div class="knob-label">پهنای باند</div>
                                    </div>
                                    <!-- ./col -->
                                    <div class="col-6 text-center">
                                        <div style="display:inline;width:90px;height:90px;"><canvas width="90" height="90"></canvas><input type="text" class="knob" value="50" data-width="90" data-height="90" data-fgcolor="#39CCCC" style="width: 49px; height: 30px; position: absolute; vertical-align: middle; margin-top: 30px; margin-left: -69px; border: 0px; background: none; font: bold 18px Arial; text-align: center; color: rgb(57, 204, 204); padding: 0px; appearance: none;"></div>

                                        <div class="knob-label">CPU</div>
                                    </div>
                                    <!-- ./col -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fa fa-bar-chart-o"></i>
                                    jQuery Knob Different Sizes
                                </h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6 col-md-3 text-center">
                                        <div style="display:inline;width:90px;height:90px;"><canvas width="90" height="90"></canvas><input type="text" class="knob" value="30" data-width="90" data-height="90" data-fgcolor="#3c8dbc" data-readonly="true" readonly="readonly" style="width: 49px; height: 30px; position: absolute; vertical-align: middle; margin-top: 30px; margin-left: -69px; border: 0px; background: none; font: bold 18px Arial; text-align: center; color: rgb(60, 141, 188); padding: 0px; appearance: none;"></div>

                                        <div class="knob-label">data-width="۹۰"</div>
                                    </div>
                                    <!-- ./col -->
                                    <div class="col-6 col-md-3 text-center">
                                        <div style="display:inline;width:120px;height:120px;"><canvas width="120" height="120"></canvas><input type="text" class="knob" value="30" data-width="120" data-height="120" data-fgcolor="#f56954" style="width: 64px; height: 40px; position: absolute; vertical-align: middle; margin-top: 40px; margin-left: -92px; border: 0px; background: none; font: bold 24px Arial; text-align: center; color: rgb(245, 105, 84); padding: 0px; appearance: none;"></div>

                                        <div class="knob-label">data-width="۱۲۰"</div>
                                    </div>
                                    <!-- ./col -->
                                    <div class="col-6 col-md-3 text-center">
                                        <div style="display:inline;width:90px;height:90px;"><canvas width="90" height="90"></canvas><input type="text" class="knob" value="30" data-thickness="0.1" data-width="90" data-height="90" data-fgcolor="#00a65a" style="width: 49px; height: 30px; position: absolute; vertical-align: middle; margin-top: 30px; margin-left: -69px; border: 0px; background: none; font: bold 18px Arial; text-align: center; color: rgb(0, 166, 90); padding: 0px; appearance: none;"></div>

                                        <div class="knob-label">data-thickness="۰.۱"</div>
                                    </div>
                                    <!-- ./col -->
                                    <div class="col-6 col-md-3 text-center">
                                        <div style="display:inline;width:120px;height:120px;"><canvas width="120" height="120"></canvas><input type="text" class="knob" data-thickness="0.2" data-anglearc="250" data-angleoffset="-125" value="30" data-width="120" data-height="120" data-fgcolor="#00c0ef" style="width: 64px; height: 40px; position: absolute; vertical-align: middle; margin-top: 40px; margin-left: -92px; border: 0px; background: none; font: bold 24px Arial; text-align: center; color: rgb(0, 192, 239); padding: 0px; appearance: none;"></div>

                                        <div class="knob-label">data-angleArc="۲۵۰"</div>
                                    </div>
                                    <!-- ./col -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fa fa-bar-chart-o"></i>
                                    jQuery Knob Tron Style
                                </h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6 col-md-3 text-center">
                                        <div style="display:inline;width:90px;height:90px;"><canvas width="90" height="90"></canvas><input type="text" class="knob" value="80" data-skin="tron" data-thickness="0.2" data-width="90" data-height="90" data-fgcolor="#3c8dbc" data-readonly="true" readonly="readonly" style="width: 49px; height: 30px; position: absolute; vertical-align: middle; margin-top: 30px; margin-left: -69px; border: 0px; background: none; font: bold 18px Arial; text-align: center; color: rgb(60, 141, 188); padding: 0px; appearance: none;"></div>

                                        <div class="knob-label">data-width="۹۰"</div>
                                    </div>
                                    <!-- ./col -->
                                    <div class="col-6 col-md-3 text-center">
                                        <div style="display:inline;width:120px;height:120px;"><canvas width="120" height="120"></canvas><input type="text" class="knob" value="60" data-skin="tron" data-thickness="0.2" data-width="120" data-height="120" data-fgcolor="#f56954" style="width: 64px; height: 40px; position: absolute; vertical-align: middle; margin-top: 40px; margin-left: -92px; border: 0px; background: none; font: bold 24px Arial; text-align: center; color: rgb(245, 105, 84); padding: 0px; appearance: none;"></div>

                                        <div class="knob-label">data-width="۱۲۰"</div>
                                    </div>
                                    <!-- ./col -->
                                    <div class="col-6 col-md-3 text-center">
                                        <div style="display:inline;width:90px;height:90px;"><canvas width="90" height="90"></canvas><input type="text" class="knob" value="10" data-skin="tron" data-thickness="0.1" data-width="90" data-height="90" data-fgcolor="#00a65a" style="width: 49px; height: 30px; position: absolute; vertical-align: middle; margin-top: 30px; margin-left: -69px; border: 0px; background: none; font: bold 18px Arial; text-align: center; color: rgb(0, 166, 90); padding: 0px; appearance: none;"></div>

                                        <div class="knob-label">data-thickness="۰.۱"</div>
                                    </div>
                                    <!-- ./col -->
                                    <div class="col-6 col-md-3 text-center">
                                        <div style="display:inline;width:120px;height:120px;"><canvas width="120" height="120"></canvas><input type="text" class="knob" value="100" data-skin="tron" data-thickness="0.2" data-anglearc="250" data-angleoffset="-125" data-width="120" data-height="120" data-fgcolor="#00c0ef" style="width: 64px; height: 40px; position: absolute; vertical-align: middle; margin-top: 40px; margin-left: -92px; border: 0px; background: none; font: bold 24px Arial; text-align: center; color: rgb(0, 192, 239); padding: 0px; appearance: none;"></div>

                                        <div class="knob-label">data-angleArc="۲۵۰"</div>
                                    </div>
                                    <!-- ./col -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <!-- callout -->
                <div class="callout callout-info">
                    <h5>The following was created using data tags</h5>

                    <p>The following three inline (sparkline) chart have been initialized to read and interpret data tags</p>
                </div>
                <!-- /.callout -->

                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title text-danger">Sparkline تیکه ای</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool"><i class="fa fa-refresh"></i></button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body text-center">
                                <div class="sparkline" data-type="pie" data-offset="90" data-width="100px" data-height="100px"><canvas width="100" height="100" style="display: inline-block; width: 100px; height: 100px; vertical-align: top;"></canvas></div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title text-primary">Sparkline خطی</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool"><i class="fa fa-refresh"></i></button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body text-center">
                                <div class="sparkline" data-type="line" data-spot-radius="3" data-highlight-spot-color="#f39c12" data-highlight-line-color="#222" data-min-spot-color="#f56954" data-max-spot-color="#00a65a" data-spot-color="#39CCCC" data-offset="90" data-width="100%" data-height="100px" data-line-width="2" data-line-color="#39CCCC" data-fill-color="rgba(57, 204, 204, 0.08)"><canvas width="353" height="100" style="display: inline-block; width: 353px; height: 100px; vertical-align: top;"></canvas></div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title text-warning">Sparkline ستونی</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool"><i class="fa fa-refresh"></i></button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body text-center">
                                <div class="sparkline" data-type="bar" data-width="97%" data-height="100px" data-bar-width="14" data-bar-spacing="7" data-bar-color="#f39c12"><canvas width="224" height="100" style="display: inline-block; width: 224px; height: 100px; vertical-align: top;"></canvas></div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">نمونه های Sparkline</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div id="myBody" class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p>
                                            Mouse speed <span id="mousespeed"><canvas width="60" height="25" style="display: inline-block; width: 60px; height: 25px; vertical-align: top;"></canvas></span>
                                        </p>

                                        <p>
                                            Inline <span class="sparkline-1"><canvas width="21" height="25" style="display: inline-block; width: 21px; height: 25px; vertical-align: top;"></canvas></span>
                                            line graphs
                                            <span class="sparkline-1"><canvas width="63" height="25" style="display: inline-block; width: 63px; height: 25px; vertical-align: top;"></canvas></span>
                                        </p>

                                        <p>
                                            Bar charts <span class="sparkbar"><canvas width="34" height="25" style="display: inline-block; width: 34px; height: 25px; vertical-align: top;"></canvas></span>
                                            negative values: <span class="sparkbar"><canvas width="29" height="25" style="display: inline-block; width: 29px; height: 25px; vertical-align: top;"></canvas></span>
                                            stacked: <span class="sparkbar"><canvas width="19" height="25" style="display: inline-block; width: 19px; height: 25px; vertical-align: top;"></canvas></span>
                                        </p>

                                        <p>
                                            Composite inline
                                            <span id="compositeline"><canvas width="63" height="25" style="display: inline-block; width: 63px; height: 25px; vertical-align: top;"></canvas></span>
                                        </p>

                                        <p>
                                            Inline with normal range
                                            <span id="normalline"><canvas width="63" height="25" style="display: inline-block; width: 63px; height: 25px; vertical-align: top;"></canvas></span>
                                        </p>

                                        <p>
                                            Composite bar
                                            <span id="compositebar"><canvas width="44" height="25" style="display: inline-block; width: 44px; height: 25px; vertical-align: top;"></canvas></span>
                                        </p>

                                        <p>
                                            Discrete
                                            <span class="discrete1"><canvas width="36" height="25" style="display: inline-block; width: 36px; height: 25px; vertical-align: top;"></canvas></span><br>

                                            Discrete with threshold
                                            <span id="discrete2"><canvas width="18" height="25" style="display: inline-block; width: 18px; height: 25px; vertical-align: top;"></canvas></span>
                                        </p>

                                        <p>
                                            Bullet charts<br>
                                            <span class="sparkbullet"><canvas width="64" height="25" style="display: inline-block; width: 64px; height: 25px; vertical-align: top;"></canvas></span><br>
                                            <span class="sparkbullet"><canvas width="64" height="25" style="display: inline-block; width: 64px; height: 25px; vertical-align: top;"></canvas></span><br>
                                            <span class="sparkbullet"><canvas width="64" height="25" style="display: inline-block; width: 64px; height: 25px; vertical-align: top;"></canvas></span><br>
                                        </p>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-6">
                                        <p>
                                            Customize size and colours
                                            <span id="linecustom"><canvas width="128" height="24" style="display: inline-block; width: 128px; height: 24px; vertical-align: top;"></canvas></span>
                                        </p>

                                        <p>
                                            Tristate charts
                                            <span class="sparktristate"><canvas width="59" height="25" style="display: inline-block; width: 59px; height: 25px; vertical-align: top;"></canvas></span><br>
                                            (think games won, lost or drawn)
                                        </p>

                                        <p>
                                            Tristate chart using a colour map:
                                            <span class="sparktristatecols"><canvas width="59" height="25" style="display: inline-block; width: 59px; height: 25px; vertical-align: top;"></canvas></span>
                                        </p>

                                        <p>
                                            Box Plot: <span class="sparkboxplot"><canvas width="64" height="25" style="display: inline-block; width: 64px; height: 25px; vertical-align: top;"></canvas></span><br>
                                            Pre-computed box plot <span class="sparkboxplotraw"><canvas width="64" height="25" style="display: inline-block; width: 64px; height: 25px; vertical-align: top;"></canvas></span>
                                        </p>

                                        <p>
                                            Pie charts
                                            <span class="sparkpie"><canvas width="16" height="16" style="display: inline-block; width: 16px; height: 16px; vertical-align: top;"></canvas></span>
                                            <span class="sparkpie"><canvas width="16" height="16" style="display: inline-block; width: 16px; height: 16px; vertical-align: top;"></canvas></span>
                                            <span class="sparkpie"><canvas width="16" height="16" style="display: inline-block; width: 16px; height: 16px; vertical-align: top;"></canvas></span>
                                        </p>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.card-body -->
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
    <script src="{{asset('livedars/admin/plugins/knob/jquery.knob.js')}}"></script>
    <!-- Sparkline -->
    <script src="{{asset('livedars/admin/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
    <!-- page script -->
    <script>
        $(function () {
            /* jQueryKnob */

            $('.knob').knob({
                /*change : function (value) {
                 //console.log("change : " + value);
                 },
                 release : function (value) {
                 console.log("release : " + value);
                 },
                 cancel : function () {
                 console.log("cancel : " + this.value);
                 },*/
                draw: function () {

                    // "tron" case
                    if (this.$.data('skin') == 'tron') {

                        var a   = this.angle(this.cv)  // Angle
                            ,
                            sa  = this.startAngle          // Previous start angle
                            ,
                            sat = this.startAngle         // Start angle
                            ,
                            ea                            // Previous end angle
                            ,
                            eat = sat + a                 // End angle
                            ,
                            r   = true

                        this.g.lineWidth = this.lineWidth

                        this.o.cursor
                        && (sat = eat - 0.3)
                        && (eat = eat + 0.3)

                        if (this.o.displayPrevious) {
                            ea = this.startAngle + this.angle(this.value)
                            this.o.cursor
                            && (sa = ea - 0.3)
                            && (ea = ea + 0.3)
                            this.g.beginPath()
                            this.g.strokeStyle = this.previousColor
                            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false)
                            this.g.stroke()
                        }

                        this.g.beginPath()
                        this.g.strokeStyle = r ? this.o.fgColor : this.fgColor
                        this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false)
                        this.g.stroke()

                        this.g.lineWidth = 2
                        this.g.beginPath()
                        this.g.strokeStyle = this.o.fgColor
                        this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false)
                        this.g.stroke()

                        return false
                    }
                }
            })
            /* END JQUERY KNOB */

            //INITIALIZE SPARKLINE CHARTS
            $('.sparkline').each(function () {
                var $this = $(this)
                $this.sparkline('html', $this.data())
            })

            /* SPARKLINE DOCUMENTATION EXAMPLES http://omnipotent.net/jquery.sparkline/#s-about */
            drawDocSparklines()
            drawMouseSpeedDemo()

        })

        function drawDocSparklines() {

            // Bar + line composite charts
            $('#compositebar').sparkline('html', {
                type    : 'bar',
                barColor: '#aaf'
            })
            $('#compositebar').sparkline([4, 1, 5, 7, 9, 9, 8, 7, 6, 6, 4, 7, 8, 4, 3, 2, 2, 5, 6, 7],
                {
                    composite: true,
                    fillColor: false,
                    lineColor: 'red'
                })


            // Line charts taking their values from the tag
            $('.sparkline-1').sparkline()

            // Larger line charts for the docs
            $('.largeline').sparkline('html',
                {
                    type  : 'line',
                    height: '2.5em',
                    width : '4em'
                })

            // Customized line chart
            $('#linecustom').sparkline('html',
                {
                    height      : '1.5em',
                    width       : '8em',
                    lineColor   : '#f00',
                    fillColor   : '#ffa',
                    minSpotColor: false,
                    maxSpotColor: false,
                    spotColor   : '#77f',
                    spotRadius  : 3
                })

            // Bar charts using inline values
            $('.sparkbar').sparkline('html', { type: 'bar' })

            $('.barformat').sparkline([1, 3, 5, 3, 8], {
                type               : 'bar',
                {{--tooltipFormat      : '{{value:levels}} - {{value}}',--}}
                tooltipValueLookups: {
                    levels: $.range_map({
                        ':2' : 'Low',
                        '3:6': 'Medium',
                        '7:' : 'High'
                    })
                }
            })

            // Tri-state charts using inline values
            $('.sparktristate').sparkline('html', { type: 'tristate' })
            $('.sparktristatecols').sparkline('html',
                {
                    type    : 'tristate',
                    colorMap: {
                        '-2': '#fa7',
                        '2' : '#44f'
                    }
                })

            // Composite line charts, the second using values supplied via javascript
            $('#compositeline').sparkline('html', {
                fillColor     : false,
                changeRangeMin: 0,
                chartRangeMax : 10
            })
            $('#compositeline').sparkline([4, 1, 5, 7, 9, 9, 8, 7, 6, 6, 4, 7, 8, 4, 3, 2, 2, 5, 6, 7],
                {
                    composite     : true,
                    fillColor     : false,
                    lineColor     : 'red',
                    changeRangeMin: 0,
                    chartRangeMax : 10
                })

            // Line charts with normal range marker
            $('#normalline').sparkline('html',
                {
                    fillColor     : false,
                    normalRangeMin: -1,
                    normalRangeMax: 8
                })
            $('#normalExample').sparkline('html',
                {
                    fillColor       : false,
                    normalRangeMin  : 80,
                    normalRangeMax  : 95,
                    normalRangeColor: '#4f4'
                })

            // Discrete charts
            $('.discrete1').sparkline('html',
                {
                    type     : 'discrete',
                    lineColor: 'blue',
                    xwidth   : 18
                })
            $('#discrete2').sparkline('html',
                {
                    type          : 'discrete',
                    lineColor     : 'blue',
                    thresholdColor: 'red',
                    thresholdValue: 4
                })

            // Bullet charts
            $('.sparkbullet').sparkline('html', { type: 'bullet' })

            // Pie charts
            $('.sparkpie').sparkline('html', {
                type  : 'pie',
                height: '1.0em'
            })

            // Box plots
            $('.sparkboxplot').sparkline('html', { type: 'box' })
            $('.sparkboxplotraw').sparkline([1, 3, 5, 8, 10, 15, 18],
                {
                    type        : 'box',
                    raw         : true,
                    showOutliers: true,
                    target      : 6
                })

            // Box plot with specific field order
            $('.boxfieldorder').sparkline('html', {
                type                     : 'box',
                tooltipFormatFieldlist   : ['med', 'lq', 'uq'],
                tooltipFormatFieldlistKey: 'field'
            })

            // click event demo sparkline
            $('.clickdemo').sparkline()
            $('.clickdemo').bind('sparklineClick', function (ev) {
                var sparkline = ev.sparklines[0],
                    region    = sparkline.getCurrentRegionFields()
                value         = region.y
                alert('Clicked on x=' + region.x + ' y=' + region.y)
            })

            // mouseover event demo sparkline
            $('.mouseoverdemo').sparkline()
            $('.mouseoverdemo').bind('sparklineRegionChange', function (ev) {
                var sparkline = ev.sparklines[0],
                    region    = sparkline.getCurrentRegionFields()
                value         = region.y
                $('.mouseoverregion').text('x=' + region.x + ' y=' + region.y)
            }).bind('mouseleave', function () {
                $('.mouseoverregion').text('')
            })
        }

        /**
         ** Draw the little mouse speed animated graph
         ** This just attaches a handler to the mousemove event to see
         ** (roughly) how far the mouse has moved
         ** and then updates the display a couple of times a second via
         ** setTimeout()
         **/
        function drawMouseSpeedDemo() {
            var mrefreshinterval = 500 // update display every 500ms
            var lastmousex       = -1
            var lastmousey       = -1
            var lastmousetime
            var mousetravel      = 0
            var mpoints          = []
            var mpoints_max      = 30
            $('html').mousemove(function (e) {
                var mousex = e.pageX
                var mousey = e.pageY
                if (lastmousex > -1) {
                    mousetravel += Math.max(Math.abs(mousex - lastmousex), Math.abs(mousey - lastmousey))
                }
                lastmousex = mousex
                lastmousey = mousey
            })
            var mdraw = function () {
                var md      = new Date()
                var timenow = md.getTime()
                if (lastmousetime && lastmousetime != timenow) {
                    var pps = Math.round(mousetravel / (timenow - lastmousetime) * 1000)
                    mpoints.push(pps)
                    if (mpoints.length > mpoints_max) {
                        mpoints.splice(0, 1)
                    }
                    mousetravel = 0
                    $('#mousespeed').sparkline(mpoints, {
                        width        : mpoints.length * 2,
                        tooltipSuffix: ' pixels per second'
                    })
                }
                lastmousetime = timenow
                setTimeout(mdraw, mrefreshinterval)
            }
            // We could use setInterval instead, but I prefer to do it this way
            setTimeout(mdraw, mrefreshinterval);
        }
    </script>

@endsection
