@extends('layouts.app')

@section('content')
    <!-- News and Events Section -->
    <!-- Latest updates, announcements and upcoming activities -->
    <section class="section bg-gradient" id="news">
        <div class="bg-shape">
            <img src="images/bg-shape.png" alt="" class="img-fluid mx-auto d-block">
        </div>

        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center mt-4">
                        <h3 class="text-light">Latest News & Events</h3>
                        <p class="text-muted">Stay updated with BITS activities and announcements</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 mt-4">
                    <div class="card h-100">
                        <img src="{{ asset('images/news/slsu_hour.jpg') }}" class="card-img-top" alt="Event 1">
                        <div class="card-body">
                            <h5 class="card-title">𝐒𝐋𝐒𝐔 𝐇𝐎𝐔𝐑</h5>
                            <p class="card-text text-muted">Mighty Kingfishers, get ready to engage in a meaningful
                                discussion</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">𝐌𝐚𝐫𝐜𝐡 𝟏𝟗, 𝟐𝟎𝟐𝟓, 𝐚𝐭 𝟏:𝟎𝟎 𝐏𝐌!</small>
                                <a href="#news" class="btn btn-sm btn-outline-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="card h-100">
                        <img src="{{ asset('images/news/bits_joins.jpg') }}" class="card-img-top" alt="Event 1">
                        <div class="card-body">
                            <h5 class="card-title">𝐁𝐈𝐓𝐒 𝐣𝐨𝐢𝐧𝐬 𝐀𝐜𝐚𝐝𝐞𝐦𝐢𝐜-𝐅𝐞𝐬𝐭 𝐒𝐲𝐦𝐩𝐨𝐬𝐢𝐮𝐦: 𝐂𝐞𝐥𝐞𝐛𝐫𝐚𝐭𝐢𝐧𝐠 𝐒𝐋𝐒𝐔'𝐬 𝟐𝟏𝐬𝐭 𝐀𝐧𝐧𝐢𝐯𝐞𝐫𝐬𝐚𝐫𝐲</h5>
                            <p class="card-text text-muted">The event brought together 𝗳𝗼𝗿𝗺𝗲𝗿 𝗕𝗜𝗧𝗦 𝗼𝗳𝗳𝗶𝗰𝗲𝗿𝘀 𝗮𝗻𝗱 𝗹𝗲𝗮𝗱𝗲𝗿𝘀, to share their experiences, insights, and words of encouragement with students.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">𝐌𝐚𝐫𝐜𝐡 3, 𝟐𝟎𝟐𝟓</small>
                                <a href="#news" class="btn btn-sm btn-outline-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="card h-100">
                        <img src="{{ asset('images/news/valentines.jpg') }}" class="card-img-top" alt="Event 1">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">BITS'n Love A Valentine's Day Celebration</h5>
                            <p class="card-text text-muted">The Bontoc Information Technology Society spread joy and happiness on Valentine's Day with BITS 'n' Love! The event was held at the Multi-Purpose Covered Court, SLSU - Bontoc Campus.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">February 14, 2025</small>
                                <a href="#news" class="btn btn-sm btn-outline-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.contact')
@endsection
