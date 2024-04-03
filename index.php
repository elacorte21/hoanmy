<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Home</title>

    <?php include('css.php') ?>

</head>
<body>
    
    <!-- Navbar -->
    <?php include('header.php') ?>

    <!-- Body -->
    <div class="home-cover" style="background: url('assets/images/cover-home.jpg') center top / 105%" id="cover">
        <!--
        <div class="container">
            <div class="row">
                    <div class="col-md-5">
                        <h5>Hoan My exists to be the guiding light in healthcare, enhancing lives, sustaining families and providing care with heart.</h5>
                    </div>
                </div>
            </div>
        </div>
        -->
        <div class="home-cover-content">
            <h5>
                Hoan My exists to be the guiding light in healthcare, enhancing lives, sustaining families and providing care with heart.
            </h5>
        </div>
    </div>

    <!-- Body -->
    <section class="cta">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-8 col-sm-12 col-xs-12">
                    <a class="action" action="find" href="<?php echo $find_doctor_url ?>">
                        <img src="assets/images/icons/search.svg"/>
                        <span>Find a Doctor</span>
                    </a>
                </div>

                <div class="col-lg-4 col-md-8 col-sm-12 col-xs-12">
                    <a class="action" action="book" href="<?php echo $book_appointment_url ?>">
                        <img src="assets/images/icons/calendar.svg"/>
                        <span>Book Appointment</span>
                    </a>
                </div>

                <div class="col-lg-4 col-md-8 col-sm-12 col-xs-12">
                    <a class="action" action="plan" href="<?php echo $plan_visit_url ?>">
                        <img src="assets/images/icons/list.svg"/>
                        <span>Plan Your Visit</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Hospital Clinic -->
    <div class="section-home-hospital-clinic">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="home-hospital-clinic-wrapper">
                        <!-- Cycle -->
                        <div class="cycle-control">
                            <div class="cycle-slideshow" 
                                data-cycle-fx=shuffle
                                data-cycle-speed=1500
                                data-cycle-easing=easeInOutBack
                                data-cycle-ease-out=easeOutBack
                                data-cycle-timeout=0
                                data-cycle-prev=".cycle-prev"
                                data-cycle-next=".cycle-next">
                                <img src="assets/images/hospital-4.jpg">
                                <img src="assets/images/hospital-1b.jpg">
                                <img src="assets/images/hospital-2.jpg">
                                <img src="assets/images/hospital-3.jpg">
                            </div>
                        
                            <a href="#" class="cycle-prev"></a>
                            <a href="#" class="cycle-next"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-8 offset-lg-1 align-self-center">
                    <h1 class="text-blue text-size-30 mt-4 mt-lg-0">
                        Our Hospitals and Clinics
                    </h1>
                    <p class="text-grey text-light">
                        Hoan My takes pride in providing first-rate, affordable care for all, at a wide range of facilities throughout Vietnam. Our healthcare network includes more than 2,800 operating beds across <strong class="text-blue">14 hospitals</strong> and <strong class="text-blue">7 clinics</strong>.
                    </p>
                    <a class="btn-sky-blue margin-top-30" href="<?php echo $network_url ?>">VIEW MORE</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Specialities -->
    <div class="section-speciality">
        <div class="container">
            <h1 class="text-size-30">Our Specialties</h1>
            <div class="row justify-content-center">
                <div class="col-lg-2 col-md-4 mb-3 px-0">
                    <div class="speciality-item">
                        <a href="#" class="speciality-page-item-button">
                            <img src="assets/images/icon-cardiology.svg" alt="">
                            <p>CARDIOLOGY</p>
                        </a>
                        <div class="speciality-page-item-content" style="display: none;">
                            <button class="speciality-page-item-button-close"><i class="fas fa-times"></i></button>
                            <h1>Cardiology</h1>
                            <p>The Department of Cardiology has seen several significant investments at hospitals across the Hoan My network, meaning that this is one of our strongest specialties. The doctors and clinical staff are expertly trained, with qualifications from prestigious medical training establishments. In addition, cutting-edge equipment enhances the effectiveness of diagnosis and treatment. A range of complex cardiological surgeries that could previously only be undertaken abroad can now be carried out here in Vietnam, at Hoan My hospitals.</p>
                            <hr/>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 mb-3 px-0">
                    <div class="speciality-item">
                        <a href="#" class="speciality-page-item-button">
                            <img src="assets/images/icon-internalmed.svg" alt="">
                            <p>GENERAL INTERNAL MEDICINE</p>
                        </a>
                        <div class="speciality-page-item-content" style="display: none;">
                            <button class="speciality-page-item-button-close"><i class="fas fa-times"></i></button>
                            <h1>General Internal Medicine</h1>
                            <p>The Department of General Internal Medicine is constantly growing and developing at Hoan My, and specialist doctors in this field can be found at several Hoan My hospitals. Through international training and research, our hospitals apply the most up-to-date methodologies to enhance the effectiveness of medical treatment across this diverse specialty.</p>
                            <hr/>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 mb-3 px-0">
                    <div class="speciality-item">
                        <a href="#" class="speciality-page-item-button">
                            <img src="assets/images/icon-ivf.svg" alt="">
                            <p>FERTILITY</p>
                        </a>
                        <div class="speciality-page-item-content" style="display: none;">
                            <button class="speciality-page-item-button-close"><i class="fas fa-times"></i></button>
                            <h1>Fertility</h1>
                            <p>
                            <p>
