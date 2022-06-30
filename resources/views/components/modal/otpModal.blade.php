<!-- Enter OTP popup -->
<div class="modal fade" id="pass_otp">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">

            <div class="modal-header survey-com">
                <h4 class="modal-title">Enter OTP</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body survey-com">
                <!-- <form action="" method="post"> -->
                    <input type="hidden" id="forgot_otp">
                    <input type="hidden" id="forgot_user_id">
                    <input type="hidden" id="forgot_user_email">
                    <input type="hidden" id="forgot_user_mobile">
                    <div class="survey-com form-group mt-3">
                        <div class="input-group">
                            <input type="text" class="form-control text-center val f-otp otp1" placeholder="_" val='num min_char-0 max_digit-1'>
                            <input type="text" class="form-control text-center val f-otp otp2" placeholder="_" val='num min_char-0 max_digit-1'>
                            <input type="text" class="form-control text-center val f-otp otp3" placeholder="_" val='num min_char-0 max_digit-1'>
                            <input type="text" class="form-control text-center val f-otp otp4" placeholder="_" val='num min_char-0 max_digit-1'>
                            <input type="text" class="form-control text-center val f-otp otp5" placeholder="_" val='num min_char-0 max_digit-1'>
                            <input type="text" class="form-control text-center val f-otp otp6" placeholder="_" val='num min_char-0 max_digit-1'>
                        </div>
                    </div>
                    <div class="survey-com text-right">
                        <a href="javascript:void(0)" id="timer">Resend OTP (180)</a>
                    </div>

                    <div class="survey-com form-addbtn text-center mt-4">
                        <a href="javascript:void(0)" class="btn btn-custom check_forgot_otp">Verify</a>                         
                        <button class="btn btn-custom resend_forgot_pass_otp" style="display:none;border-radius:4px;padding:7px">Resend OTP</button>
                        <a href="javascript:void(0);" class="btn btn-danger" data-dismiss="modal">Cancle</a>
                    </div>
                <!-- </form> -->
            </div>

        </div>
    </div>
</div>
