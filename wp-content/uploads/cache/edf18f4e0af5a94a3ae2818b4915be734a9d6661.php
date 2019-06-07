<?php  /* Template Name: Lesson Template */ ?>



<?php $__env->startSection('content'); ?>
  <?php echo $__env->make('partials.page-header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="lesson">
        <h4 class="lesson-title">WP Custom Query - Ordering</h4>
        
        <?php while($show_lesson->have_posts()): ?> <?php $show_lesson->the_post() ?>
            <p><?php echo e(the_title()); ?></p>
        <?php endwhile; ?>
        <?php echo e(wp_reset_query()); ?>

        
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>