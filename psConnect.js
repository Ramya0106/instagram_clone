function phpcall()
{
    user=document.getElementById("u").value;
    pass=document.getElementById("p").value;
    newPass=document.getElementById("np").value;
    var upperCase=/[A-Z]/g;
    var lowerCase=/[a-z]/g;
    var digit=/[0-9]/g;
    if(pass.match(upperCase))
    {
        console.log("doneU");
        if(pass.match(lowerCase))
        {
            if(pass.match(digit))
            {
                if(pass=newPass)
                {
                    window.location.href="psConnect.php?username=" + user + "&password=" + pass;
                }
                else
                {
                    alert("Both password is not matcing");
                }
            }
            else{
                alert("Digit is Missing");
            }
        }
        else
        {
            alert("Lower Case Missing");
        }
    }
    else
    {
        alert("Upper Case Missing");
    }
    
}