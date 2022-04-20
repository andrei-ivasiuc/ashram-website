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
    <?php foreach ($latest_articles as $i => $article) : ?>
        <?php
        // If the opened file matches json entry, pick title and author
        if (strcasecmp($article["file"], basename(__FILE__)) == 0) {
            // echo ('match');
            break;
        } else {
            // echo ('mismatch');
        }
        ?>
    <?php endforeach; ?>
<?php endif; ?>

<section style="background-color: var(--bg-darker);">
    <div class="text-center  pt-5 ">
        <h2><?php echo strtoupper($topic); ?></h2>
        <img class="img-fluid p-5" src=<?php echo $article["img"]; ?>>
    </div>
</section>
<section style="background-color: var(--bg-darker);">
    <div class="container">
        <div class="row justify-content-center pb-3">
            <div class="col-lg-8 col-sm-12 fs-5 ">
                <h2> <?php echo  $article["title"] ?></h2>
                <h1></h1>
                <h3><?php echo $article["author"] ?></h3>
                <h6><?php echo $article["source"] ?></h6>
                <h6><?php echo date_format(date_create($article["date"]), "d M Y") ?></h6>
                <hr>
            </div>
        </div>
        <div class="row justify-content-center mt-3 mb-4" style="vertical-align: middle;">
        <div class="col-lg-8 justify-content-center">
            <div >
                <img class="article-img img-fluid" src="./img/Calotropis gigantea.jpg">
            </div>
            <div >
                <p class="fs-5">
                    <b>Calotropis gigantea </b>
                </p>
                <p class="fs-6">
                    Calotropis gigantea (Common
                    names: Mudar, Bowstring hemp,
                    Crown plant)
                </p>
                <p>
                    Courage. Bold, it faces all dangers.
                </p>
            </div>
        </div>
        </div>
        <div class="row justify-content-center" style="vertical-align: middle;">
            <div class="col-lg-8 mb-4 col-sm-12 fs-5">
                <p>
                    Even a five-year-old knows what the right thing to do is, but
                    even a fifty-year-old – and specially a fifty-year-old – often
                    lacks the courage to do it. An act of courage may involve a
                    risk. For example, a fireman needs courage to enter a burning
                    building to rescue those trapped inside. An act of courage,
                    such as confessing a crime one has committed, may invite
                    punishment. An act of courage, such as whistle-blowing, may
                    invite revenge. Doing what is right frequently means stepping
                    out of our comfort zone. Courage is the inner strength required
                    to do what is right, even if it is uncomfortable.
                </p>
                <p>
                    Doing what is right, knowing fully well the risks involved, is
                    one type of courage. There are many other types of courage
                    where there may be no serious risk involved. For example,
                    saying something true but unpleasant to a friend needs
                    courage. When the unpleasant truth will do the friend no
                    good, not saying it may need still greater courage! Courage
                    may reside in action; courage may reside in inaction.
                </p>
                <p>
                    Courage is required for not taking action when it is very tempting
                    to act. Once a child complained to the Mother of being bullied
                    by a classmate. He told the Mother that he felt like punching
                    that boy. The boy was not actually punching probably because
                    he was afraid of the teacher. The Mother asked him whether it
                    was more difficult to punch him, or to forgive him. The child
                    said it was more difficult to forgive than to give way to the
                    impulse. The Mother told him that since he was a brave boy,
                    he should do what is more difficult. The Mother was trying
                    to teach the child that if somebody has hurt us, it requires
                    greater courage to forgive than to hit back. The Mother was
                    trying to take the child from the restraint due to fear towards
                    restraint born in forgiveness. Forgiveness is an act of courage.
                    If we keep away from hitting back simply because we are
                    afraid, the failure to act is either cowardice or pragmatism,
                    but it certainly is neither courage nor forgiveness. Genuine
                    forgiveness is based not on fear but on love. Fear needs two,
                    the one who fears, and another of whom one is afraid. Fear
                    not only needs two, it also needs an acute awareness of the
                    two being two. Love also needs two, the one who loves, and
                    another who is loved. Love needs two, but it arises from the
                    two feeling as if they are one.
                </p>
                <p>
                    When a person, who is patently wrong, is confronted, what
                    is the most common response? The most common response
                    is to go on the defensive; to justify oneself. The defense is
                    unconvincing; the justification is hollow; the person knows
                    it, and yet he goes on arguing. A classic example of this type
                    is the way most people behave when caught cheating on the
                    partner. They deny the charge, they defend their behaviour,
                    they do everything except admit the mistake and apologize.
                    What is behind such behaviour is the person’s ego. Transcending
                    the ego and admitting one’s mistake is an act of courage.
                </p>
                <p>
                    Gary Zukav has summed up the essence of courage in a simple
                    sentence: “Courage is required when will and fear intersect.”*
                    If the will power is so strong that fear can be ignored, the
                    person acquires the courage to do what he wants to do; if the
                    fear of consequences overpowers the will, the person loses
                    the courage required for doing what he wants to do. This
                    broad perspective enables us to look at a wide spectrum of
                    ‘courage’, not all of which is desirable, and much of which is
                    not spiritual. Throwing a shoe at a leader may seem an act of
                    courage but is foolhardy. It takes courage to do a stunt for a
                    movie, but that may be done just to make a living. Climbing
                    the Everest is an act of courage, but it may be driven by the
                    desire to be admired, to win name and fame. A child may
                    jump into an ice-cold pool when his other friends are doing
                    so, just to be accepted by the peer group. That is courageous,
                    but it is not a spiritual act. But if the child jumps into an
                    ice-cold pool to save someone who is drowning, that would
                    be a spiritual act. When Krishnan, who had a job offer from
                    a five-star hotel in Switzerland, decided not to go there a
                    week before he was to leave India so that he could feed the
                    hungry homeless people of Madurai, it was an act of spiritual
                    courage. In short, what makes courage spiritual is the motive
                    behind the act and its consequences. If the motive is love, and
                    the result is a rise in consciousness, the courage is spiritual in
                    character. Choices rooted in true love bring with them the
                    courage required to act. This happens because these choices
                    are endorsed by the psychic being. The psychic being is our
                    divine essence. The Divine is not only all-knowing, it is also
                    all-powerful. Because of its all-knowing character, the choice
                    that is given to us by our inner voice originating from the
                    psychic being is extremely clear; it leaves us with no doubt
                    about what the right thing to do is. Because of the all-powerful
                    character of the Divine, if we decide to act on the voice of the
                    psychic being, we also acquire the courage to act upon it. It is
                    this psychic courage that made it easy for Krishnan not only
                    to give up a lucrative job, but also to defy his parents and
                    other well-wishers. The psychic courage makes it easy for the
                    person to stand up to the whole world, if necessary.
                </p>
                <p>
                    One of the three pillars of sadhana on the spiritual path is
                    ‘rejection’ – rejection of everything that is an obstacle on the
                    path. The obstacles are more within than outside. All the
                    negative tendencies arising from the ego, such as desires,
                    anger, greed, attachment, arrogance and jealousy, need to be
                    rejected, and should be replaced by their opposites. But we
                    are so attached to our negative tendencies that it takes great
                    courage to root them out. Thus, being on the spiritual path is
                    itself an act of great courage. Being on the spiritual path shown
                    by The Mother and Sri Aurobindo is an act of still greater
                    courage because Their path does not insist on renunciation
                    of worldly life; rather, it encourages engaging with the world
                    with love and compassion. Their path does not have a onepath-
                    fits-all approach; on Their path each seeker has to carve
                    out her own path. Their path is not the well-trodden path;
                    it is an adventure into uncharted territory. Their path is not
                    for individual salvation; it is for individual transformation
                    aimed at collective upliftment. Therefore, Their path is not for
                    the timid or fainthearted. Hence, one of the prayers that the
                    Mother has given us reads: “Make of us the hero warriors we
                    aspire to become. May we fight successfully the great battle
                    of the future that is to be born, against the past that seeks to
                    endure; so that the new things may manifest and we may be
                    ready to receive them.”
                </p>
                <p>
                    <hr>
                <h6>
                    *Gary Zukav: Spiritual Partnership – the Journey to Authentic Power.
                    London: Rider, 2010, p. 160.
                </h6>
                </p>
            </div>
        </div>
    </div>
</section>
<?php require_once('../../footer.php') ?>