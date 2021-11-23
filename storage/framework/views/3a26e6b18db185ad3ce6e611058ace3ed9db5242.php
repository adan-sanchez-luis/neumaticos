<?php $__env->startSection('titulo', 'Bienvenido'); ?>
<?php $__env->startSection('contenido'); ?>
<?php if(auth()->guard()->guest()): ?>
<?php echo $__env->make('layouts.nav-log', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<div class="">
    <!-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="1000">
                    <img src="https://wallpapercave.com/wp/wp3766140.jpg"
                        class="img-fluid d-block w-100" alt="">
                </div>


                <div class="carousel-item" data-bs-interval="1000">
                    <img src="https://wallpapercave.com/wp/wp3766139.jpg"
                        class="img-fluid d-block w-100" alt="...">
                </div>


                <div class="carousel-item" data-bs-interval="1000">
                    <img src="https://wallpapercave.com/wp/wp3766143.jpg"
                        class="img-fluid d-block w-100" alt="...">
                </div>


            </div>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div> -->

    <!--========================================================== -->
    <!-- INTRODUCCION DE SERVICIOS-->
    <!--========================================================== -->

    <!-- <section class="d-flex flex-column justify-content-center align-items-center pt-5  text-center w-50 m-auto" id="intro">
            <h1 class="p-3 fs-2 border-top border-3"> <span class="text-success"> “la innovación al servicio de la movilidad”</span></h1>
            <p class="p-3  fs-4">
                <span class="text-success">Michelin.</span> es un empresa francesa 
                especializada en la fabricación de neumáticos fundada por los hermanos Édouard Michelin
                 y André Michelin el 28 de mayo de 1889 desarrollado para neumáticos de bicicleta.
            </p>
        </section> -->

    <!--========================================================== -->
    <!-- TIPOS DE SERVICIOS-->
    <!--========================================================== -->
    <section class="container">
        <div class="row d-flex justify-content-center">
            <?php $__env->startComponent('plantilla.infoLDP'); ?>
            <?php $__env->slot('iconoInfo','fas fa-shopping-bag'); ?>
            <!--Por mientras no lleva nada-->
            <?php $__env->slot('texto1','Venta de neumaticos'); ?>
            <!---->
            <?php $__env->slot('texto2','¡Adquiere tus productos al mejor precio!'); ?>
            <!---->
            <?php if (isset($__componentOriginald992c349ff100ffdff3577f01a3aea825c303ca2)): ?>
<?php $component = $__componentOriginald992c349ff100ffdff3577f01a3aea825c303ca2; ?>
<?php unset($__componentOriginald992c349ff100ffdff3577f01a3aea825c303ca2); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

            <?php $__env->startComponent('plantilla.infoLDP'); ?>
            <?php $__env->slot('iconoInfo','fas fa-dollar-sign'); ?>
            <!--Por mientras no lleva nada-->
            <?php $__env->slot('texto1','Promociones'); ?>
            <!---->
            <?php $__env->slot('texto2','Enterate de todas las promociones'); ?>
            <!---->
            <?php if (isset($__componentOriginald992c349ff100ffdff3577f01a3aea825c303ca2)): ?>
<?php $component = $__componentOriginald992c349ff100ffdff3577f01a3aea825c303ca2; ?>
<?php unset($__componentOriginald992c349ff100ffdff3577f01a3aea825c303ca2); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

            <?php $__env->startComponent('plantilla.infoLDP'); ?>
            <?php $__env->slot('iconoInfo','fas fa-search-dollar'); ?>
            <!--Por mientras no lleva nada-->
            <?php $__env->slot('texto1','Precios'); ?>
            <!---->
            <?php $__env->slot('texto2','Pregunte sobre los precios'); ?>
            <!---->
            <?php if (isset($__componentOriginald992c349ff100ffdff3577f01a3aea825c303ca2)): ?>
<?php $component = $__componentOriginald992c349ff100ffdff3577f01a3aea825c303ca2; ?>
<?php unset($__componentOriginald992c349ff100ffdff3577f01a3aea825c303ca2); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
        </div>
    </section>
    <!--==================================================-->
    <!--==========  Main                 ===========-->
    <!--==================================================-->
    <section class="d-flex flex-column  align-items-center pt-5  text-center w-50 m-auto" id="intro">
        <div class="col-12">
            <h1 class="p-3 fs-2 border-top border-3 text-dark"> Misión</h1>
            <!--Aqui va un icono-->
            <i class="h1 far fa-flag"></i>

            <p class="p-3 text-justify">
                Estamos comprometidos a proveer productos, servicios y atención de la más
                alta calidad, respetando y preservando nuestro entorno, brindando seguridad
                y confianza a nuestros clientes y proveedores.
            </p>
        </div>
        <div class="col-12">
            <h1 class="p-3 border-top border-3 text-dark">Visión</h1>
            <!--Aqui va un icono-->
            <i class="h1 far fa-eye"></i>
            <p class="p-3 fs-4 text-justify">
                Cumplir las necesidades de nuestros clientes, permitiéndonos ser indudablemente la mejor opción del
                mercado de llantas y baterías para brindar una excelente atención a los automóviles.
            </p>
        </div>
    </section>




    <!--========================================================== -->
    <!-- SECCION ONDA-->
    <!--========================================================== -->
    <section id="seccion-contacto" class="border-bottom border-secondary border-2">
        <div id="bg-contactos">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#1b2a4e" fill-opacity="1" d="M0,32L120,42.7C240,53,480,75,720,74.7C960,75,1200,53,1320,42.7L1440,32L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
            </svg>
        </div>
    </section>
    <!--========================================================== -->
    <!--FOOTER-->
    <!--========================================================== -->
    <?php $__env->startComponent('plantilla.footerSimple'); ?>
    <?php if (isset($__componentOriginal8a93bf43105578ad36c4a0d035829f5a793aaa61)): ?>
<?php $component = $__componentOriginal8a93bf43105578ad36c4a0d035829f5a793aaa61; ?>
<?php unset($__componentOriginal8a93bf43105578ad36c4a0d035829f5a793aaa61); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
</div>



<?php else: ?>

<!--==================================-->
<!--Parte del sistema-->
<!--==================================-->



<!-- Page Wrapper -->
<div id="wrapper">
    
    <?php echo $__env->make('plantilla.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
            <?php echo $__env->make('layouts.nav-log', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- Begin Page Content -->
            <div class="container-fluid rounded">
                <!-- Page Heading -->
                <h1 class="h4 mb-2">SISTEMAS DE VENTA DE NEUMATICOS</h1>
                <!-- <p class="mb-4 text-dark">“la innovación al servicio de la movilidad”</p> -->
                <!-- DataTales Example -->
                <div class="card shadow mb-4 rounded card-color mt-4">
                    <h5 class="card-header bg-color py-3 text-center"> ¡Bienvenido, <?php echo e(Auth::user()->name); ?>!</h5>
                    <div class="card shadow  rounded card-color">
                        <div class="container text-black2 text-center p-4">
                            <p>Bienvenido al sistema, esperemos que disfrute de su estancia, Gracias.</p>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->
        <!-- Footer -->
        <?php echo $__env->make('plantilla.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- End of Footer -->
    </div>
    <!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/sistema/resources/views/welcome.blade.php ENDPATH**/ ?>