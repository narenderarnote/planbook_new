<!DOCTYPE html>
<html lang="en">
  @include('teacher.common.head')
  <body>

	@if(request()->route()->getName() == "teacher.dashboard.index")
	 @include('teacher.common.dashboardHeader')

	  	@else

	  	@include('teacher.common.header')

	  @endif


		

		@yield('content')

		@include('teacher.common.footer')
  </body>
</html>
