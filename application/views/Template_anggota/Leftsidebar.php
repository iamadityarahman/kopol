<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu" data-widget="tree">
            <li id="dashboard">
                <a href="<?=site_url('anggota')?>">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
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

            <li id="tarik">
                <a href="<?=site_url('anggota/tarik')?>">
                    <i class="fa  fa-hand-lizard-o"></i> <span>Tarik Simpanan</span>
                </a>
            </li>

            <li id="angsur">
                <a href="<?=site_url('anggota/angsur')?>">
                    <i class="fa  fa-dollar"></i> <span>Angsur Pinjaman</span>
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