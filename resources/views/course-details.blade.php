@extends('layout.testprep.main')

@section('main-container')
<body class="bg-white">
<x-testprep.navbar active="" />
<main class="course-detail"   >
<section class="section hero course-header  pt-md-8 pt-0">
<div class="custom-container">
<div class="row">
  <div class="col-lg-12 col-md-12">
    <ul class="breadcrumb cp-breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item active">Course Details</li>
    </ul>
  </div>
</div>
<div class="row">
  <div class="col-md-7 order-md-1 order2 ">
    <div class="web--lgs">
      <p class="section--tag text--light mb-2">IELTS Prep Plus <span class="bg-danger radius-50 text-white px-4 fs-14 ms-3">Live Coaching</span></p>
      <h2 class="section--title text--primary text--semi w-100 mb-5">10 DAYS - CRASH COURSE</h2>
      <p class="section--hero__desc text--light text--regular mb-4">Redefining the Language Test Prep Ecosystem</p>
    </div>
    <div class="live-class-title">
      <div class="cousrse-desp mt-4">
        <p>Expedited IELTS Learning to achieve your dream band score in under 10 days</p>
      </div>
      <div class="course-text mt-5">
        <ul>
          <li>Starts on every <span>Monday</span> </li>
          <li>Duration:<span>10 Days</span> </li>
          <li>Language: <span>Mostly English</span> </li>
        </ul>
      </div>
      <div class="cs-dd w-100 my-7 ">
        <ul class="course-tag">
          <!---->
          <li>
            <h3>10+</h3>
            <div class=" text--light fs-14 fs-sm-10">Live Classes</div>
          </li>
          <li>
            <h3>4 to 8 Hour</h3>
            <div  class=" text--light fs-14 fs-sm-10">Daily Batch</div>
          </li>
          <li>
            <h3>2 Full Length</h3>
            <div  class=" text--light fs-14 fs-sm-10">Mock - Test</div>
          </li>
          <li>
            <h3>Morning or Evening</h3>
            <div  class=" text--light fs-14 fs-sm-10">Batches Available</div>
          </li>
        </ul>
      </div>
      <div class="green-pass mb-4"> <img class="lazyload" data-src="/prep/assets/images/green-pass.svg" alt="Pass"> <span class="ms-3">One Canamprep Reality Test is included with this course ! </span> </div>
      <div class="celbe my-7 bg-light2 p-3 radius-10"> <img class="lazyload mx-3" data-src="/prep/assets/images/celebration.svg" alt="Winner">
        <div class="actit">
          <div class="acttitle fs-sm-16">Study Now Pay Later </div>
          <div class="actdescp text--light fs-14 fs-">Pay in 4 equal interest free Installments</div>
        </div>
      </div>
      <div class="price-cor mt-5 fs-30 font-weight-bold">Rs. 2500/- </div>
      <p class="text-danger tg-title mt-4">Limited Seats Remaining </p>
      <div class="bm-smd mt-4  " id="div-seatbook">
        <button class="arrow arrow--button arrow--button__black border-0 me-md-0 me-4" onclick="parent.location='#enrol-prep'">Confirm Seat</button>
        
        <!--</form>-->
        
        <p class="or-text  px-4 d-md-block d-none">Or</p>
        <button  class="arrow arrow--button arrow--button__red arrow--button__ border-danger"><span>Book a Free Class</span></button>
      </div>
    </div>
  </div>
  <div class="col-md-4 offset-md-1 order-md-2 order-1 course-v-content mt-md-0 mt-5">
    <div class="border radius-10 d-md-block d-none">
      <figure class="card--video__figure radius-15 overflow-hidden"> <img class="img-fluid lazyloaded" data-src="/prep/assets/images/video-thumb-2.webp" alt="IELTS Quiz the day: How to use
vocabulary?" src="/prep/assets/images/video-thumb-2.webp"> <img class="card--video__play" src="/prep/assets/images/play.svg" alt="play button"> </figure>
      <p class="text--light text--regular fs-14 p-3">This course has been tailored for advanced learners who are about to take an IELTS exam. The 10-days program will start every Monday with flexible batches. It is a crash course for proficient learners who would like to practice real tests along with feedback and guided session by an ex-IELTS-examiner.</p>
    </div>
    <div class=" overflow-hidden mt-6 mb-3 p-3 pt-5 " id="div-callme">
      <div class="call-box">
        <div class="call-boxicon"> <img src="/prep/assets/images/green-call-icon-button.svg" alt="Call Us"> </div>
        <div class="tb-info">
          <div class="cuntitle">Book A free Counselling Session</div>
          <div class="cunndesp">Leave us your number and we’ll call you.</div>
        </div>
      </div>
      <div class="counselling-detail ">
        <form id="counselling-form" novalidate="novalidate">
          <div id="message"> </div>
          <div class="assistance__input-holder" id="form-fields">
            <label class="assistance__input">
              <input type="tel" placeholder="Mobile No." name="mobile" class="ng-pristine ng-valid ng-touched">
              <input type="hidden" name="enquiry_type" value="counselling">
              <input type="hidden" name="action" value="enquiry">
            </label>
            <button class="btn btn-dark radius-50 px-6 py-md-2 py-3" id="call-me" translate="" type="submit">Call Me</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</section>
