<?php

/**
 * theme 404 template
 * 
 * @package grace
 */

 get_header();

?>

<div class="wrapper">
    <h2>Oops! Page not found.</h2>
    <div>
        <img decoding="async" src="<?php echo get_template_directory_uri() . '/assets/demos/recipes/images/404.png' ?>"
            alt="404">
    </div>
    <h4>We can't fint the page you're looking for.</h4>
    <button type="button" class="main-btn"><a href="<?php echo get_home_url(); ?>">GO BACK HOME</a></button>
</div>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Poppins', sans-serif;
    background-color: #fff;
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
}

.wrapper {
    text-align: center;
}

.wrapper h2 {
    margin: 40px 0;
    font-size: 2.5rem;
}

.wrapper img {
    width: 600px;
    max-width: 75%;
}

.wrapper h4 {
    margin: 40px 0 20px;
    font-size: 1.2rem;
}

.main-btn {
    padding: 15px;
    background-color: #a71f36;

    border: none;
    font-weight: 700;
    letter-spacing: 1px;
    border-radius: 6px;
    cursor: pointer;
}

.main-btn>a {
    text-decoration: none;
    color: #fff;
}

@media (max-width:767px) {
    .wrapper h2 {
        font-size: 2rem;
    }

    .wrapper h4 {
        font-size: 1rem;
    }
}
</style>

<?php
get_footer();
?>