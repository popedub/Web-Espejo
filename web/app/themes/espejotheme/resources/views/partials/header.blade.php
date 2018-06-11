<header class="banner sticky-top">
  <div class="container-fluid">
    <a class="brand mr-auto" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
      <input type="checkbox" id="menu-toggle" />
      <label for="menu-toggle" class="label-toggle">
          <span></span>
          <span></span>
          <span></span>
      </label>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav clearfix']) !!}
      @endif
    </nav>
  </div>
</header>
