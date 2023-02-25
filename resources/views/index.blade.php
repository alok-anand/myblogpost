@extends('layout.testprep.main')

@section('main-container')
<body class="bg-white">
<x-testprep.navbar active="Home" />
<main class="home">
  <section class="section hero pb-md-0 pb-8 pt-md-8 pt-0">
    <div class="custom-container">
      <div class="header--box position-relative">
        <div class="row">
          <div class="col-lg-5 col-sm-5 ">
            <div class="white-badge-header mb-md-0 mb-5">
              <h1 class="main-title"> Over 15K+ Students
                <div class="sub-title">Clear <span class="text--red ">IELTS 2022</span> </div>
              </h1>
            </div>
          </div>
          <div class="col-lg-5 offset-lg-2 col-sm-7">
            <div class="align-right-header ps-md-6 px-6">
              <p class="amount-text mb-7">Courses Starting at ₹9,000
              <p>
              <div class="offer mb-7"> <img class="img-fluid lazyload" data-src="{{ URL::to('/prep/assets/images/offer.svg') }}" alt="offer"> </div>
              <button  class="arrow arrow--button arrow--button__redBg arrow--button__ border-0" data-toggle="modal" data-target="#requestModal" ><span>Explore All Courses</span></button>
            </div>
            <div class="tp--img"> <img class="lazyload d-lg-block d-md-none d-none" data-src="{{ URL::to('/prep/assets/images/troph-header.webp') }}" alt="Winner"> </div>
          </div>
        </div>
      </div>
      <div class="course--list shadow">
        <h2 class="title-two mb-6">Courses <span class="text--light text--regular hero--cta ">(For Study Abroad)</span> </h2>
        <div class="cp-course-logo">
          <div class="cp-ex--logo">
            <div class="ex-icon mb-5"><img class="lazyload" data-src="{{ URL::to('/prep/assets/images/logo/ielts.png') }}" alt="IELTS"> </div>
            <a href="#"> IELTS </a> </div>
          <div class="cp-ex--logo">
            <div class="ex-icon mb-5"><img class="lazyload" data-src="{{ URL::to('/prep/assets/images/logo/tofel.png') }}" alt="IELTS"> </div>
            <a href="#"> TOEFL </a> </div>
          <div class="cp-ex--logo">
            <div class="ex-icon mb-5"><img class="lazyload" data-src="{{ URL::to('/prep/assets/images/logo/pte.png') }}" alt="IELTS"> </div>
            <a href="#"> PTE </a> </div>
          <div class="cp-ex--logo">
            <div class="ex-icon mb-5"><img class="lazyload" data-src="{{ URL::to('/prep/assets/images/logo/cael.png') }}" alt="IELTS"> </div>
            <a href="#"> CAEL </a> </div>
          <div class="cp-ex--logo">
            <div class="ex-icon mb-5"><img class="lazyload" data-src="{{ URL::to('/prep/assets/images/logo/CELPIP.png') }}" alt="IELTS"> </div>
            <a href="#">CELPIP </a> </div>
          <div class="cp-ex--logo">
            <div class="ex-icon mb-5"><img class="lazyload" data-src="{{ URL::to('/prep/assets/images/logo/dulingo.png') }}" alt="Duolingo"> </div>
            <a href="#">Duolingo </a> </div>
        </div>
      </div>
    </div>
  </section>
  <section class="better-study">
    <div class="custom-container">
      <div class="row">
        <div class="d-flex flex-column">
          <h2 class="section--title text--semi m-auto text-center">Study better, faster</h2>
          <p class="text--light text--regular text-center w-80 m-auto mt-5">Save time and go beyond flashcards with unlimited studying in Learn and Test Save time and go beyond flashcards with unlimited studying in Learn and Test. </p>
          <div class="w-70 w-sm-100 m-auto text-center mt-md-11 mt-4"> <img class="lazyload img-fluid" data-src="{{ URL::to('/prep/assets/images/best-test.svg') }}" alt="Duolingo"> </div>
        </div>
      </div>
      <div class="in-test-class mt-md-10 mt-8">
        <div class="row">
          <div class="col-md-3 mb-3">
            <div class="what--list">
              <div class="what--list__image"> <i class="bx bx-select-multiple"></i> </div>
              <div class="what--list__right mt-3 pl-md-0 pl-4">
                <h3 class="text--primary mb-4">360* Learning</h3>
                <p class="text--light text--regular">Learn more efficiently with study paths designed for you</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="what--list">
              <div class="what--list__image"> <i class="bx bxs-videos"></i></div>
              <div class="what--list__right mt-3 pl-md-0 pl-4">
                <h3 class="text--primary mb-4">Recorded Classes</h3>
                <p class="text--light text--regular">Get unlimited practice with multiple choice, written questions, and more</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="what--list">
              <div class="what--list__image"> <i class="bx bx-user-voice"></i> </div>
              <div class="what--list__right mt-3 pl-md-0 pl-4">
                <h3 class="text--primary mb-4">Speaking Sessions</h3>
                <p class="text--light text--regular">Customize tests to measure how well you know the material</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="what--list">
              <div class="what--list__image"> <i class="bx bx-select-multiple"></i> </div>
              <div class="what--list__right mt-3 pl-md-0 pl-4">
                <h3 class="text--primary mb-4">Dynamic feedback </h3>
                <p class="text--light text--regular">Go beyond memorization to master concepts</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section section__black best--band-section py-md-16 py-10 mb-0">
    <div class="custom-container">
      <div class="best-band-container">
        <p class="section--tag text--light">Selections at Canamprep</p>
        <div class="row">
          <div class="col-md-7 best--bands">
            <h2 class="section--title text--white text--semi mb-5">We are proud to have assisted over 50,000 students score 7+ bands</h2>
            <ul class="tick--container">
              <li class="tick--list text-white ">Improve your band score by 0.5 in the first week.</li>
            </ul>
            <p class="text-white mt-5">Experience the most advanced IELTS test prep</p>
            <a href="javascript:void(0)" class="arrow arrow--button arrow--button__white mt-5" data-target="#requestModal" data-toggle="modal"><span>Book Now</span></a> </div>
          <div class="col-md-5">
            <div class="student-collage mt-md-0 mt-5">
              <div class="img-cloud__img-box"> <img class="lazyload" data-src="{{ URL::to('/prep/assets/images/kovid.jpg') }}" alt="Student Name">
                <div class="img-cloud__content">
                  <h2>Kovid Jain</h2>
                  <h3>8 Band | IELTS</h3>
                </div>
              </div>
              <div class="img-cloud__img-box"> <img class="lazyload" data-src="{{ URL::to('/prep/assets/images/gaurav.jpg') }}" alt="Student Name">
                <div class="img-cloud__content">
                  <h2>Gaurav Sharma</h2>
                  <h3>8 Band | IELTS</h3>
                </div>
              </div>
              <div class="img-cloud__img-box"> <img class="lazyload" class="lazyload" data-src="{{ URL::to('/prep/assets/images/srishti.jpg') }}" alt="Student Name">
                <div class="img-cloud__content">
                  <h2>Srishti</h2>
                  <h3>7.5 Band | IELTS</h3>
                </div>
              </div>
              <div class="img-cloud__img-box"> <img class="lazyload" data-src="{{ URL::to('/prep/assets/images/Tanishtha.jpg') }}" alt="Student Name">
                <div class="img-cloud__content">
                  <h2>Tanishtha Bansal</h2>
                  <h3>7 Band | IELTS</h3>
                </div>
              </div>
              <div class="img-cloud__img-box"> <img class="lazyload" data-src="{{ URL::to('/prep/assets/images/karanpreet.jpg') }}" alt="Student Name">
                <div class="img-cloud__content">
                  <h2>Karanpreet Singh</h2>
                  <h3>7 Band | IELTS</h3>
                </div>
              </div>
              <div class="img-cloud__img-box"> <img class="lazyload" data-src="{{ URL::to('/prep/assets/images/vansh.jpg') }}" alt="Student Name">
                <div class="img-cloud__content">
                  <h2>Vansh Rai</h2>
                  <h3>7.5 Band | IELTS</h3>
                </div>
              </div>
              <div class="img-cloud__img-box"> <img class="lazyload" data-src="{{ URL::to('/prep/assets/images/navjot.jpg') }}" alt="Student Name">
                <div class="img-cloud__content">
                  <h2>Navjot Kaur</h2>
                  <h3>7 Band | IELTS</h3>
                </div>
              </div>
              <div class="img-cloud__img-box"> <img class="lazyload" data-src="{{ URL::to('/prep/assets/images/simran.jpg') }}" alt="Student Name">
                <div class="img-cloud__content">
                  <h2>Simran</h2>
                  <h3>7 Band | IELTS</h3>
                </div>
              </div>
              <div class="img-cloud__img-box"> <img class="lazyload" data-src="{{ URL::to('/prep/assets/images/mili.jpg') }}" alt="Student Name">
                <div class="img-cloud__content">
                  <h2>Mili Mago</h2>
                  <h3>7 Band | IELTS</h3>
                </div>
              </div>
              <div class="img-cloud__img-box"> <img class="lazyload" data-src="{{ URL::to('/prep//assets/images/karuna.jpg') }}" alt="Student Name">
                <div class="img-cloud__content">
                  <h2>Karuna</h2>
                  <h3>7 Band | IELTS</h3>
                </div>
              </div>
              <div class="img-cloud__img-box"> <img class="lazyload" data-src="{{ URL::to('/prep/assets/images/sanam.jpg') }}" alt="Student Name">
                <div class="img-cloud__content">
                  <h2>Chirag Dalal</h2>
                  <h3>7 Band | IELTS</h3>
                </div>
              </div>
              <div class="img-cloud__img-box"> <img class="lazyload" data-src="{{ URL::to('/prep/assets/images/jameet.jpg') }}" alt="Student Name">
                <div class="img-cloud__content">
                  <h2>Jasneet Kaur</h2>
                  <h3>7.5 Band | IELTS</h3>
                </div>
              </div>
              <div class="img-cloud__img-box"> <img class="lazyload" data-src="{{ URL::to('/prep/assets/images/gulshan.jpg') }}" alt="Student Name">
                <div class="img-cloud__content">
                  <h2>Gulshan Kumar</h2>
                  <h3>7 Band | IELTS</h3>
                </div>
              </div>
              <div class="img-cloud__img-box"> <img class="lazyload" data-src="{{ URL::to('/prep/assets/images/rasika.jpg') }}" alt="Student Name">
                <div class="img-cloud__content">
                  <h2>Rasika</h2>
                  <h3>7 Band | IELTS</h3>
                </div>
              </div>
              <div class="img-cloud__img-box img-cloud__img-box--lg-1"><img class="lazyload" data-src="{{ URL::to('/prep/assets/images/DIVNOOR.jpg') }}" alt="Student Name">
                <div class="img-cloud__content">
                  <h2>Divnoor Kaur</h2>
                  <h3>8 Band | IELTS</h3>
                </div>
              </div>
              <div class="img-cloud__img-box img-cloud__img-box--lg-2"><img class="lazyload" data-src="{{ URL::to('/prep/assets/images/SUMATI.jpg') }}" alt="Student Name">
                <div class="img-cloud__content">
                  <h2>Sumati Sood</h2>
                  <h3>8 Band | IELTS</h3>
                </div>
              </div>
              <div class="img-cloud__img-box img-cloud__img-box--lg-3"><img class="lazyload" data-src="{{ URL::to('/prep/assets/images/harman.jpg') }}" alt="Student Name">
                <div class="img-cloud__content">
                  <h2>Harman Bir Sigh</h2>
                  <h3>8 Band | IELTS</h3>
                </div>
              </div>
              <div class="img-cloud__img-box img-cloud__img-box--lg-4"><img class="lazyload" data-src="{{ URL::to('/prep/assets/images/yatik.jpg') }}" alt="Student Name">
                <div class="img-cloud__content">
                  <h2>Yatik Mittal</h2>
                  <h3>8 Band | IELTS</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
 <x-testprep.forms.demoform/>
 
  <section class="section explore py-md-16 py-10 pt-0">
    <div class="custom-container border-top pt-md-12 pt-10">
      <h2 class="section--title text--primary text--semi mb-10">What's New on <span class="text-danger">Canamprep</span></h2>
      <div class="new--prep--slider owl-carousel">
        <div class="student-slide-thumb position-relative"> <img class="img-fluid lazyload" data-src="{{ URL::to('/prep/assets/images/event-card.webp') }}" alt="Enrol Now">
          <button class="arrow arrow--button arrow--button__black arrow--button__ border-0 mt-md-0 mt-3 px-md-4 px-3 py-md-3 py-2 fs-15" onclick="location.href='{{url('/testprep/course-detail')}}'" ><span>Course Details</span></button>
           <!--a class="arrow arrow--button arrow--button__black arrow--button__ border-0 mt-md-0 mt-3 px-md-4 px-3 py-md-3 py-2 fs-15" href="{{url('/testprep/exams/ielts')}} " ><span>Course Details</span></a-->
        </div>
        <div class="student-slide-thumb position-relative"> <img class="img-fluid lazyload" data-src="{{ URL::to('/prep/assets/images/event-card-2.webp') }}" alt="Enrol Now">
          <button class="arrow arrow--button arrow--button__black arrow--button__ border-0 mt-md-0 mt-3 px-md-4 px-3 py-md-3 py-2" data-toggle="modal" data-target="#requestModal"><span>Enrol Now</span></button>
        </div>
        <div class="student-slide-thumb position-relative"> <img class="img-fluid lazyload" data-src="{{ URL::to('/prep/assets/images/event-card.webp') }}" alt="Enrol Now">
          <button class="arrow arrow--button arrow--button__black arrow--button__ border-0 mt-md-0 mt-3 px-md-4 px-3 py-md-3 py-2" data-toggle="modal" data-target="#requestModal"><span>Enrol Now</span></button>
        </div>
        <div class="student-slide-thumb position-relative"> <img class="img-fluid lazyload" data-src="{{ URL::to('/prep/assets/images/event-card-2.webp') }}" alt="Enrol Now">
          <button class="arrow arrow--button arrow--button__black arrow--button__ border-0 mt-md-0 mt-3 px-md-4 px-3 py-md-3 py-2" data-toggle="modal" data-target="#requestModal"><span>Enrol Now</span></button>
        </div>
      </div>
      <div class="d-flex justify-content-between why--controls  mt-md-9 mt-3">
        <div class="slider-controls"> <a href="javascript:void(0)" class="btn-prev"></a> <a href="javascript:void(0)" class="btn-next"></a> </div>
        <a href="./article.html" class="arrow arrow--button arrow--button__red arrow--button__" id="@@id"><span>View All</span></a> </div>
    </div>
  </section>
  <section class="section bg-light2 explore  py-md-16 py-10">
    <div class="custom-container ">
      <h2 class="section--title text--primary text--semi mb-md-11">Explore all our Offerings</h2>
      <ul class="nav tabs" id="myTab" role="tablist">
        <li class="tabs--item"> <a class="tabs--link active" id="ielts-tab" data-toggle="tab" href="#ielts" role="tab" aria-controls="ielts" aria-selected="true">IELTS</a> </li>
        <li class="tabs--item ms-10"> <a class="tabs--link" id="pte-tab" data-toggle="tab" href="#pte" role="tab" aria-controls="pte" aria-selected="false">PTE</a> </li>
      </ul>
      <div class="tabs--content tab-content mt-md-10 mt-8" id="myTabContent">
        <div class="tab-pane fade show active" id="ielts" role="tabpanel" aria-labelledby="ielts-tab">
          <h4 class="fs-25"><span class="bg-danger text-white px-4 radius-10">Free</span> LIVE Classes</h4>
          <div class="card--video__slider owl-carousel mt-4">
            <div class="item card--video border radius-10 overflow-hidden bg-white">
              <figure class="card--video__figure"> <img class="img-fluid lazyload" data-src="{{ URL::to('/prep/assets/images/video-thumb-1.webp') }}" alt="IELTS Quiz the day: How to use
vocabulary?"> <img class="card--video__play" src="{{ URL::to('/prep/assets/images/play.svg') }}" alt="play button">
                <div class="card--event__dates ">
                  <p class="card--event__date bg-danger"><span class=" card--event__date__number text--white">28</span><span class="card--event__date__month text--light text--white">Feb</span></p


                </div>
              </figure>
              <div class="p-3 "> <img class="lazyload live-meet-logo" data-src="{{ URL::to('/prep/assets/images/student/ielts-logo2.svg') }}" alt="IELTS Quiz the day: How to use
vocabulary?">
                <p class="card--event__name text--primary text--semi mt-0 mb-2">IELTS Quiz the day: How to use
                  vocabulary? </p>
                <p class="card--video__description text--light text--regular mt-0 pt-0 mb-3">By Divya Gandhi | 3:30 pm</p>
                <button class="button-rounded arrow--button__redBg  border-0 px-5 py-3"> <i class="fs-16 bx bx-bell bx-tada"></i> Reminder Me</button>
              </div>
            </div>
            <div class="item card--video border radius-10 overflow-hidden bg-white">
              <figure class="card--video__figure"> <img class="img-fluid lazyload" data-src="{{ URL::to('/prep/assets/images/video-thumb-2.webp') }}" alt="IELTS Quiz the day: How to use
