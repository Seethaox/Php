
$(document).ready(function () {
    $("#name").blur(function () {
        /* $('form').submit(function () {*/


        var name = $('#name').val();
        /* if (name == "")
         {
         $('#name_error').text("Name Field Should not be Empty");
         return false;
         }*/
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

    $("#email").blur(function () {

        var mail = $('#email').val();
        /*if (mail == "")
         {
         $('#email_error').text("Enter Your Mail ID...")
         return false;
         }*/


        var emailReg = /^[A-Za-z0-9._]*\@[A-Za-z]+\.[A-Za-z]{2,5}$/;

        if (!emailReg.test(mail))

        {
            $('#email_error').removeClass('hidden');
            $('#email_error').text("Invalid Mail ID");
            return false;
        } else
        {
            $('#email_error').addClass('hidden');
        }
    });

    $("#mobile").blur(function () {
        var mobile = $('#mobile').val();

        /*if (mobile == "")
         {
         $('#mobile_error').text("Please Fill in Your Mobile Number");
         return false;
         }*/
        /*if (mobile.length != 10)
         {
         $('#mobile_error').text("Please fill in a valid mobile number..");
         return false;
         }*/

        var mobileVal = /^\d{10}$/;

        if (!mobileVal.test($('#mobile').val()))

        {
            $('#mobile_error').removeClass('hidden');

            $('#mobile_error').text("Invalid Mobile Number");
            return false;
        } else
        {
            $('#mobile_error').addClass('hidden');
        }
    });
    $("#department").blur(function () {

        var dept = $('#department').val();
        if (dept == "")
        {
            $('#dept_error').removeClass('hidden');

            $('#dept_error').text("Please Select Your Department");
            return false;
        } else
        {
            $('#dept_error').addClass('hidden');

        }
    });
     
    $("#feedback").blur(function () {
        var feedback = $('#feedback').val();
        if (feedback == "")
        {
            $('#feedback_error').removeClass('hidden');
            $('#feedback_error').text("Please Give Your Feedback");
            return false;
        } else
        {
            $('#feedback_error').addClass('hidden');
        }

    });
    
    
    $('form').submit(function () {
    var gender = $('input[type="radio"]:checked');
     if (gender.length == "")
     {
     $('#gender_error').removeClass('hidden');
     $('#gender_error').text("Please Select Your Gender");
     }
     else
     {
     $('#gender_error').addClass('hidden');
     }
     
     var hobby = $('input[type="checkbox"]:checked');
     if (hobby.length == "")
     {
         $('#hobby_error').removeClass('hidden');
     $('#hobby_error').text("Please Select Your Hobby");
     }
     else
     {
         $('#hobby_error').addClass('hidden');
     }
 });
});