
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
		<div class="calendar-view container-fluid tab-pane active month-view" id="Month">
		   <div class="container-fluid {{ implode(' ', $visibleDay)}}" >
			  <div class="view-title">
				 <div class="header-title">{{ date('M Y',strtotime($monthView->getYear().'-'.$monthView->getMonth().'-1')) }}</div>
			  </div>
			  <div class="weeks-d">
				 <ul class="p-0 m-0 text-center">
					{!! $monthView->_createLabels() !!}
				 </ul>
			  </div>
			  <div class="calendar-data">

				 @for( $i=0; $i<$weeksInMonth; $i++ )
					<ul class="p-0 m-0">
					
					   @for($j=1;$j<=7;$j++)
						  @php $content = $monthView->_showDay($i*7+$j);@endphp
						  <li data-date="{{ $content['date'] }}" @if($content['date'] != "") data-day="{{ strtolower(date('l', strtotime($content['date']) )) }}" @endif>
						  <div class="dates text-right">{{ $content['day'] }}</div>
						  
						  @include("teacher.dashboard.lesson.show")
					   @endfor
					   </li>
					</ul>
				 @endfor
			  </div>
			  {!! $monthView->_createNavi() !!}
		   </div>
		</div>
		<!--Day content start here-->
		@php 
		$currentDate = date("l m/d/Y"); 
		@endphp
		<div class="daycontent tab-pane fade" id="day">
			<div class="date">{{ $currentDate  }}</div>
			@php	
		    $DayName = date("Y-m-d"); 
			$filtered = $classes->where('start_date', '<=' , $DayName)->where('end_date', '>=', $DayName)->where('user_id', '=' , Auth::user()->id )->all();
			@endphp
			@if(!empty($filtered))
				@foreach($filtered as $filter)
   
        @php
         $url = empty($filter->classlesson);
		 $dayFormat = date("l m/d/Y");
		 $weekDay = date('l', strtotime($DayName) );
		 
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
		<!--End Day View-->
		<!--Week Calendar View -->
		<div class="weekcontent tab-pane fade in" id="week">
            <div class="week-data">
               <ul>
			    @for($i=0;$i<=4;$i++)
				@php $weekDays = date("l m/d/Y",strtotime("+$i days")); 
				@endphp
                  <li class="week-head">{{ $weekDays }}</li>
                @endfor
               </ul>
            </div>
			
			<div class="week-bodydata">
			<ul>
            @for($j=0;$j<=4;$j++)   
			@php	
		    $daysName = date("Y-m-d",strtotime("+$j days")); 
			$AllDays = date("l Y-m-d",strtotime("+$j days"));
			$filtered = $classes->where('start_date', '<=' , $daysName)->where('end_date', '>=', $daysName)->where('user_id', '=' , Auth::user()->id )->all();
			@endphp
            
                @if(!empty($filtered))    					
                  <li class="weektab-content">
				  @foreach($filtered as $filters)
					   
						  @php
							 $url = empty($filter->classlesson);
							 
							 $weekDay = date('l', strtotime($daysName) );
							 
							 $hasClass = !collect(json_decode($filters->class_schedule))
							->where("text", $weekDay)
							->where("is_class" , "1")
							->isEmpty();
						@endphp 
						@if($hasClass)
                    <div class="languagearts week-tabcontentinner" style="background-color:{{ $filters['class_color'] }}; color:#fff; border-color: {{ $filters['class_color'] }};">
                      {{ $filters['class_name'] }}
					  <span class="week-icons">
                           <ul>
                              <li class="dropdown"><img src="/images/move-icon.png" class="move-icon dropdown-toggle"> </li>
                              <li class="dropdown">
                                 <img src="/images/downarrow2.png" class="downarrow-icon dropdown-toggle" data-toggle="dropdown">
                                 <ul class="dropdown-menu languagelessondropdown">
                                    <div class="lessondropdown-header"> Lesson Actions <span class="cross-icon"> <i class="fa fa-close" aria-hidden="true"></i></span></div>
                                    <div class="lesondropdown-body">
                                       <ul>
                                          <li> <i class="fa fa-pencil" aria-hidden="true"></i> Edit Lesson</li>
                                          <li> <i class="fa fa-arrows" aria-hidden="true"></i> Move Lesson</li>
                                          <li> <i class="fa fa-arrows" aria-hidden="true"></i> Copy</li>
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
				 </li>
			@endfor	  
            </ul>   
            </div>
         </div>
		<!--End Week View-->
	</div>
	<!-- Add class Popup Starts Here -->
	<div class="d-render-popoup t-data-popup" id="dynamicRenderDiv" style="display:none;">
	 </div>
@push('js')
<script type="text/javascript">
   
</script>
@endpush