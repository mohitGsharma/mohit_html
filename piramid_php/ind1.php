<?php

for($i=0;$i<= 5;$i++)
{   
    for($k=0;$k<=(5-$i);$k++)
    {
         echo  "_" ; 
    } 
    
    for($j=0;$j<=$i;$j++)
    {
      echo "* ";  
    }
    
    
    for($j=1;$j<=$i;$j++)
    {
      echo "*";  
    }
    echo "<br/>";
}
?>