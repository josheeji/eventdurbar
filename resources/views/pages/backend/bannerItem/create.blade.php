@extends('layouts.app')

@section('title', 'Create Post')

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Create Banner Item </h5>

            <a href="/admin/banners/{{ $banner->id }}/banner-items"> <button type="button" class="btn btn-success">Back
                </button> </a>
            <hr>

            @if (session('message'))
                <h6 class="alert alert-success">{{ session('message') }} </h6>
            @endif
            <form class="form-sample" action="/admin/banners/{{ $banner->id }}/banner-items" method="POST"
                enctype="multipart/form-data">
                @csrf

                <div class="row mb-3">
                    {{-- <label for="banner" class="col-sm-2 col-form-label">Banner</label> --}}
                    <div class="col-sm-10">
                        <input type="hidden" name="banner_id" id="banner_id" value="{{ $banner->id }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="heading" class="col-sm-2 col-form-label">Heading<span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input type="text" name="heading" class="form-control" id="inputText" placeholder="heading"
                            value="{{ old('heading') }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="sub_heading" class="col-sm-2 col-form-label">Sub Heading<span
                            class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input type="text" name="sub_heading" class="form-control" id="inputText"
                            placeholder="sub_heading" value="{{ old('sub_heading') }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="btn_link" class="col-sm-2 col-form-label">Btn Link<span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input type="text" name="btn_link" class="form-control" id="inputText" placeholder="btn_link"
                            value="{{ old('btn_link') }}">
                    </div>
                </div>


                <div class="row mb-3">
                    <label for="image" class="col-sm-2 col-form-label">Image<span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input type="file" name="image" class="form-control" id="image" placeholder="Upload Image"
                            value="{{ old('image') }}">
                    </div>
                    @error('image')
                        <span class='text-danger'>{{ $message }}</span>
                    @enderror
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Short Descrioption<span class="text-danger">*</span></label>
                    <div class="col-sm-10">

                        <textarea id="mySummernote" name="short_description" id="editor">{{ old('short_description') }} </textarea>
                    </div>
                </div>
                <br>
                <button type="submit" id="submit_form" class="btn btn-primary btn-fw">Submit</button>

            </form><!-- End Horizontal Form -->
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        ClassicEditor

            .create(document.querySelector('#short_description'))
            .then(editor => {
                style = "width: 100%; height: 500px;"

                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });

        CKEDITOR.replace('editor');
    </script>


@endsection
