<?php
  $projectscolor='style="color:#838b91;"';
  $photocolor='';
  $homecolor='';
  require_once 'modules/header.php';
?>

<div id='webpage'>
  <?php
    $messagefront = 'Project Involvement';
    $messagebehind = 'What I do. . .';
    require_once 'modules/landingpage.php';
  ?>
  <div id='content-container'>
    <div class='proj-content proj-overview'>
      <img src="pics/project/work-icon.png">
      <h1>Project Overview</h1>
      <p>Here are a few of the projects that I have worked on. If you would like to collaborate, don't hesitate to reach out!</p>
    </div>
    <?php
      include 'modules/projinfoXML.php';
      foreach($projInfo->project as $proj){
        $description = $proj->description;
        $str = $description;
        $length = strlen($description);
        if($length > 300){
          $str = substr($description,0,300);
          if($str[299] == " "){
            $str = substr($str,0,299);
          }
          $str .= "..&nbsp;<b class='readMore' onclick=showInfo(this,'".$proj['name']."')>read more</b>";
        }
        echo "<div id = '".$proj['name']."' class='proj-content'>
                <div class='proj-preview'>
                  <img src='pics/project/".$proj['name'].".png' alt='No picture available' />
                </div>
                <h1>".$proj['displayname']."</h1>
                <div class='description'>
                  <div class = 'block'>
                    <span>".$proj['purpose']."</span>
                    <span>".$proj['year']."</span>
                  </div>
                  <div class = 'block'>
                    <span>".$proj->technologies."</span>
                  </div>
                  <div class = 'block'>
                    <span>".$proj['accomplishment']."</span>
                  </div>";
        if(isset($proj['link'])){
        echo "<div>
                <a target='_blank' href=".$proj['link']." class='readMore'><span>Download Link</span></a>
              </div>";
        }
        if(isset($proj['github_link'])){
        echo "<div>
                <a target='_blank' href=".$proj['github_link']." class='readMore'><span>Github Link</span></a>
              </div>";
        }
        echo  "</div>
            <article>".$str."</article>
          </div>";
      }
    ?>
  </div><!--loaded-->
</div>

<?php require_once 'modules/footer.php' ?>
