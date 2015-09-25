<?php
//##############################################################################
//
// main home page for the site 
// 
//##############################################################################
function DisplayGreeting($hourOfDay = 0){
    
    print "<p> A Hour: ".$hourOfDay;
    $hourOfDay = (int) $hourOfDay;
    print "<p> B Hour: ".$hourOfDay;
    
    return $hourOfDay;
           
}



print "<p>" . DisplayGreeting(8);

print "<p> END";

?>