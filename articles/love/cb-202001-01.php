<!DOCTYPE html>
<html lang="en">
<?php require_once('../../header.php') ?>

<?php

define("ARTICLES_NUMBER", 4);

$uri_path = parse_url($_SERVER['SCRIPT_NAME'], PHP_URL_PATH);
$uri_segments = explode('/', $uri_path);
$topic = $uri_segments[2];
$json = "../../articles/" . $topic . "/index.json";
// echo "topic" . $json;
if (!file_exists($json)) {
    return;
}
// Read json file with articles
$str = file_get_contents($json);

// Convert json into array
$articles = json_decode($str, true);

// Sort articles DESC
uasort($articles, function ($event1, $event2) {
    return strtotime($event2["date"]) - strtotime($event1["date"]);
});

// Take only 4 latest articles
$latest_articles = array_slice($articles, 0, ARTICLES_NUMBER);
?>

<?php if (count($latest_articles) > 0) : ?>
    <section id="articles" class="home-section" style="background-color: var(--bg-light)">
        <div class="container">
            <!-- <div class="row">
                <div class="col text-center mb-4">
                    <h2><?php echo strtoupper($topic); ?></h2>
                </div>
            </div> -->

            <div class="row mb-5 gy-5">
                <?php foreach ($latest_articles as $i => $article) : ?>
                    <?php
                    if (strcasecmp($article["file"], basename(__FILE__)) == 0) {
                        // echo ('match');
                        break;
                    } else {
                        // echo ('mismatch');
                    }
                    ?>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<body>
    <section class="header-horizontal dark" style="background-color: var(--bg-darker);">
        <div class="text-center  pt-5 pb-5">
            <h2><?php echo strtoupper($topic); ?></h2>
            <img src=<?php echo $article["img"]; ?>>
        </div>
    </section>
    <section class="event-text">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-sm-12 fs-5 ">
                    <h2> <?php echo  $article["title"] ?></h2>
                    <h1></h1>
                    <h3><?php echo $article["author"] ?></h3>
                    <h6><?php echo $article["source"] ?></h6>
                    <h6><?php echo date_format(date_create($article["date"]), "d M Y") ?></h6>
                    <hr>
                    <p>
                        Across all eras, cultures, religions, and spiritual traditions, the
                        greatest sages and leaders have all agreed on one Universal
                        principle: Change starts from within. There are many reasons
                        for this, and we’ll explore several.
                    </p>
                    <p>
                        The least of these is that we cannot control others. We can
                        only control ourselves. When we try to control others, we are
                        pushing against the current of life. We are trying to mold the
                        world into how we feel it should ideally be. Yet with 8 billion
                        people on the planet, how can any of us presume to individually
                        know what is best for another person? We can’t. No more than
                        we can expect others to know what is best for us. This is one
                        reason why so many people who try to “change the world”
                        end up frustrated or angry.
                    </p>
                    <p>
                        Sure, some of them make a difference. Some make a huge
                        difference. Those who make the biggest difference are coming
                        from a solid foundation within themselves. Generally, they
                        aren’t fighting out with anger towards an unjust world. They
                        aren’t trying to conquer the world. In a way, they’re trying to
                        conquer themselves and the world is changed as a consequence
                        of who they become in that process.
                    </p>
                    <p>
                        That leads into another challenge we often face. Many people
                        who want to change the world do so out of a sense of lack.
                        There’s a part of them that feels deficient or lacking and they
                        don’t want to feel that experience. Instead, they subconsciously
                        hope that if they can get everybody else in the world to change
                        and be like them, then they won’t have to feel their own
                        deficiencies. The quiet hope is that by projecting all of their
                    </p>
                    <p>
                        attention and energy outwards towards others, they won’t
                        have any energy to focus attention inwardly at their feelings
                        of shame, inadequacy, futility, or helplessness. Nobody wants
                        to feel those difficult and sometimes painful emotions, yet
                        they miss the hypocrisy inherent when they try to get others to
                        change those experiences when they are unwilling to do it for
                        themselves.
                    </p>
                    <p>
                        When thinking about emerging victorious in life, it’s also
                        important to understand the nature of change...
                        Change is rarely revolutionary. The “large leaps” in
                        consciousness are extremely rare. More often than not, they
                        are preceded by many small steps. Hundreds. Thousands.
                        Maybe millions. All small steps leading towards a particular
                        outcome. Those small steps start from within. When we try to
                        only change the outer world, we’re skipping those small steps.
                        We’re trying to get other people to “do the work” for us.
                    </p>
                    <p>
                        The thing to understand is this:
                        When we reach a roadblock or challenge, something that
                        “knocks us back,” it will knock us back to our highest and
                        strongest foundation that we’ve developed. We can either
                        be a slave to this universal law, or we can leverage it to our
                        advantage.
                    </p>
                    <p>
                        If you are going for the “big jump,” you are creating a big space
                        in which you can be knocked back. If you’re trying to change
                        the world without changing yourself first, then the result
                        of getting knocked back can actually throw you off course
                        completely.
                    </p>
                    <p>
                        If your inner foundation isn’t solid, you might even be unable
                        to continue forward. This is because there was no foundation
                        to fall back on. No grounding. You just have a giant canyon
                        between where you are and the last solid step you took. On
                        the other hand, If you’ve taken small incremental steps, and
                        specifically created an inner foundation, then challenges don’t
                        have as far to knock you back. You get metaphorically knocked
                        back by a few feet instead of several miles. At worst, you might
                        have to step back over a crack or large hole, though fortunately
                        not a canyon. Each small inner step creates that solid foundation
                        from which you can launch into the next small step.
                        Most people believe that the biggest changes happen because
                        of what you do. This is one of the biggest limiting beliefs that
                        cause us to act out in the world when we want things to be
                        changed.
                    </p>
                    <p>
                        This is where people often start, and it’s...Backwards.
                        While it’s true we usually need to take action to impact others,
                        the biggest changes happen in the world because of who you
                        are. They happen because of the Presence you bring to the
                        world. People can sense your energy, intention, and internal
                        state. This energy you put out significantly affects how people
                        will respond to you. If you really get this, if you live it, then
                        it’s possible to inspire change in the world without doing
                        anything other than being yourself. (That’s not to say action
                        doesn’t matter. It does. It’s just inherently limited.)
                        For example, when you are angry and forceful, when you are
                        frustrated and trying to force the world to change, people
                        can feel that. If not consciously, deep down they know it.
                        This activates their inner defence mechanisms. They become
                        defensive because anger and hostility are present. They want
                        to avoid the unconscious threat they are perceiving, and so
                        they will actually create resistance against whatever changes
                        you’re trying to get them to make. This makes it very difficult
                        to change the world.
                    </p>
                    <p>
                        On the other hand, if you’ve done the inner work to create
                        a space of peace, calm, and compassion within yourself,
                        people also sense that. They understand that when you make
                        recommendations or seek to change the world, you’re coming
                        from a place of compassion and positive intentions. They can
                        sense that what you want is for the best of everybody, including
                        others, and including them specifically. This helps people open
                        up and be receptive to the changes you want to bring forth in
                        the world because they feel safe.
                    </p>
                    <p>
                        To put it in a different perspective, when change is focused
                        purely on the outside world, most often that’s coming from
                        a place of selfishness. Selfishness is based on feelings of lack,
                        fear, and insecurity. On the other hand, when you come from
                        a place of inner stillness and connection, when you change
                        within yourself the aspects of the world you don’t like, you’re
                        coming from a place of selflessness, confidence, and safety.
                        You’re sending a message to the world that there is enough and
                        you’re going to step into life courageously. From that place,
                        you can be an example for others. You can be a literal model
                        that they learn from and seek to become like.
                    </p>
                    <p>
                        And, above all else, you’re putting out into the world the
                        energy you want to receive back: Love, support, compassion,
                        and wishes for us all to co-create a better world. Not just for
                        yourself, but for everyone. And when everybody is on board
                        with change, it makes the successes that much sweeter... :)
                    </p>
                    <p>
                        Be the miracle you want to see in the world.
                    </p>
                    <hr>
                    <p>
                    <h6>
                        Received in an e-mail dated 2 December 2019. Reproduced by permission.
                        Chris reaches hundreds of thousands of people worldwide in over 150 countries.
                        Chris Cade can be reached on chris@chriscade.com
                    </h6>
                    </p>
                    <hr>
                </div>
            </div>
        </div>
    </section>
</body>

</html>