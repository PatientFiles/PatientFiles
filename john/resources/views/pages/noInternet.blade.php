@extends('layouts.mainLayout')

@include('layouts.headerLayout')

@section('content')


   <!-- Main content -->
        <section class="content">
          <div class="error-page" align="center">
            <h2 class="headline text-yellow">114</h2>
            <div class="error-content">
              <h3><i class="fa fa-warning text-yellow"></i> Oops! Can't connect to internet.</h3>
              <p>
                Your Internet Connection is unstable.
                
                Please check your internet connection and <a href="/">Try again</a>.
              </p>
            </div><!-- /.error-content -->
          </div><!-- /.error-page -->
        </section><!-- /.content -->
@endsection