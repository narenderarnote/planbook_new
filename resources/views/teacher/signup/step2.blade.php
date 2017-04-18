
@extends('layouts.teacher-signup')

@section('content')
<div class="signup-modals"> 
<!--popup-2-->
  <div class="" id="signupSecond" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title">Select Year Information</h4>
        </div>
        <div class="modal-body">
          <div class="sp-heading pb-4">Enter your school information below. You can change this information at any time on your <strong>school year</strong> page</div>
          <div class="modal-form">
            <form action="" method="post" class="form-horizontal">
             {{ csrf_field() }}
              <div class="form-group">
                <label class="control-label col-sm-2" for="">Year Name </label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id=""  placeholder="e.g. 2016-2017">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="">First Day</label>
                <div class="col-sm-5">
                  <input type="date" class="form-control" id="">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="">Last Day</label>
                <div class="col-sm-5">
                  <input type="date" class="form-control" id="">
                </div>
              </div>
              <div class="form-group class-schedule">
                <label class="control-label col-sm-2" for="">Class Schedule</label>
                <div class="col-sm-5">
                  <label>
                    <input type="radio" name="class-schedule" value="oneweek">
                    One Week<br>
                    <input type="radio" name="class-schedule" value="two-days">
                    Two Weeks<br>
                    <input type="radio" name="class-schedule" value="Cycleof">
                    Cycle of
                    <input type="text"/>
                    days </label>
                </div>
              </div>
              <div class="form-group  py-4">
                <div class=" col-sm-7">
                  <button type="submit" class="btn button"   >Continue</button>
                  <button type="button" class="btn greybutton close" data-dismiss="modal" >Exit</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection