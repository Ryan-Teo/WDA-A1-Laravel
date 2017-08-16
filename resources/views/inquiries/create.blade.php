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
        {!! Form::label('cust_name', 'Name') !!}
        {!! Form::text('cust_name', '', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('cust_email', 'email') !!}
        {!! Form::text('cust_email', '', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('service_area', 'Service Area') !!}
        {!! Form::text('service_area', '', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('subject', 'Subject') !!}
        {!! Form::text('subject', '', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description', 'Description') !!}
        {!! Form::text('description', '', ['class' => 'form-control']) !!}
    </div>


    <button class="btn btn-success" type="submit">Add the Car!</button>

    {!! Form::close() !!}
@endsection