@extends('layouts.app')

@push('styles')
@endpush

@section('content')
    <!-- Subscribe btn -->
    <section id="game-panel" style="margin-top:45px">
        <h2 class="game-title">{{ $categoryName->name }}</h2>
        @if (count($contentInfos) > 0)
            @include('common.content', $contentInfos)
        @else
            <p class="text-center m-auto h5 mt-3">
                No results found for <span style="color: #ff0000;">{{ $categoryName->name }}</span>

                {{-- Home Btn --}}
                <br />
                <a href="{{ route('home') }}" class="btn btn-outline-danger btn-sm mt-3">
                    Home
                </a>
            </p>
        @endif
    </section>
@endsection
