@extends('admin.layout.admin')
@section('title','table ')

@section('body')

    <div class="content-wrapper" style="min-height: 845px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>جداول ساده</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="#">خانه</a></li>
                            <li class="breadcrumb-item active">جداول ساده</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">جدول ۱</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <tbody><tr>
                                        <th style="width: 10px">#</th>
                                        <th>فعالیت</th>
                                        <th>پیشرفت</th>
                                        <th style="width: 40px">درصد</th>
                                    </tr>
                                    <tr>
                                        <td>۱.</td>
                                        <td>آپدیت نرم افزار</td>
                                        <td>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-danger">۵۵%</span></td>
                                    </tr>
                                    <tr>
                                        <td>۲.</td>
                                        <td>بهینه سازی دیتابیس</td>
                                        <td>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-warning" style="width: 70%"></div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-warning">۷۰%</span></td>
                                    </tr>
                                    <tr>
                                        <td>۳.</td>
                                        <td>اجرای کرون جابز‌</td>
                                        <td>
                                            <div class="progress progress-xs progress-striped active">
                                                <div class="progress-bar bg-primary" style="width: 30%"></div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-primary">۳۰%</span></td>
                                    </tr>
                                    <tr>
                                        <td>۴.</td>
                                        <td>	رفع باگ های نرم افزاری</td>
                                        <td>
                                            <div class="progress progress-xs progress-striped active">
                                                <div class="progress-bar bg-success" style="width: 90%"></div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-success">۹۰%</span></td>
                                    </tr>
                                    </tbody></table>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer clearfix">
                                <ul class="pagination pagination-sm m-0 float-right">
                                    <li class="page-item"><a class="page-link" href="#">«</a></li>
                                    <li class="page-item"><a class="page-link" href="#">۱</a></li>
                                    <li class="page-item"><a class="page-link" href="#">۲</a></li>
                                    <li class="page-item"><a class="page-link" href="#">۳</a></li>
                                    <li class="page-item"><a class="page-link" href="#">»</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.card -->

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">جدول ۳</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <table class="table table-condensed">
                                    <tbody><tr>
                                        <th style="width: 10px">#</th>
                                        <th>فعالیت</th>
                                        <th>پیشرفت</th>
                                        <th style="width: 40px">درصد</th>
                                    </tr>
                                    <tr>
                                        <td>۱.</td>
                                        <td>آپدیت نرم افزار</td>
                                        <td>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-danger">۵۵%</span></td>
                                    </tr>
                                    <tr>
                                        <td>۲.</td>
                                        <td>بهینه سازی دیتابیس</td>
                                        <td>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-warning" style="width: 70%"></div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-warning">۷۰%</span></td>
                                    </tr>
                                    <tr>
                                        <td>۳.</td>
                                        <td>اجرای کرون جابز‌</td>
                                        <td>
                                            <div class="progress progress-xs progress-striped active">
                                                <div class="progress-bar bg-primary" style="width: 30%"></div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-primary">۳۰%</span></td>
                                    </tr>
                                    <tr>
                                        <td>۴.</td>
                                        <td>	رفع باگ های نرم افزاری</td>
                                        <td>
                                            <div class="progress progress-xs progress-striped active">
                                                <div class="progress-bar bg-success" style="width: 90%"></div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-success">۹۰%</span></td>
                                    </tr>
                                    </tbody></table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">جدول ۲</h3>

                                <div class="card-tools">
                                    <ul class="pagination pagination-sm m-0 float-right">
                                        <li class="page-item"><a class="page-link" href="#">«</a></li>
                                        <li class="page-item"><a class="page-link" href="#">۱</a></li>
                                        <li class="page-item"><a class="page-link" href="#">۲</a></li>
                                        <li class="page-item"><a class="page-link" href="#">۳</a></li>
                                        <li class="page-item"><a class="page-link" href="#">»</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <table class="table">
                                    <tbody><tr>
                                        <th style="width: 10px">#</th>
                                        <th>فعالیت</th>
                                        <th>پیشرفت</th>
                                        <th style="width: 40px">درصد</th>
                                    </tr>
                                    <tr>
                                        <td>۱.</td>
                                        <td>آپدیت نرم افزار</td>
                                        <td>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-danger">۵۵%</span></td>
                                    </tr>
                                    <tr>
                                        <td>۲.</td>
                                        <td>بهینه سازی دیتابیس</td>
                                        <td>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-warning" style="width: 70%"></div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-warning">۷۰%</span></td>
                                    </tr>
                                    <tr>
                                        <td>۳.</td>
                                        <td>اجرای کرون جابز‌</td>
                                        <td>
                                            <div class="progress progress-xs progress-striped active">
                                                <div class="progress-bar bg-primary" style="width: 30%"></div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-primary">۳۰%</span></td>
                                    </tr>
                                    <tr>
                                        <td>۴.</td>
                                        <td>	رفع باگ های نرم افزاری</td>
                                        <td>
                                            <div class="progress progress-xs progress-striped active">
                                                <div class="progress-bar bg-success" style="width: 90%"></div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-success">۹۰%</span></td>
                                    </tr>
                                    </tbody></table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">جدول ۴</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <table class="table table-striped">
                                    <tbody><tr>
                                        <th style="width: 10px">#</th>
                                        <th>فعالیت</th>
                                        <th>پیشرفت</th>
                                        <th style="width: 40px">درصد</th>
                                    </tr>
                                    <tr>
                                        <td>۱.</td>
                                        <td>آپدیت نرم افزار</td>
                                        <td>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-danger">۵۵%</span></td>
                                    </tr>
                                    <tr>
                                        <td>۲.</td>
                                        <td>بهینه سازی دیتابیس</td>
                                        <td>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-warning" style="width: 70%"></div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-warning">۷۰%</span></td>
                                    </tr>
                                    <tr>
                                        <td>۳.</td>
                                        <td>اجرای کرون جابز‌</td>
                                        <td>
                                            <div class="progress progress-xs progress-striped active">
                                                <div class="progress-bar bg-primary" style="width: 30%"></div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-primary">۳۰%</span></td>
                                    </tr>
                                    <tr>
                                        <td>۴.</td>
                                        <td>	رفع باگ های نرم افزاری</td>
                                        <td>
                                            <div class="progress progress-xs progress-striped active">
                                                <div class="progress-bar bg-success" style="width: 90%"></div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-success">۹۰%</span></td>
                                    </tr>
                                    </tbody></table>
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
                                <h3 class="card-title">جدول ریسپانسیو</h3>

                                <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <input type="text" name="table_search" class="form-control float-right" placeholder="جستجو">

                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover">
                                    <tbody><tr>
                                        <th>شماره</th>
                                        <th>کاربر</th>
                                        <th>تاریخ</th>
                                        <th>وضعیت</th>
                                        <th>دلیل</th>
                                    </tr>
                                    <tr>
                                        <td>۱۸۳</td>
                                        <td>محمد</td>
                                        <td>۱۱-۷-۲۰۱۴</td>
                                        <td><span class="badge badge-success">تایید شده</span></td>
                                        <td>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</td>
                                    </tr>
                                    <tr>
                                        <td>۲۱۹</td>
                                        <td>توحید</td>
                                        <td>۱۱-۷-۲۰۱۴</td>
                                        <td><span class="badge bg-danger">در حال بررسی</span></td>
                                        <td>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</td>
                                    </tr>
                                    <tr>
                                        <td>۶۵۷</td>
                                        <td>رضا</td>
                                        <td>۱۱-۷-۲۰۱۴</td>
                                        <td><span class="badge badge-primary">تایید شده</span></td>
                                        <td>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</td>
                                    </tr>
                                    <tr>
                                        <td>۱۷۵</td>
                                        <td>پرهام</td>
                                        <td>۱۱-۷-۲۰۱۴</td>
                                        <td><span class="badge badge-danger">رد شده</span></td>
                                        <td>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</td>
                                    </tr>
                                    </tbody></table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

@endsection
@section('js')


@endsection
