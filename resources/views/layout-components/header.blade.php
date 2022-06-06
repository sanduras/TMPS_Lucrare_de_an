<div class="preloader" id="preloader">
    <img src="/assets/img/web/logo-horeca.png" alt="hidromek">
</div>
<header class="header  px-4 shadow" id="index">
    <div class="header-container container mx-auto flex items-center justify-between top-0 ">
        <div class="header-logo cursor-pointer max-w-[140px] lg:max-w-full ">
            <a href="#" class="logo-link">
                <img class="logo-img inline" alt="Hidromek" src="/assets/img/web/logo-horeca.png">
            </a>
        </div>
        <span class="text-3xl cursor-pointer mx-2 lg:hidden block z-30">
            <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
        </span>
        <div class="header-menu absolute lg:static lg:text-black-17 lg:w-auto lg:bg-white lg:h-auto left-[-100%] transition-all ease-in duration-500 z-50 lg:z-auto  w-full h-screen top-10 bg-black text-white">
            <nav class="navigation-menu z-[-1]">
                {!!$res!!}
                
            </nav>
        </div>

        <div class="header-phone hidden">
            <div class="phone">
                <div class="phone__body py-4 px-4 text-center">
                    <a href="tel:069000000" class="phone-number">+373 069000000</a>
                    <br>
                    <span class="phone-text  text-xs font-normal leading-7">Free call in Moldova</span>
                </div>
            </div>
        </div>
    </div>
</header>