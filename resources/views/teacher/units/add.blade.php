<div class="popup-content">
  <div class="popup-header">
    <div class="row">
      <div class="col-sm-6 header-title">Units</div>
      <div class="col-sm-6 header-action-btn text-right">
        <button type="button" id="save_unit_data_button" class="btn btn-primary"><span class="">Save</span></button>
       <!--  <button class="btn btn-primary" data-dismiss="modal"><span class="">Cancel</span></button> -->
        <a href="#" class="d-popoup-close btn px-3 text-white"><i class="fa fa-2x fa-times" aria-hidden="true"></i><span class="sr-only">Close</span></a> </div>
    </div>
  </div>
  <div class="popup-body">
    <form id="unit_add_form" method="post" class="form-horizontal class-form">

      {{ csrf_field() }}

      <div class="row">
        <label class="control-label col-sm-2 text-right" for="sel1">Class </label>
        <select id="unit_class" name="unit_class" class="form-control col-sm-5 ">

          <option value="0" >Select Class</option>
          @forelse($userClasses as $userClass)

          <option value="{{$userClass->id}}" >{{$userClass->class_name}}</option>
         
          @empty
           <option value="0" >NO Class Avail</option>
          @endforelse
        </select>
      </div>

      <div class="row">
        <label class="control-label col-sm-2 text-right">Class</label>
        <div class="form-group col-sm-5 ">
          <input type="text" id="unit_class" name="unit_class" value="" class="form-control"/>
        </div>
      </div>

      <div class="row">
        <label class="control-label col-sm-2 text-right">Starts On</label>
        <div class="form-group col-sm-8 ">
          <input type="text" id="starts_on" name="starts_on" value="{{ old('starts_on') }}" class="form-control datepicker"/>
          
        </div>
      </div>
      <div class="row">
        <label class="control-label col-sm-2 text-right">Ends On</label>
        <div class="form-group col-sm-8 ">
          <input type="text" id="ends_on" name="ends_on" value="{{ old('ends_on') }}" class="form-control datepicker"/>
         
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