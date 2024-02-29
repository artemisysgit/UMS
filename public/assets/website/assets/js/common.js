$(document).ready(function(){


    $("#enquiry_frm").validate({

        rules: {
            name: 'required',
            //lastName: 'required',
            email: {
              required: true,
              email: true,
            },
            phone:{
                required: true,
                number:true,
                minlength: 10,
                maxlength: 10,
            },
            course: 'required',

        },
        messages: {

            name: 'This field is required',
            email: {
                required: 'This field is required',
                email: 'Must be an valid email',
            },
            phone: {
                required : 'This field is required',
                number : 'Phone must be numeric',
                minlength: 'Phone no must be at least 10 characters long',
                maxlength: 'Phone no must be at most 10 characters long',
            },
            course: 'Please select a course',


        },

        submitHandler: function(form) {
        form.submit();

            // Swal.fire({
            //     position: "top-end",
            //     icon: "success",
            //     title: "Enquiry Send successfully",
            //     showConfirmButton: false,
            //     timer: 1500
            // });

        }

    });

    $("#frm_contact").validate({

        rules: {
            name: 'required',
            email: {
              required: true,
              email: true,
            },
            subject: 'required',
            msg: 'required',
            "chk": {
                required: true,
                minlength: 1
              },
        },
        messages: {

            name: 'This field is required',
            email: {
                required: 'This field is required',
                email: 'Must be an valid email',
            },
            subject: 'This field is required',
            msg: 'This field is required',
            chk: 'Please accept the terms',
        },

        submitHandler: function(form) {
        form.submit();

        }

    });

});

function resize_div_same_size(div)
{
    // Cache the highest
    var highestBox = 0;
    // Select and loop the elements you want to equalise
    $('.'+div).each(function(){

      // If this box is higher than the cached highest then store it
      if($(this).height() > highestBox) {
        highestBox = $(this).height();
      }

    });

    // Set the height of all those children to whichever was highest
    $('.'+div).height(highestBox);

}
