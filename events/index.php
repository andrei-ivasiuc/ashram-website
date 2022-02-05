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

$today = time();

foreach ($events as $i => $event){
    $event_dt = strtotime($event["date"]);
    if ($today < $event_dt) {
        array_push($future_events, $event);
    } else {
        array_push($past_events, $event);
    }
}

$future_events = array_slice($future_events, 0, 20);
$past_events = array_slice($past_events, 0, 4);
?>

<?php if (count($future_events) > 0) : ?>
    <section id="future-events" class="home-section">
        <div class="container">
            <div class="row">
                <div class="col text-center mb-4">
                    <h2>Happening Soon</h2>
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
                    <h2>Past Events</h2>
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