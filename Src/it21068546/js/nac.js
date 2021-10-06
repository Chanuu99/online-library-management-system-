/* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */
function openNav() {
  document.getElementById("mySidenav").style.width = "300px";
  document.getElementById("main").style.marginLeft = "300px";
  document.body.style.backgroundColor = "#f2f2f2";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft = "0px";
  document.body.style.backgroundColor = "#f2f2f2";
}


function ValidateEmail()
{
  var inputText=   document.getElementById("txtmail");
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(inputText.value.match(mailformat))
{

document.form1.txtmail.focus();
return true;
}
else
{
alert("You have entered an invalid email address!");
document.form1.txtmail.focus();
return false;
}
}


var scroll=document.getElementById("mySidenav");
scroll.scrollTop = scroll.scrollHeight;