@extends('layouts.frontend.main')
@section('title', 'Room List')

@section('content')
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <!-- Boostrap CSS -->
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">
    <!-- fontawesome -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/58d8ede058.js" crossorigin="anonymous"></script>
    <sytle>
        
    </sytle>
<div class="title-div">
    <div class="container">
        <div class="row content-header">
            <div class="col-md-8 title">
                Choose Form Our Best Rooms
            </div>
            <div class="col-md-4 text-right">
                <ol class="content-breadcrumb">
                    <li><a href="">Home</a></li>
                    <li class="active"><a href="">Contact</a>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div><!-- /.title-div -->

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
            <form>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" placeholder="Name">
                </div>
                <div class="form-group col-md-6">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" placeholder="Email">
                </div>
              </div>
              <div class="form-group">
                <label for="inputAddress">Subject</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="Subject">
              </div>
              <div class="form-group">
                <label for="inputAddress2">Message</label>

                <textarea class="form-control"></textarea>
              </div>

              <button type="submit" class="btn btn-danger">Send Message</button>
            </form>
        </div>
        <div class="col-md-6">
            <div class="container">
            <p>
                <a href="#" class="btn btn-info btn-lg">
                    <span class="glyphicon glyphicon-map-marker"></span>
                    Fake Adress,Winnipeg<br/>
                         MB R7B 7T7
                </a>
                
            </p>

           <p>
            <a href="#" class="btn btn-info btn-lg">
              <span class="glyphicon glyphicon-bullhorn"></span>
               1(289)7777-777 
            </a>
           
          </p>
          <p>
            <a href="#" class="btn btn-info btn-lg">
              <span class="glyphicon glyphicon-envelope"></span>
              help@poseidon.com
            </a>
            
          </p>
          </div>    
      </div>
        </div>
    </div>
</div>
<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/css/ion.rangeSlider.min.css"/>

<!--jQuery khosada-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<!-- Evgheni Code Ends Here -->

@endsection