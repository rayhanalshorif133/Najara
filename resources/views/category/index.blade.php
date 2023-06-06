@extends('layouts.app')

@push('styles')
@endpush

@section('content')
    <section id="game-panel" style="margin-top:45px">
        <h2 class="game-title">HTML 5 Games</h2>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 sm-12">
                    <div class="game-part">
                        <ul>
                            @foreach ($categories as $category)
                                <li>
                                    <div class="row row-cols-1 row-cols-sm-2">
                                        <div class="col-4">
                                            <figure>
                                                <img src="{{ asset($category->icon) }}" alt="" title=""
                                                    class="item img-fluid">
                                            </figure>
                                        </div>
                                        <div class="col-8 justify-content-center m-auto">
                                            <h4 class="game-name">{{ $category->name }}</h4>
                                            <div class="game-category">
                                                <p>
                                                    @if ($category->description)
                                                        [{{ $category->description }}]
                                                    @endif
                                                </p>
                                            </div>
                                            <div class="game-download">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- HTML 5 Game -->
@endsection

@push('scripts')
    <script></script>
@endpush
