<div class="container-fluid">

<?php get_header(); ?>

<?php
    if( !has_post_thumbnail( ) ) {
        // DEFAULT FEATURED IMAGE ./img/default-featured/close-up-photo-of-vintage-typewriter-1425146 - pexels -.jpg
        //Photo by Min An from Pexels
        //https://www.pexels.com/@minan1398?utm_content=attributionCopyText&utm_medium=referral&utm_source=pexels
        $default_image = 'default-featured/close-up-photo-of-vintage-typewriter-1425146 - pexels -.jpg';
        $default_featured_image_path = get_template_directory_uri( );
        $default_featured_image = $default_featured_image_path . '/img/' . $default_image;
    } else {
        $default_featured_image = the_post_thumbnail( );
    }?>

<style>
    .post-content{
        text-align: justify;
    }
    .bgimage {
    width:100%;
    height:500px;
    background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.5)), url("<?php  print $default_featured_image; ?>");
    background-repeat: no-repeat;
    background-position: center;
    background-size:cover;
    background-attachment: fixed;
    }
    
    
    .bgimage-text h3{
        font-size: 3em;
        text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.5);
    }
    .bgimage-text{
        color: white;
        position:relative;
        padding-top:200px;
    }
</style>

<?php 
//THE LOOP
    if( have_posts() ) : while( have_posts() ) : the_post(); ?>
<!-- POST HEADER -->
    
        <div class="row bgimage mx-auto">
            <div class='mx-auto bgimage-text'>
                <h3> <?php the_title( ); ?> </h3>
                <p>Por: <?php the_author( ); ?></p>
            </div>
        </div>
    
<!-- POST BODY -->
    <div>
        <hr>
    </div>

    <div class="row post-content">
        <div class="col-lg-2">&nbsp;</div>
        <div class="col-lg-8"> <p> <?php the_content( ); ?> </p> </div>
        <div class="col-lg-2">&nbsp;</div>
    </div>


<?php //END THE LOOP
    endwhile; else : ?>
    <p><?php esc_html_e( 'O post não foi encontrado.' ); ?></p>
<?php endelse; endif; ?>

<!-- NAVIGATION-->
<div class="row">
        <div class="mx-auto">
            <p>Voltar para<br><button class='btn btn-danger'><a href="../">Home</a></button></p>
        </div>
</div>

<!-- AUTHOR -->
<!-- FOOTER -->
<?php get_footer(); ?>
</div>