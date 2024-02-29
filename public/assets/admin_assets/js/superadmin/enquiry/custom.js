$(document).ready(function() {

    //CKEDITOR.replace('descr');

   $('#tbl').DataTable( {

   });

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

