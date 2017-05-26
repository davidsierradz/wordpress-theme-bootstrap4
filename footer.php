    </div><!-- /.container -->

    <footer class="blog-footer">
      <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>

    <?php wp_footer(); ?>
    <script>
        jQuery(document).ready(function($) {
            $('.blog-nav .page_item>a').each((index, item) => {
                item.classList.add('nav-link');
            });
            $('.blog-pagination>a').each((index, item) => {
                item.classList.add('btn');
                item.classList.add('btn-outline-primary');
            })
        });
    </script>

    </body>
</html>
