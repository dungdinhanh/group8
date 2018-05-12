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
                        <div class="submissionstatustable" id="yui_3_17_2_1_1526162991307_51">
                            <h3 id="yui_3_17_2_1_1526162991307_50">Submission status</h3>
                            <div class="box boxaligncenter submissionsummarytable p-y-1">
                                <table class="generaltable">
                                    <tbody>
                                    <tr class="">
                                        <td class="cell c0" style="">Submission status</td>
                                        <td class="submissionstatussubmitted cell c1 lastcol" style="">No attempt</td>
                                    </tr>
                                    <tr class="">
                                        <td class="cell c0" style="">Grading status</td>
                                        <td class="submissionnotgraded cell c1 lastcol" style="">Not marked</td>
                                    </tr>
                                    <tr class="">
                                        <td class="cell c0" style="">Due date</td>
                                        <td class="cell c1 lastcol" style="">{{$homework->dead_line}}</td>
                                    </tr>
                                    <tr class="">
                                        <td class="cell c0" style="">Time remaining</td>
                                        <td class="earlysubmission cell c1 lastcol" style="">{{$time_left}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="box generalbox submissionaction p-y-1">
                                <div class="singlebutton">
                                    <a href="{{route('student.submission.form', ['homework_id' => $homework->id])}}">
                                        <button class="btn btn-primary">
                                            Add submission
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

@endsection