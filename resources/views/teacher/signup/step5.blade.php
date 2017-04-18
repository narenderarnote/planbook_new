
@extends('layouts.teacher-signup')

@section('content')
<div class="signup-modals"> 
  <div class="" id="noSchools" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title">No School Days</h4>
        </div>
        <div class="modal-body">
          <div class="sp-heading pb-4">Select no school to include in the school years. You can add and change no school days at any time on your <strong>Events</strong> page</div>
          <div class="clearfix"></div>
          <div class="modal-form">
            <form action="" method="" class="form-horizontal">
              <div class="noschool-info row">
                <div class="col-sm-3"> <strong class=" py-4">country Natinal Holiday</strong> </div>
                <div class="col-sm-9">
                  <div class="clearfix pb-4"><strong>Additional No School days</strong><a href="#" class="ml-4 pr-3 p-2  text-center btn-primary  width-auto"> <i class="fa fa-plus" aria-hidden="true"></i> </a></div>
                  <table class="table table-bordered table-condensed table-hover">
                    <thead>
                      <tr>
                        <th class="bg-theme">Event</th>
                        <th class="bg-theme text-center date-column">Start Date</th>
                        <th class="bg-theme text-center date-column">End Date</th>
                        <th class="bg-theme text-center cls-delete"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><input type="text" class="form-control" placeholder=" Winter break"/></td>
                        <td class=" date-column"><input type="date" class="form-control p-1" /></td>
                        <td class=" date-column"><input type="date" class="form-control p-1"/></td>
                        <td class="text-center"><a href="#"><i class="fa fa-times" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr>
                        <td><input type="text" class="form-control" placeholder=" Spring break"/></td>
                        <td class=" date-column"><input type="date" class="form-control p-1" /></td>
                        <td class=" date-column"><input type="date" class="form-control p-1"/></td>
                        <td class="text-center"><a href="#"><i class="fa fa-times" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr>
                        <td><input type="text" class="form-control" placeholder=" Planning Day - No School"/></td>
                        <td class=" date-column"><input type="date" class="form-control p-1" /></td>
                        <td class=" date-column"><input type="date" class="form-control p-1"/></td>
                        <td class="text-center"><a href="#"><i class="fa fa-times" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr>
                        <td><input type="text" class="form-control" placeholder=" Planning Day - No School"/></td>
                        <td class=" date-column"><input type="date" class="form-control p-1" /></td>
                        <td class=" date-column"><input type="date" class="form-control p-1"/></td>
                        <td class="text-center"><a href="#"><i class="fa fa-times" aria-hidden="true"></i></a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </form>
          </div>
          <div class="clearfix row">
            <div class=" col-sm-7">
              <button type="button" class="btn button"  data-toggle="modal" data-target="#" >Continue</button>
              <button type="button" class="btn greybutton close " data-dismiss="modal" >Exit</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection