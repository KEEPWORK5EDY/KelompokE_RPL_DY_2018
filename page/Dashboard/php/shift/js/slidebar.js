function setPos(x) {
      //alert(x);
      if(x!=null){
         document.getElementById('pos').value=x;
    }
}
function showS() {

    var x = document.getElementById("snackbar");
    document.getElementById("event-modalS").style.marginLeft="150px";
    x.className = "show";

    // setTimeout(function(){ x.className = x.className.replace("show", ""); },3000);
}

function closeS(){
     //alert(4);
     var x = document.getElementById("snackbar");
     x.className = "close";

         //tes();
     //document.getElementById("snackbar").remove();
     setTimeout(function(){
          document.getElementById("event-modalS").style.marginLeft="-10px";
     },550);
}

function add(x,v) {
      var y= document.getElementById(x);
      y.className=v;
      //finish(x,"click");
      setTimeout(function(){
           document.getElementById(x).style.width="0";
           document.getElementById(x).style.height="0";
           //document.getElementById(x).getElementsByClassName("fa")[0]style.display="none";
           document.getElementById("plusB").style.display="none";


      },1000);

}

function check(x,v){
     var y= document.getElementById(x);
     y.classList.remove(v);
     //document.getElementById(x).style.visibility="visible";
     document.getElementById("plusB").style.display="inline-block";
     //document.getElementById(x).getElementsByClassName("fa")[0]style.display="inline-block";
     y.className="show";

     setTimeout(function(){
          document.getElementById(x).style.width="70px";
          document.getElementById(x).style.height="50px";
     },1000);
}
