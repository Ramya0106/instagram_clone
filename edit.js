function openEvent(evt,checkEdit){
    var i,tabcontent,tablink;
    console.log(checkEdit);
    tabcontent=document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
    tablink=document.getElementsByClassName("tablink");
    for(i=0;i<tablink.length;i++){
       tablink[i].className=tablink[i].className.replace("active","");
    
        tabcontent[i].style.display="none";
        //console.log(checkEdit,evt,"1")
    }
    document.getElementById(checkEdit).style.display="block";
   evt.currentTarget.className+="active";
}
document.getElementById("defaultOpen").click();
// var header = document.getElementById("tabs");
// var btns = header.getElementsByClassName("tablink");
// for (var i = 0; i < btns.length; i++) {
//   btns[i].addEventListener("click", function() {
//   var current = document.getElementsByClassName("active");
//   current[0].className = current[0].className.replace(" active", "");
//   this.className += " active";
//   });
// }