At Hoan My, we understand that every woman has unique healthcare concerns at every stage of her life. Striving to be a part of this lifetime journey, our hospital network has developed an integrated system of obstetrics and gynaecology services to provide a trusted, comprehensive personal healthcare experience.
                            </p>
                            <p>
We provide first-rate gynaecological healthcare, with services ranging from prevention to screening, diagnosis and treatment. Every year, Hoan My provides a trust environment for more than 6,000 baby deliveries. The group’s pioneering application of intrauterine insemination (IUI) brings joy to hundreds of infertile couples.
                            </p>
                            <p>
The Hoan My Hospital Group is proud to include Hanh Phuc International Hospital, which owns the first RTAC accredited Fertility Centre in Vietnam.
</p>
                            </p>
                            <hr/>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 mb-3 px-0">
                    <div class="speciality-item">
                        <a href="#" class="speciality-page-item-button">
                            <img src="assets/images/icon-gastroenterology.svg" alt="">
                            <p>GASTROENTEROLOGY</p>
                        </a>
                        <div class="speciality-page-item-content" style="display: none;">
                            <button class="speciality-page-item-button-close"><i class="fas fa-times"></i></button>
                            <h1>Gastroenterology</h1>
                            <p>
Our medical knowledge of digestive problems is ever-evolving as advances are made in this field and doctors share expert knowledge regarding some of the most common health complaints. The Department of Gastroenterology at Hoan My places a strong emphasis on staying abreast of research. Here, we provide highly skilled clinical staff, advanced equipment, and modern procedures. In addition, Hoan My offers a range of diverse packages relating to gastroenterological problems, created to meet the needs of patients while helping to save costs.
                            </p>
                            <hr/>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 mb-3 px-0">
                    <div class="speciality-item">
                        <a href="#" class="speciality-page-item-button">
                            <img src="assets/images/icon-orthopeadics.svg" alt="">
                            <p>ORTHOPAEDICS</p>
                        </a>
                        <div class="speciality-page-item-content" style="display: none;">
                            <button class="speciality-page-item-button-close"><i class="fas fa-times"></i></button>
                            <h1>Orthopaedics</h1>
                            <p>
