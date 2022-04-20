<?php require_once('header.php') ?>
<?php require_once('padma-index.php') ?>

<!-- VIDEO BACKGROUND -->
<div class="fullscreen-bg">
    <video loop muted autoplay class="fullscreen-bg__video">
        <source src="/video/ashram-bg-720.mp4" type="video/mp4">
    </video>
</div>


<section class="block image-overlap left my-5 pt-5">
    <div class="container">
        <div class="img">
            <img src="./img/ashram.png" alt="">
        </div>
        <div class="text">
            <div class="inner">
                <h3>Sri Aurobindo Ashram — Delhi Branch</h3>
                <p>
                    This Ashram has been created with another object than that ordinarily common to such institutions, not for the renunciation of the world but as a centre and field of practice for the evolution of another kind and form of life which would in the final end be moved by a higher spiritual consciousness and embody a greater life of the spirit.
                </p>

                <p>&mdash; Sri Aurobindo, Letters on Yoga, p. 847</p>

            </div>
        </div>
    </div>
</section>

<!-- PAST EVENTS -->
<?php include_once("events.php") ?>

<!-- ARTICLES -->
<?php include_once("articles.php") ?>

<!--ONLINE PUBLICATIONS-->
<?php include_once("publications.html") ?>

<?php require_once('footer.php') ?>