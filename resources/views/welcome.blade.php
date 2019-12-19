@extends('layouts.customer')
@section('content')
    <!-- Promo Block -->
    <div class="g-bg-cover g-bg-pos-top-center g-bg-img-hero g-bg-cover g-bg-black-opacity-0_3--after g-py-100" style="background-image: url({{asset('banner.jpg')}});">
        <div class="container g-pos-rel g-z-index-1">
            <div class="g-mb-20">
                <h1 class="g-color-white g-font-size-40 mb-0">Encuentra un inmueble</h1>
            </div>

            <div class="g-bg-white g-pa-30">
                <!-- Input Group -->
                <form>
                    <div class="row g-mx-0--md">
                        <div class="col-md-6 col-lg-8 g-px-0--md g-mb-30">
                            <input class="form-control rounded-0 g-brd-gray-light-v3 g-px-20 g-py-15" type="text" placeholder="Buscar por ciudad , direccion, codigo postal , etc.">
                        </div>

                        <!-- Button Group -->
                        <div class="col-sm-6 col-md-3 col-lg-2 g-px-0--md g-mb-30">
                            <select class="js-custom-select w-100 h-100 u-select-v1 g-min-width-150 g-brd-left-none--md g-brd-gray-light-v3 g-color-main g-color-primary--hover g-pt-12 g-pb-13" required
                                    data-placeholder="Todas las ciudades"
                                    data-open-icon="fa fa-angle-down"
                                    data-close-icon="fa fa-angle-up">
                                <option></option>
                                <option class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active" value="NY">New York</option>
                                <option class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active" value="VC">Vancouver</option>
                                <option class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active" value="LN">London</option>
                                <option class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active" value="BR">Berlin</option>
                                <option class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active" value="ML">Milan</option>
                                <option class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active" value="PR">Paris</option>
                                <option class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active" value="MS">Moscow</option>
                            </select>
                        </div>
                        <!-- End Button Group -->

                        <!-- Button Group -->
                        <div class="col-sm-6 col-md-3 col-lg-2 g-px-0--md g-mb-30">
                            <select class="js-custom-select w-100 h-100 u-select-v1 g-min-width-150 g-brd-left-none--md g-brd-gray-light-v3 g-color-main g-color-primary--hover g-pt-12 g-pb-13" required
                                    data-placeholder="Todos los estados"
                                    data-open-icon="fa fa-angle-down"
                                    data-close-icon="fa fa-angle-up">
                                <option></option>
                                <option class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active" value="NR">North</option>
                                <option class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active" value="NTE">Northeast</option>
                                <option class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active" value="NTW">Northwest</option>
                                <option class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active" value="EA">East</option>
                                <option class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active" value="SO">South</option>
                                <option class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active" value="SOE">Southeast</option>
                                <option class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active" value="SOW">Southwest</option>
                                <option class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active" value="WE">West</option>
                            </select>
                        </div>
                        <!-- End Button Group -->
                    </div>

                    <div class="row">
                        <div class="col-6 col-lg-3 g-mb-30">
                            <!-- Button Group -->
                            <div class="input-group-btn">
                                <select class="js-custom-select u-select-v1 w-100 g-brd-gray-light-v3 g-color-main g-color-primary--hover g-py-12" required
                                        data-placeholder="Tipos"
                                        data-open-icon="fa fa-angle-down"
                                        data-close-icon="fa fa-angle-up">
                                    <option></option>
                                    <option class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active" value="FR">For Rent</option>
                                    <option class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active" value="FS">For Sale</option>
                                    <option class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active" value="FC">Foreclosure</option>
                                    <option class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active" value="NC">New Construction</option>
                                    <option class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active" value="NL">New Listing</option>
                                    <option class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active" value="OH">Open House</option>
                                    <option class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active" value="RP">Reduced Price</option>
                                    <option class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active" value="RS">Resale</option>
                                </select>
                            </div>
                            <!-- End Button Group -->
                        </div>

                        <div class="col-6 col-lg-3 g-mb-30">
                            <!-- Button Group -->
                            <div class="input-group-btn">
                                <select class="js-custom-select u-select-v1 w-100 g-brd-gray-light-v3 g-color-main g-color-primary--hover g-py-12" required
                                        data-placeholder="Habitaciones"
                                        data-open-icon="fa fa-angle-down"
                                        data-close-icon="fa fa-angle-up">
                                    <option></option>
                                    <option class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active" value="AP">Apartment</option>
                                    <option class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active" value="CO">Condo</option>
                                    <option class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active" value="FA">Farm</option>
                                    <option class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active" value="LO">Loft</option>
                                    <option class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active" value="LO">Lot</option>
                                    <option class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active" value="MU">Multi Family Home</option>
                                    <option class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active" value="SI">Single Family Home</option>
                                    <option class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active" value="TO">Townhouse</option>
                                    <option class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active" value="VI">Villa</option>
                                </select>
                            </div>
                            <!-- End Button Group -->
                        </div>

                        <div class="col-6 col-lg-3 g-mb-30">
                            <!-- Button Group -->
                            <div class="input-group-btn">
                                <select class="js-custom-select u-select-v1 w-100 g-brd-gray-light-v3 g-color-main g-color-primary--hover g-py-12" required
                                        data-placeholder="Baños"
                                        data-open-icon="fa fa-angle-down"
                                        data-close-icon="fa fa-angle-up">
                                    <option></option>
                                    <option class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active" value="1">1</option>
                                    <option class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active" value="2">2</option>
                                    <option class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active" value="3">3</option>
                                    <option class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active" value="4">4</option>
                                    <option class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active" value="5">5</option>
                                    <option class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active" value="6">6</option>
                                    <option class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active" value="7">7</option>
                                    <option class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active" value="8">8</option>
                                    <option class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active" value="9">9</option>
                                    <option class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active" value="10">10</option>
                                    <option class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active" value="ANY">Any</option>
                                </select>
                            </div>
                            <!-- End Button Group -->
                        </div>

                        <div class="col-6 col-lg-3 g-mb-30">
                            <!-- Button Group -->
                            <div class="input-group-btn">
                                <select class="js-custom-select u-select-v1 w-100 g-brd-gray-light-v3 g-color-main g-color-primary--hover g-py-12" required
                                        data-placeholder="Pisos"
                                        data-open-icon="fa fa-angle-down"
                                        data-close-icon="fa fa-angle-up">
                                    <option></option>
                                    <option class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active" value="1">1</option>
                                    <option class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active" value="2">2</option>
                                    <option class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active" value="3">3</option>
                                    <option class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active" value="4">4</option>
                                    <option class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active" value="5">5</option>
                                    <option class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active" value="6">6</option>
                                    <option class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active" value="7">7</option>
                                    <option class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active" value="8">8</option>
                                    <option class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active" value="9">9</option>
                                    <option class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active" value="10">10</option>
                                    <option class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active" value="ANY2">Any</option>
                                </select>
                            </div>
                            <!-- End Button Group -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6 col-lg-3 g-mb-30">
                            <input class="form-control rounded-0 g-brd-gray-light-v3 g-px-20 g-py-15" type="text" placeholder="Area maxima">
                        </div>

                        <div class="col-6 col-lg-3 g-mb-30">
                            <input class="form-control rounded-0 g-brd-gray-light-v3 g-px-20 g-py-15" type="text" placeholder="Area minima">
                        </div>

                        <div class="col-sm-6 col-lg-2 g-mb-30">
                            <!-- Radio Group -->
                            <div class="btn-group justified-content">
                                <label class="u-check">
                                    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radGroupBtn1_1" type="radio" checked="">
                                    <span class="btn btn-md btn-block u-btn-outline-white g-brd-gray-light-v3 g-brd-primary--checked g-color-main g-color-primary--checked g-font-size-default rounded-0 g-py-13">Compra</span>
                                </label>
                                <label class="u-check">
                                    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radGroupBtn1_1" type="radio">
                                    <span class="btn btn-md btn-block u-btn-outline-white g-brd-gray-light-v3 g-brd-primary--checked g-color-main g-color-primary--checked g-font-size-default rounded-0 g-py-13">Renta</span>
                                </label>
                            </div>
                            <!-- End Radio Group -->
                        </div>

                        <div class="col-sm-6 col-lg-4 g-mb-30">
                            <h2 class="h6 g-font-weight-600 mb-4">Rango de precios $(<span id="rangeSliderAmount3">0</span>)</h2>
                            <div id="rangeSlider1" class="u-slider-v1-3"
                                 data-result-container="rangeSliderAmount3"
                                 data-range="true"
                                 data-default="30, 3500000"
                                 data-min="0"
                                 data-max="3500000"></div>
                        </div>
                    </div>

                    <div class="text-right">
                        <button class="btn btn-block u-btn-primary g-color-white g-bg-primary-dark-v1--hover g-font-weight-600 rounded-0 g-px-18 g-py-15" type="submit">
                            Buscar
                        </button>
                    </div>
                </form>
                <!-- End Input Group -->
            </div>
        </div>
    </div>
    <!-- End Promo Block -->

    <!-- Rent Products -->
    <div class="container g-pb-100">
        <!-- Heading -->
        <div class="text-center g-mb-50"><br><br>
            <h2>Ultimas propiedades</h2>
        </div>
        <!-- End Heading -->

        <div class="row g-mb-40">
            @foreach($inmuebles as $inmueble)
                <div class="col-sm-6 col-lg-4 g-mb-30">
                    <!-- Products -->
                    <article>
                        <!-- Products - Carousel Image -->
                        <div class="js-carousel"
                             data-infinite="true"
                             data-arrows-classes="u-arrow-v1 g-pos-abs g-bottom-0 g-width-30 g-height-30 g-color-main g-bg-primary-opacity-0_4 g-bg-primary--hover g-color-white"
                             data-arrow-left-classes="fa fa-angle-left g-right-30 g-brd-right g-brd-white-opacity-0_1"
                             data-arrow-right-classes="fa fa-angle-right g-right-0">
                            <div class="js-slide g-pos-rel">
                                <a class="js-fancybox d-block u-icon-v3 g-width-30 g-height-30 g-color-main g-bg-primary-opacity-0_6 g-bg-primary--hover g-color-white g-font-size-14 g-pos-abs g-bottom-0 g-right-65" href="javascript:;"
                                   data-fancybox="lightbox-gallery--02"
                                   data-src="{{asset('axicasa/'.$inmueble->portada)}}"
                                   data-speed="350"
                                   data-caption="{{$inmueble->descripcion}}">
                                    <i class="icon-size-fullscreen"></i>
                                </a>
                                <img class="img-fluid" src="{{asset('axicasa/'.$inmueble->portada)}}" style="height: 300px !important;" alt="Image Description">
                            </div>
                            <div class="js-slide g-pos-rel">
                                <a class="js-fancybox d-block u-icon-v3 g-width-30 g-height-30 g-color-main g-bg-primary-opacity-0_6 g-bg-primary--hover g-color-white g-font-size-14 g-pos-abs g-bottom-0 g-right-65" href="javascript:;"
                                   data-fancybox="lightbox-gallery--02"
                                   data-src="assets/img-temp/600x550/img2.jpg"
                                   data-speed="350"
                                   data-caption="Lightbox Gallery">
                                    <i class="icon-size-fullscreen"></i>
                                </a>
                                <img class="img-fluid" src="assets/img-temp/600x550/img2.jpg" alt="Image Description">
                            </div>
                            <div class="js-slide g-pos-rel">
                                <a class="js-fancybox d-block u-icon-v3 g-width-30 g-height-30 g-color-main g-bg-primary-opacity-0_6 g-bg-primary--hover g-color-white g-font-size-14 g-pos-abs g-bottom-0 g-right-65" href="javascript:;"
                                   data-fancybox="lightbox-gallery--02"
                                   data-src="assets/img-temp/600x550/img3.jpg"
                                   data-speed="350"
                                   data-caption="Lightbox Gallery">
                                    <i class="icon-size-fullscreen"></i>
                                </a>
                                <img class="img-fluid" src="assets/img-temp/600x550/img3.jpg" alt="Image Description">
                            </div>
                            <div class="js-slide g-pos-rel">
                                <a class="js-fancybox d-block u-icon-v3 g-width-30 g-height-30 g-color-main g-bg-primary-opacity-0_6 g-bg-primary--hover g-color-white g-font-size-14 g-pos-abs g-bottom-0 g-right-65" href="javascript:;"
                                   data-fancybox="lightbox-gallery--02"
                                   data-src="assets/img-temp/600x550/img4.jpg"
                                   data-speed="350"
                                   data-caption="Lightbox Gallery">
                                    <i class="icon-size-fullscreen"></i>
                                </a>
                                <img class="img-fluid" src="assets/img-temp/600x550/img4.jpg" alt="Image Description">
                            </div>
                        </div>
                        <!-- Products - Carousel Image -->

                        <div class="g-brd-x g-brd-gray-light-v3 g-bg-white">
                            <!-- Products - List of Details -->
                            <ul class="d-flex list-inline g-brd-y g-brd-gray-light-v3 mb-0">
                                <li class="list-inline-item col-4 g-font-weight-500 g-font-size-13 text-center g-px-0 g-py-17 mr-0">
                                    <i class="align-middle g-color-text mr-1 icon-hotel-restaurant-022 u-line-icon-pro"></i>
                                    {{$inmueble->baños}}  Cuartos
                                </li>
                                <li class="list-inline-item col-4 g-font-weight-500 g-font-size-13 text-center g-px-0 g-brd-x g-brd-gray-light-v3 g-py-17 mr-0">
                                    <i class="align-middle g-color-text mr-1 icon-hotel-restaurant-008 u-line-icon-pro"></i>
                                    {{$inmueble->baños}} Baños.
                                </li>
                                <li class="list-inline-item col-4 g-font-weight-500 g-font-size-13 text-center g-px-0 g-py-17 mr-0">
                                    <i class="align-middle g-color-text mr-1 icon-real-estate-047 u-line-icon-pro"></i>
                                    90 M^2
                                </li>
                            </ul>
                            <!-- End Products - List of Details -->

                            <!-- Products - Address -->
                            <div class="g-pa-25">
                                <h3 class="g-font-weight-600 g-font-size-16">{{$inmueble->titulo}}</h3>
                                <p class="g-font-size-13 mb-4">Dirección</p>
                                <p class="g-color-text g-font-weight-500 g-font-size-13 mb-0">Posteado: <span class="g-color-text g-font-weight-400">{{$inmueble->created_at->format('Y-m-d')}}</span></p>
                            </div>
                            <!-- End Products - Address -->

                            <!-- Products - List of Details -->
                            <ul class="d-flex list-inline align-items-center g-brd-top g-brd-gray-light-v3 mb-0">
                                <li class="list-inline-item col-8 g-font-weight-600 g-font-size-17 text-center g-px-0 g-py-13 mr-0">
                                    ${{number_format($inmueble->costo,2,',','.')}}<span class="g-font-size-13"> MXN</span>
                                </li>
                                <li class="list-inline-item col-2 g-px-0 mr-0">
                                    <a class="d-block g-brd-x g-brd-gray-light-v3 g-color-text g-color-primary--hover g-font-weight-500 g-font-size-17 text-center g-text-underline--none--hover g-py-13" href="javascript:void(0);"
                                       data-toggle="tooltip"
                                       data-placement="top"
                                       title="Add to Compare">
                                        <i class="icon-finance-149 u-line-icon-pro"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item col-2 g-px-0 mr-0">
                                    <a class="d-block g-color-text g-color-primary--hover g-font-weight-500 g-font-size-17 text-center g-text-underline--none--hover g-py-13" href="javascript:void(0);"
                                       data-toggle="tooltip"
                                       data-placement="top"
                                       title="Save to Wishlist">
                                        <i class="icon-medical-022 u-line-icon-pro"></i>
                                    </a>
                                </li>
                            </ul>
                            <!-- End Products - List of Details -->
                        </div>
                        <a class="btn btn-block g-brd-top-none g-brd-gray-light-v3 g-brd-primary--hover g-color-white--hover g-bg-secondary g-bg-primary-dark-v1--hover g-font-weight-600 rounded-0 g-px-18 g-py-15" href="detalle-inmueble?id={{$inmueble->id}}">
                            Ver detalles
                            <i class="align-middle ml-2 fa fa-angle-right"></i>
                        </a>
                    </article>
                    <!-- End Products -->
                </div>
            @endforeach
        </div>

        <div class="text-center">
            <a class="btn g-color-text g-color-primary--hover g-bg-transparent g-font-weight-600 text-uppercase rounded-0" href="page-listing-1.html">
                <span class="align-middle g-color-primary g-font-size-20 g-pos-rel g-top-minus-2 mr-2">&#43;</span>
                Ver todo
            </a>
        </div>
    </div>
    <!-- End Rent Products -->


@stop
