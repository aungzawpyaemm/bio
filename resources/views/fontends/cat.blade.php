@extends('layouts.fontend')
@section('title','Home')
@section('content')
<!-- ##### Breadcrumb Area Start ##### -->
<section class="breadcrumb-area bg-img bg-overlay" style="background-image: url('{{asset('fontend/img/bg-img/40.jpg')}}');">
  
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                  <h2>{{$category->name}}</h2>
                
                                 
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Breadcrumb Area End ##### -->

<!-- ##### Breadcrumb Area Start ##### -->
<div class="mag-breadcrumb py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Category</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{$category->name}}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ##### Breadcrumb Area End ##### -->

<!-- ##### Post Details Area Start ##### -->
<section class="post-details-area">
    <div class="container-fluid">
        <div class="row ">
            <div class="col-md-12 col-lg-9">
                <div class="row">
            <!-- Category Content Area -->
                
                      @foreach ($posts as $post) 
                   
                        <div class="col-md-6 col-xl-4  bg-white mb-5  box-shadow ">
                            <div class="post-details-content ">
                                <div class="single-trending-post">
                                    <img src="{{ asset("storage/{$post->profile}") }}" alt="">
                                
                                    <div class="post-content">
                                        <a href="" class=" btn btn-sm btn-outline-info">{{$post->name}} </a>
                                        <p class="text-muted mt-3 ">{{$post->publiced}}</p>
                                    
                                    </div>  
                                </div>
                                
                            </div> 
        
                            <div class="post-content ">
                            <h4 style="color:#663d00">{{$post->name}}</h4>
                                <p>He is a Web developer and it's youtuber may be something he is a coaching and write a book.</p>
                        
                                <div class="post-details-area">
                                    <div class="video-meta-data d-flex align-items-center justify-content-between">
                                        <h6 class="total-views"></h6>
                                        <div class="like-dislike d-flex align-items-center">
                                            
                                        <a href="{{ route('fontends.post',$post->id) }}">
                                                <i class="text-muted"> More Views ...  <i class="fa fa-angle-double-right" aria-hidden="true"></i></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="footer-area p-0 bg-white">
                                <div class="footer-widget m-1" >
                                
                                    <div class="footer-social-info">
                                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                                        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    

                     @endforeach
                     
                     @foreach ($posts as $post) 
                   
                     <div class="col-md-6  col-xl-4 bg-white mb-5  box-shadow">
                         <div class="post-details-content ">
                             <div class="single-trending-post">
                                 <img src="{{ asset("storage/{$post->profile}") }}" alt="">
                             
                                 <div class="post-content">
                                     <a href="" class=" btn btn-sm btn-outline-info">{{$post->name}} </a>
                                     <p class="text-muted mt-3 ">{{$post->publiced}}</p>
                                 
                                 </div>  
                             </div>
                             
                         </div> 
     
                         <div class="post-content ">
                         <h4 style="color:#663d00">{{$post->name}}</h4>
                             <p>He is a Web developer and it's youtuber may be something he is a coaching and write a book.</p>
                     
                             <div class="post-details-area">
                                 <div class="video-meta-data d-flex align-items-center justify-content-between">
                                     <h6 class="total-views"></h6>
                                     <div class="like-dislike d-flex align-items-center">
                                         
                                     <a href="{{ route('fontends.post',$post->id) }}">
                                             <i class="text-muted"> More Views ...  <i class="fa fa-angle-double-right" aria-hidden="true"></i></i>
                                         </a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="footer-area p-0 bg-white">
                             <div class="footer-widget m-1" >
                             
                                 <div class="footer-social-info">
                                     <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                     <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                                     <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                                     <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                     <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                                 </div>
                             </div>
                         </div>
                         
                     </div>
                 
                  @endforeach
                  
                  @foreach ($posts as $post) 
                   
                  <div class="col-md-6  col-xl-4 bg-white mb-5  box-shadow">
                      <div class="post-details-content ">
                          <div class="single-trending-post">
                              <img src="{{ asset("storage/{$post->profile}") }}" alt="">
                          
                              <div class="post-content">
                                  <a href="" class=" btn btn-sm btn-outline-info">{{$post->name}} </a>
                                  <p class="text-muted mt-3 ">{{$post->publiced}}</p>
                              
                              </div>  
                          </div>
                          
                      </div> 
  
                      <div class="post-content ">
                      <h4 style="color:#663d00">{{$post->name}}</h4>
                          <p>He is a Web developer and it's youtuber may be something he is a coaching and write a book.</p>
                  
                          <div class="post-details-area">
                              <div class="video-meta-data d-flex align-items-center justify-content-between">
                                  <h6 class="total-views"></h6>
                                  <div class="like-dislike d-flex align-items-center">
                                      
                                  <a href="{{ route('fontends.post',$post->id) }}">
                                          <i class="text-muted"> More Views ...  <i class="fa fa-angle-double-right" aria-hidden="true"></i></i>
                                      </a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="footer-area p-0 bg-white">
                          <div class="footer-widget m-1" >
                          
                              <div class="footer-social-info">
                                  <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                  <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                                  <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                                  <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                  <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                              </div>
                          </div>
                      </div>
                      
                  </div>
              
               @endforeach
                  </div>
                    
            </div>

            <div class="col-md-12 col-lg-3 ">
                <div class="row">
                    <div class="">
                        <div class="sidebar-area bg-white mb-30 box-shadow">
                            <!-- Sidebar Widget -->
                            <div class="single-sidebar-widget p-30">
                                <!-- Social Followers Info -->
                                <div class="social-followers-info">
                                    <!-- Facebook -->
                                    <a href="#" class="facebook-fans"><i class="fa fa-facebook"></i> 4,360 <span>Fans</span></a>
                                    <!-- Twitter -->
                                    <a href="#" class="twitter-followers"><i class="fa fa-twitter"></i> 3,280 <span>Followers</span></a>
                                    <!-- YouTube -->
                                    <a href="#" class="youtube-subscribers"><i class="fa fa-youtube"></i> 1250 <span>Subscribers</span></a>
                                    <!-- Google -->
                                    <a href="#" class="google-followers"><i class="fa fa-google-plus"></i> 4,230 <span>Followers</span></a>
                                </div>
                            </div>
        
                            <!-- Sidebar Widget -->
                                <div class="single-sidebar-widget p-30">
                                        <!-- Section Title -->
                                        <div class="section-heading">
                                            <h5>Categories</h5>
                                        </div>
        
                                         <!-- Catagory Widget -->
                                        <ul class="catagory-widgets">
                                            @foreach ($categories as $category)
                            
                                                <li><a href="{{ route('fontends.cat', $category->id) }}"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> {{$category->name}}</span> <span>{{$category->posts->count()}}</span></a></li>
                            
                                            @endforeach 
                                        
                                    </ul>
                                </div>
        
                          
        
                           
        
        
                            </div>
        
                         
                        </div>
                    </div>
                </div>
         </div>
           
           

              <!-- Related Post Area -->
              <div class="related-post-area bg-white mb-30 px-30 pt-30 box-shadow">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Related Post</h5>
                </div>

                <div class="row">
                    <!-- Single Blog Post -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="single-blog-post style-4 mb-30">
                            <div class="post-thumbnail">
                                <img src="img/bg-img/29.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <a href="single-post.html" class="post-title">Dentists Are Smiling Over Painless Veneer</a>
                                <div class="post-meta d-flex">
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Blog Post -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="single-blog-post style-4 mb-30">
                            <div class="post-thumbnail">
                                <img src="img/bg-img/30.jpg" alt="">
                                <a href="video-post.html" class="video-play"><i class="fa fa-play"></i></a>
                                <span class="video-duration">09:27</span>
                            </div>
                            <div class="post-content">
                                <a href="single-post.html" class="post-title">Will The Democrats Be Able To Reverse</a>
                                <div class="post-meta d-flex">
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Blog Post -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="single-blog-post style-4 mb-30">
                            <div class="post-thumbnail">
                                <img src="img/bg-img/28.jpg" alt="">
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
                    </div>

                </div>
            </div>

            <!-- Sidebar Widget -->
            
        </div>
    </div>
</section>
<!-- ##### Post Details Area End ##### -->

@endsection


