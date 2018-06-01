function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    if(ev.target.id.localeCompare("shift")==0){

         var data = ev.dataTransfer.getData("text");

         var x="div"+document.getElementById(data).id;
         //alert(x);
         ev.target.appendChild(document.getElementById(x));

         var parent = document.getElementById("container-data");
         var child = document.getElementById("grid"+x);
         parent.removeChild(child);
         //alert(ev.target.id);

    }
    else {

         var id = ev.dataTransfer.getData("text");
         //var id ="tes";
         var x=id.substring(id.length-1);

         if(x.localeCompare("s")==0){
              //var col=document.getElementById("div"+id);
              //alert(col.id);

              var grid=document.createElement("DIV");
              grid.id="griddiv"+id;
              grid.className="grid-item";

              var col=document.getElementById("div"+id);

              grid.appendChild(col);
              ev.target.appendChild(grid);
         }
         else{
              var data = ev.dataTransfer.getData("text");
              //alert(document.getElementById(data).id);

              var x="div"+document.getElementById(data).id;
              //ev.target.appendChild(document.getElementById(x));
              var grid=document.createElement("DIV");
              grid.id="grid"+x;
              grid.className="grid-item";
              grid.appendChild(document.getElementById(x));
              ev.target.appendChild(grid);
              //alert(grid.id);
        }
    }
}
