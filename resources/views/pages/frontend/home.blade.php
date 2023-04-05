@extends('layouts.frontend.inc.master')

@section('content')
    @php
        $participants = App\Models\Participant::all();
        $events = App\Models\Event::all();
        
    @endphp
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-stellar-background-ratio="0.1"
        data-bg-img="https://conferencenepal.com/images/bg11.jpg"
        style="background-image: url(&quot;https://conferencenepal.com/images/bg11.jpg&quot;); background-position: 0% 63.6px;">
        <div class="container pt-2 pb-0">
            <!-- Section Content -->
            <div class="section-content pt-2">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="title text-white">Events</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container pb-50 pt-2000">
        <div class="divider">
            <div class="container pb-50 pt-80">
                <div class="section-content">
                    <div class="row">
                        @foreach ($events as $event)
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="schedule-box maxwidth500 mb-30 bg-lighter">

                                    <div class="thumb"> <img src="/backend_assets/images/events/{{ $event->image }}">
                                    </div>

                                    <div class="schedule-details clearfix p-15 pt-10">
                                        <h5 class="font-16 title"><a
                                                href="/events/{{ $event->id }}/detail">{{ $event->name }}</a>
                                        </h5>
                                        {{-- <ul class="list-inline font-11 mb-20">
                                            <li><i class="fa fa-calendar mr-5"></i>2022-12-04</li>
                                            <li><i class="fa fa-map-marker mr-5"></i>Kathmandu</li>
                                        </ul> --}}
                                        <p> {{ $event->description }} </p>
                                        <div class="mt-10">
                                            <a class="btn btn-colored btn-theme-colored btn-sm"
                                                href="/events/{{ $event->id }}/download/certificates">Download
                                                Certificate</a>
                                            <a class="btn btn-colored btn-theme-colored btn-sm"
                                                href="/events/{{ $event->id }}/detail">Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


{{-- <div class="schedule-details clearfix p-15 pt-10">
    <h3>{{ $event->name }}
    </h3>
    <div class="mt-10">
        <a class="btn btn-colored btn-theme-colored btn-sm"
            href="/events/{{ $event->id }}/download/certificates">
            <h6>Download Certificate</h6>
        </a>
        <a class="btn btn-colored btn-theme-colored btn-sm" href="/events/{{ $event->id }}/detail">
            <h6>Details</h6>
        </a>
    </div>

</div> --}}
