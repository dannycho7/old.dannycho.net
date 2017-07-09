<?php 
  $description = $proj->description;
  $str = $description;
  $length = strlen($description);
  if($length > 300){
    $str = substr($description,0,300);
  if($str[299] == " "){
    $str = substr($str,0,299);
  }
    $str .= "..&nbsp;<b class='readMore' onclick=showInfo(this,'".$proj['id']."')>read more</b>";
  }
?>
<div id="{{ $proj['name'] }}" class='proj-content'>
  <div class='proj-preview'>
    <img src="{{ URL::asset('/images/project/'.str_replace(' ', '_', $proj['name']).'.png') }}" alt='No picture available' />
  </div>

  <h1>{{ $proj['name'] }}</h1>

  <div class='description'>
    <div class = 'block'>
      <span>{{ $proj['purpose'] }}</span>
      <span>{{ $proj['year'] }}</span>
    </div>
    <div class = 'block'>
      <span>{{ $proj['technology_list'] }}</span>
    </div>
    <div class = 'block'>
      <span>{{ $proj['headline'] }}</span>
    </div>
    @if(isset($proj['download_link']))
      <div>
        <a target='_blank' href="{{ $proj['download_link'] }}" class='readMore'><span>View Here</span></a>
      </div>
    @endif
    @if(isset($proj['github_link']))
      <div>
        <a target='_blank' href="{{ $proj['github_link'] }}" class='readMore'><span>Github Link</span></a>
      </div>
    @endif
  </div>
  <article>{!! $str !!}</article>
</div>