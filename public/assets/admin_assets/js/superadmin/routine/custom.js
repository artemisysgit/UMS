$(document).ready(function() {

    make_select2();

    $("#start_time").flatpickr({
        enableTime: true,
        noCalendar: true
    });

    $("#end_time").flatpickr({
        enableTime: true,
        noCalendar: true
    });

   $('#tbl').DataTable( {

   });


   $("#view_routine").click(function(){

        var csrf_token = $('meta[name="csrf-token"]').attr('content');
        var teacher = $("#teacher").val();
        var dept = $("#dept").val();
        $.ajax({

            type:'POST',
            url: BASE_URL + 'admin/routine/ajax-search-routine',
            headers: {'X-CSRF-Token': csrf_token},
            data:{teacher:teacher,dept:dept},
            success:function(data){

                $("#routine").html(data);
                make_select2();

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
    $("#sem").select2();
    $("#weekdays").select2();
    $("#times").select2();
}

