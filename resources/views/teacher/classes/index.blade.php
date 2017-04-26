
@extends('layouts.teacher')

@section('content')

<div class="clearfix"></div>
<div class=" class-page">
  <div class="container-fluid">
    <div class="col-sm-12">
      <div class="teacher-dash-action pt-5">
        <button type="button" class="btn btn-primary bg-white border-2 border-theme add-comments popup-custom-show" id="addClassButton" ><i class="fa fa-plus" aria-hidden="true"></i><span class="">Add Class</span></button>
        <button type="button" class="btn btn-primary bg-white border-2 return-toplan "><span class="">Copy/Import Lessons</span></button>
      </div>
    </div>
    <div class="table-responsive col-sm-12 pt-5">
      <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th class="text-center bg-theme color-column"></th>
            <th class="text-left bg-theme class-column">Class Name</th>
            <th class="text-center bg-theme start-date">Start Date</th>
            <th class="text-center bg-theme end-date">End Date</th>
            <th class="text-center bg-theme class-numbering">1</th>
            <th class="text-center bg-theme class-numbering">2</th>
            <th class="text-center bg-theme class-numbering">3</th>
            <th class="text-center bg-theme class-numbering">4</th>
            <th class="text-center bg-theme class-numbering">5</th>
            <th class="text-center bg-theme class-numbering">6</th>
            <th class="text-center bg-theme class-numbering">7</th>
            <th class="text-center bg-theme class-numbering">8</th>
            <th class="text-center bg-theme class-numbering">9</th>
            <th class="text-center bg-theme class-numbering">10</th>
          </tr>
        </thead>
        <tbody>

          @forelse($user_classes as $user_class)

            <tr>
              <td class="text-center color-column"><a class="class-colors" style="background-color:{{$user_class->class_color}};"></a></td>
              <td class="text-left class-column"><a href="#">{{ $user_class->class_name }}</a></td>
              <td class="text-center class-column"><a href="#">{{ $user_class->start_date }}</a></td>
              <td class="text-center class-column"><a href="#">{{ $user_class->end_date }}</a></td>


              <td class="text-center class-column class-numbering"><a href="#"><i class="fa fa-check" aria-hidden="true"></i></a></td>
              <td class="text-center class-column class-numbering"><a href="#"><i class="fa fa-check" aria-hidden="true"></i></a></td>
              <td class="text-center class-column class-numbering"><a href="#"><i class="fa fa-check" aria-hidden="true"></i></a></td>
              <td class="text-center class-column class-numbering"><a href="#"><i class="fa fa-check" aria-hidden="true"></i></a></td>
              <td class="text-center class-column class-numbering"><a href="#"><i class="fa fa-check" aria-hidden="true"></i></a></td>
              <td class="text-center class-column class-numbering"><a href="#"><i class="fa fa-check" aria-hidden="true"></i></a></td>
              <td class="text-center class-column class-numbering"><a href="#"><i class="fa fa-check" aria-hidden="true"></i></a></td>
              <td class="text-center class-column class-numbering"><a href="#"><i class="fa fa-check" aria-hidden="true"></i></a></td>
              <td class="text-center class-column class-numbering"><a href="#"><i class="fa fa-check" aria-hidden="true"></i></a></td>
              <td class="text-center class-column class-numbering"><a href="#"><i class="fa fa-check" aria-hidden="true"></i></a></td>
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


  //popup-custom  hide
  
  $("body").on('click','.d-popoup-close',function(){

     $(".d-render-popoup").fadeOut();

  });






  $("#addClassButton").click(function(){


    $("#dynamicRenderDiv").show().load("/teacher/classes/add");
  });



  /* send AJAX REQUEST TO ADD NEW CLASS DATA*/



  $("body").on('click','#save_class_data_button',function(){


    var formData = $("#class_add_form").serialize();

    var obj = $(this);
    $.ajax({
      type:'POST',
      url: BASE_URL +'/teacher/classes/add',
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
            $('#class_add_form').before(html);
            
        }

        if(response['success']){
               
          console.log(response['success']);

          html += '<div id="success-box" class="alert alert-success fade in">';
          html += '<a href="#" class="close" data-dismiss="alert">&times;</a>';
          html += '<strong>You Have created Class successfully !</strong>';
          html += '</div>';

          $('#class_add_form').before(html);
          $('#class_add_form')[0].reset();
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