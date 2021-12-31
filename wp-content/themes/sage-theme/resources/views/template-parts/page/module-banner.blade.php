<section class="header mx-auto mb-171 xl:mb-43">
    <div class="w-full min-h-712 bg-banner bg-cover bg-no-repeat xl:min-h-676">
        <div class="xl:flex">
            <div class="relative text-center pt-37 xl:text-left xl:max-w-440 xl:pl-37
                2xl:max-w-542 2xl:pl-31 2k:max-w-536 2k:pl-28 text-white">
                {!! $data->module['content'] !!}
                <br>
                <br>
                <a href="#" class="bg-red py-8 px-38 rounded-27">ABOUT US</a>
            </div>
            
            
            <div class="absolute max-w-924 -right-106 mt-20 xl:max-w-790 xl:-right-117 xl:mt-25
                2xl:max-w-1070 2xl:mt-2 2xl:-right-146 2k:max-w-1066 2k:-right-31 2k:-mt-11 ">
                    <img src="{{ $data->module['image']->url }}" alt="{{ $data->module['image']->alt }}" class="w-full">
            </div>
        </div>
    </div>
</section>