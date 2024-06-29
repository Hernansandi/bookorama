@extends('layouts.main')

@section('content')
    <div class="card mt-5 mb-5">
        <h5 class="card-header">Edit Buku</h5>
        <div class="card-body">
            <form action="/book/{{ $book->isbn }}" method="POST">
                @method('put')
                @csrf
                
                <div class="form-group">
                    <label for="isbn">ISBN</label>
                    <input type="text" class="form-control" id="isbn" name="isbn" value="{{ old('isbn', $book->isbn) }}" readonly>
                </div>
                <br/>
                <div class="form-group">
                    <label for="title">Title</label>
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
                        <option value="1" @if($book->categoryid == "1") selected @endif>Komputer</option>
                        <option value="2" @if($book->categoryid == "2") selected @endif>Fiksi</option>
                        <option value="3" @if($book->categoryid == "3") selected @endif>Design</option>
                        <option value="4" @if($book->categoryid == "4") selected @endif>Anak</option>
                        <option value="5" @if($book->categoryid == "5") selected @endif>Cerita</option>
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
                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="/book" class="btn btn-outline-secondary">Cancel</a>
            </form>
        </div>
    </div>
@endsection
