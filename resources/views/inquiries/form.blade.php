@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Comments:</strong>
                {!! Form::textarea('comments', null, array('placeholder' => 'Details',
                'class' => 'form-control','style'=>'height:100px')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                {!! Form::label('status', 'Pending') !!}
                {{ Form::radio('status', 'pending') }}
                {!! Form::label('status', 'Resolved') !!}
                {{ Form::radio('status', 'resolved') }}
                {!! Form::label('status', 'Unresolved') !!}
                {{ Form::radio('status', 'unresolved') }}
                {!! Form::label('status', 'Closed') !!}
                {{ Form::radio('status', 'closed') }}
            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
@endsection