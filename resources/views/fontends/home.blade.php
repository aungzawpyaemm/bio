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
          

  
<section class="mag-posts-area d-flex flex-wrap"">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-8 bg-white mb-30 px-30 pt-30 box-shadow">
                      
                        <div class="row">
                               <!-- Sidebar Widget -->
                            <div class="col-12">
                                <!-- Section Title -->
                                <div class="section-heading " >
                                    <h5>You May Also Like</h5>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @foreach ($items as $post)
                            <div class="col-md-4  ">
                                <div class="wsk-cp-product">
                                    <div class="wsk-cp-img">
                                    <img src="{{ asset("storage/{$post->profile}") }}" alt="Product" class="img-responsive" />
                                    </div>
                                <div class="wsk-cp-text">
                                    <a href="{{ route('fontends.post',$post->id) }}">
                                        <div class="category">
                                            <span>{{$post->category->name}}</span>
                                        </div>
                                    </a>
                               
                                </div>
                              </div>
                            </div>
                            @endforeach
                        </div>
                    
                    
                </div>
            </div>
 </section>


    <!-- ##### Post Details Area End ##### --> 

<!-- ##### Mag Posts Area End ##### -->


@endsection


