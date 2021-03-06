@extends('layouts.app')

@section('title', 'Detail Travel')

@push('prepend-style')

<link rel="stylesheet" href="{{ url('frontend/libraries/xzoom/xzoom.css') }}">

@endpush

@section('content')

<main>
    <div class="section-details-header"></div>

    <div class="section-details-content">
        <div class="container">
            <div class="row">
                <div class="col p-0">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                Paket Travel
                            </li>
                            <li class="breadcrumb-item active">
                                Details
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 pl-lg-0">
                    <div class="card card-details">
                        <h1>Nusa Penida</h1>
                        <p>
                            Republic of Indonesia Raya
                        </p>
                        <div class="gallery">
                            <div class="xzoom-container">
                                <img src="{{ url('frontend/images/details.jpg') }}" class="xzoom" id="xzoom-default" xoriginal="{{ url('frontend/images/details.jpg') }}">
                            </div>
                        </div>
                        <div class="xzoom-thumbs">
                            <a href="">
                                <img src="{{ url('frontend/images/details.jpg') }}" class="xzoom-gallery" width="128" xpreview="{{ url('frontend/images/details.jpg') }}">
                            </a>
                            <a href="">
                                <img src="{{ url('frontend/images/details.jpg') }}" class="xzoom-gallery" width="128" xpreview="{{ url('frontend/images/details.jpg') }}">
                            </a>
                            <a href="">
                                <img src="{{ url('frontend/images/details.jpg') }}" class="xzoom-gallery" width="128" xpreview="{{ url('frontend/images/details.jpg') }}">
                            </a>
                            <a href="">
                                <img src="{{ url('frontend/images/details.jpg') }}" class="xzoom-gallery" width="128" xpreview="{{ url('frontend/images/details.jpg') }}">
                            </a>
                            <a href="">
                                <img src="{{ url('frontend/images/details.jpg') }}" class="xzoom-gallery" width="128" xpreview="{{ url('frontend/images/details.jpg') }}">
                            </a>
                        </div>
                        <h2>Tentang Wisata</h2>
                        <p>Nusa Penida adalah sebuah pulau bagian dari negara Republik Indonesia yang terletak di sebelah tenggara Bali yang dipisahkan oleh Selat Badung. Di dekat pulau ini terdapat juga pulau-pulau kecil lainnya yaitu Nusa Ceningan
                        </p>
                        <p>Perbukitan dan kapur karang merupakan kondisi tanah di pulau ini, salah satunya gunung bukit tertinggi bernama Gunung</p>

                        <div class="features row">
                            <div class="col-md-4">
                                <img src="{{ url('frontend/images/ic_event.png') }}" alt="" class="features-image">
                                <div class="description">
                                    <h3>Featured Event</h3>
                                    <p>Tari Kecak</p>
                                </div>
                            </div>
                            <div class="col-md-4 border-left">
                                <img src="{{ url('frontend/images/ic_bahasa.png') }}" alt="" class="features-image">
                                <div class="description">
                                    <h3>Language</h3>
                                    <p>Bahasa Indonesia</p>
                                </div>
                            </div>
                            <div class="col-md-4 border-left">
                                <img src="{{ url('frontend/images/ic_food.png') }}" alt="" class="features-image">
                                <div class="description">
                                    <h3>Foods</h3>
                                    <p>Local Foods</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-details card-right">
                        <h2>Members Are Going</h2>
                        <div class="members my-2">
                            <img src="{{ url('frontend/images/member-1.png') }}" alt="">
                            <img src="{{ url('frontend/images/member-2.png') }}" alt="">
                            <img src="{{ url('frontend/images/member-3.png') }}" alt="">
                            <img src="{{ url('frontend/images/member-4.png') }}" alt="">
                            <img src="{{ url('frontend/images/member-5.png') }}" alt="">
                        </div>
                        <hr>
                        <h2>Trip Informations</h2>
                        <table class="trip-information">
                            <tr>
                                <th width="50%">Date of Departure</th>
                                <td width="50%" class="text-right">22 Aug, 2019</td>

                            </tr>
                            <tr>
                                <th width="50%">Duration</th>
                                <td width="50%" class="text-right">4D 3N</td>

                            </tr>
                            <tr>
                                <th width="50%">Type</th>
                                <td width="50%" class="text-right">Open Trip</td>

                            </tr>
                            <tr>
                                <th width="50%">Price</th>
                                <td width="50%" class="text-right">$80,00 / Person</td>

                            </tr>
                        </table>
                    </div>
                    <div class="join-container">
                        <a href="{{ route('checkout') }}" class="btn btn-block btn-join-now mt-3 py-2">
                            Join Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection

@push('addon-script')

<script src="{{ url('frontend/libraries/xzoom/xzoom.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $('.xzoom, .xzoom-gallery').xzoom({
            zoomWidth: 500,
            title: false,
            tint: '#333',
            Xoffset: 15
        });
    });
</script>

@endpush