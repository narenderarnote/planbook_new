@extends('layouts.teacher')

@section('content')

<div class="clearfix"></div>
<div class=" class-page">
  <div class="container-fluid">
    <div class="col-sm-12">
      <div class="teacher-dash-action pt-5">

         <form method="post" action="">

          {{ csrf_field() }}
            <input type='file' accept=" .pdf,  .jpg" id='file' name='file[]' multiple='1' class="fileupload btn btn-primary " />
            
            <button type="button" class="btn btn-primary bg-white border-2 border-theme add-comments popup-custom-show" id="addUnitButton" ><i class="fa fa-plus" aria-hidden="true"></i><span class="">Upload File</span></button>
        </form>
        
       <!--  <button type="button" class="btn btn-primary bg-white border-2 return-toplan "><span class="">Copy/Import Lessons</span></button> -->
      </div>
    </div>
    <div class="table-responsive col-sm-12 pt-5">
      <table class="table table-bordered table-hover">
        <thead>
          <tr>
         
            <th class="text-left bg-theme class-column">File Name</th>
            <th class="text-center bg-theme start-date">Last update</th>
           <!-- 
            <th class="text-center bg-theme">ID</th>
            <th class="text-center bg-theme">Title</th> -->

          </tr>
        </thead>
        <tbody>

          @forelse($myFiles as $myFile)

            <tr class="edit_unit" data-file-id="{{ $myFile->id }}">
            
              <td class="text-center class-column">{{ $myFile->file_changeable_name }}</td>
              <td class="text-center class-column">{{ $myFile->updated_at }}</td>
              
              
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


@endsection

@push('js')
<script type="text/javascript">
$(document).ready(function(){


  $('body').on('change', '.fileupload', function(e){




    var validExts = "*.pdf; *.jpg".replace(/\s+|\*/g, '').split(";");

    for(var i=0; i<e.target.files.length; i++){
        fileExt = e.target.files[i].name.substring(e.target.files[i].name.lastIndexOf('.'));

        if (validExts.indexOf(fileExt) < 0) {
            alert("Invalid file selected, valid files are of " + validExts.toString() + " types.");
            return false;
        }

        if(e.target.files[i].size > 300*1024*1024){
            alert("File too large, we only accept 300MB");
            return false;
        }
    }



    console.log(e.target.files);
    var $this = $(this);
    var formData = new FormData();
    //formData.append("artwork", e.target.files[0]);
    formData.append("file", e.target.files[0]);
    formData.append("_token", $this.closest('form').find("[name='_token']").val());
    //$this.closest("form").find("[type='submit']").attr('disabled','disabled');
    $.ajax({
      type:'POST',
      url: 'myFileUpload',
      data: formData,
      cache:false,
      contentType: false,
      processData: false,

      success:function(data){
        window.location.href = window.location.href;
        //$($this.data('img')).val(data);
        // $($this.data('preview')).attr('src','uploaded/img/'+data);
        //$this.closest("form").find("[type='submit']").removeAttr('disabled');
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