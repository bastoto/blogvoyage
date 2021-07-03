
<div id="MonHeader">
      <span class="StyleHeaderLettres">P</span><span>ocket</span
      ><span class="StyleHeaderLettres"> M</span><span>emories</span>
    </div>

    <div id="MonMenuHaut">
      <span class="itemmenu mr-3" data-menuname="about">About</span>
      <span class="itemmenu mr-3" data-menuname="destinations" ><i class="fas fa-globe-europe mr-1"></i> Destinations </span
      >
      <span class="itemmenu mr-3" data-menuname="photography"><i class="fas fa-camera-retro mr-1"></i>Photography </span>
      <span class="itemmenu mr-3" data-menuname="articles"><i class="fas fa-newspaper mr-1"></i> Articles </span>
          <span class="itemmenu mr-3" data-menuname="contact"><i class="far fa-address-card mr-1"></i> Contact </span>
        <?php

if (strpos($_SERVER['REQUEST_URI'], "admin")) {
?>
<span class="itemmenu mr-3" data-menuname="admin"><i class="far fa-address-card mr-1"></i> Admin </span>
<?php   
}
?>
    </div>


