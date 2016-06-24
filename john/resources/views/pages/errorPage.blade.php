@extends('layouts.mainLayout')

@include('layouts.headerLayout')

@section('content')

   <!-- Main content -->
        <section class="content" >
          <div class="error-page" align="center">
            <h2 class="headline text-yellow"> 404</h2>
            <div class="error-content">
              <h3><i class="fa fa-warning text-yellow"></i> Oops! Page not found.</h3>
              <p>
                We could not find the page you were looking for.
                Meanwhile, you may <a style="cursor: pointer; "onclick="goBack()" >return to previous page...</a>.
              </p>
            </div><!-- /.error-content -->
          </div><!-- /.error-page -->
        </section><!-- /.content -->

<script>
function goBack() {
    window.history.back();
}
</script>
@endsection