<style>
    .carousel-item {
  height: 80vh;
  min-height: 100px;
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
section {
  padding-top: 5rem;
  padding-bottom: 5rem;
}

.lnr {
  display: inline-block;
  fill: currentColor;
  width: 1em;
  height: 1em;
  vertical-align: -0.05em;
  stroke-width: 1;
}

.services-icon {
  margin-bottom: 20px;
  font-size: 30px;
}
bgc2, .vLine, .hLine {
    background-color: #0F52BA;
}

.quote-icon {
  font-size: 40px;
  margin-bottom: 20px;
}
.services-icon {
    font-size: 60px;
    margin-left: 2rem;
}
.featured-section .products {
   
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    grid-gap: 60px 30px;
  }
.button-container {
  margin: 80px 0;
}
.button {
  border: 1px solid #212121;
  padding: 12px 40px;
}


a:visited {
  text-decoration: hide;
  color: #212121;
}

.button:hover {
  color: #e9e9e9;
  background: #212121;
}
</style>
@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   
    <body class="antialiased">
       
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
     <!--  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
    </ol>
     <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" ><img src="{{ asset('image/image_1.jpg')}} " width="50%">
        
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item active" ><img src="{{ asset('image/image_2.jpg')}} " width="50%">
          
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <!--  <div class="carousel-item" ><img src="{{ asset('images/banner.png')}} ">
        
      </div>-->
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>
  <!-- Page Content -->
  <div class="featured-section">

</div> <!-- end featured-section --> 

            
        </div>
    </body>
</html>   
@endsection