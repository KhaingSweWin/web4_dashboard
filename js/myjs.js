$(document).ready(function(){

$('.delete').click(function(){

    var result=confirm("Are you sure to delete the customer?");
    if(result)
    {
        var cid=$(this).parents('td').attr('cid');
        $.ajax({
            url:"delete_customer.php", //link
            type:"POST", //method type
            data:{id:cid}, //paramter values
            error:function(){
                alert("Fail to delete");
            },
            success:function(data){ // data=return values
                alert('hello')
            }
        });
        
    }
});
});