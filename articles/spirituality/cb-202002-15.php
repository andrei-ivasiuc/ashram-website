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
    <div class="text-center  pt-5 pb-5">
        <h2><?php echo strtoupper($topic); ?></h2>
        <img class="img-fluid p-5" src=<?php echo $article["img"]; ?>>
    </div>
</section>
<section style="background-color: var(--bg-darker);">
    <div class="container">
        <div class="row justify-content-center pb-3">
            <div class="col-lg-8 col-sm-12 fs-5">
                <h2> <?php echo  $article["title"] ?></h2>
                <h1></h1>
                <h3><?php echo $article["author"] ?></h3>
                <h6><?php echo $article["source"] ?></h6>
                <h6><?php echo date_format(date_create($article["date"]), "d M Y") ?></h6>
                <br>
                <p>
                    When I joined the Course on Teaching Yoga at Sri Aurobindo
                    Ashram – Delhi Branch, in August 2019, right in the first week
                    I was told, “This course changes every individual who joins
                    the course.” This prediction certainly came true for me, and
                    what I have observed in addition is that the change affects not
                    just the individual, but those who are around her too. This
                    could be called the ‘ripple effect of spirituality.’
                </p>
                <b>
                    How to understand spirituality</b>
                <p>
                    Spirituality, spiritual, being spiritual, following spiritual
                    practices…. There is a whole collection of words and phrases
                    using the term ‘spiritual’. There is of course, the dictionary
                    definition, but by exploring the individual’s understanding
                    of spirituality, we can try and discover what spirituality is
                    as a living, breathing practice; what it means to us as people,
                    as individuals and as part of society. This naturally, leads
                    to the conclusion that Spirituality may mean different things to
                    different people.
                </p>
                <p><i>
                        What relevance does spirituality and the householder’s life have in
                        terms of societal context?</i></p>
                <p>
                    From the moment we are born till the moment we leave this
                    life, we are brought in contact with the Divine. When we visit
                    a place of worship, when an elder blesses us, at the altar in
                    the pooja room of the house, the little altar in an auto or taxi,
                    the lyrics of a devotional song wafting through our busy,
                    chaotic lives ... we are reminded of the presence of the Divine
                    everywhere, all the time.
                </p>
                <p>
                    Is our understanding of spirituality defined by the
                    relationships we have? For many of us the answer is, yes. It
                    is our relationships in the spheres of home, family, extended
                    family, work, friends and daily interactions with strangers in
                    our everyday life that compel us to act, respond and react but
                    without a script to prompt or guide us. We could however, say
                    that our lives and we ourselves are Divine work, so the script
                    is already written but we are not consciously aware of it.
                    But how does this Divine work happen and what is spiritual
                    about it? This work or change happens at the deepest levels
                    of our being but it is reflected in the ‘external person’ we
                    start to become. It is in our thoughts, our actions, our views
                    and opinions, our attitude to the ups and downs in our
                    everyday lives, and the language that we begin to use to
                    express ourselves.
                </p>
                <p>
                    <b>Strengthening the spiritual focus</b>
                <p>
                    Based on the Vedas, the Indian culture has identified four
                    stages of life: the celibate student, the householder, the person
                    who withdraws gradually from involvement in everyday
                    life, and the renunciate, who leaves all worldly ties to see the
                    Divine alone.
                </p>
                <p>
                    While times have changed, there is a general similarity in the
                    direction our lives take even today to the stages described
                    long ago. We start life, experience childhood, adolescence and
                    youth as individuals who focus on ourselves. We then get
                    married, start families and work to provide for the families
                    we have created and for our parents. As our children grow up
                    and start moving away, we focus again on gradually retreating
                    from family life, and start preparing for old age and loneliness.
                    The last phase is when we take time to reflect on our lives,
                    how we have lived our lives, our actions, our lessons and we
                    begin to focus on the Divine more and more.
                </p>
                <p>
                    Each phase of our life builds on the period before it. We gain
                    wisdom from the lessons learned in each phase. Often, we are
                    rushing through the motions of life. The lessons come only
                    later when we find time to pause and reflect. This is when
                    we begin to understand the significance of each experience,
                    each challenge and recognise the opportunities for our own
                    spiritual growth throughout life.
                </p>
                <p>
                    An example from my life is how I have matured in handling
                    friendships. In my twenties, friendships were more about
                    avoiding loneliness, being part of a group and trying to be
                    ‘seen’ by others in some way. Now in my fifties, friendships
                    are for finding shared values in life and accepting each other
                    without judgement and seeing each friend as a fragment of
                    the Divine.
                </p>
                <p>
                    In my early thirties, being an individual, being different from
                    others seemed to be such an important focus in life and work.
                    Now, I see myself as less separate from others. The boundaries
                    created merge into a space of oneness and unity. I see that, in
                    reality, there is little that separates us all.
                </p>
                <p>
                    There was a time when I felt that it was important to establish
                    what was right and wrong, especially if I was ‘in the right’.
                    My desire to create a fairer, more just, more correct view of
                    life required that I shame those who were being unfair, not
                    following their civic duties or being unprofessional. Now,
                    I opt for a more ‘we’ approach rather than a ‘I vs. you’
                    approach and share my understanding of what I see as the
                    ‘right action for all.’
                </p>
                <p>
                    This is also when our sadhana and relationship with the Divine
                    changes. It grows and matures. We begin to understand what
                    Spirituality means to us as individuals. If we define sadhana
                    as our total relationship with God, rather than just time spent
                    in meditation or prayer, then we see that the Divine has a
                    lesson for us each step of the way. I have learned to look upon
                    every challenge in life as an opportunity for spiritual growth.
                    Even if the element of growth is not immediately visible or
                    evident, I must trust that it is there.
                </p>
                <p>
                    As a householder, we shouldn’t push away personal ties, but
                    we shouldn’t become attached to them either. We must never
                    forget that the only Reality is the eternal presence of the Divine
                    behind all of life’s experiences and we are mere instruments.
                    When we find ourselves in challenging situations, we can ask
                    ourselves the following questions:
                </p>
                <p>
                <ul>
                    <li>Is our intention pure, selfless and born out of love?

                    <li> What role is our ego playing?</li>
                    <li> Is our intention based on truth?</li>
                    <li>Will our intention result in an everlasting peace? </li>
                </ul>
                </p>
                <p>
                    When we are able to answer these prompts then, we can believe
                    that our action is the right action and is in the spirit of Dharma.
                </p>
                <p>
                    Life as it is, and the practice of yoga, make us more receptive
                    to becoming more spiritual. Being present and aware of the
                    divine purpose of life removes all social conditioning so that
                    we can get in contact with that Supremely Intelligent Divine
                    that has created this vast universe but also resides within the
                    core of our hearts.
                </p>
                <h6>
                    <hr>
                    <p>
                        Ayesha Sarkar was a student in the Course on Teaching Yoga conducted by Sri
                        Aurobindo Ashram – Delhi Branch in 2019. This article was submitted by her
                        as an assignment during the course.
                    </p>
                    <hr>
                    <p>
                        Since we have decided to reserve love in its full splendour for our
                        personal relation with the Divine, we shall, in our relation with
                        others, replace it by a whole hearted, unchanging, constant and
                        egoless kindness and goodwill.
                    </p>
                    <p>&mdash; The Mother (in ‘Four Austerities and Four Liberations’) </p>
                </h6>
            </div>
        </div>
    </div>
</section>
<?php require_once('../../footer.php'); ?>