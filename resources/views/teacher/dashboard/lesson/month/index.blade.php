
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
	<div class="listtab-content tab-content">
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
		<div class="daycontent tab-pane fade in" id="day">
			<div class="date"> Friday 05/26/2017</div>
			<div class="languagearts daytab-content">Language Arts 
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
			<div class="mathematics daytab-content">Mathematics 
				<span class="icons">
					<ul>
					  <li><img src="/images/move-icon.png" class="move-icon"></li>
					  <li><img src="/images/downarrow2.png" class="downarrow-icon"></li>
					</ul>
				</span> 
			</div>
			<div class="reading daytab-content">Reading 
				<span class="icons">
					<ul>
					  <li><img src="/images/move-icon.png" class="move-icon"></li>
					  <li><img src="/images/downarrow2.png" class="downarrow-icon"></li>
					</ul>
				</span> 
			</div>
			<div class="science daytab-content">Science 
				<span class="icons">
					<ul>
					  <li><img src="/images/move-icon.png" class="move-icon"></li>
					  <li><img src="/images/downarrow2.png" class="downarrow-icon"></li>
					</ul>
				</span> 
			</div>
			<div class="social-studies daytab-content">Social Studies 
				<span class="icons">
					<ul>
					  <li><img src="/images/move-icon.png" class="move-icon"></li>
					  <li><img src="/images/downarrow2.png" class="downarrow-icon"></li>
					</ul>
				</span> 
			</div>
			<div class="supermarket daytab-content">Supermarket 
				<span class="icons">
					<ul>
					  <li><img src="/images/move-icon.png" class="move-icon"></li>
					  <li><img src="/images/downarrow2.png" class="downarrow-icon"></li>
					</ul>
				</span> 
			</div>
			<div class="writing daytab-content">Writing 
				<span class="icons">
					<ul>
					  <li><img src="/images/move-icon.png" class="move-icon"></li>
					  <li><img src="/images/downarrow2.png" class="downarrow-icon"></li>
					</ul>
				</span> 
			</div>
		</div>
		<!--End Day View-->
		<!--Week Calendar View -->
		<div class="weekcontent tab-pane fade" id="week">
			@for($i=2;$i<=6;$i++)
				@php $weekDays = date("l m/d/Y",strtotime("+$i days")); 
				$daysName = date("l",strtotime("+$i days"))
				@endphp
				<div class="{{ strtolower($daysName) }}week">
					<div class="week-head">{{ $weekDays }}</div>
				</div>	
				
			@endfor	
			<div class="class="calendar-data">
			
				@for($i=2;$i<=6;$i++)
				@php $weekDays = date("l m/d/Y",strtotime("+$i days")); 
				$daysName = date("Y-m-d",strtotime("+$i days"));
				$filtered = $classes->where('start_date', '<=' , $daysName)->where('end_date', '>=', $daysName)->where('user_id', '=' , Auth::user()->id )->all();
   
					   @endphp
						 @foreach($filtered as $filters)
					   
						  @php
							 $url = empty($filter->classlesson);
							 
							 $weekDay = date('l', strtotime($weekDays) );
							 
							 $hasClass = !collect(json_decode($filters->class_schedule))
							->where("text", $weekDay)
							->where("is_class" , "1")
							->isEmpty();
						@endphp
				 @if($hasClass)		
				<li style="float:left; width:20%;">
					<div class="week-head">{{ $filters['class_name'] }}</div>
				</li>
				@endif				
				 @endforeach
			@endfor	
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