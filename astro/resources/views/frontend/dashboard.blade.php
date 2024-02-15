<?php
$user_id = Auth::user();
//dd($user_id->role);
?>
@extends('frontend.layouts.master')

@section('page-content')
    <div class="sub-page-header">
        <div class="title-holder show-on-start">
            <div class="title-1">Member Dashboard</div>

            @if($user_id->role->role_id == 1)
                <a href="{{ route('admin_dashboard') }}" class="btn-type-1-blue menu-hover-start-button1">
                    Admin Dashboard
                </a>
            @endif
        </div>
    </div>
    <div class="solar-model-bottom"></div>
    <div class="container solar-content">

        <div id="content">
            <div class="container text-left mt-5">
                <div class="float-left">


                    @if($user_id)
                        <span>Name: {{ $user_id->full_name}}  </span><br>
                        <span>Email: {{ $user_id->email }}  </span><br>
                        <span>MobileNo: {{ $user_id->phone }}  </span><br>
                        <span>Thana: {{ $user_id->thana }}  </span><br>
                        <span>District: {{ $user_id->district }}  </span><br>
                        <span>birthdate: {{ $user_id->birthdate }}  </span><br>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
