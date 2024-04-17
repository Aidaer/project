$(document).ready(function() {
  $("#btn").click(function(){
  var eemail=$("#email").val();
  var pass=$("#pswd").val();
  $.ajax({
    type: "POST",
    url: "login.php",
    data: {'mail': eemail,'pwd':pass},
    success: function(data)
    {
      if(data=="1")
      {
       window.location.href = 'main.php';
      }
      else
      {
       alert('Try more');
      }
    }
    });
  });
});





