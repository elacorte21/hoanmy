<?php include('url.php') ?>
    <div class="nav-book-section">
        <div class="container">
            <div class="row">
                <a href="<?php echo $home_url ?>" class="logo">
<!--                    <img src="assets/images/logo-hoanmy.svg" alt="Hoan My">-->
                    <img src="assets/images/HMLogo_EN_HMC 01.png" alt="Hoan My">
                </a>

                <a href="<?php echo $find_doctor_url ?>" class="btn-sub-nav find-a-doctor text-white ml-auto" >FIND A DOCTOR</a>
                <a href="<?php echo $book_appointment_url ?>" class="btn-sub-nav btn-book text-white" >BOOK APPOINTMENT</a>

                <div class="language" role="group">
                    <button id="btnGroupDrop1" type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    EN
                    </button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                        <a class="dropdown-item" href="#">EN</a>
                        <a class="dropdown-item" href="#">VN</a>
                    </div>
                </div>

                <a href="#" class="mobile-nav mr-lg-0"></a>
                <ul class="navi d-lg-none">
                    <?php include('nav.php') ?>
                </ul>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <nav>
        <div class="container">
            <?php if(strpos($_SERVER['PHP_SELF'],'index.php') !== false or 
					 strpos($_SERVER['PHP_SELF'],'achievements.php') !== false) { ?>
                <img src="assets/images/img-vhoty-2019.png" id="badge">
            <?php } ?>

            <div class="row">
                <ul class="navi mr-auto d-none d-lg-block">
                    <?php include('nav.php') ?>
                </ul>
                
				<div class="d-flex nav-right">
					<div class="nav-links emergency">
						<a href="tel:+842839959860">EMERGENCY 24/7</a>
					</div>

					<div class="boxSearch">
						<div class="wrap">
							<button class="btn btn-outline-primary ml-auto my-sm-0 btnSearch" type="submit"><img src="assets/images/icon-search.svg"></button>
							<input class="form-control mr-sm-2 txtSearch" type="search" placeholder="Search" aria-label="Search">
						</div>
					</div>
				</div>
				
            </div>
        </div>
    </nav>

    <?php if(strpos($_SERVER['PHP_SELF'],'index.php') !== false) { ?>
        <!-- Alert -->
        <div class="nav-info-section">
            <p><span><i class="fas fa-info-circle"></i>&nbsp;&nbsp;COVID-19 updates:</span>&nbsp;&nbsp; <u><a href="#" data-toggle="modal" data-target="#moreinfo">See how we are taking every precaution to keep you safe</a></u>.</p>
            <a href="#" class="btn-close d-sm-block d-md-none"><i class="fas fa-times" aria-hidden="true"></i></a>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="moreinfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"><i class="fas fa-info-circle"></i>&nbsp;&nbsp;COVID-19 updates</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>To maximise safety and minimise infection, each and every hospital and clinic at Hoan strictly applies COVID-19 prevention processes. These are intended not only to curb infection, but to make our patients and visitors feel safe when visiting our hospitals and clinics.</p>
                        <p>We fully comply all regulations by the Ministry of Health at our facilities. Our provisions for this period include screening all visitors upon entry, requesting mandatory mask wearing and hand washing, providing hygiene guidance, applying social distancing, and setting up COVID-19 screening zones and isolation areas.</p>
                        <p>See <a href="<?php echo $news_url ?>">Latest News</a> for further information.</p>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>