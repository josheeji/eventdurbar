@extends('layouts.app')

@section('title', 'Create Events')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Create Events Template
            </h5>
            <a href="{{ url('/admin/event-templates') }}"> <button type="button" class="btn btn-success">Back
                </button> </a>

            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif
            <hr>
            <!-- Horizontal Form -->

            @if (session('message'))
                <h6 class="alert alert-success">{{ session('message') }} </h6>
            @endif
            <form class="form-sample" action="/admin/event-templates" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <label for="template_name" class="col-sm-2 col-form-label">Template Name<span
                            class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input type="text" name="template_name" class="form-control" id="template_name"
                            placeholder="Event  Template Name" value="{{ old('template_name') }}">
                    </div>
                    @error('template_name')
                        <span class='text-danger'>{{ $message }}</span>
                    @enderror
                </div>



                <div class="row mb-3">
                    <label for="url" class="col-sm-2 col-form-label">HTML File<span
                            class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input type="file" name="url" class="form-control" id="url" placeholder="Upload url"
                            value="{{ old('url') }}">
                    </div>
                    @error('url')
                        <span class='text-danger'>{{ $message }}</span>
                    @enderror
                </div>

                <div class="row mb-3">
                    <label for="template_files" class="col-sm-2 col-form-label">Template Files</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" id="template_files" name="template_files[]" multiple
                            value="{{ old('template_files') }}">
                    </div>
                    @error('template_files')
                        <span class='text-danger'>{{ $message }}</span>
                    @enderror
                </div>

                <div class="row mb-3">
                    <label for="event_id" class="col-sm-2 col-form-label">Event<span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <select id="event_id" name="event_id" class="custom-select form-control">
                            <option value="">Select Event</option>
                            @foreach ($events as $event)
                                <option value="{{ $event->id }}">{{ $event->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    @error('event_id')
                        <span class='text-danger'>{{ $message }}</span>
                    @enderror
                </div>

                <div class="row mb-3">
                    <label for="participantType_id" class="col-sm-2 col-form-label">Participant Type<span
                            class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <select id="participantType_id" name="participantType_id" class="custom-select form-control">
                            <option value="">Select Participant Type</option>
                            @foreach ($participantTypes as $participantType)
                                <option value="{{ $participantType->id }}">{{ $participantType->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    @error('participantType_id')
                        <span class='text-danger'>{{ $message }}</span>
                    @enderror
                </div>


                <div class="row mb-3">
                    <label for="template_height" class="col-sm-2 col-form-label">Template Height</label>
                    <div class="col-sm-10">
                        <input type="text" name="template_height" class="form-control" id="template_height"
                            placeholder="Template Height" value="{{ old('template_height') }}">
                    </div>
                    @error('template_height')
                        <span class='text-danger'>{{ $message }}</span>
                    @enderror
                </div>

                <div class="row mb-3">
                    <label for="template_width" class="col-sm-2 col-form-label">Template Width</label>
                    <div class="col-sm-10">
                        <input type="text" name="template_width" class="form-control" id="template_width"
                            placeholder="Template Width" value="{{ old('template_width') }}">
                    </div>
                    @error('template_width')
                        <span class='text-danger'>{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-md-3 mb-3">
                    <button type="submit" id="submit_form" class="btn btn-primary btn-fw">Submit</button>

                </div>

            </form>
        </div>

        <!-- End Horizontal Form -->
    </div>

@endsection
