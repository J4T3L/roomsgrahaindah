@extends('dashboard.layouts.main')@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Info</h1>
</div>

@if (session()->has('success'))
    <div class="alert alert-success col-lg-8" role="alert">
        {{ session('success') }}
    </div>
@endif

<div class="table-responsive col-lg-12">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Pesan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($infos as $kamar)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                    <article class="fs-8 text-justify">
                        {!! $kamar->status !!}
                    </article>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
