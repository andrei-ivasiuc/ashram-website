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
    <div class=" container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-sm-12 fs-5 pb-3 ">
                <h2> <?php echo  $article["title"] ?></h2>
                <h1></h1>
                <h3><?php echo $article["author"] ?></h3>
                <h6><?php echo $article["source"] ?></h6>
                <h6><?php echo date_format(date_create($article["date"]), "d M Y") ?></h6>
                <hr>
                <p>
                    Once upon a time when I was seven years old, my mother read
                    an article on Enid Blyton. It condemned her books as unworthy
                    fare, poor in literary nourishment; as bad for the psyche as
                    sweets for the teeth. Eager to obey the experts, my mother sold
                    all my Enid Blyton books to the kabari. She replaced them with
                    classics like Tom Sawyer and Treasure Island and some dulllooking pictureless tales from ancient India. Most of these
                    books were still new and untouched a month later when I
                    celebrated my eighth birthday. To my delight – and my mother’s
                    disappointment – I acquired a whole pile of Enid Blyton books
                    as birthday gifts!
                </p>
                <p>
                    So, my mother’s attempt at literary guidance wasn’t a success.
                    But then the choice before her was limited. Today, nearly three
                    decades later, my sons are luckier than I was. … … Enid Blyton
                    is still popular but so are Shankar, Satyajit Ray, Tara Ali Baig,
                    Ruskin Bond, and so many other Indian writers in whose stories
                    our children can discover the fun, the adventure and the values
                    of their own lives. … And in the last 20 years, folk tales from
                    every part of the country and stories from Indian mythology
                    have been specially rewritten and illustrated for children.
                    The best gift we can give our children is time; and there are
                    few better ways of spending time with children than reading
                    to them. My husband and I started reading and singing to our
                    boys nursery rhymes in English and Hindi when they were
                    a few months old. … We began turning the pages of brightly
                    coloured picture books with the boys as soon as they could sit
                    up. … A little later, simple animal tales with plenty of pictures,
                    like Dr. Bhondoo Dentist, Mahagiri and Little Tiger, Big Tiger
                    became a regular bedtime habit. … …
                </p>
                <p>
                    As a mother of two, and aunt of many, over the years I have
                    discovered one golden rule when reading aloud to children.
                    Never read a book that you don’t enjoy yourself. Enthusiasm,
                    like boredom, is infectious. … A love of books needs to be caught
                    rather than taught. When you read aloud a book you cherish,
                    you convey your enthusiasm not only for that particular story
                    but for the whole delightful business of reading and re-reading.
                    … …
                </p>
                <p>
                    Which book suits which child at what age? This question
                    often perplexes parents. What I have found very helpful is a
                    bibliography published by the Children’s Book Trust (CBT)
                    which divides most of the children’s books published in India,
                    according to language, into three broad categories – for the
                    under fives, the five to tens, and the eleven to sixteens, and
                    gives a brief description of each. Some other publishers like
                    Thomson Press and National Book Trust (NBT) also specify the
                    age group for which their books are intended.
                </p>
                <p>
                    It is wise to remember that children have their likes and dislikes
                    where books are concerned just as we do. Pratibha Nath, teacher
                    turned full-time children’s book writer, recalled a bright tenyear old in her class who wasn’t in the least interested in the
                    fairy tales his classmates read so avidly. Once, during the library
                    hour, when the class was discussing a story from the Panchtantra,
                    he got up and said, “How can crows ask a fox for help? Birds
                    don’t talk like we do.” Something clicked in Pratibha’s head. At
                    the end of the class, she pulled out the Man-Eaters of Kumaon by
                    Jim Corbett and said, “Vikram, read this. I think you will like it.”
                    He did. Vikram read more books on wildlife by Jim Corbett and
                    went on to enjoy Kenneth Anderson and Joy Adamson. He had
                    discovered a new interest and Pratibha a budding naturalist.
                </p>
                <p>
                    Even the brightest children will only have time to read a few
                    hundred of the excellent books written for them all over the
                    world. So getting stuck in a reading rut seems such a waste of
                    time. It is all right if they start with something undemanding,
                    as long as they move on. The trick is to offer them something
                    richer every time.
                </p>
                <p>
                    If you want your child to develop the habit of reading, help
                    him to build up a library of his own. A modest basic library
                    need not cost more than Rs. 150. Most Indian children’s books,
                    paperback as well as hardcover, cost between Rs. 1.50 and Rs.
                    15.* … Give your child a shelf or better still a book case to house
                    his collection. Book cases made of cane are light, sturdy and
                    inexpensive. He might also need a table lamp and an extra
                    pillow. The fix a time for bed but not for “lights out.” In this
                    way, you would have carved for your child a perfect space of
                    reading time out of the school-ridden, homework-haunted,
                    television-distracted day.
                </p>
                <p>
                    <hr>
                <h6>
                    <p>
                        From Live Better, Feel Better. R.D.I. Print and Publishing Pvt. Ltd.
                        <br>
                        Excerpted from The Call Beyond, Vol. 20, No. 2, pp. 41-43, 1995
                    </p>
                    <p>
                        *Editor’s comment: The prices prevailing 25 years ago have, in themselves,
                        some entertainment value today!
                </h6>
                </p>
            </div>
        </div>
    </div>
</section>
<?php require_once('../../footer.php') ?>