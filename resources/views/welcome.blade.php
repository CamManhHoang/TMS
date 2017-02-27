<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>TMS - Trang chủ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="shortcut icon" href="assets/img/favicons/favicon.ico">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" id="css-main" href="assets/css/oneui.css">
</head>
<body>
<div id="page-container" class="sidebar-l side-scroll header-navbar-fixed">
    @include('student.partials.header')

    <!-- Main Container -->
    <main id="main-container">
        <!-- Hero Content -->
        <div class="bg-image" style="background-image: url('img/landing-cover.jpg');">
            <div class="bg-black-op">
                <section class="content content-full content-boxed">
                    <!-- Section Content -->
                    <div class="push-150-t push-50 text-center">
                        <h1 class="h2 text-white push-10 visibility-hidden" data-toggle="appear" data-class="animated fadeInDown">Hệ thống quản lý khóa luận tốt nghiệp TMS.</h1>
                        <h2 class="h4 text-white-op push visibility-hidden" data-toggle="appear" data-class="animated fadeInDown">TMS là công cụ hỗ trợ đắc lực sinh viên và nhà trường trong quá trình xây dựng khóa luận tốt nghiệp.</h2>
                        @if (Auth::guest())
                            <a class="btn btn-rounded btn-noborder btn-lg btn-success visibility-hidden" data-toggle="appear" data-class="animated zoomIn" href="/login">Đăng Nhập</a>
                        @endif
                    </div>
                    <!-- END Section Content -->
                </section>
            </div>
        </div>
        <!-- END Hero Content -->
    </main>
    <!-- END Main Container -->

    <!-- Footer -->
    <footer id="page-footer" class="bg-white">
        <div class="content content-boxed">
            <!-- Footer Navigation -->
            <div class="row push-30-t items-push-2x">
                <div class="col-sm-4">
                    <h3 class="h5 font-w600 text-uppercase push-20">Hệ thống</h3>
                    <ul class="list list-simple-mini font-s13">
                        <li>
                            <a class="font-w600" href="/">Trang chủ</a>
                        </li>
                        <li>
                            <a class="font-w600" href="/features">Tính năng</a>
                        </li>
                        <li>
                            <a class="font-w600" href="/about">Về chúng tôi</a>
                        </li>
                        <li>
                            <a class="font-w600" href="/contact">Liên lạc</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <h3 class="h5 font-w600 text-uppercase push-20">Hỗ trợ</h3>
                    <ul class="list list-simple-mini font-s13">
                        <li>
                            <a class="font-w600" href="/login">Đăng nhập</a>
                        </li>
                        <li>
                            <a class="font-w600" href="/support">Trung tâm hỗ trợ</a>
                        </li>
                        <li>
                            <a class="font-w600" href="/privacy">Chính sách bảo mật</a>
                        </li>
                        <li>
                            <a class="font-w600" href="javascript:void(0)">Điều khoản &amp; Điều kiện</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <h3 class="h5 font-w600 text-uppercase push-20">Giữ liên lạc</h3>
                    <div class="font-s13 push">
                        <strong>UET - VNU</strong><br>
                        144 Xuân Thủy<br>
                        Cầu Giấy, Hà Nội<br>
                        <abbr title="Phone">P:</abbr> (123) 456-7890
                    </div>
                    <div class="font-s13">
                        <i class="si si-envelope-open"></i> tms@uet.vnu.edu.vn
                    </div>
                </div>
            </div>
            <!-- END Footer Navigation -->

            <!-- Copyright Info -->
            <div class="font-s12 push-20 clearfix">
                <hr class="remove-margin-t">
                <div class="pull-right">
                    Crafted with <i class="fa fa-heart text-city"></i> by <a class="font-w600" href="https://github.com/CamManhHoang" target="_blank">Hoang Manh Cam</a>
                </div>
                <div class="pull-left">
                    <a class="font-w600" href="#">tms</a> &copy; <span class="js-year-copy"></span>
                </div>
            </div>
            <!-- END Copyright Info -->
        </div>
    </footer>
    <!-- END Footer -->
</div>
<!-- END Page Container -->

<!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
<script src="assets/js/core/jquery.min.js"></script>
<script src="assets/js/core/bootstrap.min.js"></script>
<script src="assets/js/core/jquery.slimscroll.min.js"></script>
<script src="assets/js/core/jquery.scrollLock.min.js"></script>
<script src="assets/js/core/jquery.appear.min.js"></script>
<script src="assets/js/core/jquery.countTo.min.js"></script>
<script src="assets/js/core/jquery.placeholder.min.js"></script>
<script src="assets/js/core/js.cookie.min.js"></script>
<script src="assets/js/app.js"></script>

<!-- Page JS Code -->
<script>
    jQuery(function () {
        // Init page helpers (Appear plugin)
        App.initHelpers('appear');
    });
</script>
</body>
</html>
