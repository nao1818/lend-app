@extends('layouts.app')

@section('content')

<div class="container">
<h2 class="page-header">LEND LIST</h2>
    <p class="pull-right"><a class="btn btn-success" href="/lend/create">追加</a></p>
<table class="table table-hover lend-table">
    <thead>
    <tr>
        <th>借りれる本</th>
        <th>追加日時</th>
    </tr>
    </thead>
    <tbody>

    @foreach($lends as $lend)
    <tr>
        <td>{{{ $lend->title }}}</td>
        <td>{{{ $lend->create_at }}}</td>
        <td><a class="btn btn-info" href="/lend/{{{ $lend->id }}}/edit">編集</a></td>

        {!! Form::open(['route'=>['lend.destroy',$lend->id],'method'=>'DELETE']) !!}
        <td><button class="btn btn-danger" type="submit">削除</button></td>
        {!! Form::close() !!}
        
        <td><button class="btn btn-log" type="submit">ログ</button></td>　　<!--- ログのsubmitとは？ -->
    
    </tr>
    @endforeach
    </tbody>
</table>
</div>

@endsection