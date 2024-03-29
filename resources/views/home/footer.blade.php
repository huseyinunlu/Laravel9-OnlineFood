<footer id="footer">
    <div class="container">
        <div class="main-footer">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <img src="img/header-logo.png" alt="">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed.
                    </p>
                </div>

                <div class="col-sm-6 col-md-3">
                    <h5>Quick Links</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="footer-links padd">
                                <li><a href="#">Home</a>
                                </li>
                                <li><a href="#">Menu Card</a>
                                </li>
                                <li><a href="#">reservation</a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-md-6">
                            <ul class="footer-links">
                                <li><a href="#">about us</a>
                                </li>
                                <li><a href="#">news & events</a>
                                </li>
                                <li><a href="#">contact us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3">
                    <h5>Latest Tweets
                        <span><i class="fa fa-chevron-left"></i>  <i class="fa fa-chevron-right"></i>
								</span>
                    </h5>

                    <p><a href="#">takeaway:</a> Take a (Photo) Tour of #Envato's #Melbourne Headquarters (...)
                        <br>
                        <span>7 hours ago</span>
                    </p>
                </div>

                <div class="col-sm-6 col-md-3">
                    <h5>Newsletter</h5>
                    <p>Sign up for our newsletter!</p>
                    <div class="footer-subscribe">
                        <form>
                            <input type="Email" placeholder="Email address...">
                            <button type="submit" value=""><i class="fa fa-plus-circle-o"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-copyright">
        <div class="container">
            <p>Copyright 2014 © TakeAway. All rights reserved. Powered by <a href="#">UOUapps</a>.</p>
            <ul class="footer-social">
                <li><a href="#"><i class="fa fa-facebook-square"></i></a>
                </li>
                <li><a href="#"><i class="fa fa-twitter-square"></i></a>
                </li>
                <li><a href="#"><i class="fa fa-google-plus-square"></i></a>
                </li>
                <li><a href="#"><i class="fa fa-linkedin-square"></i></a>
                </li>
                <li><a href="#"><i class="fa fa-pinterest-square"></i></a>
                </li>
            </ul>
            <!-- end .footer-social -->
        </div>
    </div>
</footer>
<!-- CDN jQuery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Local jQuery -->
<script>
    window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')
</script>
<script src="{{asset('assets')}}/js/masterslider/masterslider.min.js"></script>
<script src="{{asset('assets')}}/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>
<script src="{{asset('assets')}}/js/jquery.magnific-popup.min.js"></script>
<script src="{{asset('assets')}}/js/owl.carousel.js"></script>
<script src="{{asset('assets')}}/js/bootstrap.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="{{asset('assets')}}/js/jquery.ui.map.js"></script>
<script src="{{asset('assets')}}/js/scripts.js"></script>

<script>

    var slider = new MasterSlider();
    slider.setup('masterslider', {
        width: 1140,
        height: 500,
        space: 5,
        fullwidth: true,
        speed: 25,
        view: 'flow',
        centerControls: false
    });
    slider.control('bullets', {
        autohide: false
    });


</script>
