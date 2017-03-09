<?php $sximoconfig  = config('sximo');?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title> {{ $pageTitle}} | {{ $sximoconfig['cnf_appname'] }} </title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Bootstrap 3 template for corporate business" />
<link rel="shortcut icon" href="{{ asset('favicon.ico')}}" type="image/x-icon">
<!-- css -->
<link href="{{ asset('frontend/sailor/css/bootstrap.min.css') }}" rel="stylesheet" />
<link href="{{ asset('frontend/sailor/plugins/flexslider/flexslider.css') }}" rel="stylesheet" media="screen" /> 
<link href="{{ asset('frontend/sailor/css/cubeportfolio.min.css') }}" rel="stylesheet" />
<link href="{{ asset('frontend/sailor/css/style.css') }}" rel="stylesheet" />

<!-- Theme skin -->
<link id="t-colors" href="{{ asset('frontend/sailor/skins/green.css') }}" rel="stylesheet" />


<!-- =======================================================
    Theme Name: Sailor
    Theme URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
======================================================= -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('frontend/sailor/') }}/js/jquery.min.js"></script>
<script src="{{ asset('frontend/sailor/') }}/js/modernizr.custom.js"></script>
<script src="{{ asset('frontend/sailor/') }}/js/jquery.easing.1.3.js"></script>
<script src="{{ asset('frontend/sailor/') }}/js/bootstrap.min.js"></script>
<script src="{{ asset('frontend/sailor/') }}/plugins/flexslider/jquery.flexslider-min.js"></script> 
<script src="{{ asset('frontend/sailor/') }}/plugins/flexslider/flexslider.config.js"></script>
<script src="{{ asset('frontend/sailor/') }}/js/jquery.appear.js"></script>
<script src="{{ asset('frontend/sailor/') }}/js/stellar.js"></script>
<script src="{{ asset('frontend/sailor/') }}/js/classie.js"></script>
<script src="{{ asset('frontend/sailor/') }}/js/uisearch.js"></script>
<script src="{{ asset('frontend/sailor/') }}/js/jquery.cubeportfolio.min.js"></script>
<script src="{{ asset('frontend/sailor/') }}/js/google-code-prettify/prettify.js"></script>
<script src="{{ asset('frontend/sailor/') }}/js/animate.js"></script>
<script src="{{ asset('frontend/sailor/') }}/js/custom.js"></script>
<script type="text/javascript" src="{{ asset('sximo/js/plugins/parsley.js') }}"></script>
<script type="text/javascript" src="{{ asset('sximo/js/plugins/jquery.jCombo.min.js') }}"></script>
</head>
<body>

<div id="wrapper">
  <!-- start header -->
  <header>
      <div class="top">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <ul class="topleft-info">
                <li><i class="fa fa-phone"></i> Select Language : </li>
              @if($sximoconfig['cnf_multilang'] ==1)    

              <?php 
              $flag ='en';
              $langname = 'English'; 
              foreach(SiteHelpers::langOption() as $lang):
                if($lang['folder'] == session('lang') or $lang['folder'] == 'CNF_LANG') {
                  $flag = $lang['folder'];
                  $langname = $lang['name']; 
                }
              endforeach;?>
            <li> <img class="flag-lang" src="{{ asset('sximo/images/flags/'.$flag.'.png') }}" width="16" height="11" alt="lang" /> {{ $langname }} 
              </li>

                @foreach(SiteHelpers::langOption() as $lang)
                <li><a tabindex="-1" href="{{ url('home/lang/'.$lang['folder'])}}"><img class="flag-lang" src="{{ asset('sximo/images/flags/'.$lang['folder'].'.png') }}" width="16" height="11" alt="lang" /> </a></li>
                @endforeach
                
            
            </li>
            @endif

              </ul>
            </div>
            <div class="col-md-6">
            <div id="sb-search" class="sb-search">
              <form>
                <input class="sb-search-input" placeholder="Enter your search term..." type="text" value="" name="search" id="search">
                <input class="sb-search-submit" type="submit" value="">
                <span class="sb-icon-search" title="Click to start searching"></span>
              </form>
            </div>


            </div>
          </div>
        </div>
      </div>  
      
         @include('layouts/sailor/menu')
  </header>
  <!-- end header -->

  <!-- Start Content Here -->
  <section id="main-content" style="min-height: 300px;">

      @include($pages)

  </section>
  <!-- End Content Here -->



  


  <footer>
  <div class="container">
    <div class="row">
      <div class="col-sm-3 col-lg-3">
        <div class="widget">
          <h4>Get in touch with us</h4>
          <address>
          <strong>Mango company Inc</strong><br>
           Mango suite room V124, DB 91<br>
           Someplace 71745 Earth </address>
          <p>
            <i class="icon-phone"></i> (123) 456-7890 - (123) 555-7891 <br>
            <i class="icon-envelope-alt"></i> email@domainname.com
          </p>
        </div>
      </div>
      <div class="col-sm-3 col-lg-3">
        <div class="widget">
          <h4>Information</h4>
          <ul class="link-list">
            <li><a href="#">Press release</a></li>
            <li><a href="#">Terms and conditions</a></li>
            <li><a href="#">Privacy policy</a></li>
            <li><a href="#">Career center</a></li>
            <li><a href="#">Contact us</a></li>
          </ul>
        </div>
        
      </div>
      <div class="col-sm-3 col-lg-3">
        <div class="widget">
          <h4>Pages</h4>
          <ul class="link-list">
            <li><a href="#">Press release</a></li>
            <li><a href="#">Terms and conditions</a></li>
            <li><a href="#">Privacy policy</a></li>
            <li><a href="#">Career center</a></li>
            <li><a href="#">Contact us</a></li>
          </ul>
        </div>
      </div>
      <div class="col-sm-3 col-lg-3">
        <div class="widget">
          <h4>Newsletter</h4>
          <p>Fill your email and sign up for monthly newsletter to keep updated</p>
                    <div class="form-group multiple-form-group input-group">
                        <input type="email" name="email" class="form-control">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-theme btn-add">Subscribe</button>
                        </span>
                    </div>
        </div>
      </div>
    </div>
  </div>
  <div id="sub-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="copyright">
            <p>&copy; <?php echo $sximoconfig['cnf_comname'];?> - All Right Reserved</p>
                        <div class="credits">
                            <!-- 
                                All the links in the footer should remain intact. 
                                You can delete the links only if you purchased the pro version.
                                Licensing information: https://bootstrapmade.com/license/
                                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Sailor
                            -->
                            <a href="https://bootstrapmade.com/free-business-bootstrap-themes-website-templates/">Business Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                        </div>
          </div>
        </div>
        <div class="col-lg-6">
          <ul class="social-network">
            <li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
            <li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  </footer>

</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>






</body>
</html>
