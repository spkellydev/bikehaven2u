@layout('resources.layouts.main')

@section('content')
  <section class="row m-0 p-0">
    @wpposts
      <div class="col-12 m-0 px-0">
        @if( has_post_thumbnail() )
          <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                {{ the_post_thumbnail('full', [ 'class' => 'img-fluid d-block w-100']) }}      
                <div class="carousel-caption d-md-block">
                  <h1>{{ $post->post_title }}</h1>
                  <p>{{  $post->post_excerpt }}</p>
                  <p>${{ $post->service_price }}.00</p>
                </div>
              </div>
              <div class="carousel-item">
                {{ the_post_thumbnail('full', [ 'class' => 'img-fluid d-block w-100']) }} 
                <div class="carousel-caption d-md-block">
                  <h1>{{ $post->post_title }}</h1>
                  <p>{{  $post->post_excerpt }}</p>
                  <p>${{ $post->service_price }}.00</p>
                </div>    
              </div>
              <div class="carousel-item">
                {{ the_post_thumbnail('full', [ 'class' => 'img-fluid d-block w-100']) }}
                <div class="carousel-caption d-md-block">
                  <h1>{{ $post->post_title }}</h1>
                  <p>{{  $post->post_excerpt }}</p>
                  <p>${{ $post->service_price }}.00</p>
                </div>      
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        @endif
        <h1>{{ the_title() }}</h1>
        <p>{{  the_content() }}</p>
      </div>
    @wpempty
      <p>Sorry, I couldn't find that for you.</p>
    @wpend
  </section>
@endsection

