@extends('layouts.master')

@section('title')
    Assignment 1
@endsection

@section('content')
    <div class="container">
            <div class="page-header" id="banner">
                <div class="row">
                    <div class="col-lg-6">
                        <h1>Welcome</h1>
                        <p class="lead">To the new RMIT ITS Online Support Website.</p>
                    </div>
                </div>
            </div>

        <div class ="row">
            <div class ="col-md-4">
                <h2>What we do.</h2>
                <p>We have an amazing group of RMIT tech people who are experts in Windows,
                    Mac, Linux, and and we all are here to help to solve your issues</p>
            </div>
            <div class ="col-md-4">
                <h2>How to check your enquiry status</h2>
                <p>You can go to your track progress presented in the navigation bar on top of the page</p>
            </div>
            <div class ="col-md-4">
                <h2>Give us Feedback</h2>
                <p>Your feedback is valuable for us to improve our services. Please sends us a lot of feedback!</p>
            </div>
        </div>


        <div class="jumbotron">
            <h1>Having issues? </h1>
            <p>Please give us some enquiry related to any technical issues that you might have or if you need to
                apply any online services that are supported by RMIT. We'll be gladly to help you!</p>
            <p><a href="{{ url('inquiries/create') }}" class="btn btn-primary btn-lg">Click me</a></p>
        </div>
    </div>
@endsection

