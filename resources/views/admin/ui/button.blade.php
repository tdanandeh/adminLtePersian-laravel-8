@extends('admin.layout.admin')
@section('title','buttons ')

@section('body')

    <div class="content-wrapper" style="min-height: 403px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>دکمه‌ها</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="#">خانه</a></li>
                            <li class="breadcrumb-item active">دکمه‌ها</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fa fa-edit"></i>
                                    دکمه ها
                                </h3>
                            </div>
                            <div class="card-body pad table-responsive">
                                <p>انواع دکمه‌های مختلف تنها با اضافه کردن کلاس <code>.btn</code></p>
                                <table class="table table-bordered text-center">
                                    <tbody><tr>
                                        <th>Normal</th>
                                        <th>Large <code>.btn-lg</code></th>
                                        <th>Small <code>.btn-sm</code></th>
                                        <th>Flat <code>.btn-flat</code></th>
                                        <th>Disabled <code>.disabled</code></th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button type="button" class="btn btn-block btn-default">Default</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-default btn-lg">Default</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-default btn-sm">Default</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-default btn-flat">Default</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-default disabled">Default</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button type="button" class="btn btn-block btn-primary">Primary</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-primary btn-lg">Primary</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-primary btn-sm">Primary</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-primary btn-flat">Primary</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-primary disabled">Primary</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button type="button" class="btn btn-block btn-secondary">Secondary</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-secondary btn-lg">Secondary</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-secondary btn-sm">Secondary</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-secondary btn-flat">Secondary</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-secondary disabled">Secondary</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button type="button" class="btn btn-block btn-success">Success</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-success btn-lg">Success</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-success btn-sm">Success</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-success btn-flat">Success</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-success disabled">Success</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button type="button" class="btn btn-block btn-info">Info</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-info btn-lg">Info</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-info btn-sm">Info</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-info btn-flat">Info</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-info disabled">Info</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button type="button" class="btn btn-block btn-danger">Danger</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-danger btn-lg">Danger</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-danger btn-sm">Danger</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-danger btn-flat">Danger</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-danger disabled">Danger</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button type="button" class="btn btn-block btn-warning">Warning</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-warning btn-lg">Warning</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-warning btn-sm">Warning</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-warning btn-flat">Warning</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-warning disabled">Warning</button>
                                        </td>
                                    </tr>
                                    </tbody></table>
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- ./row -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fa fa-edit"></i>
                                    دکمه‌های خطی
                                </h3>
                            </div>
                            <div class="card-body pad table-responsive">
                                <p>انواع دکمه‌های مختلف تنها با اضافه کردن کلاس <code>.btn</code></p>
                                <table class="table table-bordered text-center">
                                    <tbody><tr>
                                        <th>Normal</th>
                                        <th>Large <code>.btn-lg</code></th>
                                        <th>Small <code>.btn-sm</code></th>
                                        <th>Flat <code>.btn-flat</code></th>
                                        <th>Disabled <code>.disabled</code></th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button type="button" class="btn btn-block btn-outline-primary">Primary</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-outline-primary btn-lg">Primary</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-outline-primary btn-sm">Primary</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-outline-primary btn-flat">Primary</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-outline-primary disabled">Primary</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button type="button" class="btn btn-block btn-outline-secondary">Secondary</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-outline-secondary btn-lg">Secondary</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-outline-secondary btn-sm">Secondary</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-outline-secondary btn-flat">Secondary</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-outline-secondary disabled">Secondary</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button type="button" class="btn btn-block btn-outline-success">Success</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-outline-success btn-lg">Success</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-outline-success btn-sm">Success</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-outline-success btn-flat">Success</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-outline-success disabled">Success</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button type="button" class="btn btn-block btn-outline-info">Info</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-outline-info btn-lg">Info</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-outline-info btn-sm">Info</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-outline-info btn-flat">Info</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-outline-info disabled">Info</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button type="button" class="btn btn-block btn-outline-danger">Danger</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-outline-danger btn-lg">Danger</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-outline-danger btn-sm">Danger</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-outline-danger btn-flat">Danger</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-outline-danger disabled">Danger</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button type="button" class="btn btn-block btn-outline-warning">Warning</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-outline-warning btn-lg">Warning</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-outline-warning btn-sm">Warning</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-outline-warning btn-flat">Warning</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-outline-warning disabled">Warning</button>
                                        </td>
                                    </tr>
                                    </tbody></table>
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- ./row -->
                <div class="row">
                    <div class="col-md-6">
                        <!-- Block buttons -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">عرض کامل</h3>
                            </div>
                            <div class="card-body">
                                <button type="button" class="btn btn-default btn-block">.btn-block</button>
                                <button type="button" class="btn btn-default btn-block btn-flat">.btn-block .btn-flat</button>
                                <button type="button" class="btn btn-default btn-block btn-sm">.btn-block .btn-sm</button>
                            </div>
                        </div>
                        <!-- /.card -->

                        <!-- Horizontal grouping -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">دکمه های گروهی</h3>
                            </div>
                            <div class="card-body table-responsive pad">
                                <p>
                                    برای ایجاد گروه دکمه کافیست دکمه ها را درون این تگ قرار دهید  <code>&lt;div class="btn-group"&gt;&lt;/div&gt;</code>
                                </p>

                                <table class="table table-bordered">
                                    <tbody><tr>
                                        <th>دکمه</th>
                                        <th>آیکون</th>
                                        <th>فلت</th>
                                        <th>آبشاری</th>
                                    </tr>
                                    <!-- Default -->
                                    <tr>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-default">Left</button>
                                                <button type="button" class="btn btn-default">Middle</button>
                                                <button type="button" class="btn btn-default">Right</button>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-default"><i class="fa fa-align-left"></i></button>
                                                <button type="button" class="btn btn-default"><i class="fa fa-align-center"></i></button>
                                                <button type="button" class="btn btn-default"><i class="fa fa-align-right"></i></button>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-default btn-flat"><i class="fa fa-align-left"></i></button>
                                                <button type="button" class="btn btn-default btn-flat"><i class="fa fa-align-center"></i>
                                                </button>
                                                <button type="button" class="btn btn-default btn-flat"><i class="fa fa-align-right"></i>
                                                </button>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-default">۱</button>
                                                <button type="button" class="btn btn-default">۲</button>

                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                        <span class="caret"></span>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Dropdown link</a>
                                                        <a class="dropdown-item" href="#">Dropdown link</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- ./default -->
                                    <!-- Info -->
                                    <tr>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-info">Left</button>
                                                <button type="button" class="btn btn-info">Middle</button>
                                                <button type="button" class="btn btn-info">Right</button>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-info"><i class="fa fa-align-left"></i></button>
                                                <button type="button" class="btn btn-info"><i class="fa fa-align-center"></i></button>
                                                <button type="button" class="btn btn-info"><i class="fa fa-align-right"></i></button>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-info btn-flat"><i class="fa fa-align-left"></i></button>
                                                <button type="button" class="btn btn-info btn-flat"><i class="fa fa-align-center"></i></button>
                                                <button type="button" class="btn btn-info btn-flat"><i class="fa fa-align-right"></i></button>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-info">۱</button>
                                                <button type="button" class="btn btn-info">۲</button>

                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                                        <span class="caret"></span>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Dropdown link</a>
                                                        <a class="dropdown-item" href="#">Dropdown link</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- /. info -->
                                    <!-- /.danger -->
                                    <tr>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-danger">Left</button>
                                                <button type="button" class="btn btn-danger">Middle</button>
                                                <button type="button" class="btn btn-danger">Right</button>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-danger"><i class="fa fa-align-left"></i></button>
                                                <button type="button" class="btn btn-danger"><i class="fa fa-align-center"></i></button>
                                                <button type="button" class="btn btn-danger"><i class="fa fa-align-right"></i></button>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-danger btn-flat"><i class="fa fa-align-left"></i></button>
                                                <button type="button" class="btn btn-danger btn-flat"><i class="fa fa-align-center"></i>
                                                </button>
                                                <button type="button" class="btn btn-danger btn-flat"><i class="fa fa-align-right"></i></button>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-danger">۱</button>
                                                <button type="button" class="btn btn-danger">۲</button>

                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                                                        <span class="caret"></span>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Dropdown link</a>
                                                        <a class="dropdown-item" href="#">Dropdown link</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- /.danger -->
                                    <!-- warning -->
                                    <tr>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-warning">Left</button>
                                                <button type="button" class="btn btn-warning">Middle</button>
                                                <button type="button" class="btn btn-warning">Right</button>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-warning"><i class="fa fa-align-left"></i></button>
                                                <button type="button" class="btn btn-warning"><i class="fa fa-align-center"></i></button>
                                                <button type="button" class="btn btn-warning"><i class="fa fa-align-right"></i></button>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-warning btn-flat"><i class="fa fa-align-left"></i></button>
                                                <button type="button" class="btn btn-warning btn-flat"><i class="fa fa-align-center"></i>
                                                </button>
                                                <button type="button" class="btn btn-warning btn-flat"><i class="fa fa-align-right"></i>
                                                </button>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-warning">۱</button>
                                                <button type="button" class="btn btn-warning">۲</button>

                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                                                        <span class="caret"></span>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Dropdown link</a>
                                                        <a class="dropdown-item" href="#">Dropdown link</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- /.warning -->
                                    <!-- success -->
                                    <tr>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-success">Left</button>
                                                <button type="button" class="btn btn-success">Middle</button>
                                                <button type="button" class="btn btn-success">Right</button>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-success"><i class="fa fa-align-left"></i></button>
                                                <button type="button" class="btn btn-success"><i class="fa fa-align-center"></i></button>
                                                <button type="button" class="btn btn-success"><i class="fa fa-align-right"></i></button>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-success btn-flat"><i class="fa fa-align-left"></i></button>
                                                <button type="button" class="btn btn-success btn-flat"><i class="fa fa-align-center"></i>
                                                </button>
                                                <button type="button" class="btn btn-success btn-flat"><i class="fa fa-align-right"></i>
                                                </button>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-success">۱</button>
                                                <button type="button" class="btn btn-success">۲</button>

                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                                                        <span class="caret"></span>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Dropdown link</a>
                                                        <a class="dropdown-item" href="#">Dropdown link</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- /.success -->
                                    </tbody></table>
                            </div>
                        </div>
                        <!-- /.card -->

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">دکمه چسبیده به فرم</h3>
                            </div>
                            <div class="card-body">
                                <strong>آبشاری</strong>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                            ارسال
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">لینک ۱</a>
                                            <a class="dropdown-item" href="#">لینک ۲</a>
                                            <a class="dropdown-item" href="#">لینک ۳</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">لینک ۴</a>
                                        </div>
                                    </div>
                                    <!-- /btn-group -->
                                    <input type="text" class="form-control">
                                </div>
                                <!-- /input-group -->
                                <strong>معمولی</strong>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <button type="button" class="btn btn-danger">ارسال</button>
                                    </div>
                                    <!-- /btn-group -->
                                    <input type="text" class="form-control">
                                </div>
                                <!-- /input-group -->
                                <strong>فلت</strong>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control">
                                    <span class="input-group-append">
                    <button type="button" class="btn btn-info btn-flat">ارسال</button>
                  </span>
                                </div>
                                <!-- /input-group -->
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                        <!-- split buttons box -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">دکمه های ترکیبی</h3>
                            </div>
                            <div class="card-body">
                                <!-- Split button -->
                                <p>دکمه‌های ترکیبی معمولی:</p>

                                <div class="margin">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default">ارسال</button>
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right" role="menu">
                                            <a class="dropdown-item" href="#">لینک ۱</a>
                                            <a class="dropdown-item" href="#">لینک ۲</a>
                                            <a class="dropdown-item" href="#">لینک ۳</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">لینک ۴</a>
                                        </div>
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-info">ارسال</button>
                                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu" role="menu">
                                            <a class="dropdown-item" href="#">لینک ۱</a>
                                            <a class="dropdown-item" href="#">لینک ۲</a>
                                            <a class="dropdown-item" href="#">لینک ۳</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">لینک ۴</a>
                                        </div>
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-danger">ارسال</button>
                                        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu" role="menu">
                                            <a class="dropdown-item" href="#">لینک ۱</a>
                                            <a class="dropdown-item" href="#">لینک ۲</a>
                                            <a class="dropdown-item" href="#">لینک ۳</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">لینک ۴</a>
                                        </div>
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-success">ارسال</button>
                                        <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu" role="menu">
                                            <a class="dropdown-item" href="#">لینک ۱</a>
                                            <a class="dropdown-item" href="#">لینک ۲</a>
                                            <a class="dropdown-item" href="#">لینک ۳</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">لینک ۴</a>
                                        </div>
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-warning">ارسال</button>
                                        <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu" role="menu">
                                            <a class="dropdown-item" href="#">لینک ۱</a>
                                            <a class="dropdown-item" href="#">لینک ۲</a>
                                            <a class="dropdown-item" href="#">لینک ۳</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">لینک ۴</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- flat split buttons -->
                                <p>دکمه‌های فلت:</p>

                                <div class="margin">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default btn-flat">ارسال</button>
                                        <button type="button" class="btn btn-default btn-flat dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">لینک ۱</a></li>
                                            <li><a href="#">لینک ۲</a></li>
                                            <li><a href="#">لینک ۳</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">لینک ۴</a></li>
                                        </ul>
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-info btn-flat">ارسال</button>
                                        <button type="button" class="btn btn-info btn-flat dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu" role="menu">
                                            <a class="dropdown-item" href="#">لینک ۱</a>
                                            <a class="dropdown-item" href="#">لینک ۲</a>
                                            <a class="dropdown-item" href="#">لینک ۳</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">لینک ۴</a>
                                        </div>
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-danger btn-flat">ارسال</button>
                                        <button type="button" class="btn btn-danger btn-flat dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu" role="menu">
                                            <a class="dropdown-item" href="#">لینک ۱</a>
                                            <a class="dropdown-item" href="#">لینک ۲</a>
                                            <a class="dropdown-item" href="#">لینک ۳</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">لینک ۴</a>
                                        </div>
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-success btn-flat">ارسال</button>
                                        <button type="button" class="btn btn-success btn-flat dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu" role="menu">
                                            <a class="dropdown-item" href="#">لینک ۱</a>
                                            <a class="dropdown-item" href="#">لینک ۲</a>
                                            <a class="dropdown-item" href="#">لینک ۳</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">لینک ۴</a>
                                        </div>
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-warning btn-flat">ارسال</button>
                                        <button type="button" class="btn btn-warning btn-flat dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu" role="menu">
                                            <a class="dropdown-item" href="#">لینک ۱</a>
                                            <a class="dropdown-item" href="#">لینک ۲</a>
                                            <a class="dropdown-item" href="#">لینک ۳</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">لینک ۴</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- end split buttons box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                        <!-- Application buttons -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">دکمه های نرم افزاری</h3>
                            </div>
                            <div class="card-body">
                                <p>کلاس <code>.btn.btn-app</code> را به تگ <code>&lt;a&gt;</code> اضافه کنید:</p>
                                <a class="btn btn-app">
                                    <i class="fa fa-edit"></i> ویرایش
                                </a>
                                <a class="btn btn-app">
                                    <i class="fa fa-play"></i> اجرا
                                </a>
                                <a class="btn btn-app">
                                    <i class="fa fa-repeat"></i> تکرار
                                </a>
                                <a class="btn btn-app">
                                    <i class="fa fa-pause"></i> توقف
                                </a>
                                <a class="btn btn-app">
                                    <i class="fa fa-save"></i> ذخیره
                                </a>
                                <a class="btn btn-app">
                                    <span class="badge bg-warning">۳</span>
                                    <i class="fa fa-bullhorn"></i> اعلان
                                </a>
                                <a class="btn btn-app">
                                    <span class="badge bg-success">۳۰۰</span>
                                    <i class="fa fa-barcode"></i> محصولات
                                </a>
                                <a class="btn btn-app">
                                    <span class="badge bg-purple">۸۹۱</span>
                                    <i class="fa fa-users"></i> کاربران
                                </a>
                                <a class="btn btn-app">
                                    <span class="badge bg-teal">۶۷</span>
                                    <i class="fa fa-inbox"></i> سفارشات
                                </a>
                                <a class="btn btn-app">
                                    <span class="badge bg-info">۱۲</span>
                                    <i class="fa fa-envelope"></i> اینباکس
                                </a>
                                <a class="btn btn-app">
                                    <span class="badge bg-danger">۵۳۱</span>
                                    <i class="fa fa-heart-o"></i> لایک‌ها
                                </a>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                        <!-- Vertical grouping -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">دکمه های گروهی عمودی</h3>
                            </div>
                            <div class="card-body table-responsive pad">

                                <p>
                                    برای ایجاد گروه دکمه کافیست دکمه ها را درون این تگ قرار دهید  <code>&lt;div class="btn-group-vertical"&gt;&lt;/div&gt;</code>
                                </p>

                                <table class="table table-bordered">
                                    <tbody><tr>
                                        <th>Button</th>
                                        <th>Icons</th>
                                        <th>Flat</th>
                                        <th>Dropdown</th>
                                    </tr>
                                    <!-- Default -->
                                    <tr>
                                        <td>
                                            <div class="btn-group-vertical">
                                                <button type="button" class="btn btn-default">Top</button>
                                                <button type="button" class="btn btn-default">Middle</button>
                                                <button type="button" class="btn btn-default">Bottom</button>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="btn-group-vertical">
                                                <button type="button" class="btn btn-default"><i class="fa fa-align-left"></i></button>
                                                <button type="button" class="btn btn-default"><i class="fa fa-align-center"></i></button>
                                                <button type="button" class="btn btn-default"><i class="fa fa-align-right"></i></button>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="btn-group-vertical">
                                                <button type="button" class="btn btn-default btn-flat"><i class="fa fa-align-left"></i></button>
                                                <button type="button" class="btn btn-default btn-flat"><i class="fa fa-align-center"></i>
                                                </button>
                                                <button type="button" class="btn btn-default btn-flat"><i class="fa fa-align-right"></i>
                                                </button>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="btn-group-vertical">
                                                <button type="button" class="btn btn-default">۱</button>
                                                <button type="button" class="btn btn-default">۲</button>

                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                        <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">Dropdown link</a></li>
                                                        <li><a href="#">Dropdown link</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- ./default -->
                                    <!-- Info -->
                                    <tr>
                                        <td>
                                            <div class="btn-group-vertical">
                                                <button type="button" class="btn btn-info">Top</button>
                                                <button type="button" class="btn btn-info">Middle</button>
                                                <button type="button" class="btn btn-info">Bottom</button>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="btn-group-vertical">
                                                <button type="button" class="btn btn-info"><i class="fa fa-align-left"></i></button>
                                                <button type="button" class="btn btn-info"><i class="fa fa-align-center"></i></button>
                                                <button type="button" class="btn btn-info"><i class="fa fa-align-right"></i></button>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="btn-group-vertical">
                                                <button type="button" class="btn btn-info btn-flat"><i class="fa fa-align-left"></i></button>
                                                <button type="button" class="btn btn-info btn-flat"><i class="fa fa-align-center"></i></button>
                                                <button type="button" class="btn btn-info btn-flat"><i class="fa fa-align-right"></i></button>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="btn-group-vertical">
                                                <button type="button" class="btn btn-info">۱</button>
                                                <button type="button" class="btn btn-info">۲</button>

                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                                        <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">Dropdown link</a></li>
                                                        <li><a href="#">Dropdown link</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- /. info -->
                                    <!-- /.danger -->
                                    <tr>
                                        <td>
                                            <div class="btn-group-vertical">
                                                <button type="button" class="btn btn-danger">Top</button>
                                                <button type="button" class="btn btn-danger">Middle</button>
                                                <button type="button" class="btn btn-danger">Bottom</button>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="btn-group-vertical">
                                                <button type="button" class="btn btn-danger"><i class="fa fa-align-left"></i></button>
                                                <button type="button" class="btn btn-danger"><i class="fa fa-align-center"></i></button>
                                                <button type="button" class="btn btn-danger"><i class="fa fa-align-right"></i></button>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="btn-group-vertical">
                                                <button type="button" class="btn btn-danger btn-flat"><i class="fa fa-align-left"></i></button>
                                                <button type="button" class="btn btn-danger btn-flat"><i class="fa fa-align-center"></i>
                                                </button>
                                                <button type="button" class="btn btn-danger btn-flat"><i class="fa fa-align-right"></i></button>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="btn-group-vertical">
                                                <button type="button" class="btn btn-danger">۱</button>
                                                <button type="button" class="btn btn-danger">۲</button>

                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                                                        <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">Dropdown link</a></li>
                                                        <li><a href="#">Dropdown link</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- /.danger -->
                                    <!-- warning -->
                                    <tr>
                                        <td>
                                            <div class="btn-group-vertical">
                                                <button type="button" class="btn btn-warning">Top</button>
                                                <button type="button" class="btn btn-warning">Middle</button>
                                                <button type="button" class="btn btn-warning">Bottom</button>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="btn-group-vertical">
                                                <button type="button" class="btn btn-warning"><i class="fa fa-align-left"></i></button>
                                                <button type="button" class="btn btn-warning"><i class="fa fa-align-center"></i></button>
                                                <button type="button" class="btn btn-warning"><i class="fa fa-align-right"></i></button>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="btn-group-vertical">
                                                <button type="button" class="btn btn-warning btn-flat"><i class="fa fa-align-left"></i></button>
                                                <button type="button" class="btn btn-warning btn-flat"><i class="fa fa-align-center"></i>
                                                </button>
                                                <button type="button" class="btn btn-warning btn-flat"><i class="fa fa-align-right"></i>
                                                </button>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="btn-group-vertical">
                                                <button type="button" class="btn btn-warning">۱</button>
                                                <button type="button" class="btn btn-warning">۲</button>

                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                                                        <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">Dropdown link</a></li>
                                                        <li><a href="#">Dropdown link</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- /.warning -->
                                    <!-- success -->
                                    <tr>
                                        <td>
                                            <div class="btn-group-vertical">
                                                <button type="button" class="btn btn-success">Top</button>
                                                <button type="button" class="btn btn-success">Middle</button>
                                                <button type="button" class="btn btn-success">Bottom</button>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="btn-group-vertical">
                                                <button type="button" class="btn btn-success"><i class="fa fa-align-left"></i></button>
                                                <button type="button" class="btn btn-success"><i class="fa fa-align-center"></i></button>
                                                <button type="button" class="btn btn-success"><i class="fa fa-align-right"></i></button>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="btn-group-vertical">
                                                <button type="button" class="btn btn-success btn-flat"><i class="fa fa-align-left"></i></button>
                                                <button type="button" class="btn btn-success btn-flat"><i class="fa fa-align-center"></i>
                                                </button>
                                                <button type="button" class="btn btn-success btn-flat"><i class="fa fa-align-right"></i>
                                                </button>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="btn-group-vertical">
                                                <button type="button" class="btn btn-success">۱</button>
                                                <button type="button" class="btn btn-success">۲</button>

                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                                                        <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">Dropdown link</a></li>
                                                        <li><a href="#">Dropdown link</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- /.success -->
                                    </tbody></table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /. row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

@endsection
@section('js')

@endsection
