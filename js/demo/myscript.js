$(document).ready(function(){
var select=document.getElementById('dept1');
console.log(select);
$('#dept1').on('change',function(event)
{
    console.log('in dept1')
})
$('.delete').on('click',function(event){
    var message=confirm('Are u sure to delete?');
    console.log(message);
    if(message)
    {        
    var id=$(this).parents('td').attr('id'); // get the id
    event.preventDefault();
    $.ajax({
        //link
        url:"delete.php", //link
        type:"post", //method type
        data:{cid:id}, // parameter values
        error:function()
        { 
            alert('fail to delete'); // error message
        },
        success:function(result) //result - response from delete.php
        {
           $('#tbody').html(result);
        }
    });    
    }
});






});