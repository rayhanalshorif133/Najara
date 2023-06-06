@extends('layouts.app')

@push('styles')
@endpush

@section('content')
    <!-- Subscribe btn -->
    <section id="game-panel" style="margin-top:45px">

        @foreach ($contentInfos as $key => $contentInfo)
            <h2 class="game-title">{{ $contentInfo->title }}</h2>
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
                                                    <figure>
                                                        <img src="{{ asset($content->image) }}" alt="" title=""
                                                            class="item img-fluid">
                                                    </figure>
                                                </div>
                                                <div class="col-8">
                                                    <h4 class="game-name">{{ $content->title }}</h4>
                                                    <div class="game-category">
                                                        <p>[{{ $content->category->name }}]</p>
                                                    </div>
                                                    <div class="game-download">
                                                        <a href="#" class="download-btn">Download</a>
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
@endsection

@push('scripts')
    <script></script>
@endpush
