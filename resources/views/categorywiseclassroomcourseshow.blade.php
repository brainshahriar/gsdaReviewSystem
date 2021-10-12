@extends('frontend.layouts.master')


@section('content')



<!-- Content -->

<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="page-banner ovbl-dark" style="background-image:url({{ asset('images/banner/banner3.jpg')}});">
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
      <li>Our Classroom Courses</li>
    </ul>
  </div>
</div>
<!-- Breadcrumb row END -->
    <!-- inner page banner END -->
<div class="content-block">
        <!-- About Us -->
  <div class="section-area section-sp1">
            <div class="container">
       <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-12 m-b30">
          <div class="widget courses-search-bx placeani">  
            <div class="form-group">
              <div class="input-group">
                <label>Search Courses</label>
                <input name="dzName" type="text" required class="form-control">
              </div>
            </div>
          </div>
          <div class="widget widget_archive">
                            <h5 class="widget-title style-1">All Courses Categories</h5>
                            <ul>
                                <li class=""><a href="{{route('classroom-courses')}}">All Courses</a></li>

                                @foreach($course_categories as $row)
                                <li><a href="{{ url('category/classroom-course/'.$row->id) }}">{{$row->mcategory_title}}</a></li>
                                @endforeach
                            </ul>
                        </div>
          <div class="widget">
            <a href="#"><img src="{{ asset('images/adv/adv.jpg')}}" alt=""/></a>
          </div>
          <div class="widget recent-posts-entry widget-courses">
                            
                            <div class="widget-post-bx">
                              

                         

                            </div>
                        </div>
        </div>
        <div class="col-lg-9 col-md-8 col-sm-12">
          <div class="row">
            @foreach($course as $row)
            @if($row->status==1)
            @if($row->main_category->id==5)
            <div class="col-md-6 col-lg-4 col-sm-6 m-b30">
              <div class="cours-bx">
                <div class="action-box">
                  <img src="{{asset("storage/Classroom courses/$row->classroom_course_image")}}" alt="">

                </div>
                <div class="info-bx text-center">
                  <h5><a href="/home/classroom/course_details/{{$row->id}}">{{$row->classroom_course_title}}</a></h5>
                  <span>{{$row->course_category->mcategory_title}}</span>
                </div>

                <div class="cours-more-info">
                  <div class="review">
                    <span>Review</span>
                    <ul class="cours-star">
                      @if (App\Models\CourseReview::where('classroomcourse_id',$row->id)->first())
                    
   
                      @php
                         $courseReview=App\Models\CourseReview::where('classroomcourse_id',$row->id)->where('status','approve')->latest()->get();
                        $rating = App\Models\CourseReview::where('classroomcourse_id',$row->id)->where('status','approve')->avg('rating');
                        $avgRating = number_format($rating,1);
                      @endphp
                      @for ($i =1 ; $i <= 5 ; $i++)
                      <span style="color: red" class="fa fa-star{{ ($i <= $avgRating) ? '' : '-empty' }}"></span>
                    @endfor
                   
                    @else
                    <span class="text-danger">No Review</span>
                    @endif

                    </ul>
                  </div>
                  <div class="price">
                    <del>{{$row->training_fee}}৳</del>
                    <h5 style="color:#ca2128;">{{$row->exam_fee}}৳</h5>
                  </div>
                </div>


              </div>
            </div>
            @endif
            @endif
            @endforeach
            <div class="col-lg-12 m-b20">

                {{$course->links('frontend.partials.pagination')}}

            </div>
          </div>
        </div>
      </div>
    </div>
        </div>
    </div>
<!-- contact area END -->

</div>
<!-- Content END-->




@endsection
