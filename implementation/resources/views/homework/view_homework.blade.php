@extends('layouts.app')

@section('title',  '| Homework')

@section('content')
<link href="<?php echo e(asset('css/profile.css')); ?>" rel="stylesheet">

<div class="container" style="margin-top: 66px">
    <div id="page-content" class="row">
        <div id="region-main-box" class="col-xs-12">
            <section id="region-main">
                <div class="card card-block">
                    <div role="main">
                        <span id="maincontent"></span>
                        <h2>{{$homework->title}}</h2>
                        <div id="intro" class="box generalbox boxaligncenter p-y-1">
                            <div class="no-overflow">
                                {!! $homework->content !!}
                            </div>
                        </div>
                        <div class="gradingsummary">
                            <h3>Grading summary</h3>
                            <div class="box boxaligncenter gradingsummarytable p-y-1">
                                <table class="generaltable">
                                    <tbody>
                                    <tr class="">
                                        <td class="cell c0" style="">Participants</td>
                                        <td class="cell c1 lastcol" style="">
                                            {{$course->students()->count()}}
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td class="cell c0" style="">Submitted</td>
                                        <td class="cell c1 lastcol" style="">
                                            {{$homework->submissions()->count()}}
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td class="cell c0" style="">Needs grading</td>
                                        <td class="cell c1 lastcol" style="">1</td>
                                    </tr>
                                    <tr class="">
                                        <td class="cell c0" style="">Due date</td>
                                        <td class="cell c1 lastcol" style="">{{$homework->dead_line}}</td>
                                    </tr>
                                    <tr class="lastrow">
                                        <td class="cell c0" style="">Time remaining</td>
                                        <td class="cell c1 lastcol" style="">
                                            {{$overtime ? 'overtime' : $time_left}}
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="submissionlinks">
                                <a href="https://school.demo.moodle.net/mod/assign/view.php?id=787&amp;action=grading" class="btn btn-secondary">View all submissions</a>
                                <a href="https://school.demo.moodle.net/mod/assign/view.php?id=787&amp;action=grader" class="btn btn-primary">Grade</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

@endsection