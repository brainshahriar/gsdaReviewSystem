@extends('frontend.layouts.master')


@section('content')



<!-- Content -->

<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="page-banner ovbl-dark" style="background-image:url({{ asset('images/banner/banner2.jpg')}});">
        <div class="container">
            <div class="page-banner-entry">
              <br/>
              <br/>
              
     </div>
        </div>
    </div>
<!-- Breadcrumb row -->
<div class="breadcrumb-row">
  <div class="container">
    <ul class="list-inline">
      <li><a href="{{route('home')}}">Home</a></li>
      <li>Courses Details</li>
      <li>{{$classroom_course->classroom_course_title}}</li>
    </ul>
  </div>
</div>
<br>
<br>
<div class="container">


@if(Session::has('booking_added'))
<div class="alert alert-success" role="alert">

  <div class="alert-body">
    {{Session::get('booking_added')}}
  </div>
</div>


@endif
</div>
<!-- Breadcrumb row END -->
    <!-- inner page banner END -->
<div class="content-block">
        <!-- About Us -->
  <div class="section-area section-sp1">
            <div class="container">
       <div class="row d-flex flex-row-reverse">
        <div class="col-lg-3 col-md-4 col-sm-12 m-b30">
          <div class="course-detail-bx">
            <div class="course-price">
              <del>{{$classroom_course->training_fee}}৳</del>
              <h4 class="price" style="color:#ca2128;">{{$classroom_course->exam_fee}}৳</h4>
            </div>
            <div class="course-buy-now text-center">
              <form class="hidden" action="{{route('store-bookings')}}" method="post">
                @csrf
                <input type="hidden" name="classroom_course_id" value="{{$classroom_course->id}}">
                <input type="hidden" name="course_category_id" value="{{$classroom_course->course_category->id}}">

                <button  class="btn">Booking Now This Course</button>
              </form>

            </div>
            <div class="teacher-bx">
            <!--  <div class="teacher-info">
                <div class="teacher-thumb">
                  <img src="{{asset('images/testimonials/pic1.jpg')}}" alt=""/>
                </div>
                <div class="teacher-name">
                  <h5>{{$classroom_course_details->classroom_instructor_id}}</h5>
                  <span></span>
                </div>
              </div>-->
            </div>
            <div class="cours-more-info">
              <div class="review">
                <span>5 Review</span>
                <ul class="cours-star">
                  <li class="active"><i class="fa fa-star"></i></li>
                  <li class="active"><i class="fa fa-star"></i></li>
                  <li class="active"><i class="fa fa-star"></i></li>
                  <li class="active"><i class="fa fa-star"></i></li>
                  <li class="active"><i class="fa fa-star"></i></li>

                </ul>
              </div>
              <div class="price categories">
                <span>Categories</span>
                <h5 class="text-primary">{{$classroom_course->course_category->mcategory_title}}</h5>
              </div>
            </div>
            <div class="course-info-list scroll-page">
              <ul class="navbar">
                <li><a class="nav-link" href="#overview"><i class="ti-zip"></i>Course Description</a></li>
                <li><a class="nav-link" href="#curriculum"><i class="ti-bookmark-alt"></i>Exam Format</a></li>
              <!--  <li><a class="nav-link" href="#instructor"><i class="ti-user"></i>Instructor</a></li>
                <li><a class="nav-link" href="#reviews"><i class="ti-comments"></i>Reviews</a></li> -->
              </ul>
            </div>
          </div>
        </div>

        <div class="col-lg-9 col-md-8 col-sm-12">
          <div class="courses-post">
            <div class="ttr-post-media media-effec">
              <a href="#"><img src="{{asset("storage/Classroomk Courses/banners/$classroom_course_details->classroom_banner_image")}}"   alt="image"
                height="600"
                width="1000"></a>
            </div>
            <div class="ttr-post-info">
              <div class="ttr-post-title ">
                <h2 class="post-title">{{$classroom_course->classroom_course_title}}</h2>
              </div>
              <div class="ttr-post-text">

                {!!$classroom_course_details->classroom_short_description!!}
              </div>
            </div>
          </div>
          <div class="courese-overview" id="overview">

            <div class="row">

              <div class="col-md-12 col-lg-8">
                <h4 class="m-b5">Course Description</h4>
                {!!$classroom_course_details->classroom_course_description!!}
                  <div class="ttr-divider bg-gray"><i class="icon-dot c-square"></i></div>
                <h4 class="m-b5">THe Certification can help:</h4>
                {{$classroom_course_details->classroom_certification}}
                  <div class="ttr-divider bg-gray"><i class="icon-dot c-square"></i></div>
                <h4 class="m-b5">Learning Outcomes</h4>
                <ul class="list-checked primary">
                  {!!$classroom_course_details->classroom_learning_outcomes!!}

                </ul>
              </div>
            </div>
          </div>
          <div class="m-b30" id="curriculum">
            <h4>Exam Format</h4>
            <ul class="list-checked primary">
              <li>Multiple choice examination questions</li>
              <li>{{$classroom_course_details->no_of_questions}} questions</li>
              <li>{{$classroom_course_details->pass_mark}} marks required to pass (out of {{$classroom_course_details->out_of}} available) – {{$classroom_course_details->pass_mark/$classroom_course_details->out_of*100}}%</li>
              <li>{{$classroom_course_details->duration}} minutes’ duration</li>
              <li>{{$classroom_course_details->book}} book</li>

            </ul>
          </div>
        <!--  <div class="" id="instructor">
            <h4>Instructor</h4>
            <div class="instructor-bx">
              <div class="instructor-author">
                <img src="{{ asset('images/testimonials/pic1.jpg')}}" alt="">
              </div>
              <div class="instructor-info">
                <h6>Keny White </h6>
                <span>Professor</span>
                <ul class="list-inline m-tb10">
                  <li><a href="#" class="btn sharp-sm facebook"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#" class="btn sharp-sm twitter"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#" class="btn sharp-sm linkedin"><i class="fa fa-linkedin"></i></a></li>
                  <li><a href="#" class="btn sharp-sm google-plus"><i class="fa fa-google-plus"></i></a></li>
                </ul>
                <p class="m-b0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
              </div>
            </div>
            <div class="instructor-bx">
              <div class="instructor-author">
                <img src="{{ asset('images/testimonials/pic2.jpg')}}" alt="">
              </div>
              <div class="instructor-info">
                <h6>Keny White </h6>
                <span>Professor</span>
                <ul class="list-inline m-tb10">
                  <li><a href="#" class="btn sharp-sm facebook"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#" class="btn sharp-sm twitter"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#" class="btn sharp-sm linkedin"><i class="fa fa-linkedin"></i></a></li>
                  <li><a href="#" class="btn sharp-sm google-plus"><i class="fa fa-google-plus"></i></a></li>
                </ul>
                <p class="m-b0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
              </div>
            </div>
          </div>
          <div class="" id="reviews">
            <h4>Reviews</h4>

            <div class="review-bx">
              <div class="all-review">
                <h2 class="rating-type">3</h2>
                <ul class="cours-star">
                  <li class="active"><i class="fa fa-star"></i></li>
                  <li class="active"><i class="fa fa-star"></i></li>
                  <li class="active"><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>3 Rating</span>
              </div>
              <div class="review-bar">
                <div class="bar-bx">
                  <div class="side">
                    <div>5 star</div>
                  </div>
                  <div class="middle">
                    <div class="bar-container">
                      <div class="bar-5" style="width:90%;"></div>
                    </div>
                  </div>
                  <div class="side right">
                    <div>150</div>
                  </div>
                </div>
                <div class="bar-bx">
                  <div class="side">
                    <div>4 star</div>
                  </div>
                  <div class="middle">
                    <div class="bar-container">
                      <div class="bar-5" style="width:70%;"></div>
                    </div>
                  </div>
                  <div class="side right">
                    <div>140</div>
                  </div>
                </div>
                <div class="bar-bx">
                  <div class="side">
                    <div>3 star</div>
                  </div>
                  <div class="middle">
                    <div class="bar-container">
                      <div class="bar-5" style="width:50%;"></div>
                    </div>
                  </div>
                  <div class="side right">
                    <div>120</div>
                  </div>
                </div>
                <div class="bar-bx">
                  <div class="side">
                    <div>2 star</div>
                  </div>
                  <div class="middle">
                    <div class="bar-container">
                      <div class="bar-5" style="width:40%;"></div>
                    </div>
                  </div>
                  <div class="side right">
                    <div>110</div>
                  </div>
                </div>
                <div class="bar-bx">
                  <div class="side">
                    <div>1 star</div>
                  </div>
                  <div class="middle">
                    <div class="bar-container">
                      <div class="bar-5" style="width:20%;"></div>
                    </div>
                  </div>
                  <div class="side right">
                    <div>80</div>
                  </div>
                </div>
              </div>
            </div>
          </div>-->

        </div>

      </div>
    </div>
        </div>
    </div>
<!-- contact area END -->

</div>
<!-- Content END-->





@endsection