vocabulary?"> <img class="card--video__play" src="{{ URL::to('/prep/assets/images/play.svg/assets/images/play.svg/assets/images/play.svg') }}" alt="play button">
                <div class="card--event__dates ">
                  <p class="card--event__date bg-danger"><span class=" card--event__date__number text--white">30</span><span class="card--event__date__month text--light text--white">Mar</span></p


                </div>
              </figure>
              <div class="p-3"> <img class="lazyload  live-meet-logo" data-src="{{ URL::to('/prep/assets/images/student/ielts-logo2.svg') }}" alt="IELTS Quiz the day: How to use
vocabulary?">
                <p class="card--event__name text--primary text--semi mt-0 mb-2">IELTS Quiz the day: How to use
                  vocabulary? </p>
                <p class="card--video__description text--light text--regular mt-0 pt-0 mb-3">By Divya Gandhi | 3:30 pm</p>
                <button   class="button-rounded button-rounded__dark border-0 px-5 py-3">Join Now</button>
              </div>
            </div>
            <div class="item card--video border radius-10 overflow-hidden bg-white">
              <figure class="card--video__figure"> <img class="img-fluid lazyload" data-src="{{ URL::to('/prep/assets/images/video-thumb-1.webp') }}" alt="IELTS Quiz the day: How to use
