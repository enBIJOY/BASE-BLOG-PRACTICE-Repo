@extends('frontend.layout.app')
@section('title','Contact Us Page')
@section('content')



<div class="container my-5">
    <div class="py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 border border-success border-3">
                <div class="text-center mb-4">
                    <h2 class="fw-bold">Contact Us</h2>
                    <p class="text-muted">Send us a message and we’ll get back to you.</p>
                </div>
                <!-- Alert Message -->
                <div id="alertBox" class="alert d-none"></div>
                <form class="ajax-contact-form" data-action="{{ route('contactform') }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Full Name</label>
                        <input type="text" placeholder="Tareq ie" name="name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Phone Number</label>
                        <input type="text" placeholder="+88 01600-112211" name="phone" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email Address</label>
                        <input type="email" placeholder="example@xyz.com" name="email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Message</label>
                        <textarea name="message" rows="5" class="form-control" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 mb-3">
                        Send Message
                    </button>
                    <div class="responseMessage"></div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection