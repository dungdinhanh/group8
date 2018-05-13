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
                                            alt="Susan Medina" title="Susan Medina" class="userpicture" width="35"
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
                        <tr class="user44 unselectedrow" id="mod_assign_grading_r1">
                            <td class="cell c0" id="mod_assign_grading_r1_c0"><label class="accesshide"
                                                                                     for="selectuser_44">Select Joshua
                                    Knight</label><input type="checkbox" id="selectuser_44" name="selectedusers"
                                                         value="44"><input type="hidden" name="grademodified_44"
                                                                           value=""><input type="hidden"
                                                                                           name="gradeattempt_44"
                                                                                           value=""></td>
                            <td class="cell c1" id="mod_assign_grading_r1_c1"><a
                                        href="https://school.demo.moodle.net/user/view.php?id=44&amp;course=66"><img
                                            src="https://school.demo.moodle.net/pluginfile.php/319/user/icon/boost/f2?rev=2463"
                                            alt="Joshua Knight" title="Joshua Knight" class="userpicture" width="35"
                                            height="35"></a></td>
                            <td class="cell c2" id="mod_assign_grading_r1_c2"><a
                                        href="https://school.demo.moodle.net/user/view.php?id=44&amp;course=66"
                                        id="action_link5af7b6b62a04728" class="">Joshua Knight</a></td>
                            <td class="cell c3 email" id="mod_assign_grading_r1_c3">joshuaknight196@example.com</td>
                            <td class="cell c4" id="mod_assign_grading_r1_c4">
                                <div class="submissionstatus">No submission</div>
                            </td>
                            <td class="cell c5" id="mod_assign_grading_r1_c5"><a
                                        href="https://school.demo.moodle.net/mod/assign/view.php?id=787&amp;rownum=0&amp;action=grader&amp;userid=44"
                                        class="btn btn-primary">Grade</a><img class="icon spacer" width="1" height="1"
                                                                              alt=""
                                                                              src="https://school.demo.moodle.net/theme/image.php/boost/core/1526176859/spacer"><br><label
                                        class="accesshide" for="quickgrade_44">User grade</label><input type="text"
                                                                                                        id="quickgrade_44"
                                                                                                        name="quickgrade_44"
                                                                                                        value=""
                                                                                                        size="6"
                                                                                                        maxlength="10"
                                                                                                        class="quickgrade">&nbsp;/&nbsp;100.00
                            </td>
                            <td class="cell c6" id="mod_assign_grading_r1_c6">
                                <div class="action-menu moodle-actionmenu" id="action-menu-4"
                                     data-enhance="moodle-core-actionmenu" data-owner=".gradingtable-actionmenu">

                                    <div class="menubar" id="action-menu-4-menubar" role="menubar">

                                        <div class="dropdown d-inline">
                                            <a href="#" class=" dropdown-toggle" id="dropdown-4" title="" role="button"
                                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Edit<b
                                                        class="caret"></b></a>
                                            <div class="dropdown-menu dropdown-menu-right menu  align-tl-bl"
                                                 id="action-menu-4-menu" data-rel="menu-content"
                                                 aria-labelledby="action-menu-toggle-4" role="menu" data-align="tl-bl"
                                                 data-constraint=".gradingtable > .no-overflow">
                                                <a href="https://school.demo.moodle.net/mod/assign/view.php?id=787&amp;rownum=0&amp;action=grader&amp;userid=44"
                                                   class="dropdown-item menu-action" role="menuitem"
                                                   aria-labelledby="actionmenuaction-11"><span class="menu-action-text"
                                                                                               id="actionmenuaction-11">Grade</span></a><a
                                                        href="https://school.demo.moodle.net/mod/assign/view.php?id=787&amp;userid=44&amp;action=lock&amp;sesskey=liMieijc2T&amp;page=0"
                                                        class="dropdown-item menu-action" role="menuitem"
                                                        aria-labelledby="actionmenuaction-12"><span
                                                            class="menu-action-text" id="actionmenuaction-12">Prevent submission changes</span></a><a
                                                        href="https://school.demo.moodle.net/mod/assign/view.php?id=787&amp;userid=44&amp;action=grantextension&amp;sesskey=liMieijc2T&amp;page=0"
                                                        class="dropdown-item menu-action" role="menuitem"
                                                        aria-labelledby="actionmenuaction-13"><span
                                                            class="menu-action-text" id="actionmenuaction-13">Grant extension</span></a>
                                            </div>
                                        </div>


                                    </div>

                                </div>
                            </td>
                            <td class="cell c7" id="mod_assign_grading_r1_c7">-</td>
                            <td class="cell c8" id="mod_assign_grading_r1_c8"></td>
                            <td class="cell c9" id="mod_assign_grading_r1_c9"></td>
                            <td class="cell c10" id="mod_assign_grading_r1_c10">-</td>
                            <td class="cell c11" id="mod_assign_grading_r1_c11"><label for="quickgrade_comments_44"
                                                                                       class="accesshide">Feedback
                                    comments</label><textarea name="quickgrade_comments_44" id="quickgrade_comments_44"
                                                              class="quickgrade"></textarea></td>
                            <td class="cell c12" id="mod_assign_grading_r1_c12">-</td>
                        </tr>
                        <tr class="user45 unselectedrow" id="mod_assign_grading_r2">
                            <td class="cell c0" id="mod_assign_grading_r2_c0"><label class="accesshide"
                                                                                     for="selectuser_45">Select Donna
                                    Taylor</label><input type="checkbox" id="selectuser_45" name="selectedusers"
                                                         value="45"><input type="hidden" name="grademodified_45"
                                                                           value="1526181553"><input type="hidden"
                                                                                                     name="gradeattempt_45"
                                                                                                     value="0"></td>
                            <td class="cell c1" id="mod_assign_grading_r2_c1"><a
                                        href="https://school.demo.moodle.net/user/view.php?id=45&amp;course=66"><img
                                            src="https://school.demo.moodle.net/pluginfile.php/320/user/icon/boost/f2?rev=2102"
                                            alt="Donna" title="Donna" class="userpicture" width="35" height="35"></a>
                            </td>
                            <td class="cell c2" id="mod_assign_grading_r2_c2"><a
                                        href="https://school.demo.moodle.net/user/view.php?id=45&amp;course=66"
                                        id="action_link5af7b6b62a04732" class="">Donna Taylor</a></td>
                            <td class="cell c3 email" id="mod_assign_grading_r2_c3">donnataylor203@example.com</td>
                            <td class="cell c4" id="mod_assign_grading_r2_c4">
                                <div class="submissionstatus">No submission</div>
                            </td>
                            <td class="cell c5" id="mod_assign_grading_r2_c5"><a
                                        href="https://school.demo.moodle.net/mod/assign/view.php?id=787&amp;rownum=0&amp;action=grader&amp;userid=45"
                                        class="btn btn-primary">Grade</a><img class="icon spacer" width="1" height="1"
                                                                              alt=""
                                                                              src="https://school.demo.moodle.net/theme/image.php/boost/core/1526176859/spacer"><br><label
                                        class="accesshide" for="quickgrade_45">User grade</label><input type="text"
                                                                                                        id="quickgrade_45"
                                                                                                        name="quickgrade_45"
                                                                                                        value=""
                                                                                                        size="6"
                                                                                                        maxlength="10"
                                                                                                        class="quickgrade">&nbsp;/&nbsp;100.00
                            </td>
                            <td class="cell c6" id="mod_assign_grading_r2_c6">
                                <div class="action-menu moodle-actionmenu" id="action-menu-5"
                                     data-enhance="moodle-core-actionmenu" data-owner=".gradingtable-actionmenu">

                                    <div class="menubar" id="action-menu-5-menubar" role="menubar">

                                        <div class="dropdown d-inline">
                                            <a href="#" class=" dropdown-toggle" id="dropdown-5" title="" role="button"
                                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Edit<b
                                                        class="caret"></b></a>
                                            <div class="dropdown-menu dropdown-menu-right menu  align-tl-bl"
                                                 id="action-menu-5-menu" data-rel="menu-content"
                                                 aria-labelledby="action-menu-toggle-5" role="menu" data-align="tl-bl"
                                                 data-constraint=".gradingtable > .no-overflow">
                                                <a href="https://school.demo.moodle.net/mod/assign/view.php?id=787&amp;rownum=0&amp;action=grader&amp;userid=45"
                                                   class="dropdown-item menu-action" role="menuitem"
                                                   aria-labelledby="actionmenuaction-14"><span class="menu-action-text"
                                                                                               id="actionmenuaction-14">Update grade</span></a><a
                                                        href="https://school.demo.moodle.net/mod/assign/view.php?id=787&amp;userid=45&amp;action=lock&amp;sesskey=liMieijc2T&amp;page=0"
                                                        class="dropdown-item menu-action" role="menuitem"
                                                        aria-labelledby="actionmenuaction-15"><span
                                                            class="menu-action-text" id="actionmenuaction-15">Prevent submission changes</span></a><a
                                                        href="https://school.demo.moodle.net/mod/assign/view.php?id=787&amp;userid=45&amp;action=grantextension&amp;sesskey=liMieijc2T&amp;page=0"
                                                        class="dropdown-item menu-action" role="menuitem"
                                                        aria-labelledby="actionmenuaction-16"><span
                                                            class="menu-action-text" id="actionmenuaction-16">Grant extension</span></a>
                                            </div>
                                        </div>


                                    </div>

                                </div>
                            </td>
                            <td class="cell c7" id="mod_assign_grading_r2_c7">-</td>
                            <td class="cell c8" id="mod_assign_grading_r2_c8"><a
                                        href="https://school.demo.moodle.net/mod/assign/view.php?id=787&amp;sid=97&amp;gid=97&amp;plugin=onlinetext&amp;action=viewpluginassignsubmission&amp;returnaction=grading&amp;returnparams"
                                        id="action_link5af7b6b62a04736" class=""><i
                                            class="icon fa fa-search-plus fa-fw " aria-hidden="true"
                                            title="View submission" aria-label="View submission"></i></a><img
                                        class="icon spacer" width="1" height="1" alt=""
                                        src="https://school.demo.moodle.net/theme/image.php/boost/core/1526176859/spacer"><br>
                            </td>
                            <td class="cell c9" id="mod_assign_grading_r2_c9">
                                <div class="commentscontainer">
                                    <div class="mdl-left"><a class="showcommentsnonjs"
                                                             href="https://school.demo.moodle.net/mod/assign/view.php?id=787&amp;rownum=0&amp;useridlistid=5af7b6b624cd6031376538&amp;action=grading&amp;nonjscomment=1&amp;comment_itemid=97&amp;comment_context=1324&amp;comment_component=assignsubmission_comments&amp;comment_area=submission_comments">Show
                                            comments</a><a class="comment-link" id="comment-link-5af7b6b63ca55" href="#"
                                                           role="button" aria-expanded="false"><i
                                                    class="icon fa fa-plus-square fa-fw " aria-hidden="true"
                                                    title="Comments" aria-label="Comments"></i><span
                                                    id="comment-link-text-5af7b6b63ca55">Comments (0)</span></a>
                                        <div id="comment-ctrl-5af7b6b63ca55" class="comment-ctrl">
                                            <ul id="comment-list-5af7b6b63ca55" class="comment-list">
                                                <li class="first"></li>
                                            </ul>
                                            <div id="comment-pagination-5af7b6b63ca55" class="comment-pagination"></div>
                                            <div class="comment-area">
                                                <div class="db"><textarea name="content" rows="2"
                                                                          id="dlg-content-5af7b6b63ca55" cols="20"
                                                                          style="color: grey;"></textarea></div>
                                                <div class="fd" id="comment-action-5af7b6b63ca55"><a
                                                            id="comment-action-post-5af7b6b63ca55" href="#">Save
                                                        comment</a><span> | </span><a
                                                            id="comment-action-cancel-5af7b6b63ca55" href="#">Cancel</a>
                                                </div>
                                            </div>
                                            <div class="clearer"></div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="cell c10" id="mod_assign_grading_r2_c10">-</td>
                            <td class="cell c11" id="mod_assign_grading_r2_c11"><label for="quickgrade_comments_45"
                                                                                       class="accesshide">Feedback
                                    comments</label><textarea name="quickgrade_comments_45" id="quickgrade_comments_45"
                                                              class="quickgrade"></textarea></td>
                            <td class="cell c12" id="mod_assign_grading_r2_c12">-</td>
                        </tr>
                        <tr class="user46 unselectedrow" id="mod_assign_grading_r3">
                            <td class="cell c0" id="mod_assign_grading_r3_c0"><label class="accesshide"
                                                                                     for="selectuser_46">Select Amanda
                                    Hamilton</label><input type="checkbox" id="selectuser_46" name="selectedusers"
                                                           value="46"><input type="hidden" name="grademodified_46"
                                                                             value=""><input type="hidden"
                                                                                             name="gradeattempt_46"
                                                                                             value=""></td>
                            <td class="cell c1" id="mod_assign_grading_r3_c1"><a
                                        href="https://school.demo.moodle.net/user/view.php?id=46&amp;course=66"><img
                                            src="https://school.demo.moodle.net/pluginfile.php/321/user/icon/boost/f2?rev=2084"
                                            alt="Mandy" title="Mandy" class="userpicture" width="35" height="35"></a>
                            </td>
                            <td class="cell c2" id="mod_assign_grading_r3_c2"><a
                                        href="https://school.demo.moodle.net/user/view.php?id=46&amp;course=66"
                                        id="action_link5af7b6b62a04738" class="">Amanda Hamilton</a></td>
                            <td class="cell c3 email" id="mod_assign_grading_r3_c3">amandahamilto205@example.com</td>
                            <td class="cell c4" id="mod_assign_grading_r3_c4">
                                <div class="submissionstatus">No submission</div>
                            </td>
                            <td class="cell c5" id="mod_assign_grading_r3_c5"><a
                                        href="https://school.demo.moodle.net/mod/assign/view.php?id=787&amp;rownum=0&amp;action=grader&amp;userid=46"
                                        class="btn btn-primary">Grade</a><img class="icon spacer" width="1" height="1"
                                                                              alt=""
                                                                              src="https://school.demo.moodle.net/theme/image.php/boost/core/1526176859/spacer"><br><label
                                        class="accesshide" for="quickgrade_46">User grade</label><input type="text"
                                                                                                        id="quickgrade_46"
                                                                                                        name="quickgrade_46"
                                                                                                        value=""
                                                                                                        size="6"
                                                                                                        maxlength="10"
                                                                                                        class="quickgrade">&nbsp;/&nbsp;100.00
                            </td>
                            <td class="cell c6" id="mod_assign_grading_r3_c6">
                                <div class="action-menu moodle-actionmenu" id="action-menu-6"
                                     data-enhance="moodle-core-actionmenu" data-owner=".gradingtable-actionmenu">

                                    <div class="menubar" id="action-menu-6-menubar" role="menubar">

                                        <div class="dropdown d-inline">
                                            <a href="#" class=" dropdown-toggle" id="dropdown-6" title="" role="button"
                                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Edit<b
                                                        class="caret"></b></a>
                                            <div class="dropdown-menu dropdown-menu-right menu  align-tl-bl"
                                                 id="action-menu-6-menu" data-rel="menu-content"
                                                 aria-labelledby="action-menu-toggle-6" role="menu" data-align="tl-bl"
                                                 data-constraint=".gradingtable > .no-overflow">
                                                <a href="https://school.demo.moodle.net/mod/assign/view.php?id=787&amp;rownum=0&amp;action=grader&amp;userid=46"
                                                   class="dropdown-item menu-action" role="menuitem"
                                                   aria-labelledby="actionmenuaction-17"><span class="menu-action-text"
                                                                                               id="actionmenuaction-17">Grade</span></a><a
                                                        href="https://school.demo.moodle.net/mod/assign/view.php?id=787&amp;userid=46&amp;action=lock&amp;sesskey=liMieijc2T&amp;page=0"
                                                        class="dropdown-item menu-action" role="menuitem"
                                                        aria-labelledby="actionmenuaction-18"><span
                                                            class="menu-action-text" id="actionmenuaction-18">Prevent submission changes</span></a><a
                                                        href="https://school.demo.moodle.net/mod/assign/view.php?id=787&amp;userid=46&amp;action=grantextension&amp;sesskey=liMieijc2T&amp;page=0"
                                                        class="dropdown-item menu-action" role="menuitem"
                                                        aria-labelledby="actionmenuaction-19"><span
                                                            class="menu-action-text" id="actionmenuaction-19">Grant extension</span></a>
                                            </div>
                                        </div>


                                    </div>

                                </div>
                            </td>
                            <td class="cell c7" id="mod_assign_grading_r3_c7">-</td>
                            <td class="cell c8" id="mod_assign_grading_r3_c8"></td>
                            <td class="cell c9" id="mod_assign_grading_r3_c9"></td>
                            <td class="cell c10" id="mod_assign_grading_r3_c10">-</td>
                            <td class="cell c11" id="mod_assign_grading_r3_c11"><label for="quickgrade_comments_46"
                                                                                       class="accesshide">Feedback
                                    comments</label><textarea name="quickgrade_comments_46" id="quickgrade_comments_46"
                                                              class="quickgrade"></textarea></td>
                            <td class="cell c12" id="mod_assign_grading_r3_c12">-</td>
                        </tr>
                        <tr class="user47 unselectedrow" id="mod_assign_grading_r4">
                            <td class="cell c0" id="mod_assign_grading_r4_c0"><label class="accesshide"
                                                                                     for="selectuser_47">Select Brian
                                    Franklin</label><input type="checkbox" id="selectuser_47" name="selectedusers"
                                                           value="47"><input type="hidden" name="grademodified_47"
                                                                             value="1487845543"><input type="hidden"
                                                                                                       name="gradeattempt_47"
                                                                                                       value="0"></td>
                            <td class="cell c1" id="mod_assign_grading_r4_c1"><a
                                        href="https://school.demo.moodle.net/user/view.php?id=47&amp;course=66"><img
                                            src="https://school.demo.moodle.net/pluginfile.php/322/user/icon/boost/f2?rev=2093"
                                            alt="Brian" title="Brian" class="userpicture" width="35" height="35"></a>
                            </td>
                            <td class="cell c2" id="mod_assign_grading_r4_c2"><a
                                        href="https://school.demo.moodle.net/user/view.php?id=47&amp;course=66"
                                        id="action_link5af7b6b62a04742" class="">Brian Franklin</a></td>
                            <td class="cell c3 email" id="mod_assign_grading_r4_c3">brianfrankli228@example.com</td>
                            <td class="cell c4" id="mod_assign_grading_r4_c4">
                                <div class="submissionstatussubmitted">Submitted for grading</div>
                            </td>
                            <td class="cell c5" id="mod_assign_grading_r4_c5"><a
                                        href="https://school.demo.moodle.net/mod/assign/view.php?id=787&amp;rownum=0&amp;action=grader&amp;userid=47"
                                        class="btn btn-primary">Grade</a><img class="icon spacer" width="1" height="1"
                                                                              alt=""
                                                                              src="https://school.demo.moodle.net/theme/image.php/boost/core/1526176859/spacer"><br><label
                                        class="accesshide" for="quickgrade_47">User grade</label><input type="text"
                                                                                                        id="quickgrade_47"
                                                                                                        name="quickgrade_47"
                                                                                                        value=""
                                                                                                        size="6"
                                                                                                        maxlength="10"
                                                                                                        class="quickgrade">&nbsp;/&nbsp;100.00
                            </td>
                            <td class="cell c6" id="mod_assign_grading_r4_c6">
                                <div class="action-menu moodle-actionmenu" id="action-menu-7"
                                     data-enhance="moodle-core-actionmenu" data-owner=".gradingtable-actionmenu">

                                    <div class="menubar" id="action-menu-7-menubar" role="menubar">

                                        <div class="dropdown d-inline">
                                            <a href="#" class=" dropdown-toggle" id="dropdown-7" title="" role="button"
                                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Edit<b
                                                        class="caret"></b></a>
                                            <div class="dropdown-menu dropdown-menu-right menu  align-tl-bl"
                                                 id="action-menu-7-menu" data-rel="menu-content"
                                                 aria-labelledby="action-menu-toggle-7" role="menu" data-align="tl-bl"
                                                 data-constraint=".gradingtable > .no-overflow">
                                                <a href="https://school.demo.moodle.net/mod/assign/view.php?id=787&amp;rownum=0&amp;action=grader&amp;userid=47"
                                                   class="dropdown-item menu-action" role="menuitem"
                                                   aria-labelledby="actionmenuaction-20"><span class="menu-action-text"
                                                                                               id="actionmenuaction-20">Update grade</span></a><a
                                                        href="https://school.demo.moodle.net/mod/assign/view.php?id=787&amp;userid=47&amp;action=lock&amp;sesskey=liMieijc2T&amp;page=0"
                                                        class="dropdown-item menu-action" role="menuitem"
                                                        aria-labelledby="actionmenuaction-21"><span
                                                            class="menu-action-text" id="actionmenuaction-21">Prevent submission changes</span></a><a
                                                        href="https://school.demo.moodle.net/mod/assign/view.php?id=787&amp;userid=47&amp;action=grantextension&amp;sesskey=liMieijc2T&amp;page=0"
                                                        class="dropdown-item menu-action" role="menuitem"
                                                        aria-labelledby="actionmenuaction-22"><span
                                                            class="menu-action-text" id="actionmenuaction-22">Grant extension</span></a>
                                            </div>
                                        </div>


                                    </div>

                                </div>
                            </td>
                            <td class="cell c7" id="mod_assign_grading_r4_c7">Thursday, 23 February 2017, 11:25 AM</td>
                            <td class="cell c8" id="mod_assign_grading_r4_c8"><a
                                        href="https://school.demo.moodle.net/mod/assign/view.php?id=787&amp;sid=89&amp;gid=89&amp;plugin=onlinetext&amp;action=viewpluginassignsubmission&amp;returnaction=grading&amp;returnparams"
                                        id="action_link5af7b6b62a04746" class=""><i
                                            class="icon fa fa-search-plus fa-fw " aria-hidden="true"
                                            title="View submission" aria-label="View submission"></i></a><img
                                        class="icon spacer" width="1" height="1" alt=""
                                        src="https://school.demo.moodle.net/theme/image.php/boost/core/1526176859/spacer"><br>
                                <div class="no-overflow">Adds conscience to IT skills</div>
                            </td>
                            <td class="cell c9" id="mod_assign_grading_r4_c9">
                                <div class="commentscontainer">
                                    <div class="mdl-left"><a class="showcommentsnonjs"
                                                             href="https://school.demo.moodle.net/mod/assign/view.php?id=787&amp;rownum=0&amp;useridlistid=5af7b6b624cd6031376538&amp;action=grading&amp;nonjscomment=1&amp;comment_itemid=89&amp;comment_context=1324&amp;comment_component=assignsubmission_comments&amp;comment_area=submission_comments">Show
                                            comments</a><a class="comment-link" id="comment-link-5af7b6b63e0ae" href="#"
                                                           role="button" aria-expanded="false"><i
                                                    class="icon fa fa-plus-square fa-fw " aria-hidden="true"
                                                    title="Comments" aria-label="Comments"></i><span
                                                    id="comment-link-text-5af7b6b63e0ae">Comments (0)</span></a>
                                        <div id="comment-ctrl-5af7b6b63e0ae" class="comment-ctrl">
                                            <ul id="comment-list-5af7b6b63e0ae" class="comment-list">
                                                <li class="first"></li>
                                            </ul>
                                            <div id="comment-pagination-5af7b6b63e0ae" class="comment-pagination"></div>
                                            <div class="comment-area">
                                                <div class="db"><textarea name="content" rows="2"
                                                                          id="dlg-content-5af7b6b63e0ae" cols="20"
                                                                          style="color: grey;"></textarea></div>
                                                <div class="fd" id="comment-action-5af7b6b63e0ae"><a
                                                            id="comment-action-post-5af7b6b63e0ae" href="#">Save
                                                        comment</a><span> | </span><a
                                                            id="comment-action-cancel-5af7b6b63e0ae" href="#">Cancel</a>
                                                </div>
                                            </div>
                                            <div class="clearer"></div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="cell c10" id="mod_assign_grading_r4_c10">-</td>
                            <td class="cell c11" id="mod_assign_grading_r4_c11"><label for="quickgrade_comments_47"
                                                                                       class="accesshide">Feedback
                                    comments</label><textarea name="quickgrade_comments_47" id="quickgrade_comments_47"
                                                              class="quickgrade"></textarea></td>
                            <td class="cell c12" id="mod_assign_grading_r4_c12">-</td>
                        </tr>
                        <tr class="user48 unselectedrow" id="mod_assign_grading_r5">
                            <td class="cell c0" id="mod_assign_grading_r5_c0"><label class="accesshide"
                                                                                     for="selectuser_48">Select Frances
                                    Banks</label><input type="checkbox" id="selectuser_48" name="selectedusers"
                                                        value="48"><input type="hidden" name="grademodified_48"
                                                                          value="1487848639"><input type="hidden"
                                                                                                    name="gradeattempt_48"
                                                                                                    value="0"></td>
                            <td class="cell c1" id="mod_assign_grading_r5_c1"><a
                                        href="https://school.demo.moodle.net/user/view.php?id=48&amp;course=66"><img
                                            src="https://school.demo.moodle.net/pluginfile.php/323/user/icon/boost/f2?rev=2075"
                                            alt="my specs" title="my specs" class="userpicture" width="35" height="35"></a>
                            </td>
                            <td class="cell c2" id="mod_assign_grading_r5_c2"><a
                                        href="https://school.demo.moodle.net/user/view.php?id=48&amp;course=66"
                                        id="action_link5af7b6b62a04748" class="">Frances Banks</a></td>
                            <td class="cell c3 email" id="mod_assign_grading_r5_c3">francesbanks231@example.com</td>
                            <td class="cell c4" id="mod_assign_grading_r5_c4">
                                <div class="submissionstatussubmitted">Submitted for grading</div>
                                <div class="submissiongraded">Graded</div>
                            </td>
                            <td class="cell c5" id="mod_assign_grading_r5_c5"><a
                                        href="https://school.demo.moodle.net/mod/assign/view.php?id=787&amp;rownum=0&amp;action=grader&amp;userid=48"
                                        class="btn btn-primary">Grade</a><img class="icon spacer" width="1" height="1"
                                                                              alt=""
                                                                              src="https://school.demo.moodle.net/theme/image.php/boost/core/1526176859/spacer"><br><label
                                        class="accesshide" for="quickgrade_48">User grade</label><input type="text"
                                                                                                        id="quickgrade_48"
                                                                                                        name="quickgrade_48"
                                                                                                        value="75.00"
                                                                                                        size="6"
                                                                                                        maxlength="10"
                                                                                                        class="quickgrade">&nbsp;/&nbsp;100.00
                            </td>
                            <td class="cell c6" id="mod_assign_grading_r5_c6">
                                <div class="action-menu moodle-actionmenu" id="action-menu-8"
                                     data-enhance="moodle-core-actionmenu" data-owner=".gradingtable-actionmenu">

                                    <div class="menubar" id="action-menu-8-menubar" role="menubar">

                                        <div class="dropdown d-inline">
                                            <a href="#" class=" dropdown-toggle" id="dropdown-8" title="" role="button"
                                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Edit<b
                                                        class="caret"></b></a>
                                            <div class="dropdown-menu dropdown-menu-right menu  align-tl-bl"
                                                 id="action-menu-8-menu" data-rel="menu-content"
                                                 aria-labelledby="action-menu-toggle-8" role="menu" data-align="tl-bl"
                                                 data-constraint=".gradingtable > .no-overflow">
                                                <a href="https://school.demo.moodle.net/mod/assign/view.php?id=787&amp;rownum=0&amp;action=grader&amp;userid=48"
                                                   class="dropdown-item menu-action" role="menuitem"
                                                   aria-labelledby="actionmenuaction-23"><span class="menu-action-text"
                                                                                               id="actionmenuaction-23">Update grade</span></a><a
                                                        href="https://school.demo.moodle.net/mod/assign/view.php?id=787&amp;userid=48&amp;action=lock&amp;sesskey=liMieijc2T&amp;page=0"
                                                        class="dropdown-item menu-action" role="menuitem"
                                                        aria-labelledby="actionmenuaction-24"><span
                                                            class="menu-action-text" id="actionmenuaction-24">Prevent submission changes</span></a><a
                                                        href="https://school.demo.moodle.net/mod/assign/view.php?id=787&amp;userid=48&amp;action=grantextension&amp;sesskey=liMieijc2T&amp;page=0"
                                                        class="dropdown-item menu-action" role="menuitem"
                                                        aria-labelledby="actionmenuaction-25"><span
                                                            class="menu-action-text" id="actionmenuaction-25">Grant extension</span></a>
                                            </div>
                                        </div>


                                    </div>

                                </div>
                            </td>
                            <td class="cell c7" id="mod_assign_grading_r5_c7">Thursday, 23 February 2017, 11:34 AM</td>
                            <td class="cell c8" id="mod_assign_grading_r5_c8"><a
                                        href="https://school.demo.moodle.net/mod/assign/view.php?id=787&amp;sid=90&amp;gid=90&amp;plugin=onlinetext&amp;action=viewpluginassignsubmission&amp;returnaction=grading&amp;returnparams"
                                        id="action_link5af7b6b62a04752" class=""><i
                                            class="icon fa fa-search-plus fa-fw " aria-hidden="true"
                                            title="View submission" aria-label="View submission"></i></a><img
                                        class="icon spacer" width="1" height="1" alt=""
                                        src="https://school.demo.moodle.net/theme/image.php/boost/core/1526176859/spacer"><br>
                                <div class="no-overflow"><p>It is an understanding of best practice online and with
                                        technology along with practical knowledge.</p></div>
                            </td>
                            <td class="cell c9" id="mod_assign_grading_r5_c9">
                                <div class="commentscontainer">
                                    <div class="mdl-left"><a class="showcommentsnonjs"
                                                             href="https://school.demo.moodle.net/mod/assign/view.php?id=787&amp;rownum=0&amp;useridlistid=5af7b6b624cd6031376538&amp;action=grading&amp;nonjscomment=1&amp;comment_itemid=90&amp;comment_context=1324&amp;comment_component=assignsubmission_comments&amp;comment_area=submission_comments">Show
                                            comments</a><a class="comment-link" id="comment-link-5af7b6b63f1db" href="#"
                                                           role="button" aria-expanded="false"><i
                                                    class="icon fa fa-plus-square fa-fw " aria-hidden="true"
                                                    title="Comments" aria-label="Comments"></i><span
                                                    id="comment-link-text-5af7b6b63f1db">Comments (0)</span></a>
                                        <div id="comment-ctrl-5af7b6b63f1db" class="comment-ctrl">
                                            <ul id="comment-list-5af7b6b63f1db" class="comment-list">
                                                <li class="first"></li>
                                            </ul>
                                            <div id="comment-pagination-5af7b6b63f1db" class="comment-pagination"></div>
                                            <div class="comment-area">
                                                <div class="db"><textarea name="content" rows="2"
                                                                          id="dlg-content-5af7b6b63f1db" cols="20"
                                                                          style="color: grey;"></textarea></div>
                                                <div class="fd" id="comment-action-5af7b6b63f1db"><a
                                                            id="comment-action-post-5af7b6b63f1db" href="#">Save
                                                        comment</a><span> | </span><a
                                                            id="comment-action-cancel-5af7b6b63f1db" href="#">Cancel</a>
                                                </div>
                                            </div>
                                            <div class="clearer"></div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="cell c10" id="mod_assign_grading_r5_c10">Thursday, 23 February 2017, 12:17 PM
                            </td>
                            <td class="cell c11" id="mod_assign_grading_r5_c11"><label for="quickgrade_comments_48"
                                                                                       class="accesshide">Feedback
                                    comments</label><textarea name="quickgrade_comments_48" id="quickgrade_comments_48"
                                                              class="quickgrade">&lt;p&gt;Good effort! Feel free to try again when we have studied more.&lt;/p&gt;</textarea>
                            </td>
                            <td class="cell c12" id="mod_assign_grading_r5_c12">75.00&nbsp;/&nbsp;100.00</td>
                        </tr>
                        <tr class="user49 unselectedrow" id="mod_assign_grading_r6">
                            <td class="cell c0" id="mod_assign_grading_r6_c0"><label class="accesshide"
                                                                                     for="selectuser_49">Select Mark
                                    Ellis</label><input type="checkbox" id="selectuser_49" name="selectedusers"
                                                        value="49"><input type="hidden" name="grademodified_49"
                                                                          value="1526181575"><input type="hidden"
                                                                                                    name="gradeattempt_49"
                                                                                                    value="0"></td>
                            <td class="cell c1" id="mod_assign_grading_r6_c1"><a
                                        href="https://school.demo.moodle.net/user/view.php?id=49&amp;course=66"><img
                                            src="https://school.demo.moodle.net/pluginfile.php/324/user/icon/boost/f2?rev=2057"
                                            alt="Picture of Mark Ellis" title="Picture of Mark Ellis"
                                            class="userpicture" width="35" height="35"></a></td>
                            <td class="cell c2" id="mod_assign_grading_r6_c2"><a
                                        href="https://school.demo.moodle.net/user/view.php?id=49&amp;course=66"
                                        id="action_link5af7b6b62a04754" class="">Mark Ellis</a></td>
                            <td class="cell c3 email" id="mod_assign_grading_r6_c3">markellis267@example.com</td>
                            <td class="cell c4" id="mod_assign_grading_r6_c4">
                                <div class="submissionstatus">No submission</div>
                            </td>
                            <td class="cell c5" id="mod_assign_grading_r6_c5"><a
                                        href="https://school.demo.moodle.net/mod/assign/view.php?id=787&amp;rownum=0&amp;action=grader&amp;userid=49"
                                        class="btn btn-primary">Grade</a><img class="icon spacer" width="1" height="1"
                                                                              alt=""
                                                                              src="https://school.demo.moodle.net/theme/image.php/boost/core/1526176859/spacer"><br><label
                                        class="accesshide" for="quickgrade_49">User grade</label><input type="text"
                                                                                                        id="quickgrade_49"
                                                                                                        name="quickgrade_49"
                                                                                                        value=""
                                                                                                        size="6"
                                                                                                        maxlength="10"
                                                                                                        class="quickgrade">&nbsp;/&nbsp;100.00
                            </td>
                            <td class="cell c6" id="mod_assign_grading_r6_c6">
                                <div class="action-menu moodle-actionmenu" id="action-menu-9"
                                     data-enhance="moodle-core-actionmenu" data-owner=".gradingtable-actionmenu">

                                    <div class="menubar" id="action-menu-9-menubar" role="menubar">

                                        <div class="dropdown d-inline">
                                            <a href="#" class=" dropdown-toggle" id="dropdown-9" title="" role="button"
                                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Edit<b
                                                        class="caret"></b></a>
                                            <div class="dropdown-menu dropdown-menu-right menu  align-tl-bl"
                                                 id="action-menu-9-menu" data-rel="menu-content"
                                                 aria-labelledby="action-menu-toggle-9" role="menu" data-align="tl-bl"
                                                 data-constraint=".gradingtable > .no-overflow">
                                                <a href="https://school.demo.moodle.net/mod/assign/view.php?id=787&amp;rownum=0&amp;action=grader&amp;userid=49"
                                                   class="dropdown-item menu-action" role="menuitem"
                                                   aria-labelledby="actionmenuaction-26"><span class="menu-action-text"
                                                                                               id="actionmenuaction-26">Update grade</span></a><a
                                                        href="https://school.demo.moodle.net/mod/assign/view.php?id=787&amp;userid=49&amp;action=lock&amp;sesskey=liMieijc2T&amp;page=0"
                                                        class="dropdown-item menu-action" role="menuitem"
                                                        aria-labelledby="actionmenuaction-27"><span
                                                            class="menu-action-text" id="actionmenuaction-27">Prevent submission changes</span></a><a
                                                        href="https://school.demo.moodle.net/mod/assign/view.php?id=787&amp;userid=49&amp;action=grantextension&amp;sesskey=liMieijc2T&amp;page=0"
                                                        class="dropdown-item menu-action" role="menuitem"
                                                        aria-labelledby="actionmenuaction-28"><span
                                                            class="menu-action-text" id="actionmenuaction-28">Grant extension</span></a>
                                            </div>
                                        </div>


                                    </div>

                                </div>
                            </td>
                            <td class="cell c7" id="mod_assign_grading_r6_c7">-</td>
                            <td class="cell c8" id="mod_assign_grading_r6_c8"><a
                                        href="https://school.demo.moodle.net/mod/assign/view.php?id=787&amp;sid=99&amp;gid=99&amp;plugin=onlinetext&amp;action=viewpluginassignsubmission&amp;returnaction=grading&amp;returnparams"
                                        id="action_link5af7b6b62a04758" class=""><i
                                            class="icon fa fa-search-plus fa-fw " aria-hidden="true"
                                            title="View submission" aria-label="View submission"></i></a><img
                                        class="icon spacer" width="1" height="1" alt=""
                                        src="https://school.demo.moodle.net/theme/image.php/boost/core/1526176859/spacer"><br>
                            </td>
                            <td class="cell c9" id="mod_assign_grading_r6_c9">
                                <div class="commentscontainer">
                                    <div class="mdl-left"><a class="showcommentsnonjs"
                                                             href="https://school.demo.moodle.net/mod/assign/view.php?id=787&amp;rownum=0&amp;useridlistid=5af7b6b624cd6031376538&amp;action=grading&amp;nonjscomment=1&amp;comment_itemid=99&amp;comment_context=1324&amp;comment_component=assignsubmission_comments&amp;comment_area=submission_comments">Show
                                            comments</a><a class="comment-link" id="comment-link-5af7b6b63ff15" href="#"
                                                           role="button" aria-expanded="false"><i
                                                    class="icon fa fa-plus-square fa-fw " aria-hidden="true"
                                                    title="Comments" aria-label="Comments"></i><span
                                                    id="comment-link-text-5af7b6b63ff15">Comments (0)</span></a>
                                        <div id="comment-ctrl-5af7b6b63ff15" class="comment-ctrl">
                                            <ul id="comment-list-5af7b6b63ff15" class="comment-list">
                                                <li class="first"></li>
                                            </ul>
                                            <div id="comment-pagination-5af7b6b63ff15" class="comment-pagination"></div>
                                            <div class="comment-area">
                                                <div class="db"><textarea name="content" rows="2"
                                                                          id="dlg-content-5af7b6b63ff15" cols="20"
                                                                          style="color: grey;"></textarea></div>
                                                <div class="fd" id="comment-action-5af7b6b63ff15"><a
                                                            id="comment-action-post-5af7b6b63ff15" href="#">Save
                                                        comment</a><span> | </span><a
                                                            id="comment-action-cancel-5af7b6b63ff15" href="#">Cancel</a>
                                                </div>
                                            </div>
                                            <div class="clearer"></div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="cell c10" id="mod_assign_grading_r6_c10">-</td>
                            <td class="cell c11" id="mod_assign_grading_r6_c11"><label for="quickgrade_comments_49"
                                                                                       class="accesshide">Feedback
                                    comments</label><textarea name="quickgrade_comments_49" id="quickgrade_comments_49"
                                                              class="quickgrade"></textarea></td>
                            <td class="cell c12" id="mod_assign_grading_r6_c12">-</td>
                        </tr>
                        <tr class="user50 unselectedrow" id="mod_assign_grading_r7">
                            <td class="cell c0" id="mod_assign_grading_r7_c0"><label class="accesshide"
                                                                                     for="selectuser_50">Select George
                                    Lopez</label><input type="checkbox" id="selectuser_50" name="selectedusers"
                                                        value="50"><input type="hidden" name="grademodified_50"
                                                                          value=""><input type="hidden"
                                                                                          name="gradeattempt_50"
                                                                                          value=""></td>
                            <td class="cell c1" id="mod_assign_grading_r7_c1"><a
                                        href="https://school.demo.moodle.net/user/view.php?id=50&amp;course=66"><img
                                            src="https://school.demo.moodle.net/pluginfile.php/325/user/icon/boost/f2?rev=2150"
                                            alt="Picture of George Lopez" title="Picture of George Lopez"
                                            class="userpicture" width="35" height="35"></a></td>
                            <td class="cell c2" id="mod_assign_grading_r7_c2"><a
                                        href="https://school.demo.moodle.net/user/view.php?id=50&amp;course=66"
                                        id="action_link5af7b6b62a04760" class="">George Lopez</a></td>
                            <td class="cell c3 email" id="mod_assign_grading_r7_c3">georgelopez271@example.com</td>
                            <td class="cell c4" id="mod_assign_grading_r7_c4">
                                <div class="submissionstatus">No submission</div>
                            </td>
                            <td class="cell c5" id="mod_assign_grading_r7_c5"><a
                                        href="https://school.demo.moodle.net/mod/assign/view.php?id=787&amp;rownum=0&amp;action=grader&amp;userid=50"
                                        class="btn btn-primary">Grade</a><img class="icon spacer" width="1" height="1"
                                                                              alt=""
                                                                              src="https://school.demo.moodle.net/theme/image.php/boost/core/1526176859/spacer"><br><label
                                        class="accesshide" for="quickgrade_50">User grade</label><input type="text"
                                                                                                        id="quickgrade_50"
                                                                                                        name="quickgrade_50"
                                                                                                        value=""
                                                                                                        size="6"
                                                                                                        maxlength="10"
                                                                                                        class="quickgrade">&nbsp;/&nbsp;100.00
                            </td>
                            <td class="cell c6" id="mod_assign_grading_r7_c6">
                                <div class="action-menu moodle-actionmenu" id="action-menu-10"
                                     data-enhance="moodle-core-actionmenu" data-owner=".gradingtable-actionmenu">

                                    <div class="menubar" id="action-menu-10-menubar" role="menubar">

                                        <div class="dropdown d-inline">
                                            <a href="#" class=" dropdown-toggle" id="dropdown-10" title="" role="button"
                                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Edit<b
                                                        class="caret"></b></a>
                                            <div class="dropdown-menu dropdown-menu-right menu  align-tl-bl"
                                                 id="action-menu-10-menu" data-rel="menu-content"
                                                 aria-labelledby="action-menu-toggle-10" role="menu" data-align="tl-bl"
                                                 data-constraint=".gradingtable > .no-overflow">
                                                <a href="https://school.demo.moodle.net/mod/assign/view.php?id=787&amp;rownum=0&amp;action=grader&amp;userid=50"
                                                   class="dropdown-item menu-action" role="menuitem"
                                                   aria-labelledby="actionmenuaction-29"><span class="menu-action-text"
                                                                                               id="actionmenuaction-29">Grade</span></a><a
                                                        href="https://school.demo.moodle.net/mod/assign/view.php?id=787&amp;userid=50&amp;action=lock&amp;sesskey=liMieijc2T&amp;page=0"
                                                        class="dropdown-item menu-action" role="menuitem"
                                                        aria-labelledby="actionmenuaction-30"><span
                                                            class="menu-action-text" id="actionmenuaction-30">Prevent submission changes</span></a><a
                                                        href="https://school.demo.moodle.net/mod/assign/view.php?id=787&amp;userid=50&amp;action=grantextension&amp;sesskey=liMieijc2T&amp;page=0"
                                                        class="dropdown-item menu-action" role="menuitem"
                                                        aria-labelledby="actionmenuaction-31"><span
                                                            class="menu-action-text" id="actionmenuaction-31">Grant extension</span></a>
                                            </div>
                                        </div>


                                    </div>

                                </div>
                            </td>
                            <td class="cell c7" id="mod_assign_grading_r7_c7">-</td>
                            <td class="cell c8" id="mod_assign_grading_r7_c8"></td>
                            <td class="cell c9" id="mod_assign_grading_r7_c9"></td>
                            <td class="cell c10" id="mod_assign_grading_r7_c10">-</td>
                            <td class="cell c11" id="mod_assign_grading_r7_c11"><label for="quickgrade_comments_50"
                                                                                       class="accesshide">Feedback
                                    comments</label><textarea name="quickgrade_comments_50" id="quickgrade_comments_50"
                                                              class="quickgrade"></textarea></td>
                            <td class="cell c12" id="mod_assign_grading_r7_c12">-</td>
                        </tr>
                        <tr class="user53 unselectedrow" id="mod_assign_grading_r8">
                            <td class="cell c0" id="mod_assign_grading_r8_c0"><label class="accesshide"
                                                                                     for="selectuser_53">Select Gary
                                    Vasquez</label><input type="checkbox" id="selectuser_53" name="selectedusers"
                                                          value="53"><input type="hidden" name="grademodified_53"
                                                                            value="1526181558"><input type="hidden"
                                                                                                      name="gradeattempt_53"
                                                                                                      value="0"></td>
                            <td class="cell c1" id="mod_assign_grading_r8_c1"><a
                                        href="https://school.demo.moodle.net/user/view.php?id=53&amp;course=66"><img
                                            src="https://school.demo.moodle.net/pluginfile.php/328/user/icon/boost/f2?rev=2066"
                                            alt="Picture of Gary Vasquez" title="Picture of Gary Vasquez"
                                            class="userpicture" width="35" height="35"></a></td>
                            <td class="cell c2" id="mod_assign_grading_r8_c2"><a
                                        href="https://school.demo.moodle.net/user/view.php?id=53&amp;course=66"
                                        id="action_link5af7b6b62a04764" class="">Gary Vasquez</a></td>
                            <td class="cell c3 email" id="mod_assign_grading_r8_c3">garyvasquez366@example.com</td>
                            <td class="cell c4" id="mod_assign_grading_r8_c4">
                                <div class="submissionstatus">No submission</div>
                            </td>
                            <td class="cell c5" id="mod_assign_grading_r8_c5"><a
                                        href="https://school.demo.moodle.net/mod/assign/view.php?id=787&amp;rownum=0&amp;action=grader&amp;userid=53"
                                        class="btn btn-primary">Grade</a><img class="icon spacer" width="1" height="1"
                                                                              alt=""
                                                                              src="https://school.demo.moodle.net/theme/image.php/boost/core/1526176859/spacer"><br><label
                                        class="accesshide" for="quickgrade_53">User grade</label><input type="text"
                                                                                                        id="quickgrade_53"
                                                                                                        name="quickgrade_53"
                                                                                                        value=""
                                                                                                        size="6"
                                                                                                        maxlength="10"
                                                                                                        class="quickgrade">&nbsp;/&nbsp;100.00
                            </td>
                            <td class="cell c6" id="mod_assign_grading_r8_c6">
                                <div class="action-menu moodle-actionmenu" id="action-menu-11"
                                     data-enhance="moodle-core-actionmenu" data-owner=".gradingtable-actionmenu">

                                    <div class="menubar" id="action-menu-11-menubar" role="menubar">

                                        <div class="dropdown d-inline">
                                            <a href="#" class=" dropdown-toggle" id="dropdown-11" title="" role="button"
                                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Edit<b
                                                        class="caret"></b></a>
                                            <div class="dropdown-menu dropdown-menu-right menu  align-tl-bl"
                                                 id="action-menu-11-menu" data-rel="menu-content"
                                                 aria-labelledby="action-menu-toggle-11" role="menu" data-align="tl-bl"
                                                 data-constraint=".gradingtable > .no-overflow">
                                                <a href="https://school.demo.moodle.net/mod/assign/view.php?id=787&amp;rownum=0&amp;action=grader&amp;userid=53"
                                                   class="dropdown-item menu-action" role="menuitem"
                                                   aria-labelledby="actionmenuaction-32"><span class="menu-action-text"
                                                                                               id="actionmenuaction-32">Update grade</span></a><a
                                                        href="https://school.demo.moodle.net/mod/assign/view.php?id=787&amp;userid=53&amp;action=lock&amp;sesskey=liMieijc2T&amp;page=0"
                                                        class="dropdown-item menu-action" role="menuitem"
                                                        aria-labelledby="actionmenuaction-33"><span
                                                            class="menu-action-text" id="actionmenuaction-33">Prevent submission changes</span></a><a
                                                        href="https://school.demo.moodle.net/mod/assign/view.php?id=787&amp;userid=53&amp;action=grantextension&amp;sesskey=liMieijc2T&amp;page=0"
                                                        class="dropdown-item menu-action" role="menuitem"
                                                        aria-labelledby="actionmenuaction-34"><span
                                                            class="menu-action-text" id="actionmenuaction-34">Grant extension</span></a>
                                            </div>
                                        </div>


                                    </div>

                                </div>
                            </td>
                            <td class="cell c7" id="mod_assign_grading_r8_c7">-</td>
                            <td class="cell c8" id="mod_assign_grading_r8_c8"><a
                                        href="https://school.demo.moodle.net/mod/assign/view.php?id=787&amp;sid=98&amp;gid=98&amp;plugin=onlinetext&amp;action=viewpluginassignsubmission&amp;returnaction=grading&amp;returnparams"
                                        id="action_link5af7b6b62a04768" class=""><i
                                            class="icon fa fa-search-plus fa-fw " aria-hidden="true"
                                            title="View submission" aria-label="View submission"></i></a><img
                                        class="icon spacer" width="1" height="1" alt=""
                                        src="https://school.demo.moodle.net/theme/image.php/boost/core/1526176859/spacer"><br>
                            </td>
                            <td class="cell c9" id="mod_assign_grading_r8_c9">
                                <div class="commentscontainer">
                                    <div class="mdl-left"><a class="showcommentsnonjs"
                                                             href="https://school.demo.moodle.net/mod/assign/view.php?id=787&amp;rownum=0&amp;useridlistid=5af7b6b624cd6031376538&amp;action=grading&amp;nonjscomment=1&amp;comment_itemid=98&amp;comment_context=1324&amp;comment_component=assignsubmission_comments&amp;comment_area=submission_comments">Show
                                            comments</a><a class="comment-link" id="comment-link-5af7b6b6411b0" href="#"
                                                           role="button" aria-expanded="false"><i
                                                    class="icon fa fa-plus-square fa-fw " aria-hidden="true"
                                                    title="Comments" aria-label="Comments"></i><span
                                                    id="comment-link-text-5af7b6b6411b0">Comments (0)</span></a>
                                        <div id="comment-ctrl-5af7b6b6411b0" class="comment-ctrl">
                                            <ul id="comment-list-5af7b6b6411b0" class="comment-list">
                                                <li class="first"></li>
                                            </ul>
                                            <div id="comment-pagination-5af7b6b6411b0" class="comment-pagination"></div>
                                            <div class="comment-area">
                                                <div class="db"><textarea name="content" rows="2"
                                                                          id="dlg-content-5af7b6b6411b0" cols="20"
                                                                          style="color: grey;"></textarea></div>
                                                <div class="fd" id="comment-action-5af7b6b6411b0"><a
                                                            id="comment-action-post-5af7b6b6411b0" href="#">Save
                                                        comment</a><span> | </span><a
                                                            id="comment-action-cancel-5af7b6b6411b0" href="#">Cancel</a>
                                                </div>
                                            </div>
                                            <div class="clearer"></div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="cell c10" id="mod_assign_grading_r8_c10">-</td>
                            <td class="cell c11" id="mod_assign_grading_r8_c11"><label for="quickgrade_comments_53"
                                                                                       class="accesshide">Feedback
                                    comments</label><textarea name="quickgrade_comments_53" id="quickgrade_comments_53"
                                                              class="quickgrade"></textarea></td>
                            <td class="cell c12" id="mod_assign_grading_r8_c12">-</td>
                        </tr>
                        <tr class="user56 unselectedrow" id="mod_assign_grading_r9">
                            <td class="cell c0" id="mod_assign_grading_r9_c0"><label class="accesshide"
                                                                                     for="selectuser_56">Select Barbara
                                    Gardner</label><input type="checkbox" id="selectuser_56" name="selectedusers"
                                                          value="56"><input type="hidden" name="grademodified_56"
                                                                            value="1526181582"><input type="hidden"
                                                                                                      name="gradeattempt_56"
                                                                                                      value="0"></td>
                            <td class="cell c1" id="mod_assign_grading_r9_c1"><a
                                        href="https://school.demo.moodle.net/user/view.php?id=56&amp;course=66"><img
                                            src="https://school.demo.moodle.net/pluginfile.php/411/user/icon/boost/f2?rev=2472"
                                            alt="B Gardner" title="B Gardner" class="userpicture" width="35"
                                            height="35"></a></td>
                            <td class="cell c2" id="mod_assign_grading_r9_c2"><a
                                        href="https://school.demo.moodle.net/user/view.php?id=56&amp;course=66"
                                        id="action_link5af7b6b62a04770" class="">Barbara Gardner</a></td>
                            <td class="cell c3 email" id="mod_assign_grading_r9_c3">barbaragardner249@example.com</td>
                            <td class="cell c4" id="mod_assign_grading_r9_c4">
                                <div class="submissionstatus">No submission</div>
                            </td>
                            <td class="cell c5" id="mod_assign_grading_r9_c5"><a
                                        href="https://school.demo.moodle.net/mod/assign/view.php?id=787&amp;rownum=0&amp;action=grader&amp;userid=56"
                                        class="btn btn-primary">Grade</a><img class="icon spacer" width="1" height="1"
                                                                              alt=""
                                                                              src="https://school.demo.moodle.net/theme/image.php/boost/core/1526176859/spacer"><br><label
                                        class="accesshide" for="quickgrade_56">User grade</label><input type="text"
                                                                                                        id="quickgrade_56"
                                                                                                        name="quickgrade_56"
                                                                                                        value=""
                                                                                                        size="6"
                                                                                                        maxlength="10"
                                                                                                        class="quickgrade">&nbsp;/&nbsp;100.00
                            </td>
                            <td class="cell c6" id="mod_assign_grading_r9_c6">
                                <div class="action-menu moodle-actionmenu" id="action-menu-12"
                                     data-enhance="moodle-core-actionmenu" data-owner=".gradingtable-actionmenu">

                                    <div class="menubar" id="action-menu-12-menubar" role="menubar">

                                        <div class="dropdown d-inline">
                                            <a href="#" class=" dropdown-toggle" id="dropdown-12" title="" role="button"
                                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Edit<b
                                                        class="caret"></b></a>
                                            <div class="dropdown-menu dropdown-menu-right menu  align-tl-bl"
                                                 id="action-menu-12-menu" data-rel="menu-content"
                                                 aria-labelledby="action-menu-toggle-12" role="menu" data-align="tl-bl"
                                                 data-constraint=".gradingtable > .no-overflow">
                                                <a href="https://school.demo.moodle.net/mod/assign/view.php?id=787&amp;rownum=0&amp;action=grader&amp;userid=56"
                                                   class="dropdown-item menu-action" role="menuitem"
                                                   aria-labelledby="actionmenuaction-35"><span class="menu-action-text"
                                                                                               id="actionmenuaction-35">Update grade</span></a><a
                                                        href="https://school.demo.moodle.net/mod/assign/view.php?id=787&amp;userid=56&amp;action=lock&amp;sesskey=liMieijc2T&amp;page=0"
                                                        class="dropdown-item menu-action" role="menuitem"
                                                        aria-labelledby="actionmenuaction-36"><span
                                                            class="menu-action-text" id="actionmenuaction-36">Prevent submission changes</span></a><a
                                                        href="https://school.demo.moodle.net/mod/assign/view.php?id=787&amp;userid=56&amp;action=grantextension&amp;sesskey=liMieijc2T&amp;page=0"
                                                        class="dropdown-item menu-action" role="menuitem"
                                                        aria-labelledby="actionmenuaction-37"><span
                                                            class="menu-action-text" id="actionmenuaction-37">Grant extension</span></a>
                                            </div>
                                        </div>


                                    </div>

                                </div>
                            </td>
                            <td class="cell c7" id="mod_assign_grading_r9_c7">-</td>
                            <td class="cell c8" id="mod_assign_grading_r9_c8"><a
                                        href="https://school.demo.moodle.net/mod/assign/view.php?id=787&amp;sid=100&amp;gid=100&amp;plugin=onlinetext&amp;action=viewpluginassignsubmission&amp;returnaction=grading&amp;returnparams"
                                        id="action_link5af7b6b62a04774" class=""><i
                                            class="icon fa fa-search-plus fa-fw " aria-hidden="true"
                                            title="View submission" aria-label="View submission"></i></a><img
                                        class="icon spacer" width="1" height="1" alt=""
                                        src="https://school.demo.moodle.net/theme/image.php/boost/core/1526176859/spacer"><br>
                            </td>
                            <td class="cell c9" id="mod_assign_grading_r9_c9">
                                <div class="commentscontainer">
                                    <div class="mdl-left"><a class="showcommentsnonjs"
                                                             href="https://school.demo.moodle.net/mod/assign/view.php?id=787&amp;rownum=0&amp;useridlistid=5af7b6b624cd6031376538&amp;action=grading&amp;nonjscomment=1&amp;comment_itemid=100&amp;comment_context=1324&amp;comment_component=assignsubmission_comments&amp;comment_area=submission_comments">Show
                                            comments</a><a class="comment-link" id="comment-link-5af7b6b641fb1" href="#"
                                                           role="button" aria-expanded="false"><i
                                                    class="icon fa fa-plus-square fa-fw " aria-hidden="true"
                                                    title="Comments" aria-label="Comments"></i><span
                                                    id="comment-link-text-5af7b6b641fb1">Comments (0)</span></a>
                                        <div id="comment-ctrl-5af7b6b641fb1" class="comment-ctrl">
                                            <ul id="comment-list-5af7b6b641fb1" class="comment-list">
                                                <li class="first"></li>
                                            </ul>
                                            <div id="comment-pagination-5af7b6b641fb1" class="comment-pagination"></div>
                                            <div class="comment-area">
                                                <div class="db"><textarea name="content" rows="2"
                                                                          id="dlg-content-5af7b6b641fb1" cols="20"
                                                                          style="color: grey;"></textarea></div>
                                                <div class="fd" id="comment-action-5af7b6b641fb1"><a
                                                            id="comment-action-post-5af7b6b641fb1" href="#">Save
                                                        comment</a><span> | </span><a
                                                            id="comment-action-cancel-5af7b6b641fb1" href="#">Cancel</a>
                                                </div>
                                            </div>
                                            <div class="clearer"></div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="cell c10" id="mod_assign_grading_r9_c10">-</td>
                            <td class="cell c11" id="mod_assign_grading_r9_c11"><label for="quickgrade_comments_56"
                                                                                       class="accesshide">Feedback
                                    comments</label><textarea name="quickgrade_comments_56" id="quickgrade_comments_56"
                                                              class="quickgrade"></textarea></td>
                            <td class="cell c12" id="mod_assign_grading_r9_c12">-</td>
                        </tr>
                        <tr class="emptyrow" id="mod_assign_grading_r10">
                            <td class="cell c0" id="mod_assign_grading_r10_c0"></td>
                            <td class="cell c1" id="mod_assign_grading_r10_c1"></td>
                            <td class="cell c2" id="mod_assign_grading_r10_c2"></td>
                            <td class="cell c3 email" id="mod_assign_grading_r10_c3"></td>
                            <td class="cell c4" id="mod_assign_grading_r10_c4"></td>
                            <td class="cell c5" id="mod_assign_grading_r10_c5"></td>
                            <td class="cell c6" id="mod_assign_grading_r10_c6"></td>
                            <td class="cell c7" id="mod_assign_grading_r10_c7"></td>
                            <td class="cell c8" id="mod_assign_grading_r10_c8"></td>
                            <td class="cell c9" id="mod_assign_grading_r10_c9"></td>
                            <td class="cell c10" id="mod_assign_grading_r10_c10"></td>
                            <td class="cell c11" id="mod_assign_grading_r10_c11"></td>
                            <td class="cell c12" id="mod_assign_grading_r10_c12"></td>
                        </tr>
                        <tr class="emptyrow" id="mod_assign_grading_r11">
                            <td class="cell c0" id="mod_assign_grading_r11_c0"></td>
                            <td class="cell c1" id="mod_assign_grading_r11_c1"></td>
                            <td class="cell c2" id="mod_assign_grading_r11_c2"></td>
                            <td class="cell c3 email" id="mod_assign_grading_r11_c3"></td>
                            <td class="cell c4" id="mod_assign_grading_r11_c4"></td>
                            <td class="cell c5" id="mod_assign_grading_r11_c5"></td>
                            <td class="cell c6" id="mod_assign_grading_r11_c6"></td>
                            <td class="cell c7" id="mod_assign_grading_r11_c7"></td>
                            <td class="cell c8" id="mod_assign_grading_r11_c8"></td>
                            <td class="cell c9" id="mod_assign_grading_r11_c9"></td>
                            <td class="cell c10" id="mod_assign_grading_r11_c10"></td>
                            <td class="cell c11" id="mod_assign_grading_r11_c11"></td>
                            <td class="cell c12" id="mod_assign_grading_r11_c12"></td>
                        </tr>
                        <tr class="emptyrow" id="mod_assign_grading_r12">
                            <td class="cell c0" id="mod_assign_grading_r12_c0"></td>
                            <td class="cell c1" id="mod_assign_grading_r12_c1"></td>
                            <td class="cell c2" id="mod_assign_grading_r12_c2"></td>
                            <td class="cell c3 email" id="mod_assign_grading_r12_c3"></td>
                            <td class="cell c4" id="mod_assign_grading_r12_c4"></td>
                            <td class="cell c5" id="mod_assign_grading_r12_c5"></td>
                            <td class="cell c6" id="mod_assign_grading_r12_c6"></td>
                            <td class="cell c7" id="mod_assign_grading_r12_c7"></td>
                            <td class="cell c8" id="mod_assign_grading_r12_c8"></td>
                            <td class="cell c9" id="mod_assign_grading_r12_c9"></td>
                            <td class="cell c10" id="mod_assign_grading_r12_c10"></td>
                            <td class="cell c11" id="mod_assign_grading_r12_c11"></td>
                            <td class="cell c12" id="mod_assign_grading_r12_c12"></td>
                        </tr>
                        <tr class="emptyrow" id="mod_assign_grading_r13">
                            <td class="cell c0" id="mod_assign_grading_r13_c0"></td>
                            <td class="cell c1" id="mod_assign_grading_r13_c1"></td>
                            <td class="cell c2" id="mod_assign_grading_r13_c2"></td>
                            <td class="cell c3 email" id="mod_assign_grading_r13_c3"></td>
                            <td class="cell c4" id="mod_assign_grading_r13_c4"></td>
                            <td class="cell c5" id="mod_assign_grading_r13_c5"></td>
                            <td class="cell c6" id="mod_assign_grading_r13_c6"></td>
                            <td class="cell c7" id="mod_assign_grading_r13_c7"></td>
                            <td class="cell c8" id="mod_assign_grading_r13_c8"></td>
                            <td class="cell c9" id="mod_assign_grading_r13_c9"></td>
                            <td class="cell c10" id="mod_assign_grading_r13_c10"></td>
                            <td class="cell c11" id="mod_assign_grading_r13_c11"></td>
                            <td class="cell c12" id="mod_assign_grading_r13_c12"></td>
                        </tr>
                        <tr class="emptyrow" id="mod_assign_grading_r14">
                            <td class="cell c0" id="mod_assign_grading_r14_c0"></td>
                            <td class="cell c1" id="mod_assign_grading_r14_c1"></td>
                            <td class="cell c2" id="mod_assign_grading_r14_c2"></td>
                            <td class="cell c3 email" id="mod_assign_grading_r14_c3"></td>
                            <td class="cell c4" id="mod_assign_grading_r14_c4"></td>
                            <td class="cell c5" id="mod_assign_grading_r14_c5"></td>
                            <td class="cell c6" id="mod_assign_grading_r14_c6"></td>
                            <td class="cell c7" id="mod_assign_grading_r14_c7"></td>
                            <td class="cell c8" id="mod_assign_grading_r14_c8"></td>
                            <td class="cell c9" id="mod_assign_grading_r14_c9"></td>
                            <td class="cell c10" id="mod_assign_grading_r14_c10"></td>
                            <td class="cell c11" id="mod_assign_grading_r14_c11"></td>
                            <td class="cell c12" id="mod_assign_grading_r14_c12"></td>
                        </tr>
                        <tr class="emptyrow" id="mod_assign_grading_r15">
                            <td class="cell c0" id="mod_assign_grading_r15_c0"></td>
                            <td class="cell c1" id="mod_assign_grading_r15_c1"></td>
                            <td class="cell c2" id="mod_assign_grading_r15_c2"></td>
                            <td class="cell c3 email" id="mod_assign_grading_r15_c3"></td>
                            <td class="cell c4" id="mod_assign_grading_r15_c4"></td>
                            <td class="cell c5" id="mod_assign_grading_r15_c5"></td>
                            <td class="cell c6" id="mod_assign_grading_r15_c6"></td>
                            <td class="cell c7" id="mod_assign_grading_r15_c7"></td>
                            <td class="cell c8" id="mod_assign_grading_r15_c8"></td>
                            <td class="cell c9" id="mod_assign_grading_r15_c9"></td>
                            <td class="cell c10" id="mod_assign_grading_r15_c10"></td>
                            <td class="cell c11" id="mod_assign_grading_r15_c11"></td>
                            <td class="cell c12" id="mod_assign_grading_r15_c12"></td>
                        </tr>
                        <tr class="emptyrow" id="mod_assign_grading_r16">
                            <td class="cell c0" id="mod_assign_grading_r16_c0"></td>
                            <td class="cell c1" id="mod_assign_grading_r16_c1"></td>
                            <td class="cell c2" id="mod_assign_grading_r16_c2"></td>
                            <td class="cell c3 email" id="mod_assign_grading_r16_c3"></td>
                            <td class="cell c4" id="mod_assign_grading_r16_c4"></td>
                            <td class="cell c5" id="mod_assign_grading_r16_c5"></td>
                            <td class="cell c6" id="mod_assign_grading_r16_c6"></td>
                            <td class="cell c7" id="mod_assign_grading_r16_c7"></td>
                            <td class="cell c8" id="mod_assign_grading_r16_c8"></td>
                            <td class="cell c9" id="mod_assign_grading_r16_c9"></td>
                            <td class="cell c10" id="mod_assign_grading_r16_c10"></td>
                            <td class="cell c11" id="mod_assign_grading_r16_c11"></td>
                            <td class="cell c12" id="mod_assign_grading_r16_c12"></td>
                        </tr>
                        <tr class="emptyrow" id="mod_assign_grading_r17">
                            <td class="cell c0" id="mod_assign_grading_r17_c0"></td>
                            <td class="cell c1" id="mod_assign_grading_r17_c1"></td>
                            <td class="cell c2" id="mod_assign_grading_r17_c2"></td>
                            <td class="cell c3 email" id="mod_assign_grading_r17_c3"></td>
                            <td class="cell c4" id="mod_assign_grading_r17_c4"></td>
                            <td class="cell c5" id="mod_assign_grading_r17_c5"></td>
                            <td class="cell c6" id="mod_assign_grading_r17_c6"></td>
                            <td class="cell c7" id="mod_assign_grading_r17_c7"></td>
                            <td class="cell c8" id="mod_assign_grading_r17_c8"></td>
                            <td class="cell c9" id="mod_assign_grading_r17_c9"></td>
                            <td class="cell c10" id="mod_assign_grading_r17_c10"></td>
                            <td class="cell c11" id="mod_assign_grading_r17_c11"></td>
                            <td class="cell c12" id="mod_assign_grading_r17_c12"></td>
                        </tr>
                        <tr class="emptyrow" id="mod_assign_grading_r18">
                            <td class="cell c0" id="mod_assign_grading_r18_c0"></td>
                            <td class="cell c1" id="mod_assign_grading_r18_c1"></td>
                            <td class="cell c2" id="mod_assign_grading_r18_c2"></td>
                            <td class="cell c3 email" id="mod_assign_grading_r18_c3"></td>
                            <td class="cell c4" id="mod_assign_grading_r18_c4"></td>
                            <td class="cell c5" id="mod_assign_grading_r18_c5"></td>
                            <td class="cell c6" id="mod_assign_grading_r18_c6"></td>
                            <td class="cell c7" id="mod_assign_grading_r18_c7"></td>
                            <td class="cell c8" id="mod_assign_grading_r18_c8"></td>
                            <td class="cell c9" id="mod_assign_grading_r18_c9"></td>
                            <td class="cell c10" id="mod_assign_grading_r18_c10"></td>
                            <td class="cell c11" id="mod_assign_grading_r18_c11"></td>
                            <td class="cell c12" id="mod_assign_grading_r18_c12"></td>
                        </tr>
                        <tr class="emptyrow" id="mod_assign_grading_r19">
                            <td class="cell c0" id="mod_assign_grading_r19_c0"></td>
                            <td class="cell c1" id="mod_assign_grading_r19_c1"></td>
                            <td class="cell c2" id="mod_assign_grading_r19_c2"></td>
                            <td class="cell c3 email" id="mod_assign_grading_r19_c3"></td>
                            <td class="cell c4" id="mod_assign_grading_r19_c4"></td>
                            <td class="cell c5" id="mod_assign_grading_r19_c5"></td>
                            <td class="cell c6" id="mod_assign_grading_r19_c6"></td>
                            <td class="cell c7" id="mod_assign_grading_r19_c7"></td>
                            <td class="cell c8" id="mod_assign_grading_r19_c8"></td>
                            <td class="cell c9" id="mod_assign_grading_r19_c9"></td>
                            <td class="cell c10" id="mod_assign_grading_r19_c10"></td>
                            <td class="cell c11" id="mod_assign_grading_r19_c11"></td>
                            <td class="cell c12" id="mod_assign_grading_r19_c12"></td>
                        </tr>
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