$(document).ready(function() {

    $("#combination").select2();
    $("#combination").trigger("change");

    $('#tbl').DataTable();

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

function maxAllowedMultiselect(obj, maxAllowedCount)
{
    var selectedOptions = $('#'+obj.id+" option[value!=\'\']:selected");
    if (selectedOptions.length >= maxAllowedCount)
    {
        if (selectedOptions.length > maxAllowedCount)
        {
            selectedOptions.each(function(i)
            {
                if (i >= maxAllowedCount)
                {
                    $(this).prop("selected",false);
                }
            });
        }
        $('#'+obj.id+' option[value!=\'\']').not(':selected').prop("disabled",true);
    } else {
        $('#'+obj.id+' option[value!=\'\']').prop("disabled",false);
    }
}