vocabulary?"> <img class="card--video__play" src="{{ URL::to('/prep/assets/images/play.svg') }}" alt="play button">
                <div class="card--event__dates ">
                  <p class="card--event__date bg-danger"><span class=" card--event__date__number text--white">28</span><span class="card--event__date__month text--light text--white">Feb</span></p


                </div>
              </figure>
              <div class="p-3"> <img class="lazyload  live-meet-logo" data-src="{{ URL::to('/prep/assets/images/student/ielts-logo2.svg') }}" alt="IELTS Quiz the day: How to use
vocabulary?">
                <p class="card--event__name text--primary text--semi mt-0 mb-2">IELTS Quiz the day: How to use
                  vocabulary? </p>
                <p class="card--video__description text--light text--regular mt-0 pt-0 mb-3">By Divya Gandhi | 3:30 pm</p>
                <button   class="button-rounded button-rounded__dark border-0 px-5 py-3">Join Now</button>
              </div>
            </div>
            <div class="item card--video border radius-10 overflow-hidden bg-white">
              <figure class="card--video__figure"> <img class="img-fluid lazyload" data-src="{{ URL::to('/prep/assets/images/video-thumb-1.webp') }}" alt="IELTS Quiz the day: How to use
vocabulary?"> <img class="card--video__play" src="{{ URL::to('/prep/assets/images/play.svg') }}" alt="play button">
                <div class="card--event__dates ">
                  <p class="card--event__date bg-danger"><span class=" card--event__date__number text--white">1</span><span class="card--event__date__month text--light text--white">Mar</span></p


                </div>
              </figure>
              <div class="p-3"> <img class="lazyload  live-meet-logo" data-src="{{ URL::to('/prep/assets/images/student/ielts-logo2.svg') }}" alt="IELTS Quiz the day: How to use
