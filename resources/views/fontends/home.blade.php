@extends('layouts.fontend')
@section('title','Home')
@section('content')
<section>
 
          <div class="large-12 columns">
            <div class="owl-carousel owl-theme">   
              
                @foreach ($posts as $post)
                <div class="item">
                    <div class="">
                        <div class="wsk-cp-product">
                            <div class="wsk-cp-img">
                            <img src="{{ asset("storage/{$post->profile}") }}" alt="Product" class="img-responsive rounded-circle" />
                            </div>
                        <div class="wsk-cp-text">
                            <div class="category">
                                <span>{{$post->category->name}}</span>
                            </div>
                        
                                    <div class="comment_area p-0">
        
                                        <ol>
                                    
                                            <!-- Single Comment Area -->
                                            <li class="">
                                                <!-- Comment Content -->
                                                <div class="comment-content d-flex">
                                                
                                                    <!-- Comment Meta -->
                                                    <div class="comment-meta">
                                                    
                                                        <div class="" >
                                                            
        
                                                            <a href="{{ route('fontends.post',$post->id) }}" class="like" style="color:#663d00;font-weight:bold;font-size:18px;">
                                                                {{$post->name}}
                                                            </a>
                                                        
                                                                
                                                            
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ol>
                                    </div>
                
        
                        
                    
                        </div>
                    </div>
                    </div>
                </div>
                @endforeach
              
              
            </div>
          </div>
          

  
