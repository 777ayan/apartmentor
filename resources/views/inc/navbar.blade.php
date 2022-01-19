<style>

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;

}

li {
  float: right;
}

li a {
  display: block;
  color: black;
  text-align: center;
  padding: 25px 16px;
  text-decoration: none;
}


</style>

<ul>
    <li style="float: left;">
        <a href="{{ route('home') }}"><h2>APARTMENTOR</h2></a>
    </li>

    <li style="margin:5px 0px">
        <a href="{{route('contact.index')}}"><h3>CONTACT</h3></a>
    </li>
    <li style="margin:5px 0px">
        <a href="{{route('blogs.index')}}"><h3>BLOGS</h3></a>
    </li>

    @guest
        <li style="margin:5px 0px"><a href="{{ route('register') }}"><h3>REGISTER</h3></a></li>
        <li style="margin:5px 0px"><a href="{{ route('login') }}"><h3>LOGIN</h3></a></li>
    @else

        <ul>
            <li style="margin:5px 0px">
                @if(Auth::user()->role_id == 1)
                    <a href="{{route('profile.index')}}" ><h3>
                        PROFILE
                    </h3></a>
                @elseif(Auth::user()->role_id == 2)
                    <a href="{{route('profile.index')}}"><h3>
                        PROFILE
                    </h3></a>
                    
                @elseif(Auth::user()->role_id == 3)
                    <a href="{{route('profile.index')}}" ><h3>
                        PROFILE
                    </h3></a>
                @endif
            </li>
            <li style="margin:5px 0px">
            @if(Auth::user()->role_id == 1)
            <a href="{{ route('admindashboard.index') }}" ><h3>DASHBOARD</h3></a>
            @elseif(Auth::user()->role_id == 2)
            <a href="{{ route('agentdashboard.index') }}" ><h3> DASHBOARD</h3></a>
            @elseif(Auth::user()->role_id == 3)
            <a href="{{ route('userdashboard.index') }}" ><h3>DASHBOARD</h3></a>
            @endif
            </li>
            <li style="margin:5px 0px">
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                   <h3> {{ __('LOGOUT') }}</h3>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                </form>
            </li>
        </ul>

    @endguest
</ul>
</nav>