/* fungsi untuk load page di suatu page tanpa reload
  var pos   : posisi dari devisi/tag dimana page akan diload
      page  : source halaman yang akan diload
*/
function load(pos,page) {
  var xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
                   // Typical action to be performed when the document is ready:
                   //document.getElementById(pos).innerHTML = xhttp.responseText;
                   document.getElementById(pos).setAttribute("src", page);
              }
          };
      xhttp.open("GET", page, true);
      xhttp.send();
}
