@extends('layouts.app')

@section('content')

    @if (Auth::check())
        {{ Auth::user()->name }}
    @else

    <div class="center jumbotron">
        <div class="text-center">
            <h1>タスクリストへようこそ</h1>
            <p>タスクリストでタスクの登録をしたり、タスクが終了したか管理できます。</p>
            {{-- ユーザ登録ページへのリンク --}}
            {!! link_to_route('signup.get', 'ユーザ登録', [], ['class' => 'btn btn-lg btn-primary']) !!}
        </div>
    </div>
    @endif
@endsection