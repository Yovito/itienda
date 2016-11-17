@if (Auth::check())
  <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
      <i class="fa fa-user"></i> {{ Auth::user()->user }} <span class="caret"></span>
    </a>
    <ul class="dropdown-menu" role="menu">
      <li><a  href="{{ url('/logout') }}"
              onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">logout</a>
           <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
               {{ csrf_field() }}
           </form>
      </li>
    </ul>
  </li>
@else
  <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
      <i class="fa fa-user"></i><span class="caret"></span>
    </a>
    <ul class="dropdown-menu" role="menu">
      <li><a href="{{ url('/login') }}">login</a></li>
      <li><a href="{{ url('/register') }}">Register</a></li>
    </ul>
  </li>
@endif
