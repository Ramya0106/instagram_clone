function phpcall()
{
    user=document.getElementById("u").value;
    first=document.getElementById("fn").value;
    last=document.getElementById("ln").value;
    number=document.getElementById("pn").value;
    pass=document.getElementById("p").value;
    birth=document.getElementById("d").value;
    email=document.getElementById("m").value;
    console.log(user,first,last,number,pass,birth,email);
    if (validateEmail(email)) {
       //alert("CORRECT EMAIL PATTERN !")
       window.location.href = "createConnect.php?username=" + user + "&firstname=" + first + "&lastname=" + last + "&phoneNumber=" + number + "&password=" + pass + "&bod=" + birth + "&mail=" + email ;
        //do somthign for correct flow
        }
        else {
            alert('ENTER CORRECT EMAIL');
            return false;
        }
}
 
function validateEmail(email) {
   var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
   return re.test(email);
}

 