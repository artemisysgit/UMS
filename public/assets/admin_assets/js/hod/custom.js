$(document).ready(function() {

    make_select2();

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

function make_select2()
{
    $("#teacher").select2();
    $("#dept").select2();
}

