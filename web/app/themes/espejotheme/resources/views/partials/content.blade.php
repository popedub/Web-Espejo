<article @php(post_class('grid-item'))>
  <div class="contenedor">
    <?php echo get_post_number() ?>

    <header>
      <h2 class="entry-title"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h2>
    </header>
    <div class="entry-summary">
       &#8594;
       @php (nombres_cat())


    </div>
  </div>
</article>

