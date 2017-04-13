
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


<!-- Add class Pop Starts Here -->
<div class="d-render-popoup t-data-popup" style="display:none;">
  <div class="popup-content"  >
    <div class="popup-header">
      <div class="row">
        <div class="col-sm-6 header-title">Class</div>
        <div class="col-sm-6 header-action-btn text-right">
          <button class="btn btn-primary"><span class="">Save</span></button>
          <button class="btn btn-primary"><span class="">Cancel</span></button>
          <a href="#" class="d-popoup-close btn px-3 text-white"><i class="fa fa-2x fa-times" aria-hidden="true"></i><span class="sr-only">Close</span></a> </div>
      </div>
    </div>
    <div class="popup-body">
      <form action="" method="" class="form-horizontal class-form">
        <div class="row">
          <label class="control-label col-sm-2 text-right">Class Name</label>
          <div class="form-group col-sm-5 ">
            <input type="text" class="form-control"/>
          </div>
        </div>
        <div class="row">
          <label class="control-label col-sm-2 text-right">Start Day</label>
          <div class="form-group col-sm-8 ">
            <input type="date" class="form-control"/>
            <div class="checkbox">
              <label>
                <input type="checkbox">
                Use first day of school</label>
            </div>
          </div>
        </div>
        <div class="row">
          <label class="control-label col-sm-2 text-right">End Day</label>
          <div class="form-group col-sm-8 ">
            <input type="date" class="form-control"/>
            <div class="checkbox">
              <label>
                <input type="checkbox">
                Use last day of school</label>
            </div>
          </div>
        </div>
        <div class="row">
          <label class="control-label col-sm-2 text-right">Class color</label>
          <div class="form-group col-sm-5 ">
            <input type="color" class="form-control"/>
          </div>
        </div>
        <div class="row">
          <label class="control-label col-sm-2 text-right">Collaborate</label>
          <div class="form-group col-sm-8 ">
            <div class="radio ">
              <input type="radio" name="class collaboration" value="" >
              <strong>None</strong> - Do not allow collaboration for this class<br>
              <input type="radio" name="class collaboration" value="">
              <strong>View/Import</strong> - Allow teachers to view/import, but NOT edit, my lessons<br>
              <input type="radio" name="class collaboration" value="">
              <strong>View/Edit</strong> - Allow teachers to view AND edit my lessons<br>
              <input type="radio" name="class collaboration" value="">
              <strong>Replica</strong> - This class will show lessons from another class<br>
            </div>
          </div>
        </div>
        <div class="p-2"></div>
        <div class="text-center"> <a id="copyMonday" href="" class="text-bold">Copy</a> <span id="firstDayName">Day 1</span> times to all days </div>
        <div class="p-2"></div>
        <div class="row py-3">
          <div class="col-sm-offset-5 col-sm-3">Start Days</div>
          <div class="col-sm-3 ">Last Days</div>
        </div>
        <div class="row pb-3">
          <label class="control-label col-sm-2 text-right">Class Days</label>
          <div class="form-group col-sm-9 ">
            <div class="row pb-3">
              <div class="col-sm-4">
                <div class="checkbox">
                  <label>
                    <input type="checkbox">
                    Day 1</label>
                </div>
              </div>
              <div class="col-sm-4">
                <input type="date" class="form-control"/>
              </div>
              <div class="col-sm-4">
                <input type="date" class="form-control"/>
              </div>
            </div>
            <div class="row pb-3">
              <div class="col-sm-4">
                <div class="checkbox">
                  <label>
                    <input type="checkbox">
                    Day 2</label>
                </div>
              </div>
              <div class="col-sm-4">
                <input type="date" class="form-control"/>
              </div>
              <div class="col-sm-4">
                <input type="date" class="form-control"/>
              </div>
            </div>
            <div class="row pb-3">
              <div class="col-sm-4">
                <div class="checkbox">
                  <label>
                    <input type="checkbox">
                    Day 3</label>
                </div>
              </div>
              <div class="col-sm-4">
                <input type="date" class="form-control"/>
              </div>
              <div class="col-sm-4">
                <input type="date" class="form-control"/>
              </div>
            </div>
            <div class="row pb-3">
              <div class="col-sm-4">
                <div class="checkbox">
                  <label>
                    <input type="checkbox">
                    Day 4</label>
                </div>
              </div>
              <div class="col-sm-4">
                <input type="date" class="form-control"/>
              </div>
              <div class="col-sm-4">
                <input type="date" class="form-control"/>
              </div>
            </div>
            <div class="row pb-3">
              <div class="col-sm-4">
                <div class="checkbox">
                  <label>
                    <input type="checkbox">
                    Day 5</label>
                </div>
              </div>
              <div class="col-sm-4">
                <input type="date" class="form-control"/>
              </div>
              <div class="col-sm-4">
                <input type="date" class="form-control"/>
              </div>
            </div>
            <div class="row pb-3">
              <div class="col-sm-4">
                <div class="checkbox">
                  <label>
                    <input type="checkbox">
                    Day 6</label>
                </div>
              </div>
              <div class="col-sm-4">
                <input type="date" class="form-control"/>
              </div>
              <div class="col-sm-4">
                <input type="date" class="form-control"/>
              </div>
            </div>
            <div class="row pb-3">
              <div class="col-sm-4">
                <div class="checkbox">
                  <label>
                    <input type="checkbox">
                    Day 7</label>
                </div>
              </div>
              <div class="col-sm-4">
                <input type="date" class="form-control"/>
              </div>
              <div class="col-sm-4">
                <input type="date" class="form-control"/>
              </div>
            </div>
            <div class="row pb-3">
              <div class="col-sm-4">
                <div class="checkbox">
                  <label>
                    <input type="checkbox">
                    Day 8</label>
                </div>
              </div>
              <div class="col-sm-4">
                <input type="date" class="form-control"/>
              </div>
              <div class="col-sm-4">
                <input type="date" class="form-control"/>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Add class pop end here ! -->


@endsection