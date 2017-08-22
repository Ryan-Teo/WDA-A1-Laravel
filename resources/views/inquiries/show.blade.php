@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Your enquiry</h2>
            </div>
        </div>
    </div>
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
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Comment:</strong>
                {{ $inquiry['comment']}}
            </div>
        </div>
    </div>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('inquiries.index') }}">Track Enquiries >></a>
    </div>
@endsection