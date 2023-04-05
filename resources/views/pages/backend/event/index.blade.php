@extends('layouts.app')
@section('title', 'Events Table')

@section('content')

    <!--  Delete Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <form action={{ '/admin/events' }} method="POST" id="delete_form">
                    @csrf
                    @method('delete')
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Event</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="event_delete_id" id="delete_event_id">
                        <h5>Are you sure, you want to delete this category ?</h5>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Yes, delete it</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- End Delete Modal -->


    <div class="col-lg-12">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">EventS Table

                </h5>

                <!-- Default Table -->
                @if (session('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                @endif
                <div class="card-body">
                    <a href="/admin/events/create" class="btn btn-primary btn-sm">
                        <h6>Add New Event</h6>
                    </a>
                    <hr>
                    <table id="myDataTable" class="table table-bordered">
                        <thead>
                            <tr>

                                <th scope="col">S.No.</th>
                                <th scope="col">Name</th>
                                <th scope="col">Organizer Name</th>
                                <th scope="col">Location</th>
                                <th scope="col">Event Type</th>
                                <th scope="col">Image</th>
                                {{-- <th scope="col">Event Template</th> --}}
                                <th scope="col">Start Date</th>
                                <th scope="col">End Date</th>

                                <th scope="col">Event start Time</th>

                                {{-- <th scope="col">Description</th>
                                <th scope="col">Certificate Template</th> --}}


                                <th class="text-center" width="170">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @php $i=1 @endphp

                            @foreach ($events as $event)
                                <tr>
                                    <td>{{ $i++ }} </td>
                                    <td>{{ $event->name }}</td>

                                    <td>{{ $event->organizer_name }}</td>
                                    <td>{{ $event->location }}</td>
                                    <td>{{ $event->eventType->name }}</td>
                                    {{-- <td>{{ $event->image }}</td> --}}
                                    <td>
                                        <img src="/backend_assets/images/events/{{ $event->image }}" width="80px" height="80px">

                                    </td>
                                    {{-- <td>{{ $event->eventTemplate->template_name }}</td> --}}

                                    <td>{{ $event->start_date }}</td>
                                    <td>{{ $event->end_date }}</td>
                                    {{-- <td>{{ $event->event_time }}</td> --}}
                                    <td> {{ \Carbon\Carbon::parse($event->event_time)->tz('Asia/Kathmandu')->format('h:i A') }}
                                    </td>

                                    {{-- <td>{{\Carbon\Carbon::create(2023, 03, 31, 15, 0, 0, 'UTC')->timezone('Asia/Kathmandu');}} </td> --}}


                                    <td class="text-center">
                                        <a title="Edit" href="/admin/events/{{ $event->id }}/edit"
                                            class="btn btn-icon btn-circle btn-light"><i class="bi bi-pencil"></i></a>

                                        {{-- <a title="Delete" href="/admin/events/{{ $event->id }}" 
                                            class="btn btn-icon btn-danger btn-circle delete"><i
                                                class="bi bi-trash-fill"></i></a> --}}

                                        <button title="Delete" type="button"
                                            class="btn btn-icon btn-danger btn-circle delete deleteEventBtn"
                                            value="{{ $event->id }}"><i class="bi bi-trash-fill"></i></button>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>

                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('scripts')

    <script>
        $(document).ready(function() {
            $('.deleteEventBtn').click(function(e) {
                e.preventDefault();

                var event_id = $(this).val();
                // $('#delete_event_id').val(event_id);

                $('#delete_form').attr('action', '/admin/events/' + event_id);
                $('#deleteModal').modal('show');


            });
        });
    </script>


@endsection
