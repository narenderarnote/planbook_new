@inject('monthView', 'App\Services\Month')

@php 

$selectedYear = auth()->user()->selectedYear()->first();
$visibleDay = collect($selectedYear->class_schedule)->where("is_class", "1")->pluck("text")->map(function($day){ return "day-". strtolower($day); })->all();

$weeksInMonth = $monthView->_weeksInMonth();

$classes = $monthView->getClasses();

@endphp
<style type="text/css">
   .month-view [data-day]{
      /*display: none !important;*/
   }
   .day-sunday [data-day="sunday"], .day-monday [data-day="monday"],
   .day-tuesday [data-day="tuesday"], .day-wednesday [data-day="wednesday"],
   .day-thursday [data-day="thursday"], .day-friday [data-day="friday"],
   .day-saturday [data-day="saturday"]{
      display: block !important;
   }
</style>
<div class="listtab-content tab-content" id="ActiveCalendar">
<!--Day content start here-->
		@php 
		$currentDate = $monthView->getDay(); 
		$currentDayName = date('l Y-m-d', strtotime($currentDate));
		@endphp
		<div class="daycontent tab-pane active" id="day">
			<div class="date">{{ $currentDayName  }}</div>
			@php	
		    $DayName = $monthView->getDay(); 
			$filtered = $classes->where('start_date', '<=' , $DayName)->where('end_date', '>=', $DayName)->where('user_id', '=' , Auth::user()->id )->all();
			@endphp
	@if(!empty($filtered))
	@foreach($filtered as $filter)
   
        @php
         $url = empty($filter->classlesson);
		 $dayFormat = date("l m/d/Y");
		 $weekDay = date('l', strtotime($currentDate));
		 
		 $hasClass = !collect(json_decode($filter->class_schedule))
						->where("text", $weekDay)
						->where("is_class" , "1")
						->isEmpty();
      @endphp
	  
	  @if($hasClass)
			<div class="languagearts daytab-content" style="background-color:{{ $filter['class_color'] }}; color:#fff;"> {{ $filter['class_name'] }} 
				<span class="icons">
					<ul>
					  <li><img src="/images/move-icon.png" class="move-icon"></li>
					  <li class="dropdown"><img src="/images/downarrow2.png" class="dropdown-toggle downarrow-icon" data-toggle="dropdown" aria-expanded="false">
						<ul class="dropdown-menu daycontentdropdown">
						  <div class="lessondropdown-header"> Lesson Action <span class="cross-icon"> <i class="fa fa-close" aria-hidden="true"></i></span></div>
						  <div class="lesondropdown-body">
							<ul>
							  <li> <i class="fa fa-pencil" aria-hidden="true"></i> Edit Lesson</li>
							</ul>
						  </div>
						</ul>
					  </li>
					</ul>
				</span> 
			</div>
		@endif
   @endforeach
   @endif
		</div>
		{!! $monthView->_createDayNavi() !!}
		<!--End Day View-->
</div>	