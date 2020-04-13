<section class="hero py-6 py-lg-7 text-white dark-overlay">
    <img src="{{ $row->image_src }}" alt="How can we help you today?" class="bg-image">
      <div class="container overlay-content">
        <!-- Breadcrumbs -->
        @include('pub_theme::layouts.partials.breadcrumb',['class'=>'text-white justify-content-center no-border mb-0'])
        <h1 class="hero-heading">{{ $row->title }}</h1>
      </div>
      {{-- Panel::get($row)->imgSrc(['width'=>300,'height'=>300]) --}} 
</section>