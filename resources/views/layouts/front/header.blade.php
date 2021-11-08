<div class="header-grid">
    <div class="header-grid-left animated wow slideInLeft" data-wow-delay=".5s">
        <ul>
            <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">@example.com</a></li>
            <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 892</li>
            @auth
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}  <b class="caret"></b></a>
                   <ul class="dropdown-menu">
                    <div class="row">
                        <div class="col-sm-12">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                                    <i class="glyphicon glyphicon-log-out pull-right" aria-hidden="true"></i> LOG OUT
                                    
                                </a>
                            </form>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </ul>
            </li>
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