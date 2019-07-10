<div class="site-mobile-menu site-navbar-target">
  <div class="site-mobile-menu-header">
    <div class="site-mobile-menu-close mt-3">
      <span class="icon-close2 js-menu-toggle"></span>
    </div>
  </div>
  <div class="site-mobile-menu-body"></div>
</div>

<header class="site-navbar py-3 js-site-navbar site-navbar-target" role="banner" id="site-navbar">

  <div class="container">
    <div class="row align-items-center">

      <div class="col-11 col-xl-2 site-logo">
        <h1 class="mb-0"><a href="{{ route('index') }}" class="text-white h2 mb-0">麦店网</a></h1>
      </div>
      <div class="col-12 col-md-10 d-none d-xl-block">
        <nav class="site-navigation position-relative text-right" role="navigation">

          <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
            <li><a href="{{ route('tmallstore') }}" class="nav-link">天猫商城</a></li>
            <li><a href="{{ route('tmallnew') }}" class="nav-link">天猫新店</a></li>
            <li><a href="{{ route('otherstore') }}" class="nav-link">其他商城</a></li>
            <li><a href="{{ route('sellstore') }}" class="nav-link">出售店铺</a></li>
            <!-- <li><a href="evaStore.html" class="nav-link">网站估价</a></li> -->
            <li><a href="" data-toggle="modal" data-target="#login" class="nav-link">登陆</a></li>
          </ul>
        </nav>
      </div>


      <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu h3"></span></a></div>

    </div>

  </div>
  </div>

</header>

@if(Route::currentRouteName() != 'index')
<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url({{ asset('images/hero_bg_1.jpg') }});" data-aos="fade" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row align-items-center justify-content-center text-center">

    </div>
  </div>
</div>

@endif



</div>