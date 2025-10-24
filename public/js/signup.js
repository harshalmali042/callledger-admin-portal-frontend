$('.email').keyup(function(){
    $('#otpsendedEmail').html($('.email').val());
});


$('.sendOtpbtn').click(function () {

var u_name = $('#u_name').val();
var company_name = $('#company_name').val();
var email = $('#email').val();
var contact_no = $('#contactno').val();
var password = $('#password').val();
var team_size = $('#team_size').val();

if (u_name === '' || company_name === '' || email === '' || contact_no === '' || password === '' || team_size === '') {
    alert("All fields are required!");
}
else{

$('.sendOtpbtn').prop('disabled', true).text('Sending...');

$.ajax({
    url: 'backend/auth/sendotp.php',
    method:'POST',
    data:{
        u_name: u_name,
        email: email,
        mobile:contact_no
    },
   
    success: function (res) {
        alert(res);
        if (res == 'success') {
            $('#singupPage').addClass('hidden');
            $('#otp_section').removeClass('hidden');
        } else if (res == 'email_exists') {
            alert("This email is already registered.");
        } else if (res == 'mobile_exists') {
            alert("This mobile number is already registered.");
        } else {
            alert("Something went wrong. Please try again later.");
        }
    },
    complete: function () {
        $('.sendOtpbtn').prop('disabled', false).text('Send OTP');
    }
});
}

});

$('.signupBtn').click(function () {
var u_name = $('#u_name').val();
var company_name = $('#company_name').val();
var email = $('#email').val();
var contact_no = $('#contactno').val();
var password = $('#password').val();
var team_size = $('#team_size').val();
var otp = $('#otp').val();

$.ajax({
    url: 'backend/auth/signup.php',
    method: 'POST',
    data: {
        u_name: u_name,
        company_name: company_name,
        email: email,
        contact_no: contact_no,
        password: password,
        team_size: team_size,
        otp: otp
    },
    success: function (res) {
        if (res == "1") {
            location.href="subscription";
        }
        else if (res == "5") {
            alert("OTP Not Match");
        }
        else{
            alert("Please try again later!");
        }
    }
});
});

