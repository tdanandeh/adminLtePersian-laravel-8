@extends('admin.layout.admin')
@section('title','slider')
@section('css')

    <!-- Ion Slider -->
    <link rel="stylesheet" href="{{asset('livedars/admin/plugins/ionslider/ion.rangeSlider.css')}}">
    <!-- ion slider Nice -->
    <link rel="stylesheet" href="{{asset('livedars/admin/plugins/ionslider/ion.rangeSlider.skinNice.css')}}">
    <!-- bootstrap slider -->
    <link rel="stylesheet" href="{{asset('livedars/admin/plugins/bootstrap-slider/slider.css')}}">

@endsection
@section('body')

    <div class="content-wrapper" style="min-height: 403px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>اسلایدر ها</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="#">خانه</a></li>
                            <li class="breadcrumb-item active">اسلایدر ها</li>
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
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Ion اسلایدر</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row margin">
                                    <div class="col-sm-6">
                                        <span class="irs irs-with-grid" id="irs-1"><span class="irs"><span class="irs-line"><span class="irs-line-left"></span><span class="irs-line-mid"></span><span class="irs-line-right"></span></span><span class="irs-min" style="display: block;">$0</span><span class="irs-max" style="display: block;">$5000</span><span class="irs-from" style="left: 102.961px; display: block;">$1000</span><span class="irs-to" style="left: 435.961px; display: block;">$4000</span><span class="irs-single" style="left: 248.781px; display: none;">$1000 — $4000</span><span class="irs-diapason" style="left: 122px; width: 333px;"></span><span class="irs-slider from" style="left: 111px;"></span><span class="irs-slider to" style="left: 444px;"></span></span><span class="irs-grid"><span class="irs-grid-pol small" style="left: 0px;"></span><span class="irs-grid-pol small" style="left: 28px;"></span><span class="irs-grid-pol small" style="left: 57px;"></span><span class="irs-grid-pol small" style="left: 86px;"></span><span class="irs-grid-pol small" style="left: 115px;"></span><span class="irs-grid-pol small" style="left: 144px;"></span><span class="irs-grid-pol small" style="left: 173px;"></span><span class="irs-grid-pol small" style="left: 201px;"></span><span class="irs-grid-pol small" style="left: 230px;"></span><span class="irs-grid-pol small" style="left: 259px;"></span><span class="irs-grid-pol small" style="left: 288px;"></span><span class="irs-grid-pol small" style="left: 317px;"></span><span class="irs-grid-pol small" style="left: 346px;"></span><span class="irs-grid-pol small" style="left: 375px;"></span><span class="irs-grid-pol small" style="left: 403px;"></span><span class="irs-grid-pol small" style="left: 432px;"></span><span class="irs-grid-pol small" style="left: 461px;"></span><span class="irs-grid-pol small" style="left: 490px;"></span><span class="irs-grid-pol small" style="left: 519px;"></span><span class="irs-grid-pol small" style="left: 548px;"></span><span class="irs-grid-pol small" style="left: 576px;"></span><span class="irs-grid-pol" style="left: 0px;"></span><span class="irs-grid-text" style="left: 0px; text-align: left;">0</span><span class="irs-grid-pol" style="left: 144px;"></span><span class="irs-grid-text" style="left: 94px;">1250</span><span class="irs-grid-pol" style="left: 288px;"></span><span class="irs-grid-text" style="left: 238px;">2500</span><span class="irs-grid-pol" style="left: 432px;"></span><span class="irs-grid-text" style="left: 382px;">3750</span><span class="irs-grid-pol" style="left: 576px;"></span><span class="irs-grid-text" style="left: 476px; text-align: right;">5000</span></span></span><input id="range_1" type="text" name="range_1" value="1000;4000" style="display: none;">
                                    </div>

                                    <div class="col-sm-6">
                                        <span class="irs irs-with-grid" id="irs-2"><span class="irs"><span class="irs-line"><span class="irs-line-left"></span><span class="irs-line-mid"></span><span class="irs-line-right"></span></span><span class="irs-min" style="display: block;">1 000 €</span><span class="irs-max" style="display: none;">100 000 €</span><span class="irs-from" style="left: 149.406px; display: block;">30 000 €</span><span class="irs-to" style="left: 485.406px; display: block;">90 000 €</span><span class="irs-single" style="left: 295.352px; display: none;">30 000 — 90 000 €</span><span class="irs-diapason" style="left: 173.576px; width: 336.364px;"></span><span class="irs-slider from" style="left: 163px;"></span><span class="irs-slider to" style="left: 499px;"></span></span><span class="irs-grid"><span class="irs-grid-pol small" style="left: 0px;"></span><span class="irs-grid-pol small" style="left: 28px;"></span><span class="irs-grid-pol small" style="left: 57px;"></span><span class="irs-grid-pol small" style="left: 86px;"></span><span class="irs-grid-pol small" style="left: 115px;"></span><span class="irs-grid-pol small" style="left: 144px;"></span><span class="irs-grid-pol small" style="left: 173px;"></span><span class="irs-grid-pol small" style="left: 201px;"></span><span class="irs-grid-pol small" style="left: 230px;"></span><span class="irs-grid-pol small" style="left: 259px;"></span><span class="irs-grid-pol small" style="left: 288px;"></span><span class="irs-grid-pol small" style="left: 317px;"></span><span class="irs-grid-pol small" style="left: 346px;"></span><span class="irs-grid-pol small" style="left: 375px;"></span><span class="irs-grid-pol small" style="left: 403px;"></span><span class="irs-grid-pol small" style="left: 432px;"></span><span class="irs-grid-pol small" style="left: 461px;"></span><span class="irs-grid-pol small" style="left: 490px;"></span><span class="irs-grid-pol small" style="left: 519px;"></span><span class="irs-grid-pol small" style="left: 548px;"></span><span class="irs-grid-pol small" style="left: 576px;"></span><span class="irs-grid-pol" style="left: 0px;"></span><span class="irs-grid-text" style="left: 0px; text-align: left;">1 000</span><span class="irs-grid-pol" style="left: 144px;"></span><span class="irs-grid-text" style="left: 94px;">26 000</span><span class="irs-grid-pol" style="left: 288px;"></span><span class="irs-grid-text" style="left: 238px;">50 500</span><span class="irs-grid-pol" style="left: 432px;"></span><span class="irs-grid-text" style="left: 382px;">75 500</span><span class="irs-grid-pol" style="left: 576px;"></span><span class="irs-grid-text" style="left: 476px; text-align: right;">100 000</span></span></span><input id="range_2" type="text" name="range_2" value="30000;90000" data-type="double" data-step="500" data-postfix=" €" data-from="30000" data-to="90000" data-hasgrid="true" style="display: none;">
                                    </div>
                                </div>
                                <div class="row margin">
                                    <div class="col-sm-6">
                                        <span class="irs irs-with-grid" id="irs-3"><span class="irs"><span class="irs-line"><span class="irs-line-left"></span><span class="irs-line-mid"></span><span class="irs-line-right"></span></span><span class="irs-min" style="display: none;">0 mm</span><span class="irs-max" style="display: block;">10 mm</span><span class="irs-from" style="display: none;">0</span><span class="irs-to" style="display: none;">0</span><span class="irs-single" style="left: 0px;">0 mm</span><span class="irs-slider single" style="left: 0px;"></span></span><span class="irs-grid"><span class="irs-grid-pol small" style="left: 0px;"></span><span class="irs-grid-pol small" style="left: 28px;"></span><span class="irs-grid-pol small" style="left: 57px;"></span><span class="irs-grid-pol small" style="left: 86px;"></span><span class="irs-grid-pol small" style="left: 115px;"></span><span class="irs-grid-pol small" style="left: 144px;"></span><span class="irs-grid-pol small" style="left: 173px;"></span><span class="irs-grid-pol small" style="left: 201px;"></span><span class="irs-grid-pol small" style="left: 230px;"></span><span class="irs-grid-pol small" style="left: 259px;"></span><span class="irs-grid-pol small" style="left: 288px;"></span><span class="irs-grid-pol small" style="left: 317px;"></span><span class="irs-grid-pol small" style="left: 346px;"></span><span class="irs-grid-pol small" style="left: 375px;"></span><span class="irs-grid-pol small" style="left: 403px;"></span><span class="irs-grid-pol small" style="left: 432px;"></span><span class="irs-grid-pol small" style="left: 461px;"></span><span class="irs-grid-pol small" style="left: 490px;"></span><span class="irs-grid-pol small" style="left: 519px;"></span><span class="irs-grid-pol small" style="left: 548px;"></span><span class="irs-grid-pol small" style="left: 576px;"></span><span class="irs-grid-pol" style="left: 0px;"></span><span class="irs-grid-text" style="left: 0px; text-align: left;">0</span><span class="irs-grid-pol" style="left: 144px;"></span><span class="irs-grid-text" style="left: 94px;">2.5</span><span class="irs-grid-pol" style="left: 288px;"></span><span class="irs-grid-text" style="left: 238px;">5</span><span class="irs-grid-pol" style="left: 432px;"></span><span class="irs-grid-text" style="left: 382px;">7.5</span><span class="irs-grid-pol" style="left: 576px;"></span><span class="irs-grid-text" style="left: 476px; text-align: right;">10</span></span></span><input id="range_5" type="text" name="range_5" value="0" style="display: none;">
                                    </div>
                                    <div class="col-sm-6">
                                        <span class="irs irs-with-grid" id="irs-4"><span class="irs"><span class="irs-line"><span class="irs-line-left"></span><span class="irs-line-mid"></span><span class="irs-line-right"></span></span><span class="irs-min" style="display: block;">-50°</span><span class="irs-max" style="display: block;">50°</span><span class="irs-from" style="display: none;">0</span><span class="irs-to" style="display: none;">0</span><span class="irs-single" style="left: 279.32px;">0°</span><span class="irs-slider single" style="left: 278px;"></span></span><span class="irs-grid"><span class="irs-grid-pol small" style="left: 0px;"></span><span class="irs-grid-pol small" style="left: 28px;"></span><span class="irs-grid-pol small" style="left: 57px;"></span><span class="irs-grid-pol small" style="left: 86px;"></span><span class="irs-grid-pol small" style="left: 115px;"></span><span class="irs-grid-pol small" style="left: 144px;"></span><span class="irs-grid-pol small" style="left: 173px;"></span><span class="irs-grid-pol small" style="left: 201px;"></span><span class="irs-grid-pol small" style="left: 230px;"></span><span class="irs-grid-pol small" style="left: 259px;"></span><span class="irs-grid-pol small" style="left: 288px;"></span><span class="irs-grid-pol small" style="left: 317px;"></span><span class="irs-grid-pol small" style="left: 346px;"></span><span class="irs-grid-pol small" style="left: 375px;"></span><span class="irs-grid-pol small" style="left: 403px;"></span><span class="irs-grid-pol small" style="left: 432px;"></span><span class="irs-grid-pol small" style="left: 461px;"></span><span class="irs-grid-pol small" style="left: 490px;"></span><span class="irs-grid-pol small" style="left: 519px;"></span><span class="irs-grid-pol small" style="left: 548px;"></span><span class="irs-grid-pol small" style="left: 576px;"></span><span class="irs-grid-pol" style="left: 0px;"></span><span class="irs-grid-text" style="left: 0px; text-align: left;">-50</span><span class="irs-grid-pol" style="left: 144px;"></span><span class="irs-grid-text" style="left: 94px;">-25</span><span class="irs-grid-pol" style="left: 288px;"></span><span class="irs-grid-text" style="left: 238px;">0</span><span class="irs-grid-pol" style="left: 432px;"></span><span class="irs-grid-text" style="left: 382px;">25</span><span class="irs-grid-pol" style="left: 576px;"></span><span class="irs-grid-text" style="left: 476px; text-align: right;">50</span></span></span><input id="range_6" type="text" name="range_6" value="0" style="display: none;">
                                    </div>
                                </div>
                                <div class="row margin">
                                    <div class="col-sm-12">
                                        <span class="irs" id="irs-5"><span class="irs"><span class="irs-line"><span class="irs-line-left"></span><span class="irs-line-mid"></span><span class="irs-line-right"></span></span><span class="irs-min" style="display: none;">0</span><span class="irs-max" style="display: none;">1</span><span class="irs-from" style="display: none;">0</span><span class="irs-to" style="display: none;">0</span><span class="irs-single" style="left: 540.227px;">55 000 light years</span><span class="irs-slider single" style="left: 574px;"></span></span><span class="irs-grid"></span></span><input id="range_4" type="text" name="range_4" value="55000" style="display: none;">
                                    </div>
                                </div>
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
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">اسلایدر بوت‌‌استرپ</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row margin">
                                    <div class="col-sm-6">
                                        <div class="slider slider-horizontal" id="red"><div class="slider-track"><div class="slider-selection" style="left: 25%; width: 50%;"></div><div class="slider-handle min-slider-handle round" tabindex="0" style="left: 25%;"></div><div class="slider-handle max-slider-handle round" tabindex="0" style="left: 75%;"></div></div><div class="tooltip tooltip-main top" style="left: 50%; margin-left: -39px;"><div class="tooltip-arrow"></div><div class="tooltip-inner">-100 : 100</div></div><div class="tooltip tooltip-min top" style="left: 25%; margin-left: -22.5px;"><div class="tooltip-arrow"></div><div class="tooltip-inner">-100</div></div><div class="tooltip tooltip-max bottom" style="top: 18px; left: 75%; margin-left: -19px;"><div class="tooltip-arrow"></div><div class="tooltip-inner">100</div></div></div><input type="text" value="-100,100" class="slider form-control" data-slider-min="-200" data-slider-max="200" data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="horizontal" data-slider-selection="before" data-slider-tooltip="show" data-slider-id="red" data="value: '-100,100'" style="display: none;">

                                        <p>data-slider-id="red"</p>
                                        <div class="slider slider-horizontal" id="blue"><div class="slider-track"><div class="slider-selection" style="left: 25%; width: 50%;"></div><div class="slider-handle min-slider-handle round" tabindex="0" style="left: 25%;"></div><div class="slider-handle max-slider-handle round" tabindex="0" style="left: 75%;"></div></div><div class="tooltip tooltip-main top" style="left: 50%; margin-left: -39px;"><div class="tooltip-arrow"></div><div class="tooltip-inner">-100 : 100</div></div><div class="tooltip tooltip-min top" style="left: 25%; margin-left: -22.5px;"><div class="tooltip-arrow"></div><div class="tooltip-inner">-100</div></div><div class="tooltip tooltip-max bottom" style="top: 18px; left: 75%; margin-left: -19px;"><div class="tooltip-arrow"></div><div class="tooltip-inner">100</div></div></div><input type="text" value="-100,100" class="slider form-control" data-slider-min="-200" data-slider-max="200" data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="horizontal" data-slider-selection="before" data-slider-tooltip="show" data-slider-id="blue" data="value: '-100,100'" style="display: none;">

                                        <p>data-slider-id="blue"</p>
                                        <div class="slider slider-horizontal" id="green"><div class="slider-track"><div class="slider-selection" style="left: 25%; width: 50%;"></div><div class="slider-handle min-slider-handle round" tabindex="0" style="left: 25%;"></div><div class="slider-handle max-slider-handle round" tabindex="0" style="left: 75%;"></div></div><div class="tooltip tooltip-main top" style="left: 50%; margin-left: -39px;"><div class="tooltip-arrow"></div><div class="tooltip-inner">-100 : 100</div></div><div class="tooltip tooltip-min top" style="left: 25%; margin-left: -22.5px;"><div class="tooltip-arrow"></div><div class="tooltip-inner">-100</div></div><div class="tooltip tooltip-max bottom" style="top: 18px; left: 75%; margin-left: -19px;"><div class="tooltip-arrow"></div><div class="tooltip-inner">100</div></div></div><input type="text" value="-100,100" class="slider form-control" data-slider-min="-200" data-slider-max="200" data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="horizontal" data-slider-selection="before" data-slider-tooltip="show" data-slider-id="green" data="value: '-100,100'" style="display: none;">

                                        <p>data-slider-id="green"</p>
                                        <div class="slider slider-horizontal" id="yellow"><div class="slider-track"><div class="slider-selection" style="left: 25%; width: 50%;"></div><div class="slider-handle min-slider-handle round" tabindex="0" style="left: 25%;"></div><div class="slider-handle max-slider-handle round" tabindex="0" style="left: 75%;"></div></div><div class="tooltip tooltip-main top" style="left: 50%; margin-left: -39px;"><div class="tooltip-arrow"></div><div class="tooltip-inner">-100 : 100</div></div><div class="tooltip tooltip-min top" style="left: 25%; margin-left: -22.5px;"><div class="tooltip-arrow"></div><div class="tooltip-inner">-100</div></div><div class="tooltip tooltip-max bottom" style="top: 18px; left: 75%; margin-left: -19px;"><div class="tooltip-arrow"></div><div class="tooltip-inner">100</div></div></div><input type="text" value="-100,100" class="slider form-control" data-slider-min="-200" data-slider-max="200" data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="horizontal" data-slider-selection="before" data-slider-tooltip="show" data-slider-id="yellow" data="value: '-100,100'" style="display: none;">

                                        <p>data-slider-id="yellow"</p>
                                        <div class="slider slider-horizontal" id="aqua"><div class="slider-track"><div class="slider-selection" style="left: 25%; width: 50%;"></div><div class="slider-handle min-slider-handle round" tabindex="0" style="left: 25%;"></div><div class="slider-handle max-slider-handle round" tabindex="0" style="left: 75%;"></div></div><div class="tooltip tooltip-main top" style="left: 50%; margin-left: -39px;"><div class="tooltip-arrow"></div><div class="tooltip-inner">-100 : 100</div></div><div class="tooltip tooltip-min top" style="left: 25%; margin-left: -22.5px;"><div class="tooltip-arrow"></div><div class="tooltip-inner">-100</div></div><div class="tooltip tooltip-max bottom" style="top: 18px; left: 75%; margin-left: -19px;"><div class="tooltip-arrow"></div><div class="tooltip-inner">100</div></div></div><input type="text" value="-100,100" class="slider form-control" data-slider-min="-200" data-slider-max="200" data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="horizontal" data-slider-selection="before" data-slider-tooltip="show" data-slider-id="aqua" data="value: '-100,100'" style="display: none;">

                                        <p>data-slider-id="aqua"</p>
                                        <div class="slider slider-horizontal" id="purple"><div class="slider-track"><div class="slider-selection" style="left: 25%; width: 50%;"></div><div class="slider-handle min-slider-handle round" tabindex="0" style="left: 25%;"></div><div class="slider-handle max-slider-handle round" tabindex="0" style="left: 75%;"></div></div><div class="tooltip tooltip-main top" style="left: 50%; margin-left: -39px;"><div class="tooltip-arrow"></div><div class="tooltip-inner">-100 : 100</div></div><div class="tooltip tooltip-min top" style="left: 25%; margin-left: -22.5px;"><div class="tooltip-arrow"></div><div class="tooltip-inner">-100</div></div><div class="tooltip tooltip-max bottom" style="top: 18px; left: 75%; margin-left: -19px;"><div class="tooltip-arrow"></div><div class="tooltip-inner">100</div></div></div><input type="text" value="-100,100" class="slider form-control" data-slider-min="-200" data-slider-max="200" data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="horizontal" data-slider-selection="before" data-slider-tooltip="show" data-slider-id="purple" data="value: '-100,100'" style="display: none;">

                                        <p style="margin-top: 10px">data-slider-id="purple"</p>
                                    </div>
                                    <div class="col-sm-6 text-center">
                                        <div class="slider slider-vertical" id="red"><div class="slider-track"><div class="slider-selection" style="top: 25%; height: 50%;"></div><div class="slider-handle min-slider-handle round" tabindex="0" style="top: 25%;"></div><div class="slider-handle max-slider-handle round" tabindex="0" style="top: 75%;"></div></div><div class="tooltip tooltip-main right" style="left: 100%; top: 50%; margin-top: -14.5px;"><div class="tooltip-arrow"></div><div class="tooltip-inner">-100 : 100</div></div><div class="tooltip tooltip-min right" style="left: 100%; top: 25%; margin-top: -14.5px;"><div class="tooltip-arrow"></div><div class="tooltip-inner">-100</div></div><div class="tooltip tooltip-max right" style="left: 100%; top: 75%; margin-top: -14.5px;"><div class="tooltip-arrow"></div><div class="tooltip-inner">100</div></div></div><input type="text" value="-100,100" class="slider form-control" data-slider-min="-200" data-slider-max="200" data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="vertical" data-slider-selection="before" data-slider-tooltip="show" data-slider-id="red" data="value: '-100,100'" style="display: none;">
                                        <div class="slider slider-vertical" id="blue"><div class="slider-track"><div class="slider-selection" style="top: 25%; height: 50%;"></div><div class="slider-handle min-slider-handle round" tabindex="0" style="top: 25%;"></div><div class="slider-handle max-slider-handle round" tabindex="0" style="top: 75%;"></div></div><div class="tooltip tooltip-main right" style="left: 100%; top: 50%; margin-top: -14.5px;"><div class="tooltip-arrow"></div><div class="tooltip-inner">-100 : 100</div></div><div class="tooltip tooltip-min right" style="left: 100%; top: 25%; margin-top: -14.5px;"><div class="tooltip-arrow"></div><div class="tooltip-inner">-100</div></div><div class="tooltip tooltip-max right" style="left: 100%; top: 75%; margin-top: -14.5px;"><div class="tooltip-arrow"></div><div class="tooltip-inner">100</div></div></div><input type="text" value="-100,100" class="slider form-control" data-slider-min="-200" data-slider-max="200" data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="vertical" data-slider-selection="before" data-slider-tooltip="show" data-slider-id="blue" data="value: '-100,100'" style="display: none;">
                                        <div class="slider slider-vertical" id="green"><div class="slider-track"><div class="slider-selection" style="top: 25%; height: 50%;"></div><div class="slider-handle min-slider-handle round" tabindex="0" style="top: 25%;"></div><div class="slider-handle max-slider-handle round" tabindex="0" style="top: 75%;"></div></div><div class="tooltip tooltip-main right" style="left: 100%; top: 50%; margin-top: -14.5px;"><div class="tooltip-arrow"></div><div class="tooltip-inner">-100 : 100</div></div><div class="tooltip tooltip-min right" style="left: 100%; top: 25%; margin-top: -14.5px;"><div class="tooltip-arrow"></div><div class="tooltip-inner">-100</div></div><div class="tooltip tooltip-max right" style="left: 100%; top: 75%; margin-top: -14.5px;"><div class="tooltip-arrow"></div><div class="tooltip-inner">100</div></div></div><input type="text" value="-100,100" class="slider form-control" data-slider-min="-200" data-slider-max="200" data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="vertical" data-slider-selection="before" data-slider-tooltip="show" data-slider-id="green" data="value: '-100,100'" style="display: none;">
                                        <div class="slider slider-vertical" id="yellow"><div class="slider-track"><div class="slider-selection" style="top: 25%; height: 50%;"></div><div class="slider-handle min-slider-handle round" tabindex="0" style="top: 25%;"></div><div class="slider-handle max-slider-handle round" tabindex="0" style="top: 75%;"></div></div><div class="tooltip tooltip-main right" style="left: 100%; top: 50%; margin-top: -14.5px;"><div class="tooltip-arrow"></div><div class="tooltip-inner">-100 : 100</div></div><div class="tooltip tooltip-min right" style="left: 100%; top: 25%; margin-top: -14.5px;"><div class="tooltip-arrow"></div><div class="tooltip-inner">-100</div></div><div class="tooltip tooltip-max right" style="left: 100%; top: 75%; margin-top: -14.5px;"><div class="tooltip-arrow"></div><div class="tooltip-inner">100</div></div></div><input type="text" value="-100,100" class="slider form-control" data-slider-min="-200" data-slider-max="200" data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="vertical" data-slider-selection="before" data-slider-tooltip="show" data-slider-id="yellow" data="value: '-100,100'" style="display: none;">
                                        <div class="slider slider-vertical" id="aqua"><div class="slider-track"><div class="slider-selection" style="top: 25%; height: 50%;"></div><div class="slider-handle min-slider-handle round" tabindex="0" style="top: 25%;"></div><div class="slider-handle max-slider-handle round" tabindex="0" style="top: 75%;"></div></div><div class="tooltip tooltip-main right" style="left: 100%; top: 50%; margin-top: -14.5px;"><div class="tooltip-arrow"></div><div class="tooltip-inner">-100 : 100</div></div><div class="tooltip tooltip-min right" style="left: 100%; top: 25%; margin-top: -14.5px;"><div class="tooltip-arrow"></div><div class="tooltip-inner">-100</div></div><div class="tooltip tooltip-max right" style="left: 100%; top: 75%; margin-top: -14.5px;"><div class="tooltip-arrow"></div><div class="tooltip-inner">100</div></div></div><input type="text" value="-100,100" class="slider form-control" data-slider-min="-200" data-slider-max="200" data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="vertical" data-slider-selection="before" data-slider-tooltip="show" data-slider-id="aqua" data="value: '-100,100'" style="display: none;">
                                        <div class="slider slider-vertical" id="purple"><div class="slider-track"><div class="slider-selection" style="top: 25%; height: 50%;"></div><div class="slider-handle min-slider-handle round" tabindex="0" style="top: 25%;"></div><div class="slider-handle max-slider-handle round" tabindex="0" style="top: 75%;"></div></div><div class="tooltip tooltip-main right" style="left: 100%; top: 50%; margin-top: -14.5px;"><div class="tooltip-arrow"></div><div class="tooltip-inner">-100 : 100</div></div><div class="tooltip tooltip-min right" style="left: 100%; top: 25%; margin-top: -14.5px;"><div class="tooltip-arrow"></div><div class="tooltip-inner">-100</div></div><div class="tooltip tooltip-max right" style="left: 100%; top: 75%; margin-top: -14.5px;"><div class="tooltip-arrow"></div><div class="tooltip-inner">100</div></div></div><input type="text" value="-100,100" class="slider form-control" data-slider-min="-200" data-slider-max="200" data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="vertical" data-slider-selection="before" data-slider-tooltip="show" data-slider-id="purple" data="value: '-100,100'" style="display: none;">
                                    </div>
                                </div>
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
    <script src="{{asset('livedars/admin/plugins/ionslider/ion.rangeSlider.min.js')}}"></script>
    <!-- Bootstrap slider -->
    <script src="{{asset('livedars/admin/plugins/bootstrap-slider/bootstrap-slider.js')}}"></script>
    <script>
        $(function () {
            /* BOOTSTRAP SLIDER */
            $('.slider').slider()

            /* ION SLIDER */
            $('#range_1').ionRangeSlider({
                min     : 0,
                max     : 5000,
                from    : 1000,
                to      : 4000,
                type    : 'double',
                step    : 1,
                prefix  : '$',
                prettify: false,
                hasGrid : true
            })
            $('#range_2').ionRangeSlider()

            $('#range_5').ionRangeSlider({
                min     : 0,
                max     : 10,
                type    : 'single',
                step    : 0.1,
                postfix : ' mm',
                prettify: false,
                hasGrid : true
            })
            $('#range_6').ionRangeSlider({
                min     : -50,
                max     : 50,
                from    : 0,
                type    : 'single',
                step    : 1,
                postfix : '°',
                prettify: false,
                hasGrid : true
            })

            $('#range_4').ionRangeSlider({
                type      : 'single',
                step      : 100,
                postfix   : ' light years',
                from      : 55000,
                hideMinMax: true,
                hideFromTo: false
            })
            $('#range_3').ionRangeSlider({
                type    : 'double',
                postfix : ' miles',
                step    : 10000,
                from    : 25000000,
                to      : 35000000,
                onChange: function (obj) {
                    var t = ''
                    for (var prop in obj) {
                        t += prop + ': ' + obj[prop] + '\r\n'
                    }
                    $('#result').html(t)
                },
                onLoad  : function (obj) {
                    //
                }
            })
        })
    </script>
@endsection
