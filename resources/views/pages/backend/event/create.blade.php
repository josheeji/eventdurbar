@extends('layouts.master')

@section('title', 'Create Events')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Create Events Table
            </h5>
            <a href="{{ url('/admin/events') }}"> <button type="button" class="btn btn-success">Back
                </button> </a>

            {{-- @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif --}}
            <hr>
            <!-- Horizontal Form -->

            @if (session('message'))
                <h6 class="alert alert-success">{{ session('message') }} </h6>
            @endif
            <form class="form-sample" action="/admin/events" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <label for="name" class="col-sm-2 col-form-label">Event Name<span
                            class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Event Name"
                            value="{{ old('name') }}">
                    </div>
                    @error('name')
                        <span class='text-danger'>{{ $message }}</span>
                    @enderror
                </div>


                <div class="row mb-3">
                    <label for="iamge" class="col-sm-2 col-form-label"> Image<span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input type="file" name="image" class="form-control" id="image" placeholder="Event Image"
                            value="{{ old('image') }}">
                    </div>
                    @error('image')
                        <span class='text-danger'>{{ $message }}</span>
                    @enderror
                </div>



                <div class="row mb-3">
                    <label for="organizer_name" class="col-sm-2 col-form-label">Organizer Name<span
                            class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input type="text" name="organizer_name" class="form-control" id="organizer_name"
                            placeholder="Organizer Name" value="{{ old('organizer_name') }}">
                    </div>
                    @error('organizer_name')
                        <span class='text-danger'>{{ $message }}</span>
                    @enderror
                </div>

                <div class="row mb-3">
                    <label for="location" class="col-sm-2 col-form-label">Location<span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input type="text" name="location" class="form-control" id="location" placeholder="Location"
                            value="{{ old('location') }}">
                    </div>
                    @error('location')
                        <span class='text-danger'>{{ $message }}</span>
                    @enderror
                </div>

                <div class="row mb-3">
                    <label for="start_date" class="col-sm-2 col-form-label">Start Date<span
                            class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input type="text" name="start_date" class="form-control" id="start_date"
                            placeholder="Start Date" value="{{ old('start_date') }}">
                    </div>
                    @error('start_date')
                        <span class='text-danger'>{{ $message }}</span>
                    @enderror
                </div>

                <div class="row mb-3">
                    <label for="end_date" class="col-sm-2 col-form-label">End Date<span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input type="text" name="end_date" class="form-control" id="end_date" placeholder="End Date"
                            value="{{ old('end_date') }}">
                    </div>
                    @error('end_date')
                        <span class='text-danger'>{{ $message }}</span>
                    @enderror
                </div>




                <div class="row mb-3">
                    <label for="eventType_id" class="col-sm-2 col-form-label">Event Type<span
                            class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <select id="eventType_id" name="eventType_id" class="custom-select form-control">
                            <option value="">Select Event Type</option>
                            @foreach ($eventTypes as $eventType)
                                <option value="{{ $eventType->id }}">{{ $eventType->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    @error('eventType_id')
                        <span class='text-danger'>{{ $message }}</span>
                    @enderror
                </div>


                <div class="row mb-3">
                    <label for="event_time" class="col-sm-2 col-form-label">Event Time<span class="text-danger">*</span>
                    </label>
                    <div class="col-sm-10">
                        <input type="text" name="event_time" class="form-control" id="event_time"
                            placeholder="Event Starting Time" value="{{ old('event_time') }}">
                    </div>
                    @error('event_time')
                        <span class='text-danger'>{{ $message }}</span>
                    @enderror
                </div>




                <div class="row mb-3">
                    <label for="description" class="col-sm-2 col-form-label">Description<span
                            class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <textarea name="description" id="mySummernote" rows="4" cols="107">{{ old('description') }} </textarea>
                    </div>
                    @error('description')
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
