@extends('admin.layout.admin')
@section('title','general ')

@section('body')

    <div class="content-wrapper" style="min-height: 845px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>گرافیک عمومی</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="#">خانه</a></li>
                            <li class="breadcrumb-item active">گرافیک عمومی</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- COLOR PALETTE -->
                <div class="card card-default color-palette-box">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fa fa-tag"></i>
                            جعبه رنگ‌ها
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4 col-md-2">
                                <h4 class="text-center">Primary</h4>

                                <div class="color-palette-set">
                                    <div class="bg-primary disabled color-palette"><span>Disabled</span></div>
                                    <div class="bg-primary color-palette"><span>#۳c۸dbc</span></div>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 col-md-2">
                                <h4 class="text-center">Info</h4>

                                <div class="color-palette-set">
                                    <div class="bg-info disabled color-palette"><span>Disabled</span></div>
                                    <div class="bg-info color-palette"><span>#۰۰c۰ef</span></div>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 col-md-2">
                                <h4 class="text-center">Success</h4>

                                <div class="color-palette-set">
                                    <div class="bg-success disabled color-palette"><span>Disabled</span></div>
                                    <div class="bg-success color-palette"><span>#۰۰a۶۵a</span></div>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 col-md-2">
                                <h4 class="text-center">Warning</h4>

                                <div class="color-palette-set">
                                    <div class="bg-warning disabled color-palette"><span>Disabled</span></div>
                                    <div class="bg-warning color-palette"><span>#f۳۹c۱۲</span></div>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 col-md-2">
                                <h4 class="text-center">Danger</h4>

                                <div class="color-palette-set">
                                    <div class="bg-danger disabled color-palette"><span>Disabled</span></div>
                                    <div class="bg-danger color-palette"><span>#f۵۶۹۵۴</span></div>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 col-md-2">
                                <h4 class="text-center">Gray</h4>

                                <div class="color-palette-set">
                                    <div class="bg-gray disabled color-palette"><span>Disabled</span></div>
                                    <div class="bg-gray color-palette"><span>#d۲d۶de</span></div>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                        <div class="row">
                            <!-- /.col -->
                            <div class="col-sm-4 col-md-2">
                                <h4 class="text-center">Black</h4>

                                <div class="color-palette-set">
                                    <div class="bg-black disabled color-palette"><span>Disabled</span></div>
                                    <div class="bg-black color-palette"><span>#۱۱۱۱۱۱</span></div>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
                <!-- START ALERTS AND CALLOUTS -->
                <h5 class="mt-4 mb-2">اخطار و اعلان</h5>

                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-default">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fa fa-warning"></i>
                                    اخطار‌ها
                                </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="alert alert-danger alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <h5><i class="icon fa fa-ban"></i> توجه!</h5>
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                                </div>
                                <div class="alert alert-info alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <h5><i class="icon fa fa-info"></i> توجه!</h5>
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                                </div>
                                <div class="alert alert-warning alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <h5><i class="icon fa fa-warning"></i> توجه!</h5>
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                                </div>
                                <div class="alert alert-success alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <h5><i class="icon fa fa-check"></i> توجه!</h5>
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->

                    <div class="col-md-6">
                        <div class="card card-default">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fa fa-bullhorn"></i>
                                    اعلانات
                                </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="callout callout-danger">
                                    <h5>من یک اعلان خطر هستم!</h5>

                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است </p>
                                </div>
                                <div class="callout callout-info">
                                    <h5>من یک اعلان اطلاع هستم!</h5>

                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است </p>
                                </div>
                                <div class="callout callout-warning">
                                    <h5>من یک اعلان اخطار هستم!</h5>

                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است </p>
                                </div>
                                <div class="callout callout-success">
                                    <h5>من یک اعلان موفق هستم!</h5>

                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است </p>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                <!-- END ALERTS AND CALLOUTS -->
                <h5 class="mt-4 mb-2">Tabs in Cards</h5>

                <div class="row">
                    <div class="col-12">
                        <!-- Custom Tabs -->
                        <div class="card">
                            <div class="card-header d-flex p-0">
                                <h3 class="card-title p-3">تب‌ها</h3>
                                <ul class="nav nav-pills ml-auto p-2">
                                    <li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab">تب ۱</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">تب ۲</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#tab_3" data-toggle="tab">تب ۳</a></li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                                            آبشاری <span class="caret"></span>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" tabindex="-1" href="#">منو ۱</a>
                                            <a class="dropdown-item" tabindex="-1" href="#">منو ۲</a>
                                            <a class="dropdown-item" tabindex="-1" href="#">منو ۳</a>
                                            <div class="divider"></div>
                                            <a class="dropdown-item" tabindex="-1" href="#">لینک</a>
                                        </div>
                                    </li>
                                </ul>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab_1">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.
                                    </div>
                                    <!-- /.tab-pane -->
                                    <div class="tab-pane" id="tab_2">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.
                                    </div>
                                    <!-- /.tab-pane -->
                                    <div class="tab-pane" id="tab_3">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                                    </div>
                                    <!-- /.tab-pane -->
                                </div>
                                <!-- /.tab-content -->
                            </div><!-- /.card-body -->
                        </div>
                        <!-- ./card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                <!-- END CUSTOM TABS -->
                <!-- START PROGRESS BARS -->
                <h5 class="mt-4 mb-2">Progress Bars</h5>

                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">نوار پیشرفت</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <p><code>.progress</code></p>

                                <div class="progress">
                                    <div class="progress-bar bg-primary progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                        <span class="sr-only">۴۰% Complete (success)</span>
                                    </div>
                                </div>
                                <p><code>.progress-sm</code></p>

                                <div class="progress progress-sm active">
                                    <div class="progress-bar bg-success progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                        <span class="sr-only">۲۰% Complete</span>
                                    </div>
                                </div>
                                <p><code>.progress-xs</code></p>

                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-warning progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                        <span class="sr-only">۶۰% Complete (warning)</span>
                                    </div>
                                </div>
                                <p><code>.progress-xxs</code></p>

                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                        <span class="sr-only">۶۰% Complete (warning)</span>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col (left) -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">نوار پیشرفت</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="progress mb-3">
                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                        <span class="sr-only">۴۰% Complete (success)</span>
                                    </div>
                                </div>
                                <div class="progress mb-3">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                        <span class="sr-only">۲۰% Complete</span>
                                    </div>
                                </div>
                                <div class="progress mb-3">
                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                        <span class="sr-only">۶۰% Complete (warning)</span>
                                    </div>
                                </div>
                                <div class="progress mb-3">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                        <span class="sr-only">۸۰% Complete</span>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col (right) -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">نوار پیشرفت عمودی با سایزهای مختلف</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body text-center">
                                <p>با اضافه کردن کلاس <code>.vertical</code> و <code>.progress-sm</code>, <code>.progress-xs</code>
                                    or
                                    <code>.progress-xxs</code> :</p>

                                <div class="progress vertical active">
                                    <div class="progress-bar bg-primary progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="height: 40%">
                                        <span class="sr-only">۴۰%</span>
                                    </div>
                                </div>
                                <div class="progress vertical progress-sm">
                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="height: 100%">
                                        <span class="sr-only">۱۰۰%</span>
                                    </div>
                                </div>
                                <div class="progress vertical progress-xs">
                                    <div class="progress-bar bg-warning progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="height: 60%">
                                        <span class="sr-only">۶۰%</span>
                                    </div>
                                </div>
                                <div class="progress vertical progress-xxs">
                                    <div class="progress-bar bg-info progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="height: 60%">
                                        <span class="sr-only">۶۰%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col (left) -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">نوار پیشرفت عمودی</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body text-center">
                                <p>تنها با اضافه کردن <code>.vertical</code> :</p>

                                <div class="progress vertical">
                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="height: 40%">
                                        <span class="sr-only">۴۰%</span>
                                    </div>
                                </div>
                                <div class="progress vertical">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="height: 20%">
                                        <span class="sr-only">۲۰%</span>
                                    </div>
                                </div>
                                <div class="progress vertical">
                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="height: 60%">
                                        <span class="sr-only">۶۰%</span>
                                    </div>
                                </div>
                                <div class="progress vertical">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="height: 80%">
                                        <span class="sr-only">۸۰%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col (right) -->
                </div>
                <!-- /.row -->
                <!-- END PROGRESS BARS -->

                <!-- START ACCORDION & CAROUSEL-->
                <h5 class="mt-4 mb-2">آکاردئون و اسلایدر</h5>

                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">آکاردئون</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div id="accordion">
                                    <!-- we are adding the .class so bootstrap.js collapse plugin detects it -->
                                    <div class="card card-primary">
                                        <div class="card-header">
                                            <h4 class="card-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                    گروه اول
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in">
                                            <div class="card-body">
                                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-danger">
                                        <div class="card-header">
                                            <h4 class="card-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                    گروه قرمز
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse">
                                            <div class="card-body">
                                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-success">
                                        <div class="card-header">
                                            <h4 class="card-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                                    گروه موفق
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse">
                                            <div class="card-body">
                                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">اسلایدرها</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="http://placehold.it/900x500/39CCCC/ffffff&amp;text=I+Love+Bootstrap" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="http://placehold.it/900x500/3c8dbc/ffffff&amp;text=I+Love+Bootstrap" alt="Second slide">
                                        </div>
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="http://placehold.it/900x500/f39c12/ffffff&amp;text=I+Love+Bootstrap" alt="Third slide">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                <!-- END ACCORDION & CAROUSEL-->

                <!-- START TYPOGRAPHY -->
                <h5 class="mt-4 mb-2">تایپوگرافی</h5>

                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fa fa-text-width"></i>
                                    عنوان‌ها
                                </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <h1>h۱. تگ عنوان</h1>

                                <h2>h۲. تگ عنوان</h2>

                                <h3>h۳. تگ عنوان</h3>
                                <h4>h۴. تگ عنوان</h4>
                                <h5>h۵. تگ عنوان</h5>
                                <h6>h۶. تگ عنوان</h6>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- ./col -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fa fa-text-width"></i>
                                    تاکید متن
                                </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <p class="lead">متن های تاکید و مهم را رنگ کنید</p>

                                <p class="text-success">متن سبز رنگ برای موفقیت</p>

                                <p class="text-info">متن آبی آسمانی برای اطلاعات</p>

                                <p class="text-primary">متن آبی روشن برای اطلاعات ۲</p>

                                <p class="text-danger">متن قرمز رنگ برای اخطار</p>

                                <p class="text-warning">متن زرد رنگ برای هشدار</p>

                                <p class="text-muted">متن مات برای تاکید عمومی</p>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fa fa-text-width"></i>
                                    نقل قول
                                </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <blockquote>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                                    <small>در پاسخ به <cite title="لورم چیه">لورم چیه</cite></small>
                                </blockquote>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- ./col -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fa fa-text-width"></i>
                                    نقل قول سمت راست
                                </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body clearfix">
                                <blockquote class="float-right">
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                                    <small>در پاسخ به <cite title="لورم چیه">لورم چیه</cite></small>
                                </blockquote>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fa fa-text-width"></i>
                                    لیست ها
                                </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <ul class="mr-4">
                                    <li>لورم ایپسوم متن ساختگی</li>
                                    <li>لورم ایپسوم متن ساختگی</li>
                                    <li>لورم ایپسوم متن ساختگی</li>
                                    <li>لورم ایپسوم متن ساختگی</li>
                                    <li>لورم ایپسوم متن ساختگی
                                        <ul class="mr-4">
                                            <li>لورم ایپسوم متن ساختگی</li>
                                            <li>لورم ایپسوم متن ساختگی</li>
                                            <li>لورم ایپسوم متن ساختگی</li>
                                            <li>لورم ایپسوم متن ساختگی</li>
                                        </ul>
                                    </li>
                                    <li>لورم ایپسوم متن ساختگی</li>
                                    <li>لورم ایپسوم متن ساختگی</li>
                                    <li>لورم ایپسوم متن ساختگی</li>
                                </ul>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- ./col -->
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fa fa-text-width"></i>
                                    لیست شماره‌دار
                                </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <ol>
                                    <li>لورم ایپسوم متن ساختگی</li>
                                    <li>لورم ایپسوم متن ساختگی</li>
                                    <li>لورم ایپسوم متن ساختگی</li>
                                    <li>لورم ایپسوم متن ساختگی</li>
                                    <li>لورم ایپسوم متن ساختگی
                                        <ol>
                                            <li>لورم ایپسوم متن ساختگی</li>
                                            <li>لورم ایپسوم متن ساختگی</li>
                                            <li>لورم ایپسوم متن ساختگی</li>
                                            <li>لورم ایپسوم متن ساختگی</li>
                                        </ol>
                                    </li>
                                    <li>لورم ایپسوم متن ساختگی</li>
                                    <li>لورم ایپسوم متن ساختگی</li>
                                    <li>لورم ایپسوم متن ساختگی</li>
                                </ol>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- ./col -->
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fa fa-text-width"></i>
                                    لیست بدون استایل
                                </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <ul class="list-unstyled mr-4">
                                    <li>لورم ایپسوم متن ساختگی</li>
                                    <li>لورم ایپسوم متن ساختگی</li>
                                    <li>لورم ایپسوم متن ساختگی</li>
                                    <li>لورم ایپسوم متن ساختگی</li>
                                    <li>لورم ایپسوم متن ساختگی
                                        <ul class="mr-4">
                                            <li>لورم ایپسوم متن ساختگی</li>
                                            <li>لورم ایپسوم متن ساختگی</li>
                                            <li>لورم ایپسوم متن ساختگی</li>
                                            <li>لورم ایپسوم متن ساختگی</li>
                                        </ul>
                                    </li>
                                    <li>لورم ایپسوم متن ساختگی</li>
                                    <li>لورم ایپسوم متن ساختگی</li>
                                    <li>لورم ایپسوم متن ساختگی</li>
                                </ul>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fa fa-text-width"></i>
                                    توضیحات
                                </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <dl>
                                    <dt>لیست توضیحات</dt>
                                    <dd>لورم ایپسوم متن ساختگی</dd>
                                    <dt>تیتیر</dt>
                                    <dd>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</dd>
                                    <dd>لورم ایپسوم متن ساختگی.</dd>
                                    <dt>تیتر</dt>
                                    <dd>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</dd>
                                </dl>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- ./col -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fa fa-text-width"></i>
                                    توضیحات
                                </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <dl class="dl-horizontal">
                                    <dt>تیتر</dt>
                                    <dd>لورم ایپسوم متن ساختگی</dd>
                                    <dt>تیتر</dt>
                                    <dd>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </dd>
                                    <dd>لورم ایپسوم متن ساختگی.</dd>
                                    <dt>تیتر</dt>
                                    <dd>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </dd>
                                    <dt>تیتر</dt>
                                    <dd>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                    </dd>
                                </dl>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
                <!-- END TYPOGRAPHY -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

@endsection
@section('js')

@endsection
