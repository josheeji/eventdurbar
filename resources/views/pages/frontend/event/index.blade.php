@extends('layouts.frontend.inc.master')

@section('content')
    <div class="wrapper">
        <div class="main-content">
            <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-stellar-background-ratio="0.5"
                data-bg-img="https://conferencenepal.com/images/bg11.jpg">
                <div class="container pt-2 pb-0">
                    <!-- Section Content -->
                    <div class="section-content pt-2">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="title text-white">Download Certificate</h2>
                            </div>
                            {{-- <div class="col-md-12" style="display:none">
                                <ol class="breadcrumb text-center mt-10 white">
                                    <li><a href="https://conferencenepal.com/home">Home</a></li>
                                    <li class="active">5th National Conference of SIMON Certificate Download</li>
                                </ol>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </section>

           
            <!-- Section: Past Events -->

            {{-- <section style="min-height:500px;"> --}}

            <div class="container pb-50 pt-500">
                <ol>
                    <h3>{{ $events->name }}</h3>
                </ol>

                <div class="section-content">
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="myDataTable" role="grid" aria-describedby="table_info"
                                class="table table-striped table-hover table-hover table-schedule dataTable no-footer">
                                <thead>
                                    <tr>
                                        <th scope="col">S.No.</th>
                                        <th scope="col">Full Name</th>
                                        <th scope="col">Event Name</th>
                                        <th scope="col">Participant Type</th>
                                        <th scope="col">Download</th>

                                    </tr>
                                </thead>

                                <tbody>

                                    @php $i = 1 @endphp

                                    @foreach ($participants as $participant)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $participant->name }}</td>
                                            <td>{{ $participant->event->name }}</td>
                                            <td>{{ $participant->participantType->name }}</td>

                                            <td class="text-center">
                                                <a title="Download PDF"
                                                    href="/admin/participants/{{ $participant->id }}/download-pdf"
                                                    class="btn btn-primary" class="bi bi-arrow-down-circle-fill"><i
                                                        class="bi bi-arrow-down-circle-fill"></i></a>

                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>

                            </table>
                            <a href="{{ url('/home') }}"> <button type="button" class="btn btn-success">Back
                                </button> </a>
                        </div>
                    </div>
                </div>

            </div>
        @endsection
