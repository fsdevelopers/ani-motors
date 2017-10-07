@extends('client.master.index')
@section('custom')
    <div class="container" style="margin-top: 100px">
        <div class="row">
            <div class="login-signup col-sm-10 col-sm-push-1 col-md-6 col-md-push-3">
                <div class="login-signup__top no-margin">
                    <h2 class="login-signup__heading">Create your Ani Motors account</h2>
                </div>
                <div class="panel-body sign-up">
                    <form class="new_client" id="new_client"  action="{{ url('register') }}" method="POST"  accept-charset="UTF-8" >
                        {{ csrf_field() }}
                        <div class="row name-row">
                            <div class="col-sm-6">
                                <div class="form-group has-feedback">
                                    <input autofocus="autofocus" placeholder="First Name" required="required" class="form-control text-field-box" id="first_name" type="text" name="first_name">
                                   </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group has-feedback">
                                    <input autofocus="autofocus" required="required"  placeholder="Last Name" class="form-control text-field-box" id="last_name" type="text" name="last_name">
                                </div>
                            </div>
                        </div>

                        <div class="form-group has-feedback">
                            <input autofocus="autofocus" required="required" placeholder="Phone" class="form-control text-field-box" id="phone" type="text" name="phone">
                        </div>

                        <div class="form-group has-feedback">
                            <input autofocus="autofocus" required="required" placeholder="Email" class="form-control text-field-box" id="email" type="email" value="" name="email">
                        </div>

                        <div class="form-group has-feedback">
                            <input autocomplete="off" required="required" placeholder="Password" class="form-control text-field-box" id="password" pattern=".{8,}" oninvalid="setCustomValidity('Password must be at least 8 characters long')" onchange="try{setCustomValidity('')}catch(e){}" type="password" name="password">
                        </div>

                        <div class="form-group">
                            <label for="client_first_name">How did you hear about us?</label>
                            <select required="required" class="form-control text-field-box" name="how_did_you_hear_about_us" id="client_how_did_you_hear_about_us"><option value="">Please select...</option>
                                <option value="Radio">Radio</option>
                                <option value="Uber Marketplace">Uber Marketplace</option>
                                <option value="Facebook group">Facebook group</option>
                                <option value="Gumtree">Gumtree</option>
                                <option value="Family / friend">Family / friend</option>
                                <option value="Google search">Google search</option>
                                <option value="Facebook advertising">Facebook advertising</option>
                                <option value="PCO magazine">PCO magazine</option></select>
                        </div>

                        <div class="form-group has-feedback">
                            <input autocomplete="off" class="form-control text-field-box" placeholder="Referral code" id="referral_code" type="text" name="referred_by_code">
                        </div>

                        <div class="login-signup__bottom">
                            <div class="checkbox">
                                <input name="terms" type="hidden" value="0"><input required="required" type="checkbox" value="1" name="client[terms]" id="client_terms">
                                <label for="client_terms">I agree with Drover's <a href="#" target="_blank">Terms of Service</a></label>
                            </div>
                        </div>
                        <div class="login-signup__submit">
                            <input type="submit" name="commit" value="Register" class="btn btn-success btn-lg" id="signup-button">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection