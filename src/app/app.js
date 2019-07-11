let body = 
{
        header:"header",
        section:"section",
        footer:"footer"
}
let app_header  = document.getElementsByTagName(body.header);
let app_section = document.getElementsByTagName(body.section);
let app_footer  = document.getElementsByTagName(body.footer);



function loadDoc() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("demo").innerHTML = this.responseText;
          }
        };
        app_header[0].style.display="none";
        xhttp.open("GET", "ajax_info.txt", true);
        xhttp.send();
      }


var CheminComplet = document.location.href;
var NomDuFichier  = CheminComplet.substring(CheminComplet.lastIndexOf( "/" )+1 );




