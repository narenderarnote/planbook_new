@extends('layouts.teacher')

@section('content')

<div class="clearfix"></div>
<div class=" class-page events-section assessment-section">
  <div class="container-fluid">
    <div class="col-sm-12">
		<div class="teacher-dash-action pt-5 list-contentbutton gradebutons">
      <div class="btn-group">
  			<button type="button" class="btn unitsbutton list-contentmainbuton dropdown-toggle " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> All Classes<span class="caret"></span> </button>
          <ul class="dropdown-menu language-dropdown">
  				@forelse($classes as $className)
  					<li><a href="#" class="language-dropbutons  unitdropbuton" style="background-color:{{ $className['class_color'] }}; color: #fff;">{{ $className['class_name'] }}</a></li>	
  				@empty
  				@endforelse
  			</ul>
      </div>  
      <div class="btn-group">
  			<button type="button" class="btn unitsbutton list-contentmainbuton dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> All Units<span class="caret"></span> </button>
          <ul class="dropdown-menu language-dropdown">
                <li><a href="#" class="language-dropbutons unitdropbuton">All Units </a></li>
           @forelse($units as $unit)
            <li><a href="#" class="unit-dropbutons language-dropbutons" style="background-color:{{ $unit->class_color }}; color: #fff;">{{ $unit->unit_title}}</a></li>  
          @empty
          @endforelse
        </ul> 
      </div>
      <div class="btn-group">
			<button type="button" class="btn btn-primary bg-white border-2 border-theme add-comments popup-custom-show unitsbutton list-contentmainbuton" id="addAssessmentButton" ><i class="fa fa-plus" aria-hidden="true"></i><span class="">Add Assessment</span></button>
			</div>
      <div class="btn-group">
      <button type="button" class="btn btn-primary bg-white border-2 border-theme add-comments popup-custom-show unitsbutton list-contentmainbuton scoreButton" id="scoreButton" ><span class="">Score Weighting</span></button>	
      </div>
		    <!--<button type="button" class="btn btn-primary bg-white border-2 return-toplan "><span class="">Copy/Import Lessons</span></button> -->
		</div>
    </div>
    <div class="table-responsive col-sm-12 pt-5">
      <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th class="text-center bg-theme color-column"></th>
            <th class="text-left bg-theme class-column">Class</th>
            <th class="text-left bg-theme class-column">Unit</th>
            <th class="text-center bg-theme start-date">Start</th>
            <th class="text-center bg-theme end-date">End</th>
            <th class="text-center bg-theme">Title</th>

          </tr>
        </thead>
        <tbody>

          @forelse($assessments as $assessment)

            <tr class="edit_assessment" data-assessment-id="{{ $assessment->id }}" >
              <td class="text-center color-column"><a class="class-colors" style="background-color:{{ $assessment->userClass->class_color }};"></a></td>
              <td class="text-left class-column"><a href="#">{{ $assessment->userClass->class_name }}</a></td>
              <td class="text-left class-column"><a href="#">{{ $assessment->unit->unit_id."-".$assessment->unit->unit_title }}</a></td>
              <td class="text-center class-column"><a href="#">{{ $assessment->starts_on }}</a></td>
              <td class="text-center class-column"><a href="#">{{ $assessment->ends_on }}</a></td>
              <td class="text-center class-column"><a href="#">{{ $assessment->title }}</a></td>

              
            </tr>

          @empty
            <tr>
              <td colspan="8">No Record Found ! </td>
            </tr>
          @endforelse

        </tbody>
      </table>
    </div>
  </div>
</div>


<!-- Add class Popup Starts Here -->
<div class="d-render-popoup t-data-popup modal fade editmodalcontent in" id="dynamicRenderDiv" role="dialog">
  


</div>

<!-- Add class popup end here ! -->


@endsection

@push('js')
<script type="text/javascript">

// A $( document ).ready() block.
$(document).ready(function() {

  /* send AJAX REQUEST TO ADD NEW CLASS DATA*/

  function formToJson(formArray) {
    var returnArray = {};
    for (var i = 0; i < formArray.length; i++){
      returnArray[formArray[i]['name']] = formArray[i]['value'];
    }
    return returnArray;
  }


  $("#addAssessmentButton").click(function(){


    $("#dynamicRenderDiv").show().load("/teacher/assessments/add",function(){

      //$('.datepicker').datepicker({format: 'dd/mm/yyyy',});
      

    });

  });

  //popup-custom  hide
  
  $("body").on('click','.d-popoup-close',function(){

    $(".d-render-popoup").fadeOut();

  });

/* Add assignment data*/

  $("body").on('click','#save_assessment_data_button',function(){


    var formData = $("#assessment_add_form").serialize();

    var obj = $(this);
    $.ajax({
      type:'POST',
      url: BASE_URL +'/teacher/assessments/add',
      data: formData,
      dataType: 'json',

      beforeSend: function () {
        //obj.html('Sending... <i class="fa fa-send"></i>');
      },
      complete: function () {
        //obj.html('Sent <i class="fa fa-send"></i>');
      },

      success: function (response) {
        var html = '';

        $('#warning-box').remove();
        $('#success-box').remove();

        if(response['error']){
            html += '<div id="warning-box" class="alert alert-danger fade in">';
            html += '<a href="#" class="close" data-dismiss="alert">&times;</a>';
            html += '<strong>Error!</strong>';

            for (var i = 0; i < response['error'].length; i++) {
                html += '<p>' + response['error'][i] + '</p>';
            }

            html += '</div>';
            $('#assessment_add_form').before(html);
            
        }

        if(response['success']){
               
          console.log(response['success']);

          html += '<div id="success-box" class="alert alert-success fade in">';
          html += '<a href="#" class="close" data-dismiss="alert">&times;</a>';
          html += '<strong>You Have created Assignment successfully !</strong>';
          html += '</div>';

          $('#assessment_add_form').before(html);
          $('#assessment_add_form')[0].reset();
          $(".d-render-popoup").fadeOut();


          window.location.reload();
        }


        },


      error: function(data){
        console.log("error");
        console.log(data);
      }

    });
      



  }); 



  /* Edit Unit */

  $(".edit_assessment").click(function(){

    var assessment_id = $(this).data("assessment-id");
    
    $("#dynamicRenderDiv").show().load("/teacher/assessments/edit/"+assessment_id,function(){

      //$('.datepicker').datepicker({format: 'dd/mm/yyyy',});
      

    });

  });

  /*Score Weighting*/


  $(".scoreButton").click(function(){
    $("#dynamicRenderDiv").show().load("/teacher/assessments/score/",function(){
    });

  });



  /* Save edit classs datra*/

  $("body").on('click','#save_edit_assessment_data_button',function(){

    var assessment_id = $("#assessment_id").val();

    var formData = $("#assessment_edit_form").serialize();

    var obj = $(this);
    $.ajax({
      type:'POST',
      url: BASE_URL +'/teacher/assessments/edit/'+assessment_id,
      data: formData,
      dataType: 'json',

      beforeSend: function () {
        //obj.html('Sending... <i class="fa fa-send"></i>');
      },
      complete: function () {
        //obj.html('Sent <i class="fa fa-send"></i>');
      },

      success: function (response) {
        var html = '';

        $('#warning-box').remove();
        $('#success-box').remove();

        if(response['error']){
            html += '<div id="warning-box" class="alert alert-danger fade in">';
            html += '<a href="#" class="close" data-dismiss="alert">&times;</a>';
            html += '<strong>Error!</strong>';

            for (var i = 0; i < response['error'].length; i++) {
                html += '<p>' + response['error'][i] + '</p>';
            }

            html += '</div>';
            $('#assessment_edit_form').before(html);
            
        }

        if(response['success']){
               
          console.log(response['success']);

          html += '<div id="success-box" class="alert alert-success fade in">';
          html += '<a href="#" class="close" data-dismiss="alert">&times;</a>';
          html += '<strong>You Have updated Unit successfully !</strong>';
          html += '</div>';

          $('#assessment_edit_form').before(html);
          //$('#class_add_form')[0].reset();
          $(".d-render-popoup").fadeOut();


          window.location.reload();
        }


        },


      error: function(data){
        console.log("error");
        console.log(data);
      }

    });
      



  }); 





});


</script>
@endpush