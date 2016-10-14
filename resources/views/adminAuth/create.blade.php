@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="page-header">書籍の追加</h2>
    	{!! Form::open(['route' => 'lend.store']) !!}
       		<div class="form-group">
            	{!! Form::input('text','title', null, ['required', 'class' => 'form-control', 'placeholder' => '書籍の追加']) !!}
        	</div>
        	<button type="submit" class="btn btn-success pull-right">追加</button>
    	{!! Form::close() !!}
@endsection