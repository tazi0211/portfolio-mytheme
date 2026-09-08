<footer class="l-footer">
  <nav>
    <ul class="l-footer__nav-list">
      <li class="l-footer__nav-list__item">
        <a href="<?php echo esc_url( home_url('/') ); ?>" class="l-footer__nav-list__item__link">Home</a>
      </li>
      <li class="l-footer__nav-list__item">
        <a href="<?php echo esc_url( home_url('/about/') ); ?>" class="l-footer__nav-list__item__link">About</a>
      </li>
    </ul>
  </nav>
  <small class="l-footer__copyright">
    &copy; <?php echo date('Y'); ?> Tatsuya Somei(portfolio)
  </small>
</footer>

<?php wp_footer(); ?>

</body>
</html>