Our Orthopaedics Department takes care of disorders of the bones, joints and the musculoskeletal system in both children and adults. We believe that "Movement is Life," and our department is well-equipped with the specialists to help keep you active and healthy. Our hospitals are equipped with state-of-the-art equipment (including MRI scanners, 64-slice MSCT scans, C-Arm, arthroscopes and chiropractic equipment) and extensive care services at the Department of Physiotherapy and Rehabilitation. Hoan My works with leading Orthopaedic specialist doctors to constantly provide sustainable, affordable, patient-centric healthcare to all in Vietnam.                                    </p>
                            <hr/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <a class="btn-sky-blue" href="<?php echo $speciality_url ?>">VIEW MORE</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Book Appointment -->
    <div class="section-sky-blue-md">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <h5 class="text-blue text-appointment-home">Would you like to visit a hospital or clinic? Make an appointment today.</h5>
                </div>
                <div class="col-lg-4 col-md-12 col-right">
                    <a href="<?php echo $book_appointment_url ?>" class="btn-white">BOOK APPOINTMENT</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Featured -->
    <div class="section-featured">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 col-lg-6 featured d-flex" style="background-image:url('assets/images/thumb-meet-specialist-2.jpg');">
                    <div class="featuredText align-self-end">
                        <h3>Meet Our World Class Specialists</h3>
                        <a class="btn-sky-blue" href="<?php echo $find_doctor_url ?>"><span>FIND A DOCTOR</span></a>
                    </div>
                </div>
                <div class="col-12 col-lg-6 featured d-flex" style="background-image:url('assets/images/thumb-plan-visit.jpg');">
                    <div class="featuredText align-self-end">
                        <h3>Ask a Question</h3>
                        <a class="btn-sky-blue" href="<?php echo $contact_url ?>"><span>CONTACT US</span></a>
                    </div>
                </div>
            </div>

            <h1 class="text-blue text-center margin-bottom-50 text-size-30">Latest News</h1>
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="news-wrapper">
                        <a class="text-none-decoration" href="news-detail-20200817.php">
                            <div class="news-thumb" style="background: url('https://www.hoanmy.com/upload/hoanmy.com/images/post/2020-08-18/news_1597715055_aPYnNkauBC.JPG');"></div>
                            <div class="news-content">
                                <div class="wrap">
                                    <div class="news-date">
                                        <p>
                                            17
											<br>
                                            <span class="month">AUG</span>
                                            <br>
											<span class="year">2020</span>
                                        </p>
                                    </div>
                                    
                                    <h5 class="news-title">More Than 100 Staff From Hoan My Volunteer at Covid-19 Hotspot</h5>
                                    <p class="news-excerpt">
										Ho Chi Minh City, August 17, 2020. With the desire to join hands with the national medical teams participating in the fight against Covid-19 ...
                                    </p>
                                </div>
                                <p class="news-link">READ MORE <span><i class="fas fa-chevron-right"></i></span</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="news-wrapper">
                        <a class="text-none-decoration" href="news-detail-20200607.php">
                            <div class="news-thumb" style="background: url('assets/images/customers-do-the-medical-declaration-when-visit-hanh-phuc-international-hospital.jpg');"></div>
                            <div class="news-content">
                                <div class="wrap">
                                    <div class="news-date">
                                        <p>
                                            07
											<br>
                                            <span class="month">JUN</span>
                                            <br>
											<span class="year">2020</span>
                                        </p>
                                    </div>
                                    
                                    <h5 class="news-title">Hanh Phuc International Hospital Strengthens Fight Against COVID-19</h5>
                                    <p class="news-excerpt">
										In the wake of the serious advance of COVID-19, Hanh Phuc International Hospital is stepping up to the frontlines of the country’s fight against ...
                                    </p>
                                </div>
                                <p class="news-link">READ MORE <span><i class="fas fa-chevron-right"></i></span</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="news-wrapper">
                        <a class="text-none-decoration" href="news-detail.php">
                            <div class="news-thumb" style="background: url('https://www.hoanmy.com/upload/hoanmy.com/hinhanh/tintuc/JCI.jpg');"></div>
                            <div class="news-content">
                                <div class="wrap">
                                    <div class="news-date">
                                        <p>
                                            04
											<br>
                                            <span class="month">DEC</span>
                                            <br>
											<span class="year">2019</span>
                                        </p>
                                    </div>
                                    
                                    <h5 class="news-title">Hanh Phuc Hospital Receives JCI Accreditation</h5>
                                    <p class="news-excerpt">
										Hanh Phuc Is The First Mother And Child Hospital In Vietnam To Be Accredited With Joint Commission International ...
                                    </p>
                                </div>
                                <p class="news-link">READ MORE <span><i class="fas fa-chevron-right"></i></span</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="news-wrapper">
                        <a class="text-none-decoration" href="news-detail-1.php">
                            <div class="news-thumb" style="background: url('https://www.hoanmy.com/upload/hoanmy.com/hinhanh/Fros%26sulivan/IMG_5479.jpg');"></div>
                            <div class="news-content">
                                <div class="wrap">
                                    <div class="news-date">
                                        <p>
                                            15
											<br>
                                            <span class="month">NOV</span>
                                            <br>
											<span class="year">2019</span>
                                        </p>
                                    </div>
                                    
                                    <h5 class="news-title">Hoan My Wins Vietnam Hospital of the Year Award</h5>
                                    <p class="news-excerpt">
										On Thursday 14 November, at an awards ceremony in Singapore, Hoan My Medical Group was awarded the prestigious “Vietnam Hospital of the Year 2019” for the fourth year in ...
                                    </p>
                                </div>
                                <p class="news-link">READ MORE <span><i class="fas fa-chevron-right"></i></span</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <a class="btn-sky-blue margin-top-30" href="<?php echo $news_url ?>">VIEW MORE</a>
                </div>
            </div>
        </div>
    </div>

    <?php include('footer.php') ?>

</body>
</html>