@extends('layouts.main')

@section('content')
    <div class="card mt-5 mb-5 text-center">
        <h5 class="card-header">Data Buku</h5>
        <div class="card-body">
            <table class="table table-striped">
                <tr>
                    <th>ISBN</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Author</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
                
                @foreach($books as $book)
                <tr>
                    <td>{{ $book->isbn }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->category->name }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->price }}</td>
                    <td>
                        <a class="btn btn-outline-primary btn-sm" href="/book/edit/{{ $book->isbn }}">Edit</a>
                        <a class="btn btn-danger btn-sm" href="/book/delete/{{ $book->isbn }}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </table>
            <br />
            <a href="/book/create" class="btn btn-outline-success">+ Tambah Buku Baru</a>
        </div>
    </div>
@endsection
