<section class="page__service py-20 bg-white" id="tech">
    <div class="service__container container   mx-auto">
        <div class="service__header pb-7 my-0 mx-auto text-center relative z-10 max-w-screen-xl ">
            <div class="header-block relative ">
                <h3 class="header-block__title pb-5 font-semibold text-3xl mb-5">Выберите необходимую технику и мы сформируем для Вас выгодное предложение. </h3>
            </div>
        </div>
        <div class="service__body flex flex-wrap mx-3.5">
            <div class="service__column relative w-full px-3.5  flex-[0_0_100%]  max-w-[100%]  ">
                <div class="mb-10">
                    <ul class="filter-gallery custom flex flex-wrap items-center justify-center my-0">
                        <li class="tech-item w-full lg:w-auto m-0 relative " data-name="BACKHOE LOADERS">
                            <a href="javascript:void(0)" class="tech-link  ">
                                <img class=" lazyloaded" data-src="/assets/img/category/category_1.png" src="/assets/img/category/category_1.png" />
                                Экскаваторы-погрузчики </a>
                        </li>
                        <li class="tech-item w-full lg:w-auto m-0 relative" data-name="WHEEL EXCAVATORS">
                            <a href="javascript:void(0)" class="tech-link ">
                                <img class=" lazyloaded" data-src="/assets/img/category/category_2.png" src="/assets/img/category/category_2.png">
                                Экскаваторы и перегружатели </a>
                        </li>
                        <li class=" tech-item w-full lg:w-auto m-0 relative" data-name="CRAWLER EXCAVATORS">
                            <a href="javascript:void(0)" class="tech-link ">
                                <img class=" lazyloaded" data-src="/assets/img/category/category_3.png" src="/assets/img/category/category_3.png">
                                Экскаваторы гусеничные </a>
                        </li>
                        <li class=" tech-item w-full lg:w-auto m-0 relative" data-name="SPECIAL PURPOSE EXCAVATORS">
                            <a href="javascript:void(0)" class="tech-link ">
                                <img class=" lazyloaded" data-src="/assets/img/category/category_4a.png" src="/assets/img/category/category_4a.png">
                                Экскаваторы для специальных целей </a>
                        </li>
                        <li class=" tech-item w-full lg:w-auto m-0 relative" data-name="MOTOR GRADERS">
                            <a href="javascript:void(0)" class="tech-link ">
                                <img class=" lazyloaded" data-src="/assets/img/category/category_4.png" src="/assets/img/category/category_4.png">
                                Автогрейдеры </a>
                        </li>
                        <li class=" tech-item w-full lg:w-auto m-0 relative" data-name="WHEEL LOADERS">
                            <a href="javascript:void(0)" class="tech-link ">
                                <img class=" lazyloaded" data-src="/assets/img/category/category_5.png" src="/assets/img/category/category_5.png">
                                Фронтальные погрузчики </a>
                        </li>
                        <li class=" tech-item w-full lg:w-auto m-0 relative" data-name="SOIL COMPACTORS">
                            <a href="javascript:void(0)" class="tech-link ">
                                <img class=" lazyloaded" data-src="/assets/img/category/category_6.png" src="/assets/img/category/category_6.png">
                                Грунтовые катки </a>
                        </li>
                    </ul>
                </div>
                <div class="gallery-body relative  flex flex-col   lg:flex-row flex-wrap mx-[-15px]  ">
                    @foreach ($posts as $key => $post)
                    <div class="gallery_body_column w-full px-3.5 lg:flex-[1_1_25%] lg:max-w-[25%] ">
                        <div class="gallery_tech_item shadow-lg transition-all duration-75 mb-5 relative overflow-hidden">
                            <a href="javascript:void(0)" class="gallery_link text-black transition-all duration-75 bg-transparent" data-id="{{ $post['id'] }}" data-name="{{$post['category']}}">
                                <img data-src="{{asset('cover/'. $post['cover'] )}}" class="transform  transition duration-500 hover:scale-110 w-full h-auto object-cover object-center max-w-full align-middle transition-all duration-75 " alt="{{ $post['title'] }}" src="{{asset('cover/'. $post['cover'] )}}">
                                <div class="tech_item_text pb-5 w-full absolute left-0 bottom-0 pt-24   px-5  ">
                                    <h5 class="tech_item_text_text relative uppercase transition-all duration-75 mb-3.5 font-semibold text-xl ">{{ $post['title'] }}</h5>
                                    <p class=" mb-2.5"></p>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
