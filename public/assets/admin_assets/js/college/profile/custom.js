$(document).ready(function() {

    $("#country").select2();

    $("#profile_frm").validate({

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
            address: 'This field is required',
            district: 'This field is required',
            state: 'State is required',
            country: 'Country is required',
            pinCode: {
                required: 'This field is required',
                number : 'Pincode must be numeric',
                minlength: 'Must be at least 6 digit',
            },

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

    $("#reset").click(function(){

        $("#profile_frm")[0].reset();

    });

} );

// Update/reset user image of account page
let accountUserImage = document.getElementById('uploadedAvatar');
const fileInput = document.querySelector('.account-file-input'),
  resetFileInput = document.querySelector('.account-image-reset');

if (accountUserImage) {
  const resetImage = accountUserImage.src;
  fileInput.onchange = () => {
    if (fileInput.files[0]) {
      accountUserImage.src = window.URL.createObjectURL(fileInput.files[0]);

      var formData = new FormData($("#upload_frm")[0]);
      $.ajax({
        url : $("#upload_frm").attr('action'),
        //headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        type : 'POST',
        data : formData,
        contentType : false,
        processData : false,
        success: function(resp) {
            //console.log(resp);

            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "Image uploaded successfully",
                showConfirmButton: false,
                timer: 1500
            });

        }
    });

    }
  };
  resetFileInput.onclick = () => {
    fileInput.value = '';
    accountUserImage.src = resetImage;
  };
}

