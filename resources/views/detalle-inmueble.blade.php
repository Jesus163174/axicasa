@extends('layouts.customer')
@section('content')

    <div class="g-pos-rel">
        <label class="u-ribbon g-color-white g-bg-primary g-font-weight-600 g-pos-abs g-bottom-0 g-left-5 g-z-index-1 g-px-10 g-py-6">1 Imagen</label>

        <div class="js-carousel g-pt-6 g-mx-2"
             data-infinite="true"
             data-slides-show="5"
             data-slides-scroll="1"
             data-rows="2"
             data-responsive='[{
               "breakpoint": 1200,
               "settings": {
                 "slidesToShow": 5
               }
             }, {
               "breakpoint": 992,
               "settings": {
                 "slidesToShow": 4
               }
             }, {
               "breakpoint": 768,
               "settings": {
                 "slidesToShow": 3
               }
             }, {
               "breakpoint": 576,
               "settings": {
                 "slidesToShow": 2
               }
             }, {
               "breakpoint": 446,
               "settings": {
                 "slidesToShow": 2
               }
             }]'>
            <div class="js-slide g-px-3">
                <a class="js-fancybox d-block" href="javascript:;"
                   data-fancybox="lightbox-gallery--01"
                   data-src="{{asset('axicasa/'.$inmueble->portada)}}"
                   data-speed="350"
                   data-caption="Lightbox Gallery">
                    <img class="img-fluid" src="{{asset('axicasa/'.$inmueble->portada)}}" alt="Image Description">
                </a>
            </div>

            <div class="js-slide g-px-3">
                <a class="js-fancybox d-block" href="javascript:;"
                   data-fancybox="lightbox-gallery--01"
                   data-src="assets/img-temp/1920x1080/img3.jpg"
                   data-speed="350"
                   data-caption="Lightbox Gallery">
                    <img class="img-fluid" src="assets/img-temp/400x250/img14.jpg" alt="Image Description">
                </a>
            </div>

            <div class="js-slide g-px-3">
                <a class="js-fancybox d-block" href="javascript:;"
                   data-fancybox="lightbox-gallery--01"
                   data-src="assets/img-temp/1920x1080/img4.jpg"
                   data-speed="350"
                   data-caption="Lightbox Gallery">
                    <img class="img-fluid" src="assets/img-temp/400x250/img15.jpg" alt="Image Description">
                </a>
            </div>

            <div class="js-slide g-px-3">
                <a class="js-fancybox d-block" href="javascript:;"
                   data-fancybox="lightbox-gallery--01"
                   data-src="assets/img-temp/1920x1080/img5.jpg"
                   data-speed="350"
                   data-caption="Lightbox Gallery">
                    <img class="img-fluid" src="assets/img-temp/400x250/img16.jpg" alt="Image Description">
                </a>
            </div>

            <div class="js-slide g-px-3">
                <a class="js-fancybox d-block" href="javascript:;"
                   data-fancybox="lightbox-gallery--01"
                   data-src="assets/img-temp/1920x1080/img6.jpg"
                   data-speed="350"
                   data-caption="Lightbox Gallery">
                    <img class="img-fluid" src="assets/img-temp/400x250/img17.jpg" alt="Image Description">
                </a>
            </div>

            <div class="js-slide g-px-3">
                <a class="js-fancybox d-block" href="javascript:;"
                   data-fancybox="lightbox-gallery--01"
                   data-src="assets/img-temp/1920x1080/img7.jpg"
                   data-speed="350"
                   data-caption="Lightbox Gallery">
                    <img class="img-fluid" src="assets/img-temp/400x250/img18.jpg" alt="Image Description">
                </a>
            </div>

            <div class="js-slide g-px-3">
                <a class="js-fancybox d-block" href="javascript:;"
                   data-fancybox="lightbox-gallery--01"
                   data-src="assets/img-temp/1920x1080/img8.jpg"
                   data-speed="350"
                   data-caption="Lightbox Gallery">
                    <img class="img-fluid" src="assets/img-temp/400x250/img19.jpg" alt="Image Description">
                </a>
            </div>

            <div class="js-slide g-px-3">
                <a class="js-fancybox d-block" href="javascript:;"
                   data-fancybox="lightbox-gallery--01"
                   data-src="assets/img-temp/1920x1080/img9.jpg"
                   data-speed="350"
                   data-caption="Lightbox Gallery">
                    <img class="img-fluid" src="assets/img-temp/400x250/img20.jpg" alt="Image Description">
                </a>
            </div>

            <div class="js-slide g-px-3">
                <a class="js-fancybox d-block" href="javascript:;"
                   data-fancybox="lightbox-gallery--01"
                   data-src="assets/img-temp/1920x1080/img10.jpg"
                   data-speed="350"
                   data-caption="Lightbox Gallery">
                    <img class="img-fluid" src="assets/img-temp/400x250/img21.jpg" alt="Image Description">
                </a>
            </div>

            <div class="js-slide g-px-3">
                <a class="js-fancybox d-block" href="javascript:;"
                   data-fancybox="lightbox-gallery--01"
                   data-src="assets/img-temp/1920x1080/img11.jpg"
                   data-speed="350"
                   data-caption="Lightbox Gallery">
                    <img class="img-fluid" src="assets/img-temp/400x250/img22.jpg" alt="Image Description">
                </a>
            </div>
        </div>
    </div>
    <!-- End Listing - Carousel Image -->

    <!-- Breadcrumbs -->
    <div class="container g-pt-50 g-pb-80">
        <ul class="u-list-inline g-font-weight-500 mb-2">
            <li class="list-inline-item g-mr-5">
                <a class="u-link-v5 g-color-gray-dark-v5 g-color-main--hover" href="#">Inicio</a>
                <i class="g-color-gray-light-v2 g-ml-5 fa fa-angle-right"></i>
            </li>
            <li class="list-inline-item g-mr-5">
                <a class="u-link-v5 g-color-gray-dark-v5 g-color-main--hover" href="#">{{$inmueble->titulo}}</a>
                <i class="g-color-gray-light-v2 g-ml-5 fa fa-angle-right"></i>
            </li>
        </ul>
        <h1 class="h2 mb-0">{{$inmueble->titulo}}</h1>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Listing - Main Info -->
    <div class="container">
        <div class="row">
            <div class="col-md-8 g-mb-30">
                <div class="row">
                    <!-- Listing - List of Details -->
                    <ul class="col-md-6 list-unstyled g-font-weight-600 mb-0">
                        <li class="g-brd-bottom--dashed g-brd-gray-light-v3 pt-1 mb-3">
                            <span class="g-color-text g-font-size-12">Estatus:</span>
                            <span class="float-right g-color-lightred">{{$inmueble->estatus}}</span>
                        </li>
                        <li class="g-brd-bottom--dashed g-brd-gray-light-v3 pt-1 mb-3">
                            <span class="g-color-text g-font-size-12">Disponible para:</span>
                            <span class="float-right g-color-black">Venta</span>
                        </li>
                        <li class="g-brd-bottom--dashed g-brd-gray-light-v3 pt-1 mb-3">
                            <span class="g-color-text g-font-size-12">Direccion:</span>
                            <span class="float-right g-color-black">470 Lucy Forks, Patriciafurt, YC7B</span>
                        </li>
                        <li class="g-brd-bottom--dashed g-brd-gray-light-v3 pt-1 mb-3">
                            <span class="g-color-text g-font-size-12">Area(M^2):</span>
                            <span class="float-right g-color-black">{{$inmueble->area}} M^2</span>
                        </li>
                        <li class="g-brd-bottom--dashed g-brd-gray-light-v3 pt-1 mb-3">
                            <span class="g-color-text g-font-size-12">Built in:</span>
                            <span class="float-right g-color-black">1999</span>
                        </li>
                    </ul>
                    <!-- End Listing - List of Details -->

                    <!-- Listing - List of Details -->
                    <ul class="col-md-6 list-unstyled g-font-weight-600 mb-0">
                        <li class="g-brd-bottom--dashed g-brd-gray-light-v3 pt-1 mb-3">
                            <span class="g-color-text g-font-size-12">Cuarto(s):</span>
                            <span class="float-right g-color-black">{{$inmueble->habitaciones}}</span>
                        </li>
                        <li class="g-brd-bottom--dashed g-brd-gray-light-v3 pt-1 mb-3">
                            <span class="g-color-text g-font-size-12">Baño(s):</span>
                            <span class="float-right g-color-black">{{$inmueble->baños}}</span>
                        </li>
                        <li class="g-brd-bottom--dashed g-brd-gray-light-v3 pt-1 mb-3">
                            <span class="g-color-text g-font-size-12">Tipo:</span>
                            <span class="float-right g-color-black">{{$inmueble->tipo}}</span>
                        </li>
                        <li class="g-brd-bottom--dashed g-brd-gray-light-v3 pt-1 mb-3">
                            <span class="g-color-text g-font-size-12">Estacionamiento:</span>
                            <span class="float-right g-color-black">{{$inmueble->estacionamiento ? 'si' : 'no'}}</span>
                        </li>
                        <li class="g-brd-bottom--dashed g-brd-gray-light-v3 pt-1 mb-3">
                            <span class="g-color-text g-font-size-12">Posteado:</span>
                            <span class="float-right g-color-black">{{$inmueble->created_at->format('Y-m-d')}}</span>
                        </li>
                    </ul>
                    <!-- End Listing - List of Details -->
                </div>

                <!-- Listing - Numbers -->
                <div class="g-brd-top g-brd-gray-light-v3 g-pt-40 g-mt-40">
                    <div class="row">
                        <div class="col-sm-12 g-brd-right--sm g-brd-gray-light-v3 g-mb-30 g-mb-0--sm">
                            <h2 class="h5">Costo</h2>
                            <span class="d-block g-font-weight-600 g-font-size-25">${{number_format($inmueble->costo,2,',','.')}} <span class="g-color-text g-font-size-15">/MXN</span></span>
                        </div>
                    </div>
                </div>
                <!-- End Listing - Numbers -->
            </div>

            <div class="col-md-4 g-mb-30">
                <!-- Listing - Agents -->
                <div class="u-shadow-v11 text-center">
                    <div class="g-bg-white g-pa-20">
                        <img class="img-fluid g-brd-around g-brd-3 g-brd-gray-light-v3" src="{{asset('axicasa/'.$inmueble->portada)}}" alt="Image Description">
                    </div>
                </div>
                <!-- End Listing - Agents -->
            </div>
        </div>
        <!-- End Listing - Additional Info -->
    </div>
    <!-- End Listing - Main Info -->

    <!-- Listing - More Info -->
    <div class="container g-pt-100">
        <div class="row justify-content-center">
            <div class="col-lg-9 g-mb-70">
                <!-- Listing - Description -->
                <div class="g-brd-bottom g-brd-gray-light-v3 g-pb-30">
                    <div class="row">
                        <div class="col-md-3 g-mb-30">
                            <h3 class="h6 g-font-weight-600 text-uppercase mb-0">Descripción</h3>
                        </div>

                        <div class="col-md-9 g-mb-30"style="text-align: justify;">
                            {!! $inmueble->descripcion !!}
                        </div>
                    </div>
                </div>
                <!-- End Listing - Description -->

                <!-- Listing - Location on Map -->
                <div class="g-brd-bottom g-brd-gray-light-v3 g-py-30 g-mt-30 g-mb-30">
                    <div class="row">
                        <div class="col-md-3 g-mb-30">
                            <h3 class="h6 g-font-weight-600 text-uppercase mb-0">Ubicación</h3>
                        </div>

                        <div class="col-md-9 g-mb-30">
                            <!-- Google Map -->
                            <div id="GMapCustomized-light" class="js-g-map embed-responsive embed-responsive-21by9 g-height-300"
                                 data-type="custom"
                                 data-lat="40.674"
                                 data-lng="-73.946"
                                 data-zoom="12"
                                 data-title="Agency"
                                 data-styles='[["", "", [{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]], ["", "labels", [{"visibility":"on"}]], ["water", "", [{"color":"#bac6cb"}]] ]'
                                 data-pin="true"
                                 data-pin-icon="assets/img/icons/pin/marker.png">
                            </div>
                            <!-- End Google Map -->
                        </div>
                    </div>
                </div>
                <!-- End Listing - Location on Map -->
            </div>

            <div class="col-md-5 col-lg-3 g-mb-70">
                <!-- Popular Properties -->
                <div class="g-bg-secondary g-pa-5 g-mb-30">
                    <div class="g-bg-white g-pa-15">
                        <h2 class="h6 g-font-weight-600 mb-4">Ultimas propiedades</h2>

                        <ul class="list-unstyled g-font-weight-500 mb-0">
                            <!-- Popular Properties - Products -->
                            @foreach($inmuebles as $propiedad)
                                <li class="g-brd-bottom g-brd-gray-light-v3 g-pb-30">
                                    <img class="img-fluid w-100 mb-3" src="{{asset('axicasa/'.$propiedad->portada)}}" alt="Image Description">
                                    <h3 class="h6 g-font-weight-600 mb-1"><a class="u-link-v5 g-color-main g-color-primary--hover" href="detalle-inmueble?id={{$propiedad->id}}">{{$propiedad->titulo}}</a></h3>
                                    <span class="d-block g-color-text g-font-weight-600 mb-2">${{number_format($propiedad->costo,2,',','.')}}/MXN</span>
                                    <ul class="list-inline g-color-gray-dark-v5 g-font-size-13 mb-0">
                                        <li class="list-inline-item">{{$propiedad->baños}} Baño(s)</li>
                                        <li class="list-inline-item">&#8226;</li>
                                        <li class="list-inline-item">{{$propiedad->habitaciones}} Cuarto(s)</li>
                                        <li class="list-inline-item">&#8226;</li>
                                        <li class="list-inline-item">{{$propiedad->area}} M^2</li>
                                    </ul>
                                </li>
                            @endforeach
                            <!-- End Popular Properties - Products -->
                        </ul>
                    </div>
                </div>
                <!-- End Popular Properties -->
            </div>
        </div>
    </div>
    <!-- End Listing - More Info -->

@stop
