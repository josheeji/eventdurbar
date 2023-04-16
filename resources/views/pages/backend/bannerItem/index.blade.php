@extends('layouts.app')
@section('title', 'Banner Item Table')

@section('content')

    <!--  Delete Modal -->
    <div class="modal fade" id="deleteBannerItemModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                {{-- <form action={{ '/admin/banners/' }} method="POST" id="delete_form"> --}}
                <form action={{ '/admin/banners/' }} method="POST" id="delete_form">
                    @csrf
                    @method('delete')
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Banner</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="banner_delete_id" id="delete_banner_id">
                        <h5>Are you sure, you want to delete this Banner ?</h5>
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
                <h5 class="card-title">Banner Item Table

                </h5>

                <!-- Default Table -->
                @if (session('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                @endif
                <div class="card-body">
                    <a href="/admin/banners/{{ $banner->id }}/banner-items/create" class="btn btn-primary btn-sm">
                        <h6>Add New Banner Item</h6>
                    </a>
                    <a href="/admin/banners/" class="btn btn-primary btn-sm btn-dark">
                        <h6>Back</h6>
                    </a>
                    <hr>
                    <table id="myDataTable" class="table table-bordered">
                        <thead>
                            <tr>
                                <th width="150">S. No.</th>

                                <th scope="col">Heading</th>

                                <th scope="col">Btn Link</th>

                                <th scope="col"> Short Discription</th>

                                <th scope="col"> Image</th>

                                <th class="text-center" width="200">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i=1 @endphp

                            @foreach ($bannerItems as $bannerItem)
                                <tr>
                                    <td>{{ $i++ }} </td>
                                    <td>{{ $bannerItem->heading }}</td>
                                    <td>{{ $bannerItem->btn_link }}</td>
                                    <td>{{ $bannerItem->short_description }}</td>

                                    <td>
                                        <img src="/backend_assets/images/banners/{{ $bannerItem->image }}" width="70px"
                                            height="70px">
                                    </td>

                                    <td class="text-center">
                                        <a title="Edit"
                                            href="/admin/banners/{{ $banner->id }}/banner-items/{{ $bannerItem->id }}/edit"
                                            class="btn btn-icon btn-circle btn-light"><i class="bi bi-pencil"></i></a>

                                        {{-- <a title="Delete"
                                            href="/admin/banners/{{ $banner->id }}/banner-items/{{ $bannerItem->id }}/edit"
                                            class="btn btn-icon btn-danger btn-circle delete"><i
                                                class="bi bi-trash-fill"></i></a> --}}

                                        {{-- <button title="Delete" type="submit"
                                            class="btn btn-icon btn-danger btn-circle delete deleteBannerItemBtn"
                                            value="{{ $bannerItem->id }}"><i class="bi bi-trash-fill"></i></button> --}}


                                        <button title="Delete" type="submit"
                                            class="btn btn-icon btn-danger btn-circle delete deleteBannerItemBtn"
                                            value="{{ $bannerItem->id }}" data-banner-id="{{ $banner->id }}"
                                            data-banner-item-id="{{ $bannerItem->id }}"><i
                                                class="bi bi-trash-fill"></i></button>
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
            $('.deleteBannerItemBtn').click(function(e) {
                e.preventDefault();

                var bannerItem_id = $(this).val();
                // $('#delete_event_id').val(event_id);

                $('#delete_form').attr('action', '/admin/banners/'.$id. +
                    '/menu-items' + bannerItem_id);
                // $('#delete_form').attr('action', '/admin/banners/' + banner_id);
                $('#deleteModal').modal('show');
            });
        });
    </script>
    {{-- 
    <script>
        $(document).ready(function() {
            // Attach a click event handler to the delete button
            $('.deleteBannerItemBtn').click(function() {
                // Get the ID of the banner to which the banner item belongs
                var bannerId = $(this).val();

                // Get the ID of the banner item to be deleted
                // var bannerItemId = $('#banner-item-id').val();

                // Show the confirmation modal
                $('#deleteModal').modal('show');

                // Attach a click event handler to the modal's confirm button
                $('#deleteModal').click(function() {
                    // Hide the modal
                    $('#deleteModal').modal('hide');

                    // Send a DELETE request to the server
                    $.ajax({
                        url: '/admin/banners/' + bannerId + '/banner-items/' + bannerItemId,
                        type: 'DELETE',
                        success: function(result) {
                            // Handle the successful response from the server
                            console.log(result);
                        },
                        error: function(xhr, status, error) {
                            // Handle the error response from the server
                            console.log(error);
                        }
                    });
                });
            });
        });
    </script> --}}



@endsection
