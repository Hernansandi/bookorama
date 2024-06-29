@extends('layouts.main')

@section('content')
<br><br><br>
<div class="text-center">
    <div class="card w-50 mt-5 mx-auto">
        <h6 class="card-header">Konfirmasi Hapus Buku</h6>
        <div class="card-body">
            <form action="/book/{{ $book->isbn }}" method="POST" autocomplete="on">
                @method('delete')
                @csrf
                <div class="card-title mb-4">Apakah anda yakin ingin menghapus buku <strong>{{ $book->title }}</strong> ?</div>
                <button type="submit" class="btn btn-danger" name="delete" value="delete">Delete</button>
                <a href="/book" class="btn btn-outline-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection