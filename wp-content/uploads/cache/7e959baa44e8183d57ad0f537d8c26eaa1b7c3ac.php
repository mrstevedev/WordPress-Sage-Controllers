    
<?php $__env->startSection('content'); ?>
    <div class="container">
        <?php if(!have_posts()): ?>
            <div class="alert alert-warning">
                <?php echo e(__('Sorry, no results were found.', 'sage')); ?>

            </div>
            
        <?php endif; ?>

        <?php while(have_posts()): ?> <?php the_post() ?>
            <div class="product-item">
                <h3><?php echo e(the_title()); ?></h3>
                <a href="<?php echo e(the_permalink()); ?>">See the product.</a>

                <h6>Discount</h6>

                <?php echo e(ArchiveProducts::discountedPrice()); ?>


                
            </div>
        <?php endwhile; ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>