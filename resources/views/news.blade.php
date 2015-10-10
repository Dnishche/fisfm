@extends('app')


@section('content')

<!--Nav pannel-->
<header id="nav_bar" class="navbar-fixed-top">
  <nav class="top-bar navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="row">

          <div class="col-xs-12 col-sm-6 col-md-8">
            <div class="navbar-nav">
              <ul class="nav navbar-nav">
                <li><a class="page-scroll" href="home_main-slider">Головна</a></li>
                  <li><a class="page-scroll" href="home_news">Новини</a></li>
                  <li><a class="page-scroll" href="home#chair">Кафедри</a></li>
                  <li><a class="page-scroll" href="home#students">Студентам</a></li> 
                  <li><a class="page-scroll" href="home#bottom">Контакти</a></li>    
                </ul>
            </div>       
          </div>
          <div class="col-xs-6 col-md-4">
            <div class="social">
                  <ul class="social-share">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
                      <li><form role="form">
                          <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                          <i class="fa fa-search"></i>
                      </form></li>
                      <li><a href="#">UA</a></li>
                      <li><a href="#">EN</a></li>
                  </ul>
             </div>
          </div>
      </div>
    </div>
  </nav>
</header>

<!--News-->
<section id="news">
	
	<div class="container">

@foreach($current_news as $headers)

      <div class="blog-header">
        <h1 class="blog-title">{{$headers -> header}}</h1>
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">
        
        <img src="asset/images/portfolio/full/item1.png" alt="sss" class="img-responsive">

          <div class="blog-post">
           <p class="blog-post-meta">{{$headers -> created_at}}</p>
           <hr>

            <p>{{$headers -> description}}
            
            
          </div>
          

          <div class="comments">
          	
          </div>

          @endforeach

        </div>
  

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module">

          
            <table class="table">
              <td>
                <tr><a href="#"><h4>Архів новин</h4></a></tr>
              </td>
            </table>
            @foreach($all_headers as $headers)
            <table class="table">
                    <tr>
                      <a href="#"><h5> {{$headers -> header}}  </h5></a>
                    </tr>
            </table>
            @endforeach


          </div>
        </div>
      </div>

    </div>

</section>

@stop