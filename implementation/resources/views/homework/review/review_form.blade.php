@extends('layouts.app')

@section('title', '| Review')
{{--Require input as submission, student name, homework, teacher_id--}}
@section('content')
<div id="page" class="container-fluid" style="margin-top: 66px">
    <div id="page-content">
        <div role="main"><span id="user-notifications"></span><span id="maincontent"></span>
            <div style="text-align: center" data-region="grading-navigation-panel" data-first-userid="48" data-courseid="66"
                 data-showuseridentity="email">
                <div class="">
                    <div data-region="grading-navigation" class="row">


                        <div data-region="assignment-info" class="col-md-4">

                        </div>

                        <div data-region="user-info" class="col-md-4" data-assignmentid="118" data-groupid="0" style="">
                            <h4 id="yui_3_17_2_1_1524980899832_397"><a href="#"><img
                                            src="{{ asset('images/review-icon.png') }}"
                                            class="img-rounded" height="40" role="presentation">{{__("Review Form")}}</a></h4>
                        </div>

                    </div>
                </div>
            </div>
            <div data-region="grade-panel" class="fullwidth">
                <div data-region="grade" data-contextid="1324" data-assignmentid="118"
                     style="max-width: 880px; margin-left: auto; margin-right: auto">
                    <div class="submissionstatustable" id="yui_3_17_2_1_1524980899832_375"><h3>{{__('Submission of
                            '.$student_name)}}</h3>
                        <div class="submissionstatussubmitted">Submitted for grading</div>
                        <div class="submissiongraded">{{__('Homework '.$homework->homework_no)}}</div>
                        <div class="timeremaining">Overtime: {{__("".$submission->overtime." hours")}}</div>
                        <div class="submissioneditable">{{__('Title')}}:{{__($homework->title)}}<br>
                            {{__('Content')}}:{{__($homework->content)}}
                        </div>
                        <div class="assignsubmission assignsubmission_onlinetext">
                            <div class="box boxaligncenter plugincontentsummary summary_assignsubmission_onlinetext_90 p-y-1">
                                <i class="icon fa fa-plus fa-fw expandsummaryicon expand_assignsubmission_onlinetext_90"
                                   aria-hidden="true" title="View full" aria-label="View full"></i>
                                <noscript><a
                                            href="https://school.demo.moodle.net/mod/assign/view.php?id=787&sid=90&plugin=onlinetext&action=viewpluginassignsubmission&returnaction=grade&returnparams=userid%3D48%26amp%3Brownum%3D0%26amp%3Buseridlistid%3D0"
                                            id="action_link5ae55caee789620" class=""><i
                                                class="icon fa fa-search-plus fa-fw " aria-hidden="true"
                                                title="View submission" aria-label="View submission"></i></a></noscript>
                                <img class="icon spacer" width="15" height="1" alt=""
                                     src="https://school.demo.moodle.net/theme/image.php/boost/core/1524974461/spacer">
                                <div class="no-overflow"><p>{{__('Submission Title')}}: {{$submission->title}}</p>
                                <p>{{__('Submission Content')}}: {{$submission->content}}</p>
                                    <p>{{__('Note From Student')}}:{{$submission->note}}</p>
                                </div>
                            </div>

                        </div>
                        <div class="assignsubmission assignsubmission_comments">
                            <div class="box boxaligncenter plugincontentsummary summary_assignsubmission_comments_90 p-y-1">
                                <div class="commentscontainer">
                                    <div style="display:none" id="cmt-tmpl">
                                        <div class="comment-message">
                                            <div class="comment-message-meta m-r-3"><span
                                                        class="picture">___picture___</span><span class="user">___name___</span>
                                                - <span class="time">___time___</span></div>
                                            <div class="text">___content___</div>
                                        </div>
                                    </div>
                                    <div class="mdl-left"><a class="showcommentsnonjs"
                                                             href="https://school.demo.moodle.net/mod/assign/view.php?id=787&amp;userid=48&amp;rownum=0&amp;useridlistid=0&amp;action=grade&amp;nonjscomment=1&amp;comment_itemid=90&amp;comment_context=1324&amp;comment_component=assignsubmission_comments&amp;comment_area=submission_comments">Show
                                            comments</a><a class="comment-link" id="comment-link-5ae55caeee706" href="#"
                                                           role="button" aria-expanded="false"><i
                                                    class="icon fa fa-plus-square fa-fw " aria-hidden="true"
                                                    title="Comments" aria-label="Comments"></i><span
                                                    id="comment-link-text-5ae55caeee706">Comments (0)</span></a>
                                        <div id="comment-ctrl-5ae55caeee706" class="comment-ctrl">
                                            <ul id="comment-list-5ae55caeee706" class="comment-list">
                                                <li class="first"></li>
                                            </ul>
                                            <div id="comment-pagination-5ae55caeee706" class="comment-pagination"></div>
                                            <div class="comment-area">
                                                <div class="db"><textarea name="content" rows="2"
                                                                          id="dlg-content-5ae55caeee706" cols="20"
                                                                          style="color: grey;"></textarea></div>
                                                <div class="fd" id="comment-action-5ae55caeee706"><a
                                                            id="comment-action-post-5ae55caeee706" href="#">Save
                                                        comment</a><span> | </span><a
                                                            id="comment-action-cancel-5ae55caeee706" href="#">Cancel</a>
                                                </div>
                                            </div>
                                            <div class="clearer"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 id="yui_3_17_2_1_1524980899832_377">Grade</h3>
                    <div class="box boxaligncenter gradingform p-y-1" id="yui_3_17_2_1_1524980899832_379">
                        <form class="gradeform mform" autocomplete="off"
                              method="post" action="{{route('add_review', ['submission_id'=>$submission->id])}}"
                              accept-charset="utf-8" id="mform1">
                            <fieldset class="clearfix" id="id_gradeheader">
                                <legend class="ftoggler">Grade</legend>
                                <div class="fcontainer clearfix" id="yui_3_17_2_1_1524980899832_364">
                                    <div class="row form-group">
                                        <label for="general_comment" class="col-form-label col-md-3">
                                            {{__('General Comment')}}
                                        </label>
                                        <div class="col-md-9">
                                            <input id="general_comment" name="general_comment" class="form-control col-md-12"
                                                   type="text" value="General Comment">
                                        </div>
                                    </div>
                                    <div class="form-group row  fitem   ">

                                        <div class="col-md-3">
        <span class="pull-xs-right text-nowrap">


        </span>
                                            <label class="col-form-label d-inline " for="id_grade">
                                                Grade out of 100
                                            </label>
                                        </div>
                                        <div class="col-md-9 form-inline felement" data-fieldtype="text">
                                            <input id="mark" name="mark" class="col-form-label col-md-2" type="number" step="0.1"
                                                   value="10.0">
                                        </div>
                                    </div>
                                    <div class="form-group row fitem has-popout" id="yui_3_17_2_1_1524980899832_363">
                                        <div class="col-md-3">
        <span class="pull-xs-right text-nowrap">



        </span>
                                            <label class="col-form-label d-inline "
                                                   for="id_assignfeedbackcomments_editor"
                                                   id="yui_3_17_2_1_1524980899832_106">
                                                Feedback comments
                                            </label>
                                            <a href="#" data-region="popout-button">

                                                <i class="icon fa fa-arrows-alt fa-fw " aria-hidden="true"
                                                   title="Zoom in/out of region" aria-label="Zoom in/out of region"></i>
                                            </a></div>
                                        <div class="col-md-9 form-inline felement" data-fieldtype="editor"
                                             id="yui_3_17_2_1_1524980899832_362">
                                            <div id="yui_3_17_2_1_1524980899832_361">
                                                <div class="editor_atto_wrap" id="yui_3_17_2_1_1524980899832_360">
                                                    <div class="editor_atto">
                                                            <textarea  name="comment" id="id_assignfeedbackcomments_editoreditable"
                                                                 contenteditable="true" role="textbox" spellcheck="true"
                                                                 aria-live="off"
                                                                 class="editor_atto_content form-control"
                                                                 aria-labelledby="yui_3_17_2_1_1524980899832_106"
                                                                 style="min-height: 308px; height: 308px;">
                                                                 Detail Comment is here
                                                            </textarea>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <input type="hidden" name="teacher_id" value="{{$teacher_id}}">
                                <input type="hidden" name="submission_id" value="{{$submission->id}}">

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{__('Save changes')}}
                                        </button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection