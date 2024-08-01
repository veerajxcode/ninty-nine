<?php
/**
 * Footer template.
 * 
 * @package NintyNine
 */
?>

<footer>
    <?php
     if ( is_active_sidebar( 'sidebar-2' ) ) {
     ?>
     <aside>
        <?php dynamic_sidebar( 'sidebar-2' ); ?>
     </aside>
     <?php
     }
    ?>
</footer>
</div>
</div>

<?php wp_footer(); ?>
</body>
</html>