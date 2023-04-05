@extends('layouts.frontend.inc.master')
<div class="wrapper">
    <style>
        ul.list li a {
            color: #222;
        }

        .categories .list .panel-group .panel-title a {
            background: #283C82;
            color: #fff;
        }

        .categories .list .panel-group .panel-content {
            background: #283C82;
            padding: 10px 0 0 20px
        }

        .categories .list .panel-group .panel-title a::after {
            padding: 0;
            color: #fff;
            font-size: 12px;
        }

        .categories .list .panel-group .panel-title a {
            padding: 0 0 0 20px
        }

        .categories .list .panel-group .panel-title a.active {
            background: #283C82 !important;
            border-bottom: none !important
        }

        .categories .list .panel-group .panel-title a.active::after {
            background: #283C82 !important;
        }
    </style>
    <div class="main-content">
        <section id="home" class="divider">

            <div class="container-fluid p-0">

                <div class="event-detail-image">
                    <img src="/backend_assets/images/events/{{ $events->image }}" alt=""
                        data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg"
                        data-bgparallax="6" data-no-retina="">
                </div>
                <!-- end .rev_slider_wrapper -->
                {{-- <script>
                    $(document).ready(function(e) {
                        var revapi = $(".rev_slider").revolution({
                            sliderType: "standard",
                            jsFileLocation: "js/revolution-slider/js/",
                            sliderLayout: "fullscreen",
                            dottedOverlay: "none",
                            delay: 5000,
                            navigation: {
                                keyboardNavigation: "off",
                                keyboard_direction: "horizontal",
                                mouseScrollNavigation: "off",
                                onHoverStop: "off",
                                touch: {
                                    touchenabled: "on",
                                    swipe_threshold: 75,
                                    swipe_min_touches: 1,
                                    swipe_direction: "horizontal",
                                    drag_block_vertical: false
                                },
                                arrows: {
                                    style: "gyges",
                                    enable: true,
                                    hide_onmobile: false,
                                    hide_onleave: true,
                                    hide_delay: 200,
                                    hide_delay_mobile: 1200,
                                    tmp: '',
                                    left: {
                                        h_align: "left",
                                        v_align: "center",
                                        h_offset: 0,
                                        v_offset: 0
                                    },
                                    right: {
                                        h_align: "right",
                                        v_align: "center",
                                        h_offset: 0,
                                        v_offset: 0
                                    }
                                },
                                bullets: {
                                    enable: true,
                                    hide_onmobile: true,
                                    hide_under: 800,
                                    style: "hebe",
                                    hide_onleave: false,
                                    direction: "horizontal",
                                    h_align: "center",
                                    v_align: "bottom",
                                    h_offset: 0,
                                    v_offset: 30,
                                    space: 5,
                                    tmp: '<span class="tp-bullet-image"></span><span class="tp-bullet-imageoverlay"></span><span class="tp-bullet-title"></span>'
                                }
                            },
                            responsiveLevels: [1240, 1024, 778],
                            visibilityLevels: [1240, 1024, 778],
                            gridwidth: [1170, 1024, 778, 480],
                            gridheight: [700, 768, 960, 720],
                            lazyType: "none",
                            parallax: "mouse",
                            parallaxBgFreeze: "off",
                            parallaxLevels: [2, 3, 4, 5, 6, 7, 8, 9, 10, 1],
                            shadow: 0,
                            spinner: "off",
                            stopLoop: "on",
                            stopAfterLoops: 0,
                            stopAtSlide: -1,
                            shuffle: "off",
                            autoHeight: "off",
                            fullScreenAutoWidth: "off",
                            fullScreenAlignForce: "off",
                            fullScreenOffsetContainer: "",
                            fullScreenOffset: "0",
                            hideThumbsOnMobile: "off",
                            hideSliderAtLimit: 0,
                            hideCaptionAtLimit: 0,
                            hideAllCaptionAtLilmit: 0,
                            debugMode: false,
                            fallbacks: {
                                simplifyAll: "off",
                                nextSlideOnWindowFocus: "off",
                                disableFocusListener: false,
                            }
                        });
                    });
                </script> --}}
                <!-- Slider Revolution Ends -->
            </div>
        </section>
        <!-- Section: About -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-8  wow fadeInUp" data-wow-duration="1.5s" data-wow-offset="10"
                        style="visibility: visible; animation-duration: 1.5s;">
                        <h3 class="sub-title font-28 m-0 mt-0 text-gray-darkgray mt-md-0">Overview</h3>
                        <h2 class="title text-gray font-40  mt-0 mb-20">{{ $events->name }}</h2>
                        <div class="entry-meta mb-20">
                            <h5>
                                <span><i class="bi bi-buildings-fill">  Organized By:</i> 
                                    {{ $events->organizer_name }}</span> <br>
                                <span><i class="bi bi-geo-alt"> Location:</i>
                                    {{ $events->location }}</span> <br>
                                <span><i class="bi bi-calendar-event">  Start Date:</i>
                                    {{ $events->start_date }}</span><br>
                                <span><i class="bi bi-calendar-event">  End Date:</i>
                                    {{ $events->end_date }}</span><br>
                                <span><i class="bi bi-alarm"> Time:</i>
                                    {{ \Carbon\Carbon::parse($events->event_time)->format('h:i a') }}
                                </span>
                            </h5>

                            {{-- <span><i class="fa fa-calendar text-theme-colored"></i>{{$events->start_date}}-{{$events->end_date}}</span>  --}}
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="widget">
                            <!--   <h5 class="widget-title line-bottom">Links</h5> -->
                            <div class="categories">
                                <ul class="list "
                                    style="
                                          background: #f2f2f2;
                                          padding: 20px;">
                                    <li><i class="fa fa-angle-double-right mr-10 text-theme-colored"></i><a
                                            href="/events/{{ $events->id }}/detail">Overview</a>
                                    </li>

                                    <li><i class="fa fa-angle-double-right mr-10 text-theme-colored"></i><a
                                            href="/events/{{ $events->id }}/download/certificates">Download
                                            Certificate</a>
                                    </li>

                                    <li><i class="fa fa-angle-double-right mr-10 text-theme-colored"></i><a
                                            href="https://conferencenepal.com/events/detail/6/apaccm2022/about">Significance
                                            of the Conference</a></li>


                                    <li><i class="fa fa-angle-double-right mr-10 text-theme-colored"></i><a
                                            href="https://conferencenepal.com/events/detail/6/apaccm2022/message-from-honorable-pm-5">Message
                                            from Rt. Honorable PM</a></li>


                                    <li><i class="fa fa-angle-double-right mr-10 text-theme-colored"></i><a
                                            href="https://conferencenepal.com/events/detail/6/apaccm2022/management-committee">Management
                                            Committee</a></li>


                                    <li><i class="fa fa-angle-double-right mr-10 text-theme-colored"></i><a
                                            href="https://conferencenepal.com/events/detail/6/apaccm2022/scientific-committee">Scientific
                                            Committee</a></li>


                                    <li><i class="fa fa-angle-double-right mr-10 text-theme-colored"></i><a
                                            href="https://conferencenepal.com/events/detail/6/apaccm2022/general-symposia">General
                                            Symposia</a></li>


                                    <li><i class="fa fa-angle-double-right mr-10 text-theme-colored"></i><a
                                            href="https://conferencenepal.com/events/detail/6/apaccm2022/abstract-submission">Abstract
                                            Submission</a></li>


                                    <div id="accordion122" class="panel-group accordion">
                                        <div class="panel">
                                            <div class="panel-title">
                                                <a data-parent="#accordion122" data-toggle="collapse"
                                                    href="#accordion1122" class="" aria-expanded="true"> <span
                                                        class="open-sub"></span> Speakers</a>
                                            </div>
                                            <div id="accordion1122" class="panel-collapse collapse" role="tablist"
                                                aria-expanded="true">
                                                <div class="panel-content">
                                                    <li><i
                                                            class="fa fa-angle-double-right mr-10 text-theme-colored"></i><a
                                                            href="https://conferencenepal.com/events/detail/6/apaccm2022/keynote-speakers">Keynote
                                                            Speakers</a></li>
                                                    <li><i
                                                            class="fa fa-angle-double-right mr-10 text-theme-colored"></i><a
                                                            href="https://conferencenepal.com/events/detail/6/apaccm2022/invited-international-speakers">Invited
                                                            International Speakers</a></li>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <li><i class="fa fa-angle-double-right mr-10 text-theme-colored"></i><a
                                            href="https://conferencenepal.com/events/detail/6/apaccm2022/program">Program</a>
                                    </li>


                                    <li><i class="fa fa-angle-double-right mr-10 text-theme-colored"></i><a
                                            href="https://conferencenepal.com/events/detail/6/apaccm2022/key-dates">Key
                                            Dates</a></li>


                                    <li><i class="fa fa-angle-double-right mr-10 text-theme-colored"></i><a
                                            href="https://conferencenepal.com/events/detail/6/apaccm2022/key-dates-and-registration-fee">Registration</a>
                                    </li>


                                    <li><i class="fa fa-angle-double-right mr-10 text-theme-colored"></i><a
                                            href="https://conferencenepal.com/events/detail/6/apaccm2022/location">Conference
                                            Venue</a></li>


                                    <li><i class="fa fa-angle-double-right mr-10 text-theme-colored"></i><a
                                            href="https://conferencenepal.com/events/detail/6/apaccm2022/immigration-visa">Immigration
                                            (VISA)</a></li>


                                    <li><i class="fa fa-angle-double-right mr-10 text-theme-colored"></i><a
                                            href="https://conferencenepal.com/events/detail/6/apaccm2022/accommodation">Accommodation</a>
                                    </li>


                                    <li><i class="fa fa-angle-double-right mr-10 text-theme-colored"></i><a
                                            href="https://conferencenepal.com/events/detail/6/apaccm2022/local-attraction">Local
                                            Attraction</a></li>


                                    <li><i class="fa fa-angle-double-right mr-10 text-theme-colored"></i><a
                                            href="https://conferencenepal.com/events/detail/6/apaccm2022/general-information">General
                                            Information</a></li>


                                    <li><i class="fa fa-angle-double-right mr-10 text-theme-colored"></i><a
                                            href="https://conferencenepal.com/events/detail/6/apaccm2022/contact">Contact</a>
                                    </li>


                                    <li><i class="fa fa-angle-double-right mr-10 text-theme-colored"></i><a
                                            href="https://conferencenepal.com/events/detail/6/apaccm2022/conference-organizer-co-organizers-and-partners">Organizer
                                            and Co-organizer</a></li>


                                    <li><i class="fa fa-angle-double-right mr-10 text-theme-colored"></i><a
                                            href="https://conferencenepal.com/events/detail/6/apaccm2022/sponsors">Partners</a>
                                    </li>


                                    <li><i class="fa fa-angle-double-right mr-10 text-theme-colored"></i><a
                                            href="https://conferencenepal.com/events/detail/6/apaccm2022/downloads">Downloads</a>
                                    </li>


                                    <div id="accordion131" class="panel-group accordion">
                                        <div class="panel">
                                            <div class="panel-title">
                                                <a data-parent="#accordion131" data-toggle="collapse"
                                                    href="#accordion1131" class="" aria-expanded="true"> <span
                                                        class="open-sub"></span> Biography</a>
                                            </div>
                                            <div id="accordion1131" class="panel-collapse collapse" role="tablist"
                                                aria-expanded="true">
                                                <div class="panel-content">
                                                    <li><i
                                                            class="fa fa-angle-double-right mr-10 text-theme-colored"></i><a
                                                            href="https://conferencenepal.com/events/detail/6/apaccm2022/prof-stephen-tee">Prof
                                                            Stephen Tee</a></li>
                                                    <li><i
                                                            class="fa fa-angle-double-right mr-10 text-theme-colored"></i><a
                                                            href="https://conferencenepal.com/events/detail/6/apaccm2022/prof-padam-simkhada">Prof
                                                            Padam Simkhada</a></li>
                                                    <li><i
                                                            class="fa fa-angle-double-right mr-10 text-theme-colored"></i><a
                                                            href="https://conferencenepal.com/events/detail/6/apaccm2022/prof-dr-sujan-babu-marahatta">Prof
                                                            Dr. Sujan Babu Marahatta</a></li>
                                                    <li><i
                                                            class="fa fa-angle-double-right mr-10 text-theme-colored"></i><a
                                                            href="https://conferencenepal.com/events/detail/6/apaccm2022/kapil-dev-regmi">Kapil
                                                            Dev Regmi</a></li>
                                                    <li><i
                                                            class="fa fa-angle-double-right mr-10 text-theme-colored"></i><a
                                                            href="https://conferencenepal.com/events/detail/6/apaccm2022/paul-bissell">Paul
                                                            Bissell</a></li>
                                                    <li><i
                                                            class="fa fa-angle-double-right mr-10 text-theme-colored"></i><a
                                                            href="https://conferencenepal.com/events/detail/6/apaccm2022/dr-francisco-rojas-aravena">Dr.
                                                            Francisco Rojas Aravena</a></li>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</div>
