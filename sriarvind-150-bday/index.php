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
<section class="header-horizontal dark pt-5 ">
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
                <h5 >A Freedom-fighter, Poet, Philosopher, Mahayogi</h5>
                <hr>

                <p class="fs-5">
                    What Sri Aurobindo represents in the world’s history is not a teaching, not even a revelation; it is a decisive action direct from the Supreme.
                </p>
                <p class="fs-5">
                    Sri Aurobindo has come on earth not to bring a teaching or a creed in competition with previous creeds or teachings, but to show the way to overpass the past and to open concretely the route towards an imminent and inevitable future.
                </p>
                <p class="fs-5">At Pondicherry, Sri Aurobindo developed a spiritual practice he called Integral Yoga. The central theme of his vision was the evolution of human life into a divine life in divine body. He believed in a spiritual realisation that not only liberated but transformed human nature, enabling a divine life on earth.
                </p>
                <p class="fs-5"><strong>&mdash; The Mother</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- <section class="header-horizontal dark" style="background-color: #ebe2da; ">
    <div class="row">
        <div class="col text-center mb-4">
            <br>
            <img src="./img/mail.png" width="8%" height="auto" style="background-color:  var(--gold); ">
            <h3 class="pt-3"><b>Sri Aurobindo's 150<sup>th</sup> Birthday Anniversary</b></h3>
            <h4>15-Aug-1872 to 15-Aug-2022<h4>
                    <h5><i>(Also, 75th year of India's Independence)</i></h5>
        </div>
    </div>
</section>
<section class="block image-overlap left my-5" style="background-color: #ebe2da; ">
    <div class="container">

        <div class="img col-md-10 " ; style="text-align:right;">
            <img src="./img/1950 April Pondicherry-Custom (1).jpg" alt="">
        </div>
        <div class="text fs-5">
            <div class="inner">
                <h1>Sri Aurobindo</h1>
                <h5><em>A Freedom-fighter, Poet, Philosopher, Mahayogi</em></h5>
                <br>
                <p>
                    What Sri Aurobindo represents in the world’s history is not a teaching, not even a revelation; it is a decisive action direct from the Supreme.
                </p>
                <p>
                    Sri Aurobindo has come on earth not to bring a teaching or a creed in competition with previous creeds or teachings, but to show the way to overpass the past and to open concretely the route towards an imminent and inevitable future.
                </p>
                <p>At Pondicherry, Sri Aurobindo developed a spiritual practice he called Integral Yoga. The central theme of his vision was the evolution of human life into a divine life in divine body. He believed in a spiritual realisation that not only liberated but transformed human nature, enabling a divine life on earth.
                </p>
                <p>&mdash; The Mother</p>
            </div>

        </div>
    </div>
</section> -->
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

<section class="sa-section">
    <div class="container col-md-8" style="font-size : 30px;">
        <div class="row gx-10 pb-3" style="background-color:#ebe2da; border-radius: 20px;">
            <div class="col-lg-4 col-sm-12 fs-5 gx-5 gy-4">
                <div class="sa-img"><img src="./img/50- Pondicherry 1915-20 A.jpg" style="height: 400px; object-fit:cover; border-radius:50%" alt=""></div>
            </div>
            <div class="col-lg-8 col-sm-12 fs-5 p-4">
                <h1>Sri Aurobindo's Message</h1>
                <h3>on 15th August 1947</h3>
                <hr>
                <p>
                    August 15th, 1947 is the birthday of free India. It marks for her the end of an old era, the beginning of a new age. But we can also make it by our life and acts as a free nation an important date in a new age opening for the whole world, for the political, social, cultural and spiritual future of humanity.
                </p>
                <p>
                    August 15th is my own birthday and it is naturally gratifying to me that it should have assumed this vast significance. I take this coincidence, not as a
                </p>

                <!-- <p>
                    The first of these dreams was a revolutionary movement which would create a free and united India. India today is free but she has not achieved unity. At one moment it almost seemed as if in the very act of liberation she would fall back into the chaos of separate States which preceded the British conquest. But fortunately it now seems probable that this danger will be averted and a large and powerful, though not yet a complete union will be established. Also, the wisely drastic policy of the Constituent Assembly has made it probable that the problem of the depressed classes will be solved without schism or fissure. But the old communal division into Hindus and Muslims seems now to have hardened into a permanent political division of the country. It is to be hoped that this settled fact will not be accepted as settled for ever or as anything more than a temporary expedient. For if it lasts, India may be seriously weakened, even crippled: civil strife may remain always possible, possible even a new invasion and foreign conquest. India's internal development and prosperity may be impeded, her position among the nations weakened, her destiny impaired or even frustrated. This must not be; the partition must go. Let us hope that that may come about naturally, by an increasing recognition of the necessity not only of peace and concord but of common action, by the practice of the common action and the creation of means for that purpose. In this way unity may finally come about under whatever form - the exact form may have a pragmatic but not a fundamental importance. But by whatever means, in whatever way, the division must go; unity must and will be achieved, for it is necessary for the greateness of India's future.
                </p>
                <p>
                    Another dream was for the resurgence and liberation of the peoples of Asia and her return to her great role in the progress of human civilisation. Asia has arisen; large parts are now quite free or are at this moment being liberated: its other still subject or partly subject parts are moving through whatever struggles towards freedom. Only a little has to be done and that will be done today or tomorrow. There India has her part to play and has begun to play it with an energy and ability which already indicate the measure of her possibilities and the place she can take in the council of the nations.
                </p>
                <p>
                    The third dream was a world-union forming the outer basis of a fairer, brighter and nobler life for all mankind. That unification of the human world is under way; there is an imperfect initiation organised but struggling against tremendous difficulties. But the momentum is there and it must inevitably increase and conquer. Here too India has begun to play a prominent part and, if she can develop that larger statesmanship which is not limited by the present facts and immediate possibilities but looks into the future and brings it nearer, her presence may make all the difference between a slow and timid and a bold and swift development. A catastrophe may intervene and interrupt or destroy what is being done, but even then the final result is sure. For unification is a necessity of Nature, an inevitable movement. Its necessity for the nations is also clear, for without it the freedom of the small nations may be at any moment in peril and the life even of the large and powerful nations insecure. The unification is therefore to the interests of all, and only human imbecility and stupid selfishness can prevent it; but these cannot stand for ever against the necessity of Nature and the Divine Will. But an outward basis is not enough; there must grow up an international spirit and outlook, international forms and institutions must appear, perhaps such developments as dual or multilateral citizenship, willed interchange or voluntary fusion of cultures. Nationalism will have fulfilled itself and lost its militancy and would no longer find these things incompatible with self-preservation and the integrity of its outlook. A new spirit of oneness will take hold of the human race.
                </p>
                <p>
                    Another dream, the spiritual gift of India to the world has already begun. India's spirituality is entering Europe and America in an ever increasing measure. That movement will grow; amid the disasters of the time more and more eyes are turning towards her with hope and there is even an increasing resort not only to her teachings, but to her psychic and spiritual practice.
                </p>
                <p>
                    The final dream was a step in evolution which would raise man to a higher and larger consciousness and begin the solution of the problems which have peplexed and vexed him since he first began to think and dream of individual perfection and a perfect society. This is still a personal hope and an idea, an ideal which has begun to take hold both in India and in the West on forward-looking minds. The difficulties in the way are more formidable than in any other field of endeavour, but difficulties were made to be overcome and if the Supreme Will is there, they will be overcome. Here too, if this evolution is to take place, since it must proceed through a growth of the spirit and the inner consciousness, the initiative can come from India and, although the scope must be universal, the central movement may be hers.
                </p>
                <p>
                    Such is the content which I put it into this date of India's liberation: whether or how far this hope will be justified depends upon the new and free India.
                </p>
                <p> How to bring about the much needed cohesion and faith in the country? </p>
                <p>By following Sri Aurobindo's teachings. His Independence Day Message issued on August 15th, 1947 needs to be read and re-read and its significance explained to millions of his compatriots. India needs the conviction and faith of Sri Aurobindo.</p>
                <p>&mdash;THE MOTHER </p> -->
                <p>
                    <a href="./read-more/15-aug-1947-msg.php" target="_blank" class="btn btn-lg btn-outline-secondary">Read full message</a>
                </p>
            </div>
        </div>
    </div>
</section>


<section class="header-horizontal dark fs-5">
    <div class="container">
        <div class="row">
            <div class="col text-center mb-4">
                <h1>Some of the Major Literary works by Sri Aurobindo</h1>
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
        <div class="row gx-10 pb-3" style="background-color:#ebe2da; border-radius: 20px;">
            <div class="col-lg-4 col-sm-12 fs-5 gx-5 gy-4">
                <div class="sa-img"><img src="./img/mother.jpg" style="height: 400px; object-fit:cover; border-radius:50%" alt=""></div>
            </div>
            <div class="col-lg-8 col-sm-12 fs-5 p-4 ">
                <h1>Commentaries on "THE LIFE DIVINE"</h1>
                <h3>by Divine Mother</h3>
                <hr>
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
    <div class="container col-md-8">
        <div class="row gx-10 pb-3" style="background-color:#ebe2da; border-radius: 20px;">
            <div class="col-6 embed-responsive embed-responsive-16by9 gy:3px; pt-2" style="vertical-align: middle;">
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/oNNTrj_WeeI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-6">
                <p style="text-align:center;">

                <h1>Bhavani Bharti</h1>
                </p>
                <p class="fs-5">
                    Bhavani Bharti is the only Sanskrit Poem written by Sri Aurobindo, comprising of 99 verses, depicting the victory of Mother Shakti over Evil.
                </p>
                <p class="fs-5">
                    Watch the Dance-Drama presented by Sri Aurobindo Ashram, Delhi Branch, based on the Poem, Bhavani Bharti.
                </p>
            </div>

        </div>
    </div>
</section>
<section class="sa-section">
    <div class="container col-md-8" style="font-size : 30px;">
        <div class="row gx-10 pb-3" style="background-color:#ebe2da; border-radius: 20px;">
            <div class="col-lg-4 col-sm-12 fs-5 gx-5 gy-4" style="align-items:center; justify-content:center; vertical-align:middle;">
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>

                <div class="sa-img "><img src="./img/ram-Custom.jpg" style="height: 400px; object-fit:cover; border-radius:50%" alt=""></div>
            </div>
            <div class="col-lg-8 col-sm-12 fs-5 p-4 ">
                <h1>Words of Sri Aurobindo</h1>
                <h3>on Lord Ram</h3>
                <hr>
                <p class="p-4">
                    “[Rāma’s] business was to destroy Ravana and to establish the Ramarajya – in other words, to fix for the future the possibility of an order proper to the sattwic civilised human being who governs his life by the reason, the finer emotions, morality, or at least moral ideals, such as truth, obedience, co-operation and harmony, the sense of domestic and public order, <span id="dots">...</span><span id="more"> – to establish this in a world still occupied by anarchic forces,
                        the Animal mind and the powers of the vital Ego making its own satisfaction the rule of life, in other words, the Vanara and Rakshasa...
                        “It was not his business to be necessarily a perfect, but a largely representative sattwic man, a faithful husband and a lover, a loving and obedient son, a tender and perfect brother, father, friend – he is friend of all kinds of people, friend of the outcaste Guhaka, friend of the Animal leaders, Sugriva, Hanuman, friend of the vulture Jatayu, friend even of the Rakshasa Vibhishan.
                        “All that he was in a brilliant, striking but above all spontaneous and inevitable way, not with a forcing of this note or that…., but with a certain harmonious completeness. But most of all, it was his business to typify and establish the things on which the social idea and its stability depend, truth and honour, the sense of Dharma, public spirit and the sense of order."
                        <p>
                            🌷 Lord Sri Aurobindo.
                            (Sri Aurobindo, CWSA, 28: 491-492) </p>
                    </span>
                </p>
                <!-- <button onclick="myFunction()" id="myBtn">Read more</button> -->
            </div>
        </div>
    </div>
</section>

<section class="sa-section">
    <div class="container col-md-8" style="font-size : 30px;">
        <div class="row gx-10 pb-3" style="background-color:#ebe2da; border-radius: 20px;">
            <div class="col-lg-4 col-sm-12 fs-5 gx-5 gy-4">
            <br>
                <br>
                <br>
                <br>
                <br>
                <br>                
                <div class="sa-img"><img src="./img/35- Pondicherry 1911-Custom.jpg" style="height:600px; object-fit:cover; border-radius:50%" alt=""></div>

            </div>
            <div class="col-lg-8 col-sm-12 fs-5 p-4 ">
                <h1>"Invitation", a Poem  </h1>
                <h3>composed by Shri Aurobindo  </h3>
                <h3>in Alipore Jail, 1908-1909</h3>
                <hr>
                <p>With wind and the weather beating round me </p>
                <p>Upto the hill and the moorland I go </p>
                <p>Who will come with me? Who will climb with me? </p>
                <p>Wade through the brook and tramp through the snow? </p>
                <p>Not in the petty circle of cities </p>
                <p>Cramped by your doors and your walls I dwell; </p>
                <p>Over me God is blue in the welkin,</p>
                <p>Against me the wind and the storm rebel.</p>
                <p>I sport with solitude here in my regions,</p>
                <p>Of misadventure have made me a friend.</p>
                <p>Who would live largely? Who would live freely?</p>
                <p>Here to the wind-swept uplands ascend.</p>
                <p>I am the lord of tempest and mountain.</p>
                <p>I am the Spirit of freedom and pride.</p>
                <p>Stark must he be and a kinsman to danger</p>
                <p>Who shares my kingdom and walks at my side.</p>
            </div>
        </div>
    </div>
</section>

<?php if (count($future_events) > 0) : ?>
    <!-- <section id="future-events" class="home-section" style="background-color: var(--bg-darker);">
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
    </section> -->
<?php endif; ?>

<?php if (count($past_events) > 0) : ?>
    <!-- <section id="past-events" class="home-section">
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
    </section> -->
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