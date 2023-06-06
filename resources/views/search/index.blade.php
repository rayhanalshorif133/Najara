@extends('layouts.app')

@push('styles')
@endpush

@section('content')
    <!-- Subscribe btn -->
    <section id="game-panel" style="margin-top:45px">
        <h2 class="game-title">Search Results</h2>
        @foreach ($contentInfos as $key => $contentInfo)
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 sm-12">
                        <div class="game-part">
                            <ul>
                                <li>
                                    <div class="row row-cols-1 row-cols-sm-2">
                                        <div class="col-4">
                                            <figure>
                                                <img src="{{ asset('assets/images/game-1.png') }}" alt=""
                                                    title="" class="item img-fluid">
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
        @endforeach
    </section>
@endsection

@push('scripts')
    <script></script>
@endpush
