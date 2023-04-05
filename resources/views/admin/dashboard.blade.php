@extends('layouts.master')

@section('content')

@endsection
















{{-- this code is used for storing the value in dynamic form --}}
{{-- @section('content')

    <div class="col-lg-12">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">
                </h5>
                <form class="form-sample" action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    @foreach ($data as $key => $item)
                        @if ($item['type'] == 'number')
                            <div class="row mb-3">
                                <label for="sub_title" class="col-sm-2 col-form-label">{{ $item['label'] }}<span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="{{ $item['type'] }}" name="{{ $item['name'] }}" class="form-control"
                                        id="{{ $item['id'] }}" placeholder="{{ $item['placeholder'] }}">
                                </div>
                            </div>
                        @endif

                        @if ($item['type'] == 'text')
                            <div class="row mb-3">
                                <label for="sub_title" class="col-sm-2 col-form-label">{{ $item['label'] }}<span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="{{ $item['type'] }}" name="{{ $item['name'] }}" class="form-control"
                                        id="{{ $item['id'] }}" placeholder="{{ $item['placeholder'] }}">
                                </div>
                            </div>
                        @endif

                        @if ($item['type'] == 'select')
                            <div class="row mb-3">
                                <label for="sub_title" class="col-sm-2 col-form-label">{{ $item['label'] }}<span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <select id="{{ $item['id'] }}" name="{{ $item['name'] }}"
                                        class="custom-select form-control">
                                        <option value="">Select a Option</option>
                                        
                                   </select>
                                </div>
                            </div>
                        @endif

                        @if ($item['type'] == 'check')
                            <div class="row mb-3">
                                <label for="sub_title" class="col-sm-2 col-form-label">{{ $item['label'] }}<span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <select id="{{ $item['id'] }}" name="{{ $item['name'] }}"
                                        class="custom-select form-control">
                                        <option value="">Select a Option</option>
                                        <option value="volvo">Volvo</option>
                                        <option value="saab">Saab</option>
                                        <option value="fiat">Fiat</option>

                                    </select>
                                </div>
                            </div>
                        @endif
                    @endforeach
                    <div class="col-md-3 mb-3">
                        <button type="submit" id="submit_form" class="btn btn-primary btn-fw">Submit</button>

                    </div>


                </form>


            </div>

        </div>
    </div>
@endsection --}}