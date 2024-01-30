
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
            address:{
                required: true,
            },
            district: {
                required: true,
            },
            state:{
                required: true,
            },
            country:{
                required: true,
            },
            pinCode:{
                required: true,
                number:true,
                minlength: 6,
                maxlength: 6,
            },

        },
        messages: {
        name: 'This field is required',
        //lastName: 'This field is required',
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
        message: 'This field is required',

        },

        submitHandler: function(form) {
        form.submit();

            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "Profile uploaded successfully",
                showConfirmButton: false,
                timer: 1500
            });

        }

    });

});
