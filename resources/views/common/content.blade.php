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
                                         <img src="{{ $content->GET_IMAGE($content->id, $img_name) }}" alt=""
                                             title="" class="item img-fluid">
                                     </figure>
                                 </div>
                                 <div class="col-8">
                                     <h4 class="game-name">{{ $content->game_name }}</h4>
                                     <div class="game-category">
                                         <p>[{{ $content->category->name }}]</p>
                                     </div>
                                     <div class="game-download">
                                         {{-- <a href="{{ $content->html5_url }}" class="download-btn">
                                             Play Now
                                         </a> --}}
                                         <a href="{{ route('play.game', $content->id) }}" class="download-btn">
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
