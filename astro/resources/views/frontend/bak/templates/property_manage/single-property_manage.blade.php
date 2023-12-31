<div id="content">
    <div class="container">

        <div class="row cr mb-3">
            <div class="col-lg-6  service-item mb-2">
                <div class="card p-0 bg-white xshadow border-0">
                    <img class="h-100" style="object-fit: cover"
                         src="https://images.unsplash.com/photo-1682687982502-1529b3b33f85?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                         alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row cr">
                    <div class="col-lg-6 col-md-6 service-item d-flex  mb-2">
                        <div class="card p-0 bg-white xshadow border-0">
                            <img class="img-fluid"
                                 src="https://images.unsplash.com/photo-1701666469254-6c8c3ec0085b?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                 alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 service-item d-flex  mb-2">
                        <div class="card p-0 bg-white xshadow border-0">
                            <img class="img-fluid"
                                 src="https://images.unsplash.com/photo-1682686581498-5e85c7228119?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                 alt="">
                        </div>

                    </div>
                    <div class="col-lg-6 col-md-6 service-item d-flex  mb-2">
                        <div class="card p-0 bg-white xshadow border-0">
                            <img class="img-fluid"
                                 src="https://images.unsplash.com/photo-1682686581498-5e85c7228119?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                 alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 service-item d-flex  mb-2">
                        <div class="card p-0 bg-white xshadow border-0">
                            <img class="img-fluid"
                                 src="https://images.unsplash.com/photo-1682686581498-5e85c7228119?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                 alt="">
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="row mb-3">
            <div class="col-md-8">
                @php
                    $qq = collect($category::getCatByMultiid($page->category_id, false));
                    $pc = $qq->whereNull('parent_id')->first();
                    $cc = $qq->whereNotNull('parent_id')->first();
                @endphp
                <div class="card px-4 py-5 bg-white  border-1 mb-2">
                    <div class="mb-2">
                        <span class="badge alert-primary">
                            {{ $pc->name ?? NULL }}
                        </span>
                    </div>

                    <div class="display-6 text-dark">
                        {{ $page->name ?? NULL }}
                    </div>

                    <div class="d-flex">
                        <span class="me-5">
                            <i class="fa fa-map-marker"></i>
                            {{ $cc->name ?? NULL  }}
                        </span>
                        <span class="mx-5">·</span>
                        <span class="me-5">
                            Total Rooms:
                            {{ $page::customField('total_rooms', $page->id) }}
                        </span>
                    </div>
                    <div class="d-block my-3 text-center ">
                        <h5 class="d-inline-block border-bottom">Facilities</h5>
                    </div>

                    <div class="row mt-3">
                        @php
                            $values = $postfield::getCommaSeperatedValueByTermType('property_manage', 'facilities');
                            $saveValue = $page::customField('facilities', $page->id);
                            $saveValue = explode('|', $saveValue);
                        @endphp
                        @foreach($values as $key => $item)
                            <div class="col-md-4">
                                @php
                                    $what = in_array($item, $saveValue);
                                @endphp
                                <div
                                    class="fs-4 {{ strtolower(str_replace(' ', '_', $item)) }} {{ ($what == 1) ? 'text-primary' : 'text-muted' }}">
                                    <i class="fa-solid fa-check"></i>
                                    {{ $item ?? NULL }}
                                    {{--                                    {{ strtolower(str_replace(' ', '_', $item)) }}--}}
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="d-block mt-3 text-center ">
                        <h5 class="d-inline-block border-bottom">Washroom</h5>
                    </div>

                    <div class="row mt-3">
                        @php
                            $values = $postfield::getCommaSeperatedValueByTermType('property_manage', 'washroom');
                            $saveValue = $page::customField('washroom', $page->id);
                            $saveValue = explode('|', $saveValue);
                        @endphp
                        @foreach($values as $key => $item)
                            <div class="col-md-6">
                                @php
                                    $what = in_array($item, $saveValue);
                                @endphp
                                <div
                                    class="fs-4 {{ strtolower(str_replace(' ', '_', $item)) }} {{ ($what == 1) ? 'text-primary' : 'text-muted' }}">
                                    <i class="fa-solid fa-check"></i>
                                    {{ $item ?? NULL }}
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>


                <div class="card px-4 py-2 pb-5 bg-white mb-2 border-1">
                    <div class="d-block my-3 text-center">
                        <h5 class="d-inline-block border-bottom">Description of this property</h5>
                    </div>
                    <div class="">
                        {!! $page->description ?? NULL !!}
                    </div>
                </div>

                <div class="card px-4 py-2 pb-5 bg-white  border-1">
                    <div class="d-block my-3 text-center">
                        <h5 class="d-inline-block border-bottom">Cost Details</h5>
                    </div>
                    <div class="">
                        {!! $page::customField('cost_details', $page->id) !!}
                    </div>
                </div>
                <div class="card px-4 py-2 pb-5 bg-white mt-2 border-1">
                    <div class="d-block my-3 text-center">
                        <h5 class="d-inline-block border-bottom">Food Menu</h5>
                    </div>
                    <div class="">
                        {!! $page::customField('food_menu', $page->id) !!}
                    </div>
                </div>
                <div class="card px-4 py-2 pb-5 bg-white mt-2 border-1">
                    <div class="d-block my-3 text-center">
                        <h5 class="d-inline-block border-bottom">Child Policy</h5>
                    </div>
                    <div class="">
                        {!! $page::customField('child_policy', $page->id) !!}
                    </div>
                </div>
                <div class="card px-4 py-2 pb-5 bg-white mt-2 border-1">
                    <div class="d-block my-3 text-center">
                        <h5 class="d-inline-block border-bottom">Additional Information</h5>
                    </div>
                    <div class="">
                        {!! $page::customField('additional_information', $page->id) !!}
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card px-4 py-5 bg-white shadow-sm  border-1">
                    <div class="d-block startFrom">
                        From
                        <span class="fs-2 fw-bold text-dark">
                            ৳{{ $page::customField('price', $page->id) ?? 0 }}
                        </span>
                        Per Person
                    </div>

                    <div class="datePicker">
                        @dump(session()->get('cart'))

                        <form action="{{ route('frontend_book_now') }}" method="get">
                            @csrf
                            <input type="hidden" name="price"
                                   value="{{ $page::customField('price', $page->id) ?? 0 }}"/>
                            <input type="hidden" name="property_id" value="{{ $page->id }}"/>
                            <input type="hidden" name="parent_id" value="{{ $pc->id }}"/>
                            <input type="hidden" name="child_id" value="{{ $cc->id }}"/>
                            <input type="hidden" name="child_id" value="{{ url()->current()  }}"/>

                            <div class="form-group my-3">
                                <label>Checkin Date</label>
                                <input type="date" name="check_in" class="form-control" id="datePicker"/>
                            </div>
                            <div class="form-group my-3">
                                <label>Checkout Date</label>
                                <input type="date" name="check_out" class="form-control" id="datePicker"/>
                            </div>
                            <div class="form-group my-3">
                                <label>Adult</label>
                                <select name="adult_count" class="form-control">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                            <div class="form-group my-3">
                                <label>Child</label>
                                <select name="child_count" class="form-control">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                            <div class="form-group my-3">
                                <label>Additional Person (if any)</label>
                                <select name="extra_count" class="form-control">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success w-100 btn-form1-submit">Book Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@dump($page)

{{--@dump($page::customField('washroom', $page->id))--}}
