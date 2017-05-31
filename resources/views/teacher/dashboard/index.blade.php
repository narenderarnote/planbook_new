@extends('layouts.teacher')

@section('content')
@php $url = request()->view ; @endphp
<div id="dynamicCalendarContent" >

</div>

@endsection

@push('js')
<script type="text/javascript">

//$( document ).ready() block.
$(document).ready(function() {
	var url = '@php echo $url @endphp' ;
	if(url == 'week'){
	$("#dynamicCalendarContent").load("/teacher/dashboard/weekCalendar");
		$(".get-calendar").click(function(e){

		$("#dynamicCalendarContent").load("/teacher/dashboard/weekCalendar"+$(this).attr('href') ,function(){

		    //$('.datepicker').datepicker({format: 'dd/mm/yyyy',});
		});

		e.preventDefault();
	});	
	}
	else if(url == 'day'){
		$("#dynamicCalendarContent").load("/teacher/dashboard/dayCalendar");
		$(".get-calendar").click(function(e){
		$("#dynamicCalendarContent").load("/teacher/dashboard/dayCalendar"+$(this).attr('href') ,function(){
         alert(url);
		    //$('.datepicker').datepicker({format: 'dd/mm/yyyy',});
		});

		e.preventDefault();
	});
	}
	else{
		$("#dynamicCalendarContent").load("/teacher/dashboard/showCalendar");
		$(".get-calendar").click(function(e){

		$("#dynamicCalendarContent").load("/teacher/dashboard/showCalendar"+$(this).attr('href') ,function(){

		    //$('.datepicker').datepicker({format: 'dd/mm/yyyy',});
		});

		e.preventDefault();
	});
	}
	
    $('.calBtn').click(function() {
      /*var currentActive = $("#ActiveCalendar").find(".active").attr('id');	  
	  var href = $(this).attr('href');
      $('#'+currentActive).removeClass('active').addClass('fade');	  
	  $(href).removeClass('fade');
	  $(href).addClass('active');*/
	});
	
});

</script>
@endpush