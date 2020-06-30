<!--詳細ページ-->
@extends('layouts.app')

@section('content')


    <h1>No = {{ $message->id }} のタスク内容詳細ページ</h1>

    <table class="table table-bordered">
        <tr>
            <th>No.</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>タスク内容</th>
            <td>{{ $task->content }}</td>
        </tr>
    </table>
    {!! link_to_route('tasklist.edit', 'このタスクを編集', ['task' => $task->id], ['class' => 'btn btn-light']) !!}
    
    {!! Form::model($task, ['route' => ['tasklist.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}



@endsection