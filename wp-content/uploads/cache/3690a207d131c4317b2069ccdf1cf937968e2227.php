<?php $__env->startSection('content'); ?>
  <?php echo $__env->make('partials.page-header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <?php if(!have_posts()): ?>
    <div class="alert alert-warning">
      <?php echo e(__('Sorry, no results were found.', 'sage')); ?>

    </div>
    <?php echo get_search_form(false); ?>

  <?php endif; ?>

  
  

  
   <?php while($show_featured_post->have_posts()): ?> <?php $show_featured_post->the_post() ?>
    <div class="featured">
      <h5><?php echo e(the_title()); ?></h5>
    </div>
   <?php endwhile; ?> 
   
   <?php echo e(wp_reset_query()); ?>

  

  
   <?php while($show_posts->have_posts()): ?> <?php $show_posts->the_post() ?>
      <p><?php echo e(the_title()); ?></p>
   <?php endwhile; ?> 
  

  <?php echo get_the_posts_navigation(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>