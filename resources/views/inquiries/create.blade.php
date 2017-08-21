@extends('layouts.master')

@section('title','Create a new inquiry')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Make your enquiry</h2>
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
        {{ Form::select('user_name', , null, ['class' => 'form-control']) }}
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
        {{ Form::hidden('status', 'pending') }}
    </div>

    <div class="form-group">
        {{ Form::hidden('comment','admin use only') }}
    </div>


    <button class="btn btn-success" type="submit">Submit</button>
    {!! Form::close() !!}
@endsection