<!DOCTYPE html>
<html lang="en">


<!--   06:37:19 GMT -->


@include('front-end.partials.head')


<body>
    <div class="boxed_wrapper">

        {{-- <div class="preloader"></div> --}}

        <!-- Start Top Bar style1 -->
        <!-- <section class="top-bar-style1">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="top-style1 clearfix">
                            <p>Crystalo Inspiring Interiors, Basesd On United States... <a href="#">Get Approximate Estimation.</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- End Top Bar style1 -->

        <!--Start Main Header-->

        @include('front-end.partials.header')

        <!--End Main Header-->

            @yield('content')


        @include('front-end.partials.footer')


    </div>


    <div class="scroll-to-top-style2 scroll-to-target" data-target="html">
        <span class="fa fa-angle-up"></span>
    </div>



        @include('front-end.partials.js')





</body>


<!--   06:40:40 GMT -->
</html>
