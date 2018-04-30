@extends('layouts.app')

@section('title', '| Notifications')
{{--Require to have list of notification and list of people name take the id of notification as index--}}
@section('content')
    <style>
        div.b {
            white-space: nowrap;
            width: 100px;
            overflow: hidden;
            text-overflow: ellipsis;
            border: 1px solid #000000;
        }
    </style>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-header">
                {{__('Your notifications')}}
            </div>

            <div class="card-body">

                <div class="list-group">
                    <div class="row">
                        @foreach($notifications as $notification)
                            <div class="btn-link b">
                                @if($notification->status == 0)
                                    <strong>{{__("[".$notification->type."] - ".$people[$notification->id]." - ".$notification->message)}}</strong>
                                @else
                                    {{__("[".$notification->type."] - ".$people[$notification->id]." - ".$notification->message)}}
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection