@extends('layouts.app')

@push('styles')
@endpush

@section('content')
    <!-- Subscribe btn -->
    <section id="game-panel" style="margin-top:45px">
        <h2 class="game-title">Search Results</h2>
        @if (count($contentInfos) > 0)
            @foreach ($contentInfos as $key => $content)
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 sm-12">
                            <div class="game-part">
                                <ul>
                                    <li>
                                        <div class="row row-cols-1 row-cols-sm-2">
                                            <div class="col-4">
                                                @php
                                                    $img_name = $content->preview_img ? $content->preview_img : $content->screenshot1;
                                                @endphp
                                                <figure>
                                                    <img src="{{ $content->GET_IMAGE($content->id, $img_name) }}"
                                                        alt="" title="" class="item img-fluid">
                                                </figure>
                                            </div>
                                            <div class="col-8">
                                                <h4 class="game-name">{{ $content->game_name }}</h4>
                                                <div class="game-category">
                                                    <p>[{{ $content->category->name }}]</p>
                                                </div>
                                                <div class="game-download">
                                                    <a href="{{ $content->html5_url }}" target="_blank"
                                                        class="download-btn">
                                                        Play Now
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <p class="text-center m-auto h5 mt-3">
                No results found for <span style="color: #ff0000;">{{ $search_key }}</span>

                {{-- Home Btn --}}
                <br />
                <a href="{{ route('home') }}" class="btn btn-outline-danger btn-sm mt-3">
                    Home
                </a>
            </p>
        @endif
    </section>
@endsection

@push('scripts')
    <script></script>
@endpush
