<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/header.php') ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/gallery.php') ?>
<section class="sa-section" style="background-color: var(--bg-darker);">
    <div class="container">
        <div class="row justify-content-center pr-3">
            <h5 class="lg text-center pb-3">February 21, 2022</h5>
            <h2 class="text-center">The Mother's 144<sup>th</sup> Birthday</h2>
            <h4 class="text-center pb-3"><b><i>(Mirra Alfassa, The Mother, was born in Paris, France, on 21 <sup>st</sup> February 1878)</i></b></h4>
            <div class="col-lg-6 col-sm-12 fs-5 ">
                <img src="./img/cover.JPG" class="card-img-top p-5" alt="">
            </div>
            <div class="col-lg-4 col-sm-12 fs-5 pt-5">
                <p>
                    The four aspects of the Mother are Maheshwari (Wisdom), Mahalakshmi (Harmony), Mahakali (Strength) and Mahasaraswati (Perfection).
                    The central circle in the Mother's symbol represents the Supreme Mother, the Mahashakti.
                    The 12 petals in the symbol represent the 12 aspects :
                </p>
                <div class="justify-content-center" style="column-count: 2;">
                    <ol>
                        <li>Sincerity</li>
                        <li>Humility</li>
                        <li>Gratitude</li>
                        <li>Perseverance</li>
                        <li>Aspiration</li>
                        <li>Receptivity</li>
                        <li>Progress</li>
                        <li>Courage</li>
                        <li>Goodness</li>
                        <li>Generosity</li>
                        <li>Equality</li>
                        <li>Peace</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="sa-section" style="background-color: var(--bg-blue);">
    <div class="container">
        <div class="row justify-content-center" >
            <h2 class="text-center pt-5 pb-5">Offerings</h2>
            <div class="col-lg-6 col-sm-12 fs-5 ">
                <img src="./img/offerings/DSC_2255.jpg" class="card-img-top pb-3" alt="">
                <?php gallery("./img/offerings", 8); ?>
            </div>
            <div class="col-lg-4 col-sm-12 fs-5 p-3 ">
                <!-- <?php gallery("./img/offerings", 6); ?> -->
                <p class="pt-4">
                    The Delhi Ashram celebrated the Mother's Birthday on 21<sup>st</sup> February 2022 with great fervour and devotion through a gamut of activities: a Painting Exhibition on “The Divine Signature” in the morning,  physical demonstration by Ashram Youth in the afternoon and Lights of Aspiration, Musical offering and reading by Tara Didi in the evening.                    
                </p>
            </div>
        </div>
    </div>
</section>
<?php require_once('../../footer.php') ?>