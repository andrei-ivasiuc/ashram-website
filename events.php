<?php

if (!file_exists("events/index.json")) {
    return;
}

// Read json file with events
$str = file_get_contents("events/index.json");

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
// Take only 3 latest events
$latest_events = array_slice($future_events, 0, 4);
// var_dump($future_events) ;
// echo "<br>". "laetst" ;
// var_dump($latest_events);
?>

<?php include_once("workshop.php");?>
<?php if (count($latest_events) > 0) : ?>
    <section id="events" class="home-section" style="background-color: var(--bg-darker);">
        <div class="container" style="justify-content:center;">
            <div class="row">
                <div class="col text-center mb-5">
                    <h2>Happening Soon</h2>
                </div>
            </div>

            <div class="row  mb-5" style="justify-content: center;">
                <?php foreach ($latest_events as $i => $event) : ?>
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
                                        <p class="card-text"><a href="<?php echo $event["path"] ?>"><?php echo $event["description"] ?></a></p>
                                    </div>
                            <?php }
                            endif; ?>
                        </div>


                    </div>
                <?php endforeach; ?>
            </div>
            <div class="row">
                <div class="col text-center">
                    <a href="/events" class="btn btn-lg btn-primary">See All Events</a>
                    <!-- <a href="/events#past-events" class="btn btn-lg btn-outline-secondary">Past Events</a> -->
                    <a href="events-past.php" class="btn btn-lg btn-outline-secondary">Recent / Past Events</a>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>