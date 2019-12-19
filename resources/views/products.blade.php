@extends('layouts.default')
@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href="{{asset('catalog')}}">Каталог</a> / {{$obj->name}}</div>

                <div class="card-body">
				<div class='row'>
@foreach($obj->products()->get() as $cat)

     <div class="col-sm-6 ">
     <div class="card">
         <div class="card-header">
		     {{$cat->name}}
		 </div>
		 <div class="card-body">
		 @if($cat->picture)
			 <img src="{{asset('uploads/'.$cat->user_id.'/s_'.$cat->picture)}}" width="100%" />
		 @else
			 <img src="{{asset('uploads/no_photo.jpg')}}" width="100%" />
		 @endif
		 </div>
     <div class="card-text">{!!$cat->body!!}</div>
<br style="clear:both" />
 
	 <button  data-id="{{$cat->id}}" class="btn btn-primary go my-1">Перейти</button>
	 <button  data-id="{{$cat->id}}" class="btn btn-primary  buy my-1">Купить</button>
	 <button type="button" class="btn btn-primary my-1" data-toggle="modal" data-target=".bd-example-modal-lg{{$cat->id}}">Открыть</button>
                </div>
            </div>
			
			
			
			
			

<div class="modal fade bd-example-modal-lg{{$cat->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content text-center">
	<div class='card'>
	<img src="{{asset('uploads/'.$cat->user_id.'/s_'.$cat->picture)}}" width="100%" class='card-img-top' />
	</div>
      <div class='card-body'>
	  	  <h2 class='text-center card-title'>{{$cat->price}}</h2>
	  <p class='text-center'>{!!$cat->body!!}</p>
	  </div>

    </div>
  </div>
</div>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
@endforeach
</div>
        </div>
    </div>
</div>
@endsection
