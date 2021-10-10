<x-layout-web>

    <x-slot name="slider">
        <div class="arrow-left"></div>
        <div class="arrow-right"></div>

        <!-- Start revolution slider -->

        <div class="rev_slider_wrapper" id="inicio">
            <div id="rev_slider" class="rev_slider fullscreenbanner">
                <ul>

                    <!-- Slide 1 -->

                    <li data-transition="slotzoom-horizontal" data-slotamount="7" data-masterspeed="1000"
                        data-fsmasterspeed="1000">
                        <div class="overlay">
                        </div>
                        <!-- Main image-->

                        <img src="{{ asset('img/slider/slider-1.png') }}" alt="" data-bgposition="center center"
                            data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

                        <!-- Layer 1 -->

                        <div class="slide-title tp-caption tp-resizeme" data-x="['right','right','right','right']"
                            data-hoffset="['-18','-18','-18','-18']" data-y="['middle','middle','middle','middle']"
                            data-voffset="['-35','-35', '-25']" data-fontsize="['50','45', '35']"
                            data-lineheight="['80','75', '65']" data-width="['1100','700','550']" data-height="none"
                            data-whitespace="normal" data-transform_idle="o:1;"
                            data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                            data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500"
                            data-splitin="chars" data-splitout="none" data-responsive_offset="on"
                            data-elementdelay="0.05">¡Tu viaje con Travelux será la vacación de tus sueños!
                        </div>

                        <!-- Layer 2 -->

                        {{-- <div class="slide-subtitle tp-caption tp-resizeme" data-x="['right','right','right','right']"
                            data-hoffset="['0']" data-y="['middle','middle','middle','middle']"
                            data-voffset="['75','105']" data-fontsize="['18']" data-whitespace="nowrap"
                            data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1200;e:Power1.easeInOut;"
                            data-transform_out="opacity:0;s:1000;s:1000;"
                            data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="1500" data-splitin="none"
                            data-splitout="none">Concert Hall is the architecture of a new generation, a building<br>
                            that exists not only in the dimension of space,<br>
                            but also in the dimension of time and communication.
                        </div> --}}

                        <!-- Layer 3 -->

                        {{-- <div class="tp-caption" data-x="['right','right','right','right']"
                            data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                            data-voffset="['195','215']" data-width="none" data-height="none" data-whitespace="nowrap"
                            data-transform_idle="o:1;"
                            data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                            data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);"
                            data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;"
                            data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                            data-mask_out="x:inherit;y:inherit;" data-start="1500" data-splitin="none"
                            data-splitout="none" data-responsive_offset="on"><a href="#cotizador"
                                class="btn">Look more <i class="icon-next"></i></a>
                        </div> --}}
                    </li>

                    <!-- Slide 2 -->

                    <li data-transition="slotzoom-horizontal" data-slotamount="7" data-easein="Power3.easeInOut"
                        data-easeout="Power3.easeInOut" data-masterspeed="1000">
                        <div class="overlay">
                        </div>
                        <!-- Main image -->

                        <img src="{{ asset('img/slider/slider-2.png') }}" alt="" data-bgposition="center center"
                            data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

                        <!-- Layer 1 -->

                        <div class="slide-title tp-caption tp-resizeme" data-x="['right','right','right','right']"
                            data-hoffset="['-18','-18','-18','-18']" data-y="['middle','middle','middle','middle']"
                            data-voffset="['-35','-35', '-55']" data-fontsize="['50','45', '35']"
                            data-lineheight="['80','75','65']" data-width="['1100','700','500']" data-height="none"
                            data-whitespace="normal" data-transform_idle="o:1;"
                            data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                            data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500"
                            data-splitin="chars" data-splitout="none" data-responsive_offset="on"
                            data-elementdelay="0.05">¡Tu viaje con Travelux será la vacación de tus sueños!
                        </div>


                        <!-- Layer 2 -->
                        {{-- <div class="slide-subtitle tp-caption tp-resizeme" data-x="['right','right','right','right']"
                            data-hoffset="['0']" data-y="['middle','middle','middle','middle']"
                            data-voffset="['75','105']" data-fontsize="['18']" data-whitespace="nowrap"
                            data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1200;e:Power1.easeInOut;"
                            data-transform_out="opacity:0;s:1000;s:1000;"
                            data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="1500" data-splitin="none"
                            data-splitout="none">
                            Modern Hotel is the architecture of a new generation, a building<br> that exists not only in
                            the dimension of space,<br>
                            but also in the dimension of time and communication.
                        </div> --}}

                        <!-- Layer 3 -->

                        {{-- <div class="tp-caption tp-resizeme" data-x="['right','right','right','right']"
                            data-hoffset="['0']" data-y="['middle','middle','middle','middle']"
                            data-voffset="['195','210']" data-width="none" data-height="none" data-whitespace="nowrap"
                            data-transform_idle="o:1;"
                            data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                            data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);"
                            data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;"
                            data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                            data-mask_out="x:inherit;y:inherit;" data-start="1500" data-splitin="none"
                            data-splitout="none" data-responsive_offset="on" style="z-index: 8;"><a href="#about"
                                class="btn js-target-scroll">Look more <i class="icon-next"></i></a>
                        </div> --}}
                    </li>

                    <!-- Slide 3 -->

                    <li data-transition="slotzoom-horizontal" data-slotamount="7" data-easein="Power3.easeInOut"
                        data-easeout="Power3.easeInOut" data-masterspeed="1000">
                        <div class="overlay">
                        </div>
                        <!-- Main image-->

                        <img src="{{ asset('img/slider/slider-3.png') }}" alt="" data-bgposition="center center"
                            data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

                        <!-- Layer 1 -->

                        {{-- <div class="slide-title tp-caption tp-resizeme" data-x="['right','right','right','right']"
                            data-hoffset="['-18','-18','-18','-18']" data-y="['middle','middle','middle','middle']"
                            data-voffset="['-35','-35', '-25']" data-fontsize="['50','45', '35']"
                            data-lineheight="['80','75', '65']" data-width="['1000','700','550']" data-height="none"
                            data-whitespace="normal" data-transform_idle="o:1;"
                            data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                            data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500"
                            data-splitin="chars" data-splitout="none" data-responsive_offset="on"
                            data-elementdelay="0.05">Modern hotel in london
                        </div> --}}


                        <!-- Layer 2 -->

                        {{-- <div class="slide-subtitle tp-caption tp-resizeme" data-x="['right','right','right','right']"
                            data-hoffset="['0']" data-y="['middle','middle','middle','middle']"
                            data-voffset="['75','105']" data-fontsize="['18']" data-whitespace="nowrap"
                            data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1200;e:Power1.easeInOut;"
                            data-transform_out="opacity:0;s:1000;s:1000;"
                            data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="1500" data-splitin="none"
                            data-splitout="none">Exhibition Center is the architecture of a new generation,<br>
                            a building that exists not only in the dimension of space,<br>
                            but also in the dimension of time and communication.
                        </div> --}}

                        <!-- Layer 3 -->

                        {{-- <div class="tp-caption tp-resizeme" data-x="['right','right','right','right']"
                            data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                            data-voffset="['195','215']" data-width="none" data-height="none" data-whitespace="nowrap"
                            data-transform_idle="o:1;"
                            data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                            data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);"
                            data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;"
                            data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                            data-mask_out="x:inherit;y:inherit;" data-start="1500" data-splitin="none"
                            data-splitout="none" data-responsive_offset="on" style="z-index: 8;"><a href="#about"
                                class="btn js-target-scroll">Look more <i class="icon-next"></i></a>
                        </div> --}}
                    </li>
                </ul>
            </div>
        </div>
    </x-slot>

    <!-- Title  -->
    <section class="section">
        <div class="container" id="cotizador">
            <h1 class="text-center"><span class="text-primary fw-700">Cotiza tu hotel, tu vuelo</span> <span
                    class="text-secundary fw-700">tu viaje</span></h1>
            <p class="mt-3 text-center fw-200 plr-10p">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                Aenean commodo ligula eget dolor.</p>
        </div>
    </section>
    <!-- EndTitle  -->

    <!-- Form  -->
    <section class="section">
        <div class="container">
            <form>
                <div class="row espacio-form">
                    <div class="col-lg-4 col-md-4 col-12 form-group mt-lg-0 mt-md-3 mt-3">
                        <input type="text" class="form-control-simple" id="name" placeholder="Nombre *"
                            autocomplete="off">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 form-group mt-lg-0 mt-md-3 mt-3">
                        <input type="text" class="form-control-simple" id="phone" placeholder="Teléfono *"
                            autocomplete="off">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 form-group mt-lg-0 mt-md-3 mt-3">
                        <input type="email" class="form-control-simple" id="email" placeholder="Email *"
                            autocomplete="off">
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-2 col-md-6 col-6">
                        <div class="dropdown pointer">
                            <div id="dropdownMenuPersonas" type="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <div class="dropdown-menu quantity-menu">
                                    <div class="container w-auto">
                                        <div class="row w-auto d-flex align-items-center justify-content-center">
                                            <div class="col-6">
                                                <p>Adultos</p>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-quality-adultos">
                                                    <input class="cart-plus-minus-box input-text qty text"
                                                        name="qtyadultos" value="1" readonly>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <p>Niños</p>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-quality-ninos">
                                                    <input class="cart-plus-minus-box input-text qty text qtyninos"
                                                        name="qtyninos" id="qtyninos" value="0" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="row w-auto d-flex align-items-center justify-content-center content-qty-ninos">

                                        </div>
                                    </div>
                                </div>
                                <div class="input-field bg-transparent">
                                    <svg class="pl-1" width="20" height="16" viewBox="0 0 25 29" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.5003 14.5C16.0672 14.5 18.9587 11.6085 18.9587 8.04165C18.9587 4.47481 16.0672 1.58331 12.5003 1.58331C8.93349 1.58331 6.04199 4.47481 6.04199 8.04165C6.04199 11.6085 8.93349 14.5 12.5003 14.5Z"
                                            stroke="black" stroke-width="2" />
                                        <path
                                            d="M18.9586 17.0833H19.4132C20.3576 17.0836 21.2693 17.4287 21.9771 18.0537C22.6849 18.6788 23.1401 19.5408 23.2572 20.4778L23.7623 24.513C23.8077 24.8765 23.7753 25.2455 23.6672 25.5955C23.5591 25.9456 23.3778 26.2686 23.1353 26.5432C22.8929 26.8178 22.5948 27.0377 22.2608 27.1883C21.9268 27.3389 21.5647 27.4167 21.1983 27.4166H3.80216C3.43582 27.4167 3.07365 27.3389 2.73969 27.1883C2.40573 27.0377 2.10762 26.8178 1.86514 26.5432C1.62266 26.2686 1.44136 25.9456 1.33327 25.5955C1.22518 25.2455 1.19277 24.8765 1.2382 24.513L1.74195 20.4778C1.8591 19.5404 2.31469 18.678 3.02307 18.0529C3.73144 17.4277 4.64378 17.083 5.58853 17.0833H6.04191"
                                            stroke="black" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    <input type="text" id="personas" placeholder="Personas" autocomplete="off" readonly>
                                    <svg width="20" height="12" viewBox="0 0 25 21" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M25 0H0L12.5 21L25 0Z" fill="black" />
                                    </svg>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row">

                    <div class="col-lg-2 col-md-6 col-6">
                        <div class="input-field">
                            <svg width="20" height="18" viewBox="0 0 36 36" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M23.4301 16.83C23.2431 16.6404 22.9885 16.5328 22.7221 16.5309C22.4558 16.529 22.1997 16.633 22.0101 16.82C21.8204 17.007 21.7129 17.2616 21.711 17.5279C21.7091 17.7942 21.8131 18.0504 22.0001 18.24L25.7201 22H7.83008C7.56486 22 7.31051 22.1054 7.12297 22.2929C6.93544 22.4804 6.83008 22.7348 6.83008 23C6.83008 23.2652 6.93544 23.5196 7.12297 23.7071C7.31051 23.8946 7.56486 24 7.83008 24H25.7201L22.0001 27.7C21.9075 27.7932 21.8342 27.9038 21.7843 28.0254C21.7345 28.1469 21.7091 28.2771 21.7095 28.4085C21.71 28.5399 21.7363 28.6699 21.787 28.7912C21.8378 28.9124 21.9118 29.0224 22.0051 29.115C22.0983 29.2076 22.2089 29.2809 22.3304 29.3307C22.452 29.3806 22.5822 29.406 22.7136 29.4056C22.845 29.4051 22.975 29.3788 23.0962 29.328C23.2175 29.2773 23.3275 29.2032 23.4201 29.11L29.5301 23L23.4301 16.83Z"
                                    fill="black" />
                                <path
                                    d="M13.2399 18.45C13.4385 18.4512 13.633 18.3931 13.7985 18.2833C13.9641 18.1735 14.0931 18.0169 14.1693 17.8335C14.2455 17.6501 14.2653 17.4481 14.2262 17.2533C14.1871 17.0586 14.091 16.8799 13.9499 16.74L10.2399 13H28.1199C28.3851 13 28.6395 12.8947 28.827 12.7071C29.0146 12.5196 29.1199 12.2652 29.1199 12C29.1199 11.7348 29.0146 11.4804 28.827 11.2929C28.6395 11.1054 28.3851 11 28.1199 11H10.2399L13.9499 7.27002C14.0425 7.17678 14.1158 7.06622 14.1657 6.94464C14.2155 6.82307 14.2409 6.69287 14.2405 6.56148C14.24 6.43008 14.2137 6.30007 14.163 6.17885C14.1123 6.05764 14.0382 5.9476 13.9449 5.85502C13.8517 5.76243 13.7411 5.68912 13.6196 5.63927C13.498 5.58942 13.3678 5.564 13.2364 5.56446C12.971 5.5654 12.7169 5.67171 12.5299 5.86002L6.41992 12L12.5299 18.14C12.6217 18.2363 12.7318 18.3133 12.8537 18.3666C12.9756 18.4198 13.1069 18.4482 13.2399 18.45Z"
                                    fill="black" />
                            </svg>
                            <select id="ida_y_vuelta">
                                <option class="text-center" value="1">Ida y vuelta</option>
                                <option class="text-center" value="2">Solo ida</option>
                            </select>
                            <svg width="20" height="12" viewBox="0 0 25 21" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M25 0H0L12.5 21L25 0Z" fill="black" />
                            </svg>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-6 ocultar-pc">
                        <div class="input-field">
                            <svg width="20" height="18" viewBox="0 0 25 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0)">
                                    <path
                                        d="M22.184 3.97901H16.678V2.53901C16.677 1.86533 16.409 1.21952 15.9327 0.743065C15.4564 0.266605 14.8107 -0.00166853 14.137 -0.00299072H10.75C10.0764 -0.0019336 9.43056 0.266086 8.9541 0.742358C8.47764 1.21863 8.20937 1.86433 8.20805 2.53801V3.97801H2.70205C1.98481 3.97827 1.29704 4.26338 0.78997 4.77064C0.2829 5.2779 -0.00195299 5.96577 -0.00195294 6.68301V19.943C-0.00208435 20.2977 0.0676894 20.649 0.203381 20.9768C0.339072 21.3046 0.538021 21.6024 0.788859 21.8532C1.0397 22.104 1.3375 22.303 1.66526 22.4387C1.99302 22.5744 2.34431 22.6441 2.69905 22.644H3.49505C3.48103 22.8309 3.50579 23.0186 3.56775 23.1954C3.62971 23.3723 3.72755 23.5344 3.85512 23.6716C3.98269 23.8089 4.13725 23.9183 4.30909 23.993C4.48094 24.0677 4.66637 24.1061 4.85375 24.1057C5.04112 24.1054 5.22641 24.0663 5.39798 23.991C5.56955 23.9156 5.7237 23.8057 5.85077 23.668C5.97783 23.5302 6.07507 23.3678 6.13638 23.1907C6.19769 23.0136 6.22175 22.8258 6.20705 22.639V22.644H18.663C18.663 23.0036 18.8059 23.3485 19.0602 23.6028C19.3145 23.8571 19.6594 24 20.019 24C20.3787 24 20.7236 23.8571 20.9779 23.6028C21.2322 23.3485 21.375 23.0036 21.375 22.644H22.171C22.5258 22.6441 22.8771 22.5744 23.2048 22.4387C23.5326 22.303 23.8304 22.104 24.0812 21.8532C24.3321 21.6024 24.531 21.3046 24.6667 20.9768C24.8024 20.649 24.8722 20.2977 24.872 19.943V6.68301V6.66101C24.872 5.94943 24.5894 5.267 24.0862 4.76384C23.5831 4.26068 22.9006 3.97801 22.189 3.97801H22.182L22.184 3.97901ZM10.099 2.53901C10.099 2.17901 10.391 1.88701 10.751 1.88701H14.137C14.497 1.88701 14.789 2.17901 14.789 2.53901V3.97901H10.106V2.53901H10.099ZM5.57205 19.759H5.57105C5.13573 19.759 4.71019 19.6299 4.34824 19.3881C3.98628 19.1462 3.70418 18.8025 3.53759 18.4003C3.371 17.9981 3.32741 17.5556 3.41234 17.1286C3.49726 16.7017 3.70689 16.3095 4.0147 16.0017C4.32252 15.6939 4.7147 15.4842 5.14165 15.3993C5.56861 15.3144 6.01115 15.358 6.41333 15.5246C6.81551 15.6911 7.15926 15.9732 7.40111 16.3352C7.64296 16.6972 7.77205 17.1227 7.77205 17.558V17.559C7.77205 18.774 6.78705 19.759 5.57205 19.76V19.759ZM9.15105 10.879L10.591 7.01201L14.458 8.45201L13.018 12.32L9.15105 10.879ZM15.391 19.215L14.435 15.91L21.704 13.813L22.66 17.118L15.391 19.215Z"
                                        fill="black" />
                                </g>
                                <defs>
                                    <clipPath id="clip0">
                                        <rect width="25" height="24" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <select id="claseM">
                                <option class="text-center" value="0">Clase</option>
                                <option class="text-center" value="1">Turista</option>
                                <option class="text-center" value="2">Business</option>
                                <option class="text-center" value="2">Primera</option>
                            </select>
                            <svg width="20" height="12" viewBox="0 0 25 21" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M25 0H0L12.5 21L25 0Z" fill="black" />
                            </svg>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6">
                        <div class="input-field">
                            <svg width="20" height="22" viewBox="0 0 35 36" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.07631 11.5L11.6666 13.16L17.811 8.57001L8.99297 8.83001C8.90664 8.83486 8.82295 8.8624 8.74992 8.91001L5.95964 10.56C5.87284 10.6095 5.80247 10.6846 5.75763 10.7756C5.71278 10.8667 5.69553 10.9695 5.70809 11.0707C5.72066 11.1719 5.76247 11.267 5.82811 11.3435C5.89375 11.42 5.98021 11.4746 6.07631 11.5Z"
                                    fill="black" />
                                <path
                                    d="M33.5612 6.35999L27.4362 4.99999C26.9211 4.88496 26.388 4.88526 25.873 5.00087C25.358 5.11647 24.8732 5.34467 24.4515 5.66999L5.95011 19.5L1.50706 19.3C1.25257 19.2911 1.00178 19.3646 0.790124 19.5103C0.578464 19.6559 0.41662 19.8662 0.327445 20.1115C0.238271 20.3568 0.22627 20.6248 0.293139 20.8775C0.360008 21.1302 0.502367 21.355 0.700115 21.52L5.0265 25.05C5.09773 25.1091 5.18251 25.1484 5.27272 25.1642C5.36294 25.1799 5.45558 25.1716 5.54178 25.14C6.7765 24.65 11.3751 22.14 16.8098 19.07L17.8987 30.58C17.908 30.6797 17.9435 30.7749 18.0015 30.8553C18.0594 30.9358 18.1377 30.9984 18.2277 31.0365C18.3178 31.0745 18.4162 31.0866 18.5124 31.0714C18.6086 31.0561 18.699 31.0142 18.7737 30.95L21.2043 28.87C21.3373 28.7552 21.4268 28.5959 21.4571 28.42L23.7612 15.13C27.6501 12.91 31.364 10.76 33.9793 9.23999C34.2507 9.08808 34.4701 8.85404 34.6079 8.56957C34.7457 8.28509 34.7951 7.96394 34.7494 7.64961C34.7038 7.33528 34.5653 7.04298 34.3528 6.8123C34.1403 6.58162 33.8639 6.42372 33.5612 6.35999Z"
                                    fill="black" />
                            </svg>
                            <input type="text" id="origen" placeholder="Origen" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6">
                        <div class="input-field">
                            <svg width="20" height="22" viewBox="0 0 35 36" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.07631 11.5L11.6666 13.16L17.811 8.57001L8.99297 8.83001C8.90664 8.83486 8.82295 8.8624 8.74992 8.91001L5.95964 10.56C5.87284 10.6095 5.80247 10.6846 5.75763 10.7756C5.71278 10.8667 5.69553 10.9695 5.70809 11.0707C5.72066 11.1719 5.76247 11.267 5.82811 11.3435C5.89375 11.42 5.98021 11.4746 6.07631 11.5Z"
                                    fill="black" />
                                <path
                                    d="M33.5612 6.35999L27.4362 4.99999C26.9211 4.88496 26.388 4.88526 25.873 5.00087C25.358 5.11647 24.8732 5.34467 24.4515 5.66999L5.95011 19.5L1.50706 19.3C1.25257 19.2911 1.00178 19.3646 0.790124 19.5103C0.578464 19.6559 0.41662 19.8662 0.327445 20.1115C0.238271 20.3568 0.22627 20.6248 0.293139 20.8775C0.360008 21.1302 0.502367 21.355 0.700115 21.52L5.0265 25.05C5.09773 25.1091 5.18251 25.1484 5.27272 25.1642C5.36294 25.1799 5.45558 25.1716 5.54178 25.14C6.7765 24.65 11.3751 22.14 16.8098 19.07L17.8987 30.58C17.908 30.6797 17.9435 30.7749 18.0015 30.8553C18.0594 30.9358 18.1377 30.9984 18.2277 31.0365C18.3178 31.0745 18.4162 31.0866 18.5124 31.0714C18.6086 31.0561 18.699 31.0142 18.7737 30.95L21.2043 28.87C21.3373 28.7552 21.4268 28.5959 21.4571 28.42L23.7612 15.13C27.6501 12.91 31.364 10.76 33.9793 9.23999C34.2507 9.08808 34.4701 8.85404 34.6079 8.56957C34.7457 8.28509 34.7951 7.96394 34.7494 7.64961C34.7038 7.33528 34.5653 7.04298 34.3528 6.8123C34.1403 6.58162 33.8639 6.42372 33.5612 6.35999Z"
                                    fill="black" />
                            </svg>
                            <input type="text" id="destino" placeholder="Destino" autocomplete="off">
                        </div>
                    </div>
                    <div
                        class="col-lg-1 col-md-12 col-12 ocultar-md altura-linea-form d-flex align-items-center justify-content-center">
                        <p class="line-form"></p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6 ocultar-md">
                        <div class="input-field">
                            <svg width="22" height="22" viewBox="0 0 38 38" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.8748 22.1667C14.061 22.1667 15.8332 20.3945 15.8332 18.2083C15.8332 16.0222 14.061 14.25 11.8748 14.25C9.68871 14.25 7.9165 16.0222 7.9165 18.2083C7.9165 20.3945 9.68871 22.1667 11.8748 22.1667Z"
                                    fill="black" />
                                <path
                                    d="M27.2411 11.0833H18.9998C18.5799 11.0833 18.1772 11.2501 17.8803 11.5471C17.5833 11.844 17.4165 12.2467 17.4165 12.6667V23.75H6.33317V9.5H3.1665V31.6667H6.33317V26.9167H31.6665V31.6667H34.8332V18.6754C34.8311 16.6625 34.0305 14.7327 32.6072 13.3093C31.1838 11.886 29.254 11.0854 27.2411 11.0833ZM20.5832 23.75V14.25H27.2411C28.4144 14.2513 29.5393 14.7179 30.3689 15.5476C31.1986 16.3772 31.6652 17.5021 31.6665 18.6754V23.75H20.5832Z"
                                    fill="black" />
                            </svg>
                            <input type="text" id="hotel" placeholder="Hotel o zona" autocomplete="off">
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 col-6 ocultar-md">
                        <div class="input-field">
                            <svg width="20" height="18" viewBox="0 0 25 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0)">
                                    <path
                                        d="M22.184 3.97901H16.678V2.53901C16.677 1.86533 16.409 1.21952 15.9327 0.743065C15.4564 0.266605 14.8107 -0.00166853 14.137 -0.00299072H10.75C10.0764 -0.0019336 9.43056 0.266086 8.9541 0.742358C8.47764 1.21863 8.20937 1.86433 8.20805 2.53801V3.97801H2.70205C1.98481 3.97827 1.29704 4.26338 0.78997 4.77064C0.2829 5.2779 -0.00195299 5.96577 -0.00195294 6.68301V19.943C-0.00208435 20.2977 0.0676894 20.649 0.203381 20.9768C0.339072 21.3046 0.538021 21.6024 0.788859 21.8532C1.0397 22.104 1.3375 22.303 1.66526 22.4387C1.99302 22.5744 2.34431 22.6441 2.69905 22.644H3.49505C3.48103 22.8309 3.50579 23.0186 3.56775 23.1954C3.62971 23.3723 3.72755 23.5344 3.85512 23.6716C3.98269 23.8089 4.13725 23.9183 4.30909 23.993C4.48094 24.0677 4.66637 24.1061 4.85375 24.1057C5.04112 24.1054 5.22641 24.0663 5.39798 23.991C5.56955 23.9156 5.7237 23.8057 5.85077 23.668C5.97783 23.5302 6.07507 23.3678 6.13638 23.1907C6.19769 23.0136 6.22175 22.8258 6.20705 22.639V22.644H18.663C18.663 23.0036 18.8059 23.3485 19.0602 23.6028C19.3145 23.8571 19.6594 24 20.019 24C20.3787 24 20.7236 23.8571 20.9779 23.6028C21.2322 23.3485 21.375 23.0036 21.375 22.644H22.171C22.5258 22.6441 22.8771 22.5744 23.2048 22.4387C23.5326 22.303 23.8304 22.104 24.0812 21.8532C24.3321 21.6024 24.531 21.3046 24.6667 20.9768C24.8024 20.649 24.8722 20.2977 24.872 19.943V6.68301V6.66101C24.872 5.94943 24.5894 5.267 24.0862 4.76384C23.5831 4.26068 22.9006 3.97801 22.189 3.97801H22.182L22.184 3.97901ZM10.099 2.53901C10.099 2.17901 10.391 1.88701 10.751 1.88701H14.137C14.497 1.88701 14.789 2.17901 14.789 2.53901V3.97901H10.106V2.53901H10.099ZM5.57205 19.759H5.57105C5.13573 19.759 4.71019 19.6299 4.34824 19.3881C3.98628 19.1462 3.70418 18.8025 3.53759 18.4003C3.371 17.9981 3.32741 17.5556 3.41234 17.1286C3.49726 16.7017 3.70689 16.3095 4.0147 16.0017C4.32252 15.6939 4.7147 15.4842 5.14165 15.3993C5.56861 15.3144 6.01115 15.358 6.41333 15.5246C6.81551 15.6911 7.15926 15.9732 7.40111 16.3352C7.64296 16.6972 7.77205 17.1227 7.77205 17.558V17.559C7.77205 18.774 6.78705 19.759 5.57205 19.76V19.759ZM9.15105 10.879L10.591 7.01201L14.458 8.45201L13.018 12.32L9.15105 10.879ZM15.391 19.215L14.435 15.91L21.704 13.813L22.66 17.118L15.391 19.215Z"
                                        fill="black" />
                                </g>
                                <defs>
                                    <clipPath id="clip0">
                                        <rect width="25" height="24" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <select id="clase">
                                <option class="text-center" value="0">Clase</option>
                                <option class="text-center" value="1">Turista</option>
                                <option class="text-center" value="2">Business</option>
                                <option class="text-center" value="2">Primera</option>
                            </select>
                            <svg width="20" height="12" viewBox="0 0 25 21" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M25 0H0L12.5 21L25 0Z" fill="black" />
                            </svg>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6">
                        <div class="input-field">
                            <svg width="20" height="22" viewBox="0 0 29 29" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M21.7498 4.83337H7.24984C4.58046 4.83337 2.4165 6.99733 2.4165 9.66671V21.75C2.4165 24.4194 4.58046 26.5834 7.24984 26.5834H21.7498C24.4192 26.5834 26.5832 24.4194 26.5832 21.75V9.66671C26.5832 6.99733 24.4192 4.83337 21.7498 4.83337Z"
                                    stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M9.6665 2.41669V7.25002" stroke="black" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M19.333 2.41669V7.25002" stroke="black" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M2.4165 12.0834H26.5832" stroke="black" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>

                            <input type="text" id="fecha_inicio" placeholder="mar, 29 sep" autocomplete="off" value="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6">
                        <div class="input-field">
                            <svg width="20" height="22" viewBox="0 0 29 29" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M21.7498 4.83337H7.24984C4.58046 4.83337 2.4165 6.99733 2.4165 9.66671V21.75C2.4165 24.4194 4.58046 26.5834 7.24984 26.5834H21.7498C24.4192 26.5834 26.5832 24.4194 26.5832 21.75V9.66671C26.5832 6.99733 24.4192 4.83337 21.7498 4.83337Z"
                                    stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M9.6665 2.41669V7.25002" stroke="black" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M19.333 2.41669V7.25002" stroke="black" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M2.4165 12.0834H26.5832" stroke="black" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            <input type="text" id="fecha_regreso" placeholder="mar, 29 sep" autocomplete="off">
                        </div>
                    </div>
                    <div
                        class="col-lg-1 col-md-12 col-12  altura-linea-form d-flex align-items-center justify-content-center">
                        <p class="line-form"></p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6 ocultar-pc">
                        <div class="input-field">
                            <svg width="22" height="22" viewBox="0 0 38 38" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.8748 22.1667C14.061 22.1667 15.8332 20.3945 15.8332 18.2083C15.8332 16.0222 14.061 14.25 11.8748 14.25C9.68871 14.25 7.9165 16.0222 7.9165 18.2083C7.9165 20.3945 9.68871 22.1667 11.8748 22.1667Z"
                                    fill="black" />
                                <path
                                    d="M27.2411 11.0833H18.9998C18.5799 11.0833 18.1772 11.2501 17.8803 11.5471C17.5833 11.844 17.4165 12.2467 17.4165 12.6667V23.75H6.33317V9.5H3.1665V31.6667H6.33317V26.9167H31.6665V31.6667H34.8332V18.6754C34.8311 16.6625 34.0305 14.7327 32.6072 13.3093C31.1838 11.886 29.254 11.0854 27.2411 11.0833ZM20.5832 23.75V14.25H27.2411C28.4144 14.2513 29.5393 14.7179 30.3689 15.5476C31.1986 16.3772 31.6652 17.5021 31.6665 18.6754V23.75H20.5832Z"
                                    fill="black" />
                            </svg>
                            <input type="text" id="hotelM" placeholder="Hotel o zona" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6">
                        <div class="input-field">
                            <svg width="22" height="22" viewBox="0 0 37 38" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M3.0835 11.0834C3.0835 10.2435 3.40835 9.43805 3.98658 8.84418C4.56482 8.25032 5.34908 7.91669 6.16683 7.91669H30.8335C31.6513 7.91669 32.4355 8.25032 33.0137 8.84418C33.592 9.43805 33.9168 10.2435 33.9168 11.0834V26.9167C33.9168 27.7565 33.592 28.562 33.0137 29.1559C32.4355 29.7497 31.6513 30.0834 30.8335 30.0834H6.16683C5.34908 30.0834 4.56482 29.7497 3.98658 29.1559C3.40835 28.562 3.0835 27.7565 3.0835 26.9167V11.0834Z"
                                    stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M18.5 23.75C21.0543 23.75 23.125 21.6234 23.125 19C23.125 16.3766 21.0543 14.25 18.5 14.25C15.9457 14.25 13.875 16.3766 13.875 19C13.875 21.6234 15.9457 23.75 18.5 23.75Z"
                                    stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M3.0835 14.25C4.719 14.25 6.28751 13.5828 7.44399 12.395C8.60046 11.2073 9.25016 9.59639 9.25016 7.91669"
                                    stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M27.75 30.0833C27.75 28.4036 28.3997 26.7927 29.5562 25.605C30.7127 24.4173 32.2812 23.75 33.9167 23.75"
                                    stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                            <input type="text" id="money" placeholder="$250 - $750 US" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-12 mt-5">
                        <button class="btn w-100">Enviar</button>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12 mt-5 d-flex align-items-center justify-content-center">
                        <a class="w-100"><svg width="30" height="30" viewBox="0 0 59 59" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M29.4998 0C28.8508 0 28.2091 0.0221252 27.5712 0.062688L27.8072 3.74284C28.9344 3.66999 30.0651 3.66999 31.1923 3.74284L31.4283 0.062688C30.7863 0.0210603 30.1431 0.000153445 29.4998 0V0ZM23.7472 0.560504C22.4713 0.814944 21.225 1.15051 20.0154 1.55614L21.1991 5.05191C22.2575 4.69054 23.3453 4.39922 24.4589 4.17797L23.7472 0.564192V0.560504ZM38.9841 1.55982C37.7646 1.14639 36.5192 0.813793 35.256 0.564192L34.5406 4.17797C35.6543 4.39922 36.7421 4.69422 37.8004 5.05191L38.9841 1.55982ZM45.8908 4.97079C44.8206 4.25447 43.7046 3.609 42.5499 3.03852L40.9164 6.34255C41.9304 6.84405 42.9076 7.41193 43.8406 8.03512L45.8908 4.97079ZM16.4459 3.03852C15.288 3.61009 14.1744 4.25541 13.1087 4.97079L15.159 8.03144C16.0962 7.40587 17.073 6.84173 18.0832 6.34255L16.4459 3.03852ZM10.0481 7.31974C9.08192 8.16788 8.16742 9.08238 7.31928 10.0485L10.0923 12.4823C10.8372 11.6342 11.6337 10.8376 12.4818 10.0928L10.0481 7.31974ZM51.6803 10.0485C50.8308 9.08076 49.9192 8.16925 48.9515 7.31974L46.5177 10.0928C47.3658 10.8376 48.166 11.6342 48.9072 12.4823L51.6803 10.0485ZM55.9615 16.4464C55.391 15.2929 54.7456 14.1781 54.0292 13.1092L50.9686 15.1594C51.5918 16.0924 52.1559 17.0696 52.6575 18.0836L55.9615 16.4501V16.4464ZM4.97033 13.1092C4.25495 14.1749 3.60594 15.2885 3.03806 16.4501L6.34209 18.0836C6.84359 17.0696 7.41147 16.0924 8.03466 15.1594L4.97033 13.1092ZM1.55936 20.0159C1.14592 21.2354 0.813321 22.4808 0.563731 23.744L4.17751 24.4594C4.39876 23.3457 4.69376 22.2579 5.05145 21.1996L1.55936 20.0159ZM58.4395 23.7477C58.1901 22.4832 57.8575 21.2366 57.4439 20.0159L53.9481 21.1996C54.3095 22.2579 54.6008 23.3457 54.822 24.4594L58.4358 23.744L58.4395 23.7477ZM0.0622271 27.5717C-0.0207424 28.856 -0.0207424 30.1444 0.0622271 31.4288L3.74238 31.1928C3.66953 30.0656 3.66953 28.9349 3.74238 27.8077L0.0622271 27.5717ZM59 29.5002C58.9999 28.8569 58.979 28.2137 58.9373 27.5717L55.2572 27.8077C55.3301 28.9349 55.3301 30.0656 55.2572 31.1928L58.9373 31.4288C58.979 30.7868 58.9999 30.1436 59 29.5002ZM0.560043 35.2528C0.814483 36.5287 1.15005 37.775 1.55568 38.9846L5.05145 37.8009C4.68877 36.7347 4.39682 35.6457 4.17751 34.5411L0.563731 35.2565L0.560043 35.2528ZM57.4402 38.9846C57.8532 37.775 58.1851 36.5287 58.4358 35.2565L54.822 34.5411C54.6008 35.6547 54.3058 36.7425 53.9481 37.8009L57.4402 38.9846ZM3.03806 42.5541C3.60868 43.7074 4.25414 44.8222 4.97033 45.8913L8.03098 43.841C7.40478 42.9042 6.84061 41.9274 6.34209 40.9168L3.03806 42.5504V42.5541ZM54.0292 45.8913C54.7446 44.8256 55.3936 43.712 55.9615 42.5504L52.6575 40.9168C52.1559 41.9309 51.5881 42.9081 50.9649 43.841L54.0292 45.8913ZM7.31928 48.9519C8.16742 49.9181 9.08192 50.8326 10.0481 51.6807L12.4818 48.9077C11.6343 48.1639 10.8361 47.3657 10.0923 46.5182L7.31928 48.9519ZM48.9515 51.6807C49.9176 50.8326 50.8321 49.9181 51.6803 48.9519L48.9072 46.5182C48.166 47.3663 47.3658 48.1665 46.5177 48.9077L48.9515 51.6807ZM42.5536 55.9619C43.7115 55.3904 44.8251 54.7451 45.8908 54.0297L43.8406 50.969C42.9034 51.5946 41.9266 52.1587 40.9164 52.6579L42.5499 55.9619H42.5536ZM13.1087 54.0297C14.1744 54.7451 15.288 55.3941 16.4496 55.9619L18.0832 52.6579C17.0725 52.1582 16.0957 51.5928 15.159 50.9653L13.1087 54.0297ZM20.0154 57.4406C21.225 57.8536 22.4713 58.1855 23.7435 58.4363L24.4589 54.8225C23.3543 54.6031 22.2654 54.3111 21.1991 53.9485L20.0154 57.4406ZM35.2523 58.44C36.5168 58.1905 37.7634 57.8579 38.9841 57.4443L37.8004 53.9485C36.7342 54.3111 35.6452 54.6031 34.5406 54.8225L35.256 58.4363L35.2523 58.44ZM27.5712 58.9378C28.8556 59.0209 30.144 59.0209 31.4283 58.9378L31.1923 55.2576C30.0651 55.3305 28.9344 55.3305 27.8072 55.2576L27.5712 58.9378ZM31.3435 16.5939C31.3435 16.1049 31.1493 15.6359 30.8035 15.2901C30.4577 14.9444 29.9888 14.7501 29.4998 14.7501C29.0108 14.7501 28.5418 14.9444 28.196 15.2901C27.8503 15.6359 27.656 16.1049 27.656 16.5939V27.6565H16.5934C16.1044 27.6565 15.6355 27.8507 15.2897 28.1965C14.9439 28.5423 14.7497 29.0112 14.7497 29.5002C14.7497 29.9892 14.9439 30.4582 15.2897 30.804C15.6355 31.1497 16.1044 31.344 16.5934 31.344H27.656V42.4066C27.656 42.8956 27.8503 43.3645 28.196 43.7103C28.5418 44.0561 29.0108 44.2503 29.4998 44.2503C29.9888 44.2503 30.4577 44.0561 30.8035 43.7103C31.1493 43.3645 31.3435 42.8956 31.3435 42.4066V31.344H42.4061C42.8951 31.344 43.3641 31.1497 43.7099 30.804C44.0556 30.4582 44.2499 29.9892 44.2499 29.5002C44.2499 29.0112 44.0556 28.5423 43.7099 28.1965C43.3641 27.8507 42.8951 27.6565 42.4061 27.6565H31.3435V16.5939Z"
                                    fill="black" />
                            </svg>
                            <span class="ml-3">Agregar otro destino</span></a>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- EndForm  -->

    {{-- Nosotros --}}
    <section class="section" id="nosotros">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img class="img-fluid" src="{{ asset('img/sectionNosotros/imagen1.png') }}" alt="travelux" />
                </div>
                <div class="col-lg-6 position-relative">
                    <p class="bg-texto">nosotros</p>
                    <div class="content-text-nosotros">
                        <p class="text-section-nosotros">Somos una agencia de viajes
                            boutique con más de: </p>
                        <h2 class="text-secundary mt-3">10 años</h2>
                        <p class="text-section-nosotros mt-3">de experiencia en el sector.</p>
                        <p class="mt-3">Somos los mejores en conseguir tanto hoteles como vuelos de <span
                                class="text-section-nosotros">lujo a un precio
                                inmejorable.</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- EndNosotros --}}

    {{-- Nosotros 2 --}}
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 ocultar-pc">
                    <img class="img-fluid" src="{{ asset('img/sectionNosotros/imagen1.png') }}"
                        alt="travelux" />
                </div>
                <div class="col-lg-6 d-flex align-items-center justify-content-center mt-lg-0 mt-md-4 mt-4">
                    <div class="plr-10p">
                        <p class="texto-lg-3r text-center-md">¡Tu viaje con
                            <span class="text-secundary">Travelux</span> será
                            la vacación de
                            tus sueños!
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 ocultar-md">
                    <img class="img-fluid" src="{{ asset('img/sectionNosotros/imagen1.png') }}"
                        alt="travelux" />
                </div>
            </div>
        </div>
    </section>
    {{-- EndNosotros 2 --}}

    {{-- Como lo hacemos --}}

    <section class="section" id="como_lo_hacemos">
        <div class="bg-image p-10p" style="background-image: url({{ asset('img/banners/banner1.png') }})">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-lg-3">
                    <p class="texto-lg-3r text-white fw-700 d-inline-block">¿Cómo lo hacemos?</p>
                    <div class="border-bottom-white mb-lg-0 mb-md-3 mb-3"></div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-8">
                    <div class="row p-0 m-0 d-flex align-items-center justify-content-center">
                        <div class="col-lg-6 col-md-6 col-12 mt-3">
                            <div class="cuadro-primary">
                                <p class="texto-lg-3r text-white fw-700">1</p>
                                <p class="text-white">
                                    <small class="text-white">Nuestro equipo especializado
                                        trabaja directamente con las mejores
                                        aerolíneas a nivel global para garantizarte un descuento en vuelos desde turista
                                        premium
                                        hasta primera clase.
                                    </small>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 mt-3">
                            <div class="cuadro-primary">
                                <p class="texto-lg-3r text-white fw-700">2</p>
                                <p class="text-white">
                                    <small class="text-white">No importa a donde quieras volar, únicamente con
                                        llenar
                                        el formulario con
                                        tus destinos y fechas nuestros expertos buscarán diferentes opciones para ti.
                                    </small>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 mt-3">
                            <div class="cuadro-primary">
                                <p class="texto-lg-3r text-white fw-700">3</p>
                                <p class="text-white">
                                    <small class="text-white">También te podemos conseguir hospedaje en
                                        habitaciones de
                                        lujo en los hoteles más top de tu destino a un precio mucho más bajo.
                                    </small>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 mt-3">
                            <div class="cuadro-secundary">
                                <p class="texto-lg-3r text-white fw-700">4</p>
                                <p class="text-white">
                                    <small class="text-white">No dejes de llenar el formulario de tu viaje y un
                                        agente
                                        se pondrá en contacto contigo lo antes posible para darte el mejor servicio.
                                    </small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex align-items-center justify-content-center mt-5">
                <div class="col-lg-4 mt-lg-0 mt-md-3 mt-3">
                    <a href="tel:55 000 000">
                        <p class="texto-lg-2r text-white text-center-md">
                            <svg width="35" height="35" viewBox="0 0 40 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M17.5901 10.3999L11.9517 3.89155C11.3017 3.14155 10.1101 3.14489 9.35506 3.90155L4.7184 8.54655C3.3384 9.92822 2.94339 11.9799 3.74173 13.6249C8.51109 23.4998 16.4751 31.475 26.3434 36.2582C27.9867 37.0566 30.0367 36.6616 31.4167 35.2799L36.0967 30.5916C36.8551 29.8332 36.8567 28.6349 36.1001 27.9849L29.5667 22.3766C28.8834 21.7899 27.8217 21.8666 27.1367 22.5532L24.8634 24.8299C24.747 24.9519 24.5938 25.0323 24.4273 25.0588C24.2608 25.0853 24.0902 25.0564 23.9417 24.9766C20.2258 22.8367 17.1434 19.7503 15.0084 16.0316C14.9284 15.8828 14.8995 15.7119 14.926 15.5451C14.9525 15.3784 15.033 15.2249 15.1551 15.1082L17.4217 12.8399C18.1084 12.1499 18.1834 11.0832 17.5901 10.3982V10.3999Z"
                                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            55 000 000
                        </p>
                    </a>
                </div>
                <div class="col-lg-4 mt-lg-0 mt-md-3 mt-3">
                    <a href="https://wa.me/5500000000?text=Me%20interesa%20un%20viaje%20a:%20" target="_blank">
                        <p class="texto-lg-2r text-white text-center-md">
                            <svg width="35" height="35" viewBox="0 0 47 47" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M36.0392 11.0313C34.4106 9.392 32.4728 8.09212 30.3382 7.20701C28.2036 6.32191 25.9146 5.86918 23.6038 5.87506C13.914 5.87506 6.02579 13.7613 6.02188 23.455C6.02188 26.5531 6.83067 29.5768 8.36796 32.244L5.875 41.3522L15.1947 38.9063C17.7726 40.3096 20.6608 41.0454 23.596 41.0467H23.6038C33.2917 41.0467 41.1798 33.1605 41.1838 23.4668C41.1904 21.1569 40.7392 18.8686 39.8562 16.7341C38.9731 14.5997 37.6758 12.6614 36.0392 11.0313ZM23.6038 38.0798H23.5979C20.9806 38.0801 18.4115 37.3759 16.1602 36.0412L15.6275 35.724L10.0972 37.1751L11.5718 31.7838L11.2252 31.2316C9.76188 28.902 8.98725 26.206 8.99071 23.455C8.99463 15.3984 15.5492 8.84389 23.6097 8.84389C25.5293 8.83962 27.4308 9.21613 29.2039 9.95162C30.9771 10.6871 32.5868 11.767 33.9399 13.1287C35.3002 14.484 36.3784 16.0954 37.1122 17.8698C37.8459 19.6443 38.2207 21.5466 38.2149 23.4668C38.211 31.5233 31.6565 38.0798 23.6038 38.0798ZM31.6193 27.1347C31.1786 26.9134 29.0205 25.852 28.6171 25.7051C28.2157 25.5583 27.9239 25.4858 27.6301 25.9245C27.3364 26.3631 26.4943 27.3521 26.2377 27.6458C25.9812 27.9396 25.7247 27.9748 25.286 27.7555C24.8473 27.5362 23.4315 27.0721 21.7532 25.5759C20.447 24.4107 19.5657 22.9733 19.3092 22.5326C19.0526 22.092 19.2817 21.8551 19.503 21.6357C19.7008 21.4399 19.9417 21.1226 20.161 20.8661C20.3804 20.6096 20.4528 20.4274 20.5997 20.1337C20.7466 19.8399 20.6741 19.5834 20.5625 19.3641C20.4528 19.1428 19.5735 16.9808 19.2073 16.1015C18.8529 15.2496 18.4906 15.3632 18.2203 15.3514C17.9404 15.34 17.6603 15.3348 17.3802 15.3358C17.1575 15.3414 16.9383 15.3931 16.7364 15.4874C16.5346 15.5818 16.3544 15.7168 16.2072 15.8841C15.8038 16.3247 14.6699 17.3861 14.6699 19.5481C14.6699 21.7101 16.2444 23.7997 16.4637 24.0934C16.683 24.3872 19.5618 28.8228 23.968 30.7263C25.0177 31.1787 25.8363 31.4489 26.4727 31.6526C27.5244 31.9875 28.482 31.9385 29.2399 31.8269C30.0839 31.7016 31.8386 30.7655 32.2048 29.7393C32.571 28.7131 32.571 27.8338 32.4613 27.6498C32.3517 27.4657 32.056 27.3541 31.6193 27.1347Z"
                                    fill="white" />
                            </svg>

                            55 000 000
                        </p>
                    </a>
                </div>
                <div class="col-lg-4 mt-lg-0 mt-md-3 mt-3">
                    <a href="mailto:info@travelux.com">
                        <p class="texto-lg-2r text-white text-center-md">
                            <svg width="35" height="35" viewBox="0 0 41 41" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M34.1665 34.1666H6.83317C5.92701 34.1666 5.05797 33.8066 4.41722 33.1659C3.77647 32.5251 3.4165 31.6561 3.4165 30.7499V10.1013C3.45483 9.22114 3.83164 8.38981 4.46829 7.78087C5.10493 7.17192 5.95219 6.83242 6.83317 6.83325H34.1665C35.0727 6.83325 35.9417 7.19322 36.5825 7.83397C37.2232 8.47472 37.5832 9.34376 37.5832 10.2499V30.7499C37.5832 31.6561 37.2232 32.5251 36.5825 33.1659C35.9417 33.8066 35.0727 34.1666 34.1665 34.1666ZM6.83317 13.4411V30.7499H34.1665V13.4411L20.4998 22.5499L6.83317 13.4411ZM8.19984 10.2499L20.4998 18.4499L32.7998 10.2499H8.19984Z"
                                    fill="white" />
                            </svg>
                            info@travelux.com
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </section>
    {{-- end Como lo hacemos --}}


</x-layout-web>
