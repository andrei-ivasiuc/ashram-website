<?php

require_once('header.php');
if (!file_exists("events/index.json")) {
    return;
}

// Read json file with events
$str = file_get_contents("events/index.json");

// Convert json into array
$events = json_decode($str, true);

// Sort events DESC
// uasort($events, function ($event1, $event2) {
//     return strtotime($event1["date"]) - strtotime($event2["date"]);
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
<?php require_once('footer.php'); ?>

<!-- //Leap year logic
PHP has a number of formatting placeholders for the date() function. 
One of these is "L" which returns 1 if it’s a leap year, and 0 if it is not.
    <?php
    $y = date('Y', strtotime($event['date']));
    if (date('L', strtotime("$y-01-01"))) {
    ?>
        <h6><?php echo date_format(date_create($event['date']), "d M Y") ?></h6>
        <?php } else { ?>        
        <h6><?php echo '29 Feb ' . $y . 'Not a leap year';
        } ?>
 -->