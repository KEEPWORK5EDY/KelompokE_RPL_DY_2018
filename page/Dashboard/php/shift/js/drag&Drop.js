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

         var data = ev.dataTransfer.getData("text");
         alert(document.getElementById(data).id);
         
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
