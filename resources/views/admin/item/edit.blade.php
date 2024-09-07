@extends('layouts.app')

@section('title', 'Item Edit')

    @push('css')

    @endpush

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Edit Item</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('item.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                             <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating" >Category: </label>
                                        <select class="form-control"  name="category">
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                        {{-- <input type="text" name="category"
                                            class="form-control"> --}}
                                    </div>
                                </div>
                            </div>

                            {{-- Name --}}
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Name</label>
                                        <input type="text" class="form-control" name="name" value="{{ $item->name }}">
                                    </div>
                                </div>
                            </div>

                            {{-- Description --}}
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Description</label>
                                        <textarea class="form-control" name="description">{{ $item->description }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Price</label>
                                        <input type="text" class="form-control" name="price" value="{{ $item->price }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <label class="bmd-label-floating">Image</label>
                                    <input type="file" name="image">
                                </div>
                            </div>
                            <a href="{{ route('item.index') }}" class="btn btn-primary">Back</a>
                            <button type="submit" class="btn btn-info">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection

@push('script')

@endpush
