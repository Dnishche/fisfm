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
                <li><a class="page-scroll" href="home">Головна</a></li>
                  <li><a class="page-scroll" href="home">Новини</a></li>
                  <li><a class="page-scroll" href="home">Кафедри</a></li>
                  <li><a class="page-scroll" href="home">Студентам</a></li> 
                  <li><a class="page-scroll" href="home">Контакти</a></li>    
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
  
    <div class="news-post">
      @if(count($all_news)==0)
        <p class="center empty"><i class="icon-info-sign"></i> Новин ще немає</p>
      @else
       <table>
          <td>
            @foreach($all_news as $titles)
              <tr>
                <div class="col-lg-8">
                  <article class="post news-post">
                    <a href="#"><h4 class="title">{{ $titles->title }}</h4></a>
                    <img src="asset/images /portfolio/recent/item4.png">
                    <p class="date-time">Опубліковано: {{$titles->created_at}}</p>
                    <p class="description">{{ $titles->segment }}</p>
                  </article>
                </div>
              </tr>
            @endforeach
          </td>
        </table>
      @endif
    </div>    
  </div>

</section>

@stop