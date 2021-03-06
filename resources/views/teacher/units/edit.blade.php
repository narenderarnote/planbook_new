<div class="popup-content">
    <div class="popup-header">
      <div class="row">
        <div class="col-sm-6 header-title">Class</div>
        <div class="col-sm-6 header-action-btn text-right">
          <button type="button" id="save_edit_unit_data_button" class="btn btn-primary"><span class="">Save</span></button>
         <!--  <button class="btn btn-primary" data-dismiss="modal"><span class="">Cancel</span></button> -->
          <a href="#" class="d-popoup-close btn px-3 text-white"><i class="fa fa-2x fa-times" aria-hidden="true"></i><span class="sr-only">Close</span></a> </div>
      </div>
    </div>
    <div class="popup-body">
      <form id="unit_edit_form" method="post" class="form-horizontal class-form">

        {{ csrf_field() }}
        <input type="hidden" id="unit_id" name="unit_id" value="{{ $unit->id }}"/>

        <div class="row">
          <label class="control-label col-sm-2 text-right"">Class </label>

          <div class="form-group col-sm-5 ">
            <select id="unit_class" name="unit_class" class="form-control">

              <option value="" >Select Class</option>
              @forelse($userClasses as $userClass)

              <option value="{{$userClass->id}}" @if($userClass->id == $unit->class_id)  selected="selected"; @endif >{{$userClass->class_name}}</option>
             
              @empty
               <option value="" >NO Class Avail</option>
              @endforelse
            </select>
          </div>
        </div>

        <div class="row">
          <label class="control-label col-sm-2 text-right">Unit ID</label>
          <div class="form-group col-sm-5 ">
            <input type="text" id="unit_id" name="unit_id" value="{{ old('unit_id',$unit->unit_id) }}" class="form-control"/>
          </div>
        </div>

        <div class="row">
          <label class="control-label col-sm-2 text-right">Title</label>
          <div class="form-group col-sm-5 ">
            <input type="text" id="unit_title" name="unit_title" value="{{ old('unit_title',$unit->unit_title) }}" class="form-control"/>
          </div>
        </div>

        <div class="row">
          <label class="control-label col-sm-2 text-right">Starts On</label>
          <div class="form-group col-sm-8 ">

          @php
            $var = $unit->starts_on;
            $date1 = str_replace('-', '/', $var);
            $starts_on =  date('d/m/Y', strtotime($date1));

            $var = $unit->ends_on;
            $date = str_replace('-', '/', $var);
            $ends_on =  date('d/m/Y', strtotime($date));
          @endphp
            <input type="text" id="starts_on" name="starts_on" value="{{ old('starts_on',$starts_on) }}" class="form-control datepicker"/>
           
          </div>
        </div>
        <div class="row">
          <label class="control-label col-sm-2 text-right">Ends On</label>
          <div class="form-group col-sm-8 ">
            <input type="text" id="ends_on" name="ends_on" value="{{ old('ends_on',$ends_on) }}" class="form-control datepicker"/>
          
          </div>
        </div>
        
         <div class="row">
          <label class="control-label col-sm-2 text-right">Description</label>
          <div class="form-group col-sm-5 ">
            <textarea id="unit_description" name="unit_description" rows="7" cols="45">{{ $unit->unit_description }}</textarea>
           
          </div>
        </div>
      
      </form>
    </div>
</div>

<script type="text/javascript">

  
  $('.datepicker').datepicker({format: 'dd/mm/yyyy',autoclose:true});
  $('.timepicker').timepicker({
    'timeFormat': 'h:i A',
    'scrollDefault' : '8:00am',
    'forceRoundTime' : false,
  });

</script>