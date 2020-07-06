function phpcall()
{
    user=document.getElementById("u").value;
    birth=document.getElementById("d").value;
    window.location.href="forgotConnect.php?username=" + user + "&date=" + birth;
}