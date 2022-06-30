<!-- =============== Forgot password Popup ========== -->
<div class="modal fade" id="forgotPopup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog forgot-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Forgot Password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="survey-com">
                    <form class="contact-form" action="javascript:void(0)">
                        <div class="survey-com form-group">
                            <input type="text" class="form-control val" val="nomand email spec_char_ignore_start min_char-8 max_digit-50" id="forgot_email" placeholder="Enter Email">
                        </div>

                        <div class="survey-com form-addbtn text-center">
                            <button class="active send_forgot_pass">Request OTP</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<x-modal.otpModal/>
<script>
    $('.send_forgot_pass').on('click',function(e){
        $(this).prop('disabled', true);
        e.preventDefault();
        $("#forgotPopup .close").click();
        
        $('#forgot_email').val('');
        $('#forgot_mobile').val('');
        
        $(".check_forgot_otp").show();
        $(".resend_forgot_pass_otp").hide();
        $("#pass_otp").modal('show');
    });
</script>