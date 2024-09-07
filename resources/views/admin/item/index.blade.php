@extends('layouts.app')

@section('title', 'Item')

    @push('css')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">

    @endpush

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('item.create') }}" class="btn btn-primary">Add New Item</a>
                    @include('layouts.partial.msg')
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">All Item</h4>
                            {{-- <p class="card-category"> Here is a subtitle for this table
                            </p> --}}
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="table" class="table table-striped table-bordered">
                                    <thead class=" text-primary">
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Image</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                        <th>Created At</th>
                                        <th>Updated At</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($items as $key => $item)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->category->name }}</td>
                                                <td><img src="{{ asset('uploads/item/'.$item->image) }}" alt="Slide Example" style="max-height: 70px; max-width:120px"></td>
                                                <td>{{ $item->description }}</td>
                                                <td>{{ $item->price }}</td>
                                                <td>{{ $item->created_at }}</td>
                                                <td>{{ $item->updated_at }}</td>
                                                <td>
                                                    <a href="{{ route('item.edit', $item->id) }}"
                                                        class="btn btn-info btn-sm"><i class="material-icons">edit</i></a>
                                                    <form id="delete-form-{{ $item->id }}"
                                                        action="{{ route('item.destroy', $item->id) }}" method="POST"
                                                        style="display: none">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                    {{-- Delete Button --}}
                                                    <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are You Sure? Want to delete This?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $item->id }}').submit();
                                                    }else{
                                                        event.preventDefault();
                                                    }"><i class="material-icons">delete</i></button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('script')

    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        });

    </script>

@endpush
