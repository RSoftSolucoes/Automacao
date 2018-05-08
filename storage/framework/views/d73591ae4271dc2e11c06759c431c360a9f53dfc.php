<?php $__env->startSection('menu_lateral'); ?>
<ul class="nav">
    <li class="active">
        <a href="/">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
        </a>
    </li>
    <li>
        <a href="/recipientes">
            <i class="material-icons">local_bar</i>
            <p>Recipientes </p>
        </a>
    </li>
    <li>
        <a href="#">
            <i class="material-icons">donut_small</i>
            <p>Mesas</p>
        </a>
    </li>
    <li>
        <a href="#">
           <i class="material-icons">web_asset</i>
            <p>Bases</p>
        </a>
    </li>
    <li>
        <a href="#">
           <i class="material-icons">add_to_photos</i>
            <p>Pedidos</p>
        </a>
    </li>
</ul>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>