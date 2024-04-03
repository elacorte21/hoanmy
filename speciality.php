<?php include('url.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Specialty</title>

    <?php include('css.php') ?>

</head>
<body>

    <!-- Navbar -->
    <?php include('header.php') ?>

    <!-- Body -->
    <div style="background: url('assets/images/cover-specialty.jpg') center top / 105%" id="cover" class="speciality-cover">
        <div class="speciality-content">
            <h1>Our Specialty Areas</h1>
        </div>
    </div>  

    <!-- Body -->
    <section class="cta specialtypg">
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

    <div class="section-sky-blue-speciality">
        <div class="container">
            <div class="row">
<!--
                <div class="col-md-8 offset-md-2">
                    <div class="search">
                        <form action="#">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Search Hoan My">
                                <div class="input-group-append">
                                    <span class="input-group-text search-speciality" id="basic-addon2">
                                        &nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="20.911" height="20.911" viewBox="0 0 20.911 20.911"><defs><style>.aa,.bb,.dd{fill:#02A0AC !important;}.aa,.bb{stroke:white !important;stroke-linecap:round;stroke-width:2px;}.a{stroke-linejoin:round;}.c{stroke:none;}</style></defs><g transform="translate(-1227 -163)"><g transform="translate(1226.542 162.542)"><g class="aa" transform="translate(0.458 0.458)"><circle class="c" cx="8.5" cy="8.5" r="8.5"/><circle class="dd" cx="8.5" cy="8.5" r="7.5"/></g><line class="b" style="stroke: white; stroke-width: 2px !important;" x2="5.271" y2="5.271" transform="translate(14.684 14.684)"/></g></g></svg>
                                    </span>
                                </div>
                            </div>
                            <div class="submit d-flex justify-content-center">
                                <button type="submit" class="btn-white-blue mt-1 mb-5">SEARCH</button>
                            </div>
                        </form>
                    </div>
                </div>
-->
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="speciality-box text-center">
                    <p>Hoan My offers a comprehensive range of clinical specialties and services, combining medical expertise with advanced technology to provide the highest quality care for our patients.</p>
                    <p><span class="text-blue">Click on the specialties below for further information.</span></p>
                    
                    <br/>

                    <div class="row justify-content-center">
                        <div class="col-lg-2 col-md-4 mt-3 px-0">
                            <div class="speciality-page-item speciality-featured">
                                <button class="speciality-page-item-button">
                                    <img class="d-block mx-auto" src="assets/images/icon-cardiology.svg" width="40" alt="">
                                </button>
                                <p>CARDIOLOGY</p>
                                <div class="speciality-page-item-content" style="display: none;">
                                    <button class="speciality-page-item-button-close"><i class="fas fa-times"></i></button>
                                    <h1>Cardiology</h1>
                                    <p>
The Department of Cardiology has seen several significant investments at hospitals across the Hoan My network, meaning that this is one of our strongest specialties. The doctors and clinical staff are expertly trained, with qualifications from prestigious medical training establishments. In addition, cutting-edge equipment enhances the effectiveness of diagnosis and treatment. A range of complex cardiological surgeries that could previously only be undertaken abroad can now be carried out here in Vietnam, at Hoan My hospitals.
									<hr/>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 mt-3 px-0">
                            <div class="speciality-page-item speciality-featured">
                                <button class="speciality-page-item-button">
                                    <img class="d-block mx-auto" src="assets/images/icon-internalmed.svg" width="40" alt="">
                                </button>
                                <p>GENERAL INTERNAL MEDICINE</p>
                                <div class="speciality-page-item-content" style="display: none;">
                                    <button class="speciality-page-item-button-close"><i class="fas fa-times"></i></button>
                                    <h1>General Internal Medicine</h1>
                                    <p>
The Department of General Internal Medicine is constantly growing and developing at Hoan My, and specialist doctors in this field can be found at several Hoan My hospitals. Through international training and research, our hospitals apply the most up-to-date methodologies to enhance the effectiveness of medical treatment across this diverse specialty.
                                    </p>
                                    <hr/>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 mt-3 px-0">
                            <div class="speciality-page-item speciality-featured">
                                <button class="speciality-page-item-button">
                                    <img class="d-block mx-auto" src="assets/images/icon-ivf.svg" width="40" alt="">
                                </button>
                                <p>FERTILITY</p>
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
                        <div class="col-lg-2 col-md-4 mt-3 px-0">
                            <div class="speciality-page-item speciality-featured">
                                <button class="speciality-page-item-button">
                                    <img class="d-block mx-auto" src="assets/images/icon-gastroenterology.svg" width="40" alt="">
                                </button>
                                <p>GASTROENTEROLOGY</p>
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
                        <div class="col-lg-2 col-md-4 mt-3 px-0">
                            <div class="speciality-page-item speciality-featured">
                                <button class="speciality-page-item-button">
                                    <img class="d-block mx-auto" src="assets/images/icon-orthopeadics.svg" width="40" alt="">
                                </button>
                                <p>ORTHOPAEDICS</p>
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
                    <hr>
<div class="row speciality-page-item">
					                        <div class="col-lg-4 col-md-6">
                            <div class="speciality-page-item">
                                <button class="speciality-page-item-button">Anaesthesiology</button>
                                <div class="speciality-page-item-content" style="display: none;">
                                    <button class="speciality-page-item-button-close"><i class="fas fa-times" aria-hidden="true"></i></button>
                                    <h1>Anaesthesiology</h1>
                                            <p>
                                                The Anaesthesiology department provides anaesthesia care that draws upon advanced, safe techniques. Our team of highly skilled anaesthesiologists, with a wealth of experience, ensure optimum quality patient care - not only during surgical procedures but also the pre-operative and early post-operative periods.

                                            </p>
                                    <hr>
                                </div>
                            </div>
                        </div>
						                        <div class="col-lg-4 col-md-6">
                            <div class="speciality-page-item">
                                <button class="speciality-page-item-button">Cardiology</button>
                                <div class="speciality-page-item-content" style="display: none;">
                                    <button class="speciality-page-item-button-close"><i class="fas fa-times" aria-hidden="true"></i></button>
                                    <h1>Cardiology</h1>
                                    <p>The Department of Cardiology has seen several significant investments at hospitals across the Hoan My network, meaning that this is one of our strongest specialties. The doctors and clinical staff are expertly trained, with qualifications from prestigious medical training establishments. In addition, cutting-edge equipment enhances the effectiveness of diagnosis and treatment. A range of complex cardiological surgeries that could previously only be undertaken abroad can now be carried out here in Vietnam, at Hoan My hospitals.</p>
                                    <hr>
                                </div>
                            </div>
                        </div>
						                        <div class="col-lg-4 col-md-6">
                            <div class="speciality-page-item">
                                <button class="speciality-page-item-button">Cardiothoracic Surgery</button>
                                <div class="speciality-page-item-content" style="display: none;">
                                    <button class="speciality-page-item-button-close"><i class="fas fa-times" aria-hidden="true"></i></button>
                                    <h1>Cardiothoracic Surgery</h1>
                                            <p>
                                                The Department of Cardiothoracic Surgery provides comprehensive medical services ranging from preventative aid through to cardiovascular function rehabilitation. Cardiothoracic surgery is performed by a team of well-qualified and highly experienced doctors with many years working in the Cardiothoracic Department at primary hospitals. They are also members of the Executive Committee of Vietnam Cardiovascular & Thoracic Surgery Association. The department constantly improves medical examination and treatment processes as well as improving advanced heart surgery techniques such as minimally invasive open-heart surgery, minimally invasive heart surgery techniques to help patients protect their cardiovascular health.

                                            </p>
                                    <hr>
                                </div>
                            </div>
                        </div>
						                        <div class="col-lg-4 col-md-6">
                            <div class="speciality-page-item">
                                <button class="speciality-page-item-button">Colorectal Surgery</button>
                                <div class="speciality-page-item-content" style="display: none;">
                                    <button class="speciality-page-item-button-close"><i class="fas fa-times" aria-hidden="true"></i></button>
                                    <h1>Colorectal Surgery</h1>
                                            <p>
                                                The Department of Colorectal Surgery performs surgery on the gastrointestinal system, hepatobiliary and colorectal system. With the application of new treatment techniques, the use of modern equipment and the engagement of highly specialised doctors and nurses, the department provides superlative care and aims to shorten post-surgery recovery for our patients.

                                            </p>
                                    <hr>
                                </div>
                            </div>
                        </div>
						                        <div class="col-lg-4 col-md-6">
                            <div class="speciality-page-item">
                                <button class="speciality-page-item-button">Dentistry</button>
                                <div class="speciality-page-item-content" style="display: none;">
                                    <button class="speciality-page-item-button-close"><i class="fas fa-times" aria-hidden="true"></i></button>
                                    <h1>Dentistry</h1>
                                            <p>
                                                Our Dentistry department offers advanced equipment, superlative facilities, and experienced clinical personnel to help to bring back the healthy, happy smile of every patient.

                                            </p>
                                    <hr>
                                </div>
                            </div>
                        </div>
						                        <div class="col-lg-4 col-md-6">
                            <div class="speciality-page-item">
                                <button class="speciality-page-item-button">Dermatology</button>
                                <div class="speciality-page-item-content" style="display: none;">
                                    <button class="speciality-page-item-button-close"><i class="fas fa-times" aria-hidden="true"></i></button>
                                    <h1>Dermatology</h1>
                                            <p>
												The Dermatology department provides a wide range of consultation services and effective treatments for common problems relating to skin, hair and nail health issues. Our advanced facilities, dedicated healthcare practitioners and customised treatment range combine to bring a consistently high level of satisfaction to our patients.

                                            </p>
                                    <hr>
                                </div>
                            </div>
                        </div>
						                        <div class="col-lg-4 col-md-6">
                            <div class="speciality-page-item">
                                <button class="speciality-page-item-button">Diagnostic Radiology</button>
                                <div class="speciality-page-item-content" style="display: none;">
                                    <button class="speciality-page-item-button-close"><i class="fas fa-times" aria-hidden="true"></i></button>
                                    <h1>Diagnostic Radiology</h1>
                                            <p>
                                                The Department of Diagnostic Radiology carries out radiological diagnoses to support our clinical staff tin diagnosing, treating and caring for patients. The department is equipped with modern equipment to deliver high image quality. Excellent training and the skilful use of radiological equipment in line with international procedural standards combine to ensure that we provide highly accurate diagnoses. This enables highly effective treatments and strong patient satisfaction.

                                            </p>
                                    <hr>
                                </div>
                            </div>
                        </div>
						                        <div class="col-lg-4 col-md-6">
                            <div class="speciality-page-item">
                                <button class="speciality-page-item-button">Ear, Nose & Throat</button>
                                <div class="speciality-page-item-content" style="display: none;">
                                    <button class="speciality-page-item-button-close"><i class="fas fa-times" aria-hidden="true"></i></button>
                                    <h1>Ear, Nose & Throat</h1>
                                            <p>
                                               The Otolaryngology department, found at several Hoan My hospitals, provides high-quality treatment for ENT (ear, nose, and throat) conditions. We provide highly competent doctors who can diagnose and treat diseases of the ear, nose and throat well. We also leverage the most advanced treatment methodologies from countries that have developed health systems to enhance the effectiveness of our services.

                                            </p>
                                    <hr>
                                </div>
                            </div>
                        </div>
						                        <div class="col-lg-4 col-md-6">
                            <div class="speciality-page-item">
                                <button class="speciality-page-item-button">Emergency Medicine</button>
                                <div class="speciality-page-item-content" style="display: none;">
                                    <button class="speciality-page-item-button-close"><i class="fas fa-times" aria-hidden="true"></i></button>
                                    <h1>Emergency Medicine</h1>
                                            <p>
                                                The Department of Emergency Medicine at Hoan My is always on standby with sufficient personnel to perform CPR (Cardiopulmonary Resuscitation) to promptly treat cardiac arrest and apnea cases, maximising patient safety. Our team of emergency doctors and nurses in this department are trained to handle emergency scenarios with speed and efficiency. The emergency team coordinates with other related specialties at the hospital to diagnose emergency cases promptly and accurately, providing first priority treatment for those in need of swift and decisive action.

                                            </p>
                                    <hr>
                                </div>
                            </div>
                        </div>
						                        <div class="col-lg-4 col-md-6">
                            <div class="speciality-page-item">
                                <button class="speciality-page-item-button">Endocrinology</button>
                                <div class="speciality-page-item-content" style="display: none;">
                                    <button class="speciality-page-item-button-close"><i class="fas fa-times" aria-hidden="true"></i></button>
                                    <h1>Endocrinology</h1>
                                            <p>
                                               The Endocrinology department comprises highly qualified doctors and standardised labs and radiological equipment. The department provides the effective diagnosis and treatment of endocrinological, or hormone-related, disorders. We offer a comprehensive range of treatment methodologies to detect and treat endocrinological diseases and their associated complications.

                                            </p>
                                    <hr>
                                </div>
                            </div>
                        </div>
						                        <div class="col-lg-4 col-md-6">
                            <div class="speciality-page-item">
                                <button class="speciality-page-item-button">Family Medicine</button>
                                <div class="speciality-page-item-content" style="display: none;">
                                    <button class="speciality-page-item-button-close"><i class="fas fa-times" aria-hidden="true"></i></button>
                                    <h1>Family Medicine</h1>
                                            <p>
                                                The Department of Family Medicine provides family health monitoring and management services. The department creates medical profiles for local residents who have registered for this service with the hospitals. These profiles help us to monitor the medical histories of family members, both young and elderly. The department aims to provide illness diagnosis and prevention, initial healthcare services, and general healthcare knowledge in order to improve the quality of life of the local communities.

                                            </p>
                                    <hr>
                                </div>
                            </div>
                        </div>
						                        <div class="col-lg-4 col-md-6">
                            <div class="speciality-page-item">
                                <button class="speciality-page-item-button">Gastroenterology</button>
                                <div class="speciality-page-item-content" style="display: none;">
                                    <button class="speciality-page-item-button-close"><i class="fas fa-times" aria-hidden="true"></i></button>
                                    <h1>Gastroenterology</h1>
                                    <p>Our medical knowledge of digestive problems is ever-evolving as advances are made in this field and doctors share expert knowledge regarding some of the most common health complaints. The Department of Gastroenterology at Hoan My places a strong emphasis on staying abreast of research. Here, we provide highly skilled clinical staff, advanced equipment, and modern procedures. In addition, Hoan My offers a range of diverse packages relating to gastroenterological problems, created to meet the needs of patients while helping to save costs.</p>
                                    <hr>
                                </div>
                            </div>
                        </div>
						                        <div class="col-lg-4 col-md-6">
                            <div class="speciality-page-item">
                                <button class="speciality-page-item-button">General Internal Medicine</button>
                                <div class="speciality-page-item-content" style="display: none;">
                                    <button class="speciality-page-item-button-close"><i class="fas fa-times" aria-hidden="true"></i></button>
                                    <h1>General Internal Medicine</h1>
                                    <p>
The Department of General Internal Medicine is constantly growing and developing at Hoan My, and specialist doctors in this field can be found at several Hoan My hospitals. Through international training and research, our hospitals apply the most up-to-date methodologies to enhance the effectiveness of medical treatment across this diverse specialty.
</p>
                                    <hr>
                                </div>
                            </div>
                        </div>
						                        <div class="col-lg-4 col-md-6">
                            <div class="speciality-page-item">
                                <button class="speciality-page-item-button">Geriatric Medicine</button>
                                <div class="speciality-page-item-content" style="display: none;">
                                    <button class="speciality-page-item-button-close"><i class="fas fa-times" aria-hidden="true"></i></button>
                                    <h1>Geriatric Medicine</h1>
                                            <p>
                                                The Department of Geriatric Medicine provides medical examinations, treatment, rehabilitative care and comprehensive care services for elderly patients. This includes care for patients with sequelae due to stroke, injuries, post-surgery care, care for acute and chronic musculoskeletal diseases, and treatment for common diseases in the elderly such as diabetes, hypertension, cerebrovascular insufficiency, Parkinson's and Alzheimer's disease.

                                            </p>
                                    <hr>
                                </div>
                            </div>
                        </div>
						                        <div class="col-lg-4 col-md-6">
                            <div class="speciality-page-item">
                                <button class="speciality-page-item-button">General Pediatric</button>
                                <div class="speciality-page-item-content" style="display: none;">
                                    <button class="speciality-page-item-button-close"><i class="fas fa-times" aria-hidden="true"></i></button>
                                    <h1>General Paediatric</h1>
                                            <p>
                                                Our specialist Paediatrics Departments at several Hoan My hospitals provide outstanding healthcare services for children. We provide a wide range of clinical services, health enhancement and vaccination programmes for children. Hoan My is committed to advancing the health, wellbeing and safety of all children across the country.

                                            </p>
                                    <hr>
                                </div>
                            </div>
                        </div>
						                        <div class="col-lg-4 col-md-6">
                            <div class="speciality-page-item">
                                <button class="speciality-page-item-button">Haematology</button>
                                <div class="speciality-page-item-content" style="display: none;">
                                    <button class="speciality-page-item-button-close"><i class="fas fa-times" aria-hidden="true"></i></button>
                                    <h1>Haematology</h1>
                                            <p>
                                               The Department of Haematology provides routine and specialised tests relating to haematology (blood and body tissues). This department serves all other specialties in terms of diagnosis and treatment. Our Haematology department is equipped with modern equipment and applies advanced diagnostic techniques, with highly specialised clinical personnel ready to help every hospital department to satisfy our patients' diverse needs.

                                            </p>
                                    <hr>
                                </div>
                            </div>
                        </div>
						                        <div class="col-lg-4 col-md-6">
                            <div class="speciality-page-item">
                                <button class="speciality-page-item-button">Infectious Diseases</button>
                                <div class="speciality-page-item-content" style="display: none;">
                                    <button class="speciality-page-item-button-close"><i class="fas fa-times" aria-hidden="true"></i></button>
                                    <h1>Infectious Diseases</h1>
                                            <p>
                                                The Department of Infectious Diseases provides diagnosis and treatment for all types of infections caused by bacteria, viruses, fungi, parasites, and unidentified factors. The department also provides vaccination under the direction of the Health Ministry, for both children and adults.

                                            </p>
                                    <hr>
                                </div>
                            </div>
                        </div>
						                        <div class="col-lg-4 col-md-6">
                            <div class="speciality-page-item">
                                <button class="speciality-page-item-button">Medical Oncology</button>
                                <div class="speciality-page-item-content" style="display: none;">
                                    <button class="speciality-page-item-button-close"><i class="fas fa-times" aria-hidden="true"></i></button>
                                    <h1>Medical Oncology</h1>
                                            <p>
                                                The Department of Oncology provides diagnoses, staging assessments, and treatments for cancer. The department applies modern diagnostic methods and compassionate specialist care. Our experienced doctors apply advanced methods to determine treatment regimens appropriate to the cancer stage and the patient's condition, aiming to maximise treatment effectiveness, aid recovery and prolong life.

                                            </p>
                                    <hr>
                                </div>
                            </div>
                        </div>
						                        <div class="col-lg-4 col-md-6">
                            <div class="speciality-page-item">
                                <button class="speciality-page-item-button">Neurology</button>
                                <div class="speciality-page-item-content" style="display: none;">
                                    <button class="speciality-page-item-button-close"><i class="fas fa-times" aria-hidden="true"></i></button>
                                    <h1>Neurology</h1>
                                    <p>Several Hoan My hospitals have Neurology department which has advanced equipment and highly competent doctors. This Neurology department treats  diseases affecting the brain, spinal cord, muscles and nerves.
</p>
                                    <hr>
                                </div>
                            </div>
                        </div>
						                        <div class="col-lg-4 col-md-6">
                            <div class="speciality-page-item">
                                <button class="speciality-page-item-button">Neurosurgery</button>
                                <div class="speciality-page-item-content" style="display: none;">
                                    <button class="speciality-page-item-button-close"><i class="fas fa-times" aria-hidden="true"></i></button>
                                    <h1>Neurosurgery</h1>
                                            <p>
                                               The Department of Neurosurgery provides high-quality care for neurosurgical trauma patients. The department is well-equipped with modern facilities, and strives to stay ahead of the curve through the application of the latest technological advancements in the field of neurosurgery.

                                            </p>
                                    <hr>
                                </div>
                            </div>
                        </div>
						                        <div class="col-lg-4 col-md-6">
                            <div class="speciality-page-item">
                                <button class="speciality-page-item-button">Neonatology</button>
                                <div class="speciality-page-item-content" style="display: none;">
                                    <button class="speciality-page-item-button-close"><i class="fas fa-times" aria-hidden="true"></i></button>
                                    <h1>Neonatology</h1>
                                            <p>
                                                The Department of Neonatology is very well equipped to provide comprehensive care for new-borns. The combination of highly skilled doctors and nurses and modern facilities allows us to handle complicated cases expertly, providing the best care for those who have just entered the world.

                                            </p>
                                    <hr>
                                </div>
                            </div>
                        </div>
						                        <div class="col-lg-4 col-md-6">
                            <div class="speciality-page-item">
                                <button class="speciality-page-item-button">Obstetrics & Gynaecology (incl. IVF)</button>
                                <div class="speciality-page-item-content" style="display: none;">
                                    <button class="speciality-page-item-button-close"><i class="fas fa-times" aria-hidden="true"></i></button>
                                    <h1>Obstetrics & Gynaecology (incl. IVF)</h1>
                                    <p>
At Hoan My, we understand that every woman has unique healthcare concerns at every stage of her life. Striving to be a part of this lifetime journey, our hospital network has developed an integrated system of obstetrics and gynaecology services to provide a trusted, comprehensive personal healthcare experience.
									</p>
									<p>
We provide first-rate gynaecological healthcare, with services ranging from prevention to screening, diagnosis and treatment. Every year, Hoan My provides a trust environment for more than 6,000 baby deliveries. The group’s pioneering application of intrauterine insemination (IUI) brings joy to hundreds of infertile couples.
									</p>
									<p>
The Hoan My Hospital Group is proud to include Hanh Phuc International Hospital, which owns the first RTAC accredited Fertility Centre in Vietnam.
</p>
                                    <hr>
                                </div>
                            </div>
                        </div>
						                        <div class="col-lg-4 col-md-6">
                            <div class="speciality-page-item">
                                <button class="speciality-page-item-button">Oncology</button>
                                <div class="speciality-page-item-content" style="display: none;">
                                    <button class="speciality-page-item-button-close"><i class="fas fa-times" aria-hidden="true"></i></button>
                                    <h1>Oncology</h1>
                                    <p>The Department of Surgical Oncology at several Hoan My hospitals provides high quality of care togther with modern equipment, which ensures that the surgeries conducted at Hoan My hospitals are of the highest standard. This department at Hoan My hospital attracts leading oncologists and has modern treament facilitities.
</p>
                                    <hr>
                                </div>
                            </div>
                        </div>
						                        <div class="col-lg-4 col-md-6">
                            <div class="speciality-page-item">
                                <button class="speciality-page-item-button">Ophthalmology</button>
                                <div class="speciality-page-item-content" style="display: none;">
                                    <button class="speciality-page-item-button-close"><i class="fas fa-times" aria-hidden="true"></i></button>
                                    <h1>Ophthalmology</h1>
                                            <p>The Department of Ophthalmology offers the latest and best in diagnostics and care for children and adults with vision problems, no matter how simple or complex. We specialise in treating cataracts, traumatic eye injuries, juvenile glaucoma, and a variety of other conditions, with a focus on patient-centred care.</p>
                                    <hr>
                                </div>
                            </div>
                        </div>
						                        <div class="col-lg-4 col-md-6">
                            <div class="speciality-page-item">
                                <button class="speciality-page-item-button">Oral & Maxillofacial Surgery</button>
                                <div class="speciality-page-item-content" style="display: none;">
                                    <button class="speciality-page-item-button-close"><i class="fas fa-times" aria-hidden="true"></i></button>
                                    <h1>Oral & Maxillofacial Surgery</h1>
                                            <p>
                                               The Department of Oral and Maxillofacial Surgery offers comprehensive care services for the region of the face, mouth and jaw. Our highly experienced doctors and nurses apply internationally-recognised procedures to provide effective treatment.

                                            </p>
                                    <hr>
                                </div>
                            </div>
                        </div>
						                        <div class="col-lg-4 col-md-6">
                            <div class="speciality-page-item">
                                <button class="speciality-page-item-button">Orthopaedics</button>
                                <div class="speciality-page-item-content" style="display: none;">
                                    <button class="speciality-page-item-button-close"><i class="fas fa-times" aria-hidden="true"></i></button>
                                    <h1>Orthopaedics</h1>
                                    <p>
Our Orthopaedics Department takes care of disorders of the bones, joints and the musculoskeletal system in both children and adults. We believe that "Movement is Life," and our department is well-equipped with the specialists to help keep you active and healthy. Our hospitals are equipped with state-of-the-art equipment (including MRI scanners, 64-slice MSCT scans, C-Arm, arthroscopes and chiropractic equipment) and extensive care services at the Department of Physiotherapy and Rehabilitation. Hoan My works with leading Orthopaedic specialist doctors to constantly provide sustainable, affordable, patient-centric healthcare to all in Vietnam.                                    </p>
                                    <hr>
                                </div>
                            </div>
                        </div>
						                        <div class="col-lg-4 col-md-6">
                            <div class="speciality-page-item">
                                <button class="speciality-page-item-button">Paediatric Medicine</button>
                                <div class="speciality-page-item-content" style="display: none;">
                                    <button class="speciality-page-item-button-close"><i class="fas fa-times" aria-hidden="true"></i></button>
                                    <h1>Paediatric Medicine</h1>
                                            <p>
                                                Our specialist Paediatrics Departments at several Hoan My hospitals provide outstanding healthcare services for children. We provide a wide range of clinical services, health enhancement and vaccination programmes for children. Hoan My is committed to advancing the health, wellbeing and safety of all children across the country.

                                            </p>
                                    <hr>
                                </div>
                            </div>
                        </div>
						                        <div class="col-lg-4 col-md-6">
                            <div class="speciality-page-item">
                                <button class="speciality-page-item-button">Palliative Medicine</button>
                                <div class="speciality-page-item-content" style="display: none;">
                                    <button class="speciality-page-item-button-close"><i class="fas fa-times" aria-hidden="true"></i></button>
                                    <h1>Palliative Medicine</h1>
                                            <p>
                                                The Department of Palliative Medicine aims to alleviate the physical and emotional pain and suffering of patients who have cancer or other critical illnesses. The department provides diverse care services with the application of modern techniques and the latest research. The engagement of well-trained, highly compassionate staff enhances the comfort of the patient as much as possible.

                                            </p>
                                    <hr>
                                </div>
                            </div>
                        </div>
						                        <div class="col-lg-4 col-md-6">
                            <div class="speciality-page-item">
                                <button class="speciality-page-item-button">Plastic Surgery & Burns</button>
                                <div class="speciality-page-item-content" style="display: none;">
                                    <button class="speciality-page-item-button-close"><i class="fas fa-times" aria-hidden="true"></i></button>
                                    <h1>Plastic Surgery & Burns</h1>
                                            <p>
                                               The Department of Plastic Surgery & Burns provides medical treatment caused by burns and burn-related complications. Our reconstructive surgeries not only treat the consequences of burns but also help to reduce and recover aesthetic damage due to other causes.

                                            </p>
                                    <hr>
                                </div>
                            </div>
                        </div>
						                        <div class="col-lg-4 col-md-6">
                            <div class="speciality-page-item">
                                <button class="speciality-page-item-button">Psychiatric Medicine</button>
                                <div class="speciality-page-item-content" style="display: none;">
                                    <button class="speciality-page-item-button-close"><i class="fas fa-times" aria-hidden="true"></i></button>
                                    <h1>Psychiatric Medicine</h1>
                                            <p>
                                                The Department of Psychiatric Medicine is devoted to understanding the root causes of mental illnesses in order to provide effective treatment. Protecting our patients' confidentiality and upholding privacy are factors always at the heart of our practice. We strive to deliver comprehensive, effective, and caring treatment.

                                            </p>
                                    <hr>
                                </div>
                            </div>
                        </div>
						                        <div class="col-lg-4 col-md-6">
                            <div class="speciality-page-item">
                                <button class="speciality-page-item-button">Renal Medicine</button>
                                <div class="speciality-page-item-content" style="display: none;">
                                    <button class="speciality-page-item-button-close"><i class="fas fa-times" aria-hidden="true"></i></button>
                                    <h1>Renal Medicine</h1>
                                            <p>
                                               The Department of Renal Medicine cares for patients who have kidney malfunction or kidney-related issues. Thanks to the department's modern equipment and facilities and highly experienced doctors and nurses, the department can offer comprehensive kidney care for our patients.

                                            </p>
                                    <hr>
                                </div>
                            </div>
                        </div>
						                        <div class="col-lg-4 col-md-6">
                            <div class="speciality-page-item">
                                <button class="speciality-page-item-button">Respiratory Medicine</button>
                                <div class="speciality-page-item-content" style="display: none;">
                                    <button class="speciality-page-item-button-close"><i class="fas fa-times" aria-hidden="true"></i></button>
                                    <h1>Respiratory Medicine</h1>
                                            <p>
                                              The Department of Respiratory Medicine provides comprehensive treatment for respiratory diseases. We apply the latest diagnostic and treatment techniques to strengthen lung function, which helps enhance our patients' breathing capacity and lung health.

                                            </p>
                                    <hr>
                                </div>
                            </div>
                        </div>
						                        <div class="col-lg-4 col-md-6">
                            <div class="speciality-page-item">
                                <button class="speciality-page-item-button">Rheumatology & Immunology</button>
                                <div class="speciality-page-item-content" style="display: none;">
                                    <button class="speciality-page-item-button-close"><i class="fas fa-times" aria-hidden="true"></i></button>
                                    <h1>Rheumatology & Immunology</h1>
                                            <p>
                                                The Department of Rheumatology and Immunology applies the most modern treatment methods and therapies following the diagnosis of all rheumatology-related illnesses. The department is proud to include leading doctors in this field from across Vietnam.

                                            </p>
                                    <hr>
                                </div>
                            </div>
                        </div>
						                        <div class="col-lg-4 col-md-6">
                            <div class="speciality-page-item">
                                <button class="speciality-page-item-button">Urology</button>
                                <div class="speciality-page-item-content" style="display: none;">
                                    <button class="speciality-page-item-button-close"><i class="fas fa-times" aria-hidden="true"></i></button>
                                    <h1>Urology</h1>
                                    <p>Hoan My Group has hospitals among the pioneers in Urology in Vietnam. Experienced clinical staff and modern equipment allow Hoan My to provide effective treatments for patients of urological illnesses such as kidney stones, cancer, bladder problems, prostate diseases...
</p>
                                    <hr>
                                </div>
                            </div>
                        </div>

						                    </div>					
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include('footer.php') ?>

</body>
</html>