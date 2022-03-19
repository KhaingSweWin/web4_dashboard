$(document).ready(function(){
   
    $('#dept1').on('change',function(event)
    {
       var select=document.getElementById('dept1');
       var deptid=select.value;
       console.log(select.value);
       $.ajax({
           url:"getdept.php",
           type:"get",
           data:{did:deptid},
           dataType:'JSON',
           success:function(result)
           {
             
             console.log(result)
             len=result.length;
             var output="";
            for(var i=0;i<len;i++)
            {
                output += "<option>" +result[i].name + "</option>";
            }
            console.log(output);
            $('#emp1').html(output);
           },
           error:function()
           {
               alert("Fail to get employees");
           }
       })
    });

});
