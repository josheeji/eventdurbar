@extends('layouts.master')

@section('title', 'Create Participant Types')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Create Participant Types Table
            </h5>
            <a href="{{ url('/admin/event-types') }}"> <button type="button" class="btn btn-success">Back
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
            <form class="form-sample" action="/admin/participant-types/{{$participantType->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row mb-3">
                    <label for="name" class="col-sm-2 col-form-label">Name<span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Event Type Name" 
                            value="{{ old('name') ?? $participantType->name }}">
                    </div>
                    @error('name')
                        <span class='text-danger'>{{ $message }}</span>
                    @enderror
                </div>


                <div class="col-md-3 mb-3">
                    <button type="submit" id="submit_form" class="btn btn-primary btn-fw">Submit</button>

                </div>
                <br>

            </form>
            <!-- End Horizontal Form -->
        </div>
    </div>
@endsection
