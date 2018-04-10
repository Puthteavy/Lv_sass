@extends('FrontEnd.master')
@php
    $base_url = asset('FrontEnd');
    $image_url = asset('{{$base_url}}/images');
@endphp
@section('title','Sell and Buy something from Plus 720')
@section('css')
    @parent
@endsection
@section('js')
    @parent

@endsection
@section('content')
<section class="banner-advertise">
    <img src="{{$base_url}}/images/main/baner.jpg" alt="" class="img-fluid">
</section>

<section class="cat-list-item">
    <div class="cat-info">
        <div class="cat-choose">
            <button class="title btn btn_cat">
                <i class="fas fa-bars"></i> Choose category <i class="fas fa-chevron-down"></i>
            </button>
            <h2>Welcome to khmer24.com, the biggest online market in Cambodia.</h2>
        </div>
        <div class="cat-list">
            <div id="cate">
                <nav>
                    <ul class="main_cat">
                        <li class="active">
                            <a class="maincat" href="#popuar_cateogories" title="Popular Categories"><i class="far fa-heart"></i> Popular Categories</a>
                        </li>
                        <li class="">
                            <a class="maincat" href="" title="Phones &amp; Tablets"><i class="fas fa-mobile-alt"></i> Phones &amp; Tablets</a>
                            <div class="sub_cat">
                                <div class="list_sub_box">
                                    <div class="left_box">
                                        <a class="cat_title" href="#" title="Phones &amp; Tablets"><i class="icon-phone"></i> Phones &amp; Tablets</a>
                                        <a class="viewall" href="#" title="View All">View All <span>»</span></a>
                                        <div class="scroll-wrapper" style="position: relative;">
                                            <ul class="list_sub_cat" style="margin-bottom: 0px; margin-right: 0px; height: 75px;">
                                                <li><a href="" title="Phones, Tablets">Phones, Tablets</a></li>
                                                <li><a href="" title="Smart Watches">Smart Watches</a></li>
                                                <li><a href="" title="Phone Accessories">Phone Accessories</a></li>
                                                <li><a href="" title="Phone Numbers">Phone Numbers</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="">
                            <a class="maincat" href="https://www.khmer24.com/en/c-computer-and-accessories.html" title="Computers &amp; Accessories"><i class="fas fa-laptop"></i> Computers &amp; Accessories</a>
                            <div class="sub_cat">
                                <div class="list_sub_box">
                                    <div class="left_box">
                                        <a class="cat_title" href="https://www.khmer24.com/en/c-computer-and-accessories.html" title="Computers &amp; Accessories"><i class="icon-laptop"></i> Computers &amp; Accessories</a>
                                        <a class="viewall" href="https://www.khmer24.com/en/c-computer-and-accessories.html" title="View All">View All <span>»</span></a>
                                        <div class="scroll-wrapper list_sub_cat scrollbar-light row" style="position: relative;"><ul class="list_sub_cat scrollbar-light row scroll-content" style="margin-bottom: 0px; margin-right: 0px; height: 39px;">
                                                <li><a href="https://www.khmer24.com/en/c-computers.html" title="Computers">Computers</a></li>
                                                <li><a href="https://www.khmer24.com/en/c-computer-accessories.html" title="Computer accessories">Computer accessories</a></li>
                                                <li><a href="https://www.khmer24.com/en/c-softwares.html" title="Softwares">Softwares</a></li>
                                            </ul><div class="scroll-element scroll-x"><div class="scroll-element_outer">    <div class="scroll-element_size"></div>    <div class="scroll-element_track"></div>    <div class="scroll-bar" style="width: 98px;"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer">    <div class="scroll-element_size"></div>    <div class="scroll-element_track"></div>    <div class="scroll-bar" style="height: 103px;"></div></div></div></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="">
                            <a class="maincat" href="https://www.khmer24.com/en/c-electronics-appliances.html" title="Electronics &amp; Appliances"><i class="fas fa-tv"></i> Electronics &amp; Appliances</a>
                            <div class="sub_cat">
                                <div class="list_sub_box">
                                    <div class="left_box">
                                        <a class="cat_title" href="https://www.khmer24.com/en/c-electronics-appliances.html" title="Electronics &amp; Appliances"><i class="icon-monitor"></i> Electronics &amp; Appliances</a>
                                        <a class="viewall" href="https://www.khmer24.com/en/c-electronics-appliances.html" title="View All">View All <span>»</span></a>
                                        <div class="scroll-wrapper list_sub_cat scrollbar-light row" style="position: relative;"><ul class="list_sub_cat scrollbar-light row scroll-content" style="margin-bottom: 0px; margin-right: 0px; height: 75px;">
                                                <li><a href="https://www.khmer24.com/en/c-consumer-electronics.html" title="Consumer Electronics">Consumer Electronics</a></li>
                                                <li><a href="https://www.khmer24.com/en/c-security-camera.html" title="Security Camera">Security Camera</a></li>
                                                <li><a href="https://www.khmer24.com/en/c-cameras-camcorders.html" title="Cameras, camcorders">Cameras, camcorders</a></li>
                                                <li><a href="https://www.khmer24.com/en/c-tvs-videos-and-audios.html" title="TVs, Videos and Audios">TVs, Videos and Audios</a></li>
                                                <li><a href="https://www.khmer24.com/en/c-home-appliances.html" title="Home appliances ">Home appliances </a></li>
                                                <li><a href="https://www.khmer24.com/en/c-video-games-consoles-toys.html" title="Video games, consoles, toys ">Video games, consoles, toys </a></li>
                                            </ul><div class="scroll-element scroll-x"><div class="scroll-element_outer">    <div class="scroll-element_size"></div>    <div class="scroll-element_track"></div>    <div class="scroll-bar" style="width: 98px;"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer">    <div class="scroll-element_size"></div>    <div class="scroll-element_track"></div>    <div class="scroll-bar" style="height: 99px;"></div></div></div></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a class="maincat" href="https://www.khmer24.com/en/cars.html" title="Cars and Vehicles"><i class="fas fa-car"></i> Cars and Vehicles</a>
                            <div class="sub_cat">
                                <div class="list_sub_box">
                                    <div class="left_box">
                                        <a class="cat_title" href="https://www.khmer24.com/en/cars.html" title="Cars and Vehicles"><i class="icon-car"></i> Cars and Vehicles</a>
                                        <a class="viewall" href="https://www.khmer24.com/en/cars.html" title="View All">View All <span>»</span></a>
                                        <div class="scroll-wrapper list_sub_cat scrollbar-light row" style="position: relative;"><ul class="list_sub_cat scrollbar-light row scroll-content" style="margin-bottom: 0px; margin-right: 0px;">
                                                <li><a href="https://www.khmer24.com/en/cars/cars-for-sale.html" title="Cars for Sale">Cars for Sale</a></li>
                                                <li><a href="https://www.khmer24.com/en/cars/bicycles.html" title="Bicycles">Bicycles</a></li>
                                                <li><a href="https://www.khmer24.com/en/cars/motorcycles-for-sale.html" title="Motorcycles for Sale">Motorcycles for Sale</a></li>
                                                <li><a href="https://www.khmer24.com/en/cars/vehicles-for-rent.html" title=" Vehicles for Rent"> Vehicles for Rent</a></li>
                                                <li><a href="https://www.khmer24.com/en/cars/car-maintenance-repair.html" title="Car Maintenance &amp; Repair">Car Maintenance &amp; Repair</a></li>
                                                <li><a href="https://www.khmer24.com/en/cars/lorries-vans.html" title="Lorries &amp; Vans">Lorries &amp; Vans</a></li>
                                                <li><a href="https://www.khmer24.com/en/cars/financing-insurance.html" title="Financing &amp; Insurance">Financing &amp; Insurance</a></li>

                                                <li><a href="https://www.khmer24.com/en/cars/car-parts-accessories.html" title="Car Parts &amp; Accessories">Car Parts &amp; Accessories</a></li>
                                                <li><a href="https://www.khmer24.com/en/cars/others-vihicles.html" title="Others">Others</a></li>
                                            </ul><div class="scroll-element scroll-x"><div class="scroll-element_outer">    <div class="scroll-element_size"></div>    <div class="scroll-element_track"></div>    <div class="scroll-bar"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer">    <div class="scroll-element_size"></div>    <div class="scroll-element_track"></div>    <div class="scroll-bar"></div></div></div></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a class="maincat" href="https://www.khmer24.com/en/homes.html" title="House &amp; Lands"><i class="fas fa-home"></i> House &amp; Lands</a>
                            <div class="sub_cat">
                                <div class="list_sub_box">
                                    <div class="left_box">
                                        <a class="cat_title" href="https://www.khmer24.com/en/homes.html" title="House &amp; Lands"><i class="icon-home"></i> House &amp; Lands</a>
                                        <a class="viewall" href="https://www.khmer24.com/en/homes.html" title="View All">View All <span>»</span></a>
                                        <div class="scroll-wrapper list_sub_cat scrollbar-light row" style="position: relative;"><ul class="list_sub_cat scrollbar-light row scroll-content" style="margin-bottom: 0px; margin-right: 0px;">
                                                <li><a href="https://www.khmer24.com/en/homes/house-for-sale.html" title="House for Sale">House for Sale</a></li>
                                                <li><a href="https://www.khmer24.com/en/homes/house-for-rent.html" title="House for Rent">House for Rent</a></li>
                                                <li><a href="https://www.khmer24.com/en/homes/apartment-for-sale.html" title="Apartment for Sale">Apartment for Sale</a></li>
                                                <li><a href="https://www.khmer24.com/en/homes/apartment-for-rent.html" title="Apartment for Rent">Apartment for Rent</a></li>
                                                <li><a href="https://www.khmer24.com/en/homes/landed-properties-for-sale.html" title="Land for Sale">Land for Sale</a></li>
                                                <li><a href="https://www.khmer24.com/en/homes/landed-properties-for-rent.html" title="Landed Properties for Rent">Landed Properties for Rent</a></li>
                                                <li><a href="https://www.khmer24.com/en/homes/commercial-properties-for-sale.html" title="Commercial Properties for Sale">Commercial Properties for Sale</a></li>
                                                <li><a href="https://www.khmer24.com/en/homes/commercial-properties-for-rent.html" title="Commercial Properties for Rent">Commercial Properties for Rent</a></li>
                                                <li><a href="https://www.khmer24.com/en/homes/room-for-rent.html" title="Room for Rent">Room for Rent</a></li>
                                                <li><a href="https://www.khmer24.com/en/homes/properties-wanted.html" title="Properties Wanted">Properties Wanted</a></li>
                                                <li><a href="https://www.khmer24.com/en/homes/agent-services.html" title="Agent Services">Agent Services</a></li>
                                                <li><a href="https://www.khmer24.com/en/homes/others-properties.html" title="Others">Others</a></li>
                                            </ul><div class="scroll-element scroll-x"><div class="scroll-element_outer">    <div class="scroll-element_size"></div>    <div class="scroll-element_track"></div>    <div class="scroll-bar"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer">    <div class="scroll-element_size"></div>    <div class="scroll-element_track"></div>    <div class="scroll-bar"></div></div></div></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a class="maincat" href="https://www.khmer24.com/en/jobs.html" title="Jobs"><i class="fas fa-clock"></i> Jobs</a>
                            <div class="sub_cat">
                                <div class="list_sub_box">
                                    <div class="left_box">
                                        <a class="cat_title" href="https://www.khmer24.com/en/jobs.html" title="Jobs"><i class="icon-briefcase"></i> Jobs</a>
                                        <a class="viewall" href="https://www.khmer24.com/en/jobs.html" title="View All">View All <span>»</span></a>
                                        <div class="scroll-wrapper list_sub_cat scrollbar-light row" style="position: relative;"><ul class="list_sub_cat scrollbar-light row scroll-content" style="margin-bottom: 0px; margin-right: 0px;">
                                                <li><a href="https://www.khmer24.com/en/jobs/jobs-accounting.html" title="Accounting">Accounting</a></li>

                                                <li><a href="https://www.khmer24.com/en/jobs/jobs-administration.html" title="Administration">Administration</a></li>
                                                <li><a href="https://www.khmer24.com/en/jobs/jobs-architecture-engineering.html" title="Architecture/Engineering">Architecture/Engineering</a></li>
                                                <li><a href="https://www.khmer24.com/en/jobs/jobs-assistant-secretary.html" title="Assistant/Secretary">Assistant/Secretary</a></li>
                                                <li><a href="https://www.khmer24.com/en/jobs/jobs-audit-taxation.html" title="Audit/Taxation">Audit/Taxation</a></li>
                                                <li><a href="https://www.khmer24.com/en/jobs/jobs-banking-insurance.html" title="Banking/Insurance">Banking/Insurance</a></li>
                                                <li><a href="https://www.khmer24.com/en/jobs/jobs-cashier-receptionist.html" title="Cashier/Receptionist">Cashier/Receptionist</a></li>
                                                <li><a href="https://www.khmer24.com/en/jobs/jobs-catering-restaurant.html" title="Catering/Restaurant">Catering/Restaurant</a></li>
                                                <li><a href="https://www.khmer24.com/en/jobs/jobs-cleaner-maid.html" title="Cleaner/Maid">Cleaner/Maid</a></li>
                                                <li><a href="https://www.khmer24.com/en/jobs/jobs-consultancy.html" title="Consultancy">Consultancy</a></li>
                                                <li><a href="https://www.khmer24.com/en/jobs/jobs-customer-service.html" title="Customer Service">Customer Service</a></li>
                                                <li><a href="https://www.khmer24.com/en/jobs/jobs-design.html" title="Design">Design</a></li>
                                                <li><a href="https://www.khmer24.com/en/jobs/jobs-education-training.html" title="Education/Training">Education/Training</a></li>
                                                <li><a href="https://www.khmer24.com/en/jobs/jobs-finance.html" title="Finance">Finance</a></li>
                                                <li><a href="https://www.khmer24.com/en/jobs/jobs-freight-shipping-delivery-warehouse.html" title="Freight/Shipping /Delivery/Warehouse">Freight/Shipping /Delivery/Warehouse</a></li>
                                                <li><a href="https://www.khmer24.com/en/jobs/jobs-hotel-hospitality.html" title="Hotel/Hospitality">Hotel/Hospitality</a></li>
                                                <li><a href="https://www.khmer24.com/en/jobs/jobs-human-resource.html" title="Human Resource">Human Resource</a></li>
                                                <li><a href="https://www.khmer24.com/en/jobs/jobs-information-technology.html" title="Information Technology">Information Technology</a></li>
                                                <li><a href="https://www.khmer24.com/en/jobs/jobs-lawyer-legal-service.html" title="Lawyer/Legal Service">Lawyer/Legal Service</a></li>
                                                <li><a href="https://www.khmer24.com/en/jobs/jobs-management.html" title="Management">Management</a></li>
                                                <li><a href="https://www.khmer24.com/en/jobs/jobs-manufacturing.html" title="Manufacturing">Manufacturing</a></li>
                                                <li><a href="https://www.khmer24.com/en/jobs/jobs-marketing.html" title="Marketing">Marketing</a></li>
                                                <li><a href="https://www.khmer24.com/en/jobs/jobs-media-advertising.html" title="Media/Advertising">Media/Advertising</a></li>
                                                <li><a href="https://www.khmer24.com/en/jobs/jobs-medical-health-nursing.html" title="Medical/Health/Nursing">Medical/Health/Nursing</a></li>
                                                <li><a href="https://www.khmer24.com/en/jobs/jobs-merchandising-purchasing.html" title="Merchandising/Purchasing">Merchandising/Purchasing</a></li>
                                                <li><a href="https://www.khmer24.com/en/jobs/jobs-operations.html" title="Operations">Operations</a></li>
                                                <li><a href="https://www.khmer24.com/en/jobs/jobs-project-management.html" title="Project Management">Project Management</a></li>
                                                <li><a href="https://www.khmer24.com/en/jobs/jobs-quality-control.html" title="Quality Control">Quality Control</a></li>
                                                <li><a href="https://www.khmer24.com/en/jobs/jobs-resort-casino.html" title="Resort/Casino">Resort/Casino</a></li>
                                                <li><a href="https://www.khmer24.com/en/jobs/jobs-sales.html" title="Sales">Sales</a></li>
                                                <li><a href="https://www.khmer24.com/en/jobs/jobs-security-driver.html" title="Security/Driver">Security/Driver</a></li>
                                                <li><a href="https://www.khmer24.com/en/jobs/jobs-technician.html" title="Technician">Technician</a></li>
                                                <li><a href="https://www.khmer24.com/en/jobs/jobs-telecommunication.html" title="Telecommunication">Telecommunication</a></li>
                                                <li><a href="https://www.khmer24.com/en/jobs/jobs-translation-interpretation.html" title="Translation/Interpretation">Translation/Interpretation</a></li>
                                                <li><a href="https://www.khmer24.com/en/jobs/jobs-travel-agent-ticket-sales.html" title="Travel Agent/Ticket Sales">Travel Agent/Ticket Sales</a></li>
                                                <li><a href="https://www.khmer24.com/en/jobs/jobs-others.html" title="Others">Others</a></li>
                                            </ul><div class="scroll-element scroll-x"><div class="scroll-element_outer">    <div class="scroll-element_size"></div>    <div class="scroll-element_track"></div>    <div class="scroll-bar"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer">    <div class="scroll-element_size"></div>    <div class="scroll-element_track"></div>    <div class="scroll-bar"></div></div></div></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a class="maincat" href="https://www.khmer24.com/en/c-services.html" title="Services"><i class="fas fa-clock"></i> Services</a>
                            <div class="sub_cat">
                                <div class="list_sub_box">
                                    <div class="left_box">
                                        <a class="cat_title" href="https://www.khmer24.com/en/c-services.html" title="Services"><i class="icon-key"></i> Services</a>
                                        <a class="viewall" href="https://www.khmer24.com/en/c-services.html" title="View All">View All <span>»</span></a>
                                        <div class="scroll-wrapper list_sub_cat scrollbar-light row" style="position: relative;"><ul class="list_sub_cat scrollbar-light row scroll-content" style="margin-bottom: 0px; margin-right: 0px;">
                                                <li><a href="https://www.khmer24.com/en/c-accounting.html" title="Accounting">Accounting</a></li>
                                                <li><a href="https://www.khmer24.com/en/c-automotive.html" title="Automotive">Automotive</a></li>
                                                <li><a href="https://www.khmer24.com/en/c-advertising-media.html" title="Advertising &amp; Media">Advertising &amp; Media</a></li>
                                                <li><a href="https://www.khmer24.com/en/c-bridal-services.html" title="Bridal Services">Bridal Services</a></li>
                                                <li><a href="https://www.khmer24.com/en/c-cleaning-maid-services.html" title="Cleaning &amp; Maid Services">Cleaning &amp; Maid Services</a></li>

                                                <li><a href="https://www.khmer24.com/en/c-construction-arch.-interiors.html" title="Construction, Arch. &amp; Interiors">Construction, Arch. &amp; Interiors</a></li>
                                                <li><a href="https://www.khmer24.com/en/c-education-training.html" title="Education &amp; Training">Education &amp; Training</a></li>
                                                <li><a href="https://www.khmer24.com/en/c-engineering.html" title="Engineering">Engineering</a></li>
                                                <li><a href="https://www.khmer24.com/en/c-insurance.html" title="Insurance">Insurance</a></li>
                                                <li><a href="https://www.khmer24.com/en/c-massage-spa.html" title="Massage &amp; Spa">Massage &amp; Spa</a></li>
                                                <li><a href="https://www.khmer24.com/en/c-hospitality-travel-tourism.html" title="Hospitality, Travel &amp; Tourism">Hospitality, Travel &amp; Tourism</a></li>
                                                <li><a href="https://www.khmer24.com/en/c-health-medical-pharma.html" title="Health, Medical &amp; Pharma">Health, Medical &amp; Pharma</a></li>
                                                <li><a href="https://www.khmer24.com/en/c-it-telecom.html" title="IT &amp; Telecom">IT &amp; Telecom</a></li>
                                                <li><a href="https://www.khmer24.com/en/c-interior-design-renovation.html" title="Interior Design &amp; Renovation">Interior Design &amp; Renovation</a></li>
                                                <li><a href="https://www.khmer24.com/en/c-legal.html" title="Legal">Legal</a></li>
                                                <li><a href="https://www.khmer24.com/en/c-movers-logistics.html" title="Movers &amp; Logistics">Movers &amp; Logistics</a></li>
                                                <li><a href="https://www.khmer24.com/en/c-plumbing-electrical.html" title="Plumbing &amp; Electrical">Plumbing &amp; Electrical</a></li>
                                                <li><a href="https://www.khmer24.com/en/c-property-real-estate.html" title="Property &amp; Real Estate">Property &amp; Real Estate</a></li>
                                                <li><a href="https://www.khmer24.com/en/c-science.html" title="Science">Science</a></li>
                                                <li><a href="https://www.khmer24.com/en/c-supply-chain-logistics.html" title="Supply Chain &amp; Logistics">Supply Chain &amp; Logistics</a></li>
                                                <li><a href="https://www.khmer24.com/en/c-printing-publishing.html" title="Printing &amp; Publishing">Printing &amp; Publishing</a></li>
                                                <li><a href="https://www.khmer24.com/en/c-other-services.html" title="Other Services">Other Services</a></li>
                                            </ul><div class="scroll-element scroll-x"><div class="scroll-element_outer">    <div class="scroll-element_size"></div>    <div class="scroll-element_track"></div>    <div class="scroll-bar"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer">    <div class="scroll-element_size"></div>    <div class="scroll-element_track"></div>    <div class="scroll-bar"></div></div></div></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a class="maincat" href="https://www.khmer24.com/en/c-fashion-beauty.html" title="Fashion &amp; Beauty"><i class="fas fa-clock"></i> Fashion &amp; Beauty</a>
                            <div class="sub_cat">
                                <div class="list_sub_box">
                                    <div class="left_box">
                                        <a class="cat_title" href="https://www.khmer24.com/en/c-fashion-beauty.html" title="Fashion &amp; Beauty"><i class="icon-tshirt"></i> Fashion &amp; Beauty</a>
                                        <a class="viewall" href="https://www.khmer24.com/en/c-fashion-beauty.html" title="View All">View All <span>»</span></a>
                                        <div class="scroll-wrapper list_sub_cat scrollbar-light row" style="position: relative;"><ul class="list_sub_cat scrollbar-light row scroll-content" style="margin-bottom: 0px; margin-right: 0px;">
                                                <li><a href="https://www.khmer24.com/en/c-jewellery-watches.html" title="Jewelry, watches ">Jewelry, watches </a></li>

                                                <li><a href="https://www.khmer24.com/en/c-clothing-accessories.html" title="Clothing, accessories">Clothing, accessories</a></li>
                                                <li><a href="https://www.khmer24.com/en/c-beauty-healthcare-products.html" title="Beauty &amp; Healthcare">Beauty &amp; Healthcare</a></li>
                                            </ul><div class="scroll-element scroll-x"><div class="scroll-element_outer">    <div class="scroll-element_size"></div>    <div class="scroll-element_track"></div>    <div class="scroll-bar"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer">    <div class="scroll-element_size"></div>    <div class="scroll-element_track"></div>    <div class="scroll-bar"></div></div></div></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a class="maincat" href="https://www.khmer24.com/en/c-books-sports-hobbies.html" title="Books, Sports &amp; Hobbies"><i class="fas fa-clock"></i> Books, Sports &amp; Hobbies</a>
                            <div class="sub_cat">
                                <div class="list_sub_box">
                                    <div class="left_box">
                                        <a class="cat_title" href="https://www.khmer24.com/en/c-books-sports-hobbies.html" title="Books, Sports &amp; Hobbies"><i class="icon-book"></i> Books, Sports &amp; Hobbies</a>
                                        <a class="viewall" href="https://www.khmer24.com/en/c-books-sports-hobbies.html" title="View All">View All <span>»</span></a>
                                        <div class="scroll-wrapper list_sub_cat scrollbar-light row" style="position: relative;"><ul class="list_sub_cat scrollbar-light row scroll-content" style="margin-bottom: 0px; margin-right: 0px;">
                                                <li><a href="https://www.khmer24.com/en/c-cds-dvds-vhs.html" title="CDS, DVDS, VHS">CDS, DVDS, VHS</a></li>
                                                <li><a href="https://www.khmer24.com/en/c-books.html" title="Books">Books</a></li>
                                                <li><a href="https://www.khmer24.com/en/c-sports-equipment.html" title="Sports Equipment">Sports Equipment</a></li>
                                                <li><a href="https://www.khmer24.com/en/c-others-buy-sell.html" title="Others">Others</a></li>
                                            </ul><div class="scroll-element scroll-x"><div class="scroll-element_outer">    <div class="scroll-element_size"></div>    <div class="scroll-element_track"></div>    <div class="scroll-bar"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer">    <div class="scroll-element_size"></div>    <div class="scroll-element_track"></div>    <div class="scroll-bar"></div></div></div></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a class="maincat" href="https://www.khmer24.com/en/c-furniture-decor.html" title="Furniture &amp; Decor"><i class="fas fa-clock"></i> Furniture &amp; Decor</a>
                            <div class="sub_cat">
                                <div class="list_sub_box">
                                    <div class="left_box">
                                        <a class="cat_title" href="https://www.khmer24.com/en/c-furniture-decor.html" title="Furniture &amp; Decor"><i class="icon-chair"></i> Furniture &amp; Decor</a>
                                        <a class="viewall" href="https://www.khmer24.com/en/c-furniture-decor.html" title="View All">View All <span>»</span></a>
                                        <div class="scroll-wrapper list_sub_cat scrollbar-light row" style="position: relative;"><ul class="list_sub_cat scrollbar-light row scroll-content" style="margin-bottom: 0px; margin-right: 0px;">
                                                <li><a href="https://www.khmer24.com/en/c-household-items.html" title="Household Items">Household Items</a></li>
                                                <li><a href="https://www.khmer24.com/en/c-office-furniture.html" title="Office Furniture">Office Furniture</a></li>
                                                <li><a href="https://www.khmer24.com/en/c-home-furniture.html" title="Home Furniture">Home Furniture</a></li>
                                                <li><a href="https://www.khmer24.com/en/c-kitchenware.html" title="Kitchenware">Kitchenware</a></li>
                                                <li><a href="https://www.khmer24.com/en/c-handicrafts-paintings.html" title="Handicrafts Paintings">Handicrafts Paintings</a></li>
                                            </ul><div class="scroll-element scroll-x"><div class="scroll-element_outer">    <div class="scroll-element_size"></div>    <div class="scroll-element_track"></div>    <div class="scroll-bar"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer">    <div class="scroll-element_size"></div>    <div class="scroll-element_track"></div>    <div class="scroll-bar"></div></div></div></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a class="maincat" href="https://www.khmer24.com/en/c-pets.html" title="Pets"><i class="fas fa-clock"></i> Pets</a>
                            <div class="sub_cat">
                                <div class="list_sub_box">
                                    <div class="left_box">
                                        <a class="cat_title" href="https://www.khmer24.com/en/c-pets.html" title="Pets"><i class="icon-pets"></i> Pets</a>
                                        <a class="viewall" href="https://www.khmer24.com/en/c-pets.html" title="View All">View All <span>»</span></a>
                                        <div class="scroll-wrapper list_sub_cat scrollbar-light row" style="position: relative;"><ul class="list_sub_cat scrollbar-light row scroll-content" style="margin-bottom: 0px; margin-right: 0px;">
                                                <li><a href="https://www.khmer24.com/en/c-dogs.html" title="Dogs">Dogs</a></li>

                                                <li><a href="https://www.khmer24.com/en/c-cats.html" title="Cats">Cats</a></li>
                                                <li><a href="https://www.khmer24.com/en/c-birds.html" title="Birds">Birds</a></li>
                                                <li><a href="https://www.khmer24.com/en/c-fish.html" title="Fish">Fish</a></li>
                                                <li><a href="https://www.khmer24.com/en/c-pet-food.html" title="Pet Food">Pet Food</a></li>
                                                <li><a href="https://www.khmer24.com/en/c-pet-accessories.html" title="Pet Accessories">Pet Accessories</a></li>
                                                <li><a href="https://www.khmer24.com/en/c-other-pets.html" title="Other">Other</a></li>
                                            </ul><div class="scroll-element scroll-x"><div class="scroll-element_outer">    <div class="scroll-element_size"></div>    <div class="scroll-element_track"></div>    <div class="scroll-bar"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer">    <div class="scroll-element_size"></div>    <div class="scroll-element_track"></div>    <div class="scroll-bar"></div></div></div></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a class="maincat" href="https://www.khmer24.com/en/c-foods.html" title="Foods"><i class="fas fa-clock"></i> Foods</a>
                            <div class="sub_cat">
                                <div class="list_sub_box">
                                    <div class="left_box">
                                        <a class="cat_title" href="https://www.khmer24.com/en/c-foods.html" title="Foods"><i class="icon-foods"></i> Foods</a>
                                        <a class="viewall" href="https://www.khmer24.com/en/c-foods.html" title="View All">View All <span>»</span></a>
                                        <div class="scroll-wrapper list_sub_cat scrollbar-light row" style="position: relative;"><ul class="list_sub_cat scrollbar-light row scroll-content" style="margin-bottom: 0px; margin-right: 0px;">
                                                <li><a href="https://www.khmer24.com/en/c-meat.html" title="Meat">Meat</a></li>
                                                <li><a href="https://www.khmer24.com/en/c-seafood.html" title="Seafood">Seafood</a></li>

                                                <li><a href="https://www.khmer24.com/en/c-fruits.html" title="Fruits">Fruits</a></li>
                                                <li><a href="https://www.khmer24.com/en/c-vegetables.html" title="Vegetables">Vegetables</a></li>
                                                <li><a href="https://www.khmer24.com/en/c-beverages.html" title="Beverages">Beverages</a></li>
                                                <li><a href="https://www.khmer24.com/en/c-grocery.html" title="Grocery">Grocery</a></li>
                                                <li><a href="https://www.khmer24.com/en/c-bread-and-bakery.html" title="Bread &amp; Bakery">Bread &amp; Bakery</a></li>
                                                <li><a href="https://www.khmer24.com/en/c-beer-and-wine.html" title="Beer &amp; Wine">Beer &amp; Wine</a></li>
                                                <li><a href="https://www.khmer24.com/en/c-rice-and-cereal.html" title="Rice &amp; Cereal">Rice &amp; Cereal</a></li>
                                                <li><a href="https://www.khmer24.com/en/c-other-foods.html" title="Other">Other</a></li>
                                            </ul><div class="scroll-element scroll-x"><div class="scroll-element_outer">    <div class="scroll-element_size"></div>    <div class="scroll-element_track"></div>    <div class="scroll-bar"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer">    <div class="scroll-element_size"></div>    <div class="scroll-element_track"></div>    <div class="scroll-bar"></div></div></div></div>
                                    </div>
                                </div>
                            </div>
                        </li>

                    </ul>
                </nav>
            </div>
        </div>
        <div class="cat-item special">
            <section class="popular_cat">
                <h2 class="hide">Popular Categories</h2>
                <ul id="icon_cat" class="list-inline">
                    <li>
                        <a href="#">
                            <div class="icon "><span class="house-for-sale"><i class="fas fa-home"></i></span></div>
                            <p class="title">House for Sale</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="icon"><span class="landed-properties-for-sale"><i class="fas fa-globe"></i></span></div>
                            <p class="title">Land for Sale</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="icon">
                                <span class="cars-for-sale.png"><i class="fas fa-car"></i></span>
                            </div>
                            <p class="title">Cars for Sale</p>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.khmer24.com/en/cars/motorcycles-for-sale.html">
                            <div class="icon">
                                <span class="motorcycles-for-sale"><i class="fas fa-motorcycle"></i></span>
                            </div>
                            <p class="title">Motorcycles for Sale</p>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.khmer24.com/en/mobiles/phones-tablets.html">
                            <div class="icon">
                                <span class="phones-tablets"><i class="fas fa-mobile-alt"></i></span>
                            </div>
                            <p class="title">Phones, Tablets</p>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.khmer24.com/en/mobiles/phone-accessories.html">
                            <div class="icon">
                                <span class="phone-accessories"><i class="fas fa-headphones"></i></span>
                            </div>
                            <p class="title">Phone Accessories</p>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.khmer24.com/en/mobiles/phone-numbers.html">
                            <div class="icon">
                                <span class="phone-numbers"><i class="fas fa-phone"></i></span>
                            </div>
                            <p class="title">Phone Numbers</p>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.khmer24.com/en/c-computers.html">
                            <div class="icon">
                                <span class="computers"><i class="fas fa-laptop"></i></span>
                            </div>
                            <p class="title">Computers</p>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.khmer24.com/en/c-computer-accessories.html">
                            <div class="icon">
                                <span class="computer-accessories"><i class="fas fa-keyboard"></i></span>
                            </div>
                            <p class="title">Computer accessories</p>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.khmer24.com/en/c-cameras-camcorders.html">
                            <div class="icon">
                                <span class="cameras-camcorders"><i class="fas fa-camera"></i></span>
                            </div>
                            <p class="title">Cameras, camcorders</p>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.khmer24.com/en/c-tvs-videos-and-audios.html">
                            <div class="icon">
                                <span class="tvs-videos-and-audios"><i class="fas fa-tv"></i></span>
                            </div>
                            <p class="title">TVs, Videos and Audios</p>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.khmer24.com/en/c-home-appliances.html">
                            <div class="icon">
                                <span class="home-appliances"><i class="fas fa-video"></i></span>
                            </div>
                            <p class="title">Home appliances </p>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.khmer24.com/en/c-clothing-accessories.html">
                            <div class="icon">
                                <span class="clothing-accessories"><i class="fas fa-clock"></i></span>
                            </div>
                            <p class="title">Clothing, accessories</p>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.khmer24.com/en/c-jewellery-watches.html">
                            <div class="icon">
                                <span class="jewellery-watches"><i class="fas fa-clock"></i></span>
                            </div>
                            <p class="title">Jewelry, watches </p>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.khmer24.com/en/c-beauty-healthcare-products.html">
                            <div class="icon">
                                <span class="beauty-healthcare-products"><i class="fas fa-clock"></i></span>
                            </div>
                            <p class="title">Beauty &amp; Healthcare</p>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.khmer24.com/en/c-sports-equipment.html">
                            <div class="icon">
                                <span class="sports-equipment"><i class="fas fa-clock"></i></span>
                            </div>
                            <p class="title">Sports Equipment</p>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.khmer24.com/en/c-furniture-decor.html">
                            <div class="icon">
                                <span class="furniture-decor"><i class="fas fa-clock"></i></span>
                            </div>
                            <p class="title">Furniture &amp; Decor</p>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.khmer24.com/en/jobs.html">
                            <div class="icon">
                                <span class="jobs"><i class="fas fa-clock"></i></span>
                            </div>
                            <p class="title">Jobs</p>
                            <span class="new">New</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.khmer24.com/en/c-pets.html">
                            <div class="icon">
                                <span class="jobs"><i class="fas fa-clock"></i></span>
                            </div>
                            <p class="title">Pets</p>
                            <span class="new">New</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.khmer24.com/en/c-foods.html">
                            <div class="icon">
                                <span class="jobs"><i class="fas fa-clock"></i></span>
                            </div>
                            <p class="title">Foods</p>
                            <span class="new">New</span>
                        </a>
                    </li>
                </ul>
                <div class="populoar_location">
                    <div class="title"><div class="text">Popular Locations</div></div>
                    <div class="list">
                        <ul class="list-inline row">
                            <li class="">
                                <a href="https://www.khmer24.com/en/all-categories-in-province-phnom-penh.html">Phnom Penh</a>
                            </li>
                            <li class="">
                                <a href="https://www.khmer24.com/en/all-categories-in-province-preah-sihanouk.html">Preah Sihanouk</a>
                            </li>
                            <li class="">
                                <a href="https://www.khmer24.com/en/all-categories-in-province-kampong-cham.html">Kampong Cham</a>
                            </li>
                            <li class="big">
                                <a href="https://www.khmer24.com/en/all-categories-in-province-siem-reap.html">Siem Reap</a>
                            </li>
                            <li class="big">
                                <a href="https://www.khmer24.com/en/all-categories-in-province-battambang.html">Battambang</a>
                            </li>
                            <li class="big">
                                <a href="https://www.khmer24.com/en/all-categories-in-province-kandal.html">Kandal</a>
                            </li>
                            <li class="big">
                                <a href="https://www.khmer24.com/en/all-categories-in-province-banteay-meanchey.html">Banteay Meanchey</a>
                            </li>
                            <li class="">
                                <a href="https://www.khmer24.com/en/all-categories-in-province-kampong-chhnang.html">Kampong Chhnang</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>
<section class="post-item">
    <article class="latest_ads">
        <div class="title"><div class="text">Latest Ads</div></div>
        <div class="latest_post row">
            <div class="col-sm-3 item-post">
                <div class="img_p"><img src="{{$base_url}}/images/main/41cHPiikHRL._AC_SY200_.jpg" alt="" class="img-fluid"></div>
                <div class="detail_p">
                    <h3>Korea Head</h3>
                    <p>Price : 500$</p>
                </div>
            </div>
        </div>
        <div class="view-more">
            <button type="button" class="btn btn-primary btn-block">View More</button>
        </div>
    </article>
    <article class="popular_ads">
        <div class="title"><div class="text">Popular Ads</div></div>
        <div class="latest_post row">
            <div class="col-sm-3 item-post">
                <div class="img_p"><img src="{{$base_url}}/images/main/41cHPiikHRL._AC_SY200_.jpg" alt="" class="img-fluid"></div>
                <div class="detail_p">
                    <h3>Korea Head</h3>
                    <p>Price : 500$</p>
                </div>
            </div>

        </div>
    </article>
    <article class="feature_ads">
        <div class="title"><div class="text">Feature Ads</div></div>
        <div class="latest_post row">
            <div class="col-sm-3 item-post">
                <div class="img_p"><img src="{{$base_url}}/images/main/41cHPiikHRL._AC_SY200_.jpg" alt="" class="img-fluid"></div>
                <div class="detail_p">
                    <h3>Korea Head</h3>
                    <p>Price : 500$</p>
                </div>
            </div>

        </div>
    </article>
    <article class="location">

        <div class="container">
            <div class="text-center">
                <h2 class="title">Locations</h2>
            </div>
            <ul class="row">
                <li><a href="" title="Phnom Penh">Phnom Penh</a></li>
                <li><a href="" title="Preah Sihanouk">Preah Sihanouk</a></li>
                <li><a href="" title="Kampong Cham">Kampong Cham</a></li>
                <li><a href="" title="Siem Reap">Siem Reap</a></li>
                <li><a href="" title="Battambang">Battambang</a></li>
                <li><a href="" title="Kandal">Kandal</a></li>
                <li><a href="" title="Banteay Meanchey">Banteay Meanchey</a></li>
                <li><a href="" title="Kampong Chhnang">Kampong Chhnang</a></li>
                <li><a href="" title="Kampong Speu">Kampong Speu</a></li>
                <li><a href="" title="Kampong Thom">Kampong Thom</a></li>
                <li><a href="" title="Kampot">Kampot</a></li>
                <li><a href="" title="Kep">Kep</a></li>
                <li><a href="" title="Koh Kong">Koh Kong</a></li>
                <li><a href="" title="Kratie">Kratie</a></li>
                <li><a href="" title="Mondulkiri">Mondulkiri</a></li>
                <li><a href="" title="Otdar Meanchey">Otdar Meanchey</a></li>
                <li><a href="" title="Pailin">Pailin</a></li>
                <li><a href="" title="Preah Vihear">Preah Vihear</a></li>
                <li><a href="" title="Prey Veng">Prey Veng</a></li>
                <li><a href="" title="Pursat">Pursat</a></li>
                <li><a href="" title="Ratanakiri">Ratanakiri</a></li>
                <li><a href="" title="Stung Treng">Stung Treng</a></li>
                <li><a href="" title="Svay Rieng">Svay Rieng</a></li>
                <li><a href="" title="Takeo">Takeo</a></li>
                <li><a href="" title="Tboung Khmum">Tboung Khmum</a></li>
            </ul>
        </div>

    </article>
</section>
@endsection