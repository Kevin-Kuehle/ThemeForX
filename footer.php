<footer class="footer">
    <div class="row">
        <div class="col lg-3">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/whiteLogo.svg' ?>" alt="">
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