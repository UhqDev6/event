<div class="intro">
    <div class="container">
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

<!-- CTA -->

<!-- Close CTA -->

<!-- Offers -->

<div class="offers">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2 class="section_title">Traning/Event Lainnya</h2>
            </div>
        </div>
        <div class="row offers_items">

            <!-- Offers Item -->
            @foreach ($dataPelatihan as $item)
            <div class="col-lg-6 offers_col">
                <div class="offers_item">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="offers_image_container">
                                <!-- Image by https://unsplash.com/@kensuarez -->
                                <div class="offers_image_background" style="background-image:url({{('image/' . $item->image )}})"></div>
                                <div class="offer_name"><a href="#">{{($item->title)}}</a></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="offers_content">
                                <div class="offers_price">Rp{{($item->htm)}}<span>per event</span></div>
                                <p class="offers_text">{{Str::limit($item->caption,150, ' selengkapnya ...')}}</p>
                                <div class="offers_link"><a href="{{route('landingpage.readmore', $item->id)}}">read more</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Testimonials -->
<!-- Close Testimonials -->

<div class="trending">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2 class="section_title">Kerja Sama / Sponsor</h2>
            </div>
        </div>
        <div class="row trending_container">

            <!-- Trending Item -->
            <div class="col-lg-3 col-sm-6">
                <div class="trending_item clearfix">
                    <div class="trending_image"><img src="{{('landingpage/images/trend_1.png')}}" alt="https://unsplash.com/@fransaraco"></div>
                    <div class="trending_content">
                        <div class="trending_title"><a href="#">grand hotel</a></div>
                        <div class="trending_price">From $182</div>
                        <div class="trending_location">madrid, spain</div>
                    </div>
                </div>
            </div>

            <!-- Trending Item -->
            <div class="col-lg-3 col-sm-6">
                <div class="trending_item clearfix">
                    <div class="trending_image"><img src="{{('landingpage/images/trend_2.png')}}" alt="https://unsplash.com/@grovemade"></div>
                    <div class="trending_content">
                        <div class="trending_title"><a href="#">mars hotel</a></div>
                        <div class="trending_price">From $182</div>
                        <div class="trending_location">madrid, spain</div>
                    </div>
                </div>
            </div>

            <!-- Trending Item -->
            <div class="col-lg-3 col-sm-6">
                <div class="trending_item clearfix">
                    <div class="trending_image"><img src="{{('landingpage/images/trend_3.png')}}" alt="https://unsplash.com/@jbriscoe"></div>
                    <div class="trending_content">
                        <div class="trending_title"><a href="#">queen hotel</a></div>
                        <div class="trending_price">From $182</div>
                        <div class="trending_location">madrid, spain</div>
                    </div>
                </div>
            </div>

            <!-- Trending Item -->
            <div class="col-lg-3 col-sm-6">
                <div class="trending_item clearfix">
                    <div class="trending_image"><img src="{{('landingpage/images/trend_4.png')}}" alt="https://unsplash.com/@oowgnuj"></div>
                    <div class="trending_content">
                        <div class="trending_title"><a href="#">mars hotel</a></div>
                        <div class="trending_price">From $182</div>
                        <div class="trending_location">madrid, spain</div>
                    </div>
                </div>
            </div>

            <!-- Trending Item -->
            <div class="col-lg-3 col-sm-6">
                <div class="trending_item clearfix">
                    <div class="trending_image"><img src="{{('landingpage/images/trend_5.png')}}" alt="https://unsplash.com/@mindaugas"></div>
                    <div class="trending_content">
                        <div class="trending_title"><a href="#">grand hotel</a></div>
                        <div class="trending_price">From $182</div>
                        <div class="trending_location">madrid, spain</div>
                    </div>
                </div>
            </div>

            <!-- Trending Item -->
            <div class="col-lg-3 col-sm-6">
                <div class="trending_item clearfix">
                    <div class="trending_image"><img src="{{('landingpage/images/trend_6.png')}}" alt="https://unsplash.com/@itsnwa"></div>
                    <div class="trending_content">
                        <div class="trending_title"><a href="#">mars hotel</a></div>
                        <div class="trending_price">From $182</div>
                        <div class="trending_location">madrid, spain</div>
                    </div>
                </div>
            </div>

            <!-- Trending Item -->
            <div class="col-lg-3 col-sm-6">
                <div class="trending_item clearfix">
                    <div class="trending_image"><img src="{{('landingpage/images/trend_7.png')}}" alt="https://unsplash.com/@rktkn"></div>
                    <div class="trending_content">
                        <div class="trending_title"><a href="#">queen hotel</a></div>
                        <div class="trending_price">From $182</div>
                        <div class="trending_location">madrid, spain</div>
                    </div>
                </div>
            </div>

            <!-- Trending Item -->
            <div class="col-lg-3 col-sm-6">
                <div class="trending_item clearfix">
                    <div class="trending_image"><img src="{{('landingpage/images/trend_8.png')}}" alt="https://unsplash.com/@thoughtcatalog"></div>
                    <div class="trending_content">
                        <div class="trending_title"><a href="#">mars hotel</a></div>
                        <div class="trending_price">From $182</div>
                        <div class="trending_location">madrid, spain</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="contact">
    <div class="contact_background">
        <img src="{{('landingpage/images/book.png')}}" style="margin-top:150px; margin-right:80px" alt="">
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="contact_image">
                    
                </div>
            </div>
            <div class="col-lg-7">
                <div class="contact_form_container">
                    <div class="contact_title">Saran & Masukan</div>
                    <form action="#" id="contact_form" class="contact_form">
                        <input type="text" id="contact_form_name" class="contact_form_name input_field" placeholder="Name" required="required" data-error="Name is required.">
                        <input type="text" id="contact_form_email" class="contact_form_email input_field" placeholder="E-mail" required="required" data-error="Email is required.">
                        <input type="text" id="contact_form_subject" class="contact_form_subject input_field" placeholder="Subject" required="required" data-error="Subject is required.">
                        <textarea id="contact_form_message" class="text_field contact_form_message" name="message" rows="4" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
                        <button type="submit" id="form_submit_button" class="form_submit_button button">send message<span></span><span></span><span></span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>