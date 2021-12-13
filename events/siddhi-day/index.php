<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/header.php') ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/gallery.php') ?>

<section class="event-header" style="background-color: #eee;">
    <div class="container pt-5 text-center">
        <h5>November 24, 2021</h5>
        <h1>Siddhi Day</h1>
        <div class="sa-img mt-5">
            <img src="./img/DSC_9045.jpg" ;>
        </div>

    </div>
</section>


<section class="event-text">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-sm-12 fs-5 p-5">
                <p>November 24 is a very significant day, especially for the devotees of Sri Aurobindo and the Mother, as it marks the anniversary of the Siddhi Day – 'The Day of Victory' – the descent of the Sri Krishna Consciousness or the Overmental Consciousness into the physical, which took place in the year 1926.</p>

            </div>
        </div>
    </div>
</section>
<section class="event-gallery">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-sm-12 fs-5 p-5 text-center">
                <h2 class="pb-5">Gallery</h2>
                <?php gallery("../../events/siddhi-day/img", 5); ?>
            </div>
        </div>
    </div>
</section>