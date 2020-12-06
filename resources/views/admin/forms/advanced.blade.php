@extends('admin.layout.admin')
@section('title','general')
@section('css')
    <!-- daterange picker -->
    <link rel="stylesheet" href="{{asset('livedars/admin/plugins/daterangepicker/daterangepicker-bs3.css')}}">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{asset('livedars/admin/plugins/iCheck/all.css')}}">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="{{asset('livedars/admin/plugins/colorpicker/bootstrap-colorpicker.min.css')}}">
    <!-- Bootstrap time Picker -->
    <link rel="stylesheet" href="{{asset('livedars/admin/plugins/timepicker/bootstrap-timepicker.min.css')}}">
    <!-- Persian Data Picker -->
    <link rel="stylesheet" href="{{asset('livedars/admin/dist/css/persian-datepicker.min.css')}}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset('livedars/admin/plugins/select2/select2.min.css')}}">
@endsection
@section('body')

    <div class="content-wrapper" style="min-height: 845px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>فرم‌های پیشرفته</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="#">خانه</a></li>
                            <li class="breadcrumb-item active">فرم‌های پیشرفته</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- SELECT2 EXAMPLE -->
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">کتابخانه Select۲</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-widget="collapse"><i
                                    class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-remove"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>معمولی</label>
                                    <select class="form-control select2 select2-hidden-accessible" style="width: 100%;"
                                            tabindex="-1" aria-hidden="true">
                                        <option selected="selected">مازندران</option>
                                        <option>شیراز</option>
                                        <option>گلستان</option>
                                        <option>اردبیل</option>
                                        <option>خوزستان</option>
                                        <option>سیستان و بلوچستان</option>
                                        <option>مشهد</option>
                                    </select>

                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label>غیرفعال</label>
                                    <select class="form-control select2 select2-hidden-accessible" disabled=""
                                            style="width: 100%;" tabindex="-1" aria-hidden="true">
                                        <option selected="selected">مازندران</option>
                                        <option>شیراز</option>
                                        <option>گلستان</option>
                                        <option>اردبیل</option>
                                        <option>خوزستان</option>
                                        <option>سیستان و بلوچستان</option>
                                        <option>مشهد</option>
                                    </select>

                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>چند انتخابی</label>
                                    <select class="form-control select2 select2-hidden-accessible" multiple=""
                                            data-placeholder="یک استان انتخاب کنید"
                                            style="width: 100%;text-align: right" tabindex="-1" aria-hidden="true">
                                        <option>مازندران</option>
                                        <option>شیراز</option>
                                        <option>گلستان</option>
                                        <option>اردبیل</option>
                                        <option>خوزستان</option>
                                        <option>سیستان و بلوچستان</option>
                                        <option>مشهد</option>
                                    </select>

                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label>نتیجه غیرفعال</label>
                                    <select class="form-control select2 select2-hidden-accessible" style="width: 100%;"
                                            tabindex="-1" aria-hidden="true">
                                        <option selected="selected">مازندران</option>
                                        <option>شیراز</option>
                                        <option disabled="disabled">گلستان (غیرفعال)</option>
                                        <option>اردبیل</option>
                                        <option>خوزستان</option>
                                        <option>سیستان و بلوچستان</option>
                                        <option>مشهد</option>
                                    </select>

                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        برای کسب اطلاعات بیشتر و استفاده از راهنمای این کتابخانه به <a
                            href="https://select2.github.io/">مستندات</a> مراجعه کنید
                    </div>
                </div>
                <!-- /.card -->

                <div class="row">
                    <div class="col-md-6">

                        <div class="card card-danger">
                            <div class="card-header">
                                <h3 class="card-title">قالب آماده ورودی</h3>
                            </div>
                            <div class="card-body">
                                <!-- Date dd/mm/yyyy -->
                                <div class="form-group">
                                    <label>قالب تاریخ :</label>

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                        </div>
                                        <input type="text" class="form-control ltr"
                                               data-inputmask="'alias': 'yyyy/mm/dd'" data-mask="">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->

                                <!-- Date mm/dd/yyyy -->
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                        </div>
                                        <input type="text" class="form-control ltr"
                                               data-inputmask="'alias': 'yyyy/mm/dd'" data-mask="">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->

                                <!-- phone mask -->
                                <div class="form-group">
                                    <label>قالب شماره تلفن:</label>

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                        </div>
                                        <input type="text" class="form-control ltr"
                                               data-inputmask="&quot;mask&quot;: &quot;99-9999-9999&quot;" data-mask="">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->

                                <!-- phone mask -->
                                <div class="form-group">
                                    <label>قالب شماره همراه:</label>

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                        </div>
                                        <input type="text" class="form-control"
                                               data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']"
                                               data-mask="">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->

                                <!-- IP mask -->
                                <div class="form-group">
                                    <label>قالب آی پی:</label>

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-laptop"></i></span>
                                        </div>
                                        <input type="text" class="form-control" data-inputmask="'alias': 'ip'"
                                               data-mask="">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->

                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">رنگ و زمان</h3>
                            </div>
                            <div class="card-body">
                                <!-- Color Picker -->
                                <div class="form-group">
                                    <label>انتخاب رنگ :</label>
                                    <input type="text" class="form-control my-colorpicker1 colorpicker-element">
                                </div>
                                <!-- /.form group -->

                                <!-- Color Picker -->
                                <div class="form-group">
                                    <label>انتخاب رنگ با دکمه :</label>

                                    <div class="input-group my-colorpicker2 colorpicker-element">
                                        <input type="text" class="form-control">

                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fa fa-square"></i></span>
                                        </div>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->

                                <!-- time Picker -->
                                <div class="bootstrap-timepicker">
                                    <div class="form-group">
                                        <label>انتخاب زمان :</label>

                                        <div class="input-group">
                                            <input type="text" class="form-control timepicker">

                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                                            </div>
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                    </div>
                    <!-- /.col (left) -->
                    <div class="col-md-6">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">انتخاب تاریخ </h3>
                            </div>
                            <div class="card-body">
                                <!-- Date range -->
                                <div class="form-group">
                                    <label>انتخاب تاریخ:</label>

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fa fa-calendar"></i>
                      </span>
                                        </div>
                                        <input class="normal-example form-control pwt-datepicker-input-element">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <p>استفاده از کتابخانه باباخانی، برای تغییرات <a
                                        href="http://babakhani.github.io/PersianWebToolkit/doc/datepicker/">مستندات این
                                        کتابخانه</a> را مشاهده کنید </p>
                            </div>
                        </div>
                        <!-- /.card -->

                        <!-- iCheck -->
                        <div class="card card-success">
                            <div class="card-header">
                                <h3 class="card-title">iCheck - چک‌باکس و رادیو</h3>
                            </div>
                            <div class="card-body">
                                <!-- Minimal style -->

                                <!-- checkbox -->
                                <div class="form-group">
                                    <label>
                                        <div class="icheckbox_minimal-blue checked" aria-checked="false"
                                             aria-disabled="false" style="position: relative;"><input type="checkbox"
                                                                                                      class="minimal"
                                                                                                      checked=""
                                                                                                      style="position: absolute; opacity: 0;">
                                            <ins class="iCheck-helper"
                                                 style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                        </div>
                                    </label>
                                    <label>
                                        <div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false"
                                             style="position: relative;"><input type="checkbox" class="minimal"
                                                                                style="position: absolute; opacity: 0;">
                                            <ins class="iCheck-helper"
                                                 style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                        </div>
                                    </label>
                                    <label>
                                        <div class="icheckbox_minimal-blue disabled" aria-checked="false"
                                             aria-disabled="true" style="position: relative;"><input type="checkbox"
                                                                                                     class="minimal"
                                                                                                     disabled=""
                                                                                                     style="position: absolute; opacity: 0;">
                                            <ins class="iCheck-helper"
                                                 style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                        </div>
                                        نمونه چک باکس
                                    </label>
                                </div>

                                <!-- radio -->
                                <div class="form-group">
                                    <label>
                                        <div class="iradio_minimal-blue checked" aria-checked="false"
                                             aria-disabled="false" style="position: relative;"><input type="radio"
                                                                                                      name="r1"
                                                                                                      class="minimal"
                                                                                                      checked=""
                                                                                                      style="position: absolute; opacity: 0;">
                                            <ins class="iCheck-helper"
                                                 style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                        </div>
                                    </label>
                                    <label>
                                        <div class="iradio_minimal-blue" aria-checked="false" aria-disabled="false"
                                             style="position: relative;"><input type="radio" name="r1" class="minimal"
                                                                                style="position: absolute; opacity: 0;">
                                            <ins class="iCheck-helper"
                                                 style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                        </div>
                                    </label>
                                    <label>
                                        <div class="iradio_minimal-blue disabled" aria-checked="false"
                                             aria-disabled="true" style="position: relative;"><input type="radio"
                                                                                                     name="r1"
                                                                                                     class="minimal"
                                                                                                     disabled=""
                                                                                                     style="position: absolute; opacity: 0;">
                                            <ins class="iCheck-helper"
                                                 style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                        </div>
                                        نمونه رادیو
                                    </label>
                                </div>

                                <!-- Minimal red style -->

                                <!-- checkbox -->
                                <div class="form-group">
                                    <label>
                                        <div class="icheckbox_minimal-red checked" aria-checked="false"
                                             aria-disabled="false" style="position: relative;"><input type="checkbox"
                                                                                                      class="minimal-red"
                                                                                                      checked=""
                                                                                                      style="position: absolute; opacity: 0;">
                                            <ins class="iCheck-helper"
                                                 style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                        </div>
                                    </label>
                                    <label>
                                        <div class="icheckbox_minimal-red" aria-checked="false" aria-disabled="false"
                                             style="position: relative;"><input type="checkbox" class="minimal-red"
                                                                                style="position: absolute; opacity: 0;">
                                            <ins class="iCheck-helper"
                                                 style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                        </div>
                                    </label>
                                    <label>
                                        <div class="icheckbox_minimal-red disabled" aria-checked="false"
                                             aria-disabled="true" style="position: relative;"><input type="checkbox"
                                                                                                     class="minimal-red"
                                                                                                     disabled=""
                                                                                                     style="position: absolute; opacity: 0;">
                                            <ins class="iCheck-helper"
                                                 style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                        </div>
                                        قالب قرمز چک باکس
                                    </label>
                                </div>

                                <!-- radio -->
                                <div class="form-group">
                                    <label>
                                        <div class="iradio_minimal-red checked" aria-checked="false"
                                             aria-disabled="false" style="position: relative;"><input type="radio"
                                                                                                      name="r2"
                                                                                                      class="minimal-red"
                                                                                                      checked=""
                                                                                                      style="position: absolute; opacity: 0;">
                                            <ins class="iCheck-helper"
                                                 style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                        </div>
                                    </label>
                                    <label>
                                        <div class="iradio_minimal-red" aria-checked="false" aria-disabled="false"
                                             style="position: relative;"><input type="radio" name="r2"
                                                                                class="minimal-red"
                                                                                style="position: absolute; opacity: 0;">
                                            <ins class="iCheck-helper"
                                                 style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                        </div>
                                    </label>
                                    <label>
                                        <div class="iradio_minimal-red disabled" aria-checked="false"
                                             aria-disabled="true" style="position: relative;"><input type="radio"
                                                                                                     name="r2"
                                                                                                     class="minimal-red"
                                                                                                     disabled=""
                                                                                                     style="position: absolute; opacity: 0;">
                                            <ins class="iCheck-helper"
                                                 style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                        </div>
                                        قالب قرمز رادیو
                                    </label>
                                </div>

                                <!-- Minimal red style -->

                                <!-- checkbox -->
                                <div class="form-group">
                                    <label>
                                        <div class="icheckbox_flat-green checked" aria-checked="false"
                                             aria-disabled="false" style="position: relative;"><input type="checkbox"
                                                                                                      class="flat-red"
                                                                                                      checked=""
                                                                                                      style="position: absolute; opacity: 0;">
                                            <ins class="iCheck-helper"
                                                 style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                        </div>
                                    </label>
                                    <label>
                                        <div class="icheckbox_flat-green" aria-checked="false" aria-disabled="false"
                                             style="position: relative;"><input type="checkbox" class="flat-red"
                                                                                style="position: absolute; opacity: 0;">
                                            <ins class="iCheck-helper"
                                                 style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                        </div>
                                    </label>
                                    <label>
                                        <div class="icheckbox_flat-green disabled" aria-checked="false"
                                             aria-disabled="true" style="position: relative;"><input type="checkbox"
                                                                                                     class="flat-red"
                                                                                                     disabled=""
                                                                                                     style="position: absolute; opacity: 0;">
                                            <ins class="iCheck-helper"
                                                 style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                        </div>
                                        قالب فلت سبز چک باکس
                                    </label>
                                </div>

                                <!-- radio -->
                                <div class="form-group">
                                    <label>
                                        <div class="iradio_flat-green checked" aria-checked="false"
                                             aria-disabled="false" style="position: relative;"><input type="radio"
                                                                                                      name="r3"
                                                                                                      class="flat-red"
                                                                                                      checked=""
                                                                                                      style="position: absolute; opacity: 0;">
                                            <ins class="iCheck-helper"
                                                 style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                        </div>
                                    </label>
                                    <label>
                                        <div class="iradio_flat-green" aria-checked="false" aria-disabled="false"
                                             style="position: relative;"><input type="radio" name="r3" class="flat-red"
                                                                                style="position: absolute; opacity: 0;">
                                            <ins class="iCheck-helper"
                                                 style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                        </div>
                                    </label>
                                    <label>
                                        <div class="iradio_flat-green disabled" aria-checked="false"
                                             aria-disabled="true" style="position: relative;"><input type="radio"
                                                                                                     name="r3"
                                                                                                     class="flat-red"
                                                                                                     disabled=""
                                                                                                     style="position: absolute; opacity: 0;">
                                            <ins class="iCheck-helper"
                                                 style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                        </div>
                                        قالب فلت سبز رادیو
                                    </label>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                و چندین رنگ و مدل دیگر <a href="http://fronteed.com/iCheck/">مستندات کتاب خانه</a>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col (right) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

@endsection
@section('js')
    <script>
        $(function () {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Datemask dd/mm/yyyy
            $('#datemask').inputmask('dd/mm/yyyy', {'placeholder': 'dd/mm/yyyy'})
            //Datemask2 mm/dd/yyyy
            $('#datemask2').inputmask('mm/dd/yyyy', {'placeholder': 'mm/dd/yyyy'})
            //Money Euro
            $('[data-mask]').inputmask()

            //iCheck for checkbox and radio inputs
            $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
                checkboxClass: 'icheckbox_minimal-blue',
                radioClass: 'iradio_minimal-blue'
            })
            //Red color scheme for iCheck
            $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
                checkboxClass: 'icheckbox_minimal-red',
                radioClass: 'iradio_minimal-red'
            })
            //Flat red color scheme for iCheck
            $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
                checkboxClass: 'icheckbox_flat-green',
                radioClass: 'iradio_flat-green'
            })

            //Colorpicker
            $('.my-colorpicker1').colorpicker()
            //color picker with addon
            $('.my-colorpicker2').colorpicker()


            $('.normal-example').persianDatepicker();


        })
    </script>
@endsection
