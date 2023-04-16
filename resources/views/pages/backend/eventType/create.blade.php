@php
    use App\Contracts\AbstractInputFile;
    $inputTypes = AbstractInputFile::toArray();
@endphp

@extends('layouts.app')

@section('title', 'Create Event Types')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Create Event Types
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

            {{-- <a href="" class="btn btn-primary btn-fw" class="col-md-3 mb-3" id="add_row_btn">Add Custom
            Field</a> --}}

            <form class="form-sample" action="/admin/event-types" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <label for="name" class="col-sm-2 col-form-label">Name<span class="text-danger">*</span></label>
                    <div class="col-sm-5">
                        <input type="text" name="name" class="form-control" id="name"
                            placeholder="Event Type Name" value="{{ old('name') }}">
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
                                    <th>Required</th>
                                    <th scope="col">Options </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <input type="text" name="custom_fields[][label]" id="label"
                                            placeholder="Field label" value="" class="custom-select form-control">

                                    </td>

                                    <td>
                                        <input type="text" name="event_type_name" id="event_name"
                                            placeholder="Event Field Name" value=""
                                            class="custom-select form-control">
                                    </td>

                                    <td>
                                        <select name="custom_fields[][input_field]" aria-placeholder="Select Input Type"
                                            class="custom-select form-control">
                                            @foreach (AbstractInputFile::toArray() as $value => $label)
                                                <option value="<?= $value ?>"><?= $label ?></option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="custom_fields[][mandatory]">Is it mandatory?</label>
                                            <input type="checkbox" id="mandatory" name="mandatory" value="1">
                                        </div>
                                    </td>
                                    <td>
                                        <input type="text" name="custom_fields[][options]" class="form-control"
                                            data-role="tagsinput">
                                    </td>
                                </tr>
                            </tbody>

                        </table>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <button type="submit" id="submit_form" class="btn btn-primary">Submit</button>

                </div>

            </form>

            <!-- End Horizontal Form -->
        </div>
    </div>
@section('scripts')
    <script>
        $(document).ready(function() {
            $("#add_row_btn").click(function() {
                $("#custom_fields_table").toggle();
            });
        });
    </script>
@endsection

@endsection
