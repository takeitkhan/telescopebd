@extends('frontend.layouts.master')

@section('page-content')

    <div class="inner_banner bg-primary">
        <div class="container">
            <h2 class="text-white text-left fs-1">Donation</h2>
        </div>
    </div>
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div style="background: #465883; color: #FFFFFF; padding: 20px;">
                        <h1 style="font-size: 40px; font-weight: bolder;">
                            Support the Dorner Telescope Museum Canada’s telescopes and their makers
                        </h1>

                        <p>The Society’s new facility will feature the untold story of Canadian telescope makers, their
                            instruments, and the astronomers who used them. Access will be free, programming offered.
                            Help preserve Canada’s compelling astronomical heritage with a donation. Contact us if you
                            have an artifact to donate.</p>

                        <p>Charity Number# 119126282 RR0001</p>
                        <br>
                        <h3>Payment Options</h3><br>
                        <p>
                            <b>Dutch Bangla Bank Ltd.</b><br/>
                            Telescope Bangladesh<br/>
                            223948203984<br/>
                            Mohammadpur Branch<br/>
                            <br/>

                            <b>Dutch Bangla Bank Ltd.</b><br/>
                            Telescope Bangladesh<br/>
                            223948203984<br/>
                            Mohammadpur Branch<br/>
                            <br/>


                        </p>
                    </div>

                </div>
                <div class="col-md-5" style="padding: 0 20px;">

                    <div class="section-donation">
                        <form action="{{ route('frontend_donation')}}" method="post">
                            @csrf
                            <label>Payment Method</label>
                            <div class="form-group">
                                <select class="form-control" name="payment_method">
                                    <option value="dbbl">Dutch Bangla Bank Ltd.</option>
                                    <option value="bKash">bKash</option>
                                    <option value="Nagad">Nagad</option>
                                    <option value="Janata">Janata Bank Ltd.</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Transection ID</label>
                                <input type="text" class="form-control" name="transaction_id">
                            </div>
                            <div class="form-group">
                                <label>Amount</label>
                                <input type="text" class="form-control" name="amount">
                            </div>
                            <button type="submit" class="btn-type-1-blue menu-hover-start-button1">Submit</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
