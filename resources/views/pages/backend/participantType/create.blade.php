@php
    use App\Contracts\AbstractInputFile;
    $inputTypes = AbstractInputFile::toArray();
@endphp
@extends('layouts.master')

@section('title', 'Create Participant Type')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Create Participant Type Table
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
            <form class="form-sample" action="/admin/participant-types" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <label for="name" class="col-sm-2 col-form-label">Participant Type Name<span
                            class="text-danger">*</span></label>
                    <div class="col-sm-6">
                        <input type="text" name="name" class="form-control" id="name"
                            placeholder="Participant Name" value="{{ old('name') }}">
                    </div>
                    @error('name')
                        <span class='text-danger'>{{ $message }}</span>
                    @enderror
                </div>


                <div id="custom_fields_table" style="display;">
                    <div class="row mb-3">
                        <table class="table table-bordered mt-6">
                            <thead>
                                <tr>
                                    <th scope="col">Label</th>
                                    <th scope="col">Name</th>

                                    <th scope="col">Type</th>
                                    <th></th>
                                    <th scope="col">Tags </th>
                                    {{-- <th>+</th> --}}


                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <input type="text" name="label" id="label" placeholder="label"
                                            value="" class="custom-select form-control">

                                    </td>

                                    <td>
                                        <input type="text" name="event_type_name" id="event_name"
                                            placeholder="Event Type Name" value="" class="custom-select form-control">
                                    </td>

                                    <td>
                                        <select name="input_field" aria-placeholder="Select Input Type"
                                            class="custom-select form-control">
                                            @foreach (AbstractInputFile::toArray() as $value => $label)
                                                <option value="<?= $value ?>"><?= $label ?></option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="mandatory">Is it mandatory?</label>
                                            <input type="checkbox" id="mandatory" name="mandatory" value="1">
                                        </div>
                                    </td>


                                    <td>
                                        <input type="text" name="tags" class="form-control" data-role="tagsinput">
                                    </td>
                                </tr>
                            </tbody>

                        </table>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <button type="submit" id="submit_form" class="btn btn-primary btn-fw">Submit</button>

                </div>

            </form>
        </div>

        <!-- End Horizontal Form -->
    </div>
@endsection
