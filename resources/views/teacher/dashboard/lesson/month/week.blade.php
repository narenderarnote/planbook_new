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
		<!--Week Calendar View -->
		<div class="weekcontent tab-pane active in" id="week">
            <div class="week-data">
               <ul>
			   @php
			    $date = $monthView->getWeek();
				$ts = strtotime($date);
				$dow = date('w', $ts);
				$offset = $dow - 1;
				if ($offset < 0) {
					$offset = 6;
				}
				$ts = $ts - $offset*86400;
				@endphp
				@for ($i = 0; $i < 5; $i++, $ts += 86400)
				@php $weekDays = date("l m/d/Y", $ts); 
				@endphp
                  <li class="week-head">{{ $weekDays }}</li>
                @endfor
               </ul>
            </div>
			
			<div class="week-bodydata">
			<ul>
			@php
            $date = $monthView->getWeek();
			$ts = strtotime($date);
			$dow = date('w', $ts);
			$offset = $dow - 1;
			if ($offset < 0) {
				$offset = 6;
			}
			$ts = $ts - $offset*86400;
			@endphp
			@for ($i = 0; $i < 5; $i++, $ts += 86400)
			@php	
		    $daysName = date("Y-m-d", $ts); 
			$AllDays = date("l Y-m-d",strtotime("+$i days"));
			$filtered = $classes->where('start_date', '<=' , $daysName)->where('end_date', '>=', $daysName)->where('user_id', '=' , Auth::user()->id )->all();
			@endphp
            
                @if(!empty($filtered))    					
                  <li class="weektab-content">
				  @foreach($filtered as $filters)
					   
						  @php
							 $url = empty($filter->classlesson);
							 
							$weekDay = date("l", $ts);
							 
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
		 {!! $monthView->_createWeekNavi() !!}
		<!--End Week View-->
	</div>
	<!-- Add class Popup Starts Here -->
	<div class="d-render-popoup t-data-popup" id="dynamicRenderDiv" style="display:none;">
	 </div>
@push('js')
<script type="text/javascript">
   
</script>
@endpush