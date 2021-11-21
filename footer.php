<footer class="footer">
        <div class="container">
        <div class="footer__wrapper">            
                  
            <nav class="footer__nav" id="nav">
					<?php wp_nav_menu( [
	'theme_location'  => 'footer_menu',
	'container'       => 'null',
	'menu_class'      => 'footer__list',
	'menu_id'         => 'nav',
] ); ?>
            </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

        
    </footer>
	 <?php wp_footer(); ?>
</body>

</html>