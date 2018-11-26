@if(Session::has('success'))

  {{-- <div class="alert alert-success " role="alert" style="position:relative;top:10px;">
    <strong>Success: </strong>{{ Session::get('success') }}
  </div> --}}

  <div class="alert alert-success col-md-10" role="alert" style="">
          <div class="container">

              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true" style="color:red;">x</span>
              </button>

              <b>{{ Session::get('success') }}</b>  </div>
      </div>
@endif
@if(Session::has('failure'))

  <div class="alert alert-danger " role="alert" style="position:relative;top:60px;">
    <strong>Failure: </strong>{{ Session::get('failure') }}
  </div>

@endif

@if( count($errors) >0 )

  <div class="alert alert-danger" role="alert" style="position:relative;top:60px;">
    <strong>Errors: </strong>
    <ul>
    @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
  </ul>
  </div>

@endif

<script type="text/text/javascript">
$(document).ready(function() {
    $('body').bootstrapMaterialDesign();
});
</script>