<section class="section getting curriculum">
  <div class="custom-container ">
    <div class="student--header ">
      <div class="head-text d-flex justify-content-between">
        <p class="section--tag text--light">Syllabus</p>
        <a href="#" class=" text-danger"> <i class='bx bx-download fs-18'></i> Download Course Curriculum</a> </div>
      <h2 class="section--title text--primary text--semi mb-5">Course Curriculum & Syllabus</h2>
    </div>
    <div class="row custom-pills mt-10">
      <div class="col-md-4 pill-tab-right">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical"> 
      
  
      
      <a class="nav-link active" id="v-pills-one-tab" data-toggle="pill" href="#v-pills-one" role="tab" aria-controls="v-pills-one" aria-selected="true">Introduction</a> 
        
        <a class="nav-link" id="v-pills-two-tab" data-toggle="pill" href="#v-pills-two" role="tab" aria-controls="v-pills-two" aria-selected="false">Listening</a>
        
        <a class="nav-link" id="v-pills-three-tab" data-toggle="pill" href="#v-pills-three" role="tab" aria-controls="v-pills-three" aria-selected="false">Reading</a> 
        
        <a class="nav-link" id="v-pills-four-tab" data-toggle="pill" href="#v-pills-four" role="tab" aria-controls="v-pills-four" aria-selected="false">Writing</a> 
        
        <a class="nav-link" id="v-pills-five-tab" data-toggle="pill" href="#v-pills-five" role="tab" aria-controls="v-pills-five" aria-selected="false">Speaking</a>
        
        <a class="nav-link" id="v-pills-six-tab" data-toggle="pill" href="#v-pills-six" role="tab" aria-controls="v-pills-six" aria-selected="false">Writing an Essay</a> 
        
        <a class="nav-link" id="v-pills-seven-tab" data-toggle="pill" href="#v-pills-seven" role="tab" aria-controls="v-pills-seven" aria-selected="false">Writing made Easy</a>
        
        
        <a class="nav-link" id="v-pills-eight-tab" data-toggle="pill" href="#v-pills-eight" role="tab" aria-controls="v-pills-eight" aria-selected="false">Focus on Grammar
          Specific to IELTS</a>
    </div>
      </div>
      <div class="col-md-7 offset-md-1">
        <div class="tab-content" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="v-pills-one" role="tabpanel" aria-labelledby="v-pills-one-tab">
            <div class="faq--accordion">
              <div class="faq--accordion__header text--regular font-weight-bold" id="intro" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Introduction </div>
              <div id="collapseOne" class="faq--accordion__answer collapse show" aria-labelledby="headingOne" data-parent="#faq-accordion">
                <div class="list-class mt-7">
                  <div class="vd-detail">
                    <div class="vd-icon"> <img class="lazyload" data-src="/prep/assets/images/play-icon.svg" alt="play"> </div>
                    <div class="vd-dscp">
                      <p>The four modules</p>
                    </div>
                  </div>
                  <div class="vd-detail">
                    <div class="vd-icon"> <img class="lazyload" data-src="/prep/assets/images/play-icon.svg" alt="play"> </div>
                    <div class="vd-dscp">
                      <p>Difference between GT and AT</p>
                    </div>
                  </div>
                  <div class="vd-detail">
                    <div class="vd-icon"> <img class="lazyload" data-src="/prep/assets/images/play-icon.svg" alt="play"> </div>
                    <div class="vd-dscp">
                      <p>Band criteria </p>
                    </div>
                  </div>
                  <div class="vd-detail">
                    <div class="vd-icon"> <img class="lazyload" data-src="/prep/assets/images/play-icon.svg" alt="play"> </div>
                    <div class="vd-dscp">
                      <p>IELTS success blueprint</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="v-pills-two" role="tabpanel" aria-labelledby="v-pills-two-tab">
            <div class="faq--accordion">
              <div class="faq--accordion__header text--regular font-weight-bold" id="intro" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Listening </div>
              <div id="collapseOne" class="faq--accordion__answer collapse show" aria-labelledby="headingOne" data-parent="#faq-accordion">
                <div class="list-class mt-7">
                  <div class="vd-detail">
                    <div class="vd-icon"> <img class="lazyload" data-src="/prep/assets/images/play-icon.svg" alt="play"> </div>
                    <div class="vd-dscp">
                      <p>The four modules</p>
                    </div>
                  </div>
                  <div class="vd-detail">
                    <div class="vd-icon"> <img class="lazyload" data-src="/prep/assets/images/play-icon.svg" alt="play"> </div>
                    <div class="vd-dscp">
                      <p>Difference between GT and AT</p>
                    </div>
                  </div>
                  <div class="vd-detail">
                    <div class="vd-icon"> <img class="lazyload" data-src="/prep/assets/images/play-icon.svg" alt="play"> </div>
                    <div class="vd-dscp">
                      <p>Band criteria </p>
                    </div>
                  </div>
                  <div class="vd-detail">
                    <div class="vd-icon"> <img class="lazyload" data-src="/prep/assets/images/play-icon.svg" alt="play"> </div>
                    <div class="vd-dscp">
                      <p>IELTS success blueprint</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section study section__black why-prep py-md-16 py-10 mb-0">
  <div class="custom-container">
    <p class="section--tag text--light">Why Choose</p>
    <h2 class="section--title text--white text--semi mb-10">IELTS Prep Plus </h2>
    <div class="row">
      <div class="col-lg-4 col-md-6 col-12 mb-4">
        <div class="why--card">
          <div class="why--card--header">
            <h3 class="text--white text--semi why--card--header__title"> Personalised Attention </h3>
            <div class="why--card--header__icon"><img src="/prep/assets/images/student-friendly.svg" alt=" student friendly environment"></div>
          </div>
          <p class="why--card--desc text--regular text--lighter">Small batches that ensure each students needs are met.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-12 mb-4">
        <div class="why--card">
          <div class="why--card--header">
            <h3 class="text--white text--semi why--card--header__title">Weekly Student-Teacher Meeting </h3>
            <div class="why--card--header__icon"><img src="/prep/assets/images/culture-diversity.svg" alt="culture-diversity"></div>
          </div>
          <p class="why--card--desc text--regular text--lighter">Tracking student progress and ensuring that each student achieves their desired band.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-12 mb-4">
        <div class="why--card">
          <div class="why--card--header">
            <h3 class="text--white text--semi why--card--header__title">Top 5% IELTS Trainers </h3>
            <div class="why--card--header__icon"><img src="/prep/assets/images/world-preowned.svg" alt="world renowned"></div>
          </div>
          <p class="why--card--desc text--regular text--lighter">Get a better shot at cracking IELTS with the best educators from across the globe.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-12 mb-4">
        <div class="why--card mb-lg-0">
          <div class="why--card--header">
            <h3 class="text--white text--semi why--card--header__title">Canamprep Promise </h3>
            <div class="why--card--header__icon"><img src="/prep/assets/images/affordable.svg" alt="affordable"></div>
          </div>
          <p class="why--card--desc text--regular text--lighter">Achieve 6 Band or enrol in another batch at no added cost (Only to be shown in 30 day and 60-day batch) </p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-12 mb-4">
        <div class="why--card mb-lg-0 mb-md-0">
          <div class="why--card--header">
            <h3 class="text--white text--semi why--card--header__title">Vocabulary Builder </h3>
            <div class="why--card--header__icon"><img src="/prep/assets/images/safe-peaceful.svg" alt="safe and peaceful"></div>
          </div>
          <p class="why--card--desc text--regular text--lighter">Topic specific vocabulary classes for all 4 modules</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-12 mb-4">
        <div class="why--card  mb-lg-0 mb-md-0 mb-0">
          <div class="why--card--header">
            <h3 class="text--white text--semi why--card--header__title"> Daily 1:1 Speaking Session </h3>
            <div class="why--card--header__icon"><img src="/prep/assets/images/immigration-opp.svg" alt="immigration opportunities"></div>
          </div>
          <p class="why--card--desc text--regular text--lighter">9 out of 10 learners get 7 band in Speaking </p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section explore py-md-16 py-10 mb-0">
  <div class="custom-container">
    <h2 class="section--title text--primary text--semi mb-10">Free Mock Tests</h2>
    <ul class="nav tabs" id="myTab" role="tablist">
      <li class="tabs--item"> <a class="tabs--link active" id="listening-tab" data-toggle="tab" href="#listening" role="tab" aria-controls="countries" aria-selected="true">Listening</a> </li>
      <li class="tabs--item"> <a class="tabs--link" id="reading-tab" data-toggle="tab" href="#reading" role="tab" aria-controls="discipline" aria-selected="false">Reading</a> </li>
      <li class="tabs--item"> <a class="tabs--link" id="writing-tab" data-toggle="tab" href="#writing" role="tab" aria-controls="discipline" aria-selected="false">Writing</a> </li>
      <li class="tabs--item"> <a class="tabs--link" id="speaking-tab" data-toggle="tab" href="#speaking" role="tab" aria-controls="discipline" aria-selected="false">Speaking</a> </li>
    </ul>
    <div class="tabs--content tab-content mt-12" id="myTabContent">
      <div class="tab-pane fade show active" id="listening" role="tabpanel" aria-labelledby="listening-tab">
        <div class="test-book-demo">
          <div class="detail-mock-box mt-5 px-0 radius-10 mb-5">
            <div class="row p-4">
              <div class="col-md-6"> <span class="bg-danger text-white px-4 w-15 radius-50 fs-14  fs-14 ">Free</span>
                <div class="mock-box-title mt-4">
                  <h3 class="text--semi text--dark me-4 mb-3 fs-sm-20">Official Cambridge Test 6</h3>
                  <p class="text--regular text--light ">12.1k Users</p>
                </div>
                <div class="cr-question">
                  <div class="qt-list"> <i class="bi bi-question-circle"></i> 40  Questions </div>
                  <div class="qt-list"> <i class="bi bi-graph-up"></i> 40 Marks </div>
                  <div class="qt-list"> <i class="bi bi-clock"></i> 30 mins </div>
                </div>
              </div>
              <div class="col-md-6 d-flex align-item-center justify-content-md-end justify-content-center mt-md-0 mt-4">
                <div class="lock-button">
                  <button  class="arrow arrow--button arrow--button__red arrow--button__ border-danger px-6 py-2"> <i class='bx bxs-lock-alt fs-15 me-3'></i> Unlock Now </button>
                </div>
              </div>
            </div>
          </div>
          <div class="detail-mock-box mt-5 px-0 radius-10 mb-5">
            <div class="row p-4">
              <div class="col-md-6"> <span class="bg-danger text-white px-4 w-15 radius-50 fs-14  fs-14">Free</span>
                <div class="mock-box-title mt-4">
                  <h3 class="text--semi text--dark me-4 mb-3 fs-sm-20">Predicting the answer </h3>
                  <p class="text--regular text--light ">12.1k Users</p>
                </div>
                <div class="cr-question">
                  <div class="qt-list"> <i class="bi bi-question-circle"></i> 40  Questions </div>
                  <div class="qt-list"> <i class="bi bi-graph-up"></i> 40 Marks </div>
                  <div class="qt-list"> <i class="bi bi-clock"></i> 30 mins </div>
                </div>
              </div>
              <div class="col-md-6 d-flex align-item-center justify-content-md-end justify-content-center mt-md-0 mt-4">
                <div class="lock-button">
                  <button  class="arrow arrow--button arrow--button__red arrow--button__ border-danger px-6 py-2"> <i class='bx bxs-lock-alt fs-15 me-3'></i> Unlock Now </button>
                </div>
              </div>
            </div>
          </div>
          <div class="detail-mock-box mt-5 px-0 radius-10 mb-5">
            <div class="row p-4">
              <div class="col-md-6"> <span class="bg-danger text-white px-4 w-15 radius-50 fs-14  fs-14  ">Free</span>
                <div class="mock-box-title mt-4">
                  <h3 class="text--semi text--dark me-4 mb-3 fs-sm-20">Describe a place</h3>
                  <p class="text--regular text--light ">12.1k Users</p>
                </div>
                <div class="cr-question">
                  <div class="qt-list"> <i class="bi bi-question-circle"></i> 40  Questions </div>
                  <div class="qt-list"> <i class="bi bi-graph-up"></i> 40 Marks </div>
                  <div class="qt-list"> <i class="bi bi-clock"></i> 30 mins </div>
                </div>
              </div>
              <div class="col-md-6 d-flex align-item-center justify-content-md-end justify-content-center mt-md-0 mt-4">
                <div class="lock-button">
                  <button  class="arrow arrow--button arrow--button__red arrow--button__ border-danger px-6 py-2"> <i class='bx bxs-lock-alt fs-15 me-3'></i> Unlock Now </button>
                </div>
              </div>
            </div>
          </div>
          <div class="detail-mock-box mt-5 px-0 radius-10 mb-5">
            <div class="row p-4">
              <div class="col-md-6"> <span class="bg-danger text-white px-4 w-15 radius-50 fs-14  fs-14  ">Free</span>
                <div class="mock-box-title mt-4">
                  <h3 class="text--semi text--dark me-4 mb-3 fs-sm-20">Selecting from a list</h3>
                  <p class="text--regular text--light ">12.1k Users</p>
                </div>
                <div class="cr-question">
                  <div class="qt-list"> <i class="bi bi-question-circle"></i> 40  Questions </div>
                  <div class="qt-list"> <i class="bi bi-graph-up"></i> 40 Marks </div>
                  <div class="qt-list"> <i class="bi bi-clock"></i> 30 mins </div>
                </div>
              </div>
              <div class="col-md-6 d-flex align-item-center justify-content-md-end justify-content-center mt-md-0 mt-4">
                <div class="lock-button">
                  <button  class="arrow arrow--button arrow--button__red arrow--button__ border-danger px-6 py-2"> <i class='bx bxs-lock-alt fs-15 me-3'></i> Unlock Now </button>
                </div>
              </div>
            </div>
          </div>
          <div class="detail-mock-box mt-5 px-0 radius-10 mb-5">
            <div class="row p-4">
              <div class="col-md-6"> <span class="bg-danger text-white px-4 w-15 radius-50 fs-14  fs-14  ">Free</span>
                <div class="mock-box-title mt-4">
                  <h3 class="text--semi text--dark me-4 mb-3 fs-sm-20">Recognising paraphrase</h3>
                  <p class="text--regular text--light ">12.1k Users</p>
                </div>
                <div class="cr-question">
                  <div class="qt-list"> <i class="bi bi-question-circle"></i> 40  Questions </div>
                  <div class="qt-list"> <i class="bi bi-graph-up"></i> 40 Marks </div>
                  <div class="qt-list"> <i class="bi bi-clock"></i> 30 mins </div>
                </div>
              </div>
              <div class="col-md-6 d-flex align-item-center justify-content-md-end justify-content-center mt-md-0 mt-4">
                <div class="lock-button">
                  <button  class="arrow arrow--button arrow--button__red arrow--button__ border-danger px-6 py-2"> <i class='bx bxs-lock-alt fs-15 me-3'></i> Unlock Now </button>
                </div>
              </div>
            </div>
          </div>
          <div class="detail-mock-box mt-5 px-0 radius-10 mb-5">
            <div class="row p-4">
              <div class="col-md-6"> <span class="bg-danger text-white px-4 w-15 radius-50 fs-14  fs-14  ">Free</span>
                <div class="mock-box-title mt-4">
                  <h3 class="text--semi text--dark me-4 mb-3 fs-sm-20">Describe a place</h3>
                  <p class="text--regular text--light ">12.1k Users</p>
                </div>
                <div class="cr-question">
                  <div class="qt-list"> <i class="bi bi-question-circle"></i> 40 Questions </div>
                  <div class="qt-list"> <i class="bi bi-graph-up"></i> 40 Marks </div>
                  <div class="qt-list"> <i class="bi bi-clock"></i> 30 mins </div>
                </div>
              </div>
              <div class="col-md-6 d-flex align-item-center justify-content-md-end justify-content-center mt-md-0 mt-4">
                <div class="lock-button">
                  <button  class="arrow arrow--button arrow--button__red arrow--button__ border-danger px-6 py-2"> <i class='bx bxs-lock-alt fs-15 me-3'></i> Unlock Now </button>
                </div>
              </div>
            </div>
          </div>
          <div class="detail-mock-box mt-5 px-0 radius-10 mb-5">
            <div class="row p-4">
              <div class="col-md-6"> <span class="bg-danger text-white px-4 w-15 radius-50 fs-14  fs-14  ">Free</span>
                <div class="mock-box-title mt-4">
                  <h3 class="text--semi text--dark me-4 mb-3 fs-sm-20">Identifying main ideas</h3>
                  <p class="text--regular text--light ">12.1k Users</p>
                </div>
                <div class="cr-question">
                  <div class="qt-list"> <i class="bi bi-question-circle"></i> 40 Questions </div>
                  <div class="qt-list"> <i class="bi bi-graph-up"></i> 40 Marks </div>
                  <div class="qt-list"> <i class="bi bi-clock"></i> 30 mins </div>
                </div>
              </div>
              <div class="col-md-6 d-flex align-item-center justify-content-md-end justify-content-center mt-md-0 mt-4">
                <div class="lock-button">
                  <button  class="arrow arrow--button arrow--button__red arrow--button__ border-danger px-6 py-2"> <i class='bx bxs-lock-alt fs-15 me-3'></i> Unlock Now </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="reading" role="tabpanel" aria-labelledby="reading-tab">
        <div class="test-book-demo">
          <div class="detail-mock-box mt-5 px-0 radius-10 mb-5">
            <div class="row p-4">
              <div class="col-md-6"> <span class="bg-danger text-white px-4 w-15 radius-50 fs-14  fs-14  ">Free</span>
                <div class="mock-box-title mt-4">
                  <h3 class="text--semi text--dark me-4 mb-3 fs-sm-20">Official Cambridge Test 6</h3>
                  <p class="text--regular text--light ">12.1k Users</p>
                </div>
                <div class="cr-question">
                  <div class="qt-list"> <i class="bi bi-question-circle"></i> 40  Questions </div>
                  <div class="qt-list"> <i class="bi bi-graph-up"></i> 40 Marks </div>
                  <div class="qt-list"> <i class="bi bi-clock"></i> 30 mins </div>
                </div>
              </div>
              <div class="col-md-6 d-flex align-item-center justify-content-md-end justify-content-center mt-md-0 mt-4">
                <div class="lock-button">
                  <button  class="arrow arrow--button arrow--button__red arrow--button__ border-danger px-6 py-2"> <i class='bx bxs-lock-alt fs-15 me-3'></i> Unlock Now </button>
                </div>
              </div>
            </div>
          </div>
          <div class="detail-mock-box mt-5 px-0 radius-10 mb-5">
            <div class="row p-4">
              <div class="col-md-6"> <span class="bg-danger text-white px-4 w-15 radius-50 fs-14  fs-14  ">Free</span>
                <div class="mock-box-title mt-4">
                  <h3 class="text--semi text--dark me-4 mb-3 fs-sm-20">Predicting the answer </h3>
                  <p class="text--regular text--light ">12.1k Users</p>
                </div>
                <div class="cr-question">
                  <div class="qt-list"> <i class="bi bi-question-circle"></i> 40  Questions </div>
                  <div class="qt-list"> <i class="bi bi-graph-up"></i> 40 Marks </div>
                  <div class="qt-list"> <i class="bi bi-clock"></i> 30 mins </div>
                </div>
              </div>
              <div class="col-md-6 d-flex align-item-center justify-content-md-end justify-content-center mt-md-0 mt-4">
                <div class="lock-button">
                  <button  class="arrow arrow--button arrow--button__red arrow--button__ border-danger px-6 py-2"> <i class='bx bxs-lock-alt fs-15 me-3'></i> Unlock Now </button>
                </div>
              </div>
            </div>
          </div>
          <div class="detail-mock-box mt-5 px-0 radius-10 mb-5">
            <div class="row p-4">
              <div class="col-md-6"> <span class="bg-danger text-white px-4 w-15 radius-50 fs-14  fs-14  ">Free</span>
                <div class="mock-box-title mt-4">
                  <h3 class="text--semi text--dark me-4 mb-3 fs-sm-20">Describe a place</h3>
                  <p class="text--regular text--light ">12.1k Users</p>
                </div>
                <div class="cr-question">
                  <div class="qt-list"> <i class="bi bi-question-circle"></i> 40  Questions </div>
                  <div class="qt-list"> <i class="bi bi-graph-up"></i> 40 Marks </div>
                  <div class="qt-list"> <i class="bi bi-clock"></i> 30 mins </div>
                </div>
              </div>
              <div class="col-md-6 d-flex align-item-center justify-content-md-end justify-content-center mt-md-0 mt-4">
                <div class="lock-button">
                  <button  class="arrow arrow--button arrow--button__red arrow--button__ border-danger px-6 py-2"> <i class='bx bxs-lock-alt fs-15 me-3'></i> Unlock Now </button>
                </div>
              </div>
            </div>
          </div>
          <div class="detail-mock-box mt-5 px-0 radius-10 mb-5">
            <div class="row p-4">
              <div class="col-md-6"> <span class="bg-danger text-white px-4 w-15 radius-50 fs-14  fs-14  ">Free</span>
                <div class="mock-box-title mt-4">
                  <h3 class="text--semi text--dark me-4 mb-3 fs-sm-20">Selecting from a list</h3>
                  <p class="text--regular text--light ">12.1k Users</p>
                </div>
                <div class="cr-question">
                  <div class="qt-list"> <i class="bi bi-question-circle"></i> 40  Questions </div>
                  <div class="qt-list"> <i class="bi bi-graph-up"></i> 40 Marks </div>
                  <div class="qt-list"> <i class="bi bi-clock"></i> 30 mins </div>
                </div>
              </div>
              <div class="col-md-6 d-flex align-item-center justify-content-md-end justify-content-center mt-md-0 mt-4">
                <div class="lock-button">
                  <button  class="arrow arrow--button arrow--button__red arrow--button__ border-danger px-6 py-2"> <i class='bx bxs-lock-alt fs-15 me-3'></i> Unlock Now </button>
                </div>
              </div>
            </div>
          </div>
          <div class="detail-mock-box mt-5 px-0 radius-10 mb-5">
            <div class="row p-4">
              <div class="col-md-6"> <span class="bg-danger text-white px-4 w-15 radius-50 fs-14  fs-14  ">Free</span>
                <div class="mock-box-title mt-4">
                  <h3 class="text--semi text--dark me-4 mb-3 fs-sm-20">Recognising paraphrase</h3>
                  <p class="text--regular text--light ">12.1k Users</p>
                </div>
                <div class="cr-question">
                  <div class="qt-list"> <i class="bi bi-question-circle"></i> 40  Questions </div>
                  <div class="qt-list"> <i class="bi bi-graph-up"></i> 40 Marks </div>
                  <div class="qt-list"> <i class="bi bi-clock"></i> 30 mins </div>
                </div>
              </div>
              <div class="col-md-6 d-flex align-item-center justify-content-md-end justify-content-center mt-md-0 mt-4">
                <div class="lock-button">
                  <button  class="arrow arrow--button arrow--button__red arrow--button__ border-danger px-6 py-2"> <i class='bx bxs-lock-alt fs-15 me-3'></i> Unlock Now </button>
                </div>
              </div>
            </div>
          </div>
          <div class="detail-mock-box mt-5 px-0 radius-10 mb-5">
            <div class="row p-4">
              <div class="col-md-6"> <span class="bg-danger text-white px-4 w-15 radius-50 fs-14  fs-14  ">Free</span>
                <div class="mock-box-title mt-4">
                  <h3 class="text--semi text--dark me-4 mb-3 fs-sm-20">Describe a place</h3>
                  <p class="text--regular text--light ">12.1k Users</p>
                </div>
                <div class="cr-question">
                  <div class="qt-list"> <i class="bi bi-question-circle"></i> 40 Questions </div>
                  <div class="qt-list"> <i class="bi bi-graph-up"></i> 40 Marks </div>
                  <div class="qt-list"> <i class="bi bi-clock"></i> 30 mins </div>
                </div>
              </div>
              <div class="col-md-6 d-flex align-item-center justify-content-md-end justify-content-center mt-md-0 mt-4">
                <div class="lock-button">
                  <button  class="arrow arrow--button arrow--button__red arrow--button__ border-danger px-6 py-2"> <i class='bx bxs-lock-alt fs-15 me-3'></i> Unlock Now </button>
                </div>
              </div>
            </div>
          </div>
          <div class="detail-mock-box mt-5 px-0 radius-10 mb-5">
            <div class="row p-4">
              <div class="col-md-6"> <span class="bg-danger text-white px-4 w-15 radius-50 fs-14  fs-14  ">Free</span>
                <div class="mock-box-title mt-4">
                  <h3 class="text--semi text--dark me-4 mb-3 fs-sm-20">Identifying main ideas</h3>
                  <p class="text--regular text--light ">12.1k Users</p>
                </div>
                <div class="cr-question">
                  <div class="qt-list"> <i class="bi bi-question-circle"></i> 40 Questions </div>
                  <div class="qt-list"> <i class="bi bi-graph-up"></i> 40 Marks </div>
                  <div class="qt-list"> <i class="bi bi-clock"></i> 30 mins </div>
                </div>
              </div>
              <div class="col-md-6 d-flex align-item-center justify-content-md-end justify-content-center mt-md-0 mt-4">
                <div class="lock-button">
                  <button  class="arrow arrow--button arrow--button__red arrow--button__ border-danger px-6 py-2"> <i class='bx bxs-lock-alt fs-15 me-3'></i> Unlock Now </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="writing" role="tabpanel" aria-labelledby="witing-tab">
        <div class="test-book-demo">
          <div class="detail-mock-box mt-5 px-0 radius-10 mb-5">
            <div class="row p-4">
              <div class="col-md-6"> <span class="bg-danger text-white px-4 w-15 radius-50 fs-14  fs-14  ">Free</span>
                <div class="mock-box-title mt-4">
                  <h3 class="text--semi text--dark me-4 mb-3 fs-sm-20">Official Cambridge Test 6</h3>
                  <p class="text--regular text--light ">12.1k Users</p>
                </div>
                <div class="cr-question">
                  <div class="qt-list"> <i class="bi bi-question-circle"></i> 40  Questions </div>
                  <div class="qt-list"> <i class="bi bi-graph-up"></i> 40 Marks </div>
                  <div class="qt-list"> <i class="bi bi-clock"></i> 30 mins </div>
                </div>
              </div>
              <div class="col-md-6 d-flex align-item-center justify-content-md-end justify-content-center mt-md-0 mt-4">
                <div class="lock-button">
                  <button  class="arrow arrow--button arrow--button__red arrow--button__ border-danger px-6 py-2"> <i class='bx bxs-lock-alt fs-15 me-3'></i> Unlock Now </button>
                </div>
              </div>
            </div>
          </div>
          <div class="detail-mock-box mt-5 px-0 radius-10 mb-5">
            <div class="row p-4">
              <div class="col-md-6"> <span class="bg-danger text-white px-4 w-15 radius-50 fs-14  fs-14  ">Free</span>
                <div class="mock-box-title mt-4">
                  <h3 class="text--semi text--dark me-4 mb-3 fs-sm-20">Predicting the answer </h3>
                  <p class="text--regular text--light ">12.1k Users</p>
                </div>
                <div class="cr-question">
                  <div class="qt-list"> <i class="bi bi-question-circle"></i> 40  Questions </div>
                  <div class="qt-list"> <i class="bi bi-graph-up"></i> 40 Marks </div>
                  <div class="qt-list"> <i class="bi bi-clock"></i> 30 mins </div>
                </div>
              </div>
              <div class="col-md-6 d-flex align-item-center justify-content-md-end justify-content-center mt-md-0 mt-4">
                <div class="lock-button">
                  <button  class="arrow arrow--button arrow--button__red arrow--button__ border-danger px-6 py-2"> <i class='bx bxs-lock-alt fs-15 me-3'></i> Unlock Now </button>
                </div>
              </div>
            </div>
          </div>
          <div class="detail-mock-box mt-5 px-0 radius-10 mb-5">
            <div class="row p-4">
              <div class="col-md-6"> <span class="bg-danger text-white px-4 w-15 radius-50 fs-14  fs-14  ">Free</span>
                <div class="mock-box-title mt-4">
                  <h3 class="text--semi text--dark me-4 mb-3 fs-sm-20">Describe a place</h3>
                  <p class="text--regular text--light ">12.1k Users</p>
                </div>
                <div class="cr-question">
                  <div class="qt-list"> <i class="bi bi-question-circle"></i> 40  Questions </div>
                  <div class="qt-list"> <i class="bi bi-graph-up"></i> 40 Marks </div>
                  <div class="qt-list"> <i class="bi bi-clock"></i> 30 mins </div>
                </div>
              </div>
              <div class="col-md-6 d-flex align-item-center justify-content-md-end justify-content-center mt-md-0 mt-4">
                <div class="lock-button">
                  <button  class="arrow arrow--button arrow--button__red arrow--button__ border-danger px-6 py-2"> <i class='bx bxs-lock-alt fs-15 me-3'></i> Unlock Now </button>
                </div>
              </div>
            </div>
          </div>
          <div class="detail-mock-box mt-5 px-0 radius-10 mb-5">
            <div class="row p-4">
              <div class="col-md-6"> <span class="bg-danger text-white px-4 w-15 radius-50 fs-14  fs-14  ">Free</span>
                <div class="mock-box-title mt-4">
                  <h3 class="text--semi text--dark me-4 mb-3 fs-sm-20">Selecting from a list</h3>
                  <p class="text--regular text--light ">12.1k Users</p>
                </div>
                <div class="cr-question">
                  <div class="qt-list"> <i class="bi bi-question-circle"></i> 40  Questions </div>
                  <div class="qt-list"> <i class="bi bi-graph-up"></i> 40 Marks </div>
                  <div class="qt-list"> <i class="bi bi-clock"></i> 30 mins </div>
                </div>
              </div>
              <div class="col-md-6 d-flex align-item-center justify-content-md-end justify-content-center mt-md-0 mt-4">
                <div class="lock-button">
                  <button  class="arrow arrow--button arrow--button__red arrow--button__ border-danger px-6 py-2"> <i class='bx bxs-lock-alt fs-15 me-3'></i> Unlock Now </button>
                </div>
              </div>
            </div>
          </div>
          <div class="detail-mock-box mt-5 px-0 radius-10 mb-5">
            <div class="row p-4">
              <div class="col-md-6"> <span class="bg-danger text-white px-4 w-15 radius-50 fs-14  fs-14  ">Free</span>
                <div class="mock-box-title mt-4">
                  <h3 class="text--semi text--dark me-4 mb-3 fs-sm-20">Recognising paraphrase</h3>
                  <p class="text--regular text--light ">12.1k Users</p>
                </div>
                <div class="cr-question">
                  <div class="qt-list"> <i class="bi bi-question-circle"></i> 40  Questions </div>
                  <div class="qt-list"> <i class="bi bi-graph-up"></i> 40 Marks </div>
                  <div class="qt-list"> <i class="bi bi-clock"></i> 30 mins </div>
                </div>
              </div>
              <div class="col-md-6 d-flex align-item-center justify-content-md-end justify-content-center mt-md-0 mt-4">
                <div class="lock-button">
                  <button  class="arrow arrow--button arrow--button__red arrow--button__ border-danger px-6 py-2"> <i class='bx bxs-lock-alt fs-15 me-3'></i> Unlock Now </button>
                </div>
              </div>
            </div>
          </div>
          <div class="detail-mock-box mt-5 px-0 radius-10 mb-5">
            <div class="row p-4">
              <div class="col-md-6"> <span class="bg-danger text-white px-4 w-15 radius-50 fs-14  fs-14  ">Free</span>
                <div class="mock-box-title mt-4">
                  <h3 class="text--semi text--dark me-4 mb-3 fs-sm-20">Describe a place</h3>
                  <p class="text--regular text--light ">12.1k Users</p>
                </div>
                <div class="cr-question">
                  <div class="qt-list"> <i class="bi bi-question-circle"></i> 40 Questions </div>
                  <div class="qt-list"> <i class="bi bi-graph-up"></i> 40 Marks </div>
                  <div class="qt-list"> <i class="bi bi-clock"></i> 30 mins </div>
                </div>
              </div>
              <div class="col-md-6 d-flex align-item-center justify-content-md-end justify-content-center mt-md-0 mt-4">
                <div class="lock-button">
                  <button  class="arrow arrow--button arrow--button__red arrow--button__ border-danger px-6 py-2"> <i class='bx bxs-lock-alt fs-15 me-3'></i> Unlock Now </button>
                </div>
              </div>
            </div>
          </div>
          <div class="detail-mock-box mt-5 px-0 radius-10 mb-5">
            <div class="row p-4">
              <div class="col-md-6"> <span class="bg-danger text-white px-4 w-15 radius-50 fs-14  fs-14  ">Free</span>
                <div class="mock-box-title mt-4">
                  <h3 class="text--semi text--dark me-4 mb-3 fs-sm-20">Identifying main ideas</h3>
                  <p class="text--regular text--light ">12.1k Users</p>
                </div>
                <div class="cr-question">
                  <div class="qt-list"> <i class="bi bi-question-circle"></i> 40 Questions </div>
                  <div class="qt-list"> <i class="bi bi-graph-up"></i> 40 Marks </div>
                  <div class="qt-list"> <i class="bi bi-clock"></i> 30 mins </div>
                </div>
              </div>
              <div class="col-md-6 d-flex align-item-center justify-content-md-end justify-content-center mt-md-0 mt-4">
                <div class="lock-button">
                  <button  class="arrow arrow--button arrow--button__red arrow--button__ border-danger px-6 py-2"> <i class='bx bxs-lock-alt fs-15 me-3'></i> Unlock Now </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="speaking" role="tabpanel" aria-labelledby="speaking-tab">
        <div class="test-book-demo">
          <div class="detail-mock-box mt-5 px-0 radius-10 mb-5">
            <div class="row p-4">
              <div class="col-md-6"> <span class="bg-danger text-white px-4 w-15 radius-50 fs-14  fs-14  ">Free</span>
                <div class="mock-box-title mt-4">
                  <h3 class="text--semi text--dark me-4 mb-3 fs-sm-20">Official Cambridge Test 6</h3>
                  <p class="text--regular text--light ">12.1k Users</p>
                </div>
                <div class="cr-question">
                  <div class="qt-list"> <i class="bi bi-question-circle"></i> 40  Questions </div>
                  <div class="qt-list"> <i class="bi bi-graph-up"></i> 40 Marks </div>
                  <div class="qt-list"> <i class="bi bi-clock"></i> 30 mins </div>
                </div>
              </div>
              <div class="col-md-6 d-flex align-item-center justify-content-md-end justify-content-center mt-md-0 mt-4">
                <div class="lock-button">
                  <button  class="arrow arrow--button arrow--button__red arrow--button__ border-danger px-6 py-2"> <i class='bx bxs-lock-alt fs-15 me-3'></i> Unlock Now </button>
                </div>
              </div>
            </div>
          </div>
          <div class="detail-mock-box mt-5 px-0 radius-10 mb-5">
            <div class="row p-4">
              <div class="col-md-6"> <span class="bg-danger text-white px-4 w-15 radius-50 fs-14  fs-14  ">Free</span>
                <div class="mock-box-title mt-4">
                  <h3 class="text--semi text--dark me-4 mb-3 fs-sm-20">Predicting the answer </h3>
                  <p class="text--regular text--light ">12.1k Users</p>
                </div>
                <div class="cr-question">
                  <div class="qt-list"> <i class="bi bi-question-circle"></i> 40  Questions </div>
                  <div class="qt-list"> <i class="bi bi-graph-up"></i> 40 Marks </div>
                  <div class="qt-list"> <i class="bi bi-clock"></i> 30 mins </div>
                </div>
              </div>
              <div class="col-md-6 d-flex align-item-center justify-content-md-end justify-content-center mt-md-0 mt-4">
                <div class="lock-button">
                  <button  class="arrow arrow--button arrow--button__red arrow--button__ border-danger px-6 py-2"> <i class='bx bxs-lock-alt fs-15 me-3'></i> Unlock Now </button>
                </div>
              </div>
            </div>
          </div>
          <div class="detail-mock-box mt-5 px-0 radius-10 mb-5">
            <div class="row p-4">
              <div class="col-md-6"> <span class="bg-danger text-white px-4 w-15 radius-50 fs-14  fs-14  ">Free</span>
                <div class="mock-box-title mt-4">
                  <h3 class="text--semi text--dark me-4 mb-3 fs-sm-20">Describe a place</h3>
                  <p class="text--regular text--light ">12.1k Users</p>
                </div>
                <div class="cr-question">
                  <div class="qt-list"> <i class="bi bi-question-circle"></i> 40  Questions </div>
                  <div class="qt-list"> <i class="bi bi-graph-up"></i> 40 Marks </div>
                  <div class="qt-list"> <i class="bi bi-clock"></i> 30 mins </div>
                </div>
              </div>
              <div class="col-md-6 d-flex align-item-center justify-content-md-end justify-content-center mt-md-0 mt-4">
                <div class="lock-button">
                  <button  class="arrow arrow--button arrow--button__red arrow--button__ border-danger px-6 py-2"> <i class='bx bxs-lock-alt fs-15 me-3'></i> Unlock Now </button>
                </div>
              </div>
            </div>
          </div>
          <div class="detail-mock-box mt-5 px-0 radius-10 mb-5">
            <div class="row p-4">
              <div class="col-md-6"> <span class="bg-danger text-white px-4 w-15 radius-50 fs-14  fs-14  ">Free</span>
                <div class="mock-box-title mt-4">
                  <h3 class="text--semi text--dark me-4 mb-3 fs-sm-20">Selecting from a list</h3>
                  <p class="text--regular text--light ">12.1k Users</p>
                </div>
                <div class="cr-question">
                  <div class="qt-list"> <i class="bi bi-question-circle"></i> 40  Questions </div>
                  <div class="qt-list"> <i class="bi bi-graph-up"></i> 40 Marks </div>
                  <div class="qt-list"> <i class="bi bi-clock"></i> 30 mins </div>
                </div>
              </div>
              <div class="col-md-6 d-flex align-item-center justify-content-md-end justify-content-center mt-md-0 mt-4">
                <div class="lock-button">
                  <button  class="arrow arrow--button arrow--button__red arrow--button__ border-danger px-6 py-2"> <i class='bx bxs-lock-alt fs-15 me-3'></i> Unlock Now </button>
                </div>
              </div>
            </div>
          </div>
          <div class="detail-mock-box mt-5 px-0 radius-10 mb-5">
            <div class="row p-4">
              <div class="col-md-6"> <span class="bg-danger text-white px-4 w-15 radius-50 fs-14  fs-14  ">Free</span>
                <div class="mock-box-title mt-4">
                  <h3 class="text--semi text--dark me-4 mb-3 fs-sm-20">Recognising paraphrase</h3>
                  <p class="text--regular text--light ">12.1k Users</p>
                </div>
                <div class="cr-question">
                  <div class="qt-list"> <i class="bi bi-question-circle"></i> 40  Questions </div>
                  <div class="qt-list"> <i class="bi bi-graph-up"></i> 40 Marks </div>
                  <div class="qt-list"> <i class="bi bi-clock"></i> 30 mins </div>
                </div>
              </div>
              <div class="col-md-6 d-flex align-item-center justify-content-md-end justify-content-center mt-md-0 mt-4">
                <div class="lock-button">
                  <button  class="arrow arrow--button arrow--button__red arrow--button__ border-danger px-6 py-2"> <i class='bx bxs-lock-alt fs-15 me-3'></i> Unlock Now </button>
                </div>
              </div>
            </div>
          </div>
          <div class="detail-mock-box mt-5 px-0 radius-10 mb-5">
            <div class="row p-4">
              <div class="col-md-6"> <span class="bg-danger text-white px-4 w-15 radius-50 fs-14  ">Free</span>
                <div class="mock-box-title mt-4">
                  <h3 class="text--semi text--dark me-4 mb-3 fs-sm-20">Describe a place</h3>
                  <p class="text--regular text--light ">12.1k Users</p>
                </div>
                <div class="cr-question">
                  <div class="qt-list"> <i class="bi bi-question-circle"></i> 40 Questions </div>
                  <div class="qt-list"> <i class="bi bi-graph-up"></i> 40 Marks </div>
                  <div class="qt-list"> <i class="bi bi-clock"></i> 30 mins </div>
                </div>
              </div>
              <div class="col-md-6 d-flex align-item-center justify-content-md-end justify-content-center mt-md-0 mt-4">
                <div class="lock-button">
                  <button  class="arrow arrow--button arrow--button__red arrow--button__ border-danger px-6 py-2"> <i class='bx bxs-lock-alt fs-15 me-3'></i> Unlock Now </button>
                </div>
              </div>
            </div>
          </div>
          <div class="detail-mock-box mt-5 px-0 radius-10 mb-5">
            <div class="row p-4">
              <div class="col-md-6"> <span class="bg-danger text-white px-4 w-15 radius-50 fs-14  ">Free</span>
                <div class="mock-box-title mt-4">
                  <h3 class="text--semi text--dark me-4 mb-3 fs-sm-20">Identifying main ideas</h3>
                  <p class="text--regular text--light ">12.1k Users</p>
                </div>
                <div class="cr-question">
                  <div class="qt-list"> <i class="bi bi-question-circle"></i> 40 Questions </div>
                  <div class="qt-list"> <i class="bi bi-graph-up"></i> 40 Marks </div>
                  <div class="qt-list"> <i class="bi bi-clock"></i> 30 mins </div>
                </div>
              </div>
              <div class="col-md-6 d-flex align-item-center justify-content-md-end justify-content-center mt-md-0 mt-4">
                <div class="lock-button">
                  <button  class="arrow arrow--button arrow--button__red arrow--button__ border-danger px-6 py-2"> <i class='bx bxs-lock-alt fs-15 me-3'></i> Unlock Now </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
