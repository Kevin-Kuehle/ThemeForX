<footer class="footer">
    <div class="row">
        <div class="col lg-3">

        </div>
        <div class="col lg-3"></div>
        <div class="col lg-3"></div>
        <div class="col lg-3">
            <img src="<?php echo bloginfo( 'url' ) ?>/wp-content/uploads/2017/07/logo.svg" alt="">
			<?php $args = array(
				'theme_location'  => 'footermenu',
				'container'       => 'nav',
				'container_class' => 'footer-nav',
				'container_id'    => 'footer-nav'
			);
			wp_nav_menu( $args ) ?>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</div>
</html>