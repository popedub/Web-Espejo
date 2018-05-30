<article @php post_class('single') @endphp >
  <div class="col col-sm-6">
    <div class="row">
      <div class="izq-single-up">
          <h1 class="entry-title-single">{{ get_the_title() }}</h1>
          <div class="pie">
            @php echo __('Publicacion Original:', 'sage') @endphp </br>
              {{ $publicacion_original }}
          </div>
          <div class="tags-single">
            @php the_tags( 'Tags: <br/>', ', ', '' ); @endphp
          </div>
          <div class="nav-posts">
            @php  previous_post_link('%link', __('Siguiente &#8594;')) @endphp
          </div>
      </div>
      <div class="izq-single-abajo">
        @php $i = 1; @endphp
        @if ($galeria > 1)
          @if ($player && $texto_largo)
          <div class="row mrr">
          <div class="curto up-linea col-12 player-extra">
            <div class="row">
              <div class="player align-self-start mx-auto">
                {!! $player !!}
              </div>
              <div class="info-player col-12 mx-auto">
                {!! $info_player !!}
              </div>
            </div>
          </div>
          @if ($video)
            <div class="curto up-linea col-12 player-extra">
              <h3>@php echo __('Video:','sage') @endphp</h3>
              {!! $video !!}
            </div>
          @endif
          </div>
          @else
          <div class="galeria">
          <h3>@php echo __('Imágenes:','sage') @endphp</h3>
          <div class="row">
            <ul id="ligthbox">
              @foreach ($galeria as $image)
              <li data-src="{{$image['url']}}">  {{$i}} </li>

                  @php $i++ ; @endphp
              @endforeach
            </ul>
              @if( has_post_thumbnail() )
              <div class="img-featured">
                @php the_post_thumbnail('full', array ('class'=>'img-fluid cc'))@endphp
              </div>
              @endif
          </div>
          </div>
          @endif
        @endif

      </div>
    </div>
  </div>
  <div class="col col-sm-6">
    <div class="row">
      <div class="der-single-up">
        @if($texto_largo)
          <div class="texto-largo">
            {!! $texto_largo !!}
          </div>
        @endif
        @if($player && !$texto_largo)
        <div class="curto">
          <div class="player align-self-center mx-auto">
            {!! $player !!}
          </div>
          <div class="info-player">
            {!! $info_player !!}
          </div>
        </div>
        @endif
        @if($embed && !$texto_largo)
        <div class="curto">
          {!! $embed !!}

          <div class="info-player">
              {!! $info_player !!}
          </div>
        </div>
        @endif

      </div>
      <div class="der-single-abajo">

          @if($player && $texto_largo)
          <div class="row mr">
            <div class="galeria g-der">
              <h3>@php echo __('Imágenes:','sage') @endphp</h3>
              <div class="row">
                <ul id="ligthbox">
                  @foreach ($galeria as $image)
                  <li data-src="{{$image['url']}}">  {{$i}} </li>

                      @php $i++ ; @endphp
                  @endforeach
                </ul>
                  @if( has_post_thumbnail() )
                  <div class="img-featured">
                    @php the_post_thumbnail('full', array ('class'=>'img-fluid cc'))@endphp
                  </div>
                  @endif
              </div>
            </div>
          <div class="post-relacionados pr-bajo">
              <h3>@php echo __('Relacionados:','sage') @endphp</h3>
              @foreach ($related as $p)
                  <h4><a href="{!! $p->permalink !!}">{!! $p->title !!}</a></h4>
                  &#8594;
                  @php (nombres_cat())@endphp
              @endforeach
          </div>
          </div>

          @else

          <div class="post-relacionados">
              <h3>@php echo __('Relacionados:','sage') @endphp</h3>
              @foreach ($related as $p)
                  <h4><a href="{!! $p->permalink !!}">{!! $p->title !!}</a></h4>
                  &#8594;
                  @php (nombres_cat())@endphp
              @endforeach
          </div>
          @endif

      </div>
    </div>
  </div>
</article>
