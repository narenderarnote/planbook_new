
@extends('layouts.teacher')

@section('content')

@include('common.errors')

<div class="">
    <form action="" method="post" class="form-horizontal">

    	{{ csrf_field() }}

		<div class="form-group">
			<label class="control-label col-sm-2" for="">Year Name </label>
			<div class="col-sm-5">
			  <input type="text" name="school_year" class="form-control" id="school_year"  placeholder="e.g. 2016-2017">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="">First Day</label>
			<div class="col-sm-5">
			  <input type="date" name="first_day" class="form-control" id="first_day">
			</div>
		</div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="">Last Day</label>
        <div class="col-sm-5">
          <input type="date" name="last_day" class="form-control" id="last_day">
        </div>
      </div>
     
      <div class="form-group">
        <div class="col-sm-7">
        
          <button type="submit" class="btn btn-success" >Add</button>
        </div>
      </div>
    </form>
</div>
@endsection