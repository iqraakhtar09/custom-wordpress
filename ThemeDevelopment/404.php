<?php get_header();?>

<div class="container-404">
    <h2 class="page-heading">Oh! what?? 404</h2>
    <img src="https://st.depositphotos.com/2767372/3346/i/450/depositphotos_33467235-stock-photo-grumpy-facial-expression-exotic-tortoiseshell.jpg" alt="404">
    <h3>sorry! i think you are lost</h3>

    <ul>
            <li>
                <a href="<?php echo site_url('');?>">Home</a>
            </li>
            <li>
                <a href="<?php echo site_url('/news');?>">News</a>
            </li>
            <li>
                <a href="<?php echo site_url('/projects');?>">Projects</a>
            </li>
            <li>
                <a href="<?php echo site_url('/about');?>">About</a>
            </li>
            <li>
                <input type="text" placeholder="Search Here">
            </li>
        </ul>
</div>

<?php get_footer();?>
