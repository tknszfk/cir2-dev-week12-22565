<?php
$year = 1994;
 switch ($year) {
    case $year >=2010 &&  $year <=2024:
        print "Generlation Alphq";
        break;
    
    case $year >=1995 &&  $year <=2009:
        print "Generlation Z";  
        break;
    
     case $year >=1980 &&  $year <=1994:
         print "Generlation Y";  
         break;
    
     case $year >=1965 &&  $year <=1979:
        print "Generlation X";  
        break;

    case $year >=1946 &&  $year <=1964:
         print "Generlation Boomers";  
         break;

    case $year >=1925 &&  $year <=1945:
         print "Generlation Builders";  
         break;
        
        
    default:
        print "ERROR";
        break;
 }
?>