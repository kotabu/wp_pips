<footer>
  <div class="footer-inner">
    <div class="footer-widget-left">
      <?php dynamic_sidebar( 'footer-widget-left' ); ?>
    </div>
    <div class="footer-widgetr-middle">
      <?php dynamic_sidebar( 'footer-widget-middle' ); ?>
    </div>
    <div class="footer-widget-right">
      <?php dynamic_sidebar( 'footer-widget-right' ); ?>
    </div>
  </div>
  <div class="copyright">
    <p>&copy; <?php echo date( "Y" ); ?> <?php bloginfo( 'name' ); ?></p>
  </div>
</footer>
  <?php wp_footer(); ?>
</body>
</html>
