@layout('resources.layouts.service')
{{-- Template Name: Service --}}
{{-- Template Post Type: Service --}}

@section('service')

<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      {{ the_post_thumbnail('full', [ 'class' => 'img-fluid d-block w-100']) }}      
      <div class="carousel-caption d-md-block bg-dark">
        <h1>{{ $post->post_title }}</h1>
        <p>{{  $post->post_excerpt }}</p>
        <p>${{ $post->service_price }}.00</p>
      </div>
    </div>

  </div>
</div>


@endsection