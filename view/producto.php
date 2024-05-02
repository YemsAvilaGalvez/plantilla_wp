<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">

                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <img class="d-block img-fluid" height="533" width="1300" src="assets/images/media/oferta.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block img-fluid" src="assets/images/media/oferta.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block img-fluid" src="assets/images/media/oferta.jpg" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
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

            <?php for ($i = 0; $i < 16; $i++) { ?>
                <div class="col-md-6 col-xl-3">
                    <!-- Simple card -->
                    <div class="card">
                        <img class="card-img-top img-fluid" src="assets/images/product/laptop.jpg" alt="Card image cap">
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