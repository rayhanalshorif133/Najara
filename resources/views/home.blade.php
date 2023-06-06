@extends('layouts.app')

@push('styles')
@endpush

@section('content')
    <!-- Subscribe btn -->
    <section id="game-panel" style="margin-top:45px">

        @foreach ($contentInfos as $key => $contentInfo)
            <h2 class="game-title">{{ $contentInfo->type }}</h2>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 sm-12">
                        <div class="game-part">
                            <ul>
                                @if (count($contentInfo->contents) > 0)
                                    @foreach ($contentInfo->contents as $content)
                                        <li>
                                            <div class="row row-cols-1 row-cols-sm-2">
                                                <div class="col-4">
                                                    @php
                                                        $img_name = $content->preview_img ? $content->preview_img : $content->screenshot1;
                                                    @endphp
                                                    <figure>
                                                        <img src="{{ $content->GET_IMAGE($content->id, $img_name) }}"
                                                            alt="image" class="item img-fluid">
                                                    </figure>
                                                </div>
                                                <div class="col-8">
                                                    <h4 class="game-name">{{ $content->game_name }}</h4>
                                                    <div class="game-category">
                                                        <p>[{{ $content->category->name }}]</p>
                                                    </div>
                                                    <div class="game-download">
                                                        <a href="{{$content->html5_url}}" target="_blank" class="download-btn">
                                                            Play Now
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                @endif

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </section>
    {{-- <section id="game-panel" style="margin-top:45px">
        <h2 class="game-title">Game of the day</h2>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 sm-12">
                    <div class="game-part">
                        <ul>
                            <li>
                                <div class="row row-cols-1 row-cols-sm-2">
                                    <div class="col-4">
                                        <figure>
                                            <img src="assets/images/game-1.png" alt="" title=""
                                                class="item img-fluid">
                                        </figure>
                                    </div>
                                    <div class="col-8">
                                        <h4 class="game-name">Adommo Ekattor</h4>
                                        <div class="game-category">
                                            <p>[Fun]</p>
                                        </div>
                                        <div class="game-download">
                                            <a href="" class="download-btn">Download</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Game day -->
    <section id="game-panel" style="margin-top:45px">
        <h2 class="game-title">HTML 5 Games</h2>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 sm-12">
                    <div class="game-part">
                        <ul>
                            <li>
                                <div class="row row-cols-1 row-cols-sm-2">
                                    <div class="col-4">
                                        <figure>
                                            <img src="assets/images/game-1.png" alt="" title=""
                                                class="item img-fluid">
                                        </figure>
                                    </div>
                                    <div class="col-8">
                                        <h4 class="game-name">Adommo Ekattor</h4>
                                        <div class="game-category">
                                            <p>[Action]</p>
                                        </div>
                                        <div class="game-download">
                                            <a href="" class="download-btn">Play Now</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row row-cols-1 row-cols-sm-2">
                                    <div class="col-4">
                                        <figure>
                                            <img src="assets/images/game-2.png" alt="" title=""
                                                class="item img-fluid">
                                        </figure>
                                    </div>
                                    <div class="col-8">
                                        <h4 class="game-name">Adommo Ekattor</h4>
                                        <div class="game-category">
                                            <p>[Puzzle]</p>
                                        </div>
                                        <div class="game-download">
                                            <a href="" class="download-btn">Play Now</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row row-cols-1 row-cols-sm-2">
                                    <div class="col-4">
                                        <figure>
                                            <img src="assets/images/game-3.png" alt="" title=""
                                                class="item img-fluid">
                                        </figure>
                                    </div>
                                    <div class="col-8">
                                        <h4 class="game-name">Adommo Ekattor</h4>
                                        <div class="game-category">
                                            <p>[Adventure]</p>
                                        </div>
                                        <div class="game-download">
                                            <a href="" class="download-btn">Play Now</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row row-cols-1 row-cols-sm-2">
                                    <div class="col-4">
                                        <figure>
                                            <img src="assets/images/game-2.png" alt="" title=""
                                                class="item img-fluid">
                                        </figure>
                                    </div>
                                    <div class="col-8">
                                        <h4 class="game-name">Adommo Ekattor</h4>
                                        <div class="game-category">
                                            <p>[Category]</p>
                                        </div>
                                        <div class="game-download">
                                            <a href="" class="download-btn">Play Now</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row row-cols-1 row-cols-sm-1">
                                    <div class="col-4">
                                    </div>
                                    <div class="col-5">
                                    </div>
                                    <div class="col-3">
                                        <a href="" class="more-text text-right d-block">More</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- HTML 5 Game -->
    <section id="game-panel" style="margin-top:45px">
        <h2 class="game-title">Top Games</h2>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 sm-12">
                    <div class="game-part">
                        <ul>
                            <li>
                                <div class="row row-cols-1 row-cols-sm-2">
                                    <div class="col-4">
                                        <figure>
                                            <img src="assets/images/game-1.png" alt="" title=""
                                                class="item img-fluid">
                                        </figure>
                                    </div>
                                    <div class="col-8">
                                        <h4 class="game-name">Adommo Ekattor</h4>
                                        <div class="game-category">
                                            <p>[Category]</p>
                                        </div>
                                        <div class="game-download">
                                            <a href="" class="download-btn">Play Now</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row row-cols-1 row-cols-sm-2">
                                    <div class="col-4">
                                        <figure>
                                            <img src="assets/images/game-2.png" alt="" title=""
                                                class="item img-fluid">
                                        </figure>
                                    </div>
                                    <div class="col-8">
                                        <h4 class="game-name">Adommo Ekattor</h4>
                                        <div class="game-category">
                                            <p>[Category]</p>
                                        </div>
                                        <div class="game-download">
                                            <a href="" class="download-btn">Play Now</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row row-cols-1 row-cols-sm-2">
                                    <div class="col-4">
                                        <figure>
                                            <img src="assets/images/game-3.png" alt="" title=""
                                                class="item img-fluid">
                                        </figure>
                                    </div>
                                    <div class="col-8">
                                        <h4 class="game-name">Adommo Ekattor</h4>
                                        <div class="game-category">
                                            <p>[Category]</p>
                                        </div>
                                        <div class="game-download">
                                            <a href="" class="download-btn">Play Now</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row row-cols-1 row-cols-sm-2">
                                    <div class="col-4">
                                        <figure>
                                            <img src="assets/images/game-1.png" alt="" title=""
                                                class="item img-fluid">
                                        </figure>
                                    </div>
                                    <div class="col-8">
                                        <h4 class="game-name">Adommo Ekattor</h4>
                                        <div class="game-category">
                                            <p>[Category]</p>
                                        </div>
                                        <div class="game-download">
                                            <a href="" class="download-btn">Play Now</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row row-cols-1 row-cols-sm-1">
                                    <div class="col-4">
                                    </div>
                                    <div class="col-5">
                                    </div>
                                    <div class="col-3">
                                        <a href="" class="more-text text-right d-block">More</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Top Game -->
    <section id="game-panel" style="margin-top:45px">
        <h2 class="game-title">Best Sellers</h2>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 sm-12">
                    <div class="game-part">
                        <ul>
                            <li>
                                <div class="row row-cols-1 row-cols-sm-2">
                                    <div class="col-4">
                                        <figure>
                                            <img src="assets/images/game-1.png" alt="" title=""
                                                class="item img-fluid">
                                        </figure>
                                    </div>
                                    <div class="col-8">
                                        <h4 class="game-name">Adommo Ekattor</h4>
                                        <div class="game-category">
                                            <p>[Action]</p>
                                        </div>
                                        <div class="game-download">
                                            <a href="" class="download-btn">Play Now</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row row-cols-1 row-cols-sm-2">
                                    <div class="col-4">
                                        <figure>
                                            <img src="assets/images/game-1.png" alt="" title=""
                                                class="item img-fluid">
                                        </figure>
                                    </div>
                                    <div class="col-8">
                                        <h4 class="game-name">Adommo Ekattor</h4>
                                        <div class="game-category">
                                            <p>[Racing]</p>
                                        </div>
                                        <div class="game-download">
                                            <a href="" class="download-btn">Play Now</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row row-cols-1 row-cols-sm-2">
                                    <div class="col-4">
                                        <figure>
                                            <img src="assets/images/game-1.png" alt="" title=""
                                                class="item img-fluid">
                                        </figure>
                                    </div>
                                    <div class="col-8">
                                        <h4 class="game-name">Adommo Ekattor</h4>
                                        <div class="game-category">
                                            <p>[Category]</p>
                                        </div>
                                        <div class="game-download">
                                            <a href="" class="download-btn">Play Now</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row row-cols-1 row-cols-sm-2">
                                    <div class="col-4">
                                        <figure>
                                            <img src="assets/images/game-1.png" alt="" title=""
                                                class="item img-fluid">
                                        </figure>
                                    </div>
                                    <div class="col-8">
                                        <h4 class="game-name">Adommo Ekattor</h4>
                                        <div class="game-category">
                                            <p>[Category]</p>
                                        </div>
                                        <div class="game-download">
                                            <a href="" class="download-btn">Play Now</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row row-cols-1 row-cols-sm-1">
                                    <div class="col-4">
                                    </div>
                                    <div class="col-5">
                                    </div>
                                    <div class="col-3">
                                        <a href="" class="more-text text-right d-block">More</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection

@push('scripts')
    <script></script>
@endpush
