@extends('layouts.frontend.main')

@section('heading', 'Get in Touch With Us')

@section('breadcrumb')
    @parent
    <li>Contact</li>
@stop

@section('content')

<!-- Evgheni Code Goes Here -->
<div class="container">
    <div class="row">        
        <div class="col-md-12">  
          <h1>Contact Us</h1>
          <h3>If You Have Any Question </br>
           Drop A Message</h3>
        </div>
    </div>
</div>

<div id="contact_form" class="container">

    <div class="row">
        <div class="col-md-6">
            <form method="post">
                  <span class="required_asterisk"></span>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="name" class="required">Name</label>
                  <input type="text" class="form-control" id="name" placeholder="Name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="email" class="required">Email</label>
                  <input type="email" class="form-control" id="email" placeholder="Email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="inputAddress" class="required">Subject</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="Subject"
                required>
              </div>
              <div class="form-group">
                <label for="inputAddress2" class="required">Message</label>

                <textarea class="form-control" required></textarea>
              </div>

              <button type="submit" class="btn btn-danger">Send Message</button>
            </form>
        </div>
        <div class="col-md-6">
            <div class="icons">
            <p>
                <a href="#" class="btn btn-info btn-lg">
                    <span class="fas fa-map-marker-alt"></span>
                    Fake Adress,Winnipeg<br/>
                         MB R7B 7T7
                </a>
                
            </p>

           <p>
            <a href="#" class="btn btn-info btn-lg">
              <span class="fas fa-phone-alt"></span>
               1(289)7777-777 
            </a>
           
          </p>
          <p>
            <a href="#" class="btn btn-info btn-lg">
              <span class="fas fa-envelope-open-text"></span>
              help@poseidon.com
            </a>
            
          </p>
          </div>    
      </div>
        </div>
    </div>
</div>

<!-- Evgheni Code Ends Here -->

@endsection