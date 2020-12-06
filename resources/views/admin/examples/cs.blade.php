@extends('admin.layout.admin')
@section('title','سفارشات ')

@section('body')

    <div class="content-wrapper" style="min-height: 845px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>صورتحساب</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="#">خانه</a></li>
                            <li class="breadcrumb-item active">صورتحساب</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="callout callout-info">
                            <h5><i class="fa fa-info"></i> نکته :</h5>
                            این صفحه مناسب برای پرینت طراحی شده است برای تست روی دکمه پرینت کلیک کنید
                        </div>


                        <!-- Main content -->
                        <div class="invoice p-3 mb-3">
                            <!-- title row -->
                            <div class="row">
                                <div class="col-12">
                                    <h4>
                                        <i class="fa fa-globe"></i> لایودرس | مرجع آموزش های پروژه محور برنامه نویسی
                                        <small class="float-left">Date: ۱۳۹۹/۰۹/۳۰</small>
                                    </h4>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- info row -->
                            <div class="row invoice-info">
                                <div class="col-sm-4 invoice-col">
                                    از
                                    <address>
                                        <strong>لایودرس | مرجع آموزش های پروژه محور برنامه نویسی  </strong><br>
                                        آدرس<br>
                                        خیابان<br>
                                        ایمیل : livedars@yahoo.com
                                    </address>
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 invoice-col">
                                    به
                                    <address>
                                        <strong>محمدحسن قلی</strong><br>
                                        آدرس خریدار<br>
                                        خیابان فلان<br>
                                        تلفن : (۵۵۵) ۵۳۹-۱۰۳۷<br>
                                        ایمیل : john.doe@example.com
                                    </address>
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 invoice-col">
                                    <b>سفارش #۰۰۷۶۱۲</b><br>
                                    <br>
                                    <b>کد سفارش :</b> ۴F۳S۸J<br>
                                    <b>تاریخ پرداخت :</b> ۱۲ آبان ۱۳۹۷<br>
                                    <b>اکانت :</b> ۹۶۸-۳۴۵۶۷
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <!-- Table row -->
                            <div class="row">
                                <div class="col-12 table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>تعداد</th>
                                            <th>محصول</th>
                                            <th>سریال #</th>
                                            <th>توضیحات</th>
                                            <th>قیمت کل</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>۱</td>
                                            <td>ندای وظیفه</td>
                                            <td>۴۵۵-۹۸۱-۲۲۱</td>
                                            <td>بازی شوتر شخص اول</td>
                                            <td>۱۵۰۰۰۰ تومان</td>
                                        </tr>
                                        <tr>
                                            <td>۱</td>
                                            <td>تلویزیون هوشمند سامسونگ</td>
                                            <td>۲۴۷-۹۲۵-۷۲۶</td>
                                            <td>لوازم خانگی</td>
                                            <td>۲,۰۰۰,۰۰۰ تومان</td>
                                        </tr>
                                        <tr>
                                            <td>۱</td>
                                            <td>لباسشویی</td>
                                            <td>۷۳۵-۸۴۵-۶۴۲</td>
                                            <td>
                                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ </td>
                                            <td>۱۰,۰۰۰ تومان</td>
                                        </tr>
                                        <tr>
                                            <td>۱</td>
                                            <td>نجات سرباز رایان</td>
                                            <td>۴۲۲-۵۶۸-۶۴۲</td>
                                            <td>لورم ایپسوم متن ساختگی</td>
                                            <td>۲۰,۰۰۰ تومان</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <div class="row">
                                <!-- accepted payments column -->
                                <div class="col-6">
                                    <p class="lead">روش های پرداخت :</p>
                                    <img src="../../dist/img/credit/visa.png" alt="Visa">
                                    <img src="../../dist/img/credit/mastercard.png" alt="Mastercard">
                                    <img src="../../dist/img/credit/american-express.png" alt="American Express">
                                    <img src="../../dist/img/credit/paypal2.png" alt="Paypal">

                                    <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                                        پرداخت از طریق کلیه کارت های بانکی عضو شتاب امکان پذیر می باشد.
                                    </p>
                                </div>
                                <!-- /.col -->
                                <div class="col-6">
                                    <p class="lead">مهلت پرداخت : ۱۰ دی ۱۳۹۷</p>

                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody><tr>
                                                <th style="width:50%">مبلغ کل :</th>
                                                <td>۱,۳۰۰,۰۰۰ تومان</td>
                                            </tr>
                                            <tr>
                                                <th>مالیات (۹.۳%)</th>
                                                <td>۳۰۰,۰۰۰ تومان</td>
                                            </tr>
                                            <tr>
                                                <th>تخفیف :</th>
                                                <td>۲۰,۰۰۰ تومان</td>
                                            </tr>
                                            <tr>
                                                <th>مبلغ قابل پرداخت:</th>
                                                <td>۹۰۰,۰۰۰ تومان</td>
                                            </tr>
                                            </tbody></table>
                                    </div>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <!-- this row will not appear when printing -->
                            <div class="row no-print">
                                <div class="col-12">
                                    <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> پرینت </a>
                                    <button type="button" class="btn btn-success float-left"><i class="fa fa-credit-card"></i> پرداخت صورتحساب
                                    </button>
                                    <button type="button" class="btn btn-primary float-left ml-2" style="margin-right: 5px;">
                                        <i class="fa fa-download"></i> تولید PDF
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- /.invoice -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

@endsection
@section('js')


@endsection
