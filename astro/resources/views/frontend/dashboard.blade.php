@extends('frontend.layouts.master')

@section('page-content')

    <div class="inner_banner bg-primary">
        <div class="container">
            <h2 class="text-white text-left fs-1">User Dashboard</h2>
        </div>
    </div>
    <?php
        $user_id = Auth::user();
    ?>
    <div id="content">
        <div class="container">
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
@endsection
