@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
<h1>タスク一覧</h>
    
    @if (count($tasks) > 0)
      <table class="table table-striped">
          <thead>
              <tr>
                  <th>id</th>
                  <td>タスク</td>
              </tr>
          </thead>
          <tbody>
              @foreach ($tasks as $task)
              <tr>
                  <th>{{ link_to_route('tasks.show', $task->id, ['task' => $task->id]) }}</th>
                  <td>{{ $task->content }}</td>
              </tr>
              @endforeach
          </tbody>
      </table>
    @endif

    {!! link_to_route('tasks.create', '新規タスクの投稿', [], ['class' => 'btn btn-primary']) !!}

@endsection