<!doctype html>
<html lang="en">
    <head>
        <?=$_head?>
    </head>
    <body>
        <header>
            <?=$_navbar?>

            <?php if($link == 'beranda'): ?>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <!-- Slide One - Set the background image for this slide in the line below -->
                        <div class="carousel-item active" style="background-image: url('<?=base_url()?>assets/imgs/slide/photo1.jpg')">
                            <div class="carousel-caption d-none d-md-block">
                                <h3>Photo Pertama</h3>
                                <p>This is a description for the first slide.</p>
                            </div>
                        </div>
                        <!-- Slide Two - Set the background image for this slide in the line below -->
                        <div class="carousel-item" style="background-image: url('<?=base_url()?>assets/imgs/slide/photo2.jpg')">
                            <div class="carousel-caption d-none d-md-block">
                                <h3>Photo Kedua</h3>
                                <p>This is a description for the second slide.</p>
                            </div>
                        </div>
                        <!-- Slide Three - Set the background image for this slide in the line below -->
                        <div class="carousel-item" style="background-image: url('<?=base_url()?>assets/imgs/slide/photo3.jpg')">
                            <div class="carousel-caption d-none d-md-block">
                                <h3>Photo Ketiga</h3>
                                <p>This is a description for the third slide.</p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            <?php endif; ?>
        </header>

        <main role="main" class="container">
            <?=$_content?>
        </main>

        <?php if($link == 'beranda'): ?>
            <div class="container-fluid bg-dark">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-4 pt-4">
                            <div style="height: 250px" id="map"></div>
                        </div>
                        <div class="col-md-4 pt-4">
                            <address class="text-white">
                                <b>Universitas Negeri Malang</b><br/>
                                Jl. Semarang No.5<br/>
                            </address>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <footer class="footer bg-dark">
             <div class="container">
                <p class="m-0 text-center text-white">Copyright &copy; KOPOL UM 2018</p>
            </div>
        </footer>

        <?=$_javascript?>
    </body>
</html>
