@extends('heading.heading')

@section('content')
  <div id="app">
    <div class="container">
      <div class="row">
        <div id="data-content">
          @if(!empty($todolist))
            @include('ajaxex.list')
          @endif
        </div>
      </div>
    </div>
  </div>
@endsection