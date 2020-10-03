<!DOCTYPE html>
<html lang="en">
<head>
<title>Sinergitas Profesional</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travelix Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="{{('/assets/logo/logo2.png')}}">
<link rel="stylesheet" type="text/css" href="{{('/landingpage/styles/bootstrap4/bootstrap.min.css')}}">
<link href="{{('landingpage/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{('/andingpage/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{('/landingpage/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{('/landingpage/plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{('/landingpage/styles/main_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{('/landingpage/styles/responsive.css')}}">
<link rel="stylesheet" type="text/css" href="{{('/landingpage/styles/offers_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{('/landingpage/styles/offers_responsive.css')}}">
</head>

<body>

<div class="super_container">
	
	<!-- Header -->
        @include('/landingpage/header')
    <!-- Close Header -->

    <div class="intro">
        <div class="container" style="margin-top:90px">
            <div class="row">
                <div class="col">
                    <h2 class="intro_title text-center">Traning/Event Terbaru</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="intro_text text-center">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec. </p>
                    </div>
                </div>
            </div>
            <div class="row intro_items">
    
                <!-- Intro Item -->
            </div>
        </div>
    </div>

{{-- 
    <!-- Colosel -->
        @include('landingpage/colousel')
    <!-- Close Colosel --> --}}
    <div class="col-lg-12">
        <!-- Offers Grid -->
        <div class="offers_grid" style="margin-top:-100px">
            <!-- Offers Item -->
            <div class="offers_item rating_4">
                <div class="row">
                    {{-- @foreach ($dataPelatihan as $item) --}}
                    <div class="col-lg-1 temp_col"></div>
                    <div class="col-lg-3 col-1680-4">
                        <div class="offers_image_container">
                            <!-- Image by https://unsplash.com/@kensuarez -->
                            <div class="offers_image_background" style="background-image:url({{('/image/' . $dataPelatihan->image )}}); height:500px"></div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="offers_content">
                            <div class="offers_price">Rp{{($dataPelatihan->htm)}}<span>per event</span></div>
                            
                            <p class="offers_text">{{($dataPelatihan->caption)}}</p>
                            <div class="button book_button"><a href="#">Daftar Event</a></div>
                            <div class="offer_reviews">
                                <div class="offer_reviews_content">
                                    <div class="offer_reviews_title">Peserta</div>
                                    <div class="offer_reviews_title">{{$dataPelatihan->title}}</div>
                                </div>
                                <div class="offer_reviews_rating text-center"></div>
                            </div>
                        </div>
                    </div>
                    {{-- @endforeach --}}
                </div>
            </div>

        </div>
    </div>
    
    

    {{-- <!-- Content -->
        @include('landingpage/content')
    <!-- Close Content --> --}}


    <!-- Footer --> 
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        @include('/landingpage/footer')
    <!-- Close Footer -->


</div>

<script src="{{('/landingpage/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{('/landingpage/styles/bootstrap4/popper.js')}}"></script>
<script src="{{('/landingpage/styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{('/landingpage/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{('/landingpage/plugins/easing/easing.js')}}"></script>
<script src="{{('/landingpage/js/custom.js')}}"></script>
<script src="{{('/landingpage/plugins/Isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{('/landingpage/plugins/parallax-js-master/parallax.min.js')}}"></script>

</body>

</html>