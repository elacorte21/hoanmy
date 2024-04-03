<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Contact</title>

    <?php include('css.php') ?>

</head>
<body>

    <!-- Header -->
    <?php include('header.php') ?>

    <!-- Cover -->
    <div style="background: url('assets/images/cover-network.jpg') center top / 105%" id="cover" class="network-cover">
        <div class="network-cover-content">
            <h1>Hospitals & Clinics</h1>
        </div>
    </div> 

    <!-- Filter -->
    <div class="container section-hospital-clinic-filter">
		<div class="hospital-clinic-filter-box">
			<form class="form-inline">
				<div class="form-group">
					<p class="text-white">Find your closest hospital or clinic:</p>
				</div>
				<div class="form-group">
					<select class="hospital-clinic-select" name="opt_city" id="opt_city">
						<option value="All-City">All City</option>
<option value="Bien-Hoa-City">Bien Hoa City</option>
<option value="Ca-Mau-City">Ca Mau City</option>
<option value="Can-Tho-City">Can Tho City</option>
<option value="Da-Lat-City">Da Lat City</option>
<option value="Da-Nang-City">Da Nang City</option>
<option value="Dong-Xoai-City">Dong Xoai City</option>
<option value="Ho-Chi-Minh-City">Ho Chi Minh City</option>
<option value="Thu-Dau-Mot-City">Thu Dau Mot City</option>
<option value="Thuan-An-City">Thuan An City</option>
<option value="Vinh-City">Vinh City</option>
					</select>
				</div>
				<div class="form-group">
					<p><a href="#">Use My Current location</a></p>
				</div>
			</form>
		</div>
    </div>

    <!-- Maps -->
    <div class="section-hospital-clinic">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 margin-bottom-50">
                    <p class="paragraph-strong">Hoan My takes pride in providing first-rate, affordable care for all, at a wide range of facilities throughout Vietnam.
                    Our healthcare network includes more than 2,800 operating beds across <strong class="text-blue-sky">14 hospitals</strong> and <strong class="text-blue-sky">7 clinics</strong>.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div id="map" class="hospital-clinic-map-box">
                        
                    </div>
					
                    <script defer src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap&v=3&libraries=geometry"></script>

                </div>
                <div class="col-md-6">
                    <div class="hospital-clinic-list-box">
                        <div class="hospital-clinic-list-wrapper">
							<div class="hospital-clinic-list All-City Ho-Chi-Minh-City">
								<div class="row">
									<div class="hospital-clinic-list-number">
										1
									</div>
									<div class="hospital-clinic-list-content">
											<button class="hospital-clinic-list-btn"><h1>Hospital</h1></button><br/>
											<button class="hospital-clinic-list-btn"><p class="lead">Hoan My Sai Gon Hospital</p></button>
											<input id="lat" type="hidden" name="lat" value="10.800128592267685">
											<input id="long" type="hidden" name="long" value="106.68204695053453">
											<input id="icona" type="hidden" name="icona" value="/assets/images/icons/1.svg">
										<p class="text-grey desc">
											60-60A Phan Xich Long Street, <br>
											Ward 1, Phu Nhuan District, <br>
											Ho Chi Min City<br>
											<a href="https://www.hoanmysaigon.com" target="_blank" class="text-blue">www.hoanmysaigon.com</a>
										</p>
										<div class="hospital-clinic-list-pop-up-wrapper" style="display: none;">
											<div class="hospital-clinic-list-pop-up">
												<div class="hospital-clinic-list-pop-up-content">
													<p class="title">Hoan My Sai Gon Hospital</p>
													<p class="desc margin-bottom-30">
<!--														Established in November 2011, Hoan My Sai Gon is a leading hospital in HCMC with up to 2,000 outpatient visits per day. The hospital is particularly well known for its Cardiology expertise.-->
Hoan My Sai Gon Hospital was established in 1999 and was the first member of the Hoan My family. With the mission of providing high quality healthcare services at reasonable costs, Hoan My Sai Gon Hospital has become a reliable and familiar choice for many Vietnamese people. The hospital offers several specialties, including cardiovascular intervention & surgery, internal medicine, obstetrics & gynaecology, orthopaedics and traditional medicine. Hoan My Sai Gon Hospital provides first rate care to patients not only in Ho Chi Minh City but also in the surrounding cities and provinces.
														
													</p>
													<br>
													<button onclick="location.href='<?php echo $book_appointment_url ?>'" class="appoinment">BOOK APPOINTMENT</button>
												</div>
												
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="hospital-clinic-list All-City Da-Nang-City">
								<div class="row">
									<div class="hospital-clinic-list-number">
										2
									</div>
									<div class="hospital-clinic-list-content">
										<button class="hospital-clinic-list-btn"><h1>Hospital</h1></button><br/>
										<button class="hospital-clinic-list-btn"><p class="lead">Hoan My Da Nang Hospital</p></button>
										<input id="lat" type="hidden" name="lat" value="16.059527388832336">
										<input id="long" type="hidden" name="long" value="108.20775645058853">
										<input id="icona" type="hidden" name="icona" value="/assets/images/icons/2.svg">
										<p class="text-grey desc">
											161 Nguyen Van Linh Street, <br>
											Thanh Khe District, <br>
											Da Nang City<br>
											<a href="https://www.hoanmydanang.com" target="_blank" class="text-blue">www.hoanmydanang.com</a>
										</p>
										<div class="hospital-clinic-list-pop-up-wrapper" style="display: none;">
											<div class="hospital-clinic-list-pop-up">
												<div class="hospital-clinic-list-pop-up-content">
													<p class="title">Hoan My Da Nang Hospital</p>
													<p class="desc">
