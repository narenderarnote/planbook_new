
@extends('layouts.teacher-signup')

@section('content')

<div class="signup-modals"> 
  <!--popup-1-->
  <div class="" id="signupFirst" >
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title">Account Information</h4>
        </div>
        <div class="modal-body">
          <div class="sp-heading pb-4">To get started, enter your account information below. You can change this information at any time on your <strong>account</strong> page</div>
          <div class="modal-form">
            <form action="" method="post" class="form-horizontal">
            	{{ csrf_field() }}
              <div class="form-group">
                <label class="control-label col-sm-2" for="">First Name </label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="" name="first_name">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="">Last Name</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="" name="last_name">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="">Display Name</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="" placeholder="e.g. Mrs. Abc" name="display_name">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="">School District</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="" placeholder="" name="school_district">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="">School Name</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="" name="school_name">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="">Promotional Code</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="" name="promotional_code">
                </div>
              </div>
              <div class="form-group  py-4">
                <div class=" col-sm-7">
                  <button type="submit" class="btn button"  >Continue</button>
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