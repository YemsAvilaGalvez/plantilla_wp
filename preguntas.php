<?php get_header(); ?>

<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="text-center mt-4">
                    <h4>Preguntas Frecuentes</h4>
                    <p class="text-muted mt-3 mb-4"></p>

                </div>
            </div><!-- end col -->
        </div><!-- end row -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="mb-3 font-weight-bold text-uppercase">General</h5>
                        <div id="accordion">
                            <div class="card mb-1">
                                <div class="card-header bg-white border-bottom-0 p-3" id="headingOne">
                                    <h5 class="m-0 font-size-16">
                                        <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="text-dark">
                                            Q. ¿Cómo puedo realizar una compra?
                                        </a>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body text-muted pt-1">
                                    Para realizar una compra, simplemente selecciona el producto que deseas comprar, añádelo al carrito de compras y sigue los pasos para completar tu pedido y el proceso de pago.
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="card-header bg-white border-bottom-0 p-3" id="headingTwo">
                                    <h5 class="m-0 font-size-16">
                                        <a href="#" class="text-dark collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Q. ¿Cómo puedo rastrear mi pedido una vez realizado?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body text-muted pt-1">
                                    Una vez que tu pedido haya sido enviado, recibirás un correo electrónico de confirmación con un número de seguimiento. Puedes utilizar este número para rastrear el estado de tu pedido en nuestra página de seguimiento de envíos.
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="card-header bg-white border-bottom-0 p-3" id="headingThree">
                                    <h5 class="m-0 font-size-16">
                                        <a href="#" class="text-dark collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Q. ¿Qué debo hacer si mi pedido llega dañado o incompleto?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body text-muted pt-1">
                                    Si tu pedido llega dañado o incompleto, por favor contáctanos de inmediato a través de nuestro servicio de atención al cliente. Estaremos encantados de ayudarte a resolver cualquier problema con tu pedido.
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div> <!-- end col -->
        </div>

    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->

<?php get_footer() ?>