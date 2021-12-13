<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/header.php') ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/gallery.php') ?>

<section class="event-header" style="background-color: #eee;">
    <div class="container pt-5 text-center">
        <h5>November 4, 2021</h5>
        <h1>Diwali - Festival of Light</h1>
        <div class="sa-img mt-5">
            <img src="./img/DSC_8369.jpg" ;>
        </div>

    </div>
</section>

<section class="event-text">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-sm-12 fs-5 p-5">
                <p>Diwali is a festival of lights and one of the major festivals celebrated by Hindus, Jains, Sikhs and some Buddhists, notably Newar Buddhists. The festival usually lasts five days and is celebrated during the Hindu lunisolar month Kartika (between mid-October and mid-November). One of the most popular festivals of Hinduism, Diwali symbolizes the spiritual "victory of light over darkness, good over evil, and knowledge over ignorance". The festival is widely associated with Lakshmi, goddess of prosperity, with many other regional traditions connecting the holiday to Sita and Rama, Vishnu, Krishna, Yama, Yami, Durga, Kali, Hanuman, Ganesha, Kubera, Dhanvantari, or Vishvakarman. Furthermore, it is, in some regions, a celebration of the day Rama returned to his kingdom Ayodhya with his wife Sita and his brother Lakshmana after defeating Ravana in Lanka and serving 14 years of exile.</p>

            </div>
        </div>
    </div>
</section>

<section class="event-gallery">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-sm-12 fs-5 p-5 text-center">
                <h2 class="pb-5">Gallery</h2>
                
                <?php gallery("../../events/diwali/img", 5); ?>
            </div>
        </div>
    </div>
</section>