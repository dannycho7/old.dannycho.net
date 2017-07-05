<?php
  $projectscolor='';
  $homecolor='';
  $photocolor='style="color:#838b91;"';
  require_once 'modules/header.php';
?>

<div id='webpage'>

  <?php
    $messagefront = 'Photos &amp; Moments';
    $messagebehind = 'I see through. .	 .';
    require 'modules/landingpage.php';
  ?>
  <div id='content-container'>
  	<?php
  	if($_GET && $_GET["folder"]){
  		$dirname = 'pics/photography/photos/'.$_GET["folder"].'/';
  		$imgs = glob($dirname."*");
  		echo '<div class="photonav"><h1 class="info">'.$_GET["folder"].'</h1><p>Let me know what you think!</p>
  		<a onclick="showPhoto(\'\');" class="back-btn"><img src="pics/photography/arrow-back.png" id="photo-album-icon"></a><span>Get back to the Directory</span></div>';
  		echo '<div id="photo-container">';
  		foreach($imgs as $imgname){
    		$imgdescr = $imgname;
    		$imgdescr = str_replace(".JPG", "", $imgdescr);
    		$imgdescr = str_replace($dirname,"",$imgdescr);
    		echo '<img src="'.$imgname.'" title="'.$imgdescr.'">';
  		}
  	}
  	else{
    	$dirname = 'pics/photography/photos/';
    	$folders = glob($dirname."*");
    	echo '<div class="photonav"><h1 class="info">Directory</h1><p>My Photo Collection</p>
    	<p><img id="photo-album-icon"src="pics/photography/cam.png">Nikon D3300 w/ 18-55mm Lens</p><p>Feel free to choose an album to look at!</p></div>';
    	echo '<div id="photo-container"><form method="get" onsubmit="return false;">';
    	foreach($folders as $foldername){
      	$newdir = $foldername.'/';
      	$value = $foldername;
      	$value = str_replace(".JPG","",$value);
      	$value = str_replace($dirname,"",$value);
      	$folderthumb = glob($newdir."*");
      	if($folderthumb){
        	echo '<div class="album"><input type="image" src="'.$folderthumb[0].'" onclick="showPhoto(\''.$value.'\');" name="folder" value='.$value.'><p>'.$value.'</p><span>DC</span></input></div>';
      	}
    	}
  	}
  	echo '</form></div>';
  	?>
  </div>
</div><!--webpage-->

<?php require_once 'modules/footer.php' ?>