<section class="mag-posts-area d-flex flex-wrap">

    <!-- >>>>>>>>>>>>>>>>>>>>
     Post Left Sidebar Area
    <<<<<<<<<<<<<<<<<<<<< -->
    <div class="post-sidebar-area left-sidebar mt-30 mb-30 bg-white box-shadow">
        <!-- Sidebar Widget -->
        <div class="single-sidebar-widget p-30">
            <!-- Section Title -->
            <div class="section-heading">
                <h5>Most Popular</h5>
            </div>

            <!-- Single Blog Post -->

            @foreach ($items as $item)
            <div class="single-blog-post d-flex">
                
                    <div class="post-thumbnail">
                        <a href="l" class="">
                        <img class="" src="{{ asset("storage/{$item->profile}")}}" class="rounded-circle" title='{{$post->name}}' alt="{{$post->name}}">
                        </div>
                        <div class="post-content">
                           
                            <div class="post-meta d-flex justify-content-between">
                                
                                    <p class="mt-3">{{$item->name}}</p>
                               
                                {{-- <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a> --}}
                            </div>
                        
                        </div>
                </a>
            </div>
                
            @endforeach
            

         
            
        </div>

        <!-- Sidebar Widget -->
        <div class="single-sidebar-widget">
            <a href="#" class="add-img"><img src="img/bg-img/add.png" alt=""></a>
        </div>

        <!-- Sidebar Widget -->
        <div class="single-sidebar-widget p-30">
            <!-- Section Title -->
            <div class="section-heading">
                <h5>Latest Videos</h5>
            </div>

            <!-- Single Blog Post -->
            <div class="single-blog-post d-flex">
                <div class="post-thumbnail">
                    <img src="img/bg-img/9.jpg" alt="">
                </div>
                <div class="post-content">
                    <a href="single-post.html" class="post-title">Coventry City Guide Including Coventry</a>
                    <div class="post-meta d-flex justify-content-between">
                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                    </div>
                </div>
            </div>

            <!-- Single Blog Post -->
            <div class="single-blog-post d-flex">
                <div class="post-thumbnail">
                    <img src="img/bg-img/10.jpg" alt="">
                </div>
                <div class="post-content">
                    <a href="single-post.html" class="post-title">Choose The Perfect Accommodations</a>
                    <div class="post-meta d-flex justify-content-between">
                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                    </div>
                </div>
            </div>

            <!-- Single Blog Post -->
            <div class="single-blog-post d-flex">
                <div class="post-thumbnail">
                    <img src="img/bg-img/11.jpg" alt="">
                </div>
                <div class="post-content">
                    <a href="single-post.html" class="post-title">Get Ready Fast For Fall Leaf Viewing</a>
                    <div class="post-meta d-flex justify-content-between">
                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                    </div>
                </div>
            </div>

            <!-- Single Blog Post -->
            <div class="single-blog-post d-flex">
                <div class="post-thumbnail">
                    <img src="img/bg-img/12.jpg" alt="">
                </div>
                <div class="post-content">
                    <a href="single-post.html" class="post-title">Global Resorts Network Grn Putting</a>
                    <div class="post-meta d-flex justify-content-between">
                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                    </div>
                </div>
            </div>

            <!-- Single Blog Post -->
            <div class="single-blog-post d-flex">
                <div class="post-thumbnail">
                    <img src="img/bg-img/13.jpg" alt="">
                </div>
                <div class="post-content">
                    <a href="single-post.html" class="post-title">Travel Prudently Luggage And Carry</a>
                    <div class="post-meta d-flex justify-content-between">
                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- >>>>>>>>>>>>>>>>>>>>
         Main Posts Area
    <<<<<<<<<<<<<<<<<<<<< -->
    <div class="mag-posts-content mt-30 mb-30 p-30 box-shadow">
        <!-- Trending Now Posts Area -->
        <div class="trending-now-posts mb-30">
            <!-- Section Title -->
            <div class="section-heading">
                <h5>TRENDING NOW</h5>
            </div>

            <div class="trending-post-slides owl-carousel">
                <!-- Single Trending Post -->
                
                @foreach ($items as $item)
                    <!-- Single Trending Post -->
                    <div class="single-trending-post">
                        <img src="{{ asset("storage/{$item->profile}") }}" alt="">
                        <div class="post-content">
                            <a href="#" class="post-cata">{{$item->category->name}}</a>
                            <a href="video-post.html" class="pos}t-title">The Health Benefits Of Sunglasses</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Feature Video Posts Area -->
        <div class="feature-video-posts mb-30">
            <!-- Section Title -->
            <div class="section-heading">
                <h5>Featured Videos</h5>
            </div>

            <div class="featured-video-posts">
                <div class="row">
                    <div class="col-12 col-lg-7">
                        <!-- Single Featured Post -->
                        <div class="single-featured-post">
                            <!-- Thumbnail -->
                            <div class="post-thumbnail mb-50">
                                <img src="img/bg-img/22.jpg" alt="">
                                <a href="video-post.html" class="video-play"><i class="fa fa-play"></i></a>
                            </div>
                            <!-- Post Contetnt -->
                            <div class="post-content">
                                <div class="post-meta">
                                    <a href="#">MAY 8, 2018</a>
                                    <a href="archive.html">lifestyle</a>
                                </div>
                                <a href="video-post.html" class="post-title">A Closer Look At Our Front Porch Items From Lowe’s</a>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
                            </div>
                            <!-- Post Share Area -->
                            <div class="post-share-area d-flex align-items-center justify-content-between">
                                <!-- Post Meta -->
                                <div class="post-meta pl-3">
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                </div>
                                <!-- Share Info -->
                                <div class="share-info">
                                    <a href="#" class="sharebtn"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                                    <!-- All Share Buttons -->
                                    <div class="all-share-btn d-flex">
                                        <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        <a href="#" class="google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                        <a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-5">
                        <!-- Featured Video Posts Slide -->
                        <div class="featured-video-posts-slide owl-carousel">

                            <div class="single--slide">
                                <!-- Single Blog Post -->
                                <div class="single-blog-post d-flex style-3">
                                    <div class="post-thumbnail">
                                        <img src="img/bg-img/23.jpg" alt="">
                                    </div>
                                    <div class="post-content">
                                        <a href="single-post.html" class="post-title">Global Resorts Network Grn Putting Timeshares To Shame</a>
                                        <div class="post-meta d-flex">
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Blog Post -->
                                <div class="single-blog-post d-flex style-3">
                                    <div class="post-thumbnail">
                                        <img src="img/bg-img/24.jpg" alt="">
                                    </div>
                                    <div class="post-content">
                                        <a href="single-post.html" class="post-title">A Guide To Rocky Mountain Vacations</a>
                                        <div class="post-meta d-flex">
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Blog Post -->
                                <div class="single-blog-post d-flex style-3">
                                    <div class="post-thumbnail">
                                        <img src="img/bg-img/25.jpg" alt="">
                                    </div>
                                    <div class="post-content">
                                        <a href="single-post.html" class="post-title">American Standards And European Culture How To Avoid</a>
                                        <div class="post-meta d-flex">
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Blog Post -->
                                <div class="single-blog-post d-flex style-3">
                                    <div class="post-thumbnail">
                                        <img src="img/bg-img/26.jpg" alt="">
                                    </div>
                                    <div class="post-content">
                                        <a href="single-post.html" class="post-title">Mother Earth Hosts Our Travels</a>
                                        <div class="post-meta d-flex">
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Blog Post -->
                                <div class="single-blog-post d-flex style-3">
                                    <div class="post-thumbnail">
                                        <img src="img/bg-img/27.jpg" alt="">
                                    </div>
                                    <div class="post-content">
                                        <a href="single-post.html" class="post-title">From Wetlands To Canals And Dams Amsterdam Is Alive</a>
                                        <div class="post-meta d-flex">
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="single--slide">
                                <!-- Single Blog Post -->
                                <div class="single-blog-post d-flex style-3">
                                    <div class="post-thumbnail">
                                        <img src="img/bg-img/23.jpg" alt="">
                                    </div>
                                    <div class="post-content">
                                        <a href="single-post.html" class="post-title">Global Resorts Network Grn Putting Timeshares To Shame</a>
                                        <div class="post-meta d-flex">
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Blog Post -->
                                <div class="single-blog-post d-flex style-3">
                                    <div class="post-thumbnail">
                                        <img src="img/bg-img/24.jpg" alt="">
                                    </div>
                                    <div class="post-content">
                                        <a href="single-post.html" class="post-title">A Guide To Rocky Mountain Vacations</a>
                                        <div class="post-meta d-flex">
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Blog Post -->
                                <div class="single-blog-post d-flex style-3">
                                    <div class="post-thumbnail">
                                        <img src="img/bg-img/25.jpg" alt="">
                                    </div>
                                    <div class="post-content">
                                        <a href="single-post.html" class="post-title">American Standards And European Culture How To Avoid</a>
                                        <div class="post-meta d-flex">
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Blog Post -->
                                <div class="single-blog-post d-flex style-3">
                                    <div class="post-thumbnail">
                                        <img src="img/bg-img/26.jpg" alt="">
                                    </div>
                                    <div class="post-content">
                                        <a href="single-post.html" class="post-title">Mother Earth Hosts Our Travels</a>
                                        <div class="post-meta d-flex">
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Blog Post -->
                                <div class="single-blog-post d-flex style-3">
                                    <div class="post-thumbnail">
                                        <img src="img/bg-img/27.jpg" alt="">
                                    </div>
                                    <div class="post-content">
                                        <a href="single-post.html" class="post-title">From Wetlands To Canals And Dams Amsterdam Is Alive</a>
                                        <div class="post-meta d-flex">
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Most Viewed Videos -->
        <div class="most-viewed-videos mb-30">
            <!-- Section Title -->
            <div class="section-heading">
                <h5>Most Viewed Videos</h5>
            </div>

            <div class="most-viewed-videos-slide owl-carousel">

                <!-- Single Blog Post -->
                <div class="single-blog-post style-4">
                    <div class="post-thumbnail">
                        <img src="img/bg-img/28.jpg" alt="">
                        <a href="video-post.html" class="video-play"><i class="fa fa-play"></i></a>
                        <span class="video-duration">09:27</span>
                    </div>
                    <div class="post-content">
                        <a href="single-post.html" class="post-title">A Guide To Rocky Mountain Vacations</a>
                        <div class="post-meta d-flex">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="single-blog-post style-4">
                    <div class="post-thumbnail">
                        <img src="img/bg-img/29.jpg" alt="">
                        <a href="video-post.html" class="video-play"><i class="fa fa-play"></i></a>
                        <span class="video-duration">09:27</span>
                    </div>
                    <div class="post-content">
                        <a href="single-post.html" class="post-title">Dentists Are Smiling Over Painless Veneer Alternative</a>
                        <div class="post-meta d-flex">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="single-blog-post style-4">
                    <div class="post-thumbnail">
                        <img src="img/bg-img/30.jpg" alt="">
                        <a href="video-post.html" class="video-play"><i class="fa fa-play"></i></a>
                        <span class="video-duration">09:27</span>
                    </div>
                    <div class="post-content">
                        <a href="single-post.html" class="post-title">Become A Travel Pro In One Easy Lesson</a>
                        <div class="post-meta d-flex">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="single-blog-post style-4">
                    <div class="post-thumbnail">
                        <img src="img/bg-img/28.jpg" alt="">
                        <a href="video-post.html" class="video-play"><i class="fa fa-play"></i></a>
                        <span class="video-duration">09:27</span>
                    </div>
                    <div class="post-content">
                        <a href="single-post.html" class="post-title">A Guide To Rocky Mountain Vacations</a>
                        <div class="post-meta d-flex">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="single-blog-post style-4">
                    <div class="post-thumbnail">
                        <img src="img/bg-img/29.jpg" alt="">
                        <a href="video-post.html" class="video-play"><i class="fa fa-play"></i></a>
                        <span class="video-duration">09:27</span>
                    </div>
                    <div class="post-content">
                        <a href="single-post.html" class="post-title">Dentists Are Smiling Over Painless Veneer Alternative</a>
                        <div class="post-meta d-flex">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="single-blog-post style-4">
                    <div class="post-thumbnail">
                        <img src="img/bg-img/30.jpg" alt="">
                        <a href="video-post.html" class="video-play"><i class="fa fa-play"></i></a>
                        <span class="video-duration">09:27</span>
                    </div>
                    <div class="post-content">
                        <a href="single-post.html" class="post-title">Become A Travel Pro In One Easy Lesson</a>
                        <div class="post-meta d-flex">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Sports Videos -->
        <div class="sports-videos-area">
            <!-- Section Title -->
            <div class="section-heading">
                <h5>Sports Videos</h5>
            </div>

            <div class="sports-videos-slides owl-carousel mb-30">
                <!-- Single Featured Post -->
                <div class="single-featured-post">
                    <!-- Thumbnail -->
                    <div class="post-thumbnail mb-50">
                        <img src="img/bg-img/22.jpg" alt="">
                        <a href="video-post.html" class="video-play"><i class="fa fa-play"></i></a>
                    </div>
                    <!-- Post Contetnt -->
                    <div class="post-content">
                        <div class="post-meta">
                            <a href="#">MAY 8, 2018</a>
                            <a href="archive.html">lifestyle</a>
                        </div>
                        <a href="video-post.html" class="post-title">A Closer Look At Our Front Porch Items From Lowe’s</a>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
                    </div>
                    <!-- Post Share Area -->
                    <div class="post-share-area d-flex align-items-center justify-content-between">
                        <!-- Post Meta -->
                        <div class="post-meta pl-3">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                        </div>
                        <!-- Share Info -->
                        <div class="share-info">
                            <a href="#" class="sharebtn"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                            <!-- All Share Buttons -->
                            <div class="all-share-btn d-flex">
                                <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#" class="google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Featured Post -->
                <div class="single-featured-post">
                    <!-- Thumbnail -->
                    <div class="post-thumbnail mb-50">
                        <img src="img/bg-img/22.jpg" alt="">
                        <a href="video-post.html" class="video-play"><i class="fa fa-play"></i></a>
                    </div>
                    <!-- Post Contetnt -->
                    <div class="post-content">
                        <div class="post-meta">
                            <a href="#">MAY 8, 2018</a>
                            <a href="archive.html">lifestyle</a>
                        </div>
                        <a href="video-post.html" class="post-title">A Closer Look At Our Front Porch Items From Lowe’s</a>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
                    </div>
                    <!-- Post Share Area -->
                    <div class="post-share-area d-flex align-items-center justify-content-between">
                        <!-- Post Meta -->
                        <div class="post-meta pl-3">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                        </div>
                        <!-- Share Info -->
                        <div class="share-info">
                            <a href="#" class="sharebtn"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                            <!-- All Share Buttons -->
                            <div class="all-share-btn d-flex">
                                <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#" class="google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Featured Post -->
                <div class="single-featured-post">
                    <!-- Thumbnail -->
                    <div class="post-thumbnail mb-50">
                        <img src="img/bg-img/22.jpg" alt="">
                        <a href="video-post.html" class="video-play"><i class="fa fa-play"></i></a>
                    </div>
                    <!-- Post Contetnt -->
                    <div class="post-content">
                        <div class="post-meta">
                            <a href="#">MAY 8, 2018</a>
                            <a href="archive.html">lifestyle</a>
                        </div>
                        <a href="video-post.html" class="post-title">A Closer Look At Our Front Porch Items From Lowe’s</a>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
                    </div>
                    <!-- Post Share Area -->
                    <div class="post-share-area d-flex align-items-center justify-content-between">
                        <!-- Post Meta -->
                        <div class="post-meta pl-3">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                        </div>
                        <!-- Share Info -->
                        <div class="share-info">
                            <a href="#" class="sharebtn"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                            <!-- All Share Buttons -->
                            <div class="all-share-btn d-flex">
                                <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#" class="google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Blog Post -->
                <div class="col-12 col-lg-6">
                    <div class="single-blog-post d-flex style-3 mb-30">
                        <div class="post-thumbnail">
                            <img src="img/bg-img/31.jpg" alt="">
                        </div>
                        <div class="post-content">
                            <a href="single-post.html" class="post-title">From Wetlands To Canals And Dams Amsterdam Is Alive</a>
                            <div class="post-meta d-flex">
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="col-12 col-lg-6">
                    <div class="single-blog-post d-flex style-3 mb-30">
                        <div class="post-thumbnail">
                            <img src="img/bg-img/32.jpg" alt="">
                        </div>
                        <div class="post-content">
                            <a href="single-post.html" class="post-title">From Wetlands To Canals And Dams Amsterdam Is Alive</a>
                            <div class="post-meta d-flex">
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="col-12 col-lg-6">
                    <div class="single-blog-post d-flex style-3 mb-30">
                        <div class="post-thumbnail">
                            <img src="img/bg-img/33.jpg" alt="">
                        </div>
                        <div class="post-content">
                            <a href="single-post.html" class="post-title">From Wetlands To Canals And Dams Amsterdam Is Alive</a>
                            <div class="post-meta d-flex">
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="col-12 col-lg-6">
                    <div class="single-blog-post d-flex style-3 mb-30">
                        <div class="post-thumbnail">
                            <img src="img/bg-img/34.jpg" alt="">
                        </div>
                        <div class="post-content">
                            <a href="single-post.html" class="post-title">From Wetlands To Canals And Dams Amsterdam Is Alive</a>
                            <div class="post-meta d-flex">
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- >>>>>>>>>>>>>>>>>>>>
     Post Right Sidebar Area
    <<<<<<<<<<<<<<<<<<<<< -->
    
</section>


@endsection