<!--														Hoan My Da Nang Hospital was established in 2002 with the mission to provide high quality, affordable healthcare services to people in Central Vietnam.-->
Hoan My Da Nang Hospital was established in 2002, in order to provide affordable, high quality healthcare to the people of central Vietnam. From having a capacity of 100 beds in its early days, Hoan My Da Nang Hospital has grown to offer around 360 beds, maximising its capability to serve local healthcare needs. Key specialties here include cardiology, obstetrics & gynaecology, paediatrics, gastroenterology, orthopaedics and neurology.
													</p>
													<button onclick="location.href='<?php echo $book_appointment_url ?>'" class="appoinment">BOOK APPOINTMENT</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="hospital-clinic-list All-City Can-Tho-City">
								<div class="row">
									<div class="hospital-clinic-list-number">
										3
									</div>
									<div class="hospital-clinic-list-content">
										<button class="hospital-clinic-list-btn"><h1>Hospital</h1></button><br/>
										<button class="hospital-clinic-list-btn"><p class="lead">Hoan My Cuu Long Hospital</p></button>
										<input id="lat" type="hidden" name="lat" value="10.005284992812427">
										<input id="long" type="hidden" name="long" value="105.79696255052816">
										<input id="icona" type="hidden" name="icona" value="/assets/images/icons/3.svg">
										<p class="text-grey desc">
											20 Vo Nguyen Giap Street, <br>
											Cai Rang District, <br>
											Can Tho City<br>
											<a href="https://www.hoanmycuulong.com" target="_blank" class="text-blue">www.hoanmycuulong.com</a>
										</p>
										<div class="hospital-clinic-list-pop-up-wrapper" style="display: none;">
											<div class="hospital-clinic-list-pop-up">
												<div class="hospital-clinic-list-pop-up-content">
													<p class="title">Hoan My Cuu Long</p>
													<p class="desc">
<!--														Hoan My Cuu Long Hospital is one of the cornerstones of the Hoan My Group. Established in 2007, the hospital has grown steadily, helping to ease the burden on other high tier hospitals and receiving thousands of patients daily for treatments spanning the 30 specialties at the hospital, and more.-->
Hoan My Cuu Long Hospital was established in 2007 in order to provide the people of the Mekong Delta and the neighbouring provinces with excellent healthcare services at affordable costs, thereby minimising travel distances to other major hospitals. Building upon the inherited expertise of the Hoan My Medical Corporation, Hoan My Cuu Long Hospital is constantly developing its service offerings. Hoan My Cuu Long Hospital accommodates thousands of patients - both visiting and receiving treatment - every day.
													</p>
													
												</div>
												<div class="hospital-clinic-list-pop-up-content2">
												<button onclick="location.href='<?php echo $book_appointment_url ?>'" class="appoinment">BOOK APPOINTMENT</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="hospital-clinic-list All-City Da-Lat-City">
								<div class="row">
									<div class="hospital-clinic-list-number">
										4
									</div>
									<div class="hospital-clinic-list-content">
										<button class="hospital-clinic-list-btn"><h1>Hospital</h1></button><br/>
										<button class="hospital-clinic-list-btn"><p class="lead">Hoan My Da Lat Hospital</p></button>
										<input id="lat" type="hidden" name="lat" value="11.923979347876909">
										<input id="long" type="hidden" name="long" value="108.45757572589258"> 
										<input id="icona" type="hidden" name="icona" value="/assets/images/icons/4.svg">
										<p class="text-grey desc">
											Long Tho Hill, <br>
											Ward 10, <br>
											Da Lat City<br>
											<a href="https://www.hoanmydalat.com" target="_blank" class="text-blue">www.hoanmydalat.com</a>
										</p>
										<div class="hospital-clinic-list-pop-up-wrapper" style="display: none;">
											<div class="hospital-clinic-list-pop-up">
												<div class="hospital-clinic-list-pop-up-content">
													<p class="title">Hoan My Da Lat Hospital</p>
													<p class="desc">
