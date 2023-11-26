@extends('layouts.app')
@section('title', 'Home')

@section('content')
<!-- First Container -->
<div class="container-fluid bg-1 text-center">
  <h3 class="margin">Who Am I?</h3>
  <img src="{{ url('images/photo.png') }}" class="img-responsive img-circle margin" style="display:inline" alt="Bird" width="350" height="350">
  <h3>I'm an adventurer</h3>
</div>

<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
  <h3 class="margin">What Am I?</h3>
  <p>Hello, I'm [Your Name], a passionate [Your Profession] with expertise in [Your Skills]. Explore my projects and get in touch!</p>
</div>
@endsection