<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title> বিকল্প পন্য ।। হোম </title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap"
        rel="stylesheet">

    <link href="{{asset('frontend')}}/css/bootstrap.min.css" rel="stylesheet">

    <link href="{{asset('frontend')}}/css/bootstrap-icons.css" rel="stylesheet">

    <link href="{{asset('frontend')}}/css/templatemo-topic-listing.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tiro+Bangla:ital@0;1&display=swap" rel="stylesheet">
    <!--

TemplateMo 590 topic listing

https://templatemo.com/tm-590-topic-listing

-->
</head>

<body id="top">

    <main>

        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand text-white" href="index.html">
                    <i class="bi-back"></i>
                    <span> বিকল্প পন্য </span>
                </a>

                <!-- <div class="d-lg-none ms-auto me-4">
                    <a href="#top" class="navbar-icon bi-person smoothscroll"></a>
                </div> -->

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-5 me-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_1">হোম </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_2">প্রোডাক্টের ধরন</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_3">আমাদের বার্তা </a>
                        </li>

                        <!-- <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_4">FAQs</a>
                        </li> -->

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_4">যোগাযোগ</a>
                        </li>
                        <!-- 
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Pages</a>

                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                <li><a class="dropdown-item" href="topics-listing.html">Topics Listing</a></li>

                                <li><a class="dropdown-item" href="contact.html">Contact Form</a></li>
                            </ul>
                        </li> -->
                    </ul>

                    <!-- <div class="d-none d-lg-block">
                        <a href="#top" class="navbar-icon bi-person smoothscroll"></a>
                    </div> -->
                </div>
            </div>
        </nav>


        <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12 mx-auto">
                        <!-- <h2 class="text-white text-center"> খুজুন । বয়কট করুন । কিনুন </h2> -->
                        <h2 class="text-white text-center"> দেশীয় পণ্যকে ভালোবাসুন </h2>

                        <h6 class="text-center text-white mt-3">দেশী পন্য ব্যবহার করে নিজের দেশকে সমৃদ্ধ করতে এগিয়ে আসুন </h6>

                        <form method="get" class="custom-form shadow-lg mt-4 pt-2 mb-lg-0 mb-5" role="search">
                            <div class="input-group input-group-lg">
                                <span class="input-group-text bi-search" id="basic-addon1">

                                </span>

                                <select name="category" class="form-select" id="category" aria-label="Select category"
                                    style="border-color: white;" onchange="getcategory(this)">
                                    <option value="0" selected disabled>ক্যাটাগরি সিলেক্ট করুন - </option>
                                    <option value="4"> ইসরাইলি এবং তাদের সমর্থিত পন্য</option>
                                    <!-- <option value="3"> কাদেয়ানী পন্য </option> -->
                                    <option value="2"> ইন্ডিয়ান পন্য</option>

                                </select>

                                <!-- <button type="submit" class="form-control">Search</button> -->
                            </div>
                        </form>
                    </div>



                </div>

                <div class="row d-flex justify-content-center ">
                    <!-- <h1 class="text-cneter text-white">Visitor </h1> -->
                    <!-- <div class="col-md-3">
                        <h1>{{$today}}</h1>
                    </div>
                    <div class="col-md-3">
                        <h1>{{$today}}</h1>
                    </div>
                    <div class="col-md-3">
                        <h1>{{$today}}</h1>
                    </div>
                    <div class="col-md-3">
                        <h1>{{$today}}</h1>
                    </div> -->
                </div>
            </div>
        </section>


        <section class="explore-section section-padding" id="section_2">
            <div class="container">
                <div class="row">

                    <div class="col-12 text-center">
                        <!-- <h2 class="mb-4">Browse Topics</h1> -->
                        <h2 class="mb-4">প্রোডাক্টের ধরন</h1>
                    </div>

                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <?php
                    $pcategoryList = [
                        'All',
                        'chocolate',
                        'drinks',
                        'chips',
                        'biscuit',
                        'Cosmetic',
                        'Soap & Detergent',
                        'Fragrance',
                        'Tea, Coffie & Milk',
                        'Baby Food',
                        'Daily needs',
                        'Restaurent & Electric',
                        'Others'
                    ]


                    ?>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        @foreach($pcategoryList as $key => $category)
                        <li class="nav-item" role="presentation">
                            <button class="nav-link category {{ $key == 0 ? 'active' : '' }}" id="{{ $category }}-tab" onclick="getcategory(this)"
                                data-bs-toggle="tab" data-bs-target="#{{ $category }}-tab-pane" type="button" role="tab"
                                aria-controls="{{ $category }}-tab-pane" data-value="{{ $key }}">{{ ($category) }}</button>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <div class="tab-content" id="myTabContent">
                            @foreach($pcategoryList as $key => $category)
                            <div class="tab-pane fade show active" id="{{ $category }}-tab-pane" role="tabpanel"
                                aria-labelledby="design-tab" tabindex="0">
                                <div class="row">
                                    @if($key == 0)
                                    @foreach($products as $product)
                                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mt-3">
                                        <div class="custom-block bg-white shadow-lg" style="padding-top:0px;">

                                            <img src="{{asset('images/products/'.$product->image)}}" class="custom-block-image img-fluid"
                                                alt="">
                                            <div class="d-flex">
                                                <div>
                                                    <h6 class="mb-2 mt-3">{{$product->name}}</h6>
                                                </div>
                                                <!-- <img src="{{asset('images/country/israel.png')}}" class="custom-block-image img-fluid"
                                                 
                                                alt=""> -->
                                                <!-- <span class="badge bg-design rounded-pill ms-auto mt-3"> A-
                                                <img src="{{asset('images/country/israel.png')}}" class="custom-block-image img-fluid"
                                                 
                                                alt="">
                                                </span> -->

                                                <span class="badge bg-design rounded-pill d-inline-flex ms-auto mt-3 align-items-center gap-1 p-2">
                                                    @if($product->d_category == 4)
                                                    <img src="{{ asset('images/country/israel.png') }}" alt="Flag" style="height: 16px; width: auto;">
                                                    @elseif($product->d_category == 2)
                                                    <img src="{{ asset('images/country/india.png') }}" alt="Flag" style="height: 16px; width: auto;">
                                                    @elseif($product->d_category == 1)
                                                    <img src="{{ asset('images/country/bg.png') }}" alt="Flag" style="height: 16px; width: auto;">
                                                    @endif
                                                </span>

                                            </div>

                                        </div>
                                    </div>

                                    @endforeach
                                    <div class="row">
                                        <div class="col-12 text-center mt-4">
                                            <button class="btn btn-danger bg-design  text-white"
                                                data-bs-toggle="modal"
                                                data-bs-target="#exampleModal"
                                                onclick="getAlterProduct()" style="padding: 10px 20px;
                                            border-radius: 30px;">বিকল্প পন্য দেখুন</button>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>

                            @endforeach
                        </div>

                    </div>

                </div>
            </div>


        </section>

        <section class="timeline-section section-padding" id="section_3">
            <div class="section-overlay"></div>

            <div class="container">
                <div class="row">

                    <div class="col-12 text-center">
                        <h2 class="text-white mb-4">দেশীয় পন্য কেন ব্যবহার করবো?</h1>
                    </div>

                    <div class="col-lg-10 col-12 mx-auto">
                        <div class="timeline-container">
                            <ul class="vertical-scrollable-timeline" id="vertical-scrollable-timeline">
                                <div class="list-progress">
                                    <div class="inner"></div>
                                </div>

                                <li>
                                    <h4 class="text-white mb-3">দেশের অর্থনৈতিক উন্নতি বৃদ্ধি </h4>

                                    <p class="text-white"> দেশীয় পণ্য ব্যবহারে দেশের শিল্প ও উৎপাদন খাত শক্তিশালী হয়,
                                        ফলে কর্মসংস্থান বৃদ্ধি পায় এবং জাতীয় অর্থনীতি সমৃদ্ধ হয়।
                                    </p>

                                    <div class="icon-holder">
                                        <i class="bi-search"></i>
                                    </div>
                                </li>

                                <li>
                                    <!-- <h4 class="text-white mb-3">Bookmark &amp; Keep it for yourself</h4> -->
                                    <h4 class="text-white mb-3">স্বনির্ভরতা অর্জন </h4>

                                    <p class="text-white">দেশীয় পণ্যের উপর নির্ভরতা বাড়ালে আমদানির উপর নির্ভরশীলতা কমে,
                                        ফলে দেশ স্বনির্ভরতার পথে এগিয়ে যায়।</p>

                                    <div class="icon-holder">
                                        <i class="bi-bookmark"></i>
                                    </div>
                                </li>

                                <li>
                                    <h4 class="text-white mb-3"> দেশপ্রেমের বহিঃপ্রকাশ</h4>

                                    <p class="text-white">দেশীয় পণ্য ব্যবহার করে আমরা আমাদের দেশের প্রতি দায়িত্বশীলতা ও ভালোবাসার পরিচয় দিতে পারি।</p>

                                    <div class="icon-holder">
                                        <i class="bi-book"></i>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-12 text-center mt-5">
                        <!-- <p class="text-white">
                            Want to learn more?
                            <a href="#" class="btn custom-btn custom-border-btn ms-3">Check out Youtube</a>
                        </p> -->
                    </div>

                </div>
            </div>
        </section>


        <section class="contact-section section-padding " id="section_4">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 text-center">
                        <h2 class="mb-5">যোগাযোগ</h2>
                    </div>

                    <div class="col-lg-5 col-12 mb-4 mb-lg-0">

                        <div class="row gy-4  shadow-lg p-4">


                            <p>এই সাইটে কোন প্রকার ভূল তথ্য থাকলে তা সম্পূর্ণ অনাকাংখিত। আপনার যেকোন মতামত আমাদেরকে জানাতে পাশে থাকা ফরমটি পূরন করুন।
                            </p>

                        </div>

                        <div class="row gy-4 shadow-lg p-4">

                            <p>এই সাইটে কোন প্রকার ভূল তথ্য থাকলে তা সম্পূর্ণ অনাকাংখিত। আপনার যেকোন মতামত আমাদেরকে জানাতে পাশে থাকা ফরমটি পূরন করুন।
                            </p>

                        </div>
                        <div class="row gy-3  shadow-lg p-4">

                            <p>এই সাইটে কোন প্রকার ভূল তথ্য থাকলে তা সম্পূর্ণ অনাকাংখিত। আপনার যেকোন মতামত আমাদেরকে জানাতে পাশে থাকা ফরমটি পূরন করুন।
                            </p>

                        </div>




                    </div>



                    <div class="col-lg-6 col-md-6 col-12 mb-3 mb-lg- mb-md-0 ms-auto" style="
                        border-radius: 5px;
                        box-shadow: rgb(238 240 241 / 30%) 0px 1px 2px 0px, rgb(225 231 235 / 15%) 0px 2px 6px 2px;">


                        <form action="{{route('contact.form.submit')}}" method="post" class="contact-form " >
                            @csrf
                            <div class="row gy-4 shadow-lg p-4">
                                <h4 class="text-center mb-5">যোগাযোগের ফরম</h4>

                                <div class="col-md-6">
                                    <label for="name-field" class="pb-2">আপনার নাম</label>
                                    <input type="text" name="name" id="name-field" class="form-control" required="">
                                </div>

                                <div class="col-md-6">
                                    <label for="email-field" class="pb-2">মোবাইল নাম্বার </label>
                                    <input type="text" class="form-control" name="phone" id="phone-field" required="">
                                </div>

                                <div class="col-md-12">
                                    <label for="subject-field" class="pb-2">বিষয় </label>
                                    <input type="text" class="form-control" name="subject" id="subject-field" required="">
                                </div>

                                <div class="col-md-12">
                                    <label for="message-field" class="pb-2">বিবরন</label>
                                    <textarea class="form-control" name="description" rows="4" id="message-field" required=""></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <!-- <div class="loading">Loading</div>
                          <div class="error-message"></div>
                          <div class="sent-message">Your message has been sent. Thank you!</div> -->
                                    <!-- <p id="form-success" class="text-success">Form submitted successfully. Thank you for your cooperation. </p> -->
                                    <!-- <button class="btn btn-outline-info bg-design text-light" type="submit"> বার্তা পাঠান </button> -->
                                    <button class="btn btn-outline-info bg-design text-light" type="submit"> বাটন ক্লিক করুন  </button>
                                </div>

                            </div>
                        </form>

                    </div>

                    <!-- <div class="col-lg-3 col-md-6 col-12 mx-auto">
                        <h4 class="mb-3">Dubai office</h4>

                        <p>Burj Park, Downtown Dubai, United Arab Emirates</p>

                        <hr>

                        <p class="d-flex align-items-center mb-1">
                            <span class="me-2">Phone</span>

                            <a href="tel: 110-220-3400" class="site-footer-link">
                                110-220-3400
                            </a>
                        </p>

                        <p class="d-flex align-items-center">
                            <span class="me-2">Email</span>

                            <a href="mailto:info@company.com" class="site-footer-link">
                                info@company.com
                            </a>
                        </p>
                    </div> -->

                </div>
            </div>
        </section>


    </main>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="alterProduct">
                    <!-- Alter product will load here  -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->

    <footer class="site-footer section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-12 mb-4 pb-2">
                    <a class="navbar-brand mb-2" href="index.html" style="color: #4c1117;">
                        <i class="bi-back"></i>
                        <span>বিকল্প পন্য</span>
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-6">
                    <h6 class="site-footer-title mb-3">Resources</h6>

                    <ul class="site-footer-links">
                    <li class="site-footer-link-item">
                            <a class="site-footer-link" href="#section_1">হোম </a>
                        </li>

                        <li class="site-footer-link-item">
                            <a class="site-footer-link" href="#section_2">প্রোডাক্টের ধরন</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a class="site-footer-link" href="#section_3">আমাদের বার্তা </a>
                        </li>

                        <li class="site-footer-link-item">
                            <a class="site-footer-link" href="#section_4">যোগাযোগ</a>
                        </li>

                       
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 col-6 mb-4 mb-lg-0">
                    <h6 class="site-footer-title mb-3">তথ্য</h6>

                    <p class="text-white d-flex mb-1">
                        <a href="tel: 305-240-9671" class="site-footer-link">
                            305-240-9671
                        </a>
                    </p>

                    <p class="text-white d-flex">
                        <a href="mailto:info@company.com" class="site-footer-link">
                            info@company.com
                        </a>
                    </p>
                </div>

                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-lg-0 ms-auto">
                    <!-- <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            English</button>

                        <ul class="dropdown-menu">
                            <li><button class="dropdown-item" type="button">Thai</button></li>

                            <li><button class="dropdown-item" type="button">Myanmar</button></li>

                            <li><button class="dropdown-item" type="button">Arabic</button></li>
                        </ul>
                    </div> -->

                    <p class="copyright-text mt-lg-5 mt-4">Copyright © Dreamheaven IT . <br>
                        All rights
                        reserved.
                        <!-- <br><br>Design: <a rel="nofollow" href="https://templatemo.com"
                            target="_blank">TemplateMo</a> -->
                    </p>

                </div>

            </div>
        </div>
    </footer>


    <!-- JAVASCRIPT FILES -->
    <script src="{{asset('frontend')}}/js/jquery.min.js"></script>
    <script src="{{asset('frontend')}}/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('frontend')}}/js/jquery.sticky.js"></script>
    <script src="{{asset('frontend')}}/js/click-scroll.js"></script>
    <script src="{{asset('frontend')}}/js/custom.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        AOS.init();
    </script>

    <!-- <script>
        function getcategory() {
            var pCategoryId = parseInt(document.getElementById('category').value);
            const tabButtons = document.querySelectorAll('.nav-link');
            const categorySelect = document.getElementById('category');
            const dCategoryId = 0;
            if (pCategoryId > 0) {
                console.log(dCategoryId, pCategoryId);
                console.log(typeof( pCategoryId));
                loadProducts(dCategoryId, pCategoryId);
            }
        }


        function loadProducts(dCategoryId, pCategoryId) {
            // Show loading indicator
            document.getElementById(`${productCategory}-tab-pane`).innerHTML = '<div class="text-center">Loading...</div>';

            // Make AJAX request
            fetch(`/products-by-category/${countryCategoryId}/${productCategory}`)
                .then(response => response.text())
                .then(html => {
                    document.getElementById(`${productCategory}-tab-pane`).innerHTML = html;
                })
                .catch(error => {
                    console.error('Error:', error);
                    document.getElementById(`${productCategory}-tab-pane`).innerHTML =
                        '<div class="text-center text-danger">Error loading products</div>';
                });
        }
    </script> -->


    <!-- <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Select all tab buttons
            const tabButtons = document.querySelectorAll('.nav-link');
            // Select the category dropdown
            const categorySelect = document.getElementById('category');
            // Add a click event listener for each tab button
            tabButtons.forEach(tabButton => {
                tabButton.addEventListener('click', function() {
                    const tabId = this.id.replace('-tab', ''); // Get the id of the clicked tab
                    const selectedCategory = categorySelect.value;
                    console.log(tabId); // Log the id in the console
                    console.log(selectedCategory);
                });
            });
        });
    </script> -->
    <script>
        function getcategory(button) {
            // Get pcategoryList index from button
            let pcategoryIndex = parseInt(button.getAttribute('data-value'));

            if (isNaN(pcategoryIndex)) {
                const activeTab = document.querySelector('.nav-link.category.active');
                // console.log(activeTab);
                if (activeTab) {
                    pcategoryIndex = parseInt(activeTab.getAttribute('data-value'));
                }
            }

            // Get selected value from <select>
            const selectElement = document.getElementById('category');
            const categoryValue = parseInt(selectElement.value);

            console.log("pcategoryList index:", pcategoryIndex);
            console.log("Selected category value:", categoryValue);

            loadProducts(categoryValue, pcategoryIndex);

        }



        function loadProducts(dCategoryId, pCategoryId) {
            const pcategoryList = ['All', 'chocolate', 'drinks', 'chips', 'biscuit', 'Cosmetic', 'Soap & Detergent', 'Fragrance', 'Tea, Coffie & Milk', 'Baby Food', 'Daily needs', 'Restaurent & Electric', 'Others']
            const tabId = `${pcategoryList[pCategoryId]}-tab-pane`;
            const container = document.getElementById(tabId);

            // Show loading indicator
            // document.getElementById(tabPaneId).innerHTML = '<div class="text-center">Loading...</div>';

            // Make AJAX request
            fetch(`/products-by-category/${dCategoryId}/${pCategoryId}`)
                .then(response => response.json())
                .then(data => {
                    console.log(data);
                    if (data.status === 'success') {
                        const products = data.data;

                        if (products.length === 0) {
                            container.innerHTML = '';
                            container.innerHTML = '<div class="text-center">No products found.</div>';
                            return;
                        } else {
                            container.innerHTML = ''; // Clear previous content
                        }

                        let html = '<div class="row">';
                        products.forEach(product => {
                            html += `
        <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mt-3">
            <div class="custom-block bg-white shadow-lg" style="padding-top:0px;">
                <img src="/images/products/${product.image}" class="custom-block-image img-fluid" alt="">
                <div class="d-flex">
                    <div>
                        <h6 class="mb-2 mt-2">${product.name}</h6>
                    </div>
                    <span class="badge bg-design rounded-pill d-inline-flex ms-auto mt-3 align-items-center gap-1 p-2">
                            <img src="/images/country/${product.d_category === 4 ? 'israel.png' : product.d_category === 2 ? 'india.png' : product.d_category === 1 ? 'bg.png' : 'default.png'}" alt="Flag" style="height: 16px; width: auto;">
                    </span>
                </div>
            </div>
        </div>
    `;
                        });
                        html += '</div>'; // Close product row

                        // 👇 Separate row for the button
                        html += `
    <div class="row">
        <div class="col-12 text-center mt-5">
            <button class="btn btn-danger bg-design text-white"
                data-bs-toggle="modal"
                data-bs-target="#exampleModal"
                onclick="getAlterProduct()" style="padding: 10px 20px;
    border-radius: 30px;">বিকল্প পন্য দেখুন</button>
        </div>
    </div>
`;

                        // Now insert this into the container
                        container.innerHTML = html;

                    } else {
                        container.innerHTML = '<div class="text-center text-danger"> Products will be uploaded very soon.</div>';
                    }
                })

                .catch(error => {
                    console.error('Error:', error);
                    // document.getElementById(tabPaneId).innerHTML =
                    //     '<div class="text-center text-danger">Error loading products</div>';
                });
        }


        function getAlterProduct() {
            const activeTab = document.querySelector('.nav-link.category.active');
            if (activeTab) {
                pCategoryId = parseInt(activeTab.getAttribute('data-value'));
            }
            const selectElement = document.getElementById('category');
            const dCategoryId = 1;
            console.log(pCategoryId);
            console.log(dCategoryId);
            document.getElementById('exampleModalLabel').innerHTML = 'দেশী বিকল্প পন্য';
            const container = document.getElementById('alterProduct');
            // console.log(container);


            fetch(`/products-by-category/${dCategoryId}/${pCategoryId}`)
                .then(response => response.json())
                .then(data => {
                    console.log(data);
                    if (data.status === 'success') {
                        const products = data.data;

                        if (products.length === 0) {
                            container.innerHTML = '';
                            container.innerHTML = '<div class="text-center">No products found.</div>';
                            return;
                        } else {
                            container.innerHTML = ''; // Clear previous content
                        }

                        let html = '<div class="row">';
                        products.forEach(product => {
                            html += `
        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0 mt-3">
            <div class="custom-block bg-white shadow-lg" style="padding-top:0px;">
                <img src="/images/products/${product.image}" class="custom-block-image img-fluid" alt="">
                <div class="d-flex">
                    <div>
                        <h6 class="mb-2 mt-2">${product.name}</h6>
                    </div>
                    <span class="badge bg-design rounded-pill d-inline-flex ms-auto mt-3 align-items-center gap-1 p-2">
                        <img src="/images/country/${product.d_category === 4 ? 'israel.png' : product.d_category === 2 ? 'india.png' : product.d_category === 1 ? 'bg.png' : 'default.png'}" alt="Flag" style="height: 16px; width: auto;">
                    </span>
                </div>
            </div>
        </div>
    `;
                        });
                        html += '</div>'; // Close product row

                        // 👇 Separate row for the button
                        //                         html += `
                        //     <div class="row">
                        //         <div class="col-12 text-center mt-4">
                        //             <button class="btn btn-info text-white"
                        //                 data-bs-toggle="modal"
                        //                 data-bs-target="#exampleModal"
                        //                 onclick="getAlterProduct()">বিকল্প পন্য দেখুন</button>
                        //         </div>
                        //     </div>
                        // `;

                        // Now insert this into the container
                        container.innerHTML = html;

                    } else {
                        container.innerHTML = '<div class="text-center text-danger"> Products will be uploaded very soon.</div>';
                    }
                })

                .catch(error => {
                    console.error('Error:', error);
                    // document.getElementById(tabPaneId).innerHTML =
                    //     '<div class="text-center text-danger">Error loading products</div>';
                });
        }
    </script>

    <script>
        // const banglaCategoryNames = {
        //     'All': 'সব',
        //     'chocolate': 'চকলেট',
        //     'drinks': 'পানীয়',
        //     'chips': 'চিপস',
        //     'biscuit': 'বিস্কুট',
        //     'cosmetic': 'কসমেটিক',
        //     'soap': 'সাবান ও ডিটারজেন্ট',
        //     'fragrance': 'সুগন্ধি',
        //     'tea': 'চা, কফি ও দুধ',
        //     'baby_food': 'শিশুখাদ্য',
        //     'daily_needs': 'দৈনন্দিন প্রয়োজনীয়তা',
        //     'restaurant': 'রেস্টুরেন্ট ও ইলেকট্রিক',
        //     'others': 'অন্যান্য'
        // };

        const banglaCategoryNames = {
            'All': 'সব',
            'chocolate': 'চকলেট',
            'drinks': 'পানীয়',
            'chips': 'চিপস',
            'biscuit': 'বিস্কুট',
            'Cosmetic': 'কসমেটিক',
            'Soap & Detergent': 'সাবান ও ডিটারজেন্ট',
            'Fragrance': 'সুগন্ধি',
            'Tea, Coffie & Milk': 'চা, কফি ও দুধ',
            'Baby Food': 'শিশুখাদ্য',
            'Daily needs': 'দৈনন্দিন প্রয়োজনীয়তা',
            'Restaurent & Electric': 'রেস্টুরেন্ট ও ইলেকট্রিক',
            'Others': 'অন্যান্য'
        };


        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll('.nav-link.category').forEach(button => {
                const engName = button.innerText.trim();
                if (banglaCategoryNames[engName]) {
                    button.innerText = banglaCategoryNames[engName];
                }
            });
        });
    </script>



<script>
    $(document).ready(function() {
        $('.contact-form').submit(function(e) {
            e.preventDefault();

            var formData = $(this).serialize(); // Changed from FormData to serialize()

            $.ajax({
                url: $(this).attr('action'),
                type: 'POST',
                data: formData,
                dataType: 'json', // Expect JSON response
                success: function(response) {
                    Swal.fire({
                        title: "ধন্যবাদ!",
                        text: "আপনার বার্তা সফলভাবে পাঠানো হয়েছে।আমাদের সাথে থাকার জন্য ধন্যবাদ।",
                        icon: "success"
                    });
                    $('.contact-form')[0].reset();
                },
                error: function(xhr, status, error) {
                    Swal.fire({
                        title: "দুঃখিত!",
                        text: "বার্তা পাঠাতে সমস্যা হয়েছে। আবার চেষ্টা করুন।",
                        icon: "error"
                    });
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>


</body>

</html>