@extends('layouts.app')

@push('styles')
@endpush

@section('content')
    <section id="game-panel" style="margin-top:45px">
        <h2 class="game-title">Subscription Details</h2>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 sm-12">
                    <div class="game-part">
                        <p style="font-size: calc(0.7rem + 0.7vw);">You are not subscribed to Games Club. Please
                            subscribe to Games Club. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- HTML 5 Game -->
    <section id="game-panel" style="margin-top:45px">
        <h2 class="game-title">Download History</h2>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 sm-12">
                    <div class="game-part">
                        <P style="font-size: calc(0.7rem + 0.7vw);">Download history not available.</P>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script></script>
@endpush