vocabulary?">
                <p class="card--event__name text--primary text--semi mt-0 mb-2">IELTS Quiz the day: How to use
                  vocabulary? </p>
                <p class="card--video__description text--light text--regular mt-0 pt-0 mb-3">By Divya Gandhi | 3:30 pm</p>
                <button class="button-rounded arrow--button__redBg  border-0 px-5 py-3"> <i class="fs-16 bx bx-bell bx-tada"></i> Reminder Me</button>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="pte" role="tabpanel" aria-labelledby="pte-tab">
          <h4 class="fs-25"><span class="bg-danger text-white px-4 radius-10">Free</span> LIVE Classes</h4>
          <div class="card--video__slider owl-carousel mt-4">
            <div class="item card--video border radius-10 overflow-hidden bg-white">
              <figure class="card--video__figure"> <img class="img-fluid lazyload" data-src="{{ URL::to('/prep/assets/images/video-thumb-1.webp') }}" alt="IELTS Quiz the day: How to use
vocabulary?"> <img class="card--video__play" src="{{ URL::to('/prep/assets/images/play.svg') }}" alt="play button">
                <div class="card--event__dates ">
                  <p class="card--event__date bg-danger"><span class=" card--event__date__number text--white">28</span><span class="card--event__date__month text--light text--white">Feb</span></p


                </div>
              </figure>
              <div class="p-3"> <img class="lazyload  live-meet-logo" data-src="{{ URL::to('/prep/assets/images/pte-logo.svg') }}" alt="PTE">
                <p class="card--event__name text--primary text--semi mt-0 mb-2">IELTS Quiz the day: How to use
                  vocabulary? </p>
                <p class="card--video__description text--light text--regular mt-0 pt-0 mb-3">By Divya Gandhi | 3:30 pm</p>
                <button class="button-rounded arrow--button__redBg  border-0 px-5 py-3"> <i class="fs-16 bx bx-bell bx-tada"></i> Reminder Me</button>
              </div>
            </div>
            <div class="item card--video border radius-10 overflow-hidden bg-white">
              <figure class="card--video__figure"> <img class="img-fluid lazyload" data-src="{{ URL::to('/prep/assets/images/video-thumb-2.webp') }}" alt="IELTS Quiz the day: How to use
vocabulary?"> <img class="card--video__play" src="{{ URL::to('/prep/assets/images/play.svg') }}" alt="play button">
                <div class="card--event__dates ">
                  <p class="card--event__date bg-danger"><span class=" card--event__date__number text--white">30</span><span class="card--event__date__month text--light text--white">Mar</span></p


                </div>
              </figure>
              <div class="p-3"> <img class="lazyload  live-meet-logo" data-src="{{ URL::to('/prep/assets/images/pte-logo.svg') }}" alt="PTE">
                <p class="card--event__name text--primary text--semi mt-0 mb-2">IELTS Quiz the day: How to use
                  vocabulary? </p>
                <p class="card--video__description text--light text--regular mt-0 pt-0 mb-3">By Divya Gandhi | 3:30 pm</p>
                <button   class="button-rounded button-rounded__dark border-0 px-5 py-3">Join Now</button>
              </div>
            </div>
            <div class="item card--video border radius-10 overflow-hidden bg-white">
              <figure class="card--video__figure"> <img class="img-fluid lazyload" data-src="{{ URL::to('/prep/assets/images/video-thumb-1.webp') }}" alt="IELTS Quiz the day: How to use
vocabulary?"> <img class="card--video__play" src="{{ URL::to('/prep/assets/images/play.svg') }}" alt="play button">
                <div class="card--event__dates ">
                  <p class="card--event__date bg-danger"><span class=" card--event__date__number text--white">28</span><span class="card--event__date__month text--light text--white">Feb</span></p


                </div>
              </figure>
              <div class="p-3"> <img class="lazyload  live-meet-logo" data-src="{{ URL::to('/prep/assets/images/pte-logo.svg') }}" alt="PTE">
                <p class="card--event__name text--primary text--semi mt-0 mb-2">IELTS Quiz the day: How to use
                  vocabulary? </p>
                <p class="card--video__description text--light text--regular mt-0 pt-0 mb-3">By Divya Gandhi | 3:30 pm</p>
                <button   class="button-rounded button-rounded__dark border-0 px-5 py-3">Join Now</button>
              </div>
            </div>
            <div class="item card--video border radius-10 overflow-hidden bg-white">
              <figure class="card--video__figure"> <img class="img-fluid lazyload" data-src="{{ URL::to('/prep/assets/images/video-thumb-1.webp') }}" alt="IELTS Quiz the day: How to use
