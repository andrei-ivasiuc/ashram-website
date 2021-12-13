<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/header.php') ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/gallery.php') ?>

<section class="event-header" style="background-color: #eee;">
    <div class="container pt-5 text-center">
        <h5>December 5, 2021</h5>
        <h1>Sri Aurobindo's Mahasamadhi Day</h1>
        <img src="./img/DSC_0083.jpg"></img>        
    </div>
</section>

<section class="event-text">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-sm-12 fs-5 p-5">
                <p>Sri Aurobindo (born Aurobindo Ghose; 15 August 1872 – 5 December 1950) was an Indian philosopher, yoga guru, maharishi, poet, and Indian nationalist. He was also a journalist, editing newspapers like Bande Mataram. He joined the Indian movement for independence from British colonial rule, till 1910 was one of its influential leaders and then became a spiritual reformer, introducing his visions on human progress and spiritual evolution.</p>
            </div>
        </div>
    </div>
</section>

<section class="event-gallery">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-sm-12 fs-5 p-5 text-center">
                <h2 class="pb-5">Gallery</h2>
                <?php gallery("../../events/sri-aurobindo-samadhi/img", 5);?>
            </div>
        </div>
    </div>
</section>


<!-- <section class="event-pdf pt-5 pb-5">
    <div class="container text-center">
        <h2 class="pb-5">Program</h2>
        <embed src="./115birth.pdf" type="application/pdf" frameBorder="0" scrolling="auto" height="600px" width="100%" />
    </div>
</section> -->

<?php require_once('../../footer.php') ?>
