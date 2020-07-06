function phpcall(){
    name=document.getElementById('s').value;
    //console.log(name);
    var digit=/[0-9]/g;
    if(isNaN(name)){
        console.log("1");
    }
    else{
       // alert("No Result Found");
       document.getElementById("results").innerHTML = "No Result Found,Wrong Format";

    }
}