<article @php (post_class('single')) @endphp >
  <div class="col-izq">
    <div class="row">
      <div class="izq-single-up">
          <h1 class="entry-title-single">{{ get_the_title() }}</h1>
          <div class="tags-single">
            @php the_tags( '<span class="float-right d-sm-block d-none">Tags: </span><br/> <span class="float-left d-sm-none d-block">Tags: </span> ', ', ', '' ); @endphp
          </div>
          <div class="pie">
            @php echo __('Publicacion Original:', 'sage') @endphp </br>
              {{ $publicacion_original }}
          </div>
          <div class="nav-posts">
            <span class="d-none d-sm-block">@php  previous_post_link('%link', __('Siguiente &#8594;')) @endphp </span>
            <span class="d-block d-sm-none">@php  previous_post_link('%link', __('&#8594;')) @endphp </span>
          </div>
          <div class="nro-index">
            @include('partials.post-index-single')
          </div>
      </div>
      <div class="izq-single-abajo">
        @php $i = 1; @endphp
        @if ($galeria > 1)
          @if ($player && $texto_largo)
          <div class="row mrr">
          <div class="curto up-linea col-12 player-extra">
            <div class="row mt-0">
              <div class="player align-self-start mx-auto">
                {!! $player !!}
              </div>
              <div class="info-player col-12 mx-auto">
                {!! $info_player !!}
              </div>
            </div>
          </div>
          @if ($video)
            <div class="curto up-linea col-sm-12 player-extra">
              <div class="box-video d-none d-sm-flex flex-column">
                <h3>@php echo __('Video:','sage') @endphp</h3>

                  <div class="embed-responsive embed-responsive-16by9">
                    {!! $video !!}
                  </div>

              </div>
              <div class="box-video-mob d-sm-none">
                <h3>@php echo __('Video:','sage') @endphp</h3>
                  <div class="embed-responsive embed-responsive-16by9">
                    {!! $video !!}
                  </div>
              </div>


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
                @php the_post_thumbnail('full', array ('class'=>'img-fluid cc trigger-galeria'))@endphp
              </div>
              @endif
          </div>
          </div>
          @endif
        @endif

      </div>
    </div>
  </div>
  <div class="col-der">
    <div class="row">
      <div class="der-single-up">
        @if($texto_largo)
          <div class="texto-largo">
            {!! $texto_largo !!}
          </div>
        @endif
        @if($player && !$texto_largo)
        <div class="curto">
          <div class="player align-self-start mx-auto">
            {!! $player !!}
          </div>
          <div class="info-player">
            {!! $info_player !!}
          </div>
        </div>
        @endif
        @if($embed && !$texto_largo)
        <div class="curto">
          <div class="external-player">
            {!! $embed !!}
          </div>

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
                    @php the_post_thumbnail('full', array ('class'=>'img-fluid cc trigger-galery'))@endphp
                  </div>
                  @endif
              </div>
            </div>
          <div class="post-relacionados pr-bajo">
              <h3>@php echo __('Relacionados:','sage') @endphp</h3>
              <ul>
              @foreach ($related as $p)
                 <li><a href="{!! $p->permalink !!}"> <h4>{!! $p->title !!}</h4>
                 <span> &#8594;
                  @php (nombres_cat())@endphp </span></a></li>
              @endforeach
              </ul>
          </div>
          </div>

          @else

          <div class="post-relacionados">
              <h3>@php echo __('Relacionados:','sage') @endphp</h3>
              <ul>
              @foreach ($related as $p)
                  <li><a href="{!! $p->permalink !!}"><h4>{!! $p->title !!}</h4>
                  <span>&#8594;
                  @php (nombres_cat())@endphp </span> </a> </li>
              @endforeach
              </ul>
          </div>
          @endif

      </div>
    </div>
  </div>
</article>
