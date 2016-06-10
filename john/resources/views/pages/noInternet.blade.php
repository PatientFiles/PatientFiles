@extends('layouts.masterLayout')


@section('content')

   <!-- Main content -->
        <section class="content">
          <div class="error-page" >
            <h2 class="headline text-yellow"> 404</h2>
            <div class="error-content">
              <h3><i class="fa fa-warning text-yellow"></i> Oops! Page not found.</h3>
              <p>
                Your Internet Connection is unstable.
                
                Please check your internet connection and <a href="/home">try again</a>.
              </p>
            </div><!-- /.error-content -->
          </div><!-- /.error-page -->
        </section><!-- /.content -->


@stop