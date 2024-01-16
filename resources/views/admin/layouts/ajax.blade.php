<script>
    $(document).ready(function(){
        $("#category").change(function(){
            var id=$(this).val();
            $.ajax({
url : "{{route('get-sub-category')}}",
type: "POST",
data : {id:id, "_token": "{{ csrf_token() }}"},
success: function(data, textStatus, jqXHR)
    {
        if(data.status=true){
            $("#subcategory").show();
            $("#subcategory").html(data.html);
            $("#empty_subcategory").hide();
            $("#subcategory_info").hide();

        }else{
            $("#empty_subcategory").show();

        }
    },
error: function (jqXHR, textStatus, errorThrown)
    {

    }
});

        });


        $("#subcategory").change(function(){
            var category_id= $("#category").val();
            var id=$(this).val();
            $.ajax({
            url : "{{route('get-child-category')}}",
            type: "POST",
            data : {id:id,category_id:category_id, "_token": "{{ csrf_token() }}"},
            success: function(data, textStatus, jqXHR)
                {
                    if(data.status==true){
                        $("#childcategory").show();
                        $("#childcategory").html(data.html);
                        $("#empty_childcategory").hide();
                        $("#childcategory_info").hide();

                    }else{
                        $("#empty_childcategory").show();

                    }
                },
            error: function (jqXHR, textStatus, errorThrown)
                {

                }
            });

        });
        $("#childcategory").change(function(){
            var id=$(this).val();
            $.ajax({
            url : "{{route('get-size')}}",
            type: "POST",
            data : {id:id ,"_token": "{{ csrf_token() }}"},
            success: function(data, textStatus, jqXHR)
                {

                        $("#size").html(data);


                },
            error: function (jqXHR, textStatus, errorThrown)
                {

                }
            });

        });

        $('.select2').select2();

    });

    </script>
