@extends('layouts.master')

@section('title')
    Assignment 1
@endsection

@section('content')
    <div class="container">
            <div class="page-header" id="banner">
                <div class="row" >
                    <div class="col-lg-6">
                        <h1>Welcome</h1>
                        <p class="lead">To the new RMIT ITS Online Support Website</p>
                    </div>
                </div>
            </div>

        <div class ="row">
            <div class ="col-lg-6 col-md-12">
                <h2>What we do</h2>
                <p>We solve all your techincal problems. Problems with your wireless setup? Need more storage space? Just can't seem to get particular software runnning on your compuer?</p>
                <p><strong>We've got you.</strong></p>
            </div>
            <div class ="col-lg-6 col-md-12">
                <h2>How to check your enquiry status</h2>
                <p>Simply click the "Track Progress" button at the top of the page.</p>
                <p>Alternatively, <a href="{{ url('/inquiries/index') }}">click here</a>.</p>
            </div>
        </div>

        <div class="jumbotron bot-banner">
            <div class="row">
                <h1>Have a problem? </h1>
                <p>Go ahead and send us an enquiry! We'll be glad to help you!</p>
                <p><a href="{{ url('inquiries/create') }}" class="btn btn-primary btn-lg pull-right">Send Enquiry</a></p>
            </div>
        </div>
    </div>
@endsection

