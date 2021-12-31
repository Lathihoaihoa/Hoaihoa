<section class="mod-content mt-81 mb-24 xl:mb-0 2xl:mb-9">
    <div class="container">
        <div class="mx-auto max-w-578 xl:max-w-880 2xl:max-w-1210 2k:max-w-1226">
            <div class="row w-full pl-15">
                <div class="col mb-37 xl:mb-24 2xl:w-2/5 2xl:pl-8 2k:pl-4">
                    <div class="line-col"></div>
                    {!! $data->module['content'] !!}
                </div>   
                
                <div class="col w-full 2xl:w-3/5">
                    <div class="row 2xl:pl-21 2k:pl-17">
                        <div class="col col-item1 mb-30 xl:w-1/2 xl:max-w-400 xl:mr-12
                        xl:mb-0 2xl:max-w-306 2xl:mr-26 2xl:mb-5 2xl:mt-3 2xl:ml-1 2k:mb-4">
                            @foreach ($data->module['content2'] as $item)
                            <div class="col col-item2 mb-21 ml-1 xl:w-1/2 xl:max-w-420 
                        xl:mb-0 2xl:max-w-298 2xl:mt-1">
                                {!! $item->content_col !!}
                            </div>
                        </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>