<!--														Since its establishment in 2008, Hoan My Da Lat Hospital has been passionately dedicated to providing high quality care with heart at affordable prices to the people of the Central Highlands and neighbouring regions. The hospital’s location in the provinces makes life easier for our patients, who do not need to travel to a major city for treatment.-->
Hoan My Da Lat Hospital was established in 2008, helping to reduce the financial burden for those in the Lam Dong and neighbouring provinces who would otherwise need to travel long distances to other big cities. The hospital currently has a capacity of around 200 beds and strong specialty areas including obstetrics & gynaecology, general medicine, general surgery, paediatrics and emergency services. Caring for patients with heart and always striving for excellence in its clinical expertise, Hoan My Da Lat has become a familiar and trusted healthcare choice for people in the Central Highlands.
													</p>
													<button onclick="location.href='<?php echo $book_appointment_url ?>'" class="appoinment">BOOK APPOINTMENT</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="hospital-clinic-list All-City Ca-Mau-City">
								<div class="row">
									<div class="hospital-clinic-list-number">
										5
									</div>
									<div class="hospital-clinic-list-content">
										<button class="hospital-clinic-list-btn"><h1>Hospital</h1></button><br/>
										<button class="hospital-clinic-list-btn"><p class="lead">Hoan My Minh Hai Hospital</p></button>
										<input id="lat" type="hidden" name="lat" value="9.174261993387931">
										<input id="long" type="hidden" name="long" value="105.14914895052205">
										<input id="icona" type="hidden" name="icona" value="/assets/images/icons/5.svg">
										<p class="text-grey desc">
											09 Lac Long Quan Street,<br>
											Ward 7, Ca Mau City,<br>
											Ca Mau Province <br>
											<a href="https://www.hoanmyminhhai.com" target="_blank" class="text-blue">www.hoanmyminhhai.com</a>
										</p>
										<div class="hospital-clinic-list-pop-up-wrapper" style="display: none;">
											<div class="hospital-clinic-list-pop-up">
												<div class="hospital-clinic-list-pop-up-content">
													<p class="title">Hoan My Minh Hai Hospital</p>
													<p class="desc">
<!--														Hoan My Minh Hai Hospital was established in 2010 to provide high quality, affordable healthcare to patients in Ca Mau and the surrounding regions.-->
Hoan My Minh Hai Hospital was established in 2010 with the mission of providing  people in the Ca Mau region and neighbouring provinces with first rate, affordable healthcare services. The hospital currently has a capacity of around 100 beds, and key specialties include obstetrics, paediatrics, emergency - ICU services, interdisciplinary medicine, general surgery, general internal medicine, functional exploration, and cardiovascular and endocrine expertise. Always putting the patient first, Hoan My Minh Hai Hospital has become the hospital of choice for many in Ca Mau and the neighbouring provinces.
													</p>
													<button onclick="location.href='<?php echo $book_appointment_url ?>'" class="appoinment">BOOK APPOINTMENT</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="hospital-clinic-list All-City Thuan-An-City">
								<div class="row">
									<div class="hospital-clinic-list-number">
										6
									</div>
									<div class="hospital-clinic-list-content">
										<button class="hospital-clinic-list-btn"><h1>Hospital</h1></button><br/>
										<button class="hospital-clinic-list-btn"><p class="lead">Hanh Phuc International Hospital</p></button>
										<input id="lat" type="hidden" name="lat" value="10.820326816933175">
										<input id="long" type="hidden" name="long" value="106.68375645882557">
										<input id="icona" type="hidden" name="icona" value="/assets/images/icons/6.svg">
										<p class="text-grey desc">
											18 Binh Duong Highway,<br>
											Thuan An City,<br>
											Binh Duong Province<br>
											<a href="https://www.hanhphuchospital.com" target="_blank" class="text-blue">www.hanhphuchospital.com</a>
										</p>
										<div class="hospital-clinic-list-pop-up-wrapper" style="display: none;">
											<div class="hospital-clinic-list-pop-up">
												<div class="hospital-clinic-list-pop-up-content">
													<p class="title">Hanh Phuc International Hospital</p>
													<p class="desc">
Hanh Phuc International Hospital was established in 2011 and officially joined Hoan My Medical Corporation in 2018, becoming the first hospital to lead the premium segment of the Hoan My Group. Hanh Phuc International Hospital is proud to be the first Vietnamese obstetrics and paediatric hospital to receive the prestigious JCI gold seal. The women's and children's hospital upholds the highest standards in healthcare delivery, with a focus on the provision of exceptional patient-centric care.
													</p>
													<button onclick="location.href='<?php echo $book_appointment_url ?>'" class="appoinment">BOOK APPOINTMENT</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="hospital-clinic-list All-City Thu-Dau-Mot-City">
								<div class="row">
									<div class="hospital-clinic-list-number">
										7
									</div>
									<div class="hospital-clinic-list-content">
										<button class="hospital-clinic-list-btn"><h1>Hospital</h1></button><br/>
										<button class="hospital-clinic-list-btn"><p class="lead">Binh Duong Private Hospital</p></button>
										<input id="lat" type="hidden" name="lat" value="10.991323592137519">
										<input id="long" type="hidden" name="long" value="106.64740825053619">
										<input id="icona" type="hidden" name="icona" value="/assets/images/icons/7.svg">
										<p class="text-grey desc">
											151 Huynh Van Cu,<br>
											Chanh My Ward,<br>
											Thu Dau Mot City,<br>
											Binh Duong Province<br>
										</p>
										<div class="hospital-clinic-list-pop-up-wrapper" style="display: none;">
											<div class="hospital-clinic-list-pop-up">
												<div class="hospital-clinic-list-pop-up-content">
													<p class="title">Binh Duong Private Hospital</p>
													<p class="desc">
