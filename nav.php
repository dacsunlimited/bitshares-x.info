<header>
				<div class="container">
					<div class="row topNav">
					<!-- Logo -->
						<a class="navbar-brand" href="index.php"><img src="img/btsx-logo-w.svg" alt="" width="160" /></a>
<!--						<a href="https://github.com/dacsunlimited/BitSharesX/" class="pull-right loginLink" target="_blank"><i class="icon-github-circled-alt2"></i></a>-->                      			
					<!-- links -->
					<ul class="nav btsx-nav pull-right">
						<li><a href="about.php" class="">about</a></li>
						<!-- Button trigger modal -->
					  <li><a href="#" style="background: none;" class="" data-toggle="modal" data-target="#walletModal">DOWNLOAD</a></li>
		        <li><a href="http://wiki.bitshares.org/index.php/Bitshares_X" target="_blank" class="">WIKI</a></li>

					  <li>
        		<?php
        		if (stripos($_SERVER['REQUEST_URI'], 'about.php')){
        		     echo '<a style="opacity: 0.7;" href="about-zn.php" >中文</a>';
        		}
        		else{
        		     echo '<a style="opacity: 0.7;" href="index-zn.php">中文</a>';
        		}
        		?>		
	
		        </li>
					  </ul>
				<!-- links -->
					  </div><!-- end .row .topNav -->			
				    </div><!-- end .row .topNav -->
				</div><!-- end .container -->
			</header><!-- end header -->




   <!-- Modal -->	
    	<div class="modal fade download" id="walletModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
           <center> 
             <button  style=" float: none;"  class="close" data-dismiss="modal" data-target="#myModal"> <img  src="img/btsx-ico-w.svg" width="48" alt="BitSharesX Logo " /></button> 
             	<h1 style="padding: 0;margin: 12px 0 2px 0;font-size: 36px;">Download BitSharesX</h1>  
             			<div class="modal-content">
             					<div class="modal-header">
             						  </div><!-- end .modal-header -->
             						      <div class="modal-body">
                                            						      			<div class="row">
             						      			<a href="/files/wallet/0.4.13/BitSharesX-0.4.13.exe" class=" whoabtn">BitSharesX for Windows</a>
             						      			<a href="/files/wallet/0.4.13/BitSharesX-0.4.13.dmg" class="whoabtn" >BitSharesX for MAC</a>
             						      			           </div> 						      		</div><!-- end .modal-body -->
                           				 <a style=" float: none;"  class="close" data-dismiss="modal" data-target="#myModal"><i class="icon-eye-off"></i> close</a>
  
             						    	</div><!-- end .modal-content -->
             						  	</div><!-- end .modal-dialog -->
             						   	</center>
             						</div><!-- end #model -->
