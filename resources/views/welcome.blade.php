@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <div class="row">
            <aside class="col-xs-4">
                {!! Form::open(['route' => 'tasks.store']) !!}
                    <div class="form-group">
                        {!! Form::textarea('content', old('content'), ['class' => 'form-control', 'rows' => '5']) !!}
                    </div>
                    {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}
                {!! Form::close() !!}
            </aside>
            <div class="col-xs-8">
                @if (count($tasks) > 0)
                    @include('tasks.tasks', ['tasks' => $tasks])
                @endif
            </div>
        </div>
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Welcome to the Task-List</h1>
                {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection