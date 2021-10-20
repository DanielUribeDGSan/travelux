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

                            <a href="#cotizador" class="btn js-target-scroll btn-slider ocultar-pc">Cotizar <i
                                    class="icon-next"></i></a>
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

                        <div class="tp-caption ocultar-md" data-x="['right','right','right','right']"
                            data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                            data-voffset="['195','215']" data-width="none" data-height="none" data-whitespace="nowrap"
                            data-transform_idle="o:1;"
                            data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                            data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);"
                            data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;"
                            data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                            data-mask_out="x:inherit;y:inherit;" data-start="1500" data-splitin="none"
                            data-splitout="none" data-responsive_offset="on"><a href="#cotizador"
                                class="btn js-target-scroll">Cotizar <i class="icon-next"></i></a>
                        </div>
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
                            <a href="#cotizador" class="btn js-target-scroll btn-slider ocultar-pc">Cotizar <i
                                    class="icon-next"></i></a>
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

                        <div class="tp-caption tp-resizeme ocultar-md" data-x="['right','right','right','right']"
                            data-hoffset="['0']" data-y="['middle','middle','middle','middle']"
                            data-voffset="['195','210']" data-width="none" data-height="none" data-whitespace="nowrap"
                            data-transform_idle="o:1;"
                            data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                            data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);"
                            data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;"
                            data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                            data-mask_out="x:inherit;y:inherit;" data-start="1500" data-splitin="none"
                            data-splitout="none" data-responsive_offset="on" style="z-index: 8;"><a href="#cotizador"
                                class="js-target-scroll btn">Cotizar <i class="icon-next"></i></a>
                        </div>
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
                            data-splitout="none" data-responsive_offset="on" style="z-index: 8;"><a href="#cotizador"
                                class="btn js-target-scroll">Cotizar <i class="icon-next"></i></a>
                        </div> --}}
                    </li>
                </ul>
            </div>
        </div>
    </x-slot>

    <!-- Title  -->
    <section class="section">
        <div class="container" id="cotizador">
            {{-- <h1 class="text-center"><span class="text-primary fw-700">Cotiza tu hotel, tu vuelo</span> <span
                    class="text-secundary fw-700">tu viaje</span></h1>
            <p class="mt-3 text-center fw-200 plr-10p">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                Aenean commodo ligula eget dolor.</p> --}}
        </div>
    </section>
    <!-- EndTitle  -->

    <!-- Form  -->
    <section class="section">
        <div class="container">
            @livewire('validar-form')
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
                    <img class="img-fluid" src="{{ asset('img/sectionNosotros/imagen1.png') }}" alt="travelux" />
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
                    <img class="img-fluid" src="{{ asset('img/sectionNosotros/imagen1.png') }}" alt="travelux" />
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
