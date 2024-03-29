<!DOCTYPE html>
<html>
<title>Bionik Shop</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fork-awesome@1.1.7/css/fork-awesome.min.css" integrity="sha256-gsmEoJAws/Kd3CjuOQzLie5Q3yshhvmo7YNtBG7aaEY=" crossorigin="anonymous">

<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>
<body class="w3-black">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
  <img src="https://cdn.discordapp.com/icons/607684591830040578/a4f56ed4765eb4a8e46b77960055eae7.png" style="width:100%">
  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
  </a>
  <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>INFOS</p>
  </a>
<a href="/shop" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-shopping-cart w3-xxlarge"></i>
    <p>SHOP</p>
  </a>
  <a href="https://discord.gg/bgMPebH" target="_blank" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-discord  w3-xxlarge"></i>
    <p>DISCORD</p>
  </a>
  
  
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
    <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">INFOS</a>
    <a href="/shop" class="w3-bar-item w3-button" style="width:25% !important">SHOP</a>
     <a href="https://discord.gg/bgMPebH" target="_blank" class="w3-bar-item w3-button" style="width:25% !important">DISCORD</a>
    
    </div>
</div>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
    <h1 class="w3-jumbo"><span class="w3-hide-small"></span>Bionik Shop</h1>
    <p>Hacking never been easier.</p>
   </header>

  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="home">
    <h2 class="w3-text-light-grey">Bionik Shop</h2>
    <hr style="width:200px" class="w3-opacity">
    <p>Nous sommes une boutique d'outils, et matériel informatique pour vous aider dans vos projets. Proxyx, Combolists, RaidBots, NFC Tags, tout ça pour des prix magiques!
    </p>
    </br>
    
    <center>
        <img src="https://cdn.discordapp.com/icons/607684591830040578/a4f56ed4765eb4a8e46b77960055eae7.png?size=128" alt="boy" class="w3-image" width="35%">
    </center>
    
    
     <!-- About Section -->
  <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
    <h2 class="w3-text-light-grey">Infos</h2>
    <hr style="width:200px" class="w3-opacity">
    <p>Des outils efficaces et rapides, pour vous servir. Nous acceptons les virements de Bitcoin et Paypal. La boutique est équipée d'un système de payement sécurisé et d'une équipe staff rapide et efficace.
    </p>
   
  </div>
  

  </div>
  
  </footer>

<!-- END PAGE CONTENT -->
</div>

</body>
</html>