Binh Duong Private Hospital was established in 2000 and was the first private hospital in Binh Duong province. Binh Duong Private Hospital officially became a member of Hoan My Medical Corporation in August 2017, with the mission of providing healthcare services to the local community at an affordable cost. The hospital specialises in internal medicine, general surgery, obstetrics & gynaecology, paediatrics, emergency services, laboratory tests, imaging and diagnostics, and other things. Binh Duong Private Hospital has become a reliable healthcare choice for local individuals, families, and businesses in the Binh Duong province and surrounding areas.
													</p>
													<button onclick="location.href='<?php echo $book_appointment_url ?>'" class="appoinment">BOOK APPOINTMENT</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="hospital-clinic-list All-City Dong-Xoai-City">
								<div class="row">
									<div class="hospital-clinic-list-number">
										8
									</div>
									<div class="hospital-clinic-list-content">
										<button class="hospital-clinic-list-btn"><h1>Hospital</h1></button><br/>
										<button class="hospital-clinic-list-btn"><p class="lead">Hoan My Binh Phuoc Hospital</p></button>
										<input id="lat" type="hidden" name="lat" value="11.48552359180265">
										<input id="long" type="hidden" name="long" value="106.8812388505404">
										<input id="icona" type="hidden" name="icona" value="/assets/images/icons/8.svg">
										<p class="text-grey desc">
											Tien Hung Hamlet,<br>
											Dong Xoai City,<br>
											Binh Phuoc Province<br>
											<a href="https://www.hoanmybinhphuoc.com" target="_blank" class="text-blue">www.hoanmybinhphuoc.com</a>
										</p>
										<div class="hospital-clinic-list-pop-up-wrapper" style="display: none;">
											<div class="hospital-clinic-list-pop-up">
												<div class="hospital-clinic-list-pop-up-content">
													<p class="title">Hoan My Binh Phuoc Hospital</p>
													<p class="desc">
Formerly known as Thanh Tam General Hospital, Hoan My Binh Phuoc Hospital was established in 2011 and then officially joined the Hoan My family in 2017. The hospital enabled Hoan My to expand its health care offerings to the Binh Phuoc region. The hospital provides around 160 beds, and has specialty areas including ophthalmology, obstetrics & gynaecology, paediatrics, general surgery, emergency services and general internal medicine. Caring for patients with heart and always striving for excellence in its clinical expertise, Hoan My Binh Phuoc Hospital is swiftly becoming the healthcare provider of choice for local residents.
													</p>
													<button onclick="location.href='<?php echo $book_appointment_url ?>'" class="appoinment">BOOK APPOINTMENT</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="hospital-clinic-list All-City Thu-Dau-Mot-City">
								<div class="row">
									<div class="hospital-clinic-list-number">
										9
									</div>
									<div class="hospital-clinic-list-content">
										<button class="hospital-clinic-list-btn"><h1>Hospital</h1></button><br/>
										<button class="hospital-clinic-list-btn"><p class="lead">Hoan My Van Phuc 1 Hospital</p></button>
										<input id="lat" type="hidden" name="lat" value="11.038712228888807">
										<input id="long" type="hidden" name="long" value="106.62786100930406">
										<input id="icona" type="hidden" name="icona" value="/assets/images/icons/9.svg">
										<p class="text-grey desc">
											45 Ho Van Cong,<br>
											Tuong Binh Hiep Ward,<br>
											Thu Dau Mot City,<br>
											Binh Duong Province<br>
											<a href="https://www.hoanmyvanphuc.com" target="_blank" class="text-blue">www.hoanmyvanphuc.com</a>
										</p>
										<div class="hospital-clinic-list-pop-up-wrapper" style="display: none;">
											<div class="hospital-clinic-list-pop-up">
												<div class="hospital-clinic-list-pop-up-content">
													<p class="title">Hoan My Van Phuc 1 Hospital</p>
													<p class="desc">
Hoan My Van Phuc 1 Hospital was established in 2011 before going on to officially join the Hoan My family in 2016. Its aim is to provide the best quality healthcare services at affordable costs. Currently, the hospital has a capacity of around 500 beds and offers 11 specialties. Hoan My Van Phuc 1 Hospital is a trusted and reliable healthcare provider for the people of the Binh Duong province and neighbouring regions.
													</p>
													<button onclick="location.href='<?php echo $book_appointment_url ?>'" class="appoinment">BOOK APPOINTMENT</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="hospital-clinic-list All-City Thuan-An-City">
								<div class="row">
									<div class="hospital-clinic-list-number">
										10
									</div>
									<div class="hospital-clinic-list-content">
										<button class="hospital-clinic-list-btn"><h1>Hospital</h1></button><br/>
										<button class="hospital-clinic-list-btn"><p class="lead">Hoan My Van Phuc 2 Hospital</p></button>
										<input id="lat" type="hidden" name="lat" value="10.973582290278623">
										<input id="long" type="hidden" name="long" value="106.68968020773647">
										<input id="icona" type="hidden" name="icona" value="/assets/images/icons/10.svg">
										<p class="text-grey desc">
											28/1 Binh Phuoc B Quarter,<br>
											Binh Chuan Ward,<br>
											Thuan An City,<br>
											Binh Duong Province<br>
											<a href="https://www.hoanmyvanphuc2.com" target="_blank" class="text-blue">www.hoanmyvanphuc2.com</a>
										</p>
										<div class="hospital-clinic-list-pop-up-wrapper" style="display: none;">
											<div class="hospital-clinic-list-pop-up">
												<div class="hospital-clinic-list-pop-up-content">
													<p class="title">Hoan My Van Phuc 2 Hospital</p>
													<p class="desc">
