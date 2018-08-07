@layout('resources.layouts.service')
{{-- Template Name: Service --}}
{{-- Template Post Type: Service --}}
<?php $service = &$post ?>

@section('service')

<div id="service-carousel" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      {{ the_post_thumbnail('full', [ 'class' => 'img-fluid d-block w-100']) }}      
      <div class="carousel-caption d-md-block bg-dark">
        <h1>{{ $service->post_title }}</h1>
        <p>{{  $service->post_excerpt }}</p>
        <p>${{ $service->service_price }}.00</p>
      </div>
    </div>
    <div>
      <p>{{ $service->post_content }}</p>
    </div>
  </div>
</div>


@endsection