<header>
 <div class="container">
  <div class="row topNav">
   <!-- Logo -->
   <a class="navbar-brand" href="index.php"><img src="img/btsx-logo-w.svg" alt="" width="160" /></a>
   <!--      <a href="https://github.com/dacsunlimited/BitSharesX/" class="pull-right loginLink" target="_blank"><i class="icon-github-circled-alt2"></i></a>-->                         
   <!-- links -->
   <ul class="nav btsx-nav pull-right">
    <li><a href="about.php" class=""><?=$translate[ $lang ][ "about" ]?></a></li>
    <!-- Button trigger modal -->
    <li><a href="#" style="background: none;" class="" data-toggle="modal" data-target="#walletModal"><?=$translate[ $lang ][ "download" ]?></a></li>
    <li><a href="http://wiki.bitshares.org/index.php/Bitshares_X" target="_blank" class=""><?=$translate[ $lang ][ "wiki" ]?></a></li>
 <li>
   <div class="btn-group" style="margin: 7px 0 0 8px;">
       <button class="btn btn-default btn-xs dropdown-toggle btn-lang" type="button" data-toggle="dropdown"> <?=$lang?>  <span class="caret"></span> </button>
            
          
           <ul class="dropdown-menu language-switch" role="menu">
            <?php
             foreach ($languages as $l) {
            if ($lang!=$l) echo '<li><a style="opacity: 0.7;" href="?lang=' . $l . '" >' . $translate[ $l ][ $l ] . '</a></li><br>';
             }
            ?>  
           </ul>
         </div>
         <li>
   </ul><!-- links -->
        
      
 
  </div><!-- end .row .topNav -->
 </div><!-- end .container -->
</header><!-- end header -->

<!-- Modal --> 
<div class="modal fade download" id="walletModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
 <div class="modal-dialog">
  <center> 
   <button  style=" float: none;"  class="close" data-dismiss="modal" data-target="#myModal"> <img  src="img/btsx-ico-w.svg" width="48" alt="BitSharesX Logo " /></button> 
   <h1 style="padding: 0;margin: 12px 0 2px 0;font-size: 36px;"><?=$translate[ $lang ][ "downloadbtsx" ]?></h1>  
   <div class="modal-content">
    <div class="modal-header"></div><!-- end .modal-header -->
     <div class="modal-body">
      <div class="row">
       <a href="/files/wallet/0.4.17/BitSharesX-0.4.17-x86.exe" class="whoabtn"><?=$translate[ $lang ][ "btsxwin32" ]?></a><br><br>
       <a href="/files/wallet/0.4.17/BitSharesX-0.4.17-x64.exe" class=" whoabtn"><?=$translate[ $lang ][ "btsxwin64" ]?></a><br><br>
       <a href="/files/wallet/0.4.17/BitSharesX-0.4.17.dmg" class="whoabtn" ><?=$translate[ $lang ][ "btsxmacos" ]?></a>
      </div>
     </div><!-- end .modal-body -->
     <a style=" float: none;"  class="close" data-dismiss="modal" data-target="#myModal"><i class="icon-eye-off"></i><?=$translate[ $lang ][ "close" ]?></a>
    </div><!-- end .modal-content -->
   </div><!-- end .modal-dialog -->
  </center>
 </div><!-- end #model -->
</div>