Hoan My Van Phuc 2 Hospital was established in 2013 and welcomed to the Hoan My family in 2016. The hospital always strives to enhance its service offerings, facilities and equipment, with a strong focus on patient-centric care. The hospital aims to become a specialist maternity centre that can best serve the needs of those residing in Thuan An town and the neighbouring areas.
													</p>
													<button onclick="location.href='<?php echo $book_appointment_url ?>'" class="appoinment">BOOK APPOINTMENT</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="hospital-clinic-list All-City Bien-Hoa-City">
								<div class="row">
									<div class="hospital-clinic-list-number">
										11
									</div>
									<div class="hospital-clinic-list-content">
										<button class="hospital-clinic-list-btn"><h1>Hospital</h1></button><br/>
										<button class="hospital-clinic-list-btn"><p class="lead">Hoan My ITO – Dong Nai Hospital</p></button>
										<input id="lat" type="hidden" name="lat" value="10.947251192167537">
										<input id="long" type="hidden" name="long" value="106.8265587505359">
										<input id="icona" type="hidden" name="icona" value="/assets/images/icons/11.svg">
										<p class="text-grey desc">
											F99 Vo Thi Sau, <br>
											Thong Nhat Ward, <br>
											Bien Hoa City, <br>
											Dong Nai Province<br>
											<a href="https://www.hoanmyitodongnai.com" target="_blank" class="text-blue">www.hoanmyitodongnai.com</a>
										</p>
										<div class="hospital-clinic-list-pop-up-wrapper" style="display: none;">
											<div class="hospital-clinic-list-pop-up">
												<div class="hospital-clinic-list-pop-up-content">
													<p class="title">Hoan My ITO - Dong Nai Hospital</p>
													<p class="desc">
Hoan My ITO – Dong Nai Hospital joined the Hoan My network in 2012. The hospital aims to provide first rate healthcare services at reasonable costs to residents of Bien Hoa – Dong Nai. Hoan My ITO – Dong Nai focuses on key specialties that include surgery, orthopaedics, and rehabilitation. Currently, Hoan My ITO – Dong Nai has a capacity of more than 145 beds, and continues to grow in order to meet the healthcare needs of local residents.
													</p>
													<button onclick="location.href='<?php echo $book_appointment_url ?>'" class="appoinment">BOOK APPOINTMENT</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="hospital-clinic-list All-City Bien-Hoa-City">
								<div class="row">
									<div class="hospital-clinic-list-number">
										12
									</div>
									<div class="hospital-clinic-list-content">
										<button class="hospital-clinic-list-btn"><h1>Hospital</h1></button><br/>
										<button class="hospital-clinic-list-btn"><p class="lead">Hoan My Dong Nai International Hospital</p></button>
										<input id="lat" type="hidden" name="lat" value="10.95818979216005">
										<input id="long" type="hidden" name="long" value="106.84504295053591">
										<input id="icona" type="hidden" name="icona" value="/assets/images/icons/12.svg">
										<p class="text-grey desc">
											1048A Pham Van Thuan,<br>
											Tan Mai Ward,<br>
											Bien Hoa City,<br>
											Dong Nai Province<br>
											<a href="https://www.hoanmydongnai.com" target="_blank" class="text-blue">www.hoanmydongnai.com</a>
										</p>
										<div class="hospital-clinic-list-pop-up-wrapper" style="display: none;">
											<div class="hospital-clinic-list-pop-up">
												<div class="hospital-clinic-list-pop-up-content">

													<p class="title">Hoan My Dong Nai International Hospital</p>
													<p class="desc">
Hoan My Dong Nai International Hospital joined the Hoan My family in 2013. The hospital aims to provide effective and trusted healthcare services with heart. The hospital focuses on key specialties including obstetrics & gynaecology and physiotherapy & rehabilitation. Hoan My Dong Nai International Hospital has around 330 beds.
													</p>
													<button onclick="location.href='<?php echo $book_appointment_url ?>'" class="appoinment">BOOK APPOINTMENT</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="hospital-clinic-list All-City Vinh-City">
								<div class="row">
									<div class="hospital-clinic-list-number">
										13
									</div>
									<div class="hospital-clinic-list-content">
										<button class="hospital-clinic-list-btn"><h1>Hospital</h1></button><br/>
										<button class="hospital-clinic-list-btn"><p class="lead">Hoan My – Vinh International Hospital</p></button>
										<input id="lat" type="hidden" name="lat" value="18.698217387243503">
										<input id="long" type="hidden" name="long" value="105.68687655062347">, 
										<input id="icona" type="hidden" name="icona" value="/assets/images/icons/13.svg">
										<p class="text-grey desc">
											99 Pham Dinh Toai,<br>
											Nghi Phu Hamlet,<br>
											Vinh City,<br>
											Nghe An Province<br>
											<a href="https://www.hoanmyvinh.com" target="_blank" class="text-blue">www.hoanmyvinh.com</a>
										</p>
										<div class="hospital-clinic-list-pop-up-wrapper" style="display: none;">
											<div class="hospital-clinic-list-pop-up">
												<div class="hospital-clinic-list-pop-up-content">
													<p class="title">Hoan My - Vinh International Hospital</p>
													<p class="desc">
