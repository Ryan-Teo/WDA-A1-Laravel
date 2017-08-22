@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Your enquiry</h2>
            </div>

        </div>
    </div>
    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <td>{{ $inquiry['user_name']}}</td>
        </tr>
        <tr>
            <th>email</th>
            <td>{{ $inquiry['user_email']}}</td>
        </tr>
        <tr>
            <th>User's operating system</th>
            <td>{{ $inquiry['os']}}</td>
        </tr>
        <tr>
            <th>Software issue</th>
            <td>{{ $inquiry['software_issue']}}</td>
        </tr>
        <tr>
            <th>Description</th>
            <td>{{ $inquiry['description']}}</td>
        </tr><tr>
            <th>Comment</th>
            <td>{{ $inquiry['comment']}}</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>{{ $inquiry['status']}}</td>
        </tr>
    </table>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('inquiries.index') }}"> Back</a>
    </div>

@endsection