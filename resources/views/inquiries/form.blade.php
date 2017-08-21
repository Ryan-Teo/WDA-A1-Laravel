@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                {{ Form::radio('status', 'pending') }}
                {{ Form::radio('status', 'resolved') }}
                {{ Form::radio('status', 'unresolved') }}
                {{ Form::radio('status', 'closed') }}
            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Comments:</strong>
                {!! Form::textarea('comments', null, array('placeholder' => 'Details',
                'class' => 'form-control','style'=>'height:100px')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
@endsection