Hoan My Vinh International was welcomed to the Hoan My family in 2015. The hospital aims to provide cutting-edge healthcare services to residents in  Northern/Central Vietnam. The hospital's key specialties include obstetrics & gynaecology, emergency services, laparoscopic surgery and general internal medicine. Hoan My Vinh International Hospital currently operates with a capacity of around 220 beds and is known as one of the most modern hospitals in the region.
													</p>
													<button onclick="location.href='<?php echo $book_appointment_url ?>'" class="appoinment">BOOK APPOINTMENT</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="hospital-clinic-list All-City Ho-Chi-Minh-City">
								<div class="row">
									<div class="hospital-clinic-list-number">
										14
									</div>
									<div class="hospital-clinic-list-content">
										<button class="hospital-clinic-list-btn"><h1>Hospital</h1></button><br/>
										<button class="hospital-clinic-list-btn"><p class="lead">Hoan My International Eye Hospital</p></button>
										<input id="lat" type="hidden" name="lat" value="10.78114449228059">
										<input id="long" type="hidden" name="long" value="106.67934195053425">, 
										<input id="icona" type="hidden" name="icona" value="/assets/images/icons/14.svg">
										<p class="text-grey desc">
											27 Ky Dong,<br>
											Ward 9,<br>
											District 3,<br>
											Ho Chi Minh City<br>
											<a href="https://www.matquoctehoanmy.com" target="_blank" class="text-blue">www.matquoctehoanmy.com</a>
										</p>
										<div class="hospital-clinic-list-pop-up-wrapper" style="display: none;">
											<div class="hospital-clinic-list-pop-up">
												<div class="hospital-clinic-list-pop-up-content">
													<p class="title">Hoan My International Eye Hospital</p>
													<p class="desc">
Hoan My International Eye Hospital joined the Hoan My network in 2016. Hoan My International Eye Hospital has a strong focus on medical excellence, investing in first rate clinical staff and advanced equipment to provide enhanced ophthalmology services to the residents of Ho Chi Minh city and surrounding provinces. The hospital has modern facilities and is located at a convenient central location. It is a small, specialist hospital with 14 beds, which means that clinical staff are very attentive to patient needs.
													</p>
													<button onclick="location.href='<?php echo $book_appointment_url ?>'" class="appoinment">BOOK APPOINTMENT</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="hospital-clinic-list All-City Ho-Chi-Minh-City">
								<div class="row">
									<div class="hospital-clinic-list-number">
										15
									</div>
									<div class="hospital-clinic-list-content">
										<button class="hospital-clinic-list-btn"><h1>Clinic</h1></button><br/>
										<button class="hospital-clinic-list-btn"><p class="lead">Hoan My Sai Gon Clinic</p></button>
										<input id="lat" type="hidden" name="lat" value="10.781143990588445">
										<input id="long" type="hidden" name="long" value="106.66397273560862">
										<input id="icona" type="hidden" name="icona" value="/assets/images/icons/15.svg">
										<p class="text-grey desc">
											04A Hoang Viet Street,<br>
											Ward 4, Tan Binh District,<br>
											Ho Chi Minh City<br>
											<a href="https://www.hoanmysaigonclinic.com" target="_blank" class="text-blue">www.hoanmysaigonclinic.com</a>
										</p>
										<div class="hospital-clinic-list-pop-up-wrapper" style="display: none;">
											<div class="hospital-clinic-list-pop-up">
												<div class="hospital-clinic-list-pop-up-content">
													<p class="title">Hoan My Sai Gon Clinic</p>
													<p class="desc">
