<div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a href="{{ Request::root() }}" class="navbar-brand">IT Online Support</a>
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">

            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes">Menu <span class="caret"></span></a>
                    <ul class="dropdown-menu" aria-labelledby="themes">
                        <li><a href="{{ url('/inquiries/create') }}">Send enquiry</a></li>
                        <li><a href="#">Track Progress</a></li>
                        <li class="divider"></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ url('/inquiries/create') }}" target="_blank">Feedback</a></li>
            </ul>

        </div>

    </div>
</div>