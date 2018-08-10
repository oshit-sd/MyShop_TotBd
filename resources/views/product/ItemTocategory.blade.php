
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#item_id").change(function(){
            var ItemID = $(this).val();

            $.ajax({
                url: '/CreateProduct/ajax/'+ItemID,
                type: 'GET',
                dataType: 'json',
                success:function(response){
                    console.log(response ['cate']);

                    if(response) {
                        $("#category").empty();
                        $("#category").append("<option value=''>"+ '.......Select Category.......' +"</option>");
                        $.each(response, function(key, value) {
                            $("#category").append('<option value="'+ value +'">'+ value +'</option>');
                        });
                    }else{
                        $("#category").empty();
                    }
                }
            });
        });
    });
</script>