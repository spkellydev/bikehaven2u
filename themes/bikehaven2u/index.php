@layout('resources.layouts.main')

@section('content')
  <section>
    @wpposts
      <h1>{{ the_title() }}</h1>
      <p>{{ the_content() }}</p>
    @wpempty
      <p>Sorry, I couldn't find that for you.</p>
    @wpend
  </section>
@endsection