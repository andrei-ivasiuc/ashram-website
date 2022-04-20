<?php

require_once('../header.php');

if (!file_exists("./index.json")) {
    return;
}

// Read json file with events
$str = file_get_contents("./index.json");

// Convert json into array
$events = json_decode($str, true);

// Sort events DESC
uasort($events, function ($event1, $event2) {
    return strtotime($event2["date"]) - strtotime($event1["date"]);
});

$future_events = [];
$past_events = [];

$today = time();

foreach ($events as $i => $event) {
    $event_dt = strtotime($event["date"]);
    if (($today < $event_dt) || ($today == $event_dt)) {
        array_push($future_events, $event);
    } else {
        array_push($past_events, $event);
    }
}

$future_events = array_slice($future_events, 0, 10);
$past_events = array_slice($past_events, 0, 4);
?>

<section class="header-horizontal dark pt-5 pb-5">
    <div class="container">
        <div class="row justify-content-center mb-5 mt-5">
            <div class="col-md-8 align-self-center text-center">
                <!-- <img src="./img/mail.png" width="8%" height="auto"> -->
                <!-- <h2>Sri Aurobindo's 150 Birthday Anniversary</h2> -->
                <p><img src="./img/header.png" alt="" class="aniversary-header sa-img"></p>
                <h3>15 Aug 1872 &mdash; 15 Aug 2022<h3>
                <h5 class="text-secondary">Also, 75th year of India's Independence</h5>
            </div>
        </div>
        <div class="row p-5 gx-5" style="background: var(--bg-light)">
            <div class="col-md-5 text-center">
                <img class="aniversary-header" src="./img/1950 April Pondicherry-Custom (1).jpg" alt="">
            </div>
            <div class="col-md-7 d-flex flex-column justify-content-center">
                <h2>Sri Aurobindo</h2>
                <h5 class="mb-5">A Freedom-fighter, Poet, Philosopher, Mahayogi</h5>
                <p>
                    What Sri Aurobindo represents in the world’s history is not a teaching, not even a revelation; it is a decisive action direct from the Supreme.
                </p>
                <p>
                    Sri Aurobindo has come on earth not to bring a teaching or a creed in competition with previous creeds or teachings, but to show the way to overpass the past and to open concretely the route towards an imminent and inevitable future.
                </p>
                <p><strong>&mdash; The Mother</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- <section class="header-horizontal dark">
    <div class="row gy-4  justify-content-center">

        <div class="col-md-6">
            <div class="alert alert-warning" role="alert">
                <h4 class="alert-heading" style="text-align:center">More on Sri Aurobindo</h4>
                <p>Read the following links to know about the life and teachings of Sri Aurobindo</p>
                <hr>
                <p class="mb-0"><a href="http://www.sriaurobindoashram.net/" class="alert-link" target="_blank" style="text-align: center" ;>Sri Aurobindo Ashram, Pondicherry </a>
                <p class="mb-0"><a href="http://auromaa.org/" class="alert-link" target="_blank">Auromaa</a></p>
                <p class="mb-0"><a href="http://incarnateword.in/" class="alert-link" target="_blank">Incarnate Word</a></p>
                </p>
            </div>
        </div>
    </div>
</section> -->

