<?php get_header(); ?>

<div class="page-content">
    <div class="container-fluid">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
        ?>

                <div class="row">

                    <div class="col-6 card">
                        <?php if (has_post_thumbnail()) {
                            the_post_thumbnail('full', array('class' => 'img-fluid'));
                        } ?>
                    </div>

                    <div class="col-6 row">
                        <div class="card col-12">
                            <div class="card-body">
                                <h5 class="card-title"><?php the_title(); ?></h5>
                                <p class="card-text"><?php the_content(); ?></p>

                                <div class="row mb-3">
                                    <button class="btn btn-danger mr-2" onclick="desminuir_cantidad();">-</button>
                                    <input type="number" min="1" value="1" class="form-control col-2" id="cantidad">
                                    <button class="btn btn-primary ml-2" onclick="agregar_cantidad();">+</button>

                                    <a href="#" class="btn btn-primary waves-effect waves-light ml-4">Comprar</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
        <?php
            endwhile;
        else :
            _e('No Se Encontroraron Productos En La Categoria Selecionada', 'textdomain');
        endif;
        ?>

    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
<script>
    function agregar_cantidad() {
        var cantidad_actual = document.getElementById('cantidad').value;
        var cantidad_nueva = parseInt(cantidad_actual) + 1;
        document.getElementById('cantidad').value = cantidad_nueva;
    }

    function desminuir_cantidad() {
        var cantidad_actual = document.getElementById('cantidad').value;
        var cantidad_nueva = parseInt(cantidad_actual) - 1;
        if (cantidad_nueva >= 1) {
            document.getElementById('cantidad').value = cantidad_nueva;
        } else {
            document.getElementById('cantidad').value;
        }
    }
</script>

<?php get_footer() ?>