
@if ($errors->any())
@foreach ($errors->all() as $error)

<div class="alert alert-danger" role="alert">
    <div class="container">
      <div class="alert-icon">
        <i class="fas fa-exclamation-circle"></i>
      </div>
      <strong>Error!</strong>  <strong>{{ $error }}</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">
          <i class="now-ui-icons ui-1_simple-remove"></i>
        </span>
      </button>
    </div>
  </div>

@endforeach
@endif