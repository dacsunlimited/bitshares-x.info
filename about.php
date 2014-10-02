<?php include('partials/header.php'); ?>
<!-- Section Home -->
<section id="about-intro" class="about intro" style="height: 520px">
 <!-- Navigation Include -->
 <?php include('partials/nav.php'); ?>
 <div class="container">
  <div class="row introduction about-intro" style="margin-top: 32  px;">
  <small class="animated fadeInDown "><?=$translate[ $lang ][ "supertitle" ]?></small>
  <h1 class="about-intro animated fadeInDown preserveHidden" style="text-transform: uppercase;"><?=$translate[ $lang ][ "about_headline" ]?></h1>
   <h6 class="animated fadeIn preserveHidden"><?=$translate[ $lang ][ "about_subtitle" ]?></h6>
  </div><!-- end .row -->
 </div><!-- end .container -->
</section><!-- end section.intro -->

<!-- Main Navigation -->
<div class="navbar" role="navigation" style="display: none;">
 <div class="container">
  <div class="navbar-header">
   <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
    <i class="icon-reorder"></i>
   </button><!-- end button -->
  </div><!-- end .navbar-header -->
  <div class="navbar-collapse collapse">
   <ul class="nav navbar-nav">
    <li><a href="#home">about</a></li>
   </ul><!-- end .nav .navbar-nav -->
  </div><!-- end .navbar-collapse .collaspse -->
 </div><!-- end .container -->
</div><!-- end .navbar -->

<!-- Introdesc Section -->
<section id="work">
 <div class="container" style="padding-top: 0.2rem;">
  <div class="row">
   <div class="container">
    <center>
    <p><?=$translate[ $lang ][ "about_textA" ]?></p>
     <h2 style="margin: 48px 0 48px 0;"><?=$translate[ $lang ][ "about_newworld" ]?></h2>
     <center>
      <p><?=$translate[ $lang ][ "about_textB" ]?></p>
      <p><?=$translate[ $lang ][ "about_textC" ]?></p>
      <p>   
      </p><br /> <br /> 
      <p><?=$translate[ $lang ][ "about_best" ]?></p>
      <p><a href="#" class="whoabtn btn animated fadeIn preserveHidden" data-toggle="modal" data-target="#walletModal"><?=$translate[ $lang ][ "downloadnow" ]?></a>
      </p><br /> <br />
      <p><small><i><?=$translate[ $lang ][ "poweredby" ]?></i></small></p>
    </center>   </div>
   </div><!-- end .row -->
  </div>
 </div><!-- end .container -->
</section><!-- end section#introdesc -->

<!-- Wallet Section -->
<section id="about">
 <div id="wallet" class="container">
  <div class="row">
   <div class="col-md-8 col-lg-8 aboutUsImg">
    <img src="img/about.png" class="img-responsive" alt="">
    </div><!-- end .aboutUsImg -->
    <div class="col-md-4 col-lg-4 aboutUsContent">
     <h2><?=$tranlsate[ $lang ][ "freemarkets"]?></h2>
     <p><?=$translate[ $lang ][ "getmore" ]?></p>
     <a href="/files/wallet/0.4.20/BitSharesX-0.4.20-x86.exe" class="pull-left whoabtn btn"><?=$translate[ $lang ][ "btsxwin32" ]?></a><br><br>
     <a href="/files/wallet/0.4.20/BitSharesX-0.4.20-x64.exe" class=" whoabtn"><?=$translate[ $lang ][ "btsxwin64" ]?></a><br><br>
     <a href="/files/wallet/0.4.20/BitSharesX-0.4.20.dmg" class="pull-left whoabtn btn" ><?=$translate[ $lang ][ "btsxmacos" ]?></a>
   </div><!-- end .aboutUsContent -->
  </div><!-- end .row -->
 </div><!-- end .container --> 
</section><!-- end section#wallet -->

<!-- Blockchain Section -->
<section id="intro" class="intro-small" style="background: #CCC;">
 <div class="container">
  <div class="row introduction"><center>
  <h1 class="animated fadeInDown preserveHidden" style="text-transform: uppercase; font-size: 32px;"><?=$translate[ $lang ][ "mothersbc" ]?></h1>     
  <h4 class="animated fadeIn preserveHidden"><?=$translate[ $lang ][ "mothersbc_desc" ]?></h4>
   </center>
  </div><!-- end .row -->
 </div><!-- end .container -->
