@extends('front-end.layouts.app')
@section('content')

<!--Main Slider-->
<section class="main-slider">
    <div class="rev_slider_wrapper fullwidthbanner-container" id="rev_slider_one_wrapper" data-source="gallery">
        <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
            <ul>
                <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1689" data-masterspeed="default"
                    data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="{{ asset('front-end/images/slides/freelance1.png') }}"
                    data-title="Slide Title" data-transition="parallaxvertical">

                    <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="{{ asset('front-end/images/slides/freelance1.png') }}">

                    <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-width="['800','800','700','500']" data-whitespace="normal"
                        data-hoffset="['15','15','15','15']" data-voffset="['-160','-100','-110','-105']" data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                        style="z-index: 7; white-space: nowrap;">
                        <div class="slide-content left-slide">
                            {{-- <div class="big-title">
                                Decorate ideas
                            </div> --}}
                        </div>
                    </div>
                    <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-width="['800','800','700','500']" data-whitespace="normal"
                        data-hoffset="['15','15','15','15']" data-voffset="['-75','-10','-25','-30']" data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1500,"ease":"Power3.easeInOut"},
                {"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]' style="z-index: 7; white-space: nowrap;">
                        {{-- <div class="slide-content left-slide">
                            <div class="text">Our power of choice is untrammelled and when nothing prevents <br>our being able to do what we like best.</div>
                        </div> --}}
                    </div>
                    <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-width="['800','800','700','500']" data-whitespace="normal"
                        data-hoffset="['15','15','15','15']" data-voffset="['25','90','100','85']" data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                        style="z-index: 7; white-space: nowrap;">
                        <div class="slide-content left-slide">
                            <div class="btn-box">
                                <a class="btn-one" href="#">About Company<span class="flaticon-next"></span></a>
                                {{-- <a class="project-view-button" href="#">Project 360<span style="font-size: 20px;">&deg</span>View</a> --}}
                            </div>
                        </div>
                    </div>

                </li>

                <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1687" data-masterspeed="default"
                    data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="{{ asset('front-end/images/slides/freelance2.jpg') }}"
                    data-title="Slide Title" data-transition="parallaxvertical">

                    <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="{{ asset('front-end/images/slides/freelance2.jpg') }}">


                    <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-width="['700','800','700','500']" data-whitespace="normal"
                        data-hoffset="['15','15','15','15']" data-voffset="['-160','-100','-110','-105']" data-x="['right','right','right','left']" data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                        style="z-index: 7; white-space: nowrap;">
                        <div class="slide-content left-slide">
                            {{-- <div class="big-title">
                                Crafted better
                            </div> --}}
                        </div>
                    </div>
                    <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-width="['700','800','700','500']" data-whitespace="normal"
                        data-hoffset="['15','15','15','15']" data-voffset="['-75','-10','-25','-30']" data-x="['right','right','right','left']" data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1500,"ease":"Power3.easeInOut"},
                {"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]' style="z-index: 7; white-space: nowrap;">
                        {{-- <div class="slide-content left-slide">
                            <div class="text">Our power of choice is untrammelled and when nothing prevents <br>our being able to do what we like best.</div>
                        </div> --}}
                    </div>
                    <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-width="['700','800','700','500']" data-whitespace="normal"
                        data-hoffset="['15','15','15','15']" data-voffset="['25','90','100','85']" data-x="['right','right','right','left']" data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                        style="z-index: 7; white-space: nowrap;">
                        <div class="slide-content left-slide">
                            {{-- <div class="btn-box">
                                <a class="btn-one" href="#">Our Services<span class="flaticon-next"></span></a>
                                <a class="project-view-button" href="#">Project 360<span style="font-size: 20px;">&deg</span>View</a>
                            </div> --}}
                        </div>
                    </div>
                </li>

                <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1688" data-masterspeed="default"
                    data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="{{ asset('front-end/images/slides/freelance3.png') }}"
                    data-title="Slide Title" data-transition="parallaxvertical">
                    <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="{{ asset('front-end/images/slides/freelance3.png') }}">

                    <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-width="['800','800','700','500']" data-whitespace="normal"
                        data-hoffset="['15','15','15','15']" data-voffset="['-160','-100','-110','-105']" data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                        style="z-index: 7; white-space: nowrap;">
                        <div class="slide-content left-slide">
                            {{-- <div class="big-title">
                                Well invented
                            </div> --}}
                        </div>
                    </div>
                    <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-width="['800','800','700','500']" data-whitespace="normal"
                        data-hoffset="['15','15','15','15']" data-voffset="['-75','-10','-25','-30']" data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1500,"ease":"Power3.easeInOut"},
                {"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]' style="z-index: 7; white-space: nowrap;">
                        {{-- <div class="slide-content left-slide">
                            <div class="text">Our power of choice is untrammelled and when nothing prevents <br>our being able to do what we like best.</div>
                        </div> --}}
                    </div>
                    <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-width="['800','800','700','500']" data-whitespace="normal"
                        data-hoffset="['15','15','15','15']" data-voffset="['25','90','100','85']" data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                        style="z-index: 7; white-space: nowrap;">
                        <div class="slide-content left-slide">
                            <div class="btn-box">
                                <a class="btn-one" href="#">About Company<span class="flaticon-next"></span></a>
                                {{-- <a class="project-view-button" href="#">Project 360<span style="font-size: 20px;">&deg</span>View</a> --}}
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</section>
<!--End Main Slider-->
  <!--Start about area-->
  <section class="about-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-5">
                <div class="about-image-box">
                    <div class="inner-box">
                        <img src="{{ asset('front-end/images/resources/about-image.jpg') }}" alt="Awesome Image">
                        <div class="overlay">
                            <div class="box">
                                <div class="icon wow zoomIn" data-wow-delay="300ms" data-wow-duration="1500ms">
                                    <img src="{{ asset('front-end/images/icon/home.png') }}" alt="Home Icon">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-box">
                        <p>Experiencd & Well knowledgeable Interior designers.</p>
                        <h3>Shelly Johnson, <span>CEO & Founder</span></h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-lg-7">
                <div class="about-text">
                    <div class="sec-title">
                        <p>About Company</p>
                        <div class="title">A small efficient<br> interior <span>designing team</span></div>
                    </div>
                    <div class="inner-content">
                        <div class="text">
                            <p>We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound.</p>
                            <p>Indignation and dislike men who are so beguiled and demoralized by the charms pleasure of the moment, so blinded by desire, that they cannot foresee.</p>
                        </div>
                        <div class="about-carousel-box owl-carousel owl-theme">
                            <!--Start Single Box-->
                            <div class="single-box">
                                <div class="icon-holder">
                                    <span class="icon-target"></span>
                                </div>
                                <div class="text-holder">
                                    <h3>Mission Statement</h3>
                                    <p>Same as saying through shrinking from pain these perfectly simple and easy to distinguish.</p>
                                </div>
                            </div>
                            <!--End Single Box-->
                            <!--Start Single Box-->
                            <div class="single-box">
                                <div class="icon-holder">
                                    <span class="icon-target"></span>
                                </div>
                                <div class="text-holder">
                                    <h3>Mission Statement</h3>
                                    <p>Same as saying through shrinking from pain these perfectly simple and easy to distinguish.</p>
                                </div>
                            </div>
                            <!--End Single Box-->
                            <!--Start Single Box-->
                            <div class="single-box">
                                <div class="icon-holder">
                                    <span class="icon-target"></span>
                                </div>
                                <div class="text-holder">
                                    <h3>Mission Statement</h3>
                                    <p>Same as saying through shrinking from pain these perfectly simple and easy to distinguish.</p>
                                </div>
                            </div>
                            <!--End Single Box-->
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!--End about Area-->
<!--Start slogan area-->
<section class="slogan-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content flex-box-two fix">
                    <div class="title float-left">
                        <h3>Wanna Work With Our Profesional Team? Make an Appointment.</h3>
                    </div>
                    <div class="button float-right">
                        <a class="btn-one" href="#">Make an Appointment<span class="flaticon-next"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End slogan area-->
<!--Start Working Process Area-->
<section class="working-process-area">
    <div class="container">
        <div class="sec-title text-center">
            <p>To Do good design</p>
            <div class="title">Our Working <span>process</span></div>
        </div>
        <div class="row">
            <!--Start Single Working Process-->
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                <div class="single-working-process text-center">
                    <div class="top-box"><span>01</span></div>
                    <div class="inner">
                        <h3>Idea & Design</h3>
                        <p>With righteous indignation and works off beguiled demoralized charm.</p>
                        <div class="icon-holder">
                            <span class="icon-productive"></span>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single Working Process-->
            <!--Start Single Working Process-->
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                <div class="single-working-process text-center">
                    <div class="top-box"><span>02</span></div>
                    <div class="inner">
                        <h3>Specification</h3>
                        <p>Our power of choice is untrammelled and when nothing prevents.</p>
                        <div class="icon-holder">
                            <span class="icon-document"></span>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single Working Process-->
            <!--Start Single Working Process-->
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1500ms">
                <div class="single-working-process text-center">
                    <div class="top-box"><span>03</span></div>
                    <div class="inner">
                        <h3>Execution</h3>
                        <p>Wing to the claims of duty the obligations will frequently occur.</p>
                        <div class="icon-holder">
                            <span class="icon-kitchen"></span>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single Working Process-->
        </div>
    </div>
</section>
<!--End Working Process Area-->
<!--Start Highlights Area-->
<section class="highlights-area">
    <div class="container">
        <div class="sec-title text-center">
            <!-- <p>To Do good design</p> -->
            <div class="title">Métier les plus rechercher</div>
        </div>
        <div class="row">
            <!--Start single highlight box-->
            <div class="col-xl-4 col-lg-4">
                <div class="single-highlight-box text-center wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1200ms">
                    <div class="icon-holder">
                        <span class="icon-concept">

                        </span>
                    </div>
                    <div class="inner-content">
                        <div class="text">
                            <h3>Concept Designs</h3>
                            <p>Indignation dislike who are beguile works & demoralized the charms.</p>
                        </div>
                        <a class="btn-one" href="#">Read More<span class="flaticon-next"></span></a>
                    </div>
                </div>
            </div>
            <!--End single highlight box-->
            <!--Start single highlight box-->
            <div class="col-xl-4 col-lg-4">
                <div class="single-highlight-box text-center wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                    <div class="icon-holder">
                        <span class="icon-scheme"></span>
                    </div>
                    <div class="inner-content">
                        <div class="text">
                            <h3>Project Designs</h3>
                            <p>Our power of choice is untrammelled and all nothing prevents best.</p>
                        </div>
                        <a class="btn-one" href="#">Read More<span class="flaticon-next"></span></a>
                    </div>
                </div>
            </div>
            <!--End single highlight box-->
            <!--Start single highlight box-->
            <div class="col-xl-4 col-lg-4">
                <div class="single-highlight-box text-center wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1200ms">
                    <div class="icon-holder">
                        <span class="icon-cupboard"></span>
                    </div>
                    <div class="inner-content">
                        <div class="text">
                            <h3>Make Overs</h3>
                            <p>Every pleasure is to be welcomed & every circumstances & owing power.</p>
                        </div>
                        <a class="btn-one" href="#">Read More<span class="flaticon-next"></span></a>
                    </div>
                </div>
            </div>
            <!--End single highlight box-->
        </div>
    </div>
</section>
<!--End Highlights Area-->

<!--Start Working Area-->
<section class="working-area" style="background-image:url(images/parallax-background/working-bg.jpg);">
    <div class="container">
        <div class="sec-title with-text max-width text-center wow fadeInDown" data-wow-delay="100ms" data-wow-duration="1200ms">
            <p>Working Areas</p>
            <div class="title clr-white">Covered <span>Industries</span></div>
            <p class="bottom-text">We are an Interior Designer, Who believe in excellence, quality and honesty, yes we design beautiful home interiors.</p>
        </div>
        <div class="row">
            <!--Start Single Working Box-->
            <div class="col-xl-4 col-lg-4">
                <div class="single-working-box wow fadeInDown" data-wow-delay="0ms">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="images/resources/working-1.jpg" alt="Awesome Image">
                            <div class="overlay-style-one"></div>
                        </div>
                    </div>
                    <div class="text-holder">
                        <div class="plus-icon-box"><span class="icon-plus"></span></div>
                        <div class="outer-box">
                            <div class="icon">
                                <div class="inner">
                                    <div class="box">
                                        <span class="icon-architecture-and-city1"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="text">
                                <h3>Residential</h3>
                                <p>Indignation and dislike men who are so beguiled and our the charms moment.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single Working Box-->
            <!--Start Single Working Box-->
            <div class="col-xl-4 col-lg-4">
                <div class="single-working-box wow fadeInDown" data-wow-delay="400ms">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="images/resources/working-2.jpg" alt="Awesome Image">
                            <div class="overlay-style-one"></div>
                        </div>
                    </div>
                    <div class="text-holder">
                        <div class="plus-icon-box"><span class="icon-plus"></span></div>
                        <div class="outer-box">
                            <div class="icon">
                                <div class="inner">
                                    <div class="box">
                                        <span class="icon-shop"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="text">
                                <h3>Commercial</h3>
                                <p>Righteous indignation work are so beguiled demoralized the blinded by desire.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single Working Box-->
            <!--Start Single Working Box-->
            <div class="col-xl-4 col-lg-4">
                <div class="single-working-box wow fadeInDown" data-wow-delay="800ms">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="images/resources/working-3.jpg" alt="Awesome Image">
                            <div class="overlay-style-one"></div>
                        </div>
                    </div>
                    <div class="text-holder">
                        <div class="plus-icon-box"><span class="icon-plus"></span></div>
                        <div class="outer-box">
                            <div class="icon">
                                <div class="inner">
                                    <div class="box">
                                        <span class="icon-company"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="text">
                                <h3>Industries</h3>
                                <p>Our power of choice is and when nothing prevents work every pleasure interior.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single Working Box-->
        </div>
    </div>
</section>
<!--End Working Area-->

<!--Start Recently Project Area-->
<section class="recently-project-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="sec-title float-left">
                    <p>Projects</p>
                    <div class="title">Recently Completed <span>Works</span></div>
                </div>
                <div class="more-project-button float-right">
                    <a class="btn-two" href="#">More Projects<span class="flaticon-next"></span></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="project-carousel owl-carousel owl-theme">
            <!--Start single project style1-->
            <div class="single-project-style1">
                <div class="img-holder">
                    <img src="images/projects/lat-pro-1.jpg" alt="Awesome Image">
                    <div class="overlay-content">
                        <div class="inner-content">
                            <div class="link-box">
                                <a class="btn-one" href="#">Case Study<span class="flaticon-next"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="title-box">
                        <span>Modern Design</span>
                        <h3>Office Partition Walls</h3>
                    </div>
                </div>
            </div>
            <!--End single project style1-->
            <!--Start single project style1-->
            <div class="single-project-style1">
                <div class="img-holder">
                    <img src="images/projects/lat-pro-2.jpg" alt="Awesome Image">
                    <div class="overlay-content">
                        <div class="inner-content">
                            <div class="link-box">
                                <a class="btn-one" href="#">Case Study<span class="flaticon-next"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="title-box">
                        <span>Modern Design</span>
                        <h3>Office Partition Walls</h3>
                    </div>
                </div>
            </div>
            <!--End single project style1-->
            <!--Start single project style1-->
            <div class="single-project-style1">
                <div class="img-holder">
                    <img src="images/projects/lat-pro-3.jpg" alt="Awesome Image">
                    <div class="overlay-content">
                        <div class="inner-content">
                            <div class="link-box">
                                <a class="btn-one" href="#">Case Study<span class="flaticon-next"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="title-box">
                        <span>Modern Design</span>
                        <h3>Office Partition Walls</h3>
                    </div>
                </div>
            </div>
            <!--End single project style1-->
            <!--Start single project style1-->
            <div class="single-project-style1">
                <div class="img-holder">
                    <img src="images/projects/lat-pro-4.jpg" alt="Awesome Image">
                    <div class="overlay-content">
                        <div class="inner-content">
                            <div class="link-box">
                                <a class="btn-one" href="#">Case Study<span class="flaticon-next"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="title-box">
                        <span>Modern Design</span>
                        <h3>Office Partition Walls</h3>
                    </div>
                </div>
            </div>
            <!--End single project style1-->
            <!--Start single project style1-->
            <div class="single-project-style1">
                <div class="img-holder">
                    <img src="images/projects/lat-pro-5.jpg" alt="Awesome Image">
                    <div class="overlay-content">
                        <div class="inner-content">
                            <div class="link-box">
                                <a class="btn-one" href="#">Case Study<span class="flaticon-next"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="title-box">
                        <span>Modern Design</span>
                        <h3>Office Partition Walls</h3>
                    </div>
                </div>
            </div>
            <!--End single project style1-->

            <!--Start single project style1-->
            <div class="single-project-style1">
                <div class="img-holder">
                    <img src="images/projects/lat-pro-1.jpg" alt="Awesome Image">
                    <div class="overlay-content">
                        <div class="inner-content">
                            <div class="link-box">
                                <a class="btn-one" href="#">Case Study<span class="flaticon-next"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="title-box">
                        <span>Modern Design</span>
                        <h3>Office Partition Walls</h3>
                    </div>
                </div>
            </div>
            <!--End single project style1-->
            <!--Start single project style1-->
            <div class="single-project-style1">
                <div class="img-holder">
                    <img src="images/projects/lat-pro-2.jpg" alt="Awesome Image">
                    <div class="overlay-content">
                        <div class="inner-content">
                            <div class="link-box">
                                <a class="btn-one" href="#">Case Study<span class="flaticon-next"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="title-box">
                        <span>Modern Design</span>
                        <h3>Office Partition Walls</h3>
                    </div>
                </div>
            </div>
            <!--End single project style1-->
            <!--Start single project style1-->
            <div class="single-project-style1">
                <div class="img-holder">
                    <img src="images/projects/lat-pro-3.jpg" alt="Awesome Image">
                    <div class="overlay-content">
                        <div class="inner-content">
                            <div class="link-box">
                                <a class="btn-one" href="#">Case Study<span class="flaticon-next"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="title-box">
                        <span>Modern Design</span>
                        <h3>Office Partition Walls</h3>
                    </div>
                </div>
            </div>
            <!--End single project style1-->
            <!--Start single project style1-->
            <div class="single-project-style1">
                <div class="img-holder">
                    <img src="images/projects/lat-pro-4.jpg" alt="Awesome Image">
                    <div class="overlay-content">
                        <div class="inner-content">
                            <div class="link-box">
                                <a class="btn-one" href="#">Case Study<span class="flaticon-next"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="title-box">
                        <span>Modern Design</span>
                        <h3>Office Partition Walls</h3>
                    </div>
                </div>
            </div>
            <!--End single project style1-->
            <!--Start single project style1-->
            <div class="single-project-style1">
                <div class="img-holder">
                    <img src="images/projects/lat-pro-5.jpg" alt="Awesome Image">
                    <div class="overlay-content">
                        <div class="inner-content">
                            <div class="link-box">
                                <a class="btn-one" href="#">Case Study<span class="flaticon-next"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="title-box">
                        <span>Modern Design</span>
                        <h3>Office Partition Walls</h3>
                    </div>
                </div>
            </div>
            <!--End single project style1-->

            <!--Start single project style1-->
            <div class="single-project-style1">
                <div class="img-holder">
                    <img src="images/projects/lat-pro-1.jpg" alt="Awesome Image">
                    <div class="overlay-content">
                        <div class="inner-content">
                            <div class="link-box">
                                <a class="btn-one" href="#">Case Study<span class="flaticon-next"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="title-box">
                        <span>Modern Design</span>
                        <h3>Office Partition Walls</h3>
                    </div>
                </div>
            </div>
            <!--End single project style1-->
            <!--Start single project style1-->
            <div class="single-project-style1">
                <div class="img-holder">
                    <img src="images/projects/lat-pro-2.jpg" alt="Awesome Image">
                    <div class="overlay-content">
                        <div class="inner-content">
                            <div class="link-box">
                                <a class="btn-one" href="#">Case Study<span class="flaticon-next"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="title-box">
                        <span>Modern Design</span>
                        <h3>Office Partition Walls</h3>
                    </div>
                </div>
            </div>
            <!--End single project style1-->
            <!--Start single project style1-->
            <div class="single-project-style1">
                <div class="img-holder">
                    <img src="images/projects/lat-pro-3.jpg" alt="Awesome Image">
                    <div class="overlay-content">
                        <div class="inner-content">
                            <div class="link-box">
                                <a class="btn-one" href="#">Case Study<span class="flaticon-next"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="title-box">
                        <span>Modern Design</span>
                        <h3>Office Partition Walls</h3>
                    </div>
                </div>
            </div>
            <!--End single project style1-->
            <!--Start single project style1-->
            <div class="single-project-style1">
                <div class="img-holder">
                    <img src="images/projects/lat-pro-4.jpg" alt="Awesome Image">
                    <div class="overlay-content">
                        <div class="inner-content">
                            <div class="link-box">
                                <a class="btn-one" href="#">Case Study<span class="flaticon-next"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="title-box">
                        <span>Modern Design</span>
                        <h3>Office Partition Walls</h3>
                    </div>
                </div>
            </div>
            <!--End single project style1-->
            <!--Start single project style1-->
            <div class="single-project-style1">
                <div class="img-holder">
                    <img src="images/projects/lat-pro-5.jpg" alt="Awesome Image">
                    <div class="overlay-content">
                        <div class="inner-content">
                            <div class="link-box">
                                <a class="btn-one" href="#">Case Study<span class="flaticon-next"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="title-box">
                        <span>Modern Design</span>
                        <h3>Office Partition Walls</h3>
                    </div>
                </div>
            </div>
            <!--End single project style1-->

        </div>
    </div>
</section>
<!--End Recently Project Area-->

<!--Start Brand area-->
<section class="brand-area">
    <div class="container">
        <div class="sec-title">
            <p>Corporate Clients</p>
            <div class="title">More than <span>2000 Clients</span></div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <ul class="brand-items-carousel owl-carousel owl-theme">
                    <!--Start Single Brand Item-->
                    <li class="single-brand-item wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <a href="#"><img src="images/brand/1.png" alt="Awesome Brand Image"></a>
                        <div class="overlay-content">
                            <p>Miesian</p>
                        </div>
                    </li>
                    <!--End Single Brand Item-->
                    <!--Start Single Brand Item-->
                    <li class="single-brand-item wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <a href="#"><img src="images/brand/2.png" alt="Awesome Brand Image"></a>
                        <div class="overlay-content">
                            <p>Miesian</p>
                        </div>
                    </li>
                    <!--End Single Brand Item-->
                    <!--Start Single Brand Item-->
                    <li class="single-brand-item wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <a href="#"><img src="images/brand/3.png" alt="Awesome Brand Image"></a>
                        <div class="overlay-content">
                            <p>Miesian</p>
                        </div>
                    </li>
                    <!--End Single Brand Item-->
                    <!--Start Single Brand Item-->
                    <li class="single-brand-item wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <a href="#"><img src="images/brand/4.png" alt="Awesome Brand Image"></a>
                        <div class="overlay-content">
                            <p>Miesian</p>
                        </div>
                    </li>
                    <!--End Single Brand Item-->
                    <!--Start Single Brand Item-->
                    <li class="single-brand-item wow fadeInUp" data-wow-delay="800ms" data-wow-duration="1500ms">
                        <a href="#"><img src="images/brand/5.png" alt="Awesome Brand Image"></a>
                        <div class="overlay-content">
                            <p>Miesian</p>
                        </div>
                    </li>
                    <!--End Single Brand Item-->
                    <!--Start Single Brand Item-->
                    <li class="single-brand-item wow fadeInUp" data-wow-delay="800ms" data-wow-duration="1500ms">
                        <a href="#"><img src="images/brand/6.png" alt="Awesome Brand Image"></a>
                        <div class="overlay-content">
                            <p>Miesian</p>
                        </div>
                    </li>
                    <!--End Single Brand Item-->

                    <!--Start Single Brand Item-->
                    <li class="single-brand-item wow fadeInUp" data-wow-delay="800ms" data-wow-duration="1500ms">
                        <a href="#"><img src="images/brand/5.png" alt="Awesome Brand Image"></a>
                        <div class="overlay-content">
                            <p>Miesian</p>
                        </div>
                    </li>
                    <!--End Single Brand Item-->
                    <!--Start Single Brand Item-->
                    <li class="single-brand-item wow fadeInUp" data-wow-delay="800ms" data-wow-duration="1500ms">
                        <a href="#"><img src="images/brand/6.png" alt="Awesome Brand Image"></a>
                        <div class="overlay-content">
                            <p>Miesian</p>
                        </div>
                    </li>
                    <!--End Single Brand Item-->
                </ul>
            </div>
        </div>
    </div>
</section>
<!--End Brand area-->

@endsection
