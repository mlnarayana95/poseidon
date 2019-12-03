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
  background: rgb(53,50,91);
  background: linear-gradient(0deg, rgba(53,50,91,1) 7%, rgba(38,36,65,1) 30%, rgba(22,21,39,1) 56%);
  height: 300px;
  color: #F68500;
  max-height: 800px;
}

div.banner h1{
  padding-top: 116px;
}

div.row{
  padding: 40px 0;
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

div.background-color{
  background: #fafafa;
}

div.white-background{
  max-height: 379px;
}

div.become-member{
  font-size: 2.3em;
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


</style>

<div class="container-fluid banner text-center">
  <div class="container">
    <h1>About Us</h1>
    <div class="row">
    </div>  
  </div>
</div>  <!-- End of container-fluid -->

<div class="container-fluid">
  <div class="container">
    <div class="row">
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
    <div class="row">
      <div class="col-md-6 text-center">
        <img src="/images/location.jpg" alt="photo">
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
    <div class="row text-center">
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
    <div class="row">
      <div class="col-md-4">
        <div class="guest-comment">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
        </div>
        <div class="guest-name">Janice D.</div>
      </div>
      <div class="col-md-4">
        <div class="guest-comment">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
        </div>
        <div class="guest-name">Nancy D.</div>
      </div>
      <div class="col-md-4">
        <div class="guest-comment">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
        </div>
        <div class="guest-name">Pete S.</div>
      </div>
    </div>
  </div>
</div>

<div class="contianer-fluid">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="who-we-are">Who we are</div>
        <div class="pos-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
      </div>  
    </div>
  </div>
</div>


@endsection