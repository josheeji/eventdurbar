<section style="min-height:500px;">

    <div class="divider">
        <div class="container pb-50 pt-50">
            <div class="section-content">
                <div style="font-size: 22px; color:#111; margin-bottom: 15px; font-weight: bold;">5th National Conference
                    of SIMON</div>
                <div id="table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="dataTables_length" id="table_length"><label>Show <select name="table_length"
                                        aria-controls="table" class="form-control input-sm">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select> entries</label></div>
                        </div>
                        <div class="col-sm-6">
                            <div id="table_filter" class="dataTables_filter"><label>Search:<input type="search"
                                        class="form-control input-sm" placeholder="" aria-controls="table"></label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table
                                class="table table-striped table-hover table-hover table-schedule dataTable no-footer"
                                border="0" id="table" role="grid" aria-describedby="table_info">
                                <thead>
                                    <tr role="row">
                                        <thead>
                                            <tr>
                                                <th class="text-center">S.No.</th>
                                                <th class="text-center">Full Name</th>
                                                <th class="text-center">Event Name</th>
                                                <th class="text-center">Participant Type</th>
                                                <th class="text-center">Download</th>

                                            </tr>
                                        </thead>
                                    </tr>
                                </thead>
                                <tbody>
                                <tbody>
                                    @foreach ($participants as $participant)
                                        <tr>
                                            <td>{{ $participant->id }}</td>
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
                        </div>
                    </div>

                </div>


            </div>
        </div>

    </div>
</section>

{{-- html adn csss code for image to make index.php file --}}
<!DOCTYPE html>
<html>

<head>
    <style>
        @page {
            margin: 0px;
            padding: 0px;
        }

        body {
            margin: 0px;
            max-width: 1000px;
        }

        img {
            max-width: 900px;
        }
    </style>
</head>

<body>
    <div class="">
        <img class="" src="{{ $resourcePath }}/Aakriti Pokharel-pdf.png" />
        <h1 style="position: absolute; top: 360px; left: 430px">
            {{ $participant->name }}
        </h1>
        <h1 style="position: absolute; top: 400px; left: 430px">
            {{ $participant->participantType->name }}
        </h1>
    </div>
</body>

</html>

{{-- testing --}}
<div class="col-sm-6 col-md-4 col-lg-4">
    <div class="schedule-box maxwidth500 mb-30 bg-lighter">

        <div class="thumb"> <img src="https://conferencenepal.com/uploads/media/banner_LQgpyFLpCZerSHdP9lNh.jpeg">
        </div>

        <div class="schedule-details clearfix p-15 pt-10">
            <h5 class="font-16 title"><a href="https://conferencenepal.com/events/detail/6/apaccm2022">APACCM2022</a>
            </h5>
            <ul class="list-inline font-11 mb-20">
                <li><i class="fa fa-calendar mr-5"></i>2022-12-04</li>
                <li><i class="fa fa-map-marker mr-5"></i>Kathmandu</li>
            </ul>
            <p>
                aa </p>
            <div class="mt-10">
                <a class="btn btn-colored btn-theme-colored btn-sm"
                    href="https://conferencenepal.com/downloads/certificates/event/6">Download Certificate</a>
                <a class="btn btn-colored btn-theme-colored btn-sm"
                    href="https://conferencenepal.com/events/detail/6/apaccm2022">Details</a>
            </div>
        </div>
    </div>
</div>



{{-- detail --}}



