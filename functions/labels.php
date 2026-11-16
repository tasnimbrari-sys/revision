<?php
 function getLibelleStatut(string $code): string
 {
     switch ($code){
         case "dispo":
            return "Disponible immédiatement" ;
        case "louee":
            return "Actuellement louée";
        case "MAINTENANCE":
            return "en maintenance";
         default :
            return "inconnu";
        
     }
 }
 function getBadgeCategorie(string $code): array
 {
     switch($code){
         case"eco"
             return ["libelle" => "economique", "class" =>"badge-eco"];
         case "suv":
             return ["libelle" => "suv familial", "class" =>"badge-suv"];;
         case "luxe":
             return ["libelle" => "prumium", "class" =>"badge-luxe"];;
          default :
             return ["libelle" => "inconnu", "class" =>"inconnu"];;
     }
 }
?>
