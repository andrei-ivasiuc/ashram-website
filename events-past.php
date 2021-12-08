<?php require_once('header.php') ?>
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
    if ($today < $event_dt) {
        array_push($future_events, $event);
        //echo 'Future ' . $event["date"] . "Today : " . $today . "<br>";
    } else {
        array_push($past_events, $event);
        // echo 'Past ' . $event["date"] . "Today : " . $today . "<br>";
    }
    ?>
<?php endforeach;
// Take only 4 latest events
//$latest_events = array_slice($future_events, 0, 4);
//var_dump($future_events) 
?>

<?php if (count($past_events) > 0) : ?>
    <section id="events" class="home-section" style="background-color: #eee;">
        <div class="container">
            <div class="row">
                <div class="col text-center mb-4">
                    <h2>Past Events</h2>
                </div>
            </div>
            <div class="row mb-5">
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

<?php include_once("events.php") ?>


<!-- //Leap year logic
    <?php
    $y = date('Y', strtotime($event['date']));
    if (date('L', strtotime("$y-01-01"))) {
    ?>
        <h6><?php echo date_format(date_create($event['date']), "d M Y") ?></h6>
        <?php } else { ?>        
        <h6><?php echo '29 Feb ' . $y . 'Not a leap year';
        } ?> -->