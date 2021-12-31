<section class="mod-content-image bg-greenwhite mb-95 xl:mb-42 2xl:mb-34">
    <div class="container">
        <div class="mx-auto max-w-646 xl:max-w-full 2k:-ml-2">
            <div class="row">
                <div class="col max-w-576 ml-33 xl:max-w-360 xl:ml-36 xl:mt-35
                2xl:max-w-600 2xl:ml-30 2xl:mt-40">
                   <?php echo $data->module['content']; ?>

                </div>
                <div class="col partners-slider max-w-646 ml-18 
                xl:max-w-470 xl:mt-109 2xl:max-w-606
                2xl:ml-10 2xl:mt-27 w-full">
                <img src="<?php echo e($data->module['image']->url); ?>" alt="<?php echo e($data->module['image']->alt); ?>" class="w-full" >
                    <div class="arrow-append1"></div>
                </div>
            </div>
        </div>
    </div>
</section>