// function validateEmail(email) {
//   var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
//   return re.test(email);
// }


function phpcall() {
  x = document.getElementById('u').value;
  y = document.getElementById('p').value;
console.log(x);
console.log(y);
var upperCase=/[A-Z]/g;
    var lowerCase=/[a-z]/g;
    var digit=/[0-9]/g;
    if(y.match(upperCase))
    {
        console.log("doneU");
        if(y.match(lowerCase))
        {
            if(y.match(digit))
            {
              //console.log("yess");
              window.location.href = "instagramC.php?Username="+ x + "&Password=" + y;
            }
            else{
              alert("Digit Missing");
            }
        }
        else{
          alert("LowerCase missing");
        }
    }
    else{
      alert("uppercase missing");
    }
// if (validateEmail(x)) {
//   alert("CORRECT EMAIL PATTERN !")
//   window.location.href = "instagramC.php?Email=" + x + "Password=" + y;
//   //do somthign for correct flow
// } else {
//   alert('ENTER CORRECT EMAIL');
//   return false;
// }

}

// $(document).ready(function(){

//   $.ajax({type:'GET',url:'getData.php',dataType: "json",
//   success:function(response){
//     if(response.error=="False")
//     {
//       alert("somwthing went wrong");
//     }
//   }
// });
// });
