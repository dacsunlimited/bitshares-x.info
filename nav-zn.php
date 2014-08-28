	<header>
				<div class="container">
					<div class="row topNav">
						<a class="navbar-brand" href="index-zn.php"><img  src="img/btsx-logo-w.svg" alt="" width="160" /></a>
<!--						<a href="https://github.com/dacsunlimited/BitSharesX/" class="pull-right loginLink" target="_blank"><i class="icon-github-circled-alt2"></i></a>-->
						
						<!-- links -->
				  <ul class="nav btsx-nav pull-right">
						<li><a href="about-zn.php" class="">关于</a></li>
				    <li><a href="#" style="background: none;" class="" data-toggle="modal" data-target="#walletModal">下载</a></li>
				    <li><a href="http://wiki.bitshares.org/index.php/Bitshares_X" target="_blank" class="">维基</a></li>
				    <li><?php
				          		if (stripos($_SERVER['REQUEST_URI'], 'about-zn.php')){
				          		     echo '<a style="opacity: 0.7;" href="about.php" >EN</a>';
				          		}
				          		else{
				          		     echo '<a style="opacity: 0.7;" href="index.php">EN</a>';
				          		}
				          		?>		
				    
				    </li>
				    </ul>
				    </div><!-- end .row .topNav -->
				</div><!-- end .container -->
			</header><!-- end header -->



          <!-- Modal -->	
          						<div class="modal fade download" id="walletModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
          				           						  	 	 	   
          						  	<div class="modal-dialog">
          						  	<center> 
          						   <button  style=" float: none;"  class="close" data-dismiss="modal" data-target="#myModal"> <img  src="img/btsx-ico-w.svg" width="48" alt="BitShares X Logo " /></button> 
          						  	
          						  <h1 style="padding: 0;margin: 12px 0 2px 0;font-size: 36px;">下载 BitSharesX</h1>  
          						              						   
          						  
          						    	<div class="modal-content">
          						      		<div class="modal-header">
          						     		</div><!-- end .modal-header -->
          						      		<div class="modal-body">
                                         						      			<div class="row">
          						      			<a href="/files/wallet/0.4.9/BitSharesX-0.4.9.exe" class=" whoabtn" style="margin: 0 24px 12px 0;">比特股X Windows版</a>
          						      			<a href="/files/wallet/0.4.9/BitSharesX-0.4.9.dmg" class="whoabtn" >比特股X MAC版</a>
          						      			           </div> 						      		</div><!-- end .modal-body -->
                                      				 <a style=" float: none;"  class="close" data-dismiss="modal" data-target="#myModal"><i class="icon-eye-off"></i> 关闭</a>

          						    	</div><!-- end .modal-content -->
          						  	</div><!-- end .modal-dialog -->
          						  	</center>
          						</div><!-- end #model -->
