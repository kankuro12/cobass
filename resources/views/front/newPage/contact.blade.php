@extends('front.layout.app')

@section('content')
    <div class="breadcrumb-area">
        <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-5 pt-100 pb-95"
            style="background-image:url('https://htmldemo.net/glaxdu/glaxdu/assets/img/bg/breadcrumb-bg-6.jpg');">
            <div class="container">
                <h2>Contact Us</h2>
                <p>{{ $contact->description ?? 'Get in touch with us for more information.' }}</p>
            </div>
        </div>
    </div>

    <div class="contact-area pt-130 pb-130">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="contact-map mr-70">
                        <iframe
                            src="https://maps.google.com/maps?q={{ urlencode($contact->map ?? 'Default Location') }}&t=&z=13&ie=UTF8&iwloc=&output=embed"
                            width="100%"
                            height="400"
                            frameborder="0"
                            style="border:0;"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="contact-form">
                        <div class="contact-title mb-45">
                            <h2>Stay <span>Connected</span></h2>
                            <p>{{ $contact->description ?? 'Feel free to reach out to us!' }}</p>
                        </div>
                        <form id="contact-form" action="{{ route('contact.submit') }}" method="post">
                            @csrf
                            <input name="name" placeholder="Name*" type="text">
                            <input name="email" placeholder="Email*" type="email">
                            <input name="subject" placeholder="Subject*" type="text">
                            <textarea name="message" placeholder="Message"></textarea>
                            <button class="submit btn-style" type="submit">SEND MESSAGE</button>
                        </form>
                        <p class="form-messege"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-info-area bg-img pt-180 pb-140 default-overlay"
        style="background-image:url('https://htmldemo.net/glaxdu/glaxdu/assets/img/bg/contact-info.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="single-contact-info mb-30 text-center">
                        <div class="contact-info-icon">
                            <span><i class="fa-solid fa-location-dot"></i></span>
                        </div>
                        <p>{{ $contact->addr ?? 'No address available' }}</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="single-contact-info mb-30 text-center">
                        <div class="contact-info-icon">
                            <span><i class="fa-solid fa-mobile"></i></span>
                        </div>
                        <div class="contact-info-phn">
                            <div class="info-phn-title">
                                <span>Phone : </span>
                            </div>
                            <div class="info-phn-number">
                                <p>{{ $contact->phone ?? 'No phone number available' }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="single-contact-info mb-30 text-center">
                        <div class="contact-info-icon">
                            <span><i class="fa-solid fa-envelope"></i></span>
                        </div>
                        <a href="mailto:{{ $contact->email ?? 'No email available' }}">{{ $contact->email ?? 'No email available' }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
