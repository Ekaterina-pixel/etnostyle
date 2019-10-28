@extends('layouts.default')

@section('content')
<h2>{{isset($obj->name)?$obj->name:'404'}}</h2>
<div>
{!! $obj->body !!}
</div>
@endsection
