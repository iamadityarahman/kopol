<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-info">
    <div class="container">

        <a class="navbar-brand mb-0 h1" href="<?=base_url()?>">KOPOL <b>UM</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item" id="beranda">
                    <a class="nav-link" href="<?=base_url('beranda')?>">Beranda</a>
                </li>
                <li class="nav-item" id="laporan">
                    <a class="nav-link" href="<?=site_url('laporan')?>">Laporan</a>
                </li>
                <li class="nav-item" id="kontak">
                    <a class="nav-link" href="<?=site_url('kontak')?>">Kontak</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="daftar" href="<?=site_url('daftar')?>">Daftar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="daftar" href="<?=site_url('login')?>">
                        <span class="oi oi-person"></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
