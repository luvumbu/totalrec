/*  𝕨𝕨𝕨.𝔹𝕠𝕜𝕠𝕟𝕫𝕚.𝕔𝕠𝕞  𝖞𝖉𝖊𝖓𝖌𝖆 𝕿𝖚𝖛𝖚𝖒𝖇𝖚   ★☆♨♫✈❤ 
    //  ★   =   début de l'information
    //  ☆   =   fin de l'information
    //  ♨   =   Code de l'information premier letre du fichier et dernier lettre du fichier suivi du numéro du commentaire.
    //  ♫   = connexion css all suivi du nom du fichier
    //  ☹☹ Double appel du fichier 
    //  ✈  = ★♨=ls0002☹☹♨=ap012  app.links et app.ph ★♨=ls0002☹☹  ♨=ap012
    //  ❥ = le fichier ne pas au même emplacement que l'appelant /!\
    𝕨𝕨𝕨.𝔹𝕠𝕜𝕠𝕟𝕫𝕚.𝕔𝕠𝕞  𝖞𝖉𝖊𝖓𝖌𝖆 𝕿𝖚𝖛𝖚𝖒𝖇𝖚   ★☆♨♫✈❤ */
   
    var element = document.getElementById('header-menu-general-m-icons');
    var menutoggle = document.getElementById("header-barre-menu-responsive") ; 
 
    element.onclick = function() {
        if(element.innerHTML=="menu")
        {
            element.innerHTML="remove" ; 
            menutoggle.className="header-barre-menu-responsive-montrer"; 
         
                 /*     transform: translateX(150px);
    transition: 1s all ; */          
        }
        else 
        {
            element.innerHTML="menu" ; 
            menutoggle.className="header-barre-menu-responsive-cacher";  
        }
     
    };