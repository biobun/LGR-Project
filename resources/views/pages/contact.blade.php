@extends('layouts.layout')
@section('title', 'Kaos Muslim RG')
@section('description', 'Kaos Muslim')
@section('content')
<div class="top">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <h2>Contact</h2>
                <p class="mb-5">Please contact us with question at <a href="" class="navbar-blue">gr-clothing@gmail.com</a> or using the form below</p>
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-4 offset-md-2">
                            <input type="text" class="form-control" id="inputName" aria-describedby="NameContact" placeholder="Name">
                        </div>
                        <div class="form-group col-md-4 ">
                            <input type="email" class="form-control" id="inputEmail" aria-describedby="EmailContact" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-row">
                        
                        <div class="form-group col-md-8 offset-md-2">
                            <input type="text" class="form-control" id="inputPhoneNumber" aria-describedby="PhoneContact" placeholder="Phone Number">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-8 offset-md-2">
                            <textarea class="form-control" id="inputMessage" rows="5" placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6 offset-md-3">
                        <button class="btn btn-lg btn-primary btn-block sharp">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection