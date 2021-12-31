<section class="mod-solution text-center mb-30 xl:mb-40 2xl:mb-24 2k:mb-54">
    <div class="container">
        <div class="row mx-auto max-w-494 xl:max-w-1000 2xl:max-w-1196">
            @foreach ($data->module['solution'] as $item)
            <div class="col max-w-492 xl:w-1/3 xl:max-w-280 xl:ml-7 xl:mr-22
                2xl:max-w-346 2xl:ml-0 2xl:mr-40">
                <img src="{{ IMG_BASE64 }}"
                data-src="{{ $item->image->url }}" alt="{{ $item->image->alt }}" class="lazy mx-auto" >
                {!! $item->content !!} 
                <a href="{{ $item->link->url }}"  target="{{ $item->link->target }}"
                aria-label="explore more" rel="noopener" class="link-more">
                {{ $item->link->title }} <span class="icomoon icon-chevron-right pl-1"></span></a>
            </div>
            @endforeach
        </div>
    </div>
</section>