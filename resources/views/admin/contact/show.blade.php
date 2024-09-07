@extends('layouts.app')

@section('title', 'Item Show')

@push('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
@endpush

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12"></div>
            @include('layouts.partial.msg')
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">{{ $contact->subject}}</h4>
                </div>
                <div class="card-body">
                    <div class="row container">
                        <div class="col-sm-3 text-center border border-primary h2">Name {{-- {{ $contact->name }} --}}</div>
                        <div class="col-sm-3 text-center border border-primary h2">E-mail {{-- {{ $contact->email }} --}}</div>
                        <div class="col-sm-6 text-center border border-primary h2">Message {{-- <p>{{ $contact->message }}</p> --}}</div>
                    </div>

                    <div class="row container  mb-3">
                        <div class="col-sm-3 text-center border border-primary font-weight-bold">{{ $contact->name }}</div>
                        <div class="col-sm-3 text-center border border-primary font-weight-bold">{{ $contact->email }}</div>
                        <div class="col-sm-6 text-center border border-primary"><p class="text-monospace text-justify">{{ $contact->message }}</p></div>
                    </div>
                    <a href="{{route('contact.index')}}" class="btn btn-danger">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection

@push('script')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>

@endpush
