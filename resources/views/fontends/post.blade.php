@extends('layouts.fontend')
@section('title','Home')
@section('content')
<!-- ##### Breadcrumb Area Start ##### -->
<section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/49.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2>Single Post</h2>
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
                        <li class="breadcrumb-item"><a href="#">Features</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Single Post</li>
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

        <div class="row justify-content-center">

            <!-- Sidebar Widget -->
            <div class="col-sm-12 col-md-6 col-lg-4 ">
                <div class="sidebar-area bg-white mb-30 box-shadow">
                    <!-- Sidebar Widget -->
                    <div class="single-sidebar-widget p-3">
                    
                            
                            <div class="shell ">
                            
                                
                                <div class="rowss">
                                  
                                    <div class="wsk-cp-product">
                                      <div class="wsk-cp-img">
                                      <img src="{{ asset("storage/{$post->profile}") }}" alt="Product" class="img-responsive" />
                                      </div>
                                      <div class="wsk-cp-text">
                                        <div class="category">
                                          <span>{{$post->name}}</span>
                                        </div>
                                        
                                        <div class="card-footer">
                                         <!-- Sidebar Widget -->
                                             <div class="single-sidebar-widget ">
                                                <div class="section-heading p-2">
                                                    <h5>Facts Information</h5>
                                                </div>
                                            <div class=" p-30">
                                                <!-- Section Title -->
                        

                                                <!-- Catagory Widget -->
                                                <ul class="catagory-widgets">
                                                    <li><a href="#"><span></i> Name <span class="text-muted">></span></span> <span class="text-muted">{{$post->name}}</span></a></li>
                                                    <li><a href="#"><span></i> Birthday <span class="text-muted">></span></span> <span class="text-muted">{{$post->birthday}}</span></a></li>
                                                    <li><a href="#"><span></i> Birth Place <span class="text-muted">></span></span> <span class="text-muted">{{$post->birthplace}}</span></a></li>
                                                    <li><a href="#"><span></i> Religious <span class="text-muted">></span></span> <span class="text-muted">{{$post->religious}}</span></a></li>
                                                    <li><a href="#"><span></i> Ethnicity <span class="text-muted">></span></span> <span class="text-muted">{{$post->ethnicity}}</span></a></li>
                                                    <li><a href="#"><span></i> Nationality <span class="text-muted">></span></span> <span class="text-muted">{{$post->nationality}}</span></a></li>
                                                    <li><a href="#"><span></i> Professional <span class="text-muted">></span></span> <span class="text-muted">{{$post->professional}}</span></a></li>
                                                   

                                                </ul>
                                                <p>
                                                    <div class="section-heading p-2">
                                                        <h5 data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Follow Social Media <span><i class="fa fa-arrow-down"></i></span></h5>
                                                    </div>

                                                     <a href="{{$post->facebook}}" target="_blank" class="btn btn-block btn-social btn-facebook text-white">
                                                     <span class="fa fa-facebook "></span> <span class="">Facebook by{{ $post->name}}</span>
                                                      </a>

                                                      <a href="{{$post->facebook}}" target="_blank" class="btn btn-block btn-social btn-instagram text-white">
                                                        <span class="fa fa-instagram "></span> <span class="">Instagram by{{ $post->name}}</span>
                                                         </a>
                                                         <a href="{{$post->facebook}}" target="_blank" class="btn btn-block btn-social btn-google text-white">
                                                            <span class="fa fa-youtube "></span> <span class="">YouTube by{{ $post->name}}</span>
                                                             </a>
                                                   
                                                
                                                    

                                                  </p>
                                                  
                                                  <div class="row">
                                                    <div class="col">
                                                      <div class="collapse multi-collapse" id="multiCollapseExample1">
                                                        <div class="card card-body">
                                                          aAnim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                                        </div>
                                                      </div>
                                                    </div>
                                                   
                                                  </div>
                                                  
                                             </div>
                                             <span class="text-muted">Resource by   </span>
                    </div>

                                         
                                        </div>
                                      </div>
                                    </div>
                                
                                 
                                </div>
                              
                            </div>
                            
                            
                            
                    </div>

                    
                 
                </div>
            </div>
            <!-- Post Details Content Area -->
            <div class="col-sm-12 col-md-6 col-lg-5 ">
                <div class="post-details-content bg-white mb-30 p-30 box-shadow">

                     <!-- Section Title -->
                     <div class="section-heading">
                        <h5 class=""  text-transform ="uppercase">who is <span  style="color: chocolate;font-weight:bold;"> {{$post->name}}</span> ? </h5>
                        
                    </div>
                    <div class="m-3">
                        {!! ($post->who) !!}
                    </div>
                    <div class="section-heading">
                        <h5 class=""  text-transform ="uppercase">Career & Professioanl  </h5>
                        
                    </div>
                    <div class="m-3">
                        {!! ($post->career) !!}
                    </div>
                    <div class="section-heading">
                        <h5 class=""  text-transform ="uppercase">Education and Background  </h5>
                        
                    </div>
                    <div class="m-3">
                        {!! ($post->education) !!}
                    </div>
                    <div class="section-heading">
                        <h5 class=""  text-transform ="uppercase">Persoanal  </h5>
                        
                    </div>
                    <div class="m-3">
                        {!! ($post->persoanl) !!}
                    </div>
                    <div class="section-heading">
                        <h5 class=""  text-transform ="uppercase">about of ? </h5>
                        
                    </div>
                    <div class="m-3">
                        {!! ($post->about) !!}
                    </div>
                    {{-- <div class="blog-thumb mb-30">
                        <img src="img/bg-img/50.jpg" alt="">    
                    </div> --}}
                    {{-- <div class="blog-content">
                        <div class="post-meta">
                            <a href="#">MAY 8, 2018</a>
                            <a href="archive.html">lifestyle</a>
                        </div>
                        <h4 class="post-title">From Wetlands To Canals And Dams Amsterdam Is Alive</h4>
                        <!-- Post Meta -->
                        <div class="post-meta-2">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                        </div>

                        <p>Lorem ipsum dolor sit amet, consectetur sita adipiscing elit. Proin molestie accumsan orci suneget placerat. Etiama faucibuss orci quis posuere vestibulu. Ut id purusos ultricies, dictumax quam id, ullamcorper urna. Curabitur sitdown nisi vitae nisi vestotana vestibul ut non massa. Aliquam erat volutpat. Morbi nect nunc et orci euismode finibus. Donec lobortis venenatis turpis. Aenean act congue arcu, nect porttitor magna. Nam consequa ligula nibh, in maximus gravida. Vivamus nuornare masa. Quisque sed honcus leo, ullamcorper auctor mi. Maecenas mollis purus, mattis nisl condimentum. Nam eros elementu, congue diam imperdiet, interdum tellus.</p>

                        <p>Mauris dapibus turpis vel ialis tempor. Morbi turpis leon, pulvinar vitae convallis vitae, scelerisque necto eros. Suspendisse vitae pharetra risus. Pellentesque varius, felis in lacinia faucibus, ipsum liula aliquam nulla, non honcus nunc ipsum eu risus. Nunc finibus euismod magna sagittis. Sed dictum libero consectetur.</p>

                        <div class="row">
                            <div class="col-12 col-lg-8">
                                <p>Vivamus nisl metus, dictum sit amet porttitor sit amet, lobortis sit amet ipsum. Mauris ut quam non magna gravida egestas. Sed rutrum sapien eget lorem bibendum ullamcorper.</p>
                                <ul>
                                    <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Duis blandit maximus tellus, sagittis volutpat tellus sandi.</li>
                                    <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Etiam vel auctor elit. Usaceros suscipit, lobortis felis non.</li>
                                    <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Integer sagittis finibus nequer, euster tincidunt misult.</li>
                                    <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Pellentesque euismod semeget diam ege</li>
                                </ul>
                                <p>Aliquam venenatis dui elit, et viverra mi maximus quis. Etiam vel auctor elit. Ut ac eros suscipit, lobortis felison, vulputate tellus. Suspendisse hendrerit aliquet lectus.</p>
                            </div>
                            <div class="col-12 col-lg-4">
                                <img class="mb-15" src="img/bg-img/51.jpg" alt="">
                            </div>
                        </div>

                        <p>Mauris nisi arcu, consectetur convallis fringilla quis, posuere ac mauris. Ut in placerat lorem. Donec cursus malesuada nibhem, eget consectetur posuere sed. Suspendisse auctor nec diamet consectetur. Etiam ac maurised nisib tincidunt viverra. Sed nulla lacus, convallis vel nunc sed, fringilla venenatis neque.</p>

                        <blockquote>
                            <h6 class="quote-text">“Design is a funny word. Some people think design means how it looks. But of course, if you dig deeper, it's really how it works. The design of the Mac wasn't what it looked like, although that was part of it.”</h6>
                            <h6 class="quote-name">STEVE JOBS</h6>
                        </blockquote>

                        <p>Phasellus laoreet mattis ultrices. Integer ex sem, ultrices eu sem in, laoreet vehicula ligula. Phasellus quistor blandit salah convallis augue. Sed velot dictum sapient. In pulvinar libero turpis. Quisque facilisis bigbang consenti. Nullam bendumaz, massan consequat in gravida porttitor, aguet lacus condimentum mauris, id blandit quam augue eget mana. Etiam denim jeans lacus, nascetur auge bibendum vel pulvinar viverra, mattis sit amet mi. Mauris fringilla, ex vitae maximus fringilla, neque sapien maximus justo, cursus risus neque sed nibh. Donec at urna eros scelerisque non nibh sed.</p>

                        <!-- Like Dislike Share -->
                        <div class="like-dislike-share my-5">
                            <h4 class="share">240<span>Share</span></h4>
                            <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i> Share on Facebook</a>
                            <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i> Share on Twitter</a>
                        </div>

                        <!-- Post Author -->
                        <div class="post-author d-flex align-items-center">
                            <div class="post-author-thumb">
                                <img src="img/bg-img/52.jpg" alt="">
                            </div>
                            <div class="post-author-desc pl-4">
                                <a href="#" class="author-name">Alan Shaerer</a>
                                <p>Duis tincidunt turpis sodales, tincidunt nisi et, auctor nisi. Curabitur vulputate sapien eu metus ultricies fermentum nec vel augue. Maecenas eget lacinia est.</p>
                            </div>
                        </div>
                    </div> --}}
                </div>

               


               
            </div>

            <!-- Sidebar Widget -->
            <div class="col-12 col-md-6 col-lg-3 ">
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

                    <!-- Sidebar Widget -->
                    <div class="single-sidebar-widget">
                        <a href="#" class="add-img"><img src="img/bg-img/add2.png" alt=""></a>
                    </div>

                    <!-- Sidebar Widget -->
                    <div class="single-sidebar-widget p-30">
                        <!-- Section Title -->
                        <div class="section-heading">
                            <h5>Hot Channels</h5>
                        </div>

                        <!-- Single YouTube Channel -->
                        <div class="single-youtube-channel d-flex">
                            <div class="youtube-channel-thumbnail">
                                <img src="img/bg-img/14.jpg" alt="">
                            </div>
                            <div class="youtube-channel-content">
                                <a href="single-post.html" class="channel-title">TV Show</a>
                                <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Subscribe</a>
                            </div>
                        </div>

                        <!-- Single YouTube Channel -->
                        <div class="single-youtube-channel d-flex">
                            <div class="youtube-channel-thumbnail">
                                <img src="img/bg-img/15.jpg" alt="">
                            </div>
                            <div class="youtube-channel-content">
                                <a href="single-post.html" class="channel-title">Game Channel</a>
                                <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Subscribe</a>
                            </div>
                        </div>

                        <!-- Single YouTube Channel -->
                        <div class="single-youtube-channel d-flex">
                            <div class="youtube-channel-thumbnail">
                                <img src="img/bg-img/16.jpg" alt="">
                            </div>
                            <div class="youtube-channel-content">
                                <a href="single-post.html" class="channel-title">Sport Channel</a>
                                <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Subscribe</a>
                            </div>
                        </div>

                        <!-- Single YouTube Channel -->
                        <div class="single-youtube-channel d-flex">
                            <div class="youtube-channel-thumbnail">
                                <img src="img/bg-img/17.jpg" alt="">
                            </div>
                            <div class="youtube-channel-content">
                                <a href="single-post.html" class="channel-title">Travel Channel</a>
                                <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Subscribe</a>
                            </div>
                        </div>

                        <!-- Single YouTube Channel -->
                        <div class="single-youtube-channel d-flex">
                            <div class="youtube-channel-thumbnail">
                                <img src="img/bg-img/18.jpg" alt="">
                            </div>
                            <div class="youtube-channel-content">
                                <a href="single-post.html" class="channel-title">LifeStyle Channel</a>
                                <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Subscribe</a>
                            </div>
                        </div>

                    </div>

                    <!-- Sidebar Widget -->
                    <div class="single-sidebar-widget p-30">
                        <!-- Section Title -->
                        <div class="section-heading">
                            <h5>Newsletter</h5>
                        </div>

                        <div class="newsletter-form">
                            <p>Subscribe our newsletter gor get notification about new updates, information discount, etc.</p>
                            <form action="#" method="get">
                                <input type="search" name="widget-search" placeholder="Enter your email">
                                <button type="submit" class="btn mag-btn w-100">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ##### Post Details Area End ##### -->


<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                 <!-- Sidebar Widget -->
             <div class="single-sidebar-widget p-30">
                <!-- Section Title -->
                <div class="section-heading " style="border:1px solid white">
                    <h5>You May Also Like</h5>
                </div>

                
            </div>
            </div>
            @foreach ($youmaylike as $post)
            <div class="col-md-4 col-lg-3 ">
                <div class="wsk-cp-product">
                    <div class="wsk-cp-img">
                    <img src="{{ asset("storage/{$post->profile}") }}" alt="Product" class="img-responsive" />
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
                                                    

                                                     <a href="#" class="like" style="color:#663d00;font-weight:bold;font-size:18px;">
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
            @endforeach
            
        </div>
    </div>
</section>


@endsection


