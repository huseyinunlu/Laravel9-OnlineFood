<!-- resources/views/child.blade.php -->

@extends('layouts.frontbase')

@section('title', 'Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')

<div class="container">
    <div class="call-to-action-section">
        <div class="css-table-cell">
            <div class="icon">
                <img src="{{asset('assets')}}/img/content/call-to-action-icon1.png" alt="">
            </div>
        </div>
        <div class="text css-table">
            <div class="css-table-cell">
                <h4>Purchase TakeAway</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi..</p>
            </div>

            <div class="css-table-cell">
                <a href="#" class="btn btn-default-red  pad-bottom"><i class="fa fa-file-text-o"></i> Read  More</a>
            </div>

            <div class="css-table-cell">
                <a href="#" class="btn btn-default-red-inverse pad-top"><i class="fa fa-shopping-cart"></i> Purchase Now!</a>
            </div>
        </div>
    </div>
    <!-- end .call-to-action-section -->
</div>
<div class="category-boxes-icons">
    <div class=" container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                <div class="category-boxes-item">
                    <figure>
                        <img src="{{asset('assets')}}/img/content/starter.jpg">
                        <h4>Starters</h4>
                        <figcaption> <a href="#" class="btn btn-default-white"><i class="fa fa-file-text-o"></i> Read  More</a>
                        </figcaption>
                    </figure>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12  text-center">
                <div class="category-boxes-item">
                    <figure>
                        <img src="{{asset('assets')}}/img/content/main-dish.jpg">
                        <h4>Main Dishes</h4>
                        <figcaption><a href="#" class="btn btn-default-white"><i class="fa fa-file-text-o"></i> Read  More</a>
                        </figcaption>
                    </figure>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                <div class="category-boxes-item">
                    <figure>
                        <img src="{{asset('assets')}}/img/content/desserts.jpg">
                        <h4>Desserts</h4>
                        <figcaption> <a href="#" class="btn btn-default-white"><i class="fa fa-file-text-o"></i> Read  More</a>
                        </figcaption>
                    </figure>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                <div class="category-boxes-item">
                    <figure>
                        <img class="img-responsive" src="{{asset('assets')}}/img/content/drinks.jpg">
                        <h4>Drinks</h4>
                        <figcaption> <a href="#" class="btn btn-default-white"><i class="fa fa-file-text-o"></i> Read  More</a>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
        <!-- end .row -->
    </div>
    <!-- end .category-boxes-icons -->
</div>
<!-- star.chef-welcome -->
<div class="chef-welcome">
    <div class="container">
        <h1>Welcome</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam.</p>
        <a href="#" class="btn btn-default-red"><i class="fa fa-file-text-o"></i> Read  More</a>
    </div>
    <!-- end .container -->
</div>
<!--end .chef-welcome-->

<!--start small-slide section -->
<div id="sm-slide-section">
    <div class="container">
        <div class="slide-heading text-center">
            <h4>Our Clients Say</h4>
        </div>
        <!--end .clients heading-->
        <div id="slide-content" class="owl-carousel">
            <div class="item">
                <img src="{{asset('assets')}}/img/content/sm-slide-img1.jpg" alt="img-1">
                <div class="details">
                    <h5><a href="#">jane doe</a>
                    </h5>
                    <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-star"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-star"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-star"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-star"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-star"></i></a>
                        </li>
                    </ul>
                    <p>Absolutely delicious! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</p>
                </div>
            </div>
            <!-- end item class div-->

            <div class="item">
                <img src="{{asset('assets')}}/img/content/sm-slide-img-2.jpg" alt="img-2">
                <div class="details">
                    <h5><a href="#">chrich woods</a>
                    </h5>
                    <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-star"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-star"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-star"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-star"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-star"></i></a>
                        </li>
                    </ul>
                    <p>Absolutely delicious! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</p>
                </div>
            </div>
            <!-- end item class div-->

            <div class="item">
                <img src="{{asset('assets')}}/img/content/sm-slide-img1.jpg" alt="img-1">
                <div class="details">
                    <h5><a href="#">jane doe</a>
                    </h5>
                    <ul class="list-unstyled list-inline">
                        <li><a href="#"><i class="fa fa-star"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-star"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-star"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-star"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-star"></i></a>
                        </li>
                    </ul>
                    <p>Absolutely delicious! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</p>
                </div>
            </div>
            <!-- end item class div-->

            <div class="item">
                <img src="{{asset('assets')}}/img/content/sm-slide-img-2.jpg" alt="img-2">
                <div class="details">
                    <h5><a href="#">chrich woods</a>
                    </h5>
                    <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-star"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-star"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-star"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-star"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-star"></i></a>
                        </li>
                    </ul>
                    <p>Absolutely delicious! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</p>
                </div>
            </div>
            <!-- end item class div-->

            <div class="item">
                <img src="{{asset('assets')}}/img/content/sm-slide-img1.jpg" alt="img-1">
                <div class="details">
                    <h5><a href="#">jane doe</a>
                    </h5>
                    <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-star"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-star"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-star"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-star"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-star"></i></a>
                        </li>
                    </ul>
                    <p>Absolutely delicious! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</p>
                </div>
            </div>
            <!-- end item class div-->

            <div class="item">
                <img src="{{asset('assets')}}/img/content/sm-slide-img-2.jpg" alt="img-2">
                <div class="details">
                    <h5><a href="#">chrich woods</a>
                    </h5>
                    <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-star"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-star"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-star"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-star"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-star"></i></a>
                        </li>
                    </ul>
                    <p>Absolutely delicious! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</p>
                </div>
            </div>
            <!-- end item class div-->
        </div>
        <!-- end i.slide-content -->
    </div>
    <!-- end .container-->
