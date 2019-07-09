<div class="pusher"></div>
<!--<footer class="navbar-fixed-bottom">-->
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
                Desenvolvido por Bcprime <?php echo date('Y'); ?> version 1.0 <?php echo _l('clients_copyright',get_option('companyname')); ?><img src="../media/logo.png" style="width: 50px;">
                <?php if(is_gdpr() && get_option('gdpr_show_terms_and_conditions_in_footer') == '1') { ?>
                 - <a href="<?php echo terms_url(); ?>"><?php echo _l('terms_and_conditions'); ?></a>
                <?php } ?>
                <?php if(is_gdpr() && is_client_logged_in() && get_option('show_gdpr_link_in_footer') == '1') { ?>
                 - <a href="<?php echo site_url('clients/gdpr'); ?>"><?php echo _l('gdpr_short'); ?></a>
                <?php } ?>
			</div>
		</div>
	</div>
</footer>
