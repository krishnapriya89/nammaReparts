
@extends('frontend.layouts.app')
@section('title', 'Registration')

@section('content')


      <button class="btn btn-success" data-toggle="modal" data-target="#MyModal">Login</button>

      <button class="btn btn-success" data-toggle="modal" data-target="#MyModa2">OTP</button>

      <button class="btn btn-success" data-toggle="modal" data-target="#MyModa3">Register</button>

      <div class="modal align-middle" id="MyModal">
          <div class="modal-dialog modal-dialog-centered form-radious">
              <div class="form-radious modal-content">
                      <button class="close modal-close" data-dismiss="modal">&times;</button>

                  <div class="form-radious modal-body wrap-login100">
                    <h5 class="form-title p-b-25">Account Login</h5>
                    <form action="{{route('login')}}" method="post" id="login_form">
@csrf
                        <div class="form-group">
                            <label class="login-label ">Mobile Number</label>
                            <input class="login-input" type="text" name="phone_number" id="phone_number" placeholder="Enter Your Mobile Number">
                        </div>
                    </form>

                </div>

              </div>
          </div>
      </div>


      <div class="modal align-middle" id="MyModa2">
        <div class="modal-dialog modal-dialog-centered form-radious">
            <div class="form-radious modal-content">
                    <button class="close modal-close" data-dismiss="modal">&times;</button>

                <div class="form-radious modal-body wrap-login100">
                    <div class="text-center">
                  <h5 class="form-title">Mobile Phone Verification</h5>
                  <label class="login-subtitle">Enter the 4-digit verification code that was sent to your phone number.</label>
                </div>

                  <div class="otp-wrapper m-t-40">
                  <div class="otp-field">
                    <input type="text" maxlength="1" />
                    <input type="text" maxlength="1" />
                    <input type="text" maxlength="1" />
                    <input type="text" maxlength="1" />
                </div>
            </div>
                  <div class="text-center mt-2">
                    <button type="submit" class="verify-account-btn" id="verifyOtpBtn">Verify Account</button>
                  </div>
                  <div class="mt-4 text-center resend">Didn't receive code? <a class="" href="#0">Resend</a></div>
              </div>

            </div>
        </div>
    </div>

    <div class="modal align-middle" id="MyModa3">
        <div class="modal-dialog modal-lg modal-dialog-centered form-radious">
            <div class="form-radious modal-content">
                    <button class="close modal-close" data-dismiss="modal">&times;</button>

                <div class="form-radious modal-body wrap-login100">
                    <div class="text-center">
                  <h5 class="form-title">Account registration </h5>
                </div>
                <form action="{{route('registration.submit')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="login-label ">Firtst NAME</label>
                                <input class="login-input" type="text" name="first_name" placeholder="Enter Your First Name">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="login-label ">Last NAME</label>
                                <input class="login-input" type="text" name="last_name" placeholder="Enter Your Last Name">
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="login-label ">Email Address</label>
                                <input class="login-input" type="email" name="email" placeholder="Enter Your Email">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="login-label ">Mobile Number</label>
                                <input class="login-input" type="number"  name="phone_number" placeholder="Enter Your Mobile Number">
                            </div>
                            @error('phone_number')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-12">
                            <div class="text-center mt-2">
                                <button type="submit" class="verify-account-btn">Register</button>
                              </div>
                            </div>

                        </div>


                  </div>
                </form>


            </div>
        </div>
    </div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $.ajaxSetup({

    });
</script>

<script>
    $(document).ready(function(){

        $('#phone_number').on('input',function(){
            const phone_number = $(this).val();
            if(phone_number.length === 10)
            {
                $('#login_form').submit();
            }
        });
        //submit the login form
        $('#login_form').on('submit', function (event) {
         event.preventDefault(); // Prevent the default form submission

            $.ajax({
                url: $(this).attr('action'), // Use the form action URL
                method: 'POST',
                data: $(this).serialize(), // Serialize the form data
                success: function (response) {
                    if (response.success) {
                        $('#MyModa2').modal('show'); // Show the OTP modal
                    } else {
                        alert(response.message); // Show error message if OTP not sent
                    }
                },
                error: function (xhr) {
                    const errorMessage = xhr.responseJSON.message || 'An error occurred.';
                    alert(errorMessage); // Show error message if request fails
                }
            });
        });

        $('.otp-field input').on('keyup', function (e) {
        if ($(this).val().length >= $(this).attr('maxlength')) {
            $(this).next('input').focus();
        }
        if (e.key === 'Backspace' && $(this).val() === '') {
            $(this).prev('input').focus();
        }
        });

        //verify otp
        $('#verifyOtpBtn').on('click',function(){
            console.log($('meta[name="csrf-token"]').attr('content'));
            const otp = $('.otp-field input').map(function () {
                return $(this).val();
            }).get().join(''); // Join all OTP inputs

            $.ajax({
                url: '/verify-otp',
            method: 'POST',
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
             },

            data: {
                    otp: otp, // Send the joined OTP
                    phone_number: $('#phone_number').val() // Send the phone number for context
                },
            success: function (response) {
                console.log(response);
                if (response.success) {
                    alert('OTP verified successfully!'); // Handle successful verification
                    // You can redirect or perform additional actions here
                } else {
                    alert(response.message); // Show error message if OTP verification fails
                }
            },
            error: function (xhr) {
                let errorMessage = 'An error occurred.';
                if (xhr.responseJSON && xhr.responseJSON.message) {
                    errorMessage = xhr.responseJSON.message; // Use the error message from the response
                } else if (xhr.status === 400) {
                    errorMessage = 'Bad request. Please try again.'; // Example for bad requests
                } else if (xhr.status === 500) {
                    errorMessage = 'Server error. Please try again later.'; // Example for server errors
                }
                alert(errorMessage); // Show error message
            }
            });
        });

    });


</script>


@endsection
