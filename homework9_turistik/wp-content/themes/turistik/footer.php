<footer class="main-footer">
    <div class="content-footer">
        <div class="bottom-menu">
            <ul class="b-menu__list">
                <?php wp_nav_menu([
                    'container' => false,
                    'menu_class'    => 'b-menu__list',
                    'walker'    => new BotMenuWalker()
                ]); ?>
            </ul>
        </div>
        <div class="copyright-wrap">
            <div class="copyright-text">Туристик<a href="#" class="copyright-text__link"> loftschool 2017</a></div>
        </div>
    </div>
</footer>
</div>
<!-- wrapper_end-->
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="/js/main.js"></script>
<?php wp_footer(); ?>
</body>
</html>