<section class="header-horizontal dark fs-5">
    <div class="container">
        <div class="row">
            <div class="col text-center mb-4">
                <h4>Some of the Major Literary works by Sri Aurobindo</h4>
            </div>
        </div>
        <div class="row gy-4  justify-content-center">
            <div class="col-12 col-lg-4 col-md-6">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active" style="background-color: #ebe2da; color:black; border:none">
                        Poetry and Literature
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">Savitri: A Legend and a Symbol</a>
                    <a href="#" class="list-group-item list-group-item-action">Bhavani Bharti, Sanskrit Poem</a>
                    <a href="#" class="list-group-item list-group-item-action">Letters on Poetry, Literature and Art</a>
                    <a href="#" class="list-group-item list-group-item-action">Collected Plays and Short stories</a>
                    <a href="#" class="list-group-item list-group-item-action">Collected Poems</a>


                </div>
            </div>

            <div class="col-12 col-lg-4 col-md-6">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active" style="background-color: #ebe2da; color:black; border:none ">
                        Philosophy and Yoga
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">The Life Divine</a>
                    <a href="#" class="list-group-item list-group-item-action">The Synthesis of Yoga </a>
                    <a href="#" class="list-group-item list-group-item-action">The Supramental Manifestation and other writings</a>
                    <a href="#" class="list-group-item list-group-item-action">Sri Aurobindo on himself</a>
                    <a href="#" class="list-group-item list-group-item-action">The Mother: With Letters on the Mother</a>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-6">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active" style="background-color:#ebe2da; color:black; border:none ">
                        On Indian Spirituality
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">Essays on the Gita</a>
                    <a href="#" class="list-group-item list-group-item-action">The Upanishads-I: Isha Upanishad</a>
                    <a href="#" class="list-group-item list-group-item-action">The Upanishads-II: Kena and other Upanishads</a>
                    <a href="#" class="list-group-item list-group-item-action">Hymn to Durga</a>
                    <a href="#" class="list-group-item list-group-item-action">The Secret of the Vedas</a>
                </div>
            </div>
        </div>
</section>

<section class="sa-section">
    <div class="container col-md-8" style="font-size : 30px;">
        <div class="row gx-10 p-5" style="background-color:#ebe2da; border-radius: 20px;">
            <div class="col-lg-4 col-sm-12 fs-5 gx-5 gy-4">
                <div class="sa-img"><img src="./img/mother.jpg" style="height: 400px; object-fit:cover; border-radius:50%" alt=""></div>
            </div>
            <div class="col-lg-8 col-sm-12 fs-5 p-4 ">
                <h3>Commentaries on &laquo;THE LIFE DIVINE&raquo;</h3>
                <h3 class="mb-5">by The Divine Mother</h3>

                <p>
                    The commentaries were given in 1957 and 1958 at the Playground of Sri Aurobindo Ashram. The commentaries deal with the two chapters, "Man and Evolution" and "The Evolution of the Spiritual Man", and the beginning of the third chapter,"The Triple Transformation". As a serious illness intervened, the Mother could not comment on all the last six chapters.
                </p>
                <!-- <div class="col-lg-8 col-sm-12 fs-5" style="display: block; text-align: right"> -->
                <a href="./coll-works-mother/LifefDivine.php" target="_blank" class="btn btn-lg btn-outline-secondary">Read Commentaries</a>
                <!-- </div> -->

            </div>
        </div>
    </div>
</section>

<section class="sa-section">
    <div class="container col-md-8" style="font-size : 30px;">
        <div class="row gx-10 pb-3" style="background-color:#ebe2da; border-radius: 20px;">
            <div class="col-lg-4 col-sm-12 fs-5 gx-5 gy-4" style="align-items:center; justify-content:center">
                <div class="sa-img"><img src="./img/ram-Custom.jpg" style="height: 400px; object-fit:cover; border-radius:50%" alt=""></div>
            </div>
            <div class="col-lg-8 col-sm-12 fs-5 p-4 ">
                <h3>Words of Sri Aurobindo</h3>
                <h3 class="mb-5">on Lord Ram</h3>

                <p>
                    “[Rāma’s] business was to destroy Ravana and to establish the Ramarajya – in other words, to fix for the future the possibility of an order proper to the sattwic civilised human being who governs his life by the reason, the finer emotions, morality, or at least moral ideals, such as truth, obedience, co-operation and harmony, the sense of domestic and public order, <span id="dots">...</span><span id="more"> – to establish this in a world still occupied by anarchic forces,
                        the Animal mind and the powers of the vital Ego making its own satisfaction the rule of life, in other words, the Vanara and Rakshasa...
                        “It was not his business to be necessarily a perfect, but a largely representative sattwic man, a faithful husband and a lover, a loving and obedient son, a tender and perfect brother, father, friend – he is friend of all kinds of people, friend of the outcaste Guhaka, friend of the Animal leaders, Sugriva, Hanuman, friend of the vulture Jatayu, friend even of the Rakshasa Vibhishan.
                        “All that he was in a brilliant, striking but above all spontaneous and inevitable way, not with a forcing of this note or that…., but with a certain harmonious completeness. But most of all, it was his business to typify and establish the things on which the social idea and its stability depend, truth and honour, the sense of Dharma, public spirit and the sense of order."
                        <p>
                            🌷 Lord Sri Aurobindo.
                            (Sri Aurobindo, CWSA, 28: 491-492) </p>
                    </span>
                </p>
                <button onclick="myFunction()" id="myBtn">Read more</button>

            </div>
        </div>
    </div>
