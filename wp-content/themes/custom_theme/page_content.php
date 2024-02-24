<div class="breadcrumb-wrap bg-f bg-contact">
    <div class="overlay bg-vulcan op-9"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb-title">
                    <h2><?php the_title(); ?></h2>
                    <ul class="breadcrumb-menu list-style">
                        <li><a href="<?php echo home_url(); ?>">Home </a></li>
                        <li><?php the_title(); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main">
    <?php the_content(); ?>
</div>
