@extends('front.layout.app')
@php
$data = getSetting('contact') ??
    (object) [
        'map' => '',
        'email' => '',
        'phone' => '',
        'addr' => '',
        'others' => [],
    ];

@endphp

@section('content')
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-2 pt-100 pb-95"
        style="background-image:url('');">
        <div class="container">
            <h2>Home / Contact Us </h2>
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="#">Home</a>
                    <span>
                        <i class="fa fa-angle-double-right"></i> Contact Us
                    </span>
                </li>
            </ul>
        </div>
    </div>
</div>

    <div class="contact-area pt-130 pb-130">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="contact-map mr-70">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d446.5171539970967!2d87.27900639009763!3d26.451305046678105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ef74485d770559%3A0x2efafd005e09a60!2s(COBASS%20COLLEGE%20%2B2)%2C%20Biratnagar!5e0!3m2!1sen!2suk!4v1740905572709!5m2!1sen!2suk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
