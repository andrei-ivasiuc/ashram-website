<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="/lib/fontawesome/css/all.min.css" rel="stylesheet">
    <link href="/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/lib/fancybox/fancybox.css">

    <link rel="stylesheet" href="/css/main.css">
    <script src="/lib/jquery-3.6.0.min.js"></script>
    <script src="/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/lib/fancybox/fancybox.umd.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&display=swap" rel="stylesheet">

    <script src="/js/main.js"></script>
    <title>Sri Aurobindo Ashram - Delhi Branch Trust</title>
</head>

<body>

    <!-- TOP MENU -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-gold">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="/"><img src="/img/logo.png" alt="Sri Aurobindo Ashram - Delhi Branch" height="50px"></a>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            The Ashram
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <!-- <li>
                                <h6 class="dropdown-header">About The Ashram</h6>
                            </li> -->
                            <!-- <li><a class="dropdown-item" href="/ashram/introduction">Introduction</a></li> -->
                            <li><a class="dropdown-item" href="/ashram/history">History</a></li>
                            <li><a class="dropdown-item" href="/ashram/facilities">Facilities</a></li>
                            <!-- <li><a class="dropdown-item" href="/ashram/future">Towards the Glorious Future</a></li> -->
                            <li><a class="dropdown-item" href="/ashram/vocational-training">Vocational Training</a></li>
                            <!-- <li><a class="dropdown-item" href="/ashram/reports">Annual Reports</a></li> -->

                            <li class="dropend">
                                <a class="dropdown-item dropdown-toggle" id="socialMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Social Initiative
                                </a>
                                <ul class="submenu dropdown-menu" aria-labelledby="socialMenu">
                                    <li><a class="dropdown-item" href="/social-initiative/social-projects">Social Projects</a></li>
                                    <!-- <li><a class="dropdown-item" href="/social-initiative/current-projects/">Current Projects</a></li> -->
                                    <li><a class="dropdown-item" href="/sponsorship-schemes/">Sponsorship Schemes</a></li>
                                </ul>
                            </li>

                            <li class="dropend"><a class="dropdown-item dropdown-toggle" href="#">Annual Report</a>
                                <ul class="submenu dropdown-menu">
                                    <li><a class="dropdown-item" target="_blank" href="/ashram/annual-reports/Annual Report 2021.pdf">Report 2020-21</a></li>
                                    <li><a class="dropdown-item" target="_blank" href="/ashram/annual-reports/Annual Report 2019-20.pdf">Report 2019-20</a></li>
                                    <li><a class="dropdown-item" target="_blank" href="/ashram/annual-reports/Annual Report 2018-19.pdf">Report 2018-19</a></li>
                                    <li><a class="dropdown-item" target="_blank" href="/ashram/annual-reports/Annual Report 2017-2018 final soft copy small.pdf">Report 2017-18</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Publications
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="/articles">Articles</a></li>
                            <li class="dropend"><a class="dropdown-item dropdown-toggle" href="/publications">Online Publications</a>
                                <ul class="submenu dropdown-menu">
                                    <li><a class="dropdown-item" target="_blank" href="/publications/call-beyond.php">The Call Beyond</a></li>
                                    <li><a class="dropdown-item" target="_blank" href="/publications/karamdhara.php">???????????? ????????????????????? ????????????????????????</a></li>
                                    <li><a class="dropdown-item" target="_blank" href="/publications/realization.php">Realization Newsletter</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Programs
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="/celebration-days/">Celebration Days</a></li>
                            <li><a class="dropdown-item" href="/events">Events/Workshops</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Gallery
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" target="_blank" href="http://saaonline.net.in/samo_gallery/">The Mother and Sri Aurobindo Photo Gallery</a></li>
                            <li><a class="dropdown-item" target="_blank" href="https://www.youtube.com/channel/UCcmF6JzAOsBMdqJjZbnmyng/videos">Ashram Video Gallery</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Camps
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="/camps/madhuban">Madhuban</a></li>
                            <li><a class="dropdown-item" href="/camps/nainital">Nainital</a></li>
                            <li><a class="dropdown-item" href="/camps/youth">Youth Camp</a></li>


                            <!-- <li class="dropend"><a class="dropdown-item dropdown-toggle" href="/camps/madhuban">Madhuban</a>
                                <ul class="submenu dropdown-menu">
                                <li><a class="dropdown-item" href="/camps/Camp Data for Website/3.Camp at Madhuban 2022.pdf" target="_blank">Summer Camp</a></li>
                                <li><a class="dropdown-item" href="https://lifepositive.org/product/festival-of-healing-in-the-hills/" target="_blank">Healing Camp</a></li>
                                <li><a class="dropdown-item" href="/camps/Camp Data for Website/Rules and Regulation _2021-22 .pdf" target="_blank">Rules and Regulations</a></li>                                    
                                </ul>
                            </li>
                            <li class="dropend"><a class="dropdown-item dropdown-toggle" href="/camps/nainital">Nainital</a>
                                <ul class="submenu dropdown-menu">
                                    <li><a class="dropdown-item" href="/camps/Camp Data for Website/1. Study Camp (2022) at Van Niwas.pdf" target="_blank">Study Camp</a></li>
                                    <li><a class="dropdown-item" href="/camps/nainital/1.For Alok Da_Study Camp (2022) at Van Niwas-converted.pdf" target="_blank">Summer Camp</a></li>
                                    <li><a class="dropdown-item" href="/camps/Camp Data for Website/How_To-Reach_Nainital_2021-22.pdf" target="_blank">How to Reach</a></li>
                                    <li><a class="dropdown-item" href="/camps/Camp Data for Website/Rules and Regulation _2021-22 .pdf" target="_blank">Rules and Regulations</a></li>
                                </ul>
                            </li>
                            <li class="dropend"><a class="dropdown-item dropdown-toggle" href="/camps/youth">Youth Camps</a>
                                <ul class="submenu dropdown-menu">
                                    <li><a class="dropdown-item" href="/camps/Camp Data for Website/2. Youth Camp (2022) at Van Niwas.pdf" target="_blank">Youth Camp</a></li>
                                    <li><a class="dropdown-item" href="/camps/Camp Data for Website/How_To-Reach_Nainital_2021-22.pdf" target="_blank">How to Reach</a></li>
                                    <li><a class="dropdown-item" href="/camps/Camp Data for Website/Rules and Regulation _2021-22 .pdf" target="_blank">Rules and Regulations</a></li>
                                </ul>
                            </li>                             -->
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="/volunteering" role="button">
                            Volunteering
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/visit-us/">Visit Us</a>
                    </li>
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                           Donations
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="/donations/indian-curr.php">Indian currency</a></li>
                            <li><a class="dropdown-item" href="/donations/foreign-curr.php">Foreign currency</a></li>
                        </ul>
                    </li>  
                    <li class="nav-item">
                        <a class="nav-link active" href="/sriarvind-150-bday/">150 Bday</a>
                    </li>                   -->
                </ul>
            </div>
        </div>
    </nav>

</body>

</html>