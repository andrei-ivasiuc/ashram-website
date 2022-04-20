<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/header.php') ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/gallery.php') ?>

<section class="sa-section" style="background-color: var(--bg-blue);">
    <div class="container">
        <div class="row justify-content-center">
            <h5 class="lg text-center ">February 12, 2022</h5>
            <h2 class="text-center">Delhi Ashram's 66<sup>th</sup> Foundation Day</h2>
            <h4 class="text-center"><b><i>(Inaugurated on 12<sup>th</sup> Feb 1956)</i></b></h4>

            <!-- <div class="col-md-4 fs-5 justify-content-center"> -->
            <div class="col-md-8 fs-5 ">
                <img src="./img/3.JPG" class="img-fluid p-5" alt="">
                <?php gallery("./img/tableaux", 5); ?>
            </div>
        </div>

        <div class="row fs-5 pt-5 justify-content-center">

            <div class="col-8 embed-responsive embed-responsive-16by9">            
            <iframe width="100%" height="350" src="https://www.youtube.com/embed/kwZKPi4oRVQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>            
            </div>                
            <div class="col-8 pt-4 ">
                <p>
                    The Tableaux of the 150<sup>th</sup> Birth Anniversary of Sri Aurobindo showcased on 73<sup>rd</sup> Republic Day was handed over to the Sri Aurobindo Ashram - Delhi Branch by Secretary, Ministry of Culture, Govt. of India, Shri Govind Mohan, in the presence of Shri Ram Bahadur Rai, President, Indira Gandhi National Centre for Arts Trust (IGNCA), on 12<sup>th</sup> Feb 2022.
                </p>
                <p>
                    Our heart-felt gratitude to all the dignitaries from IGNCA and Ministry of Culture who graced this special occasion of 66<sup>th</sup> Foundation Day of Sri Aurobindo Ashram, Delhi Branch.
                </p>
            </div>
            <!-- <div class="col-8 embed-responsive embed-responsive-16by9">
                <iframe width="100%" height="350" src="https://www.youtube.com/embed/ROvRjTtebyo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>             -->
        </div>
        <div class="row fs-5 justify-content-center">
            <div class="pt-4 col-8 ">
                <a href="./divine-battle.php" target="_blank" class="btn btn-sm btn-outline-secondary">Know about the Divine battle</a>
            </div>
            <!-- <div class="pt-4 col-8 float-right">
                <a href="./divine-battle.php" target="_blank" class="btn btn-sm btn-outline-secondary">Know about the Divine battle</a>
            </div> -->
        </div>
    </div>
    </div>
</section>
<?php require_once('../../footer.php') ?>