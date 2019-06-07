<?php $__env->startSection('content'); ?>
    <div class="container">
        <?php while(have_posts()): ?> <?php the_post() ?>
            <div class="product-item">
                <h3><?php echo e(the_title()); ?></h3>
                <strong>Price:</strong> $<?php echo e($price); ?>


                <strong>Discount</strong> <?php echo e($discount); ?>%

               <h3>$<?php echo e($calculate_discount); ?></h3>
            </div> 
        <?php endwhile; ?>

        <h4>Related Products</h4>

         <?php while($related_products->have_posts()): ?> <?php $related_products->the_post() ?>
            <div class="related-product-item">
                <p><?php echo e(the_title()); ?></p>
            </div>
        <?php endwhile; ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>