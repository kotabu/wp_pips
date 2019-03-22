<footer>
  <div class="footer-inner">
    <div class="footer-widget-container">
      <div class="footer-widget-left footer-widget">
        <?php dynamic_sidebar( 'footer-widget-left' ); ?>
      </div>
      <div class="footer-widget-middle footer-widget">
        <?php dynamic_sidebar( 'footer-widget-middle' ); ?>
      </div>
      <div class="footer-widget-right footer-widget">
        <?php dynamic_sidebar( 'footer-widget-right' ); ?>
      </div>
    </div>
    <div class="copyright">
      <p>&copy; <?php echo date( "Y" ); ?> <?php bloginfo( 'name' ); ?></p>
    </div>
  </div>
</footer>
  <?php wp_footer(); ?>
</body>
</html>
