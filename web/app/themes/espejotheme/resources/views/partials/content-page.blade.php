<div class="col-izq-page">

  @if($info->t_izq)
    <div class="page-izq-text-up">
      {!! $info->t_izq !!}
    </div>
  @endif
    <div class="ti-page">
       <h1> @php the_title()@endphp </h1>
    </div>

</div>
<div class="col-der-page">
  <div class="row">
    <div class="up-page-col-der">
      <div class="row">
        @if($info->datos)
          <div class="page-datos-izq">
            {!! $info->datos !!}
          </div>
        @endif

        @if($info->enlaces)
          <div class="page-datos-der">
            {!! $info->enlaces !!}
          </div>
        @endif

        <div class="bio">
          @if($info->bio)
            {!! $info->bio !!}
          @endif

        </div>

        @if($info->pie)
          <div class="pie-bio">
            <hr>
            {!! $info->pie !!}
          </div>
        @endif
      </div>
    </div>
  </div>

  <div class="row">
    <div class="down-page-col-der">
        <div class="info-tags">
          {!! $col_tags !!}
        </div>
    </div>
  </div>
</div>

