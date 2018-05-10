@extends('layouts.app')

@section('title', '| Submission')
{{-- Require input to have homework, submission + course name + student name--}}
@section('content')
<div id="page" class="container-fluid">
    <header id="page-header" class="row">
        <div class="col-xs-12 p-a-1">
            <div class="card">
                <div class="card-block">
                    <div class="pull-xs-right context-header-settings-menu"></div>
                    <div class="pull-xs-left">
                        <div class="page-context-header">
                            <div class="page-header-headings"><h1>{{__($course_name)}}</h1></div>
                        </div>
                    </div>
                    <div class="clearfix w-100 pull-xs-left" id="page-navbar">
                        <div class="breadcrumb-nav">
                            <nav role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="/home">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item">My courses</li>
                                    <li class="breadcrumb-item">
                                        <a href="" title="Digital Literacy ">{{__($course_name)}}</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="#" title="Assignment">Assignment {{__($homework->homework_no)}}</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a title="Assignment">{{$submission->id}}</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                        <div class="breadcrumb-button pull-xs-right"></div>
                    </div>
                    <div id="course-header"></div>
                </div>
            </div>
        </div>
    </header>

    <div id="page-content" class="row">
        <div id="region-main-box" class="col-xs-12">
            <section id="region-main">
                <div class="card card-block" id="yui_3_17_2_1_1524923385116_63">
                    <span class="notifications" id="user-notifications"></span>
                    <div role="main" id="yui_3_17_2_1_1524923385116_62">
                        <span id="maincontent"></span>
                        <h2>Assignment {{__($homework->homework_no)}} (Text)</h2>
                        <div id="intro" class="box generalbox boxaligncenter p-y-1">
                            <div class="no-overflow">
                                <p>{{__($homework->title)}}</p>
                                <p>{{__($homework->content)}}</p>
                            </div>
                        </div>
                        <div class="submissionstatustable" id="yui_3_17_2_1_1524923385116_61">
                            <h3>Submission status</h3>
                            <div class="box boxaligncenter submissionsummarytable p-y-1">
                                <table class="generaltable">
                                    <tbody>
                                    <tr class="">
                                        <td class="cell c0" style="">Submission status</td>
                                        <td class="submissionstatussubmitted cell c1 lastcol" style="">Submitted for
                                            grading
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td class="cell c0" style="">Submission title</td>
                                        <td class="submissionnotgraded cell c1 lastcol" style="">
                                            {{$submission->title}}
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td class="cell c0" style="">Due date</td>
                                        <td class="cell c1 lastcol" style="">{{__($homework->dead_line)}}</td>
                                    </tr>
                                    <tr class="">
                                        <td class="cell c0" style="">{{__('Over time')}}</td>
                                        <td class="cell c1 lastcol" style="">{{$submission->overtime}}</td>
                                    </tr>
                                    <tr class="">
                                        <td class="cell c0" style="">Last modified</td>
                                        <td class="cell c1 lastcol" style="">{{(string)$submission->created_at}}</td>
                                    </tr>
                                    <tr class="">
                                        <td class="cell c0" style="">Online text</td>
                                        <td class="cell c1 lastcol" style="">
                                            <div class="box boxaligncenter plugincontentsummary summary_assignsubmission_onlinetext_95 p-y-1">
                                                <i class="icon fa fa-plus fa-fw expandsummaryicon expand_assignsubmission_onlinetext_95"
                                                   aria-hidden="true" title="View full" aria-label="View full"></i>
                                                <img class="icon spacer" width="15" height="1" alt=""
                                                     src="https://school.demo.moodle.net/theme/image.php/boost/core/1524916862/spacer">
                                                <div class="no-overflow">{{$submission->content}}</div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr class="">
                                        <td class="cell c0" style="">{{__('Note for teacher')}}</td>
                                        <td class="cell c1 lastcol" style="">{{$submission->note}}</td>
                                    </tr>

                                    <tr class="lastrow">
                                        <td class="cell c0" style="">{{__('Review Comment')}}</td>
                                        <td class="cell c1 lastcol" style="">
                                            <div class="box boxaligncenter plugincontentsummary summary_assignsubmission_comments_95 p-y-1">
                                                <div class="commentscontainer">
                                                    <div style="display:none" id="cmt-tmpl">
                                                        <div class="comment-message">
                                                            <div class="comment-message-meta m-r-3">
                                                                <span class="picture">___picture___</span>
                                                                <span class="user">___name___</span> -
                                                                <span class="time">___time___</span>
                                                            </div>
                                                            <div class="text">___content___</div>
                                                        </div>
                                                    </div>
                                                    <div class="mdl-left">
                                                        <a class="showcommentsnonjs"
                                                           href="">Show comments
                                                        </a>
                                                        <a class="comment-link" id="comment-link-5ae47bfd41fac" href="#"
                                                           role="button" aria-expanded="false">
                                                            <i class="icon fa fa-plus-square fa-fw "
                                                               aria-hidden="true" title="Comments"
                                                               aria-label="Comments"></i>
                                                            <span id="comment-link-text-5ae47bfd41fac">Comments (0)</span>
                                                        </a>
                                                        <div id="comment-ctrl-5ae47bfd41fac" class="comment-ctrl">
                                                            <ul id="comment-list-5ae47bfd41fac" class="comment-list">
                                                                <li class="first"></li>
                                                            </ul>
                                                            <div id="comment-pagination-5ae47bfd41fac"
                                                                 class="comment-pagination"></div>
                                                            <div class="comment-area">
                                                                <div class="db">
                                                                    <textarea name="content" rows="2"
                                                                              id="dlg-content-5ae47bfd41fac"
                                                                              cols="20"
                                                                              style="color: grey;">
                                                                    </textarea>
                                                                </div>
                                                                <div class="fd" id="comment-action-5ae47bfd41fac">
                                                                    <a id="comment-action-post-5ae47bfd41fac"
                                                                       href="#">Save comment</a>
                                                                    <span> | </span>
                                                                    <a id="comment-action-cancel-5ae47bfd41fac"
                                                                       href="#">Cancel</a>
                                                                </div>
                                                            </div>
                                                            <div class="clearer"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="box generalbox submissionaction p-y-1" id="yui_3_17_2_1_1524923385116_60">
                                <div class="singlebutton">
                                    <form method="get"
                                          action="{{route('student.submission.form', ['homework_id' => $homework->id])}}">
                                        <input type="hidden" name="id" value="787">
                                        <input type="hidden" name="action" value="editsubmission">
                                        <button type="submit" class="btn btn-secondary"
                                                id="single_button5ae47bfd3aca921" title="">Edit submission
                                        </button>
                                    </form>
                                </div>
                                <div class="box boxaligncenter submithelp p-y-1" id="yui_3_17_2_1_1524923385116_59">
                                    Make changes to your submission
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