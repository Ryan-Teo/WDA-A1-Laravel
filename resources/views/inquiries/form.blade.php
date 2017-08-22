@extends('layouts.master')
@section('content')
    <div class ="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Issue:</strong>
                    {{ $inquiry['software_issue']}}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Status:</strong>
                    {{ $inquiry['status']}}
                </div>
            </div>
        </div>
        <div class="row">
            {!! Form::close() !!}    {!! Form::model($inquiry, ['method' => 'PATCH','route' => ['inquiries.update', $inquiry->id]]) !!}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Comments:</strong>
                    {!! Form::textarea('comment','', array('placeholder' => 'Details',
                    'class' => 'form-control','style'=>'height:100px')) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">

                    {{ Form::radio('status', 'pending') }}
                    {!! Form::label('status', 'Pending') !!}
                    <br>
                    {{ Form::radio('status', 'resolved') }}
                    {!! Form::label('status', 'Resolved') !!}
                    <br>
                    {{ Form::radio('status', 'unresolved') }}
                    {!! Form::label('status', 'Unresolved') !!}
                    <br>
                    {{ Form::radio('status', 'closed') }}
                    {!! Form::label('status', 'Closed') !!}
                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>

@endsection
