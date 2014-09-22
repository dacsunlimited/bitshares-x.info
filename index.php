<?php include('partials/header.php'); ?>
<!-- Section Home  -->
<section id="home" class="intro ">
<!-- Navigation Include -->
<?php include('partials/nav.php'); ?>
 <div class="container introContent">
  <div class="row introduction">
   <div style="margin-top: 32px;">
    <h1 class="animated fadeInDown preserveHidden"><?=$translate[ $lang ][ "welcome" ]?></h1>
    <h6 class="animated fadeIn preserveHidden" style="margin-top: -32px;"><?=$translate[ $lang ][ "subtitle" ]?></h6>
    <a href="about.php"   class=" animated fadeIn  btn whoabtn"><?=$translate[ $lang ][ "learnmore" ]?></a>
   </div>
  </div><!-- end .row -->
 </div><!-- end .container -->
</section><!-- end section.intro -->
<?php include('partials/footer.php'); ?>
