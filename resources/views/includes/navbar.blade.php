<div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ url('') }}"><img src="{{ url('img/ITS Logo.png') }}" alt="ITS Logo goes here">
                    </a>
                    <div class="navbar-header navbar-right">
                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse collapse" id="navbar-main">
                        <ul class="nav navbar-nav ">
                            @if (Auth::guest())
                                <li><a href="{{ route('login') }}">Login</a></li>
                                <li><a href="{{ route('register') }}">Register</a></li>
                                <li><a href="{{ url('/faq') }}">FAQ</a></li>
                            @else
                                <li class="dropdown">
                                    <a>{{ Auth::user()->name }}</a>
                                </li>
                                <li><a href="{{ url('/inquiries/create') }}">Make enquiry</a></li>
                                <li><a href="{{ url('/inquiries/index') }}">Track Progress</a></li>
                                <li><a href="{{ url('/faq') }}">FAQ</a></li>

                            @endif
                        </ul>
                        @if (!Auth::guest())
                            <ul class="nav navbar-nav pull-right">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>