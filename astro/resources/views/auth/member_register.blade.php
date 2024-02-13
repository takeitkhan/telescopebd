@extends('frontend.layouts.master')

@section('site-title')
    {{ $the::settings('site_name') .' | '. $the::settings('site_description')}}
@endsection


@section('page-content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <h2>Membership Signup</h2>
            <form method="post" action="{{ route('register_now') }}" accept-charset="UTF-8">
                @csrf
                <div class="xcontainer">

                    <div class="row form-group">
                        <div class="col-md-12">
                            <fieldset>
                                <legend style="color: #FFFFFF;">Payment Details</legend>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Transaction ID</label>
                                        <input class="form-control" name="transaction_id" value=""/>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Payment Method</label>
                                        <select class="form-control" name="payment_method">
                                            <option value="dbbl">Dutch Bangla Bank Ltd.</option>
                                            <option value="bKash">bKash</option>
                                            <option value="Nagad">Nagad</option>
                                            <option value="Janata">Janata Bank Ltd.</option>
                                        </select>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>

                    <div class="form-group">
                        <fieldset>
                            <legend style="color: #FFFFFF;">Personal Details</legend>

                            <div class="row form-group">
                                <div class="col-md-6">
                                    <label>Full Name</label>
                                    <input class="form-control" name="full_name"/>
                                </div>
                                <div class="col-md-6">
                                    <label>Phone</label>
                                    <input class="form-control" name="phone_number"/>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-6">
                                    <label>Email</label>
                                    <input class="form-control" name="email"/>
                                </div>
                                <div class="col-md-6">
                                    <label>Facebook ID</label>
                                    <input class="form-control" name="facebook"/>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-6">
                                    <label>Gender</label><br/>
                                    <input type="radio" name="gender" value="male"/> Male
                                    <input type="radio" name="gender" value="female"/> Female
                                    <input type="radio" name="gender" value="other"/> Other
                                </div>

                                <div class="col-md-6">
                                    <label>Date of birth</label>
                                    <input class="form-control" type="date" name="date_of_birth"/>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-6">
                                    <label>Present Address</label>
                                    <textarea name="payment_address" class="form-control"></textarea>
                                </div>

                                <div class="col-md-6">
                                    <label>Permanent Address</label>
                                    <textarea class="form-control"></textarea>
                                </div>
                            </div>


                            <div class="row form-group">
                                <div class="col-md-6">
                                    <label>Religion</label>
                                    <select name="religion" class="form-control">
                                        <option value="Islam">Islam</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Christian">Christian</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label>District</label>
                                    <select class="form-control" name="district">
                                        <option value="Dhaka">Dhaka</option>
                                        <option value="Tangail">Tangail</option>
                                        <option value="Gazipur">Gazipur</option>
                                        <option value="Jamalpur">Jamalpur</option>
                                        <option value="Mymensing">Mymensing</option>
                                        <option value="Barishal">Barishal</option>
                                        <option value="Bhola">Bhola</option>
                                        <option value="Chittagong">Chittagong</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-6">
                                    <label>Highest Qualification</label>
                                    <input class="form-control" type="text" name="highest_qualification"/>
                                </div>

                                <div class="col-md-6">
                                    <label>Major Subject</label>
                                    <input class="form-control" type="text" name="major_subject"/>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-6">
                                    <label>Hobbies</label>
                                    <input class="form-control" type="text" name="hobbies"/>

                                    <br/>
                                    <br/>

                                    <label>Membership Type</label><br/>
                                    <input type="radio" name="membertype" value="2"/> Student- Tk. 600 yearly<br/>
                                    <input type="radio" name="membertype" value="3"/> Regular- Tk. 1,200 yearly<br/>
                                    <input type="radio" name="membertype" value="4"/> Executive- Tk. 2,400 yearly

                                    <br/>
                                    <br/>

                                    <label>Membership Activities Type</label><br/>
                                    <input type="radio" name="member_status" value="Active"/> Active<br/>
                                    <input type="radio" name="member_status" value="Normal"/> Normal<br/>
                                    <input type="radio" name="member_status" value="Non-Active"/> Non-Active
                                </div>

                                <div class="col-md-6">
                                    <label>Field of Interest</label><br/>
                                    <input name="member_interest" type="checkbox" value="Space"> Space<br/>
                                    <input name="member_interest" type="checkbox" value="Science"> Science<br/>
                                    <input name="member_interest" type="checkbox" value="Astronomy"> Astronomy<br/>
                                    <input name="member_interest" type="checkbox" value="Astrophotgraphy"> Astrophotgraphy<br/>
                                    <input name="member_interest" type="checkbox" value="Technology"> Technology<br/>
                                    <input name="member_interest" type="checkbox" value="Research"> Research<br/>
                                    <input name="member_interest" type="checkbox" value="Art"> Art<br/>
                                    <input name="member_interest" type="checkbox" value="Data Analyst"> Data Analyst<br/>
                                    <input name="member_interest" type="checkbox" value="Workshop"> Workshop<br/>
                                    <input name="member_interest" type="checkbox" value="Stargazing Event"> Stargazing Event<br/>
                                    <input name="member_interest" type="checkbox" value="Lecture"> Lecture<br/>
                                    <input name="member_interest" type="checkbox" value="Publication"> Publication<br/>
                                    <input name="member_interest" type="checkbox" value="Community Volunteer"> Community Volunteer<br/>
                                    <input name="member_interest" type="checkbox" value="Fundraiser"> Fundraiser
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-6">
                                    <button class="btn-type-1-blue menu-hover-start-button1" type="submit">Register Now!</button>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
