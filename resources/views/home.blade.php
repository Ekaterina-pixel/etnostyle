@extends('layouts.default')
@section('scripts')
 @parent
 <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
 <script>
 CKEDITOR.replace('body');
 </script>
 @endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
<form class="was-validated" action="{{asset('home')}}" method="post" enctype="multipart/form-data">
	{!!csrf_field()!!}
  <div class="form-group">
    <label for="name">Название товара</label>
    <input type="text" name="name" class="form-control is-invalid" id="name" required>
	@error ('name')
	<span class="alert alert-danger" role="alert">
	     <strong> {{$message}} </strong>
	</span>
	@enderror
  </div>
  
<div class="form-group">  
<label for="category_id">Категория</label>
  <select class="form-control custom-select" name="category_id" required>
     <option value="">Выберите категорию</option>
	 @foreach($cats as $one)
	     <option value="{{$one->id}}">{{$one->name}}</option>
	 @endforeach
  </select>
	 </div>
	 
  <div class="form-group">
    <label for="price">Цена</label>
    <input type="text" name="price" class="form-control is-invalid" id="price">
  </div>
  <div class="form-group">
    <label for="body">Описание товара</label>
    <textarea class="form-control is-invalid" name="body" id="body"></textarea>
	@error ('body')
	<span class="alert alert-danger" role="alert">
	     <strong> {{$message}} </strong>
    </span>
	@enderror
  </div>
  
  <div class="custom-file">
  <input type="file" name="picture1" class="custom-file-input" id="picture1">
  <label class="custom-file-label" for="picture1">Выберите изображение...</label>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<br>
<table class="table table-bordered table-striped" width="100%">
     <tr style=font-size:22px;>
	     <td width="200px">Изображение</td>
		 <td>Название</td>
         <td>Описание</td>
		 <td>Категория</td>
		 <td>Действие</td>
     </tr>
	 @foreach($products as $one)
	 <tr>
	     <td>
		 @if($one->picture)
			 <img src="{{asset('uploads/'.$one->user_id.'/s_'.$one->picture)}}" width="100%">
		 @endif
		 </td>
		 <td>{{$one->name}}</td>
         <td>{{$one->small_body}}</td>
		 <td>{{(isset($one->catalogs->name))?$one->catalogs->name:''}}</td>
		 <td>
		     <a href="#" class="btn btn-block btn-success">Редактировать</a>
			 <a href="#" class="btn btn-block btn-default">Удалить</a>
		 </td>
	 </tr>
	 @endforeach
</table>
     {!!$products->links()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
