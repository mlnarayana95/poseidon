@extends('layouts.frontend.main')
@section('title', 'About Us')


@section('breadcrumb')
    @parent
    <li>About Us</li>
@stop

@section('content')

<style>

div.banner{
  margin: 0;
  background: #161527;
  height: 300px;
  color: #F68500;
  max-height: 800px;
}

div.banner h1{
  padding-top: 116px;
}

div.about-rows{
  padding-top: 40px;
  padding-bottom: 40px;
}

div.header{
  font-size: 2.1em;
  color: #161527;
  font-weight: bold;
  font-family: 'Josefin Sans';
  padding-bottom: 25px;
}

div.why-info{
  max-width: 78%;
  padding-left: 75px;
}

img{
  padding-top: 31px;
}

div.background-color{
  background: #fafafa;
}

div.white-background{
  padding: 50px;
  max-height: 379px;
}

div.become-member{
  font-size: 2.5em;
  color: #F68500;
  font-family: 'Josefin Sans';
}

button.join{
  color: #fff;
  background: #F68500;
  border: none;
  padding: 10px 20px;
  margin: 10px;
}

blockquote{
    font-family: 'Poppins';
    font-style: italic;
    margin: 0.25em 0;
    padding: 0.35em 40px;
    line-height: 1.45;
    position: relative;
    color: #383838;
}

blockquote:before{
    display: block;
    padding-left: 10px;
    content: "\201C";
    font-size: 80px;
    position: absolute;
    left: -20px;
    top: -20px;
    color: #7a7a7a;
}

div.cite{
  padding-right: 50px;
  color: #F68500;
}

div.who-we-are{
  font-size: 2.3em;
  color: #fff;
  padding-bottom: 25px;
}

div.blue-background{
  background: #161527;
  max-height: 400px;
}

div.pos-desc{
  font-size: 16px;
  color: #fff;
}

</style>

<div class="container-fluid banner text-center">
  <div class="container">
    <h1>About Us</h1> 
  </div>
</div>  

<div class="container-fluid">
  <div class="container">
    <div class="row about-rows">
      <div class="col-md-6">
        <div class="header why-info">
          Best &amp; central location
        </div>
        <div class="why-info">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </div>
      </div>
      <div class="col-md-6 text-center">
        <img src="/images/location.jpg" alt="photo">
      </div>  
    </div>
  </div>
</div>

<div class="container-fluid background-color">
  <div class="container">
    <div class="row about-rows">
      <div class="col-md-6 text-center">
        <img src="/images/satisfaction.jpg" alt="photo">
      </div>  
      <div class="col-md-6">
        <div class="header why-info">
          Satisfaction gauranteed
        </div>
        <div class="why-info">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid white-background">
  <div class="container">
    <div class="row text-center about-rows">
      <div class="col-md-12">
        <div class="become-member">
          Become a member today
        </div>
        <button class="join">Join Now</button>
      </div>
  </div>
</div> 
</div> 

<div class="container-fluid background-color">
  <div class="container testimonial-container">
    <div class="row about-rows">
      <div class="col-md-4">
        <blockquote>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
        </blockquote>
        <div class="cite text-right">- Janice D.</div>
      </div>
      <div class="col-md-4">
        <blockquote>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
        </blockquote>
        <div class="cite text-right">- Peter P.</div>

      </div>
      <div class="col-md-4">
        <blockquote>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
        </blockquote>
        <div class="cite text-right">- Steve G.</div>
      </div>
    </div>
  </div>
</div>

<div class="contianer-fluid blue-background">
  <div class="container">
    <div class="row about-rows">
      <div class="col-md-12">
        <div class="text-center who-we-are">Who we are</div>
        <div class="pos-desc text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
      </div>  
    </div>
  </div>
</div>

<div class="container-fluid white-background">
  <div class="container">
    <div class="row">
    </div>
  </div>
</div>  


@endsection