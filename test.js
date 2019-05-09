$(document).ready(function(){
   $('#formsubmit').click(function(){
       console.log(document.getElementById('qty1'));
       $.post("test2.php",
       {exchange:$('#exchange').val(),coin:$('#coin').val(),qty:$('#qty').val()},
       function(data){
           $('#response').html(data);
       }
       
       )
   }); 
   localStorage.setItem("username","george");
   document.write(localStorage.username);
});