<!--														Established in 2001, Hoan My Sai Gon Clinic (previously called Hoan My Tan Binh General Clinic, and renamed in November 2015) has become a trusted first port of call for many in HCMC and the neighboring areas. With the patient-centricity front of mind, our team of doctors always strive to provide the best care at affordable costs.-->
Hoan My Sai Gon General Clinic underwent rebranding and came into operation in 2015. The modern Clinic is swiftly becoming a renowned healthcare provider for the residents of Ho Chi Minh City. Hoan My Sai Gon General Clinic's  specialties include cardiology, endocrinology, obstetrics and gynaecology, paediatrics, general surgery and gastroenterology.
													</p>
													<button onclick="location.href='<?php echo $book_appointment_url ?>'" class="appoinment">BOOK APPOINTMENT</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="hospital-clinic-list All-City Ho-Chi-Minh-City">
								<div class="row">
									<div class="hospital-clinic-list-number">
										16
									</div>
									<div class="hospital-clinic-list-content">
										<button class="hospital-clinic-list-btn"><h1>Clinic</h1></button><br/>
										<button class="hospital-clinic-list-btn"><p class="lead">Hanh Phuc International Medical Centre</p></button>
										<input id="lat" type="hidden" name="lat" value="10.772210999999993">
										<input id="long" type="hidden" name="long" value="106.68414411422283">
										<input id="icona" type="hidden" name="icona" value="/assets/images/icons/16.svg">
										<p class="text-grey desc">
											97 Nguyen Thi Minh Khai,<br>
											District 1,<br>
											Ho Chi Minh City<br>
											<a href="https://www.hanhphuchospital.com/en/satellite-clinics/estella.com" target="_blank" class="text-blue">www.hanhphuchospital.com/en/satellite-clinics/estella/</a>
										</p>
										<div class="hospital-clinic-list-pop-up-wrapper" style="display: none;">
											<div class="hospital-clinic-list-pop-up">
												<div class="hospital-clinic-list-pop-up-content">
													<p class="title">Hanh Phuc International Medical Centre</p>
													<p class="desc">
Hanh Phuc International Medical Centre came into operation in 2013. The Medical Centre aims to provide women and children with an international standard of healthcare services. Hanh Phuc International Medical Centre focuses on providing comprehensive paediatric and obstetric & gynaecology services.
													</p>
													<button onclick="location.href='<?php echo $book_appointment_url ?>'" class="appoinment">BOOK APPOINTMENT</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="hospital-clinic-list All-City Thu-Dau-Mot-City">
								<div class="row">
									<div class="hospital-clinic-list-number">
										17
									</div>
									<div class="hospital-clinic-list-content">
										<button class="hospital-clinic-list-btn"><h1>Clinic</h1></button><br/>
										<button class="hospital-clinic-list-btn"><p class="lead">Hoan My Van Phuc 1 Clinic</p></button>
										<input id="lat" type="hidden" name="lat" value="11.0732109">
										<input id="long" type="hidden" name="long" value="106.6841186">
										<input id="icona" type="hidden" name="icona" value="/assets/images/icons/17.svg">
										<p class="text-grey desc">
											B19 Lot H11 & H12,<br>
											Tran Quoc Toan, Hoa Phu Ward,<br>
											Thu Dau Mot City,<br>
											Binh Duong Province
										</p>
										<div class="hospital-clinic-list-pop-up-wrapper" style="display: none;">
											<div class="hospital-clinic-list-pop-up">
												<div class="hospital-clinic-list-pop-up-content">
													<p class="title">Hoan My Van Phuc 1 Clinic</p>
													<p class="desc">
Hoan My Van Phuc 1 Clinic was established in 2011. The Clinic aims to provide local residents with high-quality healthcare services and patient-centric care. Hoan My Van Phuc 1 Clinic is swiftly evolving into a general clinic with a wide range of specialties, including internal medicine, surgery, ENT, odontology, ophthalmology, obstetrics & gynaecology, and paediatrics.
													</p>
													<button onclick="location.href='<?php echo $book_appointment_url ?>'" class="appoinment">BOOK APPOINTMENT</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="hospital-clinic-list All-City Ho-Chi-Minh-City">
								<div class="row">
									<div class="hospital-clinic-list-number">
										18
									</div>
									<div class="hospital-clinic-list-content">
										<button class="hospital-clinic-list-btn"><h1>Clinic</h1></button><br/>
										<button class="hospital-clinic-list-btn"><p class="lead">Hoan My Huu Nghi General Clinic</p></button>
										<input id="lat" type="hidden" name="lat" value="10.848134560794652">
										<input id="long" type="hidden" name="long" value="106.67614705029946">
										<input id="icona" type="hidden" name="icona" value="/assets/images/icons/18.svg">
										<p class="text-grey desc">
											501-503 Nguyen Oanh,<br>
											Ward 17, Go Vap District,<br>
											Ho Chi Minh City<br>
											<a href="https://www.hoanmyhuunghi.com" target="_blank" class="text-blue">www.hoanmyhuunghi.com</a>
										</p>
										<div class="hospital-clinic-list-pop-up-wrapper" style="display: none;">
											<div class="hospital-clinic-list-pop-up">
												<div class="hospital-clinic-list-pop-up-content">
													<p class="title">Hoan My Huu Nghi General Clinic</p>
													<p class="desc">
