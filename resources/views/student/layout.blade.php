<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="shortcut icon" href="assets/img/favicons/favicon.ico">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" id="css-main" href="assets/css/oneui.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="css/sweetalert.css">
    <link rel="stylesheet" id="css-main" href="css/custom.css">
</head>
<body>
<div id="page-container" class="sidebar-l side-scroll header-navbar-fixed">
    @include('student.partials.overlay')
    @include('student.partials.header')

    <!-- Main Container -->
    <main id="main-container">
        @include('student.partials.menu')

        <!-- Page Content -->
        <div class="content content-boxed">
            <div class="row">
                <!-- Main Content  -->
                @yield('content')
                <!-- END Main Content -->
            </div>

        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->

    @include('student.partials.footer')
</div>
<!-- END Page Container -->

<!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
@yield('script')
<script src="assets/js/core/jquery.min.js"></script>
<script src="assets/js/core/bootstrap.min.js"></script>
<script src="assets/js/core/jquery.slimscroll.min.js"></script>
<script src="assets/js/core/jquery.scrollLock.min.js"></script>
<script src="assets/js/core/jquery.appear.min.js"></script>
<script src="assets/js/core/jquery.countTo.min.js"></script>
<script src="assets/js/core/jquery.placeholder.min.js"></script>
<script src="assets/js/core/js.cookie.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>
<script src="assets/js/app.js"></script>

<!-- Page JS Code -->
<script>
    jQuery(function () {
        // Init page helpers (Appear plugin)
        App.initHelpers('appear');
        $('#all-topics').DataTable({
            "language": {
                "lengthMenu": "Hiển thị _MENU_ bản ghi trên mỗi trang",
                "search": "Tìm kiếm",
                "zeroRecords": "Rất tiếc - Không có kết quả nào",
                "info": "Hiển thị trang _PAGE_/_PAGES_",
                "infoEmpty": "Không có bản ghi nào được tìm thấy",
                "infoFiltered": "(Lọc trên tổng số _MAX_ bản ghi)"
            }
        });
    });
</script>
<script src="js/sweetalert.min.js"></script>
@include('sweet::alert')
</body>
</html>
