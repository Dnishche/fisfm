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

  <div class="row">

        <div class="col-sm-8 blog-main">

        <img src="images/portfolio/full/item1.png" alt="sss" class="img-responsive">

          <div class="blog-post">
           <p class="blog-post-meta">1 Січня, 2014</p>

            <p>Це повідомлення в блозі демонструє кілька різних типів вмісту, які підтримуються та стилізуються з Bootstrap. Базова типографія, зображення - все це підтримується.</p>
            <hr>
            <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
            <blockquote>
              <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            </blockquote>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
            <h2>Заголовок</h2>
            <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
            <h3>Підзаголовок</h3>
            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
            <pre><code>Example code block</code></pre>
            <p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
            <h3>Підзаголовок</h3>
            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <ul>
              <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
              <li>Donec id elit non mi porta gravida at eget metus.</li>
              <li>Nulla vitae elit libero, a pharetra augue.</li>
            </ul>
            <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
            <ol>
              <li>Vestibulum id ligula porta felis euismod semper.</li>
              <li>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li>
              <li>Maecenas sed diam eget risus varius blandit sit amet non magna.</li>
            </ol>
            <p>Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis.</p>
          </div>

          <div class="comments">
            
          </div>

          

        </div>

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module">
          <table class="table">
            <td>
              <tr><a href="#"><h4>Архів новин</h4></a></tr>
            </td>
          </table>
            <div class="table-responsive">
          <table class="table">
            <td>
              <tr><a href="#">Березень 2014</a></tr>
            </td>
          </table>
          <table class="table">
            <td>
              <tr><a href="#">Березень 2014</a></tr>
            </td>
          </table>
          <table class="table">
            <td>
              <tr><a href="#">Березень 2014</a></tr>
            </td>
          </table>
          <table class="table">
            <td>
              <tr><a href="#">Березень 2014</a></tr>
            </td>
          </table>
          <table class="table">
            <td>
              <tr><a href="#">Березень 2014</a></tr>
            </td>
          </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    

</section>

@stop