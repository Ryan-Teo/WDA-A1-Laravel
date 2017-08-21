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
                <p>We solve all your techincal problems. </p>
                <p>Nullam quis risus eget <a href="#">urna mollis ornare</a> vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
                <p><small>This line of text is meant to be treated as fine print.</small></p>
                <p>The following snippet of text is <strong>rendered as bold text</strong>.</p>
                <p>The following snippet of text is <em>rendered as italicized text</em>.</p>
                <p>An abbreviation of the word attribute is <abbr title="attribute">attr</abbr>.</p>
            </div>
            <div class ="col-md-4">
                <h2>How to check your enquiry status</h2>
                <p>Nullam quis risus eget <a href="#">urna mollis ornare</a> vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
                <p><small>This line of text is meant to be treated as fine print.</small></p>
                <p>The following snippet of text is <strong>rendered as bold text</strong>.</p>
                <p>The following snippet of text is <em>rendered as italicized text</em>.</p>
                <p>An abbreviation of the word attribute is <abbr title="attribute">attr</abbr>.</p>
            </div>
            <div class ="col-md-4">
                <h2>Give us Feedback</h2>
                <p>Nullam quis risus eget <a href="#">urna mollis ornare</a> vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
                <p><small>This line of text is meant to be treated as fine print.</small></p>
                <p>The following snippet of text is <strong>rendered as bold text</strong>.</p>
                <p>The following snippet of text is <em>rendered as italicized text</em>.</p>
                <p>An abbreviation of the word attribute is <abbr title="attribute">attr</abbr>.</p>
            </div>
        </div>


        <div class="jumbotron">
            <h1>Have issues? </h1>
            <p>Please give us some enquiry related to any technical issues that you might have or if you need to
                apply any online services that are supported by RMIT. We'll be gladly to help you!</p>
            <p><a href="{{ url('inquiries/create') }}" class="btn btn-primary btn-lg">Click me</a></p>
        </div>
    </div>
@endsection

