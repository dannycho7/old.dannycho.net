<?php
  include 'projinfoXML.php';
  foreach($projInfo->project as $proj){
    if($_GET && $_GET['name'] == $proj['name'])
      echo $proj->description;
  }
?>