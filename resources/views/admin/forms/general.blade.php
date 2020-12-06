@extends('admin.layout.admin')
@section('title','general')

@section('body')

    <div class="content-wrapper" style="min-height: 845px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>فرم‌های عمومی</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="#">خانه</a></li>
                            <li class="breadcrumb-item active">فرم‌های عمومی</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">مثال ساده</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">آدرس ایمیل</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="ایمیل را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="پسورد را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">ارسال فایل</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">انتخاب فایل</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="">Upload</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">مرا بخاطر بسپار</label>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">ارسال</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->

                        <!-- Form Element sizes -->
                        <div class="card card-success">
                            <div class="card-header">
                                <h3 class="card-title">Different Height</h3>
                            </div>
                            <div class="card-body">
                                <input class="form-control form-control-lg" type="text" placeholder=".input-lg">
                                <br>
                                <input class="form-control" type="text" placeholder="Default input">
                                <br>
                                <input class="form-control form-control-sm" type="text" placeholder=".input-sm">
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                        <div class="card card-danger">
                            <div class="card-header">
                                <h3 class="card-title">عرض مختلف</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3">
                                        <input type="text" class="form-control" placeholder=".col-3">
                                    </div>
                                    <div class="col-4">
                                        <input type="text" class="form-control" placeholder=".col-4">
                                    </div>
                                    <div class="col-5">
                                        <input type="text" class="form-control" placeholder=".col-5">
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                        <!-- Input addon -->
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">ورودی‌‌ها</h3>
                            </div>
                            <div class="card-body">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">@</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="نام کاربری">
                                </div>

                                <div class="input-group mb-3">
                                    <input type="text" class="form-control">
                                    <div class="input-group-append">
                                        <span class="input-group-text">.۰۰</span>
                                    </div>
                                </div>

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="text" class="form-control">
                                    <div class="input-group-append">
                                        <span class="input-group-text">.۰۰</span>
                                    </div>
                                </div>

                                <h5 class="my-3">به همراه‌ آیکون</h5>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                    </div>
                                    <input type="email" class="form-control" placeholder="ایمیل">
                                </div>

                                <div class="input-group mb-3">
                                    <input type="text" class="form-control">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-check"></i></span>
                                    </div>
                                </div>

                                <div class="input-group">
                                    <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="fa fa-dollar"></i>
                    </span>
                                    </div>
                                    <input type="text" class="form-control">
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="fa fa-ambulance"></i></div>
                                    </div>
                                </div>

                                <h5 class="my-4 mb-2">به همراه چک باکس و رادیو</h5>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                        <span class="input-group-text">
                          <input type="checkbox">
                        </span>
                                            </div>
                                            <input type="text" class="form-control">
                                        </div>
                                        <!-- /input-group -->
                                    </div>
                                    <!-- /.col-lg-6 -->
                                    <div class="col-lg-6">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><input type="radio"></span>
                                            </div>
                                            <input type="text" class="form-control">
                                        </div>
                                        <!-- /input-group -->
                                    </div>
                                    <!-- /.col-lg-6 -->
                                </div>
                                <!-- /.row -->

                                <h5 class="mt-4 mb-2">به ‌همراه دکمه</h5>

                                <p>بزرگ: <code>.input-group.input-group-lg</code></p>

                                <div class="input-group input-group-lg mb-3">
                                    <div class="input-group-prepend">
                                        <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                                            ارسال
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li class="dropdown-item"><a href="#">لینک ۱</a></li>
                                            <li class="dropdown-item"><a href="#">لینک ۲</a></li>
                                            <li class="dropdown-item"><a href="#">لینک ۳</a></li>
                                            <li class="dropdown-divider"></li>
                                            <li class="dropdown-item"><a href="#">لینک ۴</a></li>
                                        </ul>
                                    </div>
                                    <!-- /btn-group -->
                                    <input type="text" class="form-control">
                                </div>
                                <!-- /input-group -->

                                <p>معمولی</p>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <button type="button" class="btn btn-danger">ارسال</button>
                                    </div>
                                    <!-- /btn-group -->
                                    <input type="text" class="form-control">
                                </div>
                                <!-- /input-group -->

                                <p>کوچیک <code>.input-group.input-group-sm</code></p>
                                <div class="input-group input-group-sm">
                                    <input type="text" class="form-control">
                                    <span class="input-group-append">
                    <button type="button" class="btn btn-info btn-flat">برو</button>
                  </span>
                                </div>
                                <!-- /input-group -->
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                    </div>
                    <!--/.col (left) -->
                    <!-- right column -->
                    <div class="col-md-6">
                        <!-- Horizontal Form -->
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">فرم های عمودی</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form class="form-horizontal">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">ایمیل</label>

                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="inputEmail3" placeholder="ایمیل را وارد کنید">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-2 control-label">پسورد</label>

                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="inputPassword3" placeholder="پسورد را وارد کنید">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                                <label class="form-check-label" for="exampleCheck2">مرا به خاطر بسپار</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-info">ورود</button>
                                    <button type="submit" class="btn btn-default float-left">لغو</button>
                                </div>
                                <!-- /.card-footer -->
                            </form>
                        </div>
                        <!-- /.card -->
                        <!-- general form elements disabled -->
                        <div class="card card-warning">
                            <div class="card-header">
                                <h3 class="card-title">اجزای کلی</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form role="form">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>نوشته</label>
                                        <input type="text" class="form-control" placeholder="وارد کردن اطلاعات ...">
                                    </div>
                                    <div class="form-group">
                                        <label>نوشته غیرفعال</label>
                                        <input type="text" class="form-control" placeholder="وارد کردن اطلاعات ..." disabled="">
                                    </div>

                                    <!-- textarea -->
                                    <div class="form-group">
                                        <label>متن</label>
                                        <textarea class="form-control" rows="3" placeholder="وارد کردن اطلاعات ..."></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>متن غیرفعال</label>
                                        <textarea class="form-control" rows="3" placeholder="وارد کردن اطلاعات ..." disabled=""></textarea>
                                    </div>

                                    <!-- input states -->
                                    <div class="form-group has-success">
                                        <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> مقدار درست</label>
                                        <input type="text" class="form-control" id="inputSuccess" placeholder="وارد کردن اطلاعات ...">
                                    </div>
                                    <div class="form-group has-warning">
                                        <label class="control-label" for="inputWarning"><i class="fa fa-bell-o"></i> با اخطار</label>
                                        <input type="text" class="form-control" id="inputWarning" placeholder="وارد کردن اطلاعات ...">
                                    </div>
                                    <div class="form-group has-error">
                                        <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> با ارور</label>
                                        <input type="text" class="form-control" id="inputError" placeholder="وارد کردن اطلاعات ...">
                                    </div>

                                    <!-- checkbox -->
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="option1">
                                            <label class="form-check-label">چک باکس</label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="option1" disabled="">
                                            <label class="form-check-label">چک باکس غیرفعال</label>
                                        </div>
                                    </div>

                                    <!-- radio -->
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="option1">
                                            <label class="form-check-label">رادیو</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="option1" disabled="">
                                            <label class="form-check-label">رادیو غیرفعال</label>
                                        </div>
                                    </div>

                                    <!-- select -->
                                    <div class="form-group">
                                        <label>انتخاب کنید</label>
                                        <select class="form-control">
                                            <option>گزینه ۱</option>
                                            <option>گزینه ۲</option>
                                            <option>گزینه ۳</option>
                                            <option>گزینه ۴</option>
                                            <option>گزینه ۵</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>انتخاب کننده غیرفعال</label>
                                        <select class="form-control" disabled="">
                                            <option>گزینه ۱</option>
                                            <option>گزینه ۲</option>
                                            <option>گزینه ۳</option>
                                            <option>گزینه ۴</option>
                                            <option>گزینه ۵</option>
                                        </select>
                                    </div>

                                    <!-- Select multiple-->
                                    <div class="form-group">
                                        <label>چند انتخابی</label>
                                        <select multiple="" class="form-control">
                                            <option>گزینه ۱</option>
                                            <option>گزینه ۲</option>
                                            <option>گزینه ۳</option>
                                            <option>گزینه ۴</option>
                                            <option>گزینه ۵</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>چند انتخابی غیرفعال</label>
                                        <select multiple="" class="form-control" disabled="">
                                            <option>گزینه ۱</option>
                                            <option>گزینه ۲</option>
                                            <option>گزینه ۳</option>
                                            <option>گزینه ۴</option>
                                            <option>گزینه ۵</option>
                                        </select>
                                    </div>

                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

@endsection
@section('js')

@endsection
