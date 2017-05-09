
@inject('monthView', 'App\Helpers\Month')

@php $weeksInMonth = $monthView->_weeksInMonth(); @endphp

<div class="calendar-view container-fluid month-view">
   <div class="container-fluid">
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
                  <li data-date="{{ $content['date'] }}">
                     <div class="dates text-right">{{ $content['day'] }}</div>
                     @if($content['day'] == 1)
                        @include("teacher.dashboard.lesson.show")
                     @endif
                  </li>
                  
               @endfor
            @endfor
         </ul>
      </div>
      {!! $monthView->_createNavi() !!}
   </div>
</div>