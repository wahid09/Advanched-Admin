<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" class="fixed header-dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Fonts -->
    

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('admin/asset/vendor/bootstrap/css/bootstrap.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('admin/asset/vendor/animate/animate.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('admin/asset/vendor/font-awesome/css/font-awesome.min.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('admin/asset/vendor/font-awesome/css/font-awesome.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('admin/asset/vendor/magnific-popup/magnific-popup.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('admin/asset/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css')); ?>" />

    <!-- Specific Page Vendor CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('admin/asset/vendor/select2/css/select2.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('admin/asset/vendor/select2-bootstrap-theme/select2-bootstrap.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('admin/asset/vendor/datatables/media/css/dataTables.bootstrap4.css')); ?>" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('admin/asset/css/theme.css')); ?>" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('admin/asset/css/skins/default.css')); ?>" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('admin/asset/css/custom.css')); ?>">

    <!-- Head Libs -->
    <script src="<?php echo e(asset('admin/asset/vendor/modernizr/modernizr.js')); ?>"></script>
    <?php echo $__env->yieldPushContent('css'); ?>
</head>
<body>

<section class="body">
    <?php echo $__env->make('layouts.backend.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="inner-wrapper">
        <?php echo $__env->make('layouts.backend.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <section role="main" class="content-body">
            <?php echo $__env->make('layouts.backend.partials.header2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->yieldContent('content'); ?>
        </section>
    </div>
    <?php echo $__env->make('layouts.backend.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</section>

<!-- Scripts -->
<script src="<?php echo e(asset('admin/asset/vendor/jquery/jquery.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/asset/vendor/jquery-browser-mobile/jquery.browser.mobile.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/asset/vendor/popper/umd/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/asset/vendor/bootstrap/js/bootstrap.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/asset/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/asset/vendor/common/common.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/asset/vendor/nanoscroller/nanoscroller.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/asset/vendor/magnific-popup/jquery.magnific-popup.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/asset/vendor/jquery-placeholder/jquery-placeholder.js')); ?>"></script>

    <!-- Specific Page Vendor -->
    <script src="<?php echo e(asset('admin/asset/vendor/select2/js/select2.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/asset/vendor/datatables/media/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/asset/vendor/datatables/media/js/dataTables.bootstrap4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/asset/vendor/datatables/extras/TableTools/Buttons-1.4.2/js/dataTables.buttons.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/asset/vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.bootstrap4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/asset/vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.html5.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/asset/vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.print.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/asset/vendor/datatables/extras/TableTools/JSZip-2.5.0/jszip.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/asset/vendor/datatables/extras/TableTools/pdfmake-0.1.32/pdfmake.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/asset/vendor/datatables/extras/TableTools/pdfmake-0.1.32/vfs_fonts.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/asset/vendor/bootstrap-multiselect/bootstrap-multiselect.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/asset/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/asset/vendor/flot/jquery.flot.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/asset/vendor/flot.tooltip/flot.tooltip.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/asset/vendor/flot/jquery.flot.pie.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/asset/vendor/flot/jquery.flot.categories.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/asset/vendor/flot/jquery.flot.resize.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/asset/vendor/snap.svg/snap.svg.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/asset/vendor/liquid-meter/liquid.meter.js')); ?>"></script>
    <!-- Theme Base, Components and Settings -->
    <script src="<?php echo e(asset('admin/asset/js/theme.js')); ?>"></script>

    <!-- Theme Custom -->
    <script src="<?php echo e(asset('admin/asset/js/custom.js')); ?>"></script>

    <!-- Theme Initialization Files -->
    <script src="<?php echo e(asset('admin/asset/js/theme.init.js')); ?>"></script>

    <!-- Examples -->
    <script src="<?php echo e(asset('admin/asset/js/examples/examples.datatables.default.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/asset/js/examples/examples.datatables.row.with.details.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/asset/js/examples/examples.datatables.tabletools.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/asset/js/examples/examples.dashboard.js')); ?>"></script>
<?php echo $__env->yieldPushContent('js'); ?>
<?php echo $__env->make('vendor.lara-izitoast.toast', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH C:\laragon\www\advanchedqadmin\resources\views/layouts/backend/app.blade.php ENDPATH**/ ?>