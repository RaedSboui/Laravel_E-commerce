<div class="header-grid">
    <div class="header-grid-left animated wow slideInLeft" data-wow-delay=".5s">
        <ul>
            <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">@example.com</a></li>
            <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 892</li>
            @auth
                <ul class=" navbar-right">
                    <li class="nav-item dropdown open" style="padding-left: 15px;">
                        <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                            <img src="" alt="">{{ Auth::user()->name }}   <!-- User image -->
                        </a>
                        <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                                    <i class="fa fa-sign-out pull-right"></i> LOG OUT
                                </a>
                            </form>
                        </div>
                    </li>
                </ul>
            @else
                <li><i class="glyphicon glyphicon-log-in" aria-hidden="true"></i><a href="{{ route('login') }}">Login</a></li>
                <li><i class="glyphicon glyphicon-book" aria-hidden="true"></i><a href="{{ route('register') }}">Register</a></li>
            @endauth
            
        </ul>
    </div>
    <div class="header-grid-right animated wow slideInRight" data-wow-delay=".5s">
        <ul class="social-icons">
            <li><a href="#" class="facebook"></a></li>
            <li><a href="#" class="twitter"></a></li>
            <li><a href="#" class="g"></a></li>
            <li><a href="#" class="instagram"></a></li>
        </ul>
    </div>
    <div class="clearfix"> </div>
</div>