<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New Pin') }}
        </h2>
    </x-slot>

@section('content')
<div class="container-fluid">

  <div class="row">
    <div class="col-4">
      .col-4<br>Since 9 + 4 = 13 &gt; 12, this 4-column-wide div gets wrapped onto a new line as one contiguous unit.
    </div>
    <div class="col-6">
      <div class="panel-body">
      <div class="form-group">
            <input class="form-control{{ $errors->has('path') ? ' is-invalid' : '' }}" name="path" type="file">
            @if ($errors->has('path'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('path') }}</strong>
            </span>
            @endif
</div>
        <form action=""
              method="POST"
              enctype="multipart/form-data">

          {{ csrf_field() }}

          <div class="form-group">
            <label for="judulfoto">Title</label>
            <input name="judulfoto" id="judulfoto" type="text" class="form-control">
          </div>

          <div class="form-group">
            <label for="deskripsifoto">Description</label>
            <textarea name="deskripsifoto" id="deskripsifoto" type="text" class="form-control">
            </textarea>
          </div>

          <!--  -->

          <button type="submit" class="btn rounded-pill" style="background-color: #d2691e; color:white;">Publish</button>

   
        </form>
      </div>
    </div>
  </div>
</div>


@endsection
</x-app-layout>
    
