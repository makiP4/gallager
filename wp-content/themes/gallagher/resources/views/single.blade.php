@extends('layouts.app')

@section('content')
<h1>Single page</h1>
  @while(have_posts()) @php the_post() @endphp
    @include('partials.content-single-'.get_post_type())
  @endwhile
@endsection
