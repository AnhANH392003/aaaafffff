<?php
if(emallshop_get_option('show-topbar', 1)==1):?>
<div class="header-topbar">
	<div class="container">
		<div class="row">
			<div class="col-sm-4 text-left">
				<?php if( function_exists( 'emallshop_social_link' ) ) {
					emallshop_social_link();
				}?>
			</div>
			<div class="col-sm-8 text-right">
				<div class="topbar-right">
					<?php 
					if( function_exists( 'emallshop_help' ) ) {
						emallshop_help();
					}
					if( function_exists( 'emallshop_dokan_header_user_menu' ) ) {
						emallshop_dokan_header_user_menu();
					}else{
						if( function_exists( 'emallshop_all_myaccount' ) ) {
							emallshop_all_myaccount();
						}
					}
					if( function_exists( 'emallshop_currency' ) ) {
						emallshop_currency();
					}
					if( function_exists( 'emallshop_language' ) ) {
						emallshop_language();
					}?>                            
				</div>
			</div>
		</div>
	</div>
</div>
<?php endif;?>
<div class="header-middle">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-lg-3">
				<?php if( function_exists( 'emallshop_header_logo' ) ) {
					emallshop_header_logo();
				}?>
			</div>
			<div class="col-lg-6 visible-lg">
				<?php if( function_exists( 'emallshop_header_services' ) ) {
					emallshop_header_services();
				}?>
			</div>                    
			<div class="col-xs-12 col-sm-6 col-lg-3">
				<div class="header-right">				
					<?php if( function_exists( 'emallshop_header_cart' ) ) {
						emallshop_header_cart();
					}?>					
				</div>
			</div>
		</div>
	</div>
</div>
<div class="header-navigation">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<?php if( function_exists( 'emallshop_header_menu' ) ) {
					emallshop_header_menu();
				}?>
			</div>			
		</div>
	</div>
</div>