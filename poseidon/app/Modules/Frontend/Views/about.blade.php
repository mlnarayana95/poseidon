@extends('layouts.frontend.main')
@section('title', 'About Us')

@section('heading', 'Why Choose Us')


@section('breadcrumb')
    @parent
    <li>About Us</li>
@stop

@section('content')

<div class="container-fluid banner text-center">
  <div class="container">
    <h1>About</h1> 
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
            Thanks to the hard work of everyone involved, we have set the benchmark for responsible tourism based on high-quality initiatives. Located in unique places and serving excellent and honest gastronomy, we offer a service with an authentic personality that is a reflection of both our team’s spirit and the places we create for you to enjoy some rest and relaxation.
        </div>
      </div>
      <div class="col-md-6 text-center">
        <img class="about-image" src="/images/location.jpg" alt="photo">
      </div>  
    </div>
  </div>
</div>

<div class="container-fluid background-color">
  <div class="container">
    <div class="row about-rows">
      <div class="col-md-6 text-center">
        <img class="about-image" src="/images/satisfaction.jpg" alt="photo">
      </div>  
      <div class="col-md-6">
        <div class="header why-info">
          Satisfaction gauranteed
        </div>
        <div class="why-info">
            Our leaders inspire our team to live according to our company values, which include impressing our customers and clients with a truly exceptional experience, innovation, experementing and learning, being accountable and being positive and fun.
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
        <a href="/register" class="join shadow btn btn-main">Join Now</a>
      </div>
  </div>
</div> 
</div> 

<div class="container-fluid background-color">
  <div class="container testimonial-container">
    <div class="row about-rows">
      <div class="col-md-4">
        <blockquote>
          Pursuing our values at all times and under a system of family management, our socially responsible contracting translates positively into one of our most important assets: our employees. In Poseidon, we strive for job stability, social services and the conciliation of work and personal life. 
        </blockquote>
        <div class="cite text-right">- Janice D.</div>
      </div>
      <div class="col-md-4">
        <blockquote>
          The Poseidon Group is present in different places of the world, we are aware of and form part of diversity. We therefore understand and respect the plurality of views, culture and sensitivities among our workforce. We are a great family that fosters equal opportunities and which is inclusive and integrating. 
        </blockquote>
        <div class="cite text-right">- Peter P.</div>

      </div>
      <div class="col-md-4">
        <blockquote>
          The principle that distinguishes Poseidon Group is based on the service its people offer. We therefore favour the personal and professional growth of our payroll, we invest in specific technical training in each area and constantly improve our Human Capital. 
        </blockquote>
        <div class="cite text-right">- Steve G.</div>
      </div>
    </div>
  </div>
</div>

<div class="contianer-fluid blue-background">
  <div class="container about-container">
    <div class="row about-rows">
      <div class="col-md-12">
        <div class="text-center who-we-are">Who we are</div>
        <div class="pos-desc text-center">Poseidon is owned by Lux Group Limited, a privately-owned business based in Melbourne Luxury Escapes is owned by Lux Group Limited, a privately-owned business based in Melbourne which was founded in 2009 by Jeremy Same and Adam Schwab. Lux Group has more than 150 team members globally, with major offices in Sydney, Melbourne, Bangalore, Singapore and San Francisco. In addition to Luxury Escapes, the Lux Group is a joint venture partner with the Catch 
                Group in Scoopon, Cudo and TreatMe.</div>
      </div>  
    </div>
  </div>
</div>

<div class="container-fluid white-background">
  <div class="container">
    <div class="row text-center">
      <div class="col-md-12 review">"One of the most luxurious stays we have ever experienced."
        <div>- New York Times</div>
      </div>
    </div>
    <div class="row text-center">
      <div class="col-md-6 col-sm-12"><img class="award" src="images/award2.png" alt="award2"></div>
      <div class="col-md-6 col-sm-12"><img class="award" src="images/award1.png" alt="award1"></div>
    </div>
  </div>
</div>  


@endsection