@extends('layouts.default')
@section('content')

            <h1>Contact</h1>
            <p class="lead">Use this to contact the site owner.</p>

            <form role="form" id="contact-form" class="contact-form" method="POST"  action="{{route('contact.store')}}">
                {{ csrf_field() }}

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input name="name" type="name" class="form-control" id="name" placeholder="name">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com">
                </div>
            </div>
        </div>
            <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="body">Message</label>
                    <textarea name="body" class="form-control" id="body" rows="3"></textarea>
                </div>
                </div>
            </div>
                <div class="row">
                    <div class="col-md-12">
                <button type="submit" class="btn btn-primary mb-2">Submit</button>
        </div>
    </div>
    </form>
@endsection