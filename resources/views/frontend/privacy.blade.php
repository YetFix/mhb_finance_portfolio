@extends('frontend.layouts.master')
@section('content')
    <!--Main Breadcrumb Area Start -->
    <div class="main-breadcrumb-area" style="background-image : url({{ asset('front/img/breadcrumb_image_.jpg') }});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="pagetitle">
                        Privacy Policy
                    </h1>
                    <ul class="pages">
                        <li>
                            <a href="/">
                                Home
                            </a>
                        </li>
                        <li class="active">
                            <a href="/privacy">
                                Privacy Policy
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--Main Breadcrumb Area End -->

    <!-- Service Area Start -->
    <section class="service-area service-page" style="padding-top: 30px;important">
        <div class="container">
            <div class="row">
                <div class="col">
                   
                        <div class="right-area">
                            <h2 class="title text-center">
                               আমাদের নীতিমালা 
                            </h2>
                           
                        </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col">
                        <div class="right-area">
                            <h4 class="title">
                               রিফান্ড নীতিমালা (Refund Policy)
                            </h4>
                            <p class="text">
                             Shanta Network গ্রাহকদের জন্য একটি সরল রিফান্ড নীতিমালা অনুসরণ করে। গ্রাহক লিংক৩ ইন্টারনেট সংযোগের জন্য পেমেন্ট করার পর রিফান্ড নিম্নলিখিত বিধান অনুযায়ী প্রক্রিয়া করা হবে—
                            </p>
                            <ol>
                                <li>রিফান্ড ১০ কার্যদিবসের মধ্যে প্রদান করা হবে।</li>

                                <li>ইনস্টলেশন সম্পন্ন হওয়ার পর যদি গ্রাহক রিফান্ড চান, তবে গ্রাহক তার প্রদত্ত সিকিউরিটি ডিপোজিট (যদি প্রযোজ্য হয়) ফেরত পাবেন।</li>

                                <li>গ্রাহকের অ্যাকাউন্টে যে কোনো অতিরিক্ত সাবস্ক্রিপশন ফি জমা থাকলে এবং তা ফেরতের যোগ্য হলে, গ্রাহক সেই অর্থও ফেরত পেতে পারেন।</li>
                            </ol>

                        </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col">
                        <div class="right-area">
                            <h4 class="title">
                               ডেলিভারি নীতিমালা (Delivery Policy)
                            </h4>
                            <p class="text">
                            

                                গ্রাহক সাবস্ক্রিপশন সম্পন্ন করার পর সর্বোচ্চ তিন (৩) দিনের মধ্যে Shanta Network প্রয়োজনীয় সেবা প্রদান করবে।
                                যদি কোনো অপ্রত্যাশিত কারণে সেবা প্রদান বিলম্বিত হওয়ার সম্ভাবনা থাকে, তবে Shanta Network যত দ্রুত সম্ভব গ্রাহককে সে সম্পর্কে অবহিত করবে।
                            </p>
                        </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col">
                        <div class="right-area">
                            <h4 class="title">
                              বাতিলকরণ নীতিমালা (Cancellation Policy)
                            </h4>
                            <p class="text">
                             সংযোগ বাতিলের অনুরোধ শুধুমাত্র নিম্নলিখিত পরিস্থিতিতে গ্রহণযোগ্য হবে—
                            </p>
                            <ol>
                                <li>
                                    কভারেজ এলাকার বাইরে স্থানান্তর
                                গ্রাহক যদি এমন কোনো স্থানে স্থানান্তরিত হন যেখানে Shanta Network-এর কভারেজ নেই, তবে সংযোগ বাতিলের আবেদন গ্রহণযোগ্য হবে।
                                </li>

                                   <li>
                                         এক মাসের বেশি নিষ্ক্রিয় (Inactive) থাকা
                                    গ্রাহক যদি সংযোগ নিষ্ক্রিয় হওয়ার পর ১ মাসের মধ্যে রিনিউ না করেন, তাহলে সংযোগ বাতিল বলে গণ্য হবে এবং গ্রাহককে প্রদত্ত ONU ডিভাইস ফেরত দিতে হবে।
                                   <li>
                                        গ্রাহকের ইচ্ছাধীন বাতিল (Voluntary Cancellation)
                                গ্রাহক নিজ সিদ্ধান্তে সংযোগ বাতিল করতে চাইলে সংযোগ বাতিল করা হবে।
                                   </li>

                                
                            </ol>

                        </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Service Area End -->
@endsection
