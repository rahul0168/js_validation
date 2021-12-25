	function san()
{
document.getElementById("register").reset();
}
	function vali()
{
var firstname=document.register.firstname.value;
if(firstname=="")
{
alert('please enter First Name');

document.register.firstname.focus();
return false;
}

var lastname=document.register.lastname.value;
if(lastname=="")
{
alert('please enter Last Name');

document.register.lastname.focus();
return false;
}

var phone=document.register.phone.value;
if(phone=="")
{
alert('Enter the Phone number first');
document.register.phone.focus()
return false;
}
else
{
var pra=/^([0-9]{10,12})$/;
if(pra.test(phone)==false)
{
alert('enter valid Phone no');
document.register.phone.focus();
return false; 
}
}
var address=document.register.address.value;
if(address=="")
{
alert('choose Your Address');
document.register.address.focus();
return false;
}
var image=document.register.image.value;
if(image=="")
{
alert('choose Your Image');
document.register.image.focus();
return false;
}
}
function onlyAlphabets(e, t) {
            try {
                if (window.event) {
                    var charCode = window.event.keyCode;
                }
                else if (e) {
                    var charCode = e.which;
                }
                else { return true; }
                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123))
                    return true;
                else
                    return false;
            }
            catch (err) {
                alert(err.Description);
            }
        }
        function validate(evt) {
  var theEvent = evt || window.event;

  // Handle paste
  if (theEvent.type === 'paste') {
      key = event.clipboardData.getData('text/plain');
  } else {
  // Handle key press
      var key = theEvent.keyCode || theEvent.which;
      key = String.fromCharCode(key);
  }
  var regex = /[0-9]|\./;
  if( !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}