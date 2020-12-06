@extends('admin.layout.admin')
@section('title','صفحه ویجت ها ')

@section('body')

    <div class="content-wrapper" style="min-height: 855px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>ویجت‌ها</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="#">خانه</a></li>
                            <li class="breadcrumb-item active">ویجت‌ها</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <h5 class="mb-2">باکس اطلاعات</h5>
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-info"><i class="fa fa-envelope-o"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">پیام ها</span>
                                <span class="info-box-number">۱,۴۱۰</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-success"><i class="fa fa-flag-o"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">علاقه‌مندی‌ها</span>
                                <span class="info-box-number">۴۱۰</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-warning"><i class="fa fa-files-o"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">آپلودها</span>
                                <span class="info-box-number">۱۳,۶۴۸</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-danger"><i class="fa fa-star-o"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">لایک‌ها</span>
                                <span class="info-box-number">۹۳,۱۳۹</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <!-- =========================================================== -->
                <h5 class="mt-4 mb-2">باکس اطلاعات با <code>bg-*</code></h5>
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="info-box bg-info">
                            <span class="info-box-icon"><i class="fa fa-bookmark-o"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">علاقمندی‌ها</span>
                                <span class="info-box-number">۴۱,۴۱۰</span>

                                <div class="progress">
                                    <div class="progress-bar" style="width: 70%"></div>
                                </div>
                                <span class="progress-description">
                  ۷۰% درصد در ۳۰ روز
                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="info-box bg-success">
                            <span class="info-box-icon"><i class="fa fa-thumbs-o-up"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">لایک‌ها</span>
                                <span class="info-box-number">۴۱,۴۱۰</span>

                                <div class="progress">
                                    <div class="progress-bar" style="width: 70%"></div>
                                </div>
                                <span class="progress-description">
                  ۷۰% درصد در ۳۰ روز
                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="info-box bg-warning">
                            <span class="info-box-icon"><i class="fa fa-calendar"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">رویدادها</span>
                                <span class="info-box-number">۴۱,۴۱۰</span>

                                <div class="progress">
                                    <div class="progress-bar" style="width: 70%"></div>
                                </div>
                                <span class="progress-description">
                  ۷۰% درصد در ۳۰ روز
                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="info-box bg-danger">
                            <span class="info-box-icon"><i class="fa fa-comments-o"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">نظرات</span>
                                <span class="info-box-number">۴۱,۴۱۰</span>

                                <div class="progress">
                                    <div class="progress-bar" style="width: 70%"></div>
                                </div>
                                <span class="progress-description">
                  ۷۰% درصد در ۳۰ روز
                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <!-- =========================================================== -->
                <h5 class="mt-4 mb-2">باکس اطلاعات با <code>bg-*-gradient</code></h5>
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="info-box bg-info-gradient">
                            <span class="info-box-icon"><i class="fa fa-bookmark-o"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">علاقمندی‌ها</span>
                                <span class="info-box-number">۴۱,۴۱۰</span>

                                <div class="progress">
                                    <div class="progress-bar" style="width: 70%"></div>
                                </div>
                                <span class="progress-description">
                  ۷۰% درصد در ۳۰ روز
                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="info-box bg-success-gradient">
                            <span class="info-box-icon"><i class="fa fa-thumbs-o-up"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">لایک‌ها</span>
                                <span class="info-box-number">۴۱,۴۱۰</span>

                                <div class="progress">
                                    <div class="progress-bar" style="width: 70%"></div>
                                </div>
                                <span class="progress-description">
                  ۷۰% درصد در ۳۰ روز
                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="info-box bg-warning-gradient">
                            <span class="info-box-icon"><i class="fa fa-calendar"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">رویدادها</span>
                                <span class="info-box-number">۴۱,۴۱۰</span>

                                <div class="progress">
                                    <div class="progress-bar" style="width: 70%"></div>
                                </div>
                                <span class="progress-description">
                  ۷۰% درصد در ۳۰ روز
                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="info-box bg-danger-gradient">
                            <span class="info-box-icon"><i class="fa fa-comments-o"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">نظرات</span>
                                <span class="info-box-number">۴۱,۴۱۰</span>

                                <div class="progress">
                                    <div class="progress-bar" style="width: 70%"></div>
                                </div>
                                <span class="progress-description">
                  ۷۰% درصد در ۳۰ روز
                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <!-- =========================================================== -->

                <!-- Small Box (Stat card) -->
                <h5 class="mb-2 mt-4">باکس کوچک</h5>
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>۱۵۰</h3>

                                <p>سفارشات جدید</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="#" class="small-box-footer">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>۵۳<sup style="font-size: 20px">%</sup></h3>

                                <p>افزایش امتیاز</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="#" class="small-box-footer">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>۴۴</h3>

                                <p>کاربران ثبت شده</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="#" class="small-box-footer">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>۶۵</h3>

                                <p>بازدید جدید</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="#" class="small-box-footer">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->

                <!-- =========================================================== -->
                <h4 class="mb-2 mt-4">باکس‌ها</h4>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card card-default collapsed-card">
                            <div class="card-header">
                                <h3 class="card-title">باکس بسته</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                                    </button>
                                </div>
                                <!-- /.card-tools -->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                محتوای باکس
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-3">
                        <div class="card card-success">
                            <div class="card-header">
                                <h3 class="card-title">قابل حذف</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i>
                                    </button>
                                </div>
                                <!-- /.card-tools -->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                محتوای باکس
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-3">
                        <div class="card card-warning">
                            <div class="card-header">
                                <h3 class="card-title">باکس باز</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <!-- /.card-tools -->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                محتوای باکس
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-3">
                        <div class="card card-danger">
                            <div class="card-header">
                                <h3 class="card-title">لودینگ</h3>
                            </div>
                            <div class="card-body">
                                محتوای باکس
                            </div>
                            <!-- /.card-body -->
                            <!-- Loading (remove the following to stop the loading)-->
                            <div class="overlay">
                                <i class="fa fa-refresh fa-spin"></i>
                            </div>
                            <!-- end loading -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <!-- =========================================================== -->

                <div class="row">
                    <div class="col-md-3">
                        <div class="card card-info collapsed-card card-outline">
                            <div class="card-header">
                                <h3 class="card-title">باکس بسته</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                                    </button>
                                </div>
                                <!-- /.card-tools -->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                محتوای باکس
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-3">
                        <div class="card card-success card-outline">
                            <div class="card-header">
                                <h3 class="card-title">قابل حذف</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-widget="remove">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </div>
                                <!-- /.card-tools -->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                محتوای باکس
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-3">
                        <div class="card card-warning card-outline">
                            <div class="card-header">
                                <h3 class="card-title">باکس باز</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <!-- /.card-tools -->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                محتوای باکس
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-3">
                        <div class="card card-danger card-outline">
                            <div class="card-header">
                                <h3 class="card-title">باکس ارور</h3>
                            </div>
                            <div class="card-body">
                                محتوای باکس
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <!-- =========================================================== -->

                <div class="row">
                    <div class="col-md-3">
                        <div class="card bg-primary-gradient">
                            <div class="card-header">
                                <h3 class="card-title">باکس اولیه</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <!-- /.card-tools -->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                محتوای باکس
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-3">
                        <div class="card bg-success-gradient">
                            <div class="card-header">
                                <h3 class="card-title">باکس موفقیت</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i>
                                    </button>
                                </div>
                                <!-- /.card-tools -->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                محتوای باکس
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-3">
                        <div class="card bg-warning-gradient">
                            <div class="card-header">
                                <h3 class="card-title">باکس اخطار</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <!-- /.card-tools -->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                محتوای باکس
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-3">
                        <div class="card bg-danger-gradient">
                            <div class="card-header">
                                <h3 class="card-title">باکس ارور</h3>
                            </div>
                            <div class="card-body">
                                محتوای باکس
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <!-- =========================================================== -->

                <!-- چت مستقیم -->
                <h4 class="mt-4 mb-2">چت مستقیم</h4>
                <div class="row">
                    <div class="col-md-3">
                        <!-- DIRECT CHAT PRIMARY -->
                        <div class="card card-primary card-outline direct-chat direct-chat-primary">
                            <div class="card-header">
                                <h3 class="card-title">چت مستقیم</h3>

                                <div class="card-tools">
                                    <span data-toggle="tooltip" title="" class="badge bg-primary" data-original-title="3 New Messages">۳</span>
                                    <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-toggle="tooltip" title="" data-widget="chat-pane-toggle" data-original-title="Contacts">
                                        <i class="fa fa-comments"></i></button>
                                    <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <!-- Conversations are loaded here -->
                                <div class="direct-chat-messages">
                                    <!-- Message. Default to the left -->
                                    <div class="direct-chat-msg">
                                        <div class="direct-chat-info clearfix">
                                            <span class="direct-chat-name float-left">توحید داننده</span>
                                            <span class="direct-chat-timestamp float-right">۲۲ دی ساعت ۱۸</span>
                                        </div>
                                        <!-- /.direct-chat-info -->
                                        <img class="direct-chat-img" src="../dist/img/user1-128x128.jpg" alt="Message User Image">
                                        <!-- /.direct-chat-img -->
                                        <div class="direct-chat-text">
                                            این قالب کاملا رایگانه، باور کردنی نیست !
                                        </div>
                                        <!-- /.direct-chat-text -->
                                    </div>
                                    <!-- /.direct-chat-msg -->

                                    <!-- Message to the right -->
                                    <div class="direct-chat-msg right">
                                        <div class="direct-chat-info clearfix">
                                            <span class="direct-chat-name float-right">سارا محمدی</span>
                                            <span class="direct-chat-timestamp float-left">۲۳ دی ساعت ۱۲</span>
                                        </div>
                                        <!-- /.direct-chat-info -->
                                        <img class="direct-chat-img" src="{{asset('livedars/admin/dist/img/user3-128x128.jpg')}}" alt="Message User Image">
                                        <!-- /.direct-chat-img -->
                                        <div class="direct-chat-text">
                                            بهتره باور کنی
                                        </div>
                                        <!-- /.direct-chat-text -->
                                    </div>
                                    <!-- /.direct-chat-msg -->
                                </div>
                                <!--/.direct-chat-messages-->

                                <!-- Contacts are loaded here -->
                                <div class="direct-chat-contacts">
                                    <ul class="contacts-list">
                                        <li>
                                            <a href="#">
                                                <img class="contacts-list-img" src="../dist/img/user1-128x128.jpg">

                                                <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            توحید داننده
                            <small class="contacts-list-date float-left">۲/۲۸/۲۰۱۵</small>
                          </span>
                                                    <span class="contacts-list-msg">تا حالا کدوم گوری بودی ؟...</span>
                                                </div>
                                                <!-- /.contacts-list-info -->
                                            </a>
                                        </li>
                                        <!-- End Contact Item -->
                                    </ul>
                                    <!-- /.contatcts-list -->
                                </div>
                                <!-- /.direct-chat-pane -->
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <form action="#" method="post">
                                    <div class="input-group">
                                        <input type="text" name="message" placeholder="تایپ پیام ..." class="form-control">
                                        <span class="input-group-append">
                      <button type="submit" class="btn btn-primary">ارسال</button>
                    </span>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card-footer-->
                        </div>
                        <!--/.direct-chat -->
                    </div>
                    <!-- /.col -->

                    <div class="col-md-3">
                        <!-- DIRECT CHAT SUCCESS -->
                        <div class="card card-success card-outline direct-chat direct-chat-success">
                            <div class="card-header">
                                <h3 class="card-title">چت مستقیم</h3>

                                <div class="card-tools">
                                    <span data-toggle="tooltip" title="" class="badge bg-success" data-original-title="3 New Messages">۳</span>
                                    <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-toggle="tooltip" title="" data-widget="chat-pane-toggle" data-original-title="Contacts">
                                        <i class="fa fa-comments"></i></button>
                                    <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <!-- Conversations are loaded here -->
                                <div class="direct-chat-messages">
                                    <!-- Message. Default to the left -->
                                    <div class="direct-chat-msg">
                                        <div class="direct-chat-info clearfix">
                                            <span class="direct-chat-name float-left">توحید داننده</span>
                                            <span class="direct-chat-timestamp float-right">۲۲ دی ساعت ۱۸</span>
                                        </div>
                                        <!-- /.direct-chat-info -->
                                        <img class="direct-chat-img" src="../dist/img/user1-128x128.jpg" alt="Message User Image">
                                        <!-- /.direct-chat-img -->
                                        <div class="direct-chat-text">
                                            این قالب کاملا رایگانه، باور کردنی نیست !
                                        </div>
                                        <!-- /.direct-chat-text -->
                                    </div>
                                    <!-- /.direct-chat-msg -->

                                    <!-- Message to the right -->
                                    <div class="direct-chat-msg right">
                                        <div class="direct-chat-info clearfix">
                                            <span class="direct-chat-name float-right">سارا محمدی</span>
                                            <span class="direct-chat-timestamp float-left">۲۳ دی ساعت ۱۲</span>
                                        </div>
                                        <!-- /.direct-chat-info -->
                                        <img class="direct-chat-img" src="../dist/img/user3-128x128.jpg" alt="Message User Image">
                                        <!-- /.direct-chat-img -->
                                        <div class="direct-chat-text">
                                            بهتره باور کنی
                                        </div>
                                        <!-- /.direct-chat-text -->
                                    </div>
                                    <!-- /.direct-chat-msg -->
                                </div>
                                <!--/.direct-chat-messages-->

                                <!-- Contacts are loaded here -->
                                <div class="direct-chat-contacts">
                                    <ul class="contacts-list">
                                        <li>
                                            <a href="#">
                                                <img class="contacts-list-img" src="../dist/img/user1-128x128.jpg">

                                                <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            توحید داننده
                            <small class="contacts-list-date float-left">۲/۲۸/۲۰۱۵</small>
                          </span>
                                                    <span class="contacts-list-msg">تا حالا کدوم گوری بودی ؟...</span>
                                                </div>
                                                <!-- /.contacts-list-info -->
                                            </a>
                                        </li>
                                        <!-- End Contact Item -->
                                    </ul>
                                    <!-- /.contatcts-list -->
                                </div>
                                <!-- /.direct-chat-pane -->
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <form action="#" method="post">
                                    <div class="input-group">
                                        <input type="text" name="message" placeholder="تایپ پیام ..." class="form-control">
                                        <span class="input-group-append">
                      <button type="submit" class="btn btn-success">ارسال</button>
                    </span>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card-footer-->
                        </div>
                        <!--/.direct-chat -->
                    </div>
                    <!-- /.col -->

                    <div class="col-md-3">
                        <!-- DIRECT CHAT WARNING -->
                        <div class="card card-warning direct-chat direct-chat-warning">
                            <div class="card-header">
                                <h3 class="card-title">چت مستقیم</h3>

                                <div class="card-tools">
                                    <span data-toggle="tooltip" title="" class="badge bg-danger" data-original-title="3 New Messages">۳</span>
                                    <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-toggle="tooltip" title="" data-widget="chat-pane-toggle" data-original-title="Contacts">
                                        <i class="fa fa-comments"></i></button>
                                    <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <!-- Conversations are loaded here -->
                                <div class="direct-chat-messages">
                                    <!-- Message. Default to the left -->
                                    <div class="direct-chat-msg">
                                        <div class="direct-chat-info clearfix">
                                            <span class="direct-chat-name float-left">توحید داننده</span>
                                            <span class="direct-chat-timestamp float-right">۲۲ دی ساعت ۱۸</span>
                                        </div>
                                        <!-- /.direct-chat-info -->
                                        <img class="direct-chat-img" src="../dist/img/user1-128x128.jpg" alt="Message User Image">
                                        <!-- /.direct-chat-img -->
                                        <div class="direct-chat-text">
                                            این قالب کاملا رایگانه، باور کردنی نیست !
                                        </div>
                                        <!-- /.direct-chat-text -->
                                    </div>
                                    <!-- /.direct-chat-msg -->

                                    <!-- Message to the right -->
                                    <div class="direct-chat-msg right">
                                        <div class="direct-chat-info clearfix">
                                            <span class="direct-chat-name float-right">سارا محمدی</span>
                                            <span class="direct-chat-timestamp float-left">۲۳ دی ساعت ۱۲</span>
                                        </div>
                                        <!-- /.direct-chat-info -->
                                        <img class="direct-chat-img" src="../dist/img/user3-128x128.jpg" alt="Message User Image">
                                        <!-- /.direct-chat-img -->
                                        <div class="direct-chat-text">
                                            بهتره باور کنی
                                        </div>
                                        <!-- /.direct-chat-text -->
                                    </div>
                                    <!-- /.direct-chat-msg -->
                                </div>
                                <!--/.direct-chat-messages-->

                                <!-- Contacts are loaded here -->
                                <div class="direct-chat-contacts">
                                    <ul class="contacts-list">
                                        <li>
                                            <a href="#">
                                                <img class="contacts-list-img" src="../dist/img/user1-128x128.jpg">

                                                <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            توحید داننده
                            <small class="contacts-list-date float-left">۲/۲۸/۲۰۱۵</small>
                          </span>
                                                    <span class="contacts-list-msg">تا حالا کدوم گوری بودی ؟...</span>
                                                </div>
                                                <!-- /.contacts-list-info -->
                                            </a>
                                        </li>
                                        <!-- End Contact Item -->
                                    </ul>
                                    <!-- /.contatcts-list -->
                                </div>
                                <!-- /.direct-chat-pane -->
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <form action="#" method="post">
                                    <div class="input-group">
                                        <input type="text" name="message" placeholder="تایپ پیام ..." class="form-control">
                                        <span class="input-group-append">
                      <button type="submit" class="btn btn-warning">ارسال</button>
                    </span>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card-footer-->
                        </div>
                        <!--/.direct-chat -->
                    </div>
                    <!-- /.col -->

                    <div class="col-md-3">
                        <!-- DIRECT CHAT DANGER -->
                        <div class="card card-danger direct-chat direct-chat-danger">
                            <div class="card-header">
                                <h3 class="card-title">چت مستقیم</h3>

                                <div class="card-tools">
                                    <span data-toggle="tooltip" title="" class="badge" data-original-title="3 New Messages">۳</span>
                                    <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-toggle="tooltip" title="" data-widget="chat-pane-toggle" data-original-title="Contacts">
                                        <i class="fa fa-comments"></i></button>
                                    <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <!-- Conversations are loaded here -->
                                <div class="direct-chat-messages">
                                    <!-- Message. Default to the left -->
                                    <div class="direct-chat-msg">
                                        <div class="direct-chat-info clearfix">
                                            <span class="direct-chat-name float-left">توحید داننده</span>
                                            <span class="direct-chat-timestamp float-right">۲۲ دی ساعت ۱۸</span>
                                        </div>
                                        <!-- /.direct-chat-info -->
                                        <img class="direct-chat-img" src="../dist/img/user1-128x128.jpg" alt="Message User Image">
                                        <!-- /.direct-chat-img -->
                                        <div class="direct-chat-text">
                                            این قالب کاملا رایگانه، باور کردنی نیست !
                                        </div>
                                        <!-- /.direct-chat-text -->
                                    </div>
                                    <!-- /.direct-chat-msg -->

                                    <!-- Message to the right -->
                                    <div class="direct-chat-msg right">
                                        <div class="direct-chat-info clearfix">
                                            <span class="direct-chat-name float-right">سارا محمدی</span>
                                            <span class="direct-chat-timestamp float-left">۲۳ دی ساعت ۱۲</span>
                                        </div>
                                        <!-- /.direct-chat-info -->
                                        <img class="direct-chat-img" src="../dist/img/user3-128x128.jpg" alt="Message User Image">
                                        <!-- /.direct-chat-img -->
                                        <div class="direct-chat-text">
                                            بهتره باور کنی
                                        </div>
                                        <!-- /.direct-chat-text -->
                                    </div>
                                    <!-- /.direct-chat-msg -->
                                </div>
                                <!--/.direct-chat-messages-->

                                <!-- Contacts are loaded here -->
                                <div class="direct-chat-contacts">
                                    <ul class="contacts-list">
                                        <li>
                                            <a href="#">
                                                <img class="contacts-list-img" src="../dist/img/user1-128x128.jpg">

                                                <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            توحید داننده
                            <small class="contacts-list-date float-left">۲/۲۸/۲۰۱۵</small>
                          </span>
                                                    <span class="contacts-list-msg">تا حالا کدوم گوری بودی ؟...</span>
                                                </div>
                                                <!-- /.contacts-list-info -->
                                            </a>
                                        </li>
                                        <!-- End Contact Item -->
                                    </ul>
                                    <!-- /.contatcts-list -->
                                </div>
                                <!-- /.direct-chat-pane -->
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <form action="#" method="post">
                                    <div class="input-group">
                                        <input type="text" name="message" placeholder="تایپ پیام ..." class="form-control">
                                        <span class="input-group-append">
                      <button type="submit" class="btn btn-danger">ارسال</button>
                    </span>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card-footer-->
                        </div>
                        <!--/.direct-chat -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <h3 class="mt-4 mb-4">ویجت‌های شبکه اجتماعی</h3>

                <div class="row">
                    <div class="col-md-4">
                        <!-- Widget: user widget style 2 -->
                        <div class="card card-widget widget-user-2">
                            <!-- Add the bg color to the header using any of the bg-* classes -->
                            <div class="widget-user-header bg-warning">
                                <div class="widget-user-image">
                                    <img class="img-circle elevation-2" src="../dist/img/user7-128x128.jpg" alt="User Avatar">
                                </div>
                                <!-- /.widget-user-image -->
                                <h3 class="widget-user-username">نادیا احمدی</h3>
                                <h5 class="widget-user-desc">رهبر گروه</h5>
                            </div>
                            <div class="card-footer p-0">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            پروژه‌ها <span class="float-left badge bg-primary">۳۱</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            وظایف <span class="float-left badge bg-info">۵</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            پروژه‌های کامل شده <span class="float-left badge bg-success">۱۲</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            دنبال کنند‌ها <span class="float-left badge bg-danger">۸۴۲</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.widget-user -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-4">
                        <!-- Widget: user widget style 1 -->
                        <div class="card card-widget widget-user">
                            <!-- Add the bg color to the header using any of the bg-* classes -->
                            <div class="widget-user-header bg-info-active">
                                <h3 class="widget-user-username">توحید داننده</h3>
                                <h5 class="widget-user-desc">موسس و مدیر</h5>
                            </div>
                            <div class="widget-user-image">
                                <img class="img-circle elevation-2" src="../dist/img/user1-128x128.jpg" alt="User Avatar">
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-sm-4 border-left">
                                        <div class="description-block">
                                            <h5 class="description-header">۳,۲۰۰</h5>
                                            <span class="description-text">فروش</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4 border-left">
                                        <div class="description-block">
                                            <h5 class="description-header">۱۳,۰۰۰</h5>
                                            <span class="description-text">دنبال کننده</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4">
                                        <div class="description-block">
                                            <h5 class="description-header">۳۵</h5>
                                            <span class="description-text">محصولات</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </div>
                        </div>
                        <!-- /.widget-user -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-4">
                        <!-- Widget: user widget style 1 -->
                        <div class="card card-widget widget-user">
                            <!-- Add the bg color to the header using any of the bg-* classes -->
                            <div class="widget-user-header text-white" style="background: url('/livedars/admin/dist/img/photo1.png') center center;">
                                <h3 class="widget-user-username">الیزابت رفسنجانی</h3>
                                <h5 class="widget-user-desc">طراح وب</h5>
                            </div>
                            <div class="widget-user-image">
                                <img class="img-circle" src="../dist/img/user3-128x128.jpg" alt="User Avatar">
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-sm-4 border-left">
                                        <div class="description-block">
                                            <h5 class="description-header">۳,۲۰۰</h5>
                                            <span class="description-text">فروش</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4 border-left">
                                        <div class="description-block">
                                            <h5 class="description-header">۱۳,۰۰۰</h5>
                                            <span class="description-text">دنبال کننده</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4">
                                        <div class="description-block">
                                            <h5 class="description-header">۳۵</h5>
                                            <span class="description-text">محصولات</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </div>
                        </div>
                        <!-- /.widget-user -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-md-6">
                        <!-- Box Comment -->
                        <div class="card card-widget">
                            <div class="card-header">
                                <div class="user-block">
                                    <img class="img-circle" src="../dist/img/user1-128x128.jpg" alt="User Image">
                                    <span class="username"><a href="#">توحید داننده</a></span>
                                    <span class="description">۵ ساعت پیش به اشتراک گذاشته شد</span>
                                </div>
                                <!-- /.user-block -->
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-toggle="tooltip" title="" data-original-title="Mark as read">
                                        <i class="fa fa-circle-o"></i></button>
                                    <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i>
                                    </button>
                                </div>
                                <!-- /.card-tools -->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <img class="img-fluid pad" src="../dist/img/photo2.png" alt="Photo">

                                <p>من این تصویر رو اول صبح گرفتم. بنظرتون چطوره ؟</p>
                                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-share"></i> اشتراک گذاری</button>
                                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-thumbs-o-up"></i> لایک</button>
                                <span class="float-left text-muted">۱۲۷ لایک - ۳ نظر</span>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer card-comments">
                                <div class="card-comment">
                                    <!-- User image -->
                                    <img class="img-circle img-sm" src="../dist/img/user3-128x128.jpg" alt="User Image">

                                    <div class="comment-text">
                    <span class="username">
                     زینب فاطمی
                      <span class="text-muted float-left">۱۲ ظهر امروز</span>
                    </span><!-- /.username -->
                                        چه جالب شده . یجورای خیلی باحاله و حرفه ای . آفرین به تو
                                    </div>
                                    <!-- /.comment-text -->
                                </div>
                                <!-- /.card-comment -->
                                <div class="card-comment">
                                    <!-- User image -->
                                    <img class="img-circle img-sm" src="../dist/img/user4-128x128.jpg" alt="User Image">

                                    <div class="comment-text">
                    <span class="username">
                      فاطمه
                      <span class="text-muted float-left">۱۶ عصر امروز</span>
                    </span><!-- /.username -->
                                        این عکس عالیه . کادر بندی عالی و خیلی دوست داشتنی داره . خیلی خوشم اومد آفرین
                                    </div>
                                    <!-- /.comment-text -->
                                </div>
                                <!-- /.card-comment -->
                            </div>
                            <!-- /.card-footer -->
                            <div class="card-footer">
                                <form action="#" method="post">
                                    <img class="img-fluid img-circle img-sm" src="../dist/img/user4-128x128.jpg" alt="Alt Text">
                                    <!-- .img-push is used to add margin to elements next to floating images -->
                                    <div class="img-push">
                                        <input type="text" class="form-control form-control-sm" placeholder="نظر خود را تایپ و ثبت کنید">
                                    </div>
                                </form>
                            </div>
                            <!-- /.card-footer -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                        <!-- Box Comment -->
                        <div class="card card-widget">
                            <div class="card-header">
                                <div class="user-block">
                                    <img class="img-circle" src="../dist/img/user1-128x128.jpg" alt="User Image">
                                    <span class="username"><a href="#">توحید داننده</a></span>
                                    <span class="description">۵ ساعت پیش به اشتراک گذاشته شد</span>
                                </div>
                                <!-- /.user-block -->
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-toggle="tooltip" title="" data-original-title="Mark as read">
                                        <i class="fa fa-circle-o"></i></button>
                                    <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i>
                                    </button>
                                </div>
                                <!-- /.card-tools -->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <!-- post text -->
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد</p>
                                <p>تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                                <!-- Attachment -->
                                <div class="attachment-block clearfix">
                                    <img class="attachment-img" src="../dist/img/photo1.png" alt="Attachment Image">

                                    <div class="attachment-pushed">
                                        <h4 class="attachment-heading"><a href="http://www.lipsum.com/">مطلب آزمایش</a></h4>

                                        <div class="attachment-text">
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                                            ... <a href="#">ادامه</a>
                                        </div>
                                        <!-- /.attachment-text -->
                                    </div>
                                    <!-- /.attachment-pushed -->
                                </div>
                                <!-- /.attachment-block -->

                                <!-- Social sharing buttons -->
                                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-share"></i> اشتراک گذاری</button>
                                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-thumbs-o-up"></i> لایک</button>
                                <span class="float-left text-muted">۴۵ لایک‌ - ۲ نظر</span>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer card-comments">
                                <div class="card-comment">
                                    <!-- User image -->
                                    <img class="img-circle img-sm" src="../dist/img/user3-128x128.jpg" alt="User Image">

                                    <div class="comment-text">
                    <span class="username">
                      ماریا گنزالس
                      <span class="text-muted float-left">۸:۰۳ امروز</span>
                    </span><!-- /.username -->
                                        در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                                    </div>
                                    <!-- /.comment-text -->
                                </div>
                                <!-- /.card-comment -->
                                <div class="card-comment">
                                    <!-- User image -->
                                    <img class="img-circle img-sm" src="../dist/img/user5-128x128.jpg" alt="User Image">

                                    <div class="comment-text">
                    <span class="username">
                      نیارا هاشمی
                      <span class="text-muted float-left">۸:۰۳ امروز</span>
                    </span><!-- /.username -->
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                                    </div>
                                    <!-- /.comment-text -->
                                </div>
                                <!-- /.card-comment -->
                            </div>
                            <!-- /.card-footer -->
                            <div class="card-footer">
                                <form action="#" method="post">
                                    <img class="img-fluid img-circle img-sm" src="../dist/img/user4-128x128.jpg" alt="Alt Text">
                                    <!-- .img-push is used to add margin to elements next to floating images -->
                                    <div class="img-push">
                                        <input type="text" class="form-control form-control-sm" placeholder="نظر خود را تایپ و ثبت کنید">
                                    </div>
                                </form>
                            </div>
                            <!-- /.card-footer -->
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


@endsection
