<?php

$log = array();
    
    if($_GET['userid'] != ""){
        
		  $nickname = "LineUser";#htmlentities(strip_tags($_GET['userid']));
			# $reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
			  $message = $_GET['text'];#htmlentities(strip_tags($_GET['text']);
	    $agentType = $_GET['type'];
		# if(($message) != "\n"){
        	
		#	 if(preg_match($reg_exUrl, $message, $url)) {
       		#	$message = preg_replace($reg_exUrl, '<a href="'.$url[0].'" target="_blank">'.$url[0].'</a>', $message);
		#		} 
			 if(!file_exists($agentType)){
				 $myfile = fopen($agentType, "w") or die("Unable to open file!");
				 $txt = $_GET['userid'];
				 fwrite($myfile, $txt);
				 fclose($myfile);
			 }
			 
        	
        	 fwrite(fopen($agentType, 'a'), "<span>". $nickname . "</span>" . $message = str_replace("\n", " ", $message) . "\n"); 
		 #}
     }
  echo json_encode($log);
  echo $_GET['userid'] ."\n";
  echo $_GET['text'] ."\n";
  

?>
