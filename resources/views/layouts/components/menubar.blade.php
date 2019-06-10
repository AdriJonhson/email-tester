<nav class="navbar px-navbar">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ route('home') }}">{{ env('APP_NAME') }}</a>
    </div>

    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#px-navbar-collapse" aria-expanded="false"><i class="navbar-toggle-icon"></i></button>

    <div class="collapse navbar-collapse" id="px-navbar-collapse">
        {{--<ul class="nav navbar-nav">--}}
            {{--<li><a href="#">Link</a></li>--}}
        {{--</ul>--}}

        <ul class="nav navbar-nav navbar-right exclude-from-tab-history">

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <img src="{{ Auth::user()->avatar_url }}" alt="" class="px-navbar-image">
                    <span class="hidden-md">{{ Auth::user()->name }}</span>
                </a>
                <ul class="dropdown-menu">
                    {{--<li><a href="pages-profile-v2.html"><span class="label label-warning pull-xs-right"><i class="fa fa-asterisk"></i></span>Profile</a></li>--}}
                    {{--<li class="divider"></li>--}}
                    <li>
                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="dropdown-icon fa fa-power-off"></i>&nbsp;&nbsp;{{ __('Logout') }}
                        </a>
                    </li>
                </ul>
            </li>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>

            {{--<li class="dropdown">--}}
                {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">--}}
                    {{--Dropdown--}}
                {{--</a>--}}
                {{--<ul class="dropdown-menu">--}}
                    {{--<li><a href="#">First item</a></li>--}}
                    {{--<li><a href="#">Second item</a></li>--}}
                    {{--<li class="divider"></li>--}}
                    {{--<li><a href="#">Third item</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
        </ul>
    </div>
</nav>
