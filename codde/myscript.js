
function calc()
{
var name = document.getElementById('fname').value;
var surname = document.getElementById('surname').value;
var nickname = document.getElementById('nickname').value;
var password =  document.getElementById('pswd').value;
var a=0;
for(var i = 0; i<password.length; i++){
  if(password[i]>='A' && password[i]<='Z'){
    a = a + 1;
  }
}
if(password.length<8){
  alert("Try more");
  return false;
}
else if(password.length>=8 && a==0){
  alert("Try more");
  return false;
}
else if(name==""){
  alert("Name is required");
  return false;
}
else if(surname==""){
  alert("Surname is required");
  return false;
}
else if(nickname==""){
  alert("nickname is required");
  return false;
}
else{
  alert("succes");  
}
}