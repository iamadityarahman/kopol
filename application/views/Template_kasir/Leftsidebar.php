<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu" data-widget="tree">
            <li id="dashboard">
                <a href="<?=site_url('kasir')?>">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li id="simpan">
                <a href="<?=site_url('kasir/simpan')?>">
                    <i class="fa fa-chevron-down"></i> <span>Simpan</span>
                </a>
            </li>
            <li id="pinjam">
                <a href="<?=site_url('kasir/pinjam')?>">
                    <i class="fa fa-chevron-up"></i> <span>Pinjam</span>
                </a>
            </li>
            <li id="konfirmasi">
                <a href="<?=site_url('kasir/konfirmasi')?>">
                    <i class="fa fa-check-circle"></i> <span>Konfirmasi Transaksi</span>
                </a>
            </li>
        </ul>
    </section>
</aside>