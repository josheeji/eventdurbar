@php
    use App\Contracts\AbstractInputFile;
    $inputTypes = AbstractInputFile::toArray();
    
@endphp
{{-- {{$inputTypes}} --}}

@extends('layouts.master')

@section('title', 'Create Custom Field')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Create Custom Field
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

                <table id="myDataTable" class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Label</th>
                            <th scope="col">Type</th>
                            <th scope="col">Name</th>
                            <th scope="col">Placeholder </th>
                            <th scope="col">ID </th>
                            <th class="text-center" width="170">Action</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>
                            <td>
                                {{-- <label for="label"> Label </label> --}}
                                <input type="text" name="label" id="label" placeholder="label" value=""
                                    class="custom-select form-control">

                            </td>
                            <td>
                                {{-- <label for="type"> Type </label> --}}
                                <select name="input_field" aria-placeholder="Select Input Type"
                                    class="col-sm-10 col-form-label">
                                    @foreach (AbstractInputFile::toArray() as $value => $label)
                                        <option value="<?= $value ?>"><?= $label ?></option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                {{-- <label for="name"> Name </label> --}}
                                <input type="text" name="name" id="name" placeholder="name" value=""
                                    class="col-sm-10 col-form-label">
                            </td>
                            <td>
                                {{-- <label for="placeholder"> Placeholder </label> --}}
                                <input type="text" name="placeholder" id="placeholder" placeholder="placeholder"
                                    value="" class="col-sm-10 col-form-label">
                            </td>
                            <td>
                                {{-- <label for="id"> ID </label> --}}
                                <input type="text" name="id" id="id" placeholder="id" value=""
                                    class="col-sm-10 col-form-label">
                            </td>
                            <td>

                            </td>
                        </tr>
                    </tbody>
                </table>




            </form>
        </div>

        <!-- End Horizontal Form -->
    </div>
@endsection
