<!--詳細ページ-->
@extends('layouts.app')

@section('content')


    <h1>No = {{ $task->id }} のタスク内容詳細ページ</h1>

    <table class="table table-bordered">
        <tr>
            <th>No.</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>現状</th>
            <td>{{ $task->status }}</td>
        </tr>
        <tr>
            <th>タスク内容</th>
            <td>{{ $task->content }}</td>
        </tr>
    </table>
    {!! link_to_route('tasks.edit', 'このタスクを編集', ['task' => $task->id], ['class' => 'btn btn-light']) !!}
    
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}



@endsection