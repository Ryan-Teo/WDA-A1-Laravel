@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Inquiry</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ URL::previous() }}"> Back</a>
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
    <div class="row">
        {!! Form::model($inquiry, ['method' => 'PATCH','route' => ['inquiries.update', $inquiry->id]]) !!}
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Comments:</strong>
                {!! Form::textarea('comment', null, array('placeholder' => 'Details',
                'class' => 'form-control','style'=>'height:100px')) !!}
            </div>
        </div>
        <div class="col-lg-6">
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
        <div class="col-lg-6">
            <button type="submit" class="btn btn-primary pull-right">Submit</button>
        </div>
        {!! Form::close() !!}
    </div>
@endsection