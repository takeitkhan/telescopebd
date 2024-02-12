@extends('frontend.layouts.master')

@section('site-title')
    {{ $the::settings('site_name') .' | '. $the::settings('site_description')}}
@endsection


@section('page-content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <h2>Why you should become member with Telescope Bangladesh</h2>
            <form>
                <div class="xcontainer">
                    <div class="row form-group">
                        <div class="col-md-6">
                            Why you should become member with Telescope Bangladesh

                            <h2><strong>Mission</strong></h2>

                            <p>
                                In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to
                                demonstrate the visual form of a document or a typeface without relying on meaningful
                                content. Lorem ipsum may be used as a placeholder before the final copy is available.
                            </p>
                            <p>
                                In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to
                                demonstrate the visual form of a document or a typeface without relying on meaningful
                                content. Lorem ipsum may be used as a placeholder before the final copy is available.
                            </p>

                            <h2><strong>Vission</strong></h2>
                            <p>
                                In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to
                                demonstrate the visual form of a document or a typeface without relying on meaningful
                                content. Lorem ipsum may be used as a placeholder before the final copy is available.
                            </p>
                            <p>
                                In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to
                                demonstrate the visual form of a document or a typeface without relying on meaningful
                                content. Lorem ipsum may be used as a placeholder before the final copy is available.
                            </p>
                            <p>
                                In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to
                                demonstrate the visual form of a document or a typeface without relying on meaningful
                                content. Lorem ipsum may be used as a placeholder before the final copy is available.
                            </p>
                            <p>
                                In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to
                                demonstrate the visual form of a document or a typeface without relying on meaningful
                                content. Lorem ipsum may be used as a placeholder before the final copy is available.
                            </p>
                        </div>

                        <div class="col-md-6">
                            <h2><strong>Members benefit</strong></h2>

                            <ul>
                                <li>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to
                                    demonstrate the visual form of a document ore without relying on meaningful
                                    content. Lorem ipsum may be used as a placeholder before the final copy is available.</li>
                                <li>Lorem ipsum may be used as a placeholder before the final copy is available.</li>
                                <li>Lorem ipsum may be used as a typefac a placeholder before the final copy is available.</li>
                                <li>benefit 4</li>
                            </ul>

                            <h2><strong>Membership Type</strong></h2>
                            <ul>
                                <li>Student- Tk. 600 yearly</li>
                                <li>Regular- Tk. 1,200 yearly</li>
                                <li>Executive- Tk. 2,400 yearly</li>
                            </ul>

                            <h2><strong>Payment Options</strong></h2>

                            <p>
                                <b>Dutch Bangla Bank Ltd.</b><br/>
                                <b>Telescope Bangladesh</b><br/>
                                <b>223948203984</b><br/>
                                <b>Mohammadpur Branch</b>
                            </p>

                            <p>
                                <b>Dutch Bangla Bank Ltd.</b><br/>
                                <b>Telescope Bangladesh</b><br/>
                                <b>223948203984</b><br/>
                                <b>Mohammadpur Branch</b>
                            </p>

                            <p>
                                <b>Dutch Bangla Bank Ltd.</b><br/>
                                <b>Telescope Bangladesh</b><br/>
                                <b>223948203984</b><br/>
                                <b>Mohammadpur Branch</b>
                            </p>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-6">
                            <a style="color: white;" href="{{ route('member_registration') }}"
                               class="btn-type-1-blue menu-hover-start-button1" type="submit">
                                Join Us
                            </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
