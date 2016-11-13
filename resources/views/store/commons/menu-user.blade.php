@if (Auth::check())
  <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
      <i class="fa fa-user"></i> {{ Auth::user()->user }} <span class="caret"></span>
    </a>
    <ul>
      <li><a href="{{ route('logout') }}">logout</a></li>
    </ul>
  </li>
@else
  <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
      <i class="fa fa-user"></i><span class="caret"></span>
    </a>
    <ul>
      <li><a href="{{ route('login-get') }}">login</a></li>
    </ul>
  </li>
@endif