vocabulary?"> <img class="card--video__play" src="{{ URL::to('/prep/assets/images/play.svg') }}" alt="play button">
                <div class="card--event__dates ">
                  <p class="card--event__date bg-danger"><span class=" card--event__date__number text--white">1</span><span class="card--event__date__month text--light text--white">Mar</span></p


                </div>
              </figure>
              <div class="p-3"> <img class="lazyload  live-meet-logo" data-src="{{ URL::to('/prep/assets/images/pte-logo.svg') }}" alt="PTE">
                <p class="card--event__name text--primary text--semi mt-0 mb-2">IELTS Quiz the day: How to use
                  vocabulary? </p>
                <p class="card--video__description text--light text--regular mt-0 pt-0 mb-3">By Divya Gandhi | 3:30 pm</p>
                <button class="button-rounded arrow--button__redBg  border-0 px-5 py-3"> <i class="fs-16 bx bx-bell bx-tada"></i> Reminder Me</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-between why--controls  mt-md-9 mt-0" >
        <div class="slider-controls"> <a href="javascript:void(0)" class="btn-prev "></a> <a href="javascript:void(0)" class="btn-next "></a> </div>
        <a href="./article.html" class="arrow arrow--button arrow--button__red arrow--button__" id="@@id"><span>View All</span></a> </div>
    </div>
    </div>
  </section>
  <section class="section  reach mt-0 mb-0 prep-feature py-md-16 py-10">
    <div class="custom-container">
      <div class="row">
        <div class="col-md-5">
          <h2 class="section--title text--dark text--semi">Study Material</h2>
        </div>
        <div class="study--material owl-carousel"> <a href="./event-detail.html" class="item card--event ">
          <h3 class="mb-3">Practice Test</h3>
          <img class="lazyload " data-src="{{ URL::to('/prep/assets/images/material-icon1.webp') }}" alt="Practice Test"> </a> <a href="./event-detail.html" class="item card--event ">
          <h3 class="mb-3">Mock Test</h3>
          <img class="lazyload " data-src="{{ URL::to('/prep/assets/images/material-icon2.webp') }}" alt="Mock Test"> </a> <a href="./event-detail.html" class="item card--event ">
          <h3 class="mb-3">Vocabulary</h3>
          <img class="lazyload " data-src="{{ URL::to('/prep/assets/images/material-icon3.webp') }}" alt="Vocabulary"> </a> <a href="./event-detail.html" class="item card--event ">
          <h3 class="mb-3">Writing Idea</h3>
          <img class="lazyload " data-src="{{ URL::to('/prep/assets/images/material-icon4.webp') }}" alt="Writing Idea"> </a> <a href="./event-detail.html" class="item card--event ">
          <h3 class="mb-3">Evaluation Test</h3>
          <img class="lazyload " data-src="{{ URL::to('/prep/assets/images/material-icon1.webp') }}" alt="Evaluation Test"> </a> </div>
      </div>
    </div>
  </section>
  <section class="section getting mt-0 pt-md-0 py-md-16 py-10 pt-0">
    <div class="custom-container border-top pt-md-12 pt-10">
      <p class="section--tag text--light">Supertrainers</p>
      <h2 class="section--title text--primary text--semi mb-md-9 mb-0">Gain an edge by learning from the best educators</h2>
      <div class="row" >
        <div class="col-md-4 mb-3 about">
          <div class="what--list with-icon">
            <div class="what--list__image"> <i class='bx bxs-edit'></i> </div>
            <div class="what--list__right">
              <p class="text--light text--regular">Learn and gain insights from ex-IELTS examiner. Know all the hidden tips and tricks required to crack IELTS</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3 about">
          <div class="what--list with-icon">
            <div class="what--list__image"> <i class='bx bx-user'></i> </div>
            <div class="what--list__right">
              <p class="text--light text--regular">Our entire faculty is certified and have scored above 7.5 bands with our lead team having scored above 8 bands</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3 about">
          <div class="what--list with-icon">
            <div class="what--list__image"> <i class='bx bx-user-pin'></i> </div>
            <div class="what--list__right">
              <p class="text--light text--regular">Combined Teaching Experience of over 50 years, assisted 50,000 students, 10 million + minutes spent providing quality education to our learners.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="super--coach owl-carousel">
      <div class="study-material ">
        <div class="box1">
          <div class="TeacherCard "><img class="lazyload"  data-src="{{ URL::to('/prep/assets/images/vishali.webp') }}" alt="Vaishali Gupta" title="Vaishali Gupta">
            <div class="TeacherCard_teacher-slider">
              <div class="TeacherCard_tag">11+ years exp</div>
              <h3>Vaishali Gupta</h3>
              <p>IELTS Master Trainer</p>
              <h4>Chandigarh</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="study-material ">
        <div class="box1">
          <div class="TeacherCard"><img  class="lazyload" data-src="{{ URL::to('/prep/assets/images/arun-dhati.webp') }}" alt="Arun Dhati" title="Arun Dhati">
            <div class="TeacherCard_teacher-slider">
              <div class="TeacherCard_tag">5+ years exp</div>
              <h3>Arun Dhati</h3>
              <p>IELTS Master Trainer</p>
              <h4>Chandigarh</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="study-material ">
        <div class="box1">
          <div class="TeacherCard "><img  class="lazyload" contenteditable=""data-src="{{ URL::to('/prep/assets/images/joyti.webp') }}" alt="Jyoti" title="Jyoti">
            <div class="TeacherCard_teacher-slider">
              <div class="TeacherCard_tag">6+ years exp</div>
              <h3>Jyoti</h3>
              <p>IELTS Master Trainer</p>
              <h4>Chandigarh</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="study-material ">
        <div class="box1">
          <div class="TeacherCard "><img class="lazyload" data-src="{{ URL::to('/prep/assets/images/komal-singh.webp') }}" alt="Komal-Singh" title="Komal-Singh">
            <div class="TeacherCard_teacher-slider">
              <div class="TeacherCard_tag">4+ years exp</div>
              <h3>Komal Singh</h3>
              <p>IELTS Master Trainer</p>
              <h4>Chandigarh</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="study-material ">
        <div class="box1">
          <div class="TeacherCard "><img class="lazyload" data-src="{{ URL::to('/prep//assets/images/kritika.webp') }}" alt="Kritika" title="Kritika">
            <div class="TeacherCard_teacher-slider">
              <div class="TeacherCard_tag">5+ years exp</div>
              <h3>Kritika</h3>
              <p>IELTS Master Trainer</p>
              <h4>Chandigarh</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="study-material ">
        <div class="box1">
          <div class="TeacherCard "><img class="lazyload" data-src="{{ URL::to('/prep/assets/images/faculty6.webp') }}" alt="Mandeep" title="Mandeep">
            <div class="TeacherCard_teacher-slider">
              <div class="TeacherCard_tag">5+ years exp</div>
              <h3>Mandeep</h3>
              <p>IELTS Master Trainer</p>
              <h4>Chandigarh</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="study-material ">
        <div class="box1">
          <div class="TeacherCard "><img class="lazyload" data-src="{{ URL::to('/prep/assets/images/sonam-kapoor.webp') }}" alt="Sonam Kapoor" title="Sonam Kapoor">
            <div class="TeacherCard_teacher-slider">
              <div class="TeacherCard_tag">6+ years exp</div>
              <h3>Sonam Kapoor</h3>
              <p>IELTS Master Trainer</p>
              <h4>Chandigarh</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="study-material ">
        <div class="box1">
          <div class="TeacherCard "><img class="lazyload" data-src="{{ URL::to('/prep/assets/images/neha-sharma.webp') }}" alt="Neha-sharma" tile="Neha-sharma">
            <div class="TeacherCard_teacher-slider">
              <div class="TeacherCard_tag">8+ years exp</div>
              <h3>Neha Sharma</h3>
              <p>IELTS Master Trainer</p>
              <h4>Chandigarh</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section wall-of-fame mt-0 pt-md-0 py-md-16 py-10">
    <div class="custom-container ">
      <h2 class="section--title text--primary text--semi">Canamprep Wall of Fame</h2>
      <div class="famebox-row">
        <div class="student-fame-box">
          <div class="border wallimg p-md-5 p-1 radius-10">
            <div class="student-wall-img">
              <div class="thumb-wall-img"> <img class="lazyload " data-src="{{ URL::to('/prep/assets/images/student/Sandeep.jpg') }}" alt="Sandeep Singh"> </div>
            </div>
            <div class="wall-decp">
              <h4>Sandeep Singh</h4>
              <p><img class="lazyload mr-2 " data-src="{{ URL::to('/prep/assets/images/student/ielts-logo2.svg') }}" alt="IELTS"> | 9 band</p>
            </div>
          </div>
        </div>
        <div class="student-fame-box">
          <div class="border rounded wallimg p-md-5 p-1 radius-10">
            <div class="student-wall-img">
              <div class="thumb-wall-img"> <img class="lazyload " data-src="{{ URL::to('/prep/assets/images/student/Yatik.jpg') }}" alt="Mock Test"> </div>
            </div>
            <div class="wall-decp">
              <h4>Yatik Mittal</h4>
              <p><img class="lazyload  mr-2" data-src="{{ URL::to('/prep/assets/images/student/ielts-logo2.svg') }}" alt="IELTS"> | 9 band</p>
            </div>
          </div>
        </div>
        <div class="student-fame-box">
          <div class="border rounded wallimg p-md-5 p-1 radius-10">
            <div class="student-wall-img">
              <div class="thumb-wall-img"> <img class="lazyload " data-src="{{ URL::to('/prep/assets/images/student/Vishal.jpg') }}" alt="Vishal"></div>
            </div>
            <div class="wall-decp">
              <h4>Vishal</h4>
              <p><img class="lazyload  mr-2" data-src="{{ URL::to('/prep/assets/images/student/ielts-logo2.svg') }}" alt="IELTS"> | 9 band</p>
            </div>
          </div>
        </div>
        <div class="student-fame-box">
          <div class="border rounded wallimg p-md-5 p-1 radius-10">
            <div class="student-wall-img">
              <div class="thumb-wall-img"> <img class="lazyload " data-src="{{ URL::to('/prep/assets/images/student/Robinpreet.jpg') }}" alt="Robinpreet"> </div>
            </div>
            <div class="wall-decp">
              <h4>Robinpreet</h4>
              <p><img class="lazyload  mr-2" data-src="{{ URL::to('/prep/assets/images/student/ielts-logo2.svg') }}" alt="IELTS"> | 8 band</p>
            </div>
          </div>
        </div>
        <div class="student-fame-box">
          <div class="border rounded wallimg p-md-5 p-1 radius-10">
            <div class="student-wall-img">
              <div class="thumb-wall-img"> <img class="lazyload " data-src="{{ URL::to('/prep/assets/images/student/Rajvansh.jpg') }}" alt="Rajvansh Singh"> </div>
            </div>
            <div class="wall-decp">
              <h4>Rajvansh Singh</h4>
              <p><img class="lazyload  mr-2" data-src="{{ URL::to('/prep/assets/images/student/ielts-logo2.svg') }}" alt="IELTS"> | 8 band</p>
            </div>
          </div>
        </div>
        <div class="student-fame-box ">
          <div class="border rounded wallimg p-md-5 p-1 radius-10">
            <div class="student-wall-img">
              <div class="thumb-wall-img"> <img class="lazyload " data-src="{{ URL::to('/prep/assets/images/student/Muskan.jpg') }}" alt="Muskan Thakur"></div>
            </div>
            <div class="wall-decp">
              <h4>Muskan Thakur</h4>
              <p><img class="lazyload  mr-2" data-src="{{ URL::to('/prep/assets/images/student/ielts-logo2.svg') }}" alt="IELTS"> | 8 band</p>
            </div>
          </div>
        </div>
        <div class="student-fame-box">
          <div class="border rounded wallimg p-md-5 p-1 radius-10">
            <div class="student-wall-img">
              <div class="thumb-wall-img"> <img class="lazyload " data-src="{{ URL::to('/prep/assets/images/student/Avantika.jpg') }}" alt="Avantika Sharma"> </div>
            </div>
            <div class="wall-decp">
              <h4>Avantika Sharma</h4>
              <p><img class="lazyload  mr-2" data-src="{{ URL::to('/prep/assets/images/student/ielts-logo2.svg') }}" alt="IELTS"> | 8 band</p>
            </div>
          </div>
        </div>
        <div class="student-fame-box">
          <div class="border rounded wallimg p-md-5 p-1 radius-10">
            <div class="student-wall-img">
              <div class="thumb-wall-img"> <img class="lazyload " data-src="{{ URL::to('/prep/assets/images/student/Ashneet.jpg') }}" alt="Ashneet Kaur"></div>
            </div>
            <div class="wall-decp">
              <h4>Ashneet Kaur</h4>
              <p><img class="lazyload  mr-2" data-src="{{ URL::to('/prep/assets/images/student/ielts-logo2.svg') }}" alt="IELTS"> | 8 band</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="wallfame py-md-16 py-10 pt-0">
    <div class="custom-container">
      <div class="online-box-tab cta cta--dark p-md-5 p-3 radius-10">
        <div class="row">
          <div class="col-md-6 titlebox">
            <h2 class="section--title text--semi text--white my-md-5 my-4">Book your free IELTS Class </h2>
            <p class="text--white mb-3">Let Canamprep Plus be the fuel to your igniting dream of studying or immigrate overseas🌎!</p>
            <p class="text--white mb-4"> Take the first step towards kick-starting your IELTS test prep today! </p>
            <div class="bx-btn mt-md-5">
              <button  class="arrow arrow--button arrow--button__white arrow--button__ border-0 me-3" data-toggle="modal" data-target="#requestModal" >Book Demo</button>
              <button   class="arrow arrow--button arrow--button__red arrow--button__"><span>Band Predictor Test</span></button>
            </div>
          </div>
          <div class="col-md-6 bk-img d-md-block d-none">
            <div class="donline"> <img class="lazyload" data-src="{{ URL::to('/prep/assets/images/3d-girl-laptop.webp') }}" alt="img"> </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  

@endsection
