
@extends('layouts.teacher-signup')

@section('content')
<div class="signup-modals"> 
  <!--popup-3- Select plan -->
  <div class="" id="selectPlan" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title">Lesson Section Layout</h4>
        </div>
        <div class="modal-body">
          <div class="sp-heading pb-4">Select a layout below to serveas a starting points for your lesson sections. You can change your lesson sections at any time on your <strong>display</strong> page</div>
          <div class="row m-0">
            <div class="col-sm-4">
              <div class="selectplan-box">
                <div class="box-header">Basic</div>
                <div class="box-content">
                  <ul>
                    <li>Lesson</li>
                    <li>Homework</li>
                    <li>Notes</li>
                    <li>Standards</li>
                  </ul>
                </div>
                <div class="box-action text-center"><a href="{{ route('teacher.step4', 1) }}" class="btn  button">Select</a></div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="selectplan-box">
                <div class="box-header">Basic</div>
                <div class="box-content">
                  <ul>
                    <li>Objective</li>
                    <li>Direct Instruction</li>
                    <li>Guided Practice</li>
                    <li>Independent practice</li>
                    <li>Homework</li>
                    <li>Notes</li>
                    <li>Standard</li>
                  </ul>
                </div>
                <div class="box-action text-center"><a href="{{ route('teacher.step4', 2) }}" class="btn  button" >Select</a></div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="selectplan-box">
                <div class="box-header">Basic</div>
                <div class="box-content">
                  <ul>
                    <li>Standard</li>
                    <li>Objective / Essential questions</li>
                    <li>Lesson / Instruction</li>
                    <li>Differentiation /Accomodations</li>
                    <li>Homework / Evidence odf Learning</li>
                    <li>Intructional Strategies</li>
                    <li>Material / Resources / Technology</li>
                    <li>Notes / Reflection</li>
                  </ul>
                </div>
                <div class="box-action text-center"><a href="{{ route('teacher.step4', 3) }}" class="btn  button" >Select</a></div>
              </div>
            </div>
          </div>
          <div class="clearfix  py-4">
            <a href="{{route('teacher.step2')}}" ><button type="button" class="btn greybutton pull-left" >Cancel</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection