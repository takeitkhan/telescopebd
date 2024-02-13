@extends('frontend.layouts.master')

@section('site-title')
    {{ $the::settings('site_name') .' | '. $the::settings('site_description')}}
@endsection


@section('page-content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <h2>Member Signin</h2>
            <form method="post" action="{{ route('login') }}" accept-charset="UTF-8">
                @csrf
                <div class="xcontainer">


                    <div class="form-group">
                        <fieldset>
                            <legend style="color: #FFFFFF;">Signin Details</legend>

                            <div class="row form-group">
                                <div class="col-md-6">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email"/>
                                </div>                                
                            </div>
                            <div class="row form-group">
                                <div class="col-md-6">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password" />
                                    <span>Password naturally your phone number</span>
                                </div>                                
                            </div>
                            

                            <div class="row form-group">
                                <div class="col-md-6">
                                    <button class="btn-type-1-blue menu-hover-start-button1" type="submit">
                                        Signin Now!
                                    </button>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
