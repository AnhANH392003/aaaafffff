<?php
if(emallshop_get_option('show-topbar', 1)==1):?>
<div class="header-topbar">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-md-4 text-left">
				<?php if( function_exists( 'emallshop_customer_support' ) ) {
					emallshop_customer_support();
				}?>
			</div>
			<div class="col-sm-6 col-md-8 text-right">
				<div class="topbar-right">
					<?php
					if( function_exists( 'emallshop_welcome_message' ) ) {
						emallshop_welcome_message();
					}
					if( function_exists( 'emallshop_dokan_header_user_menu' ) ) {
						emallshop_dokan_header_user_menu();
					}else{					
						if( function_exists( 'emallshop_myaccount' ) ) {
							emallshop_myaccount();
						}
						if( function_exists( 'emallshop_checkout' ) ) {
							emallshop_checkout();
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
			<div class="col-sm-3">
				<?php if( function_exists( 'emallshop_header_logo' ) ) {
					emallshop_header_logo();
				}?>
			</div>
			<div class="col-sm-6">
				<?php if( function_exists( 'emallshop_products_live_search_form' ) ) {
					emallshop_products_live_search_form();
				}?>
			</div>                    
			<div class="col-sm-3">
				<div class="header-right">
					<?php if( function_exists( 'emallshop_wishlist' ) ) {
						emallshop_wishlist();
					}
					if( function_exists( 'emallshop_campare' ) ) {
						emallshop_campare();
					}
					if( function_exists( 'emallshop_header_cart' ) ) {
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
			<div class="col-xs-6 col-sm-5 col-md-3">
				<?php if( function_exists( 'emallshop_category_menu' ) ) {
					emallshop_category_menu();
				}?>
			</div>
			<div class="col-xs-6 col-sm-7 col-md-9">
				<?php if( function_exists( 'emallshop_header_menu' ) ) {
					emallshop_header_menu();
				}?>				
			</div>
		</div>
	</div>
</div>