</section>

<section class="sa-section">
    <div class="container col-md-8">
        <div class="row gx-10 p-5" style="background-color:#ebe2da; border-radius: 20px;">
            <div class="col-6 embed-responsive embed-responsive-16by9 gy:3px; pt-2" style="vertical-align: middle;" >
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/oNNTrj_WeeI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-6">
                <p style="text-align:center;" >

                    <h1>Bhavani Bharti</h1>
                </p>
                <p class="fs-5">
                    Bhavani Bharti is the only Sanskrit Poem written by Sri Aurobindo, comprising of 99 verses,  depicting the victory of Mother Shakti over Evil.
                </p>
                <p class="fs-5">
                    This is a video of a Dance-Drama presented by Sri Aurobindo Ashram, Delhi Branch, based on the Poem, Bhavani Bharti.
                </p>
            </div>

        </div>
    </div>
</section>
<?php if (count($future_events) > 0) : ?>
    <section id="future-events" class="home-section" style="background-color: var(--bg-darker);">
        <div class="container">
            <div class="row">
                <div class="col text-center mb-4">
                    <h2>Upcoming Celebrations</h2>
                    <h4>in Delhi Ashram</h4>
                </div>
            </div>
            <div class="row gy-4" style="justify-content: center;">
                <?php foreach ($future_events as $i => $event) : ?>
                    <div class="col-12 col-lg-3 col-md-6">
                        <div class="card <?php echo $event["type"] ?>">
                            <a href="<?php echo $event["path"] ?>"><img src="<?php echo $event["img"] ?>" class="card-img-top" alt="<?php echo $event["title"] ?>"></a>
                            <div class="card-body">
                                <h4><a href="<?php echo $event["path"] ?>"><?php echo $event["title"] ?></a></h4>
                                <h6><?php echo date_format(date_create($event['date']), "d M Y") ?></h6>
                                <p class="card-text"><a href="<?php echo $event["path"] ?>"><?php echo $event["description"] ?></a></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if (count($past_events) > 0) : ?>
    <section id="past-events" class="home-section">
        <div class="container">
            <div class="row">
                <div class="col text-center mb-4">
                    <h2>Future Events / Workshops</h2>
                    <h4>organized by Delhi Ashram</h4>

                </div>
            </div>
            <div class="row gy-4">
                <?php foreach ($past_events as $i => $event) : ?>
                    <div class="col-12 col-lg-3 col-md-6">
                        <div class="card <?php echo $event["type"] ?>">
                            <a href="<?php echo $event["path"] ?>"><img src="<?php echo $event["img"] ?>" class="card-img-top" alt="<?php echo $event["title"] ?>"></a>
                            <div class="card-body">
                                <h4><a href="<?php echo $event["path"] ?>"><?php echo $event["title"] ?></a></h4>
                                <h6><?php echo date_format(date_create($event['date']), "d M Y") ?></h6>
                                <p class="card-text"><a href="<?php echo $event["path"] ?>"><?php echo $event["description"] ?></a></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>


<?php require_once('../footer.php') ?>

<script>
    function myFunction() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more");
        var btnText = document.getElementById("myBtn");

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read more";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Read less";
            moreText.style.display = "inline";
        }
    }
</script>