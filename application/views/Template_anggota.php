<!DOCTYPE html>
<html>
    <head>
        <?=$_head?>
    </head>
<body class="hold-transition skin-blue sidebar-mini fixed">
<div class="wrapper">
    <!-- navbar header -->
    <?=$_navbar?>

    <!-- left sidebar -->
    <?=$_leftsidebar?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <?=$_content?>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Footer -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 1.0.0
        </div>
        <strong>Copyright &copy; 2018 <a href="<?=base_url()?>">KOPOL UM</a>.</strong> All rights
        reserved.
    </footer>
    <!-- /.Footer -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <div class="tab-content">
            <div class="tab-pane" id="control-sidebar-home-tab"></div>
        </div>
    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

    <!-- javascript -->
    <?=$_javascript?>
</body>
</html>
