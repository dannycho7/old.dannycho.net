<?php 
  $dirname = 'images/photography/photos/'.$_GET["folder"].'/';
  $imgs = glob($dirname."*");
?>

@foreach ($imgs as $imgname)
  <?php 
    $imgdescr = str_replace($dirname, "", str_replace(".JPG", "", $imgname));
  ?>
  <img src="{{ $imgname }}" title="{{ $imgdescr }}">
@endforeach