@extends('layouts.app')
@section('title', 'Banner Item Table')

@section('content')

    <!--  Delete Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

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

                                        <a title="Delete"
                                            href="/admin/banners/{{ $banner->id }}/banner-items/{{ $bannerItem->id }}/edit"
                                            class="btn btn-icon btn-danger btn-circle delete"><i
                                                class="bi bi-trash-fill"></i></a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>

                        {{-- 'image', 'btn_link', 'heading',
                        'sub_heading', 'short_description', 'banner_id' --}}

                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('scripts')

    <script>
        $(document).ready(function() {
            $('.deleteBannerBtn').click(function(e) {
                e.preventDefault();

                var banner_id = $(this).val();
                // $('#delete_event_id').val(event_id);

                $('#delete_form').attr('action', '/admin/banners/' + banner_id);
                $('#deleteModal').modal('show');
            });
        });
    </script>
@endsection
