<article @php (post_class('full-page')) @endphp >
  <div class="izq">
    <a href="{{ get_permalink() }}"><h2 class="entry-title">{{ get_the_title() }}</br>
      <span class="d-none d-sm-block">&#8594;
      @php echo nombres_cat() @endphp </span></h2>
    </a>

  </div>
  <div class="der">
      @php if(has_post_thumbnail()) @endphp
      @php echo the_post_thumbnail() @endphp

    <div class="entry-summary">
     @php echo get_field('pie_de_foto') @endphp
    </div>
  </div>
</article>

