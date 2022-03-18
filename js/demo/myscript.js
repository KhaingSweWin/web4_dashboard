$(document).ready(function(){

$('.delete').on('click',function(event){

    var message=confirm('Are u sure to delete?');
    if(message)
    {        
    var id=$(this).parents('td').attr('id'); // get the id
    $.ajax({
        //link
        url:"delete.php", //link
        type:"post", //method type
        data:{cid:id}, // parameter values
        error:function()
        { 
            alert('fail to delete'); // error message
        },
        success:function(result)
        {
           $('#tbody').html(result);
        }
    });    
    }
});
});