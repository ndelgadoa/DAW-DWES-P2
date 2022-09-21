<?php
function mayusculas($palabra) {

    if(ctype_upper($palabra)==TRUE) {
        echo "la palabra ".$palabra." es todo mayusculas";

    }else if (ctype_lower($palabra)==TRUE){
        echo "la palabra " . $palabra . " es todo minusculas";
    }else {
        echo "la palabra " . $palabra . " es diferente";
    }




}
echo mayusculas("hoLA");

?>
