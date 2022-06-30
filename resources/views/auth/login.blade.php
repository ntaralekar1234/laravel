<x-layout>
    <section class="login">
        <div class="survey-com h-100">

            <!-- ======== Login Right panel =============  -->
            <div class="login-center h-100 text-center">
                <div class="bg-span"></div>
                <div class="adminlogin-content">
                    <img src="{{asset('images/salon-logo-tr-wh.png')}}" alt="" class="project-img">
                    <h1>Salon Super Admin</h1>
                </div>
            </div>
            <div class="login-right h-100">
                <div class="mt-cust loginforgot-panel">
                    <div class="survey-com loginforgot-subpanel">
                        <h2 class="text-left mb-4">LOGIN</h2>
                        <form method="post" action="{{ route('login') }}" autocomplete="off">
                            @csrf
                            <div class="row">
                                <div class="col col-12"> 
                                    <div class="survey-com form-group">
                                        <label class="lbl-txt">Email</label>
                                        <input value="" type="text" val='' id="adm_name" name="adm_name" class="form-control val" placeholder="Enter Email">
                                    </div>
                                </div>
                                <div class="col col-12 mb-2">
                                    <div class="survey-com form-group">
                                        <label class="lbl-txt">Password</label>
                                        <div class="password_div">
                                        <input value="" type="password" val='' id="adm_password" name="adm_password" class="form-control val" placeholder="Enter Password">
                                        <button class="eyespan" id="eye" type="button"><i class="fas eyei fa-eye-slash"></i></button>
                                        </div>
                                    </div>
                                    
                                    <div class="survey-com text-right">
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#forgotPopup">Forgot Password ?</a>
                                    </div>
                                </div>
                                <div class="col col-6">
                                    <ul class="fl-check-ul list-check ul-check survey-com">
                                        <li class="check-ul-li"><label class="fl-label">
                                            <input type="checkbox" name="rememberme" value="1" class="input-select"><span class="check-span"><i class="span-i"></i></span><b>Remember Me</b></label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col col-6">
                                </div>

                                <div class="col col-12 mt-4">
                                    <div class="survey-com logreg-button text-right">
                                        <button type="submit" class="loginforgot-btn">Login</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> 
        </div>
    </section>
    <!-- End Page -->
    <x-modal.forgotPassword/>
</x-layout>