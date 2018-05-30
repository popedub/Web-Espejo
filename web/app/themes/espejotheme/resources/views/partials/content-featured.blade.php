<article @php post_class('full-page') @endphp >
  <div class="izq">
    <h2 class="entry-title">
      <a href="{{ get_permalink() }}">{{ get_the_title() }}</a></br>
      &#8594;
      @php echo nombres_cat() @endphp
    </h2>

  </div>
  <div class="der">
      @php if(has_post_thumbnail()) @endphp
      @php echo the_post_thumbnail() @endphp

    <div class="entry-summary">
     @php echo get_field('pie_de_foto') @endphp
    </div>
  </div>
</article>

