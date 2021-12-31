<section class="mod-col-column mb-6 xl:mb-48 2xl:mb-35 2k:mb-33">
    <div class="container">
        <div class="row  mx-auto max-w-360 xl:max-w-920
        2xl:max-w-full 2xl:ml-13">
            @foreach ($data->module['col_column'] as $item)
            <div class="col min-w-360 border-b-2 border-line1 pt-36
            xl:min-w-0 xl:border-b-0 xl:border-r-2 xl:h-168 xl:w-1/3 xl:pt-0
            2xl:min-h-356 2xl:max-w-full">
                <div class="xl:xl:max-w-234 xl:ml-17 xl:mt-4 
                2xl:ml-10 2xl:mt-16 2xl:max-w-full">
                <img src="{{ $item->image->url }}" alt="{{ $item->image->alt }}" >
                    {!! $item->content !!}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>