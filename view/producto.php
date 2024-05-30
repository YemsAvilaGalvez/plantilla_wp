<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">With Indicators</h4>
                        <p class="card-subtitle mb-4">You can also add the indicators to the carousel, alongside the controls, too.</p>

                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <img class="d-block img-fluid" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjfBJQr3r8Yr00wn8j0aXaf9ZMzZdBOpcvgM30aiOg826xbR0BWvaGEDGvO63H4TijpSMJ6IBAmSANaYJPLD5nhqLJ6xxCspb-VnmHpPmQtIbXzJyX8AGWoKG3oUrKWjOS5SRKanlcquH8/s1600/El+Marketing+Mix+Promoci%25C3%25B3n.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block img-fluid" src="include/assets/images/media/sm-1.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block img-fluid" src="include/assets/images/media/sm-2.jpg" alt="Third slide">
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
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div>
        <!-- end row-->

        <div class="row">

            <?php for ($i = 0; $i < 12; $i++) { ?>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <!-- Simple card -->
                    <div class="card">
                        <img class="card-img-top img-fluid" src="<?php echo get_template_directory_uri(); ?>/include/assets/images/product/laptop.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Notebook Hp Amd Ryzen 3 7320, 8gb Ddr5 512ssd 15,6 Fhd W11 Color Plateado</h5>
                            <p class="card-text">S/. 1.899</p>
                            <a href="#" class="btn btn-primary waves-effect waves-light">agregar a carrito</a>
                        </div>
                    </div>
                </div><!-- end col -->
            <?php } ?>
        </div>
        <!-- end row -->


    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->