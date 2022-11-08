<?php $__env->startSection('container'); ?>



<?php $__currentLoopData = $artikel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $artikel_index): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<article>
    <h1><?php echo e($artikel_index["judul"]); ?></h1>
    <?php if($artikel_index["author"] ==="Raymond"): ?>




    <?php endif; ?>
    <?php switch($artikel_index["kategori"]):
        case ("1"): ?>
            <h5> Profile </h5>
            <?php break; ?>
    <?php case ("2"): ?>
        <h5> SuperHero </h5>
    <?php break; ?>
        <?php default: ?>

    <?php endswitch; ?>


    <h5> <?php echo e($artikel_index["author"]); ?></h5>


    <p>
        <?php echo e($artikel_index["isi"]); ?>

    </p>


</article>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\gslc_1\resources\views/data.blade.php ENDPATH**/ ?>