<section class="mod-image-content mb-47 xl:-mb-41 2xl:mb-105 2k:mb-80">
    <div class="container">
        <div class="row xl:flex">
            <div class="col image-content1 relative w-full xl:w-1/2">
                <div class="relative w-full h-308 bg-cover bg-no-repeat
                xl:w-250 xl:h-298 2xl:w-314">
                <img src="<?php echo e($data->module['image']->url); ?>" alt="<?php echo e($data->module['image']->alt); ?>" class="mx-auto" >
                </div>
                
            </div>

            <div class="col image-content2 relative mx-auto max-w-548 mt-146 
            xl:w-1/2 xl:max-w-352 xl:mt-3 xl:pl-19
            2xl:max-w-850 2xl:mt-82 2xl:pl-75 2k:pl-78 2k:pr-7">
                <?php echo $data->module['content']; ?>

                <br>
                <p>
                    <a href="#" class="btn hidden 2xl:inline">LEARN MORE</a>
                </p>
            </div>
        </div>
    </div>
</section>
