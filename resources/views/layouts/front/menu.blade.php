<div class="logo-nav">
    <div class="logo-nav-left animated wow zoomIn" data-wow-delay=".5s">
        <h1><a href="index.html">Best Store <span>Shop anywhere</span></a></h1>
    </div>
    <div class="logo-nav-left1">
        <nav class="navbar navbar-default">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header nav_2">
            <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div> 
        <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{route('home')}}" class="act">Home</a></li>	
                <!-- Mega Menu -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
                   <!-- <ul class="dropdown-menu multi-column columns-3"> -->
                       <ul class="dropdown-menu">
                        <div class="row">
                            <div class="col-sm-12">
                                <ul class="multi-column-dropdown">
                                    <h6 class="text-center">Categories</h6>
                                    @foreach ($categories as $category)
                                        <li class="text-center"><a href="{{route('front.product', $category->id)}}">{{ $category->name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </ul>
                </li>
                <li><a href="{{route('about')}}">About Us</a></li>
                <li><a href="{{route('mail')}}">Mail Us</a></li>
            </ul>
        </div>
        </nav>
    </div>
    <div class="logo-nav-right">
        <div class="search-box">
            <div id="sb-search" class="sb-search">
                <form>
                    <input class="sb-search-input" placeholder="Enter your search term..." type="search" id="search">
                    <input class="sb-search-submit" type="submit" value="">
                    <span class="sb-icon-search"> </span>
                </form>
            </div>
        </div>
            <!-- search-scripts -->
            <script src="{{asset('front/js/classie.js')}}"></script>
            <script src="{{asset('front/js/uisearch.js')}}"></script>
                <script>
                    new UISearch( document.getElementById( 'sb-search' ) );
                </script>
            <!-- //search-scripts -->
    </div>
    <div class="header-right">
        <div class="cart box_1">
            <a href="{{ route('cart.index') }}">
                <h3> <div >
                    <span>${{ Cart::subtotal() }}</span> ({{ Cart::content()->count() }} items)</div>
                    <img src="{{asset('images/front/bag.png')}}" alt="" />
                </h3>
            </a>
            <div class="clearfix"> </div>
        </div>	
    </div>
    <div class="clearfix"> </div>
</div>