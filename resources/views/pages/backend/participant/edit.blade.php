@extends('layouts.master')

@section('title', 'Create Participant')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Create Participant Table
            </h5>
            <a href="{{ url('/admin/participants') }}"> <button type="button" class="btn btn-success">Back
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
            <form class="form-sample" action="/admin/participants/{{ $participant->id }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row mb-3">
                    <label for="name" class="col-sm-2 col-form-label">Participant Name<span
                            class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" id="name"
                            placeholder="Participant Name" value="{{ old('name') ?? $participant->name }}">
                    </div>
                    @error('name')
                        <span class='text-danger'>{{ $message }}</span>
                    @enderror
                </div>

                <div class="row mb-3">
                    <label for="affilated_institute" class="col-sm-2 col-form-label">Affilated Institute<span
                            class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input type="text" name="affilated_institute" class="form-control" id="affilated_institute"
                            placeholder="Affilated Institute"
                            value="{{ old('affilated_institute') ?? $participant->affilated_institute }}">
                    </div>
                    @error('affilated_institute')
                        <span class='text-danger'>{{ $message }}</span>
                    @enderror
                </div>

                <div class="row mb-3">
                    <label for="post" class="col-sm-2 col-form-label">Post<span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input type="text" name="post" class="form-control" id="post" placeholder="Post"
                            value="{{ old('post') ?? $participant->post }}">
                    </div>
                    @error('post')
                        <span class='text-danger'>{{ $message }}</span>
                    @enderror
                </div>

                <div class="row mb-3">
                    <label for="event_id" class="col-sm-2 col-form-label">Event<span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <select id="event_id" name="event_id" class="custom-select form-control">
                            <option value="">Select Event</option>
                            @foreach ($events as $event)
                                <option
                                    value="{{ $event->id }}"{{ $event->id == $participant->event_id ? 'selected' : '' }}>
                                    {{ $event->name }}
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
                                <option
                                    value="{{ $participantType->id }}"{{ $participantType->id == $participant->participantType_id ? 'selected' : '' }}>

                                    {{ $participantType->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    @error('participantType_id')
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
