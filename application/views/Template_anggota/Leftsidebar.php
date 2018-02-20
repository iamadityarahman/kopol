<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu" data-widget="tree">
            <li id="home">
                <a href="<?=site_url('anggota')?>">
                    <i class="fa fa-home"></i> <span>Home</span>
                </a>
            </li>

            <li id="simpan">
                <a href="<?=site_url('anggota/simpan')?>">
                    <i class="fa  fa-chevron-down"></i> <span>Transaksi Simpan</span>
                </a>
            </li>

            <li id="pinjam">
                <a href="<?=site_url('anggota/pinjam')?>">
                    <i class="fa  fa-chevron-up"></i> <span>Transaksi Pinjam</span>
                </a>
            </li>

            <li id="konfirmasi">
                <a href="<?=site_url('anggota/konfirmasi')?>">
                    <i class="fa  fa-check-circle"></i> <span>Konfirmasi Transaksi</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>