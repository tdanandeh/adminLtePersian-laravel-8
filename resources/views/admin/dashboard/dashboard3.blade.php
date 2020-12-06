@extends('admin.layout.admin')
@section('title','داشبورد سوم ')

@section('body')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">داشبورد سوم</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="#">خانه</a></li>
                            <li class="breadcrumb-item active">داشبورد سوم</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header no-border">
                                <div class="d-flex justify-content-between">
                                    <h3 class="card-title">کاربران آنلاین</h3>
                                    <a href="javascript:void(0);">مشاهده گزارش</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex">
                                    <p class="d-flex flex-column">
                                        <span class="text-bold text-lg">820</span>
                                        <span>بازدید کننده در طول زمان</span>
                                    </p>
                                    <p class="mr-auto d-flex flex-column text-right">
                    <span class="text-success">
                      <i class="fa fa-arrow-up"></i> 12.5%
                    </span>
                                        <span class="text-muted">از هفته گذشته</span>
                                    </p>
                                </div>
                                <!-- /.d-flex -->

                                <div class="position-relative mb-4">
                                    <canvas id="visitors-chart" height="200"></canvas>
                                </div>

                                <div class="d-flex flex-row justify-content-end">
                  <span class="ml-2">
                    <i class="fa fa-square text-primary"></i> این هفته
                  </span>

                                    <span>
                    <i class="fa fa-square text-gray"></i> هفته گذشته
                  </span>
                                </div>
                            </div>
                        </div>
                        <!-- /.card -->

                        <div class="card">
                            <div class="card-header no-border">
                                <h3 class="card-title">محصولات</h3>
                                <div class="card-tools">
                                    <a href="#" class="btn btn-tool btn-sm">
                                        <i class="fa fa-download"></i>
                                    </a>
                                    <a href="#" class="btn btn-tool btn-sm">
                                        <i class="fa fa-bars"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <table class="table table-striped table-valign-middle">
                                    <thead>
                                    <tr>
                                        <th>محصولات</th>
                                        <th>قیمت</th>
                                        <th>فروش</th>
                                        <th>بیشتر</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                                            تلویزیون هوشمند
                                        </td>
                                        <td>13 تومان</td>
                                        <td>
                                            <small class="text-success mr-1">
                                                <i class="fa fa-arrow-up"></i>
                                                12%
                                            </small>
                                            12,000 فروش
                                        </td>
                                        <td>
                                            <a href="#" class="text-muted">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                                            محصول ایکس
                                        </td>
                                        <td>29 تومان</td>
                                        <td>
                                            <small class="text-warning mr-1">
                                                <i class="fa fa-arrow-down"></i>
                                                0.5%
                                            </small>
                                            123,234 فروش
                                        </td>
                                        <td>
                                            <a href="#" class="text-muted">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                                            محصول پرفروش
                                        </td>
                                        <td>1,230 تومان</td>
                                        <td>
                                            <small class="text-danger mr-1">
                                                <i class="fa fa-arrow-down"></i>
                                                3%
                                            </small>
                                            198 فروش
                                        </td>
                                        <td>
                                            <a href="#" class="text-muted">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                                            محصول جدید
                                            <span class="badge bg-danger">جدید</span>
                                        </td>
                                        <td>199 تومان</td>
                                        <td>
                                            <small class="text-success mr-1">
                                                <i class="fa fa-arrow-up"></i>
                                                63%
                                            </small>
                                            87 فروش
                                        </td>
                                        <td>
                                            <a href="#" class="text-muted">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col-md-6 -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header no-border">
                                <div class="d-flex justify-content-between">
                                    <h3 class="card-title">فروش</h3>
                                    <a href="javascript:void(0);">مشاهده گزارش</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex">
                                    <p class="d-flex flex-column">
                                        <span class="text-bold text-lg">تومان 18,230.00</span>
                                        <span>فروش در طول زمان</span>
                                    </p>
                                    <p class="mr-auto d-flex flex-column text-right">
                    <span class="text-success">
                      <i class="fa fa-arrow-up"></i> 33.1%
                    </span>
                                        <span class="text-muted">از ماه گذشته</span>
                                    </p>
                                </div>
                                <!-- /.d-flex -->

                                <div class="position-relative mb-4">
                                    <canvas id="sales-chart" height="200"></canvas>
                                </div>

                                <div class="d-flex flex-row justify-content-end">
                  <span class="ml-2">
                    <i class="fa fa-square text-primary"></i> امسال
                  </span>

                                    <span>
                    <i class="fa fa-square text-gray"></i> سال گذشته
                  </span>
                                </div>
                            </div>
                        </div>
                        <!-- /.card -->

                        <div class="card">
                            <div class="card-header no-border">
                                <h3 class="card-title">بررسی اجمالی فروشگاه آنلاین</h3>
                                <div class="card-tools">
                                    <a href="#" class="btn btn-sm btn-tool">
                                        <i class="fa fa-download"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-tool">
                                        <i class="fa fa-bars"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                                    <p class="text-success text-xl">
                                        <i class="ion ion-ios-refresh-empty"></i>
                                    </p>
                                    <p class="d-flex flex-column text-right">
                    <span class="font-weight-bold">
                      <i class="ion ion-android-arrow-up text-success"></i> 12%
                    </span>
                                        <span class="text-muted">نرخ تبدیل</span>
                                    </p>
                                </div>
                                <!-- /.d-flex -->
                                <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                                    <p class="text-warning text-xl">
                                        <i class="ion ion-ios-cart-outline"></i>
                                    </p>
                                    <p class="d-flex flex-column text-right">
                    <span class="font-weight-bold">
                      <i class="ion ion-android-arrow-up text-warning"></i> 0.8%
                    </span>
                                        <span class="text-muted">نرخ فروش</span>
                                    </p>
                                </div>
                                <!-- /.d-flex -->
                                <div class="d-flex justify-content-between align-items-center mb-0">
                                    <p class="text-danger text-xl">
                                        <i class="ion ion-ios-people-outline"></i>
                                    </p>
                                    <p class="d-flex flex-column text-right">
                    <span class="font-weight-bold">
                      <i class="ion ion-android-arrow-down text-danger"></i> 1%
                    </span>
                                        <span class="text-muted">نرخ ثبت نام</span>
                                    </p>
                                </div>
                                <!-- /.d-flex -->
                            </div>
                        </div>
                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>

@endsection
@section('js')
    <script src="{{asset('livedars/admin/dist/js/pages/dashboard3.js')}}"></script>
    <script src="{{asset('livedars/admin/plugins/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('livedars/admin/dist/js/demo.js')}}"></script>

@endsection
