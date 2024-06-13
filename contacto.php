<?php get_header(); ?>

<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="text-center mt-4">
                    <h4>Contactenos</h4>
                    <p class="text-muted mt-3 mb-4">Centro de ayuda al cliente</p>

                </div>
            </div><!-- end col -->
        </div><!-- end row -->

        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="mt-0">¿Tiene alguna pregunta ?</h5>
                        <p class="text-muted font-13 mb-4">Envíenos sus preguntas por correo electrónico.</p>
                        <form>
                            <div class="form-group row">
                                <div class="col-lg-6 mb-3 mb-lg-0">
                                    <input class="form-control" type="text" id="name" placeholder="Nombre">
                                </div>
                                <div class="col-lg-6">
                                    <input class="form-control" type="email" id="example-email-input3" placeholder="Correo Electrónico">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <input class="form-control" type="text" id="subject2" placeholder="Asunto">
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Tú mensaje"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary btn-block px-4">Enviar Mensaje</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-2"></div>
        </div>

    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->

<?php get_footer() ?>