<?php
function positions($title = "Default Title", $desc = "Default Description", $img = "/images/fallback.jpg") {
    $html = <<<"EOT"
       <div class="card">
          <img src="$img" alt="">
          <h2>$title</h2>
          <p>$desc</p>
       </div>
 EOT;
 
    echo $html;
 }

 function details($title = "Staff", $desc = "Default Description", $img = "/images/fallback.jpg") {
    $html = <<<"EOT"
       <div class="careerDetails">
          <h2>$title</h2>
          <p>$desc</p>
          <h3>Responsibilities</h3>
          <h3>Requirements</h3>
          <button></button>
       </div>
 EOT;
 
    echo $html;
 }
?>