</section><!-- end section.blockchain -->

<!-- Section Features -->
<section id="services">
 <div class="container">
  <div class="row features">
   <div class="col-3 col-sm-4 col-lg-4 ">
    <h3><i class=" icon-layers"></i></h3>
    <h3><?=$translate[ $lang ][ "feature1" ]?></h3>
    <p><?=$translate[ $lang ][ "feature1_text" ]?></p>
   </div><!-- end .service -->
   <div class=" col-3 col-sm-4 col-lg-4 ">
    <h3><i class="icon-flash-outline"></i></h3>
    <h3><?=$translate[ $lang ][ "feature2" ]?></h3>
    <p><?=$translate[ $lang ][ "feature2_text" ]?></p>
   </div><!-- end .service -->
   <div class="col-3 col-sm-4 col-lg-4 ">
    <h3><i class=" icon-lock"></i></h3>
    <h3><?=$translate[ $lang ][ "feature3" ]?></h3>
    <p><?=$translate[ $lang ][ "feature3_text" ]?></p>
   </div>
  </div>
  <div class="row features">
   <div class=" col-3 col-sm-4 col-lg-4 ">
    <h3><i class=" icon-resize-small"></i></h3>
    <h3><?=$translate[ $lang ][ "feature4" ]?></h3>
    <p><?=$translate[ $lang ][ "feature4_text" ]?></p>
   </div><!-- end .service -->
   <div class="col-3 col-sm-4 col-lg-4 ">
    <h3><i class=" icon-diamond"></i></h3>
    <h3><?=$translate[ $lang ][ "feature5" ]?></h3>
    <p><?=$translate[ $lang ][ "feature5_text" ]?></p>
   </div><!-- end .service -->
   <div class="col-3 col-sm-4 col-lg-4 ">
    <h3><i class="icon-theatre"></i></h3>
    <h3><?=$translate[ $lang ][ "feature6" ]?></h3>
    <p><?=$translate[ $lang ][ "feature6_text" ]?></p>
   </div><!-- end .service -->
  </div>
 </div><!-- end .row -->
</div><!-- end .container --> 
</section><!-- end section#features -->

 <!-- Exchanges Section -->
 <section id="exchanges">
  <div id="exchanges" class="container">
   <div class="row">
    <div class="container">
     <center>
     <h2><?=$translate[ $lang ][ "getshares" ]?></h2>
     <p><?=$translate[ $lang ][ "exchanges" ]?></p>
     </center>
    </div>
   </div><!-- end .row -->
   <div class="row" style="text-align: center; margin-top: -48px;">
    <div class="container">
     <div class="col-md-3 col-sm-6" style="">
      <a target="_blank" href="https://bter.com/trade/BTSX_btc"><img src="img/ex-bter.png" class="img-responsive" alt="Bter" /></a>
     </div>

     <div class="col-md-3 col-sm-6" style="">
      <a target="_blank" href="http://www.btc38.com/trade_en.html?mk_type=btc&btc38_trade_coin_name=btsx"><img src="img/ex-btc38.png" class="img-responsive" alt="BTC38" /></a>
     </div>

     <div class="col-md-3 col-sm-6" style="">
      <a target="_blank" href="https://www.poloniex.com/exchange/btc_btsx"> <img src="img/ex-poloniex.png" class="img-responsive" alt="Poloniex" /></a>
     </div>

     <div class="col-md-3 col-sm-6" style="">
      <a target="_blank" href="https://coinport.com/trade#/BTSX-BTC"><img src="img/ex-coinport.png" class="img-responsive" alt="Coinport" /></a>
     </div>

     <div class="col-md-3 col-sm-6" style="">
      <a target="_blank" href="https://bittrex.com/Market/Index?MarketName=BTC-BTSX"><img src="img/ex-bittrex.png" class="img-responsive" alt="Bittrex" /></a>
     </div>

     <div class="col-md-3 col-sm-6" style="">
      <a target="_blank" href="https://www.altquick.co"><img src="img/ex-altquick.png" class="img-responsive" alt="Altquick.co" /></a>
     </div>
    </div>

   </div><!-- end .row -->
  </div>
 </div><!-- end .container -->
</section><!-- end section#Exchanges -->
<?php include('partials/footer.php'); ?>
