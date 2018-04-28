@extends('layouts.app')

@section('title', '|Courses')

@section('content')
    <div class="container" style="margin-top: 60px">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{__('student course')}}
                        <div class="ui dropdown">
                            <div class="text">File</div>
                            <i class="dropdown icon"></i>
                            <div class="menu">
                                <div class="item">New</div>
                                <div class="item">
                                    <span class="description">ctrl + o</span>
                                    Open...
                                </div>
                                <div class="item">
                                    <span class="description">ctrl + s</span>
                                    Save as...
                                </div>
                                <div class="item">
                                    <span class="description">ctrl + r</span>
                                    Rename
                                </div>
                                <div class="item">Make a copy</div>
                                <div class="item">
                                    <i class="folder icon"></i>
                                    Move to folder
                                </div>
                                <div class="item">
                                    <i class="trash icon"></i>
                                    Move to trash
                                </div>
                                <div class="divider"></div>
                                <div class="item">Download As...</div>
                                <div class="item">
                                    <i class="dropdown icon"></i>
                                    Publish To Web
                                    <div class="menu">
                                        <div class="item">Google Docs</div>
                                        <div class="item">Google Drive</div>
                                        <div class="item">Dropbox</div>
                                        <div class="item">Adobe Creative Cloud</div>
                                        <div class="item">Private FTP</div>
                                        <div class="item">Another Service...</div>
                                    </div>
                                </div>
                                <div class="item">E-mail Collaborators</div>
                            </div>
                        </div>
                    </div>
                    <div class="ui-widget">
                        <label for="tags">Tags: </label>
                        <input id="tags">
                    </div>
                    <div class="container">
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#studentModal">Enroll a new student</button>

                        <!-- Modal -->
                        <div class="modal fade" id="studentModal" role="dialog">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Enroll a new students</h4>
                                    </div>
                                    <div class="modal-body">
                                        <lable for="student_email"> student email</lable>
                                        <input type="text" name="student_email" id="student_email">
                                        <input id="search_student_field" type="hidden" value="{{$searchStudent}}">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" id="close_student" class="btn btn-default">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button id="test">sdfsd</button>
                    <div class="card-body">
                        <table id="myTable" class="tablesorter">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Account</th>
                                <th>Class</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($students as $student)
                                <tr>
                                    <td>$student->name</td>
                                    <td>$student->email</td>
                                    <td>$student->student->class</td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{asset('js/code/course/student.js')}}">
    </script>
@endsection
