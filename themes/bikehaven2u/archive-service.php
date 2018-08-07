@layout('resources.layouts.service')
{{-- Template Name: Service Archive --}}
{{-- Template Post Type: Service --}}
<?php
  $service_archive = get_post( 30 );
?>

@section('service')

<p>{{ $service_archive->post_content }}</p>

<h2>Bike Repair Services</h2>
<div class="col-12">
  @if($posts)
  <?php
    foreach($posts as $service):
  ?>
  <div class="row">
    <div class="col-8">
      <a href="/{{ $service->post_name }}" class="subtitle" title="{{ $service->post_title }}">
        <h3>{{ $service->post_title }}</h3>
      </a>
      <p>{{ $service->post_excerpt }}</p>
    </div>
    <div class="col-3">
      @if( has_post_thumbnail( $service->ID ) )
        {{ get_the_post_thumbnail( $service->ID, 'medium', [ 'class' => 'img-fluid d-block w-100']) }} 
      @endif
    </div>
  </div>
  <?php
    endforeach;
  ?>
  @else
    <p>We're currently revising our services. You can always call and talk about the servicing you need, while we review our service packages</p>
  @endif
</div>


@endsection