</div>
<!-- end .sm-slide-section-->

<!--Start blog feed section-->
<div class="latest-from-blog text-center">
    <div class="container">
        <h4>Latest From the Blog</h4>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="blog-latest">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <img class="" src="{{asset('assets')}}/img/content/blog-post-1.jpg" alt="blog-image">
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <h5><a href="#">Post Title Goes Here</a>
                            </h5>
                            <p><i class="fa fa-clock-o"></i>
                                <span class="date">27.6.2014</span>at
                                <span class="time">17.33</span>
                            </p>
                            <p class="bl-sort">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <a href="#" class="btn btn-default-red"><i class="fa fa-file-text-o"></i> Read  More</a>
                        </div>
                        <!--end .blog-details-->
                    </div>
                    <!--end .row-->
                </div>
                <!--end .blog-latest -->
            </div>
            <!--end grid layout-->

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="blog-latest">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <img class="" src="{{asset('assets')}}/img/content/blog-post-2.jpg" alt="blog-image">
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <h5><a href="#">Post Title Goes Here</a>
                            </h5>
                            <p><i class="fa fa-clock-o"></i>
                                <span class="date">27.6.2014</span>at
                                <span class="time">17.33</span>
                            </p>
                            <p class="bl-sort">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <a href="#" class="btn btn-default-red"><i class="fa fa-file-text-o"></i> Read  More</a>
                        </div>
                        <!--end .blog-details-->
                    </div>
                    <!--end .row-->
                </div>
                <!--end .blog-latest -->
            </div>
            <!--end grid layout-->

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="blog-latest">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <img class="" src="{{asset('assets')}}/img/content/blog-post-3.jpg" alt="blog-image">
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <h5><a href="#">Post Title Goes Here</a>
                            </h5>
                            <p><i class="fa fa-clock-o"></i>
                                <span class="date">27.6.2014</span>at
                                <span class="time">17.33</span>
                            </p>
                            <p class="bl-sort">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <a href="#" class="btn btn-default-red"><i class="fa fa-file-text-o"></i> Read  More</a>
                        </div>
                        <!--end .blog-details-->
                    </div>
                    <!--end .row-->
                </div>
                <!--end .blog-latest -->
            </div>
            <!--end grid layout-->

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="blog-latest">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <img class="" src="{{asset('assets')}}/img/content/blog-post-4.jpg" alt="blog-image">
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <h5><a href="#">Post Title Goes Here</a>
                            </h5>
                            <p><i class="fa fa-clock-o"></i>
                                <span class="date">27.6.2014</span>at
                                <span class="time">17.33</span>
                            </p>
                            <p class="bl-sort">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <a href="#" class="btn btn-default-red"><i class="fa fa-file-text-o"></i> Read  More</a>
                        </div>
                        <!--end .blog-details-->
                    </div>
                    <!--end .row-->
                </div>
                <!--end .blog-latest -->
            </div>
            <!--end grid layout-->
        </div>
        <!--end .row main-->
        <!-- read older button -->
        <div class="read-older">
            <a href="#" class="btn btn-default-red"><i class="fa fa-file-text-o"></i> Read Older Entries</a>
        </div>
    </div>
    <!--end container-->
</div>
<!--end .latest-from-blog-->


@endsection
