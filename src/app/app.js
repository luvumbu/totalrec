let body = 
{
        header:"header",
        section:"section",
        footer:"footer"
}
let app_header  = document.getElementsByTagName(body.header);
let app_section = document.getElementsByTagName(body.section);
let app_footer  = document.getElementsByTagName(body.footer);
var CheminComplet = document.location.href;
var NomDuFichier  = CheminComplet.substring(CheminComplet.lastIndexOf( "/" )+1 );
console.log(NomDuFichier) ; // affiche le nom de l'url 


/* NDENGA LUVUMBU http://bokonzi.com */