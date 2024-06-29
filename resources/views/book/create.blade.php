@extends('layouts.main')

@section('content')
<div class="card mt-4 mb-4">
    <h6 class="card-header">Tambah Data Buku</h6>
    <div class="card-body">
        <form action="/book/store" method="POST" autocomplete="on">
            @csrf
            <div class="form-group">
                <label for="isbn">ISBN: </label>
                <input type="text" class="form-control" id="isbn" name="isbn" value="{{ old('isbn', $book->isbn) }}">
                @error('isbn')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <br/>
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $book->title) }}">
                @error('title')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <br/>
            <div class="form-group">
                <label for="category">Category:</label>
                <select name="categoryid" id="categoryid" class="form-control" required>
                    <option value="none" disabled>--Pilih category buku--</option>
                    <option value="1">Komputer</option>
                    <option value="2">Fiksi</option>
                    <option value="3">Design</option>
                    <option value="4">Anak</option>
                    <option value="5">Cerita</option>
                </select>
                @error('categoryid')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <br/>
            <div class="form-group">
                <label for="author">Author:</label>
                <input type="text" class="form-control" id="author" name="author" value="{{ old('author', $book->author) }}">
                @error('author')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <br/>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ old('price', $book->price) }}">
                @error('price')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <br/>
            <div class="text-left">
                <div class="gap">
                    <button type="submit" class="btn btn-success" name="submit" value="submit">Submit</button>
                    <a href="/book" class="btn btn-outline-secondary">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection