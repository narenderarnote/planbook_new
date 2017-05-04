
@extends('layouts.teacher')

@section('content')

<div id="dynamicCalendarContent" >
</div>

@endsection

@push('js')
<script type="text/javascript">

//$( document ).ready() block.

$(document).ready(function() {

	$("#dynamicCalendarContent").load("/teacher/dashboard/showCalendar",function(){

	    //$('.datepicker').datepicker({format: 'dd/mm/yyyy',});
	      

	});

});

</script>
@endpush