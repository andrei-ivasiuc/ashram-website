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
    return strtotime($event1["date"]) - strtotime($event2["date"]);
});

$future_events = [];
$past_events = [];
?>

<?php $today = time(); ?>
<?php foreach ($events as $i => $event) : ?>
    <?php
    $event_dt = strtotime($event["date"]);

    // Get event date date object
    $date_event = date_create(date('d-m-Y', $event_dt));
    // Get today date object
    $date_today = date_create(date('d-m-Y', time()));
    // Get date difference object
    $diff = date_diff($date_today, $date_event);

    // Difference in days
    $diff_days = $diff->days;

    // If the date is from the past, multiply by -1 so it is negative
    if ($diff->invert) {
        $diff_days = $diff_days * -1;
    }

    if ($diff_days >= 0) {
        array_push($future_events, $event);
        // echo 'Future ' . $event["date"] . "Today : " . $today . "<br>";
    } else {
        array_push($past_events, $event);
        // echo 'Past ' . $event["date"] . "Today : " . $today . "<br>";
    }
    ?>
<?php endforeach;

$future_events = array_slice($future_events, 0, 50);
$past_events = array_slice($past_events, 0, 50);
?>
<?php include_once("../workshop.php");?>

<!-- 
<section class="home-section" style="background-color: var(--bg-light);">
    <div class="container">
        <div class="row">
            <div class="col text-center mb-5">
                <h2>Upcoming Programmes</h2>
            </div>
        </div>
        <div class="row pb-5">
            <a href="https://lifepositive.org/product/festival-of-healing-in-the-hills/ " target="_blank">
                <img src="/camps/madhuban/img/Poster.jpeg" class="img-fluid" style="border-radius: 15px; border: 3px solid  #006666;  max-width: 100%; height: auto;">
            </a>
        </div>
        <div class="row pt-3 ">
            <div class="col-md-6">
                <a href="/events/sanskrit/SANSKRIT%20-H%20(16-25%20APR%202022).pdf" target="_blank">
                    <img src="/events/sanskrit/img/cover (Small).jpg" class="img-fluid" style="border: 3px solid  #006666; width:90%; height: 100%">
                </a>
            </div>
            <div class="col-md-6 " style="text-align:right;">
                <a href="/camps/nainital/1.For Alok Da_Study Camp (2022) at Van Niwas-converted.pdf" target="_blank">
                    <img src="/camps/nainital/img/SC 376 Poster1 (Small).jpg" class="img-fluid" style="border: 3px solid  #006666; width: 90%; height: 100%; text-align:right;">
                </a>
            </div>
        </div>
    </div>
</section> -->

<?php if (count($future_events) > 0) : ?>
    <!-- <section id="events" class="home-section " style="background-color: #eee;"> -->
    <section id="events" class="home-section " style="background-color: var(--bg-darker);">
        <div class="container pb-6">
            <div class="row">
                <div class="col text-center mb-4 pb-3">
                    <h2>Happening Soon</h2>
                </div>
            </div>

            <!-- <div class="row justify-content-center pb-5" style="text-align:center;">
                <div class="col-12  col-md-6">
                    <a href="/social-initiative/current-projects/SANSKRIT -H (16-25 APR 2022).pdf" target="_blank" class="btn btn-lg btn-outline-secondary">
                        Sanskrit Workshop from 16-25 April 2022
                    </a>
                </div>
                <div class="col-12  col-md-6">
                    <a href="https://lifepositive.org/product/festival-of-healing-in-the-hills/ " target="_blank" class="btn btn-lg btn-outline-secondary">
                        Healing in the hills from 21-27 April 2022
                    </a>                    
                </div>
            </div> -->
            <div class="row gy-4 pt-3" style="justify-content: center;">
                <?php foreach ($future_events as $i => $event) : ?>
                    <!-- <div class="col-sm-12 col-md-6 col-lg-3"> -->
                    <div class="col-12 col-lg-3 col-md-6">
                        <div class="card <?php echo $event["type"] ?>">
                            <!-- IF THE PATH IS BLANK, DON'T INCLUDE HYPERLINK -->
                            <?php if ($event["path"] == "") : { ?>
                                    <a><img src="<?php echo $event["img"] ?>" class="card-img-top" alt="<?php echo $event["title"] ?>"></a>
                                    <div class="card-body">
                                        <h4><a><?php echo $event["title"] ?></a></h4>
                                        <h6><?php echo date_format(date_create($event['date']), "d M Y") ?></h6>
                                    </div>
                                <?php }
                            else : { ?>
                                    <?php if ($event["link"] == "") : { ?>
                                            <a href="<?php echo $event["path"] ?>"><img src="<?php echo $event["img"] ?>" class="card-img-top" alt="<?php echo $event["title"] ?>"></a>
                                        <?php }
                                    else : { ?>
                                            <a href="<?php echo $event["link"] ?>" target="_blank"><img src="<?php echo $event["img"] ?>" class="card-img-top" alt="<?php echo $event["title"] ?>"></a>
                                    <?php }
                                    endif; ?>

                                    <div class="card-body">
                                        <?php if ($event["link"] == "") : { ?>
                                                <h4><a href="<?php echo $event["path"] ?>"><?php echo $event["title"] ?></a></h4>
                                            <?php }
                                        else : { ?>
                                                <h4><a href="<?php echo $event["link"] ?>" target="_blank"><?php echo $event["title"] ?></a></h4>

                                        <?php }
                                        endif; ?>
                                        <h6><?php echo date_format(date_create($event['date']), "d M Y") ?></h6>
                                        <!-- <p class="card-text"><a href="<?php echo $event["path"] ?>"><?php echo $event["description"] ?></a></p> -->
                                    </div>
                            <?php }
                            endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<!-- PAST EVENTS IN DESC ORDER -->

