
@inject('monthView', 'App\Services\Month')

@php 

$selectedYear = auth()->user()->selectedYear()->first();
$visibleDay = collect($selectedYear->class_schedule)->where("is_class", "1")->pluck("text")->map(function($day){ return "day-". strtolower($day); })->all();

$weeksInMonth = $monthView->_weeksInMonth();

$classes = $monthView->getClasses();

@endphp
<style type="text/css">
   .day-sunday [data-day], .day-monday [data-day],
   .day-tuesday [data-day], .day-wednesday [data-day],
   .day-thursday [data-day], .day-friday [data-day], 
   .day-saturday [data-day]{
      display: none !important;
   }
   .day-sunday [data-day="sunday"], .day-monday [data-day="monday"],
   .day-tuesday [data-day="tuesday"], .day-wednesday [data-day="wednesday"],
   .day-thursday [data-day="thursday"], .day-friday [data-day="friday"],
   .day-saturday [data-day="saturday"]{
      display: block !important;
   }
</style>
<div class="calendar-view container-fluid month-view">
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
         <ul class="p-0 m-0">
            @for( $i=0; $i<$weeksInMonth; $i++ )
               @for($j=1;$j<=7;$j++)
                  @php $content = $monthView->_showDay($i*7+$j);@endphp
                  <li data-date="{{ $content['date'] }}" @if($content['date'] != "") data-day="{{ strtolower(date('l', strtotime($content['date']) )) }}" @endif>
                  <div class="dates text-right">{{ $content['day'] }}</div>

                  @include("teacher.dashboard.lesson.show")
               @endfor
               </li>
            @endfor
         </ul>
      </div>
      {!! $monthView->_createNavi() !!}
   </div>
</div>

<!-- Add class Popup Starts Here -->
<div class="d-render-popoup t-data-popup" id="dynamicRenderDiv" style="display:none;">
  


</div>

@push('js')
<script type="text/javascript">
   
</script>
@endpush