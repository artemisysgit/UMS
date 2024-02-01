$(document).ready(function() {


    $("#teacher").select2();

    make_select2();

   $('#tbl').DataTable( {

   });


   $("#btn_add").click(function(){

       //var id = $("#id").val();
       var csrf_token = $('meta[name="csrf-token"]').attr('content');
       var cnt = $(".course").length;
       $.ajax({

           type:'POST',
           url: BASE_URL + 'admin/assign-teachers/ajax-add-item',
           headers: {'X-CSRF-Token': csrf_token},
           data:{cnt:cnt+1},
           success:function(data){

               $("#assign_div").append(data);
               make_select2();

           }

       });

    });


} );

function make_select2()
{
    $(".course").select2();
    $(".dept").select2();
    $(".subject").select2();
    $(".sem").select2();
}


function delData(id,sl)
{

   var csrf_token = $('meta[name="csrf-token"]').attr('content');

   if(id == 0)
   {
        $("#"+sl).remove();
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
                    url: BASE_URL + 'admin/assign-teachers/ajax-delete-item',
                    headers: {'X-CSRF-Token': csrf_token},
                    data:{id:id},
                    success:function(data){

                        if(data == true)
                        {
                            Swal.fire(
                                'Deleted!',
                                'Data been deleted.',
                                'success'
                            )
                            $("#"+sl).remove();
                            //serializeNo();
                        }
                    }

                });

            }
        });
   }

}

function serializeNo()
{
    var i = 0;
    $(".sl").each(function(){

        i++;
        $(this).attr('id',i);

    });
}

// function remove_main_image(id)
// {
//    Swal.fire({
//        title: 'Are you sure?',
//        text: "You won't be able to revert this!",
//        icon: 'warning',
//        showCancelButton: true,
//        confirmButtonColor: '#3085d6',
//        cancelButtonColor: '#d33',
//        confirmButtonText: 'Yes, delete it!'
//      }).then((result) => {
//        if (result.isConfirmed) {

//            $.ajax({

//                type:'POST',
//                url: BASE_URL + 'admin/delete-item-main-image',
//                data:{id:id},
//                success:function(data){

//                    if(data == true)
//                    {
//                        Swal.fire(
//                            'Deleted!',
//                            'Data been deleted.',
//                            'success'
//                        )
//                        window.location.reload(1);
//                    }
//                }

//            });

//        }
//    });
// }

// function del_item_image(id,sl)
// {
//    if(id == 0)
//    {
//        $("#row"+sl).remove();
//    }
//    else
//    {
//        Swal.fire({
//            title: 'Are you sure?',
//            text: "You won't be able to revert this!",
//            icon: 'warning',
//            showCancelButton: true,
//            confirmButtonColor: '#3085d6',
//            cancelButtonColor: '#d33',
//            confirmButtonText: 'Yes, delete it!'
//          }).then((result) => {
//            if (result.isConfirmed) {

//                $.ajax({

//                    type:'POST',
//                    url: BASE_URL + 'admin/delete-item-image',
//                    data:{id:id},
//                    success:function(data){

//                        if(data == true)
//                        {
//                            Swal.fire(
//                                'Deleted!',
//                                'Data been deleted.',
//                                'success'
//                            )
//                            $("#row"+sl).remove();
//                        }
//                    }

//                });

//            }
//        });
//    }

// }

