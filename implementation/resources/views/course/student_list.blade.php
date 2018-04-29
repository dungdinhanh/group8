@extends('layouts.app')

@section('title', '|Courses')

@section('content')
    <div class="container" style="margin-top: 60px">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{__('student course')}}
                    </div>
                    <input type="hidden" id="course_id" value="{{$courseId}}">
                    <div class="container">
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#studentModal">Enroll a new student</button>
                        <!-- Modal -->
                        <div class="modal fade" id="studentModal" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Enroll a new students</h4>
                                    </div>
                                    <div class="modal-body">
                                        <lable for="search_student_group"> student email or name</lable>
                                        <select id = "search_student_group" class="ui fluid search dropdown" multiple="">
                                        </select>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" id="clear_student" class="btn btn-primary">Clear</button>
                                        <button type="button" id="enroll_student" class="btn btn-primary">Enroll</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                    <td>{{$student->full_name}}</td>
                                    <td>{{$student->email}}</td>
                                    <td>{{$student->class}}</td>
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