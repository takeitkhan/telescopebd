<div id="front_tabs">
    <div class="container">
        <div class="tabs_wrapper tabs1_wrapper pt-5 mt-5">
            <div class="tabs tabs1 searchBox">
                <div class="tabs_tabs tabs1_tabs">
                    @php
                        $cats = $category::taxonomy('property_type');
                        $parent = $cats->whereNull('parent_id');
                    @endphp
                    <ul>
                        @foreach($parent as $key => $cat)
                            <li class="active hotels">
                                <a href="#tabs-{{ ++$key }}">
                                    {{ $cat->name }}s
                                </a>
                            </li>
                        @endforeach
                    </ul>

                </div>

                <div class="tabs_content tabs1_content">
                    @foreach($parent as $key => $cat_con)
                        <div id="tabs-{{ ++$key }}">
                            <form action="{{ route('frontend_search') }}" class="form1">
                                @csrf()

                                <input type="hidden" value="{{ $cat_con->id ?? NULL }}" name="parent_cat_id"/>

                                <div class="row">
                                    <div class="col-sm-4 col-md-4">
                                        <div class="select_wrapper">
                                            <label>Destination:</label>
                                            <div class="select_inner">
                                                <select name="destination" class="select2 select">
                                                    @php
                                                        $destination = $cats->where('parent_id', $cat_con->id);
                                                    @endphp
                                                    @foreach($destination as $k => $desti)
                                                        <option value="{{ $desti->id }}">{{ $desti->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-2">
                                        <div class="input1_wrapper">
                                            <label>Check-In:</label>
                                            <div class="input1_inner">
                                                <input name="check_in" type="text" class="input datepicker"
                                                       value="Mm/Dd/Yy">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-2">
                                        <div class="input1_wrapper">
                                            <label>Check-Out:</label>
                                            <div class="input1_inner">
                                                <input name="check_out" type="text" class="input datepicker"
                                                       value="Mm/Dd/Yy">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-2">
                                        <div class="button1_wrapper">
                                            <button type="submit" class="btn-default btn-form1-submit">Search</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</div>
