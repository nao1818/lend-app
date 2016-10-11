@extends('layouts.app')

@section('content')

<div class="container">
<h2 class="page-header">ToDo一覧</h2>
    <p class="pull-right"><a class="btn btn-success" href="/todo/create">追加</a></p>
<table class="table table-hover todo-table">
    <thead>
    <tr>
        <th>やること</th>
        <th>作成日時</th>
        <th>更新日時</th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>静的なTodoです</td>
        <td>2015-04-01 00:00:00</td>
        <td>2015-04-10 00:00:00</td>
        <td><a class="btn btn-info" href="">編集</a></td>
        <td><button class="btn btn-danger" type="submit">削除</button></td>
    </tr>
    </tbody>
</table>
</div>

@endsection