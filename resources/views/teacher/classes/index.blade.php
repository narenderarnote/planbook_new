
@extends('layouts.teacher')

@section('content')

<div class="clearfix"></div>
<div class=" class-page">
  <div class="container-fluid">
    <div class="col-sm-12">
      <div class="teacher-dash-action pt-5">
        <button class="btn btn-primary bg-white border-2 border-theme add-comments popup-custom-show"><i class="fa fa-plus" aria-hidden="true"></i><span class="">Add Class</span></button>
        <button class="btn btn-primary bg-white border-2 return-toplan "><span class="">Copy/Import Lessons</span></button>
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
          <tr>
            <td class="text-center color-column"><a class="class-colors" style="background-color:green;"></a></td>
            <td class="text-left class-column"><a href="#">English</a></td>
            <td class="text-center class-column"><a href="#">04/29/2017</a></td>
            <td class="text-center class-column"><a href="#">04/30/2017</a></td>
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
          <tr>
            <td class="text-center color-column"><a class="class-colors" style="background-color:gray;"></a></td>
            <td class="text-left class-column"><a href="#">Math</a></td>
            <td class="text-center class-column"><a href="#">04/29/2017</a></td>
            <td class="text-center class-column"><a href="#">04/30/2017</a></td>
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
          <tr>
            <td class="text-center color-column"><a class="class-colors" style="background-color:red;"></a></td>
            <td class="text-left class-column"><a href="#">English</a></td>
            <td class="text-center class-column"><a href="#">04/29/2017</a></td>
            <td class="text-center class-column"><a href="#">04/30/2017</a></td>
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
        </tbody>
      </table>
    </div>

   


  </div>
</div>


<!-- Add class Popup Starts Here -->
<div class="d-render-popoup t-data-popup" style="display:none;">
  

  
</div>

<!-- Add class popup end here ! -->


@endsection