Hoan My Huu Nghi General Clinic was established in 2015. The clinic aims to provide timely support for emergency cases and excellent general healthcare services to residents in the surrounding region. Hoan My Huu Nghi General Clinic's key specialties include internal medicine, surgery, ENT, odontology, and ophthalmology.
													</p>
													<button onclick="location.href='<?php echo $book_appointment_url ?>'" class="appoinment">BOOK APPOINTMENT</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="hospital-clinic-list All-City Ho-Chi-Minh-City">
								<div class="row">
									<div class="hospital-clinic-list-number">
										19
									</div>
									<div class="hospital-clinic-list-content">
										<button class="hospital-clinic-list-btn"><h1>Clinic</h1></button><br/>
										<button class="hospital-clinic-list-btn"><p class="lead">Hoan My Celadon Family Doctor Clinic</p></button>
										<input id="lat" type="hidden" name="lat" value="10.805756161568846">
										<input id="long" type="hidden" name="long" value="106.61848786213956">
										<input id="icona" type="hidden" name="icona" value="/assets/images/icons/19.svg">
										<p class="text-grey desc">
											70 - N1 Street, Son Ky Ward,<br>
											Tan Phu District, Ho Chi Minh City<br>
											<a href="https://www.bacsigiadinhhoanmy.com" target="_blank" class="text-blue">www.bacsigiadinhhoanmy.com</a>
										</p>
										<div class="hospital-clinic-list-pop-up-wrapper" style="display: none;">
											<div class="hospital-clinic-list-pop-up">
												<div class="hospital-clinic-list-pop-up-content">
													<p class="title">Hoan My Celadon Family Doctor Clinic</p>
													<p class="desc">
Hoan My Celadon Family Doctor Clinic was established in 2018. The Clinic marks an expansion of the Hoan My Medical Corporation to the west side of Ho Chi Minh City. Hoan My Celadon Family Doctor Clinic provides services relating to general medicine, geriatrics, and paediatrics.
													</p>
													<button onclick="location.href='<?php echo $book_appointment_url ?>'" class="appoinment">BOOK APPOINTMENT</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="hospital-clinic-list All-City Ho-Chi-Minh-City">
								<div class="row">
									<div class="hospital-clinic-list-number">
										20
									</div>
									<div class="hospital-clinic-list-content">
										<button class="hospital-clinic-list-btn"><h1>Clinic</h1></button><br/>
										<button class="hospital-clinic-list-btn"><p class="lead">Hoan My Skyline Family Doctor Clinic</p></button>
										<input id="lat" type="hidden" name="lat" value="10.714329500000026">
										<input id="long" type="hidden" name="long" value="106.74115881305664">
										<input id="icona" type="hidden" name="icona" value="/assets/images/icons/20.svg">
										<p class="text-grey desc">
											89 Hoang Quoc Viet,<br>
											Phu Thuan Ward, District 7,<br>
											Ho Chi Minh City<br>
											<a href="https://www.bacsigiadinhhoanmy.com" target="_blank" class="text-blue">www.bacsigiadinhhoanmy.com</a>
										</p>
										<div class="hospital-clinic-list-pop-up-wrapper" style="display: none;">
											<div class="hospital-clinic-list-pop-up">
												<div class="hospital-clinic-list-pop-up-content">
													<p class="title">Hoan My Skyline Family Doctor Clinic</p>
													<p class="desc">
Hoan My Skyline Family Doctor Clinic was established in 2019. The Clinic aims to provide high-quality healthcare services for the residents in Ho Chi Minh City. Hoan My Skyline Family Doctor Clinic focuses on general medicine, geriatrics, and paediatrics.
													</p>
													<button onclick="location.href='<?php echo $book_appointment_url ?>'" class="appoinment">BOOK APPOINTMENT</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="hospital-clinic-list All-City Ho-Chi-Minh-City">
								<div class="row">
									<div class="hospital-clinic-list-number">
										21
									</div>
									<div class="hospital-clinic-list-content">
										<button class="hospital-clinic-list-btn"><h1>Clinic</h1></button><br/>
										<button class="hospital-clinic-list-btn"><p class="lead">Hanh Phuc International Clinic</p></button>
										<input id="lat" type="hidden" name="lat" value="10.802025558438453">
										<input id="long" type="hidden" name="long" value="106.748844222177">
										<input id="icona" type="hidden" name="icona" value="/assets/images/icons/21.svg">
										<p class="text-grey desc">
											5th Floor - Estella Place,<br>
											88 Song Hanh, An Phu Ward,<br>
											District 2, Ho Chi Minh City
										</p>
										<div class="hospital-clinic-list-pop-up-wrapper" style="display: none;">
											<div class="hospital-clinic-list-pop-up">
												<div class="hospital-clinic-list-pop-up-content">
													<p class="title">Hanh Phuc International Clinic</p>
													<p class="desc">
Hanh Phuc International Clinic came into operation in 2019 and is one of the newest additions to the Hoan My family. The clinic strives to provide excellent standards of patient-centric care. Hanh Phuc International Clinic currently focuses on obstetrics & gynaecology and paediatrics.
													</p>
													<button onclick="location.href='<?php echo $book_appointment_url ?>'" class="appoinment">BOOK APPOINTMENT</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
                    <div class="hospital-clinic-list-popup" style="display: none;">
                        <div class="hospital-clinic-list-popup-content">
                            <button class="close hospital-clinic-list-close"><i class="fas fa-times"></i></button>
                            <img class="hospital-clinic-icon" src="assets/images/icons/hospital.png" alt="">
                            <h1>Hospital</h1>
                            <p class="popup-title-replace"></p>
                            <p class="popup-desc-replace"></p>
                            <button onclick="location.href='<?php echo $book_appointment_url ?>'" class="appoinment">BOOK APPOINTMENT</button>
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
