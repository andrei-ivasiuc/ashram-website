<section class="home-section" style="background-color: var(--bg-light);">
    <div class="container">
        <div class="row">
            <div class="col text-center mb-5">
                <h2>Upcoming Programmes</h2>
            </div>
        </div>
        <?php
        $prog1 = strtotime(date('Y-m-d', strtotime('2022-04-15')));
        $prog2 = strtotime(date('Y-m-d', strtotime('2022-04-17')));
        $prog3 = strtotime(date('Y-m-d', strtotime('2022-04-16')));
        $prog4 = strtotime(date('Y-m-d', strtotime('2022-04-18')));
        $prog5 = strtotime(date('Y-m-d', strtotime('2022-04-21')));
        $prog6 = strtotime(date('Y-m-d', strtotime('2022-06-02')));

        $currentDate = strtotime(date('Y-m-d'));

        // if ($prog1< $currentDate) {
        //     echo 'date1 is in the past';
        // }
        ?>
        <div class="row pb-5 justify-content-center">

            <?php if ($prog2 >= $currentDate) {  ?>
                <div class="card p-4" style="width: 30rem; background-color:#ebe2da">
                    <div class="card-body">
                        <a href="/events/talks/erp_2022.4.13.pdf" target="_blank" style="text-decoration:none">

                            <p class="card-text">Click to see the Program schedule</p>
                            <h4 class="card-title"><b>Weekend Talks</b></h4>
                            <!-- <h6 class="card-subtitle mb-2 text-muted"><b>Dr. Alankar Singh - Vocal </b></h6> -->
                            <!-- <p style="color:black">Shri Sandeep Singh - Dilruba and Vocal Support </p>
                                <p style="color:black">Shri Narindar Pal Singh - Tabla </p> -->
                            <p>
                                <?php if ($prog1 >= $currentDate) {  ?>
                                    <h5 class="card-text" style="color:black">Fri, 15th April, 2022, 5 PM - ONLINE</h5>
                                <?php } ?>
                                <h5 class="card-text" style="color:black">Sun, 17th April, 2022, 10 AM </h5>
                            </p>
                            <!-- <p class="card-link" style="color:black">Meditation Hall, Delhi Ashram</p> -->
                        </a>
                    </div>
                </div>


                <!-- <div class="col-md-8"> -->
                <!-- <div class="card p-3" style="width:50rem; background-color:#ebe2da">
                        <div class="card-body">
                            <p class="card-text"><b>Online Talk </b></p>
                            <p>under the banner, YES (Yoga, Education and Spirituality), a project celebrating the 150th Birth Anniversary of Sri Aurobindo</p>
                            <h4 class="card-title"><b>Insights into COVID-19</b></h4>
                            <h6 class="card-subtitle mb-2 text-muted"><b>Speaker: Prof. Anurag Agarwal, M.D., Ph.D.</b></h6>
                            <p><i> Dean, Biosciences and Health Research, Trivedi School of Biosciences, Ashoka University, India. Formerly, Director, Institute of Genetics and Immunobiology, New Delhi. </i></p>

                            <p> In this talk, the speaker will take stock of the key learnings, the likely path towards normal lives, and the challenges therein.
                            </p>
                            <h5 class="card-text">Fri, 8th April 2022, 5 pm (IST)</h5>
                            <a href="https://us02web.zoom.us/j/6082144500?pwd=dHJLWUNqcTlJR25JTnBJYzdjVG5OQT09" target="_blank">
                                <h4>Launch Meeting </h4>
                            </a>
                            Meeting ID: 608 214 4500, Passcode: 8kPJG6
                        </div>
                    </div> -->
                <!-- </div> -->
            <?php } ?>

            <?php if ($prog2 >= $currentDate) {  ?>

                <!-- <div class="col-md-4"> -->

                    <!-- <div class="card p-4" style="width: 30rem; background-color:#ebe2da">
                        <div class="card-body">
                            <p class="card-text">Sunday Satsang</p>
                            <h4 class="card-title"><b>Synthesis</b></h4>
                            <h6 class="card-subtitle mb-2 text-muted"><b>Speaker: Dr. Mankul Goyal</b></h6>
                            <h6> (Based on Sri Aurobindo’s The Synthesis of Yoga, Chapter 5) </h6>
                            <h5 class="card-text">Sun, 10th April, 2022, 10 AM</h5>
                            <br>
                            <h6 class="card-subtitle mb-2 text-muted">Music offering by <b>Dr. Maitreyee Karak </b> </h6>
                            <br>
                            <p class="card-link">Meditation Hall, Delhi Ashram</p>

                        </div>
                    </div> -->
                    <!-- <div class="card p-4" style="width: 30rem; background-color:#ebe2da">
                        <div class="card-body">
                            <a href="/events/baisakhi/13th April 2022.pdf" target="_blank" style="text-decoration:none">

                                <p class="card-text">MUSICAL OFFERING</p>
                                <h4 class="card-title"><b>Baisakhi 2022</b></h4>
                                <br>
                                <h6 class="card-subtitle mb-2 text-muted"><b>Dr. Alankar Singh - Vocal </b></h6>
                                <p style="color:black">Shri Sandeep Singh - Dilruba and Vocal Support </p>
                                <p style="color:black">Shri Narindar Pal Singh - Tabla </p>
                                <p>
                                    <h5 class="card-text" style="color:black">Wed, 13th April, 2022, 7.00-7.45 PM</h5>
                                </p>
                                <p class="card-link" style="color:black">Meditation Hall, Delhi Ashram</p>
                            </a>
                        </div>
                    </div> -->
                <!-- </div> -->
            <?php } ?>
        </div>

        <!-- <div class="col-lg-8 col-sm-12 fs-5" style="display: block; text-align: right">
                <a href="/events/mother-first-arrival/29th March 2022.pdf" target="_blank" class="btn btn-lg btn-outline-secondary">Program Schedule</a>
            </div> -->
        <div class="row pb-5 justify-content-center">
            <?php if ($prog4 >= $currentDate) {  ?>
                <div class="col-md-6" style=text-align:center;>
                    <a href="/events/Yoga and Art/img/YogArt Course.jpg" target="_blank">
                        <img src="/events/Yoga and Art/img/YogArt Course.jpg" class="img-fluid" style=" border: 3px solid  #006666;  max-width: 90%; height: 90%">
                    </a>
                </div>
            <?php } ?>
            <?php if ($prog5 >= $currentDate) {  ?>
                <a href="https://lifepositive.org/product/festival-of-healing-in-the-hills/ " target="_blank">
                    <img src="/camps/madhuban/img/Poster.jpeg" class="img-fluid" style="border-radius: 15px; border: 3px solid 
                 #006666;  max-width: 100%; height: auto;">
                </a>
            <?php } ?>
        </div>
        <div class="row pt-3 justify-content-center ">
            <?php if ($prog3 >= $currentDate) {  ?>
                <div class="col-md-6">
                    <a href="/events/sanskrit/SANSKRIT%20-H%20(16-25%20APR%202022).pdf" target="_blank">
                        <img src="/events/sanskrit/img/cover (Small).jpg" class="img-fluid" style="border: 3px solid  #006666; width:90%; height: 100%">
                    </a>
                </div>
            <?php } ?>
            <?php if ($prog6 >= $currentDate) {  ?>
                <div class="col-md-6 " style="text-align:right;">
                    <a href="/camps/nainital/1.For Alok Da_Study Camp (2022) at Van Niwas-converted.pdf" target="_blank">
                        <img src="/camps/nainital/img/SC 376 Poster1 (Small).jpg" class="img-fluid" style="border: 3px solid  #006666; width: 90%; height: 100%; text-align:right;">
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</section>