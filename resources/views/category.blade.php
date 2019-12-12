@extends('layouts.default')
@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
				
<table class="table table-bordered table-striped" width="100%">
     <tr>
		 <td>Название</td>
     </tr>
	 @foreach($objs as $one)
	 <tr>
		 <td>{{$one->name}}</td>
	 </tr>
	 @endforeach
</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
