<section class="mod-solution text-center mb-30 xl:mb-40 2xl:mb-24 2k:mb-54">
    <div class="container">
        <div class="row mx-auto max-w-494 xl:max-w-1000 2xl:max-w-1196">
            <?php $__currentLoopData = $data->module['solution']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col max-w-492 xl:w-1/3 xl:max-w-280 xl:ml-7 xl:mr-22
                2xl:max-w-346 2xl:ml-0 2xl:mr-40">
                <img src="<?php echo e(IMG_BASE64); ?>"
                data-src="<?php echo e($item->image->url); ?>" alt="<?php echo e($item->image->alt); ?>" class="lazy mx-auto" >
                <?php echo $item->content; ?> 
                <a href="<?php echo e($item->link->url); ?>"  target="<?php echo e($item->link->target); ?>"
                aria-label="explore more" rel="noopener" class="link-more">
                <?php echo e($item->link->title); ?> <span class="icomoon icon-chevron-right pl-1"></span></a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>