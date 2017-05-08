
@extends('layouts.teacher')

@section('content')

<div class="clearfix"></div>
<div class=" class-page">
  <div class="container-fluid">
    <div class="col-sm-12">
      <div class="teacher-dash-action pt-5">
        <button type="button" class="btn btn-primary bg-white border-2 border-theme add-comments popup-custom-show" id="addUnitButton" ><i class="fa fa-plus" aria-hidden="true"></i><span class="">Add Unit</span></button>
       <!--  <button type="button" class="btn btn-primary bg-white border-2 return-toplan "><span class="">Copy/Import Lessons</span></button> -->
      </div>
    </div>
    <div class="table-responsive col-sm-12 pt-5">
      <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th class="text-center bg-theme color-column"></th>
            <th class="text-left bg-theme class-column">Class Name</th>
            <th class="text-center bg-theme start-date">Start on</th>
            <th class="text-center bg-theme end-date">End on</th>
            <th class="text-center bg-theme">ID</th>
            <th class="text-center bg-theme">Title</th>

          </tr>
        </thead>
        <tbody>

          @forelse($units as $unit)

            <tr class="edit_unit" data-unit-id="{{ $unit->id }}" >
              <td class="text-center color-column"><a class="class-colors" style="background-color:{{$unit->class()->class_color}};"></a></td>
              <td class="text-left class-column"><a href="#">{{ $unit->class_name }}</a></td>
              <td class="text-center class-column"><a href="#">{{ $unit->start_on }}</a></td>
              <td class="text-center class-column"><a href="#">{{ $unit->unit_id }}</a></td>
              <td class="text-center class-column"><a href="#">{{ $unit->unit_title }}</a></td>

              
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


  $("#addUnitButton").click(function(){


    $("#dynamicRenderDiv").show().load("/teacher/units/add",function(){

      //$('.datepicker').datepicker({format: 'dd/mm/yyyy',});
      

    });

  });

  //popup-custom  hide
  
  $("body").on('click','.d-popoup-close',function(){

    $(".d-render-popoup").fadeOut();

  });

/* Add class dtatt*/

  $("body").on('click','#save_unit_data_button',function(){


    var formData = $("#unit_add_form").serialize();

    var obj = $(this);
    $.ajax({
      type:'POST',
      url: BASE_URL +'/teacher/units/add',
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
            $('#unit_add_form').before(html);
            
        }

        if(response['success']){
               
          console.log(response['success']);

          html += '<div id="success-box" class="alert alert-success fade in">';
          html += '<a href="#" class="close" data-dismiss="alert">&times;</a>';
          html += '<strong>You Have created Unit successfully !</strong>';
          html += '</div>';

          $('#unit_add_form').before(html);
          $('#unit_add_form')[0].reset();
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

  $(".edit_unit").click(function(){

    var unit_id = $(this).data("unit-id");

    $("#dynamicRenderDiv").show().load("/teacher/units/edit/"+unit_id,function(){

      //$('.datepicker').datepicker({format: 'dd/mm/yyyy',});
      

    });

  });

  /* Save edit classs datra*/

  $("body").on('click','#save_edit_unit_data_button',function(){

    var unit_id = $("#unit_id").val();

    var formData = $("#unit_edit_form").serialize();

    var obj = $(this);
    $.ajax({
      type:'POST',
      url: BASE_URL +'/teacher/units/edit/'+unit_id,
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
            $('#unit_edit_form').before(html);
            
        }

        if(response['success']){
               
          console.log(response['success']);

          html += '<div id="success-box" class="alert alert-success fade in">';
          html += '<a href="#" class="close" data-dismiss="alert">&times;</a>';
          html += '<strong>You Have updated class successfully !</strong>';
          html += '</div>';

          $('#unit_edit_form').before(html);
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