<?php
uasort($events, function ($event1, $event2) {
    return strtotime($event2["date"]) - strtotime($event1["date"]);
});
$future_events = [];
$past_events = [];
?>

<?php $today = time(); ?>
<?php foreach ($events as $i => $event) : ?>
    <?php
    $event_dt = strtotime($event["date"]);

    // Get event date date object
    $date_event = date_create(date('d-m-Y', $event_dt));
    // Get today date object
    $date_today = date_create(date('d-m-Y', time()));
    // Get date difference object
    $diff = date_diff($date_today, $date_event);

    // Difference in days
    $diff_days = $diff->days;

    // If the date is from the past, multiply by -1 so it is negative
    if ($diff->invert) {
        $diff_days = $diff_days * -1;
    }

    if ($diff_days >= 0) {
        array_push($future_events, $event);
        // echo 'Future ' . $event["date"] . "Today : " . $today . "<br>";
    } else {
        array_push($past_events, $event);
        // echo 'Past ' . $event["date"] . "Today : " . $today . "<br>";
    }
    ?>
<?php endforeach;

$future_events = array_slice($future_events, 0, 50);
$past_events = array_slice($past_events, 0, 50);
?>

<?php if (count($past_events) > 0) : ?>
    <section id="events" class="home-section " style="background-color: #eee;">
        <div class="container">
            <div class="row">
                <div class="col text-center mb-4">
                    <h2>Recent / Past Events</h2>
                </div>
            </div>
            <div class="row mb-5">
                <?php foreach ($past_events as $i => $event) : ?>
                    <div class="col-12 col-lg-3 col-md-6">
                        <div class="card <?php echo $event["type"] ?>">
                            <!-- IF THE PATH IS BLANK, DON'T INCLUDE HYPERLINK -->
                            <?php if ($event["path"] == "") : { ?>
                                    <a><img src="<?php echo $event["img"] ?>" class="card-img-top" alt="<?php echo $event["title"] ?>"></a>
                                    <div class="card-body">
                                        <h4><a><?php echo $event["title"] ?></a></h4>
                                        <h6><?php echo date_format(date_create($event['date']), "d M Y") ?></h6>
                                    </div>
                                <?php }
                            else : { ?>
                                    <a href="<?php echo $event["path"] ?>"><img src="<?php echo $event["img"] ?>" class="card-img-top" alt="<?php echo $event["title"] ?>"></a>
                                    <div class="card-body">
                                        <h4><a href="<?php echo $event["path"] ?>"><?php echo $event["title"] ?></a></h4>
                                        <h6><?php echo date_format(date_create($event['date']), "d M Y") ?></h6>
                                        <p class="card-text"><a href="<?php echo $event["path"] ?>"><?php echo $event["description"] ?></a></p>
                                    </div>
                            <?php }
                            endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php require_once('../footer.php') ?>