<article @php(post_class('grid-item'))>
  <a href="{{ get_permalink() }}">
    <div class="contenedor">
      <span class="nro-post"><?php echo get_post_number() ?></span>

      <header>
        <h2 class="entry-title">{{ get_the_title() }}</h2>
      </header>
      <div class="entry-summary">
        &#8594;
        @php (nombres_cat())


      </div>
    </div>
  </a>
</article>

