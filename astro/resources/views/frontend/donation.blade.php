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
                <div class="col-md-5">
                    <div style="background: #465883; color: #FFFFFF; padding: 20px;">
                        <h1 style="font-size: 40px; font-weight: bolder;">
                            Support the Dorner Telescope Museum Canada’s telescopes and their makers
                        </h1>

                        <p>The Society’s new facility will feature the untold story of Canadian telescope makers, their
                            instruments, and the astronomers who used them. Access will be free, programming offered.
                            Help preserve Canada’s compelling astronomical heritage with a donation. Contact us if you
                            have an artifact to donate.</p>

                        <p>Charity Number# 119126282 RR0001</p>
                    </div>

                </div>
                <div class="col-md-7" style="padding: 0 20px;">

                    <div class="section-donation">
                        <div class="section-donation-inner donation-step details-donation-form" data-step="1">
                            <h3>Donation Type</h3>
                            <ul class="nav nav-tabs d-flex list-unstyled mb-0 active dnType">
                                <li class="monthly bg-active recurring_onetime">
                                    <input type="radio" name="recurring" id="recurring_onetime" value="0">
                                    <label for="recurring_onetime">One-Time</label>
                                </li>
                                <li class="onet recurring_recurring">
                                    <input type="radio" name="recurring" id="recurring_recurring" value="1">
                                    <label for="recurring_recurring">Monthly</label>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="monthly-content">
                                    <p class="description div_recurring_only hide" style="display: none;">You will be
                                        charged for this amount immediately and again every month, until you decide to
                                        stop donating.</p>
                                    <div class="div_recurring_only hide" style="display: none;">
                                        <div class="form-group div_nextDueDate">
                                            <input type="text" class="form-control border-ll-blue w-50"
                                                   name="next_due_date_alternate" id="next_due_date_alternate" size="32"
                                                   value="">
                                            <input type="text" class="form-control border-ll-blue hasDatepicker"
                                                   name="next_due_date" id="next_due_date" maxlength="16" size="16"
                                                   value=""
                                                   style="visibility:hidden;width:1px !important;height:1px !important;float:left;"><img
                                                class="ui-datepicker-trigger"
                                                src="https://secure.rasc.ca/core/admin/images/icon-calendar.png"
                                                alt="..." title="...">
                                        </div>
                                    </div>
                                    <div class="div_onetime_only">
                                        <p class="description">You will be charged immediately for this amount once.</p>
                                    </div>
                                </div>
                            </div>

                            <div id="multipleProjects" class="donation_amounts">
                                <div id="divDonationAmount">
                                    <label for="multiple_projects" class="hide">
                                        <input type="checkbox" name="multiple_projects" id="multiple_projects" value="1"
                                               checked="">
                                        <span
                                            class="multiple_projects">Split my donation across multiple projects.</span>
                                    </label>
                                </div>
                                <div id="divProject" class="">
                                    <div class="row mb-3 justify-content-center">
                                        <div class="col-12 onlyamount">
                                            <h3 class="donation-head">Project:</h3>
                                            <small class="mb-3 mt-3 d-flex" style="color:#fff;font-size:1rem;">To donate
                                                to multiple RASC projects, please select from the drop down</small>
                                            <div class="select-d-amount">
                                                <label class="select w-100">
                                                    <select id="project" name="project"
                                                            class="form-control select-conv required js_asterix"
                                                            placeholder="Choose one">
                                                        <option value="Dorner Telescope Museum" selected="selected">
                                                            Dorner Telescope Museum
                                                        </option>
                                                        <option value="Light-Pollution / Dark-Sky Program">
                                                            Light-Pollution / Dark-Sky Program
                                                        </option>
                                                        <option value="RASC Donations">RASC Donations</option>
                                                        <option value="RASC Legacy Fund">RASC Legacy Fund</option>
                                                        <option value="Ruth Northcott Education Fund">Ruth Northcott
                                                            Education Fund
                                                        </option>
                                                    </select>
                                                    <i></i>
                                                    <a class="jaddAccess button-add"></a>
                                                    <i class="js_required" style="color:Red;">*</i></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="project_amount" style="width: 100%;">
                                    <div class="row mb-3 mt-3 bt-1">
                                        <label
                                            class="col-6 border-0 rowheader text-ll-default b project_text">Project</label>
                                        <label class="col-6 border-0 rowheader text-ll-default b">Amount ($)</label>
                                    </div>
                                    <div id="projects">
                                        <div class="row mb-3 project hide form-group">
                                            <label class="col-md-6 border-0 rowheader">&nbsp;</label>
                                            <div class="col-md-5 border-0">
                                                <input type="text" class="number form-control" min="1" name="pamount[0]"
                                                       maxlength="128" size="32" data-no_receipt="" value=""
                                                       placeholder="amount">
                                            </div>
                                            <div class="col-md-1 border-0 pl-0 l">

                                            </div>
                                        </div>
                                        <div class="row mb-3 project form-group">
                                            <label class="col-md-6 border-0 rowheader">Light-Pollution / Dark-Sky
                                                Program</label>
                                            <div class="col-md-5 border-0">
                                                <input type="text" class="number form-control" min="1"
                                                       name="pamount[Light-Pollution / Dark-Sky Program]"
                                                       maxlength="128" size="32" data-no_receipt="" value=""
                                                       placeholder="amount">
                                            </div>
                                            <div class="col-md-1 border-0 pl-0 l">

                                            </div>
                                        </div>
                                        <div class="row mb-3 project form-group">
                                            <label class="col-md-6 border-0 rowheader">RASC Donations</label>
                                            <div class="col-md-5 border-0">
                                                <input type="text" class="number form-control" min="1"
                                                       name="pamount[RASC Donations]" maxlength="128" size="32"
                                                       data-no_receipt="" value="" placeholder="amount">
                                            </div>
                                            <div class="col-md-1 border-0 pl-0 l">

                                            </div>
                                        </div>
                                        <div class="row mb-3 project form-group">
                                            <label class="col-md-6 border-0 rowheader">RASC Legacy Fund</label>
                                            <div class="col-md-5 border-0">
                                                <input type="text" class="number form-control" min="1"
                                                       name="pamount[RASC Legacy Fund]" maxlength="128" size="32"
                                                       data-no_receipt="" value="" placeholder="amount">
                                            </div>
                                            <div class="col-md-1 border-0 pl-0 l">

                                            </div>
                                        </div>
                                        <div class="row mb-3 project form-group">
                                            <label class="col-md-6 border-0 rowheader">Ruth Northcott Education
                                                Fund</label>
                                            <div class="col-md-5 border-0">
                                                <input type="text" class="number form-control" min="1"
                                                       name="pamount[Ruth Northcott Education Fund]" maxlength="128"
                                                       size="32" data-no_receipt="" value="" placeholder="amount">
                                            </div>
                                            <div class="col-md-1 border-0 pl-0 l">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3 bb-1">
                                        <label class="col-6 border-0 rowheader b">Total Amount</label>
                                        <label class="col-6 border-0 rowheader b amount">$0.00</label>
                                    </div>
                                </div>
                                <input type="hidden" class="required js_asterix" min="1" name="amount" id="amount"
                                       value="0"></div>
                        </div>

                        <div class="section-donation-detail donation-step hide" data-step="2">
                            <div class="details-donation-form donor-information">
                                <h3>Details</h3>
                                <div class="form-group individual mb-3" style="display: none;">
                                    <label>Type</label>
                                    <div class="select-d-amount">
                                        <label class="select w-100">
                                            <select name="behalf_organization" id="behalf_organization"
                                                    class="form-control hide firstTime">
                                                <option value="0">Personal</option>
                                            </select>
                                            <i></i>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group" style="display: none;">
                                    <label>Company Name</label>
                                    <input type="text" class="form-control check_duplicate" name="ocompany"
                                           id="ocompany" placeholder="Company Name" value="">
                                </div>
                                <div class="form-group">
                                    <label>First Name <i class="js_required" style="color:Red;">*</i></label>
                                    <input type="text" class="form-control required check_duplicate js_asterix"
                                           name="firstName" id="firstName" placeholder="First Name" value="">
                                </div>
                                <div class="form-group">
                                    <label>Last Name <i class="js_required" style="color:Red;">*</i></label>
                                    <input type="text" class="form-control required check_duplicate js_asterix"
                                           name="lastName" id="lastName" placeholder="Last Name" value="">
                                </div>
                                <div class="form-group">
                                    <label>Address <i class="js_required" style="color:Red;">*</i></label>
                                    <input type="text" name="address" id="address"
                                           class="form-control required js_asterix" placeholder="Address">
                                </div>
                                <div class="form-group row mb-3">
                                    <div class="col-xl-6 col-12 mb-2 pl-0 pl-md-1 pr-0 pr-md-1">
                                        <input type="text" class="form-control required js_asterix" name="city"
                                               id="city" placeholder="City" value="">
                                    </div>
                                    <div class="col-xl-6 col-12 pl-0 pl-md-1 pr-0 pr-md-0 address individual">
                                        <div class="row form-group address">
                                            <div class="col-12 pl-0 pl-md-0 pr-0 pr-md-1">
                                                <div class="select-d-amount">
                                                    <label class="select w-100">
                                                        <select name="state" id="state"
                                                                class="select-conv form-control required js_asterix">
                                                            <option class="CA US other" value="" selected="selected">
                                                                &nbsp;
                                                            </option>
                                                            <span style="display: none;"><option class="US" value="AL"
                                                                                                 disabled="">Alabama</option></span>
                                                            <span style="display: none;"><option class="US" value="AK"
                                                                                                 disabled="">Alaska</option></span>
                                                            <span style="display: none;"><option class="US" value="AZ"
                                                                                                 disabled="">Arizona</option></span>
                                                            <span style="display: none;"><option class="US" value="AR"
                                                                                                 disabled="">Arkansas</option></span>
                                                            <span style="display: none;"><option class="US" value="CA"
                                                                                                 disabled="">California</option></span>
                                                            <span style="display: none;"><option class="US" value="CO"
                                                                                                 disabled="">Colorado</option></span>
                                                            <span style="display: none;"><option class="US" value="CT"
                                                                                                 disabled="">Connecticut</option></span>
                                                            <span style="display: none;"><option class="US" value="DE"
                                                                                                 disabled="">Delaware</option></span>
                                                            <span style="display: none;"><option class="US" value="DC"
                                                                                                 disabled="">District Of Columbia</option></span>
                                                            <span style="display: none;"><option class="US" value="FL"
                                                                                                 disabled="">Florida</option></span>
                                                            <span style="display: none;"><option class="US" value="GA"
                                                                                                 disabled="">Georgia</option></span>
                                                            <span style="display: none;"><option class="US" value="HI"
                                                                                                 disabled="">Hawaii</option></span>
                                                            <span style="display: none;"><option class="US" value="ID"
                                                                                                 disabled="">Idaho</option></span>
                                                            <span style="display: none;"><option class="US" value="IL"
                                                                                                 disabled="">Illinois</option></span>
                                                            <span style="display: none;"><option class="US" value="IN"
                                                                                                 disabled="">Indiana</option></span>
                                                            <span style="display: none;"><option class="US" value="IA"
                                                                                                 disabled="">Iowa</option></span>
                                                            <span style="display: none;"><option class="US" value="KS"
                                                                                                 disabled="">Kansas</option></span>
                                                            <span style="display: none;"><option class="US" value="KY"
                                                                                                 disabled="">Kentucky</option></span>
                                                            <span style="display: none;"><option class="US" value="LA"
                                                                                                 disabled="">Louisiana</option></span>
                                                            <span style="display: none;"><option class="US" value="ME"
                                                                                                 disabled="">Maine</option></span>
                                                            <span style="display: none;"><option class="US" value="MD"
                                                                                                 disabled="">Maryland</option></span>
                                                            <span style="display: none;"><option class="US" value="MA"
                                                                                                 disabled="">Massachusetts</option></span>
                                                            <span style="display: none;"><option class="US" value="MI"
                                                                                                 disabled="">Michigan</option></span>
                                                            <span style="display: none;"><option class="US" value="MN"
                                                                                                 disabled="">Minnesota</option></span>
                                                            <span style="display: none;"><option class="US" value="MS"
                                                                                                 disabled="">Mississippi</option></span>
                                                            <span style="display: none;"><option class="US" value="MO"
                                                                                                 disabled="">Missouri</option></span>
                                                            <span style="display: none;"><option class="US" value="MT"
                                                                                                 disabled="">Montana</option></span>
                                                            <span style="display: none;"><option class="US" value="NE"
                                                                                                 disabled="">Nebraska</option></span>
                                                            <span style="display: none;"><option class="US" value="NV"
                                                                                                 disabled="">Nevada</option></span>
                                                            <span style="display: none;"><option class="US" value="NH"
                                                                                                 disabled="">New Hampshire</option></span>
                                                            <span style="display: none;"><option class="US" value="NJ"
                                                                                                 disabled="">New Jersey</option></span>
                                                            <span style="display: none;"><option class="US" value="NM"
                                                                                                 disabled="">New Mexico</option></span>
                                                            <span style="display: none;"><option class="US" value="NY"
                                                                                                 disabled="">New York</option></span>
                                                            <span style="display: none;"><option class="US" value="NC"
                                                                                                 disabled="">North Carolina</option></span>
                                                            <span style="display: none;"><option class="US" value="ND"
                                                                                                 disabled="">North Dakota</option></span>
                                                            <span style="display: none;"><option class="US" value="OH"
                                                                                                 disabled="">Ohio</option></span>
                                                            <span style="display: none;"><option class="US" value="OK"
                                                                                                 disabled="">Oklahoma</option></span>
                                                            <span style="display: none;"><option class="US" value="OR"
                                                                                                 disabled="">Oregon</option></span>
                                                            <span style="display: none;"><option class="US" value="PA"
                                                                                                 disabled="">Pennsylvania</option></span>
                                                            <span style="display: none;"><option class="US" value="RI"
                                                                                                 disabled="">Rhode Island</option></span>
                                                            <span style="display: none;"><option class="US" value="SC"
                                                                                                 disabled="">South Carolina</option></span>
                                                            <span style="display: none;"><option class="US" value="SD"
                                                                                                 disabled="">South Dakota</option></span>
                                                            <span style="display: none;"><option class="US" value="TN"
                                                                                                 disabled="">Tennessee</option></span>
                                                            <span style="display: none;"><option class="US" value="TX"
                                                                                                 disabled="">Texas</option></span>
                                                            <span style="display: none;"><option class="US" value="UT"
                                                                                                 disabled="">Utah</option></span>
                                                            <span style="display: none;"><option class="US" value="VT"
                                                                                                 disabled="">Vermont</option></span>
                                                            <span style="display: none;"><option class="US" value="VA"
                                                                                                 disabled="">Virginia</option></span>
                                                            <span style="display: none;"><option class="US" value="WA"
                                                                                                 disabled="">Washington</option></span>
                                                            <span style="display: none;"><option class="US" value="WV"
                                                                                                 disabled="">West Virginia</option></span>
                                                            <span style="display: none;"><option class="US" value="WI"
                                                                                                 disabled="">Wisconsin</option></span>
                                                            <span style="display: none;"><option class="US" value="WY"
                                                                                                 disabled="">Wyoming</option></span>
                                                            <option class="CA" value="AB">Alberta</option>
                                                            <option class="CA" value="BC">British Columbia</option>
                                                            <option class="CA" value="MB">Manitoba</option>
                                                            <option class="CA" value="NB">New Brunswick</option>
                                                            <option class="CA" value="NL">Newfoundland and Labrador
                                                            </option>
                                                            <option class="CA" value="NS">Nova Scotia</option>
                                                            <option class="CA" value="ON">Ontario</option>
                                                            <option class="CA" value="PE">Prince Edward Island</option>
                                                            <option class="CA" value="QC">Quebec</option>
                                                            <option class="CA" value="SK">Saskatchewan</option>
                                                            <option class="CA" value="NT">Northwest Territories</option>
                                                            <option class="CA" value="NU">Nunavut</option>
                                                            <option class="CA" value="YT">Yukon</option>
                                                            <span style="display: none;"><option class="hide other"
                                                                                                 value="Other"
                                                                                                 disabled="">Other</option></span>


                                                        </select>
                                                        <i></i>
                                                        <i class="js_required" style="color:Red;">*</i></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row form-group address" style="display: none;">
                                            <div class="col-12 pl-0 pl-md-0 pr-0 pr-md-0">
                                                <input type="text" class="form-control required js_asterix"
                                                       name="state_other" id="state_other" maxlength="128" size="32"
                                                       value="" placeholder="province name">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <div class="col-xl-6 col-12 mb-2 pl-0 pl-md-0 pr-0 pr-md-1">
                                        <div class="select-d-amount">
                                            <label class="select w-100">
                                                <select name="country" id="country"
                                                        class="select-conv required js_country js_asterix"
                                                        data-default="CA">
                                                    <option value="CA" selected="selected"> Canada</option>
                                                    <option value="US"> USA</option>
                                                    <option value="other" data-value="UK"> United Kingdom</option>
                                                    <option value="Other" class="other"> Other</option>
                                                </select>
                                                <i></i>
                                                <i class="js_required" style="color:Red;">*</i></label>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-12 pl-0 pl-md-1 pr-0 pr-md-0">
                                        <input type="text"
                                               class="form-control required check_duplicate zipcodeCAN js_asterix"
                                               name="zip" id="zip" placeholder="Postal Code" value="" mask="S0S 0S0"
                                               maxlength="7">
                                    </div>
                                </div>
                                <div class="row form-group address" style="display: none;">
                                    <div class="col-xl-6 col-12 pl-0 pl-md-0 pr-0 pr-md-1">
                                        <input type="text" class="form-control required js_asterix" name="country_other"
                                               id="country_other" maxlength="128" size="32" value=""
                                               placeholder="Country Name">
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <div class="col-xl-6 col-12 mb-2 pl-0 pl-md-0 pr-0 pr-md-1">
                                        <input type="text" class="form-control required js_asterix" name="email"
                                               id="email" placeholder="Email" value="">
                                    </div>
                                    <div class="col-xl-6 col-12 pl-0 pl-md-1 pr-0 pr-md-0">
                                        <input type="text" class="form-control required js_asterix" name="phone"
                                               id="phone" placeholder="Phone" value="" maxlength="12">
                                    </div>
                                </div>
                                <div class="row mb-3 tribute_section">
                                    <div class="col-12">
                                        <h3 class="donation-heading mb-2">Is this donation in tribute to someone?</h3>
                                    </div>
                                </div>
                                <div class="row mb-3 tribute">
                                    <div class="col-12">
                                        <div class="select-d-amount">
                                            <label class="select w-100">
                                                <select class="select-conv" name="tribute" id="tribute">
                                                    <option value="">Not a Tribute</option>
                                                    <option value="In Memory Of">Donation in memory of</option>
                                                    <option value="In Honor Of">Donation in tribute to</option>
                                                </select>
                                                <i></i>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group tributeD mb-3 hide">
                                    <label class="control-label tributeM mb-3" style="font-size: 18px;">In memory
                                        of</label>
                                    <label class="control-label tributeH mb-3" style="font-size: 18px;">In tribute to <i
                                            class="js_required" style="color:Red;">*</i></label>
                                    <input type="text"
                                           class="form-control required check_duplicate border-ll-blue js_asterix"
                                           name="tribute_name" id="tribute_name" placeholder="Name" value="">
                                </div>
                            </div>
                        </div>

                        <div class="donation-step d-pay-detail hide" data-step="3">
                            <div class="d-pay-detail donation-detail">
                                <div class="detail-div">
                                    <ul class="d-flex flex-column list-unstyled mb-0 justify-content-between donate-amount-info">
                                        <li class="d-flex justify-content-between">
                                            <span>Donation Amount</span>
                                            <span class="dnt_amount">$0.00</span>
                                        </li>
                                        <li class="d-flex hide justify-content-between">
                                            <span>Transaction fees</span>
                                            <span clas="txn_amt">$5</span>
                                        </li>
                                        <li class="d-flex justify-content-between t-amount hide">
                                            <strong>Total Amount</strong>
                                            <strong class="ttl_amt lbl_ttl">$0.00</strong>
                                        </li>
                                    </ul>
                                </div>
                                <div class="a-check-info detail-div onlyamount border-0 txn_fee hide" id="tx_charges">
                                    <div class="s-form-repeat">
                                        <div class="form-inner-check">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" id="txn_fee" class="custom-control-input"
                                                       name="txn_fee" value="0">
                                                <input type="hidden" name="fee_perc" id="fee_perc" value="0">
                                                <label class="custom-control-label" for="txn_fee">
                                                    Yes i'd like to donate <span class="txn_amt"></span> extra to cover
                                                    creadit card transaction fees <span class="checkmark"></span>
                                                </label>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="payment-detail">
                                    <div class="method-pay">
                                        <h3>Payment Method:</h3>
                                        <ul id="payment-info" class="payment-info d-flex list-unstyled amount-value">
                                            <li class="pgateway clearfix onetime1 recurring1 eft0 card1 selected-value"
                                                data-cards="mastercard,visa" data-txn-limit="0.00" data-txn-fee="0.00"
                                                type="moneris" countries="ca" data-test="0">
                                                <input type="radio" name="gateway" id="pgateway_moneris_7"
                                                       value="moneris">
                                                <label for="pgateway_moneris_7">
                                                    Credit Card (CAD)
                                                </label>
                                            </li>
                                            <li class="pgateway clearfix onetime0 recurring1 eft1 card0 hide"
                                                data-cards="" data-txn-limit="0.00" data-txn-fee="0.00"
                                                type="offline_eft" countries="ca,us" data-test="0">
                                                <input type="radio" name="gateway" id="pgateway_offline_eft_8"
                                                       value="offline_eft">
                                                <label for="pgateway_offline_eft_8">
                                                    EFT/PAD
                                                </label>
                                            </li>
                                            <li class="pgateway clearfix onetime1 recurring1 eft0 card1 hide"
                                                data-cards="mastercard,visa" data-txn-limit="0.00" data-txn-fee="0.00"
                                                type="moneris" countries="us,in,other" data-test="0">
                                                <input type="radio" name="gateway" id="pgateway_moneris_6"
                                                       value="moneris">
                                                <label for="pgateway_moneris_6">
                                                    Credit Card (USD)
                                                </label>
                                            </li>
                                            <style type="text/css">
                                                .hide {
                                                    display: none !important;
                                                }
                                            </style>
                                            <script type="text/javascript">
                                                var debug = false;

                                                function disableCreditCardPaymentSubmitButton(disabled, first) {
                                                    var form = $('.pgateway:eq(0)').parents('form:eq(0)');
                                                    form.find(':input[type=submit]').prop('disabled', disabled);

                                                    if (form.find('#payNowButton0').length && form.find('#payNowButton1').length) {
                                                        $('#payNowButton0,#payNowButton1').addClass('hide');
                                                        if (disabled)
                                                            $('#payNowButton1').removeClass('hide');
                                                        else if (first && $('#payNowButton0').parent('div.donation-step-btn').length)
                                                            $('#payNowButton1').addClass('hide');
                                                        else {
                                                            if (!$('#frmDonate').length || !$('#frmDonate .donation-step:last').hasClass('hide'))
                                                                $('#payNowButton0').removeClass('hide');
                                                        }
                                                    }
                                                }

                                                function initPaymentGateways() {
                                                    window['form'] = $('.pgateway:eq(0)').parents('form:eq(0)');
                                                    window.test_cards = {
                                                        'bambora_cc': '4030000010001234',
                                                        'moneris': '4242424242424242'
                                                    };


                                                    var country = form.find(':input[name=country]').val() + '';
                                                    if (country == 'America' || country == 'US' || country == 'US') {
                                                        form.find('select[name=us_account]').val(1);
                                                        form.find('select[name*=offline_mode] option[value=cheque]').text('Check');
                                                    } else {
                                                        form.find('select[name=us_account]').val(0);
                                                        if (form.find(':input[name=country]').length && form.find(':input[name=country]').val())
                                                            form.find('select[name*=offline_mode] option[value=cheque]').text('Cheque');
                                                    }

                                                    if ($('#qdonate_type').length) {
                                                        if (!form.find('.pgateway.card1').length)
                                                            $('#qdonate_type option[value=recurring]').prop('disabled', 'disabled');
                                                        if (!form.find('.pgateway.onetime1').length)
                                                            $('#qdonate_type option[value=onetime]').prop('disabled', 'disabled');
                                                        if (!form.find('.pgateway.eft1').length)
                                                            $('#qdonate_type option[value=recurring_eft]').prop('disabled', 'disabled');
                                                        if (!form.find('input[name=gateway][value=offline]').length)
                                                            $('#qdonate_type option[value=gift_in_kind]').prop('disabled', 'disabled');

                                                        $('#qdonate_type option[disabled]:selected').prop('selected', null);
                                                        $('#qdonate_type option:not([disabled]):eq(0)').prop('selected', 'selected');

                                                        $('#qdonate_type').bind('change', function () {
                                                            var form = $(this).parents('form:eq(0)');

                                                            if (form.find("select[name=offline_mode]").length)
                                                                form.find("select[name=offline_mode] option:eq(0)").prop('selected', 'selected');
                                                            else if (form.find("input[type=radio][name=offline_mode]").length)
                                                                form.find("input[type=radio][name=offline_mode]:eq(0)").prop('checked', 'checked');

                                                            if (($(this).val() + '').indexOf('recurring') == -1) {
                                                                form.find('input[type=radio][name=recurring][value=0]').prop('checked', 'checked');
                                                                form.find('input[type=hidden][name=recurring]').val(0);
                                                            } else {
                                                                form.find('input[type=radio][name=recurring][value=1]').prop('checked', 'checked');
                                                                form.find('input[type=hidden][name=recurring]').val(1);
                                                            }
                                                            switch ($(this).val()) {
                                                                case 'onetime':
                                                                    form.find('.pgateway.onetime1').removeClass('hide');
                                                                    if (debug) console.log('hiding onetime0 gateways', form.find('.pgateway.onetime0'));
                                                                    form.find('.pgateway.onetime0').addClass('hide');
                                                                    break;
                                                                case 'recurring':
                                                                    form.find('.pgateway.recurring1').removeClass('hide');
                                                                    if (debug) console.log('hiding recurring0 gateways', form.find('.pgateway.recurring0'));
                                                                    form.find('.pgateway.recurring0').addClass('hide');
                                                                    break;
                                                                case 'recurring_eft':
                                                                    form.find('.pgateway.eft1').removeClass('hide');
                                                                    if (debug) console.log('hiding eft0 gateways', form.find('.pgateway.eft0'));
                                                                    form.find('.pgateway.eft0').addClass('hide');

                                                                    if (form.find("select[name=offline_mode]").length)
                                                                        form.find("select[name=offline_mode] option[value=cheque]").prop('selected', 'selected');
                                                                    else if (form.find("input[type=radio]").length)
                                                                        form.find("input[type=radio][name=offline_mode][value=cheque]").prop('checked', 'checked');
                                                                    break;
                                                                case 'gift_in_kind':
                                                                    form.find('.pgateway').addClass('hide');
                                                                    form.find('input[name=gateway][value=offline]').parents('.pgateway:eq(0)').removeClass('hide');

                                                                    if (form.find("select[name=offline_mode]").length) {
                                                                        form.find("select[name=offline_mode] option[value=gift_in_kind]").prop('selected', 'selected');
                                                                        form.find(".offline_mode").addClass('hide');
                                                                    } else if (form.find("input[type=radio]").length) {
                                                                        form.find("input[type=radio][name=offline_mode][value=gift_in_kind]").prop('checked', 'checked');
                                                                        form.find(".offline_mode").addClass('hide');
                                                                    }
                                                                    break;
                                                            }

                                                            form.find('.pgateway:not(.hide):eq(0)').find('input[name=gateway]').prop('checked', 'checked').trigger('change');

                                                            if ((window.top.location.href + "").indexOf('c4i.ca') != -1) {
                                                                if ($("#qdonate_type").val() == 'recurring_eft')
                                                                    selectValue('opcampaign', 37);
                                                                else if ($("#qdonate_type").val() == 'recurring')
                                                                    selectValue('opcampaign', 36);
                                                                else
                                                                    selectValue('opcampaign', 35);
                                                            }
                                                        });
                                                    } else {
                                                        // form.find('.pgateway.eft1').remove();
                                                        if (!form.find('input[name=recurring]').length)
                                                            form.find('.pgateway.onetime0').remove();
                                                    }

                                                    if (form.find('select[name=cc_profile]').length) {
                                                        form.find('select[name=cc_profile] option[value!=""][value!=-1]').removeClass('hide').prop('disabled', null);
                                                        form.find('select[name=cc_profile] option[value!=""][value!=-1]').each(function () {
                                                            var g = $(this).attr('gateway');
                                                            if (!form.find('input[name=gateway][value=' + g + ']').length)
                                                                return $(this).addClass('hide').prop('disabled', true);
                                                            g = form.find('input[name=gateway][value=' + g + ']').parents('.pgateway:eq(0)');
                                                            if (!g.hasClass('card1') || !g.hasClass('recurring1'))
                                                                $(this).addClass('hide').prop('disabled', true);
                                                        });

                                                        if (form.find('select[name=cc_profile] option:not(.hide)').length <= 1) {
                                                            form.find('select[name=cc_profile]').parents('.row:eq(0)').addClass('hide');
                                                            form.find('select[name=cc_profile] option:not(.hide):eq(0)').prop('selected', true);
                                                        } else {
                                                            form.find('select[name=cc_profile]').parents('.row:eq(0)').removeClass('hide');
                                                            if (form.find('select[name=cc_profile] option:selected').hasClass('hide'))
                                                                form.find('select[name=cc_profile] option:not(.hide):eq(0)').prop('selected', true);
                                                        }
                                                    }

                                                    form.find('input[name=gateway], select[name=us_account], select[name=cc_profile], :input[name=offline_mode], input[name=recurring], :input[name=country]').bind("change", function () {
                                                        /*
                                                        if(typeof(reCalculateAmount) == 'function')
                                                            reCalculateAmount();
                                                        */

                                                        if (debug) console.log($('#pamount').val(), 1);

                                                        var form = $(this).parents('form:eq(0)');
                                                        var type = $('input[name=gateway]:checked');
                                                        if (!type.length) {
                                                            form.find('.pgateway:not(.hide):eq(0) input[name=gateway]').prop('checked', true);
                                                            type = $('input[name=gateway]:checked');
                                                        }

                                                        if (!$('#qdonate_type').length)

                                                            form.find('.pgateway').removeClass('hide');

                                                        var gateway = type.parents('.pgateway:eq(0)');
                                                        type = type.val();

                                                        if ($(this).attr('name') == 'gateway') {
                                                            if (type == 'bambora_cc') {
                                                                if ($('.card_bambora_cc1').length) {
                                                                    $('.card_bambora_cc0:not(.hide)').addClass('hide ihide');
                                                                    $('.card_bambora_cc1.hide').removeClass('hide ihide');
                                                                } else if (typeof (_ccCardTokenize_bambora_cc_init) == 'function')
                                                                    _ccCardTokenize_bambora_cc_init();
                                                            } else {
                                                                $('.card_bambora_cc1:not(.hide)').addClass('hide ihide');
                                                                $('.card_bambora_cc0.hide').removeClass('hide ihide');
                                                            }

                                                            if (type == 'moneris') {
                                                                if ($('.card_moneris_cc1').length) {
                                                                    $('.card_moneris_cc0:not(.hide)').addClass('hide ihide');
                                                                    $('.card_moneris_cc1.hide').removeClass('hide ihide');
                                                                } else if (typeof (_ccCardTokenize_moneris_init) == 'function')
                                                                    _ccCardTokenize_moneris_init();
                                                            } else {
                                                                $('.card_moneris_cc1:not(.hide)').addClass('hide ihide');
                                                                $('.card_moneris_cc0.hide').removeClass('hide ihide');
                                                            }
                                                        }

                                                        if ((type + '').indexOf('psigate') != -1 || (type + '').indexOf('moneris') != -1)
                                                            form.find('input[name=cc_cvv].required').removeClass('required');
                                                        else
                                                            form.find('input[name=cc_cvv]:not(.required)').addClass('required');

                                                        var country = (form.find(':input[name=country]').val() + "").toLowerCase();
                                                        if (form.find(':input[name=country]').length) {
                                                            if (country == 'canada' || country == 'ca')
                                                                country = 'ca';
                                                            else if (country == 'usa' || country == 'us' || country.indexOf('united states') != -1)
                                                                country = 'us';
                                                            else if (country == 'india' || country == 'in')
                                                                country = 'in';
                                                            else if (country)
                                                                country = 'other';
                                                            else
                                                                country = 'ca';

                                                            if (debug) console.log('hiding gateways not supporting country: ' + country, form.find('.pgateway:not([countries*="' + country + '"]):not(.hide)'));
                                                            form.find('.pgateway:not([countries*="' + country + '"]):not(.hide)').addClass('hide');

                                                            if (country == 'us')
                                                                form.find('select[name*=offline_mode] option[value=cheque]').text('Check');
                                                            else if (form.find(':input[name=country]').val())
                                                                form.find('select[name*=offline_mode] option[value=cheque]').text('Cheque');
                                                        }

                                                        if (debug) console.log($('#pamount').val(), 2);

                                                        // console.log(type, gateway);
                                                        if (gateway.hasClass('hide') && form.find('.pgateway:not(.hide)').length) {
                                                            form.find('.pgateway:not(.hide):eq(0) input[name=gateway]').prop('checked', 'checked');
                                                            return form.find('.pgateway:not(.hide):eq(0) input[name=gateway]').trigger('change');
                                                        }

                                                        if (form.find('input[name=next_due_date]').length)
                                                            form.find('input[name=next_due_date]').datepicker('option', 'minDate', '+0d');

                                                        var recurring = 0;
                                                        if (form.find('input[type=radio][name=recurring]:checked').val() > 0 || form.find('input[type=hidden][name=recurring]').val() > 0)
                                                            recurring = 1;

                                                        if (recurring) {
                                                            if (!$('#qdonate_type').length) {
                                                                if (debug) console.log('hiding recurring0 gateways', form.find('.pgateway.recurring0'));
                                                                form.find('.pgateway.recurring0').addClass('hide');
                                                            }
                                                            if (debug) console.log('hiding div_onetime_only', $('.div_onetime_only'));
                                                            $('.div_onetime_only').addClass('hide');
                                                            $('.div_recurring_only').removeClass('hide');
                                                        } else {
                                                            if (!$('#qdonate_type').length) {
                                                                if (debug) console.log('hiding onetime0 gateways', form.find('.pgateway.onetime0'));
                                                                form.find('.pgateway.onetime0').addClass('hide');
                                                            }
                                                            if (debug) console.log('hiding div_recurring_only', $('.div_recurring_only'));
                                                            $('.div_recurring_only').addClass('hide');
                                                            $('.div_onetime_only').removeClass('hide');
                                                        }

                                                        if (debug) console.log($('#pamount').val(), 3);

                                                        if ($(this).attr('name') == 'gateway') {
                                                            var txn_limit_amount = parseFloat(gateway.attr('data-txn-limit'));
                                                            if (debug) console.log('hiding txn_limit_exceed', form.find('.txn_limit_exceed'));
                                                            form.find(".txn_limit_exceed").addClass('hide');
                                                            if (gateway.length && txn_limit_amount > 0) {
                                                                form.find(".txn_limit").text('$' + number_format(txn_limit_amount, 0));
                                                                $(".txn_limit_exceed").removeClass('hide');
                                                            }

                                                            var txn_fee_perc = parseFloat(gateway.attr('data-txn-fee'));
                                                            form.find('input[name=fee_perc]').val((txn_fee_perc > 0 ? txn_fee_perc : 0));
                                                            if (typeof (reCalculateAmount) == 'function')
                                                                reCalculateAmount();
                                                            form.find('input[name=txn_fee]').trigger('change');
                                                            if (txn_fee_perc > 0)
                                                                form.find('input[name=fee_perc]').parents('#tx_charges').removeClass('hide');
                                                            else {
                                                                if (debug) console.log('hiding tx_charges', form.find('input[name=fee_perc]').parents('#tx_charges'));
                                                                form.find('input[name=fee_perc]').parents('#tx_charges').addClass('hide');
                                                            }

                                                            if (parseFloat(form.find("input[name=amount]").val()) > txn_limit_amount)
                                                                $(".txn_limit_exceed label").removeClass('alert-warning').addClass('alert-danger');
                                                            else
                                                                $(".txn_limit_exceed label").removeClass('alert-danger').addClass('alert-warning');

                                                            // TODO: Hide transaction fee block if txn_fee is not applicable.
                                                        }

                                                        //if(debug) console.log($('#pamount').val(), 4);

                                                        if (gateway.hasClass('card1')) {
                                                            $('#creditCardImages').html('');
                                                            validCreditCardType = (gateway.attr('data-cards') + '').split(',');
                                                            if (typeof (initCreditCardTypeValidator) == 'function')
                                                                initCreditCardTypeValidator(form.find('input[name=cc_number]').attr('id'), 'creditCardImages');
                                                            form.find('.creditCardDetails:not(.ihide)').removeClass('hide');
                                                            if (form.find('select[name=cc_profile] option[value!=-1]').length)
                                                                form.find('.existing_cc_profile').removeClass('hide');

                                                            if (form.find('select[name=cc_profile]').val() > 0) {
                                                                if (debug) console.log('hiding creditCardDetails', form.find('.creditCardDetails'));
                                                                form.find('.creditCardDetails').addClass('hide');
                                                                if (form.find('input[name=gateway][value=' + form.find('select[name=cc_profile] option:selected').attr('gateway') + ']').length) {
                                                                    if (!form.find('input[name=gateway][value=' + form.find('select[name=cc_profile] option:selected').attr('gateway') + ']').is(':checked')) {
                                                                        form.find('input[name=gateway][value=' + form.find('select[name=cc_profile] option:selected').attr('gateway') + ']').prop('checked', 'checked').trigger('change');
                                                                        return;
                                                                    }
                                                                }
                                                                if (!gateway.hasClass('card1') && form.find('.pgateway.card1:eq(0) input[type=checkbox]').length) {
                                                                    form.find('select[name=cc_profile] option:selected').remove();
                                                                    form.find('select[name=cc_profile] option:eq(0)').prop('selected', 'selected');
                                                                    form.find('.pgateway.card1:eq(0) input[type=checkbox]').prop('checked', true).trigger('change');
                                                                    return;
                                                                }
                                                                if (debug) console.log('hiding other gateways', gateway.siblings('.pgateway'));
                                                                gateway.siblings('.pgateway').addClass('hide');
                                                            }
                                                        } else {
                                                            if (debug) console.log('hiding creditCardDetails', form.find('.creditCardDetails'));
                                                            form.find('.creditCardDetails').addClass('hide');
                                                            if (debug) console.log('hiding existing_cc_profile', form.find('.existing_cc_profile'));
                                                            form.find('.existing_cc_profile').addClass('hide');
                                                            form.find('select[name=cc_profile] option[value=-1]').prop('selected', 'selected');
                                                        }

                                                        if (debug) console.log($('#pamount').val(), 5);

                                                        if (gateway.hasClass('eft1')) {
                                                            $('.div_recurring_eft_only').removeClass('hide');
                                                            if (debug) console.log('hiding all eft inputs', form.find('.us_account0, .us_account1, .us_account2'));
                                                            form.find('.us_account0, .us_account1, .us_account2').addClass('hide');
                                                            form.find('select[name=us_account] option[value=2]').prop('disabled', (type == 'offline_eft' ? null : 'disabled'));

                                                            if (type != 'offline_eft')
                                                                form.find('input[name=next_due_date]').datepicker('option', 'minDate', '+1d');

                                                            if ($('#us_account').val() == 2) {
                                                                form.find('.us_account2').removeClass('hide');
                                                                $('label[for=' + 'eft_account]').html('Reference Number');
                                                                $('#eft_account').attr('data-length', '0,12').attr('placeholder', 'Upto 12 digits');

                                                                if (!$('#eft_designation option').length && $('select#offline_mode').length)
                                                                    $('#eft_designation').html('').append($('#offline_mode option').clone());

                                                                if (debug) console.log('hiding set_length', $('.eft_details span.set_length'));
                                                                $('.eft_details span.set_length').addClass('hide');
                                                                $('.eft_details label').css('height', 'auto');
                                                            } else if ($('#us_account').val() == 1) {
                                                                form.find('.us_account1').removeClass('hide');
                                                                $('.lw-details.html_tooltip').attr('title', "<img src='" + base + "images/donor/eft_us.jpg' />").attr('data-original-title', "<img src='" + base + "images/donor/eft_us.jpg' />");

                                                                $('label[for=' + 'eft_account]').html('Account Number <span class="set_length">(5-15 digits)</span>');
                                                                $('#eft_account').attr('data-length', '5,15').attr('placeholder', 'Account Number');

                                                                $('label[for=' + 'eft_bank]').html('Routing Number <span class="set_length">(9 digits)</span>');
                                                                $('#eft_bank').attr('data-length', '9,9');

                                                                $('label[for=' + 'eft_branch]').html('Transit Number <span class="set_length">(optional)</span>');
                                                                $('#eft_branch').attr('data-length', '0,9').removeClass('required');

                                                                $('.div_recurring_eft_only input.set_length').attr('minlength', '').attr('maxlength', '');

                                                                if (debug) console.log('hiding set_length', $('.eft_details span.set_length'));
                                                                $('.eft_details span.set_length').addClass('hide');
                                                                $('.eft_details label').css('height', 'auto');
                                                            } else {
                                                                form.find('.us_account0').removeClass('hide');
                                                                $('.lw-details.html_tooltip').attr('title', "<img src='" + base + "images/donor/eft.jpg' />").attr('data-original-title', "<img src='" + base + "images/donor/eft.jpg' />");

                                                                $('label[for=' + 'eft_account]').html('Account Number <span class="set_length">(5-12 digits)</span>');
                                                                $('#eft_account').attr('data-length', '5,12').attr('placeholder', 'Account Number');

                                                                $('label[for=' + 'eft_bank]').html('Financial Institution Code <span class="set_length">(3 digits)</span>');
                                                                $('#eft_bank').attr('data-length', '3,3');

                                                                $('label[for=' + 'eft_branch]').html('Transit Number <span class="set_length">(5 digits)</span>');
                                                                $('#eft_branch').attr('data-length', '5,5').addClass('required');

                                                                $('.eft_details span.set_length').removeClass('hide');
                                                                $('.eft_details label').css('height', '42px');
                                                            }

                                                            $('.div_recurring_eft_only input.set_length').each(function () {
                                                                var lengths = $(this).attr('data-length');
                                                                lengths = lengths.split(",");
                                                                if (lengths && lengths.length == 2)
                                                                    $(this).attr('minlength', lengths[0]).attr('maxlength', lengths[1]);
                                                            });

                                                            $('.html_tooltip').tooltip({
                                                                animated: 'fade',
                                                                placement: 'bottom',
                                                                html: true
                                                            });

                                                            var country = (form.find(':input[name=country]').val() + "").toLowerCase();
                                                            if (country == 'america' || country == 'us' || country == 'us')
                                                                form.find('select[name=us_account] option[value=1]').prop('selected', true);
                                                            else
                                                                form.find('select[name=us_account] option[value=0]').prop('selected', true);

                                                            if (form.find(':input[name=country] option:not([disabled])').length == 1) {
                                                                if (country == 'america' || country == 'us' || country == 'us')
                                                                    form.find('select[name=us_account] option[value=0]').remove();
                                                                else
                                                                    form.find('select[name=us_account] option[value=1]').remove();

                                                                form.find('select[name=us_account] option:not([disabled]):eq(0)').prop('selected', true);
                                                                form.find('select[name=us_account]').parents('div.row:eq(0)').hide();
                                                            }
                                                        } else {
                                                            if (debug) console.log('hiding div_recurring_eft_only', $('.div_recurring_eft_only'));
                                                            $('.div_recurring_eft_only').addClass('hide');
                                                        }

                                                        if (debug) console.log($('#pamount').val(), 6);

                                                        if (debug) console.log('hiding div_gift_in_kind_only', $('.div_gift_in_kind_only'));
                                                        form.find('.div_gift_in_kind_only').addClass('hide');
                                                        if (type == 'offline') {
                                                            form.find(".offline_mode").removeClass('hide');
                                                            var mode = null;

                                                            if (form.find("select[name=offline_mode]").length)
                                                                mode = form.find('select[name=offline_mode]').val();
                                                            else if (form.find("input[type=radio]").length)
                                                                mode = form.find("input[type=radio][name=offline_mode]:checked").val();

                                                            switch (mode) {
                                                                case 'gift_in_kind':
                                                                    form.find('input[name=soft_credits]').prop('checked', null).trigger('change');
                                                                    form.find("label[for*=offline_dd]").text("Appraisal Date");
                                                                    form.find("label[for*=deposit_date]").text("Gift Date");
                                                                    if (debug) console.log('hiding comments box', form.find('textarea[name=comments]').parents('.row:eq(0)'));
                                                                    form.find('textarea[name=comments]').parents('.row:eq(0)').addClass('hide');
                                                                    form.find('.div_gift_in_kind_only').removeClass('hide');
                                                                    if (debug) console.log('hiding offline modes', form.find('select[name=offline_mode]').parents('.row:eq(0)'));
                                                                    form.find('select[name=offline_mode]').parents('.row:eq(0)').addClass('hide');
                                                                    break;
                                                                default:
                                                                    form.find("label[for*=offline_dd]").text((country == 'us' ? "Check Date" : "Cheque Date"));
                                                                    form.find("label[for*=cheque_date]").text((country == 'us' ? "Check Date" : "Cheque Date"));
                                                                    form.find("label[for*=deposit_date]").text("Deposit Date");
                                                                    form.find('textarea[name=comments]').parents('.row:eq(0)').removeClass('hide');
                                                                    form.find('select[name=offline_mode]').parents('.row:eq(0)').removeClass('hide');
                                                                    break;
                                                            }

                                                            if (mode == 'cheque')
                                                                form.find('select[name=offline_status]').parents('.row:eq(0)').removeClass('hide');
                                                            else {
                                                                if (debug) console.log('hiding offline_status options', form.find('select[name=offline_status]').parents('.row:eq(0)'));
                                                                form.find('select[name=offline_status]').val('Success').parents('.row:eq(0)').addClass('hide');
                                                            }
                                                        } else {
                                                            if (debug) console.log('hiding offline mode inputs', form.find(".offline_mode"));
                                                            form.find(".offline_mode").addClass('hide');
                                                            form.find('textarea[name=comments]').parents('.row:eq(0)').removeClass('hide');
                                                        }

                                                        if (debug) console.log($('#pamount').val(), 7);

                                                        if ($('.creditCardDetails:visible').length && !$('#cc_number').hasClass('valid'))
                                                            disableCreditCardPaymentSubmitButton(true);
                                                        else
                                                            disableCreditCardPaymentSubmitButton(null);

                                                        if (typeof (updateReceiptMessage) == 'function')
                                                            updateReceiptMessage();

                                                        let pgateways_single_gateway_visible_effective = 1;
                                                        if (typeof (pgateways_single_gateway_visible) != 'undefined' && pgateways_single_gateway_visible)
                                                            pgateways_single_gateway_visible_effective = 0;

                                                        if (form.find('.pgateway:not(.hide)').length > pgateways_single_gateway_visible_effective)
                                                            form.find('.pgateways').removeClass('hide');
                                                        else {
                                                            if (debug) console.log('hiding all gateways', form.find(".pgateways"));
                                                            form.find('.pgateways').addClass('hide');
                                                        }

                                                        if (!form.find('.pgateway:not(.hide) input[name=gateway]:checked').length)
                                                            form.find('.pgateway:not(.hide):eq(0) input[name=gateway]').prop('checked', true).trigger('change');
                                                    });

                                                    if (!form.find('.pgateway:not(.hide) input[name=gateway]:checked').length)
                                                        form.find('.pgateway:not(.hide):eq(0) input[name=gateway]').prop('checked', true);

                                                    form.find('input[name=gateway]:checked').trigger('change');

                                                    if (debug) console.log($('#pamount').val(), 8);
                                                }

                                                $(document).ready(function () {
                                                    initPaymentGateways();


                                                    var form = $('.pgateway:eq(0)').parents('form:eq(0)');
                                                    if (form && form.length) {
                                                        if ($('#frmDonate').length && $('#frmDonate .donation-step:last').hasClass('hide'))
                                                            form.find(':input[type=submit]').addClass('hide');
                                                        else if (!$('#frmDonate').length && $('.pgateway:visible:eq(0)').length)
                                                            form.find(':input[type=submit]').removeClass('hide');
                                                        else {
                                                            if ($('#frmDonate').length && !$('#frmDonate .donation-step:last').hasClass('hide')) {
                                                                form.find(':input[type=submit]').removeClass('hide');
                                                            }
                                                        }

                                                        setTimeout(function () {
                                                            form.on('submit', function () {
                                                                if (form.valid())
                                                                    form.find(':input[type=submit]').addClass('hide');
                                                                else
                                                                    form.find(':input[type=submit]').removeClass('hide');
                                                            });
                                                        }, 500);
                                                    }
                                                });
                                            </script>

                                        </ul>
                                    </div>
                                    <div class="cc-info creditCardDetails">
                                        <h3>Credit Card Information:</h3>
                                        <div class="cc-small-logo" id="creditCardImages"><span class="error"
                                                                                               style="color: red; display: none;">This card type is not supported!</span><img
                                                alt="mastercard" id="cc_type_mastercard"
                                                src="/core/images/cards/mastercard.png"
                                                style="margin: 0px 10px 10px 0px; max-height: 73px; display: inline-block;"><img
                                                alt="visa" id="cc_type_visa" src="/core/images/cards/visa.png"
                                                style="margin: 0px 10px 10px 0px; max-height: 73px; display: inline-block;"><img
                                                alt="maestro" id="cc_type_maestro" src="/core/images/cards/maestro.png"
                                                style="margin: 0px 10px 10px 0px; max-height: 73px; display: none;"><img
                                                alt="amex" id="cc_type_amex" src="/core/images/cards/amex.png"
                                                style="margin: 0px 10px 10px 0px; max-height: 73px; display: none;"><img
                                                alt="solo" id="cc_type_solo" src="/core/images/cards/solo.png"
                                                style="margin: 0px 10px 10px 0px; max-height: 73px; display: none;"><img
                                                alt="discover" id="cc_type_discover"
                                                src="/core/images/cards/discover.png"
                                                style="margin: 0px 10px 10px 0px; max-height: 73px; display: none;"><img
                                                alt="dinersclub" id="cc_type_dinersclub"
                                                src="/core/images/cards/dinersclub.png"
                                                style="margin: 0px 10px 10px 0px; max-height: 73px; display: none;"><img
                                                alt="jcb" id="cc_type_jcb" src="/core/images/cards/jcb.png"
                                                style="margin: 0px 10px 10px 0px; max-height: 73px; display: none;"><img
                                                alt="delta" id="cc_type_delta" src="/core/images/cards/delta.png"
                                                style="margin: 0px 10px 10px 0px; max-height: 73px; display: none;"><img
                                                alt="switch" id="cc_type_switch" src="/core/images/cards/switch.png"
                                                style="margin: 0px 10px 10px 0px; max-height: 73px; display: none;"><img
                                                alt="electron" id="cc_type_electron"
                                                src="/core/images/cards/electron.png"
                                                style="margin: 0px 10px 10px 0px; max-height: 73px; display: none;">
                                        </div>
                                    </div>
                                    <div class="cc-form creditCardDetails">
                                        <div class="form-group">
                                            <label>Card Holder Name: <i class="js_required"
                                                                        style="color:Red;">*</i></label>
                                            <input type="text" name="cc_name" id="cc_name"
                                                   class="form-control required js_asterix"
                                                   placeholder="The name on the credit card">
                                        </div>
                                        <div class="form-group">
                                            <label>Credit Card Number: <i class="js_required"
                                                                          style="color:Red;">*</i></label>
                                            <input type="text" class="form-control required digits js_asterix"
                                                   name="cc_number" id="cc_number" maxlength="16" size="16" value=""
                                                   placeholder="Card Number">
                                            <label for="cc_number" class="error" style="display: none;">This field is
                                                required.</label>
                                        </div>
                                        <div class="row form-group creditCardDetails">
                                            <div class="col-xl-6 mb-2">
                                                <label class="control-label lbl-exp d-block required">Expiration Date <i
                                                        class="js_required" style="color:Red;">*</i></label>
                                                <div class="row">
                                                    <div class="col-xl-6 col-12 mb-2 pl-0 pl-md-0 pr-0 pr-md-1">
                                                        <div class="select-d-amount">
                                                            <label class="select w-100">
                                                                <select class="form-control required js_asterix"
                                                                        name="cc_exp_month" id="cc_exp_month">
                                                                    <option disabled="" hidden="" selected="">Month
                                                                    </option>
                                                                    <option value="01">January</option>
                                                                    <option value="02">February</option>
                                                                    <option value="03">March</option>
                                                                    <option value="04">April</option>
                                                                    <option value="05">May</option>
                                                                    <option value="06">June</option>
                                                                    <option value="07">July</option>
                                                                    <option value="08">August</option>
                                                                    <option value="09">September</option>
                                                                    <option value="10">October</option>
                                                                    <option value="11">November</option>
                                                                    <option value="12">December</option>
                                                                </select>
                                                                <i></i>
                                                                <i class="js_required" style="color:Red;">*</i></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-12 pl-0 pl-md-1 pr-0 pr-md-0">
                                                        <div class="select-d-amount">
                                                            <label class="select w-100">
                                                                <select class="form-control required js_asterix"
                                                                        name="cc_exp_year" id="cc_exp_year">
                                                                    <option disabled="" hidden="" selected="">Year
                                                                    </option>
                                                                    <option value="24">2024</option>
                                                                    <option value="25">2025</option>
                                                                    <option value="26">2026</option>
                                                                    <option value="27">2027</option>
                                                                    <option value="28">2028</option>
                                                                    <option value="29">2029</option>
                                                                    <option value="30">2030</option>
                                                                    <option value="31">2031</option>
                                                                    <option value="32">2032</option>
                                                                    <option value="33">2033</option>
                                                                </select>
                                                                <i></i>
                                                                <i class="js_required" style="color:Red;">*</i></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-12 pl-0 pl-md-1 pr-0 pr-md-0">
                                                <label class="control-label d-block required cvv-label">CVN Number
                                                    <span>*</span>
                                                    <span class="w-cvv-info-popup">
														What is this?
													</span></label>
                                                <div class="cvv-w-popup">
                                                    <span class="cvv-close-popup"><i
                                                            class="fa fa-times-circle"></i></span>
                                                    <ul class="d-flex list-unstyled mb-0 align-items-center">
                                                        <li><img src="/images/cvv_credit.png"></li>
                                                        <li>We use your security code (CVV code) to veryfy your credit
                                                            card.
                                                        </li>
                                                    </ul>
                                                </div>
                                                <input type="password" class="form-control digits js_asterix"
                                                       name="cc_cvv" id="cc_cvv" maxlength="4" size="4" value="">
                                            </div>
                                        </div>
                                        <div class="row justify-content-center info-text">
                                            <div class="col-12">
                                                <p>Please verify your information above and click "DONATE". Once you
                                                    click "DONATE" your donation will be processed.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="donation-step-btn d-flex w-100 justify-content-between">
                            <button type="button" class="prev back hide" name="prev" value="prev">Back</button>
                            <button type="button" name="next" class="next" value="next">Next</button>
                            <button type="submit" class="hide" name="submitButton" id="payNowButton0" value="Submit">
                                Donate
                            </button>
                            <button type="submit" class="hide" id="payNowButton1"
                                    onclick="javascript: if(!$('#frmDonate').valid()) $('#frmDonate').find('input.error,select.error').eq(0).focus();"
                                    style="color: #fff;">
                                Please enter valid card number
                            </button>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
