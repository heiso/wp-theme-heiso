@if (get_header_image())
<style>
  header {
    background: linear-gradient(200deg, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.7)), url('{{header_image()}}') center center;
    color: "{{get_custom_header()->default_text_color}}";
  }
  .avatar .img {
    background: url('{{wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full')[0]}}') center center;
  }
</style>
@endif
<header>
  <h1 class="brand">{{ get_bloginfo('name', 'display') }}</h1>
  <div class="avatar">
    <div class="img"></div>
  </div>
  <p class="project-tagline">{{ get_bloginfo('description', 'display') }}</p>
  @if (has_nav_menu('primary_navigation'))
    {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
  @endif
</header>
