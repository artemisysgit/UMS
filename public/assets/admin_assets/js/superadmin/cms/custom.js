$(document).ready(function() {

    //CKEDITOR.replace('descr');

    CKEDITOR.replace('descr', {
        fullPage: true,
        //extraPlugins: 'docprops',
        allowedContent: true,

    });

   $('#tbl').DataTable( {

   });


   $("#btn_add").click(function(){

       var id = $("#id").val();
       var cnt = $(".sl").length;
       $.ajax({

           type:'POST',
           url: BASE_URL + 'admin/add-item-image',
           data:{id:id,cnt:cnt+1},
           success:function(data){

               $("#image_div").append(data);

           }

       });

   });

//    const fullToolbar = [
//     [
//       {
//         font: []
//       },
//       {
//         size: []
//       }
//     ],
//     ['bold', 'italic', 'underline', 'strike'],
//     [
//       {
//         color: []
//       },
//       {
//         background: []
//       }
//     ],
//     [
//       {
//         script: 'super'
//       },
//       {
//         script: 'sub'
//       }
//     ],
//     [
//       {
//         header: '1'
//       },
//       {
//         header: '2'
//       },
//       'blockquote',
//       'code-block'
//     ],
//     [
//       {
//         list: 'ordered'
//       },
//       {
//         list: 'bullet'
//       },
//       {
//         indent: '-1'
//       },
//       {
//         indent: '+1'
//       }
//     ],
//     [{ direction: 'rtl' }],
//     ['link', 'image', 'video', 'formula'],
//     ['clean']
//   ];

//   const fullEditor = new Quill('#description', {
//     bounds: '#description',
//     placeholder: 'Type Something...',
//     modules: {
//       formula: true,
//       toolbar: fullToolbar
//     },
//     theme: 'snow'
//   });


} );


function del_data(id)
{
   Swal.fire({
       title: 'Are you sure?',
       text: "You won't be able to revert this!",
       icon: 'warning',
       showCancelButton: true,
       confirmButtonColor: '#3085d6',
       cancelButtonColor: '#d33',
       confirmButtonText: 'Yes, delete it!'
     }).then((result) => {
       if (result.isConfirmed) {

           $.ajax({

               type:'POST',
               url: BASE_URL + 'admin/delete-item',
               data:{id:id},
               success:function(data){

                   if(data == true)
                   {
                       Swal.fire(
                           'Deleted!',
                           'Data been deleted.',
                           'success'
                       )
                       window.location.reload(1);
                   }
               }

           });

       }
   });

}

function remove_main_image(id)
{
   Swal.fire({
       title: 'Are you sure?',
       text: "You won't be able to revert this!",
       icon: 'warning',
       showCancelButton: true,
       confirmButtonColor: '#3085d6',
       cancelButtonColor: '#d33',
       confirmButtonText: 'Yes, delete it!'
     }).then((result) => {
       if (result.isConfirmed) {

           $.ajax({

               type:'POST',
               url: BASE_URL + 'admin/delete-item-main-image',
               data:{id:id},
               success:function(data){

                   if(data == true)
                   {
                       Swal.fire(
                           'Deleted!',
                           'Data been deleted.',
                           'success'
                       )
                       window.location.reload(1);
                   }
               }

           });

       }
   });
}

function del_item_image(id,sl)
{
   if(id == 0)
   {
       $("#row"+sl).remove();
   }
   else
   {
       Swal.fire({
           title: 'Are you sure?',
           text: "You won't be able to revert this!",
           icon: 'warning',
           showCancelButton: true,
           confirmButtonColor: '#3085d6',
           cancelButtonColor: '#d33',
           confirmButtonText: 'Yes, delete it!'
         }).then((result) => {
           if (result.isConfirmed) {

               $.ajax({

                   type:'POST',
                   url: BASE_URL + 'admin/delete-item-image',
                   data:{id:id},
                   success:function(data){

                       if(data == true)
                       {
                           Swal.fire(
                               'Deleted!',
                               'Data been deleted.',
                               'success'
                           )
                           $("#row"+sl).remove();
                       }
                   }

               });

           }
       });
   }

}

