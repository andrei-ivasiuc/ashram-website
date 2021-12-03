<?php

if(!file_exists("events/index.json")){
    return;
}

// Read json file with events
$str = file_get_contents("events/index.json");

// Convert json into array
$events = json_decode($str, true);

// Sort events DESC
uasort($events, function ($event1, $event2) {
    return strtotime($event2["date"]) - strtotime($event1["date"]);
});

// Take only 4 latest events
$latest_events = array_slice($events, 0, 4);
?>

<?php if (count($latest_events) > 0) : ?>
    <section id="events">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3>Events</h3>
                </div>
            </div>
            <div class="row" id="event-container">
                <?php foreach ($latest_events as $i => $event) : ?>
                    <div class="col-12 col-lg-3 col-md-6">
                        <div class="card">
                            <a href="<?php echo $event["path"] ?>"><img src="<?php echo $event["img"] ?>" class="card-img-top" alt="<?php echo $event["title"] ?>"></a>
                            <div class="card-body">
                                <h4><a href="<?php echo $event["path"] ?>"><?php echo $event["title"] ?></a></h4>
                                <p class="card-text"><a href="<?php echo $event["path"] ?>"><?php echo $event["description"] ?></a></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>