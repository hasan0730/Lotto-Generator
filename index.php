<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title> Winning Lottery Numbers </title>
</head>

<body>
<h3> Here are your winning lottery numbers for <?php echo date("F j, Y");  ?></h3>
 <p><a style="text-decoration:none" href="index.php">[Generate All or Nothing]</a>&nbsp;&nbsp;<a style="text-decoration:none" href="lotto_cash5.php">[Generate Cash 5]</a>&nbsp;&nbsp;<a style="text-decoration:none" href="lotto_powerball.php">[Generate Power Ball]</a></p>
<p><a style="text-decoration:none" href="lotto_megamillions.php">[Generate Mega Millions]</a>&nbsp;&nbsp;<a style="text-decoration:none" href="lotto_texaslotto.php">[Generate Texas Lotto]</a>&nbsp;&nbsp;<a style="text-decoration:none" href="lotto_texastwostep.php">[Generate Texas Two Step]</a></p>
<?php
 $setCount = 5;  				  // Number of sets of lucky numbers.  
 $setSize = 12;						 // Number of lucky numbers in the set.  
 $setRange = 24;					 // Assume selecting integers between 1 and range.  
  
    for($i = 0; $i < $setCount ; $i++) {  
      
      $lucky1 = 0;                                              // Lucky numbers for the set of 6.  
    $lucky2 = 0;  
     $lucky3 = 0; 
     $lucky4 = 0;
      $lucky5 = 0; 
     $lucky6 = 0;
	  $lucky7 = 0; 
	 $lucky8 = 0;
 	 $lucky9 = 0;
   	$lucky10 = 0;
    $lucky11 = 0;
	 $lucky12 = 0;
                                                  // Count of numbers found in the current set  
$luckyCount = 0;
   while($luckyCount < $setSize) {  
       // Generate a lucky number between 0 and 53 and add 1:  
    $randNum =  rand(1,24) ;
	$lucky = $randNum;
	switch ($luckyCount){

		case 0:
		    $lucky1 = $lucky; 
	        $luckyArray[0] =  $lucky1;                                 // so just store it  
            $luckyCount++;           
			break;
			
		case 1:                                                      // For the second we must  
            if($lucky != $lucky1) 
			{                                      // check that it is different from the first  
              $lucky2 = $lucky; 
			  $luckyArray[1] =  $lucky2;                                        // It is, so store it  
              $luckyCount++;                                            // and increment the count  
            }       
			break; 
		case 2:                                                      // For the third we check aginst the previous two  
            if($lucky != $lucky1 && $lucky != $lucky2) {  
              $lucky3 = $lucky; 
			  $luckyArray[2] =  $lucky3;   
              $luckyCount++;  
            }  
            break;
		case 3:                                                     // Check against the previous three...  
            if($lucky != $lucky1 && $lucky != $lucky2 && $lucky != $lucky3) {  
              $lucky4 = $lucky; 
			   $luckyArray[3] =  $lucky4;  
              $luckyCount++;  
            }  
            break;  	  
                        
		 case 4:                                                     // Check against the previous four...  
            if($lucky != $lucky1 && $lucky != $lucky2 && $lucky != $lucky3 && $lucky != $lucky4) {  
              $lucky5 = $lucky;  
			   $luckyArray[4] =  $lucky5; 
              $luckyCount++;  
            }
			break;       
			
	   
	   case 5:                                                     // Check against the previous five...  
            if($lucky != $lucky1 && $lucky != $lucky2 && $lucky != $lucky3 && $lucky != $lucky4 && $lucky != $lucky5) {  
              $lucky6 = $lucky; 
			   $luckyArray[5] =  $lucky6;  
              $luckyCount++;  
            }  
            break;  
			
			case 6:                                                     // Check against the previous five...  
            if($lucky != $lucky1 && $lucky != $lucky2 && $lucky != $lucky3 && $lucky != $lucky4 && $lucky != $lucky5 && $lucky != $lucky6) {  
              $lucky7 = $lucky; 
			   $luckyArray[6] =  $lucky7;  
              $luckyCount++;  
            }  
            break;  
			case 7:                                                     // Check against the previous five...  
            if($lucky != $lucky1 && $lucky != $lucky2 && $lucky != $lucky3 && $lucky != $lucky4 && $lucky != $lucky5 && $lucky != $lucky6 && $lucky != $lucky7) {  
              $lucky8 = $lucky;  
			   $luckyArray[7] =  $lucky8; 
              $luckyCount++;  
            }  
            break; 
			
			case 8:                                                     // Check against the previous five...  
          if($lucky != $lucky1 && $lucky != $lucky2 && $lucky != $lucky3 && $lucky != $lucky4 && $lucky != $lucky5 && $lucky != $lucky6 && $lucky != $lucky7 && $lucky != $lucky8) {  
              $lucky9 = $lucky;  
			   $luckyArray[8] =  $lucky9; 
              $luckyCount++;  
            }  
            break;
			
			case 9:                                                     // Check against the previous five...  
               if($lucky != $lucky1 && $lucky != $lucky2 && $lucky != $lucky3 && $lucky != $lucky4 && $lucky != $lucky5 && $lucky != $lucky6 && $lucky != $lucky7 && $lucky != $lucky8 && $lucky != $lucky9) {  
              $lucky10 = $lucky;  
			   $luckyArray[9] =  $lucky10; 
              $luckyCount++;  
            }  
            break;     
			
			case 10:                                                     // Check against the previous five...  
          if($lucky != $lucky1 && $lucky != $lucky2 && $lucky != $lucky3 && $lucky != $lucky4 && $lucky != $lucky5 && $lucky != $lucky6 && $lucky != $lucky7 && $lucky != $lucky8 && $lucky != $lucky9 && $lucky != $lucky10) {  
              $lucky11 = $lucky; 
			   $luckyArray[10] =  $lucky11;  
              $luckyCount++;  
            }  
            break; 
			
			case 11:                                                     // Check against the previous five...  
           if($lucky != $lucky1 && $lucky != $lucky2 && $lucky != $lucky3 && $lucky != $lucky4 && $lucky != $lucky5 && $lucky != $lucky6 && $lucky != $lucky7 && $lucky != $lucky8 && $lucky != $lucky9 && $lucky != $lucky10 && $lucky != $lucky11){  
              $lucky12 = $lucky;  
			   $luckyArray[11] =  $lucky12; 
              $luckyCount++;  
            }  
            break; 
			
		  
        }  
       
	  $i = $i + 1;
	  
	  sort($luckyArray);
	 if ($luckyCount == 12){  
	   
	 // echo $lucky1. "-". $lucky2 . "-".$lucky3 . "-". $lucky4. "-". $lucky5 . "-". $lucky6. "-". $lucky7 . "-". $lucky8 . "-". $lucky9 . "-". $lucky10 . "-". $lucky11. "-". $lucky12 . "<br />";
	      echo "<p><strong>All or Nothing: </strong>" .$luckyArray[0] . " ".  $luckyArray[1]  ." ".$luckyArray[2]. " ".$luckyArray[3]." ".$luckyArray[4]." ".$luckyArray[5]." ".$luckyArray[6]." ".$luckyArray[7]." ".$luckyArray[8]." ".$luckyArray[9]." ".$luckyArray[10]." ".$luckyArray[11]."</p>";
	   }
	
  }
	 
}
  
?>

</body>
</html>
