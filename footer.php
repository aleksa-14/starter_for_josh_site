<footer class="container-fluid text-center">
<div class="container">
<div class="row">
<div class="col-md-6">
<!-- <a class="navbar-brand" href="#"><span class="JOSH">JOSH</span> <span class="orange">WHITKIN</span></a> -->
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-left') ) : 
endif; ?>

</div>
<div class="col-md-6">
    <!-- <p>Terms and Conditons</p> -->
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-right') ) : 
endif; ?>
    </div>
</div> <!-- row -->
</div> <!-- container -->
</footer>
<?php get_footer();?>   <!-- Tells WordPress to include footer.php   -->
</body>
</html>