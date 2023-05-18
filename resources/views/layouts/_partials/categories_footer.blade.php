<section id="game-panel" style="margin-top:45px">
    <h2 class="game-title">Categories</h2>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 sm-12">
                <div class="category-part">
                    <ul>
                        @foreach ($categories as $category)
                        <li><a href="#">{{$category->name}}</a> </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>