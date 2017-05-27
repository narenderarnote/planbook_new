
@php 
   $filtered = $classes->where('start_date', '<=' , $content['date'])->where('end_date', '>=', $content['date'])->where('user_id', '=' , Auth::user()->id )->all();
@endphp
@if(!empty($filtered))
<div class="cell-main-data">
   @foreach($filtered as $filter)
   
      @php
         $url = empty($filter->classlesson);
		 
		 $weekDay = date('l', strtotime($content['date']) );
		 
		 $hasClass = !collect(json_decode($filter->class_schedule))
						->where("text", $weekDay)
						->where("is_class" , "1")
						->isEmpty();
      @endphp
	  
	  @if($hasClass)
	<div class="lesson">
      <div class="lesson-heading" style="background-color:{{ $filter['class_color'] }}; color:#fff;" >
         <span class="lesson-name">{{ $filter['class_name'] }}</span>
         <span class="lesson-timing"> <!-- 7:45am-8:00am --> </span>

      </div>
	</div>  
	  @endif
   @endforeach
</div>
@endif