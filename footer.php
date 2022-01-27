
        </div>
        <!-- End Content -->
            <footer class="site-footer" role="contentinfo">
                <div class="container">
                    <nav id="footer-navigation" class="footer-navigation">
                        <?php 
                            wp_nav_menu(array(
                                'theme_location' => 'menu_principal',
                                'menu_id' => 'menu-principal',
                                'menu_class' => 'menu-principal'
                            )); 
                        ?>
                    </nav>
                </div>

                <div class="clear"></div>

                <div class="copyright">
                    <p>Visita Toronto <?php echo date('Y') ?></p>
                </div>
            </footer>
        
        </div>
        <!-- End page -->
        
  </body>
</html>