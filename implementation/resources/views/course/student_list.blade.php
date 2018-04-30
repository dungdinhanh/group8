@extends('layouts.app')

@section('title', '|Courses')

@section('content')
    <div id="page" class="container-fluid" style="margin-top: 60px">
        <div class="row justify-content-center">
            <div class="card">
                    <div class="card-header">
                        {{__('student course')}}
                    </div>
                    <input type="hidden" id="course_id" value="{{$courseId}}">
                    <div class="container">

                    <div class="container-fluid">
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
                                        <button type="button" id="enroll_student" data-dismiss="modal" data-backdrop="false" class="btn btn-primary">Enroll</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table id="table_id" class="ui celled table" style="width:90%;margin: auto">
                        <thead>
                        <tr>
                            <th></th>
                            <th>Full name</th>
                            <th>Email</th>
                            <th>School</th>
                            <th>Class</th>
                            <th>BirthDay</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th></th>
                                <th>Full name</th>
                                <th>Email</th>
                                <th>School</th>
                                <th>Class</th>
                                <th>BirthDay</th>
                                <th></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('css/lib/dataTable.css')}}">
    <link rel="stylesheet" href="{{asset('css/lib/confirm.css')}}">
@endsection

@section('js')
    <script src="{{asset('js/lib/tableSorter.js')}}"></script>
    <script src="{{asset('js/lib/confirm.js')}}"></script>
    <script src="{{asset('js/code/course/student.js')}}">
    </script>
@endsection