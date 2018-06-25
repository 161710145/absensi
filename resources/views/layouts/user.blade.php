<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Member Absensi</title>
	<link href="/assets/user/css/style.css" rel="stylesheet" media="all">
</head>
<body>
	<div id="header">
		<img src="/assets/user/images/interface.png" width="147" height="80"> </a>
	</div>
	<center>
<h5 class="name">
  {{ Auth::user()->name }} <span class="caret"></span><br>
  <span class="email">{{ Auth::user()->email }}</span>
      </div>
      </div>
                                            
      <div class="account-dropdown__footer">
           <a href="{{ route('logout') }}"
      onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
       <i class="zmdi zmdi-power">Logout</a></div></i>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
         {{ csrf_field() }}
         </form> </div></a></div></center></h5></center>
                                        
	</div>
	<!-- MENU SIDEBAR-->
        @include('partials.sidebar3')
        <!-- END MENU SIDEBAR-->

			<!-- MAIN CONTENT-->
            <div class="main-content">
            @yield('content')
        </div>
	
</body>
</html>