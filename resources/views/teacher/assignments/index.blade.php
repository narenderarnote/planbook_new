@extends('layouts.teacher')

@section('content')

<div class="clearfix"></div>
<div class=" class-page">
  <div class="container-fluid">
    <div class="col-sm-12">
      <div class="teacher-dash-action pt-5">
        <button type="button" class="btn btn-primary bg-white border-2 border-theme add-comments popup-custom-show" id="addAssignmentButton" ><i class="fa fa-plus" aria-hidden="true"></i><span class="">Add Assignment</span></button>
       <!--  <button type="button" class="btn btn-primary bg-white border-2 return-toplan "><span class="">Copy/Import Lessons</span></button> -->
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

          @forelse($assignments as $assignment)

            <tr class="edit_assignment" data-assignment-id="{{ $assignment->id }}" >
              <td class="text-center color-column"><a class="class-colors" style="background-color:{{ $assignment->userClass->class_color }};"></a></td>
              <td class="text-left class-column"><a href="#">{{ $assignment->userClass->class_name }}</a></td>
              <td class="text-left class-column"><a href="#">{{ $assignment->unit->unit_id."-".$assignment->unit->unit_title }}</a></td>
              <td class="text-center class-column"><a href="#">{{ $assignment->starts_on }}</a></td>
              <td class="text-center class-column"><a href="#">{{ $assignment->ends_on }}</a></td>
              <td class="text-center class-column"><a href="#">{{ $assignment->title }}</a></td>

              
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
<div class="d-render-popoup t-data-popup" id="dynamicRenderDiv" style="display:none;">
  


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


  $("#addAssignmentButton").click(function(){


    $("#dynamicRenderDiv").show().load("/teacher/assignments/add",function(){

      //$('.datepicker').datepicker({format: 'dd/mm/yyyy',});
      

    });

  });

  //popup-custom  hide
  
  $("body").on('click','.d-popoup-close',function(){

    $(".d-render-popoup").fadeOut();

  });

/* Add assignment data*/

  $("body").on('click','#save_assignment_data_button',function(){


    var formData = $("#assignment_add_form").serialize();

    var obj = $(this);
    $.ajax({
      type:'POST',
      url: BASE_URL +'/teacher/assignments/add',
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
            $('#assignment_add_form').before(html);
            
        }

        if(response['success']){
               
          console.log(response['success']);

          html += '<div id="success-box" class="alert alert-success fade in">';
          html += '<a href="#" class="close" data-dismiss="alert">&times;</a>';
          html += '<strong>You Have created Assignment successfully !</strong>';
          html += '</div>';

          $('#assignment_add_form').before(html);
          $('#assignment_add_form')[0].reset();
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

  $(".edit_assignment").click(function(){

    var assignment_id = $(this).data("assignment-id");

    $("#dynamicRenderDiv").show().load("/teacher/assignments/edit/"+assignment_id,function(){

      //$('.datepicker').datepicker({format: 'dd/mm/yyyy',});
      

    });

  });

  /* Save edit classs datra*/

  $("body").on('click','#save_edit_assignment_data_button',function(){

    var assignment_id = $("#assignment_id").val();

    var formData = $("#assignment_edit_form").serialize();

    var obj = $(this);
    $.ajax({
      type:'POST',
      url: BASE_URL +'/teacher/assignments/edit/'+assignment_id,
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
            $('#assignment_edit_form').before(html);
            
        }

        if(response['success']){
               
          console.log(response['success']);

          html += '<div id="success-box" class="alert alert-success fade in">';
          html += '<a href="#" class="close" data-dismiss="alert">&times;</a>';
          html += '<strong>You Have updated Unit successfully !</strong>';
          html += '</div>';

          $('#assignment_edit_form').before(html);
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