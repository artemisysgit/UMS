$(function(){

    $('#tbl').DataTable();

    $("#view_routine").click(function(){

        var csrf_token = $('meta[name="csrf-token"]').attr('content');
        var teacher = $("#teacher").val();
        var dept = $("#dept").val();
        $.ajax({

            type:'POST',
            url: BASE_URL + 'ajax-search-routine',
            headers: {'X-CSRF-Token': csrf_token},
            data:{teacher:teacher,dept:dept},
            success:function(data){

                $("#routine").html(data);
                make_select2();

            }

        });

    });

});
