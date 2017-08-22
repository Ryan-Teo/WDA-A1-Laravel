<div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ Request::root() }}"><img src="{{ url('img/ITS Logo.png') }}" alt="ITS Logo goes here">
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
                            <li><a href="{{ url('/users/create') }}">Create Account</a></li>
                            <li><a href="{{ url('/inquiries/create') }}">Send enquiry</a></li>
                            <li><a href="{{ url('/inquiries/index') }}">Track Progress</a></li>
                            <li><a href="{{ url('/faq') }}">FAQ</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>


</div>