@extends('layouts.app')

@section('title', '| Submission list')


@section('content')
    <div class="box boxaligncenter quickgradingform p-y-1">
        <form autocomplete="off" action="https://school.demo.moodle.net/mod/assign/view.php" method="post"
              accept-charset="utf-8" id="mform3" class="mform">
            <div style="display: none;"><input name="id" type="hidden" value="787">
                <input name="action" type="hidden" value="quickgrade">
                <input name="lastpage" type="hidden" value="">
                <input name="sesskey" type="hidden" value="liMieijc2T">
                <input name="_qf__mod_assign_quick_grading_form" type="hidden" value="1">
            </div>

            <div class="box boxaligncenter gradingtable p-y-1">
                <div class="resettable mdl-right"><a
                            href="https://school.demo.moodle.net/mod/assign/view.php?action=grading&amp;id=787&amp;treset=1">Reset
                        table preferences</a></div>
                <div class="no-overflow">
                    <table cellspacing="0" class="flexible generaltable generalbox">
                        <thead>
                        <tr>
                            <th class="header c0" scope="col">Select
                                <div class="selectall"><label class="accesshide" for="selectall">Select all</label>
                                    <input type="checkbox" id="selectall" name="selectall" title="Select all"></div>
                                <div class="commands"></div>
                            </th>
                            <th class="header c1" scope="col"><a
                                        href="https://school.demo.moodle.net/mod/assign/view.php?action=grading&amp;id=787&amp;tsort=picture">User
                                    picture<span class="accesshide ">Sort by User picture Ascending</span></a>
                                <div class="commands"><a title="Hide User picture" aria-expanded="true"
                                                         aria-controls="mod_assign_grading_r0_c1 mod_assign_grading_r1_c1 mod_assign_grading_r2_c1 mod_assign_grading_r3_c1 mod_assign_grading_r4_c1 mod_assign_grading_r5_c1 mod_assign_grading_r6_c1 mod_assign_grading_r7_c1 mod_assign_grading_r8_c1 mod_assign_grading_r9_c1 mod_assign_grading_r10_c1 mod_assign_grading_r11_c1 mod_assign_grading_r12_c1 mod_assign_grading_r13_c1 mod_assign_grading_r14_c1 mod_assign_grading_r15_c1 mod_assign_grading_r16_c1 mod_assign_grading_r17_c1 mod_assign_grading_r18_c1 mod_assign_grading_r19_c1"
                                                         href="https://school.demo.moodle.net/mod/assign/view.php?action=grading&amp;id=787&amp;thide=picture"><i
                                                class="icon fa fa-minus fa-fw " aria-hidden="true" title="Hide"
                                                aria-label="Hide"></i></a></div>
                            </th>
                            <th class="header c2" scope="col"><a
                                        href="https://school.demo.moodle.net/mod/assign/view.php?action=grading&amp;id=787&amp;tsort=firstname">First
                                    name<span class="accesshide ">Sort by First name Ascending</span></a> / <a
                                        href="https://school.demo.moodle.net/mod/assign/view.php?action=grading&amp;id=787&amp;tsort=lastname">Surname<span
                                            class="accesshide ">Sort by Surname Ascending</span></a>
                                <div class="commands"><a title="Hide Full name" aria-expanded="true"
                                                         aria-controls="mod_assign_grading_r0_c2 mod_assign_grading_r1_c2 mod_assign_grading_r2_c2 mod_assign_grading_r3_c2 mod_assign_grading_r4_c2 mod_assign_grading_r5_c2 mod_assign_grading_r6_c2 mod_assign_grading_r7_c2 mod_assign_grading_r8_c2 mod_assign_grading_r9_c2 mod_assign_grading_r10_c2 mod_assign_grading_r11_c2 mod_assign_grading_r12_c2 mod_assign_grading_r13_c2 mod_assign_grading_r14_c2 mod_assign_grading_r15_c2 mod_assign_grading_r16_c2 mod_assign_grading_r17_c2 mod_assign_grading_r18_c2 mod_assign_grading_r19_c2"
                                                         href="https://school.demo.moodle.net/mod/assign/view.php?action=grading&amp;id=787&amp;thide=fullname"><i
                                                class="icon fa fa-minus fa-fw " aria-hidden="true" title="Hide"
                                                aria-label="Hide"></i></a></div>
                            </th>
                            <th class="header c3 email" scope="col"><a
                                        href="https://school.demo.moodle.net/mod/assign/view.php?action=grading&amp;id=787&amp;tsort=email">Email
                                    address<span class="accesshide ">Sort by Email address Ascending</span></a>
                                <div class="commands"><a title="Hide Email address" aria-expanded="true"
                                                         aria-controls="mod_assign_grading_r0_c3 mod_assign_grading_r1_c3 mod_assign_grading_r2_c3 mod_assign_grading_r3_c3 mod_assign_grading_r4_c3 mod_assign_grading_r5_c3 mod_assign_grading_r6_c3 mod_assign_grading_r7_c3 mod_assign_grading_r8_c3 mod_assign_grading_r9_c3 mod_assign_grading_r10_c3 mod_assign_grading_r11_c3 mod_assign_grading_r12_c3 mod_assign_grading_r13_c3 mod_assign_grading_r14_c3 mod_assign_grading_r15_c3 mod_assign_grading_r16_c3 mod_assign_grading_r17_c3 mod_assign_grading_r18_c3 mod_assign_grading_r19_c3"
                                                         href="https://school.demo.moodle.net/mod/assign/view.php?action=grading&amp;id=787&amp;thide=email"><i
                                                class="icon fa fa-minus fa-fw " aria-hidden="true" title="Hide"
                                                aria-label="Hide"></i></a></div>
                            </th>
                            <th class="header c4" scope="col"><a
                                        href="https://school.demo.moodle.net/mod/assign/view.php?action=grading&amp;id=787&amp;tsort=status">Status<span
                                            class="accesshide ">Sort by Status Ascending</span></a>
                                <div class="commands"><a title="Hide Status" aria-expanded="true"
                                                         aria-controls="mod_assign_grading_r0_c4 mod_assign_grading_r1_c4 mod_assign_grading_r2_c4 mod_assign_grading_r3_c4 mod_assign_grading_r4_c4 mod_assign_grading_r5_c4 mod_assign_grading_r6_c4 mod_assign_grading_r7_c4 mod_assign_grading_r8_c4 mod_assign_grading_r9_c4 mod_assign_grading_r10_c4 mod_assign_grading_r11_c4 mod_assign_grading_r12_c4 mod_assign_grading_r13_c4 mod_assign_grading_r14_c4 mod_assign_grading_r15_c4 mod_assign_grading_r16_c4 mod_assign_grading_r17_c4 mod_assign_grading_r18_c4 mod_assign_grading_r19_c4"
                                                         href="https://school.demo.moodle.net/mod/assign/view.php?action=grading&amp;id=787&amp;thide=status"><i
                                                class="icon fa fa-minus fa-fw " aria-hidden="true" title="Hide"
                                                aria-label="Hide"></i></a></div>
                            </th>
                            <th class="header c5" scope="col"><a
                                        href="https://school.demo.moodle.net/mod/assign/view.php?action=grading&amp;id=787&amp;tsort=grade">Grade<span
                                            class="accesshide ">Sort by Grade Ascending</span></a>
                                <div class="commands"><a title="Hide Grade" aria-expanded="true"
                                                         aria-controls="mod_assign_grading_r0_c5 mod_assign_grading_r1_c5 mod_assign_grading_r2_c5 mod_assign_grading_r3_c5 mod_assign_grading_r4_c5 mod_assign_grading_r5_c5 mod_assign_grading_r6_c5 mod_assign_grading_r7_c5 mod_assign_grading_r8_c5 mod_assign_grading_r9_c5 mod_assign_grading_r10_c5 mod_assign_grading_r11_c5 mod_assign_grading_r12_c5 mod_assign_grading_r13_c5 mod_assign_grading_r14_c5 mod_assign_grading_r15_c5 mod_assign_grading_r16_c5 mod_assign_grading_r17_c5 mod_assign_grading_r18_c5 mod_assign_grading_r19_c5"
                                                         href="https://school.demo.moodle.net/mod/assign/view.php?action=grading&amp;id=787&amp;thide=grade"><i
                                                class="icon fa fa-minus fa-fw " aria-hidden="true" title="Hide"
                                                aria-label="Hide"></i></a></div>
                            </th>
                            <th class="header c6" scope="col">Edit
                                <div class="commands"><a title="Hide Edit" aria-expanded="true"
                                                         aria-controls="mod_assign_grading_r0_c6 mod_assign_grading_r1_c6 mod_assign_grading_r2_c6 mod_assign_grading_r3_c6 mod_assign_grading_r4_c6 mod_assign_grading_r5_c6 mod_assign_grading_r6_c6 mod_assign_grading_r7_c6 mod_assign_grading_r8_c6 mod_assign_grading_r9_c6 mod_assign_grading_r10_c6 mod_assign_grading_r11_c6 mod_assign_grading_r12_c6 mod_assign_grading_r13_c6 mod_assign_grading_r14_c6 mod_assign_grading_r15_c6 mod_assign_grading_r16_c6 mod_assign_grading_r17_c6 mod_assign_grading_r18_c6 mod_assign_grading_r19_c6"
                                                         href="https://school.demo.moodle.net/mod/assign/view.php?action=grading&amp;id=787&amp;thide=userid"><i
                                                class="icon fa fa-minus fa-fw " aria-hidden="true" title="Hide"
                                                aria-label="Hide"></i></a></div>
                            </th>
                            <th class="header c7" scope="col"><a
                                        href="https://school.demo.moodle.net/mod/assign/view.php?action=grading&amp;id=787&amp;tsort=timesubmitted">Last
                                    modified (submission)<span class="accesshide ">Sort by Last modified (submission) Ascending</span></a>
                                <div class="commands"><a title="Hide Last modified (submission)" aria-expanded="true"
                                                         aria-controls="mod_assign_grading_r0_c7 mod_assign_grading_r1_c7 mod_assign_grading_r2_c7 mod_assign_grading_r3_c7 mod_assign_grading_r4_c7 mod_assign_grading_r5_c7 mod_assign_grading_r6_c7 mod_assign_grading_r7_c7 mod_assign_grading_r8_c7 mod_assign_grading_r9_c7 mod_assign_grading_r10_c7 mod_assign_grading_r11_c7 mod_assign_grading_r12_c7 mod_assign_grading_r13_c7 mod_assign_grading_r14_c7 mod_assign_grading_r15_c7 mod_assign_grading_r16_c7 mod_assign_grading_r17_c7 mod_assign_grading_r18_c7 mod_assign_grading_r19_c7"
                                                         href="https://school.demo.moodle.net/mod/assign/view.php?action=grading&amp;id=787&amp;thide=timesubmitted"><i
                                                class="icon fa fa-minus fa-fw " aria-hidden="true" title="Hide"
                                                aria-label="Hide"></i></a></div>
                            </th>
                            <th class="header c8" scope="col">Online text
                                <div class="commands"><a title="Hide Online text" aria-expanded="true"
                                                         aria-controls="mod_assign_grading_r0_c8 mod_assign_grading_r1_c8 mod_assign_grading_r2_c8 mod_assign_grading_r3_c8 mod_assign_grading_r4_c8 mod_assign_grading_r5_c8 mod_assign_grading_r6_c8 mod_assign_grading_r7_c8 mod_assign_grading_r8_c8 mod_assign_grading_r9_c8 mod_assign_grading_r10_c8 mod_assign_grading_r11_c8 mod_assign_grading_r12_c8 mod_assign_grading_r13_c8 mod_assign_grading_r14_c8 mod_assign_grading_r15_c8 mod_assign_grading_r16_c8 mod_assign_grading_r17_c8 mod_assign_grading_r18_c8 mod_assign_grading_r19_c8"
                                                         href="https://school.demo.moodle.net/mod/assign/view.php?action=grading&amp;id=787&amp;thide=plugin0"><i
                                                class="icon fa fa-minus fa-fw " aria-hidden="true" title="Hide"
                                                aria-label="Hide"></i></a></div>
                            </th>
                            <th class="header c9" scope="col">Submission comments
                                <div class="commands"><a title="Hide Submission comments" aria-expanded="true"
                                                         aria-controls="mod_assign_grading_r0_c9 mod_assign_grading_r1_c9 mod_assign_grading_r2_c9 mod_assign_grading_r3_c9 mod_assign_grading_r4_c9 mod_assign_grading_r5_c9 mod_assign_grading_r6_c9 mod_assign_grading_r7_c9 mod_assign_grading_r8_c9 mod_assign_grading_r9_c9 mod_assign_grading_r10_c9 mod_assign_grading_r11_c9 mod_assign_grading_r12_c9 mod_assign_grading_r13_c9 mod_assign_grading_r14_c9 mod_assign_grading_r15_c9 mod_assign_grading_r16_c9 mod_assign_grading_r17_c9 mod_assign_grading_r18_c9 mod_assign_grading_r19_c9"
                                                         href="https://school.demo.moodle.net/mod/assign/view.php?action=grading&amp;id=787&amp;thide=plugin1"><i
                                                class="icon fa fa-minus fa-fw " aria-hidden="true" title="Hide"
                                                aria-label="Hide"></i></a></div>
                            </th>
                            <th class="header c10" scope="col"><a
                                        href="https://school.demo.moodle.net/mod/assign/view.php?action=grading&amp;id=787&amp;tsort=timemarked">Last
                                    modified (grade)<span
                                            class="accesshide ">Sort by Last modified (grade) Ascending</span></a>
                                <div class="commands"><a title="Hide Last modified (grade)" aria-expanded="true"
                                                         aria-controls="mod_assign_grading_r0_c10 mod_assign_grading_r1_c10 mod_assign_grading_r2_c10 mod_assign_grading_r3_c10 mod_assign_grading_r4_c10 mod_assign_grading_r5_c10 mod_assign_grading_r6_c10 mod_assign_grading_r7_c10 mod_assign_grading_r8_c10 mod_assign_grading_r9_c10 mod_assign_grading_r10_c10 mod_assign_grading_r11_c10 mod_assign_grading_r12_c10 mod_assign_grading_r13_c10 mod_assign_grading_r14_c10 mod_assign_grading_r15_c10 mod_assign_grading_r16_c10 mod_assign_grading_r17_c10 mod_assign_grading_r18_c10 mod_assign_grading_r19_c10"
                                                         href="https://school.demo.moodle.net/mod/assign/view.php?action=grading&amp;id=787&amp;thide=timemarked"><i
                                                class="icon fa fa-minus fa-fw " aria-hidden="true" title="Hide"
                                                aria-label="Hide"></i></a></div>
                            </th>
                            <th class="header c11" scope="col">Feedback comments
                                <div class="commands"><a title="Hide Feedback comments" aria-expanded="true"
                                                         aria-controls="mod_assign_grading_r0_c11 mod_assign_grading_r1_c11 mod_assign_grading_r2_c11 mod_assign_grading_r3_c11 mod_assign_grading_r4_c11 mod_assign_grading_r5_c11 mod_assign_grading_r6_c11 mod_assign_grading_r7_c11 mod_assign_grading_r8_c11 mod_assign_grading_r9_c11 mod_assign_grading_r10_c11 mod_assign_grading_r11_c11 mod_assign_grading_r12_c11 mod_assign_grading_r13_c11 mod_assign_grading_r14_c11 mod_assign_grading_r15_c11 mod_assign_grading_r16_c11 mod_assign_grading_r17_c11 mod_assign_grading_r18_c11 mod_assign_grading_r19_c11"
                                                         href="https://school.demo.moodle.net/mod/assign/view.php?action=grading&amp;id=787&amp;thide=plugin2"><i
                                                class="icon fa fa-minus fa-fw " aria-hidden="true" title="Hide"
                                                aria-label="Hide"></i></a></div>
                            </th>
                            <th class="header c12" scope="col">Final grade
                                <div class="commands"><a title="Hide Final grade" aria-expanded="true"
                                                         aria-controls="mod_assign_grading_r0_c12 mod_assign_grading_r1_c12 mod_assign_grading_r2_c12 mod_assign_grading_r3_c12 mod_assign_grading_r4_c12 mod_assign_grading_r5_c12 mod_assign_grading_r6_c12 mod_assign_grading_r7_c12 mod_assign_grading_r8_c12 mod_assign_grading_r9_c12 mod_assign_grading_r10_c12 mod_assign_grading_r11_c12 mod_assign_grading_r12_c12 mod_assign_grading_r13_c12 mod_assign_grading_r14_c12 mod_assign_grading_r15_c12 mod_assign_grading_r16_c12 mod_assign_grading_r17_c12 mod_assign_grading_r18_c12 mod_assign_grading_r19_c12"
                                                         href="https://school.demo.moodle.net/mod/assign/view.php?action=grading&amp;id=787&amp;thide=finalgrade"><i
                                                class="icon fa fa-minus fa-fw " aria-hidden="true" title="Hide"
                                                aria-label="Hide"></i></a></div>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($submissions as $submission)
                        <tr class="user30 unselectedrow" id="mod_assign_grading_r0">
                            <td class="cell c0" id="mod_assign_grading_r0_c0"><label class="accesshide"
                                                                                     for="selectuser_30">Select Susan
                                    Medina</label><input type="checkbox" id="selectuser_30" name="selectedusers"
                                                         value="30"><input type="hidden" name="grademodified_30"
                                                                           value="1526181545"><input type="hidden"
                                                                                                     name="gradeattempt_30"
                                                                                                     value="0"></td>
                            <td class="cell c1" id="mod_assign_grading_r0_c1"><a
                                        href="https://school.demo.moodle.net/user/view.php?id=30&amp;course=66"><img
                                            src="https://school.demo.moodle.net/pluginfile.php/177/user/icon/boost/f2?rev=3105"
                                            alt="{{$submission->student_id}}" title="Susan Medina" class="userpicture" width="35"
                                            height="35"></a></td>
                            <td class="cell c2" id="mod_assign_grading_r0_c2"><a
                                        href="https://school.demo.moodle.net/user/view.php?id=30&amp;course=66"
                                        id="action_link5af7b6b62a04722" class="">Susan Medina</a></td>
                            <td class="cell c3 email" id="mod_assign_grading_r0_c3">susanmedina293@example.com</td>
                            <td class="cell c4" id="mod_assign_grading_r0_c4">
                                <div class="submissionstatus">No submission</div>
                            </td>
                            <td class="cell c5" id="mod_assign_grading_r0_c5"><a
                                        href="https://school.demo.moodle.net/mod/assign/view.php?id=787&amp;rownum=0&amp;action=grader&amp;userid=30"
                                        class="btn btn-primary">Grade</a><img class="icon spacer" width="1" height="1"
                                                                              alt=""
                                                                              src="https://school.demo.moodle.net/theme/image.php/boost/core/1526176859/spacer"><br><label
                                        class="accesshide" for="quickgrade_30">User grade</label><input type="text"
                                                                                                        id="quickgrade_30"
                                                                                                        name="quickgrade_30"
                                                                                                        value=""
                                                                                                        size="6"
                                                                                                        maxlength="10"
                                                                                                        class="quickgrade">&nbsp;/&nbsp;100.00
                            </td>
                            <td class="cell c6" id="mod_assign_grading_r0_c6">
                                <div class="action-menu moodle-actionmenu" id="action-menu-3"
                                     data-enhance="moodle-core-actionmenu" data-owner=".gradingtable-actionmenu">

                                    <div class="menubar" id="action-menu-3-menubar" role="menubar">

                                        <div class="dropdown d-inline">
                                            <a href="#" class=" dropdown-toggle" id="dropdown-3" title="" role="button"
                                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Edit<b
                                                        class="caret"></b></a>
                                            <div class="dropdown-menu dropdown-menu-right menu  align-tl-bl"
                                                 id="action-menu-3-menu" data-rel="menu-content"
                                                 aria-labelledby="action-menu-toggle-3" role="menu" data-align="tl-bl"
                                                 data-constraint=".gradingtable > .no-overflow">
                                                <a href="https://school.demo.moodle.net/mod/assign/view.php?id=787&amp;rownum=0&amp;action=grader&amp;userid=30"
                                                   class="dropdown-item menu-action" role="menuitem"
                                                   aria-labelledby="actionmenuaction-8"><span class="menu-action-text"
                                                                                              id="actionmenuaction-8">Update grade</span></a><a
                                                        href="https://school.demo.moodle.net/mod/assign/view.php?id=787&amp;userid=30&amp;action=lock&amp;sesskey=liMieijc2T&amp;page=0"
                                                        class="dropdown-item menu-action" role="menuitem"
                                                        aria-labelledby="actionmenuaction-9"><span
                                                            class="menu-action-text" id="actionmenuaction-9">Prevent submission changes</span></a><a
                                                        href="https://school.demo.moodle.net/mod/assign/view.php?id=787&amp;userid=30&amp;action=grantextension&amp;sesskey=liMieijc2T&amp;page=0"
                                                        class="dropdown-item menu-action" role="menuitem"
                                                        aria-labelledby="actionmenuaction-10"><span
                                                            class="menu-action-text" id="actionmenuaction-10">Grant extension</span></a>
                                            </div>
                                        </div>


                                    </div>

                                </div>
                            </td>
                            <td class="cell c7" id="mod_assign_grading_r0_c7">-</td>
                            <td class="cell c8" id="mod_assign_grading_r0_c8"><a
                                        href="https://school.demo.moodle.net/mod/assign/view.php?id=787&amp;sid=96&amp;gid=96&amp;plugin=onlinetext&amp;action=viewpluginassignsubmission&amp;returnaction=grading&amp;returnparams"
                                        id="action_link5af7b6b62a04726" class=""><i
                                            class="icon fa fa-search-plus fa-fw " aria-hidden="true"
                                            title="View submission" aria-label="View submission"></i></a><img
                                        class="icon spacer" width="1" height="1" alt=""
                                        src="https://school.demo.moodle.net/theme/image.php/boost/core/1526176859/spacer"><br>
                            </td>
                            <td class="cell c9" id="mod_assign_grading_r0_c9">
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
                                                             href="https://school.demo.moodle.net/mod/assign/view.php?id=787&amp;rownum=0&amp;useridlistid=5af7b6b624cd6031376538&amp;action=grading&amp;nonjscomment=1&amp;comment_itemid=96&amp;comment_context=1324&amp;comment_component=assignsubmission_comments&amp;comment_area=submission_comments">Show
                                            comments</a><a class="comment-link" id="comment-link-5af7b6b63ad0d" href="#"
                                                           role="button" aria-expanded="false"><i
                                                    class="icon fa fa-plus-square fa-fw " aria-hidden="true"
                                                    title="Comments" aria-label="Comments"></i><span
                                                    id="comment-link-text-5af7b6b63ad0d">Comments (0)</span></a>
                                        <div id="comment-ctrl-5af7b6b63ad0d" class="comment-ctrl">
                                            <ul id="comment-list-5af7b6b63ad0d" class="comment-list">
                                                <li class="first"></li>
                                            </ul>
                                            <div id="comment-pagination-5af7b6b63ad0d" class="comment-pagination"></div>
                                            <div class="comment-area">
                                                <div class="db"><textarea name="content" rows="2"
                                                                          id="dlg-content-5af7b6b63ad0d" cols="20"
                                                                          style="color: grey;"></textarea></div>
                                                <div class="fd" id="comment-action-5af7b6b63ad0d"><a
                                                            id="comment-action-post-5af7b6b63ad0d" href="#">Save
                                                        comment</a><span> | </span><a
                                                            id="comment-action-cancel-5af7b6b63ad0d" href="#">Cancel</a>
                                                </div>
                                            </div>
                                            <div class="clearer"></div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="cell c10" id="mod_assign_grading_r0_c10">-</td>
                            <td class="cell c11" id="mod_assign_grading_r0_c11"><label for="quickgrade_comments_30"
                                                                                       class="accesshide">Feedback
                                    comments</label><textarea name="quickgrade_comments_30" id="quickgrade_comments_30"
                                                              class="quickgrade"></textarea></td>
                            <td class="cell c12" id="mod_assign_grading_r0_c12">-</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="form-group row  fitem   ">
                <div class="col-md-3">
        <span class="pull-xs-right text-nowrap">



        </span>
                    <label class="col-form-label d-inline " for="id_sendstudentnotifications">
                        Notify students
                    </label>
                </div>
                <div class="col-md-9 form-inline felement" data-fieldtype="selectyesno">
                    <select class="custom-select

                       " name="sendstudentnotifications" id="id_sendstudentnotifications">
                        <option value="0">No</option>
                        <option value="1" selected="">Yes</option>
                    </select>
                    <div class="form-control-feedback" id="id_error_sendstudentnotifications" style="display: none;">

                    </div>
                </div>
            </div>
            <div class="form-group row  fitem femptylabel  ">
                <div class="col-md-3">
        <span class="pull-xs-right text-nowrap">



        </span>
                    <label class="col-form-label d-inline " for="id_savequickgrades">

                    </label>
                </div>
                <div class="col-md-9 form-inline felement" data-fieldtype="submit">
                    <input type="submit" class="btn
                    btn-primary

                    " name="savequickgrades" id="id_savequickgrades" value="Save all quick grading changes">
                    <div class="form-control-feedback" id="id_error_savequickgrades" style="display: none;">

                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection