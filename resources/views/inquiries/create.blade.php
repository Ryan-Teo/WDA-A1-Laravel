@extends('layouts.master')

@section('title','Create a new inquiry')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Make enquiry</h2>
            </div>
        </div>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    {!! Form::model($inquiry, ['action' => 'InquiryController@store']) !!}
        <div class="form-group">
            {!! Form::label('user_name', 'Name') !!}
            {{ Form::select('user_name', $users->pluck("name"), null, ['class' => 'form-control user-name' ]) }}
        </div>

        <div class="form-group">
            {!! Form::label('email', 'Email') !!}
            {{ Form::select('email', $users->pluck("email") ,null, ['class' => 'form-control email', 'disabled' ,'readonly' => 'readonly']) }}
        </div>

        <div class="form-group">
            {!! Form::label('os', 'Operating System') !!}
            {!! Form::text('os', '', ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('software_issue', 'Software Issue') !!}
            {!! Form::text('software_issue','', ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('additional_comments', 'Additional Comments') !!}
            {!! Form::textarea('additional_comments','', ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {{ Form::hidden('status', 'pending') }}
        </div>

        <div class="form-group">
            {{ Form::hidden('comment','admin use only') }}
        </div>


        <button class="btn btn-success" type="submit">Submit</button>

        <a class="pull-right" href="{{ url('/users/create') }}">Don't have an account? Sign up for one!</a>
    {!! Form::close() !!}
@endsection