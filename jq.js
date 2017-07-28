$(document).ready(function () {
    

    $("#name").blur(function () {

        var name = $('#name').val();


        var nameReg = /^[A-Za-z]+$/;
        if (!nameReg.test(name))

        {

            $('#name_error').removeClass('hidden');
            $('#name_error').text("Invalid Name...");
        } else
        {
            $('#name_error').addClass('hidden');
        }
    });
    $("#pwd").blur(function () {

        var password = $('#pwd').val();

        if (password == '')

        {
            $('#pwd_error').removeClass('hidden');
            $('#pwd_error').text("Invalid password...");
        } else
        {
            $('#pwd_error').addClass('hidden');
        }
    });

    $("#mail").blur(function () {

        var mail = $('#mail').val();



        var emailReg = /^[A-Za-z0-9._]*\@[A-Za-z]+\.[A-Za-z]{2,5}$/;

        if (!emailReg.test(mail))

        {
            $('#mail_error').removeClass('hidden');
            $('#mail_error').text("Invalid Mail ID");

        } else
        {
            $('#mail_error').addClass('hidden');
        }
    });

    $("#mobile").blur(function () {
        var mobile = $('#mobile').val();



        var mobileVal = /^\d{10}$/;

        if (!mobileVal.test(mobile))

        {
            $('#mobile_error').removeClass('hidden');

            $('#mobile_error').text("Invalid Mobile Number");

        } else
        {
            $('#mobile_error').addClass('hidden');
        }
    });
    
    $("#date").blur(function () {
        var dob = $('#date').val();
       if (dob =='')

        {
            $('#dob_error').removeClass('hidden');

            $('#dob_error').text("Invalid dob");
            return false;
        } else
        {
            $('#dob_error').addClass('hidden');
        }
    });
    
    $("#address").blur(function () {
        var address = $('#address').val();
        if (address == "")
        {
            $('#address_error').removeClass('hidden');
            $('#address_error').text("Please Give Your Address");
            return false;
        } else
        {
            $('#address_error').addClass('hidden');
        }

    });


    $('form').submit(function () {
        var gender = $('input[type="radio"]:checked');
        if (gender.length == "")
        {
            $('#gender_error').removeClass('hidden');
            $('#gender_error').text("Please Select Your Gender");
            return false;
        } else
        {
            $('#gender_error').addClass('hidden');
        }


    });
});

