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
                                    @include('common.content', ['contentInfos' => $contentInfo->contents])
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </section>
@endsection
