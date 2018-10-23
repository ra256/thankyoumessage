@extends('layouts.default')

@section('content')




        <div class="card-title"><h1><b>Welcome to our Contact Page.</b></h1>
            <p class="lead">Please use the form to reach the site owner.
                <br> or if you have any questions about laravel</p></div>
        <div class="card-body">
            <form role="form" id="contact-form" class="contact-form" method="POST" action="{{route('contact.store')}}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="yourname@domain.com">
                </div>
                <div class="form-group">
                    <label for="body">Please enter your message below</label>
                    <textarea name="body" class="form-control" id="body" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mb-2">Submit</button>
            </form>
        </div>
    </div>

@endsection