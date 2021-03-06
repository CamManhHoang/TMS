<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="shortcut icon" href="assets/img/favicons/favicon.ico">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="assets/js/plugins/slick/slick.min.css">
    <link rel="stylesheet" href="assets/js/plugins/slick/slick-theme.min.css">
    <!-- Bootstrap and OneUI CSS framework -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" id="css-main" href="assets/css/oneui.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" id="css-main" href="css/custom.css">
    <link rel="stylesheet" href="css/sweetalert.css">
    <!-- END Stylesheets -->
</head>
<body>
<div id="page-container" class="sidebar-l sidebar-o side-scroll header-navbar-fixed">
    <!-- Sidebar -->
    @include('layouts.partials.aside')
    <!-- END Sidebar -->

    <!-- Header -->
    @include('layouts.partials.header')
    <!-- END Header -->

    <!-- Main Container -->
    <main id="main-container">
        @yield('content')
    </main>
    <!-- END Main Container -->

    <!-- Footer -->
    @include('layouts.partials.footer')
    <!-- END Footer -->
</div>
<!-- END Page Container -->

<!-- Apps Modal -->
<!-- Opens from the button in the header -->
@include('layouts.partials.app-button')
<!-- END Apps Modal -->

<!-- Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
<script src="assets/js/core/jquery.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>
<script src="assets/js/core/bootstrap.min.js"></script>
<script src="assets/js/core/jquery.slimscroll.min.js"></script>
<script src="assets/js/core/jquery.scrollLock.min.js"></script>
<script src="assets/js/core/jquery.appear.min.js"></script>
<script src="assets/js/core/jquery.countTo.min.js"></script>
<script src="assets/js/core/jquery.placeholder.min.js"></script>
<script src="assets/js/core/js.cookie.min.js"></script>
<script src="assets/js/app.js"></script>

<!-- Page Plugins -->
<script src="assets/js/plugins/slick/slick.min.js"></script>
<script src="assets/js/plugins/chartjs/Chart.min.js"></script>
<script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="assets/js/plugins/jquery-validation/additional-methods.min.js"></script>

<!-- Page JS Code -->
<script>
    jQuery(function () {
        // Init page helpers (Appear plugin)
        App.initHelpers('appear');
        $('#topics').DataTable({
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
<script src="assets/js/pages/base_forms_validation.js"></script>
@include('sweet::alert')
</body>
</html>