@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Inquiries | Admin</h2>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Operating System</th>
            <th>Software Issue</th>
            <th>Status</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($inquiries as $inquiry)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $inquiry->user_name}}</td>
                <td>{{ $inquiry->user_email}}</td>
                <td>{{ $inquiry->os}}</td>
                <td>{{ $inquiry->software_issue}}</td>
                <td>{{ $inquiry->status}}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('inquiries.show',$inquiry->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('inquiries.edit',$inquiry->id) }}">Edit</a>
                    {{--{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}--}}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
    {!! $inquiries->render() !!}
@endsection