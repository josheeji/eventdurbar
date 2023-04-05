@extends('layouts.app')
@section('title', 'Participant Type')

@section('content')
    <!--  Delete Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <form action={{ '/admin/participant-types' }} method="POST" id="delete_form">
                    @csrf
                    @method('delete')
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Event</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="participantType_delete_id" id="delete_participantType_id">
                        <h5>Are you sure, you want to delete this Participant Type ?</h5>
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
                <h5 class="card-title">Participant Type Table

                </h5>

                <!-- Default Table -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    </div>
                @endif
                @if (session('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                @endif

                <div class="card-body">
                    <a href="/admin/participant-types/create" class="btn btn-primary btn-sm">
                        <h6>Add New Participant Type</h6>
                    </a>
                    <hr>
                    <table id="myDataTable" class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" width="100">S.No.</th>
                                <th scope="col">Name</th>
                                <th class="text-center" width="220">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @php $i=1 @endphp
                            @foreach ($participantTypes as $participantType)
                                <tr>
                                    <td>{{ $i++ }} </td>
                                    <td>{{ $participantType->name }} </td>
                                    <td class="text-center">
                                        <a title="Edit" href="/admin/participant-types/{{ $participantType->id }}/edit"
                                            class="btn btn-icon btn-circle btn-light"><i class="bi bi-pencil"></i></a>
                                        {{-- <a title="Delete" href="admin/event-types/{{ $participantType->id }}"
                                        class="btn btn-icon btn-danger btn-circle delete"><i
                                            class="bi bi-trash-fill"></i></a> --}}

                                        <button title="Delete" type="button"
                                            class="btn btn-icon btn-danger btn-circle delete deleteparticipantTypeBtn"
                                            value="{{ $participantType->id }}"><i class="bi bi-trash-fill"></i></button>


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
            $('.deleteparticipantTypeBtn').click(function(e) {
                e.preventDefault();

                var participantType_id = $(this).val();
                $('#delete_participantType_id').val(participantType_id);

                $('#delete_form').attr('action', '/admin/participant-types/' + participantType_id);
                $('#deleteModal').modal('show');


            });
        });
    </script>


@endsection
