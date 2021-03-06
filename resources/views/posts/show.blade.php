@extends('template.index')

@section('title')
    Blog 
@endsection

@section('content')
  <!-- Page Title -->
  <div class="section section-breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Blog Post</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="section">
    <div class="container">
      <div class="row">
        <!-- Blog Post -->
        <div class="col-sm-8">
          <div class="blog-post blog-single-post">
            <div class="single-post-title">
              <h2>Lorem ipsum dolor sit amet</h2>
            </div>

            <div class="single-post-image">
              <img src="{{ asset('assets/img/blog/1.jpg') }}" alt="Post Title">
            </div>
            <div class="single-post-info">
              <i class="glyphicon glyphicon-time"></i>30 JAN, 2013 <a href="#" title="Show Comments"><i class="glyphicon glyphicon-comment"></i>11</a>
            </div>
            <div class="single-post-content">
              <h3>Lorem ipsum dolor sit amet</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mattis, nulla id pretium malesuada, dui est laoreet risus, ac rhoncus eros diam id odio. Duis elementum ligula eu ipsum condimentum accumsan.
              </p>
              <p>
                Vivamus euismod elit ac libero facilisis tristique. Duis mollis non ligula vel tincidunt. Nulla consectetur libero id nunc ornare, vel vulputate tellus mollis. Sed quis nulla magna. Integer rhoncus sem quis ultrices lobortis. Maecenas tempus nulla quis dolor vulputate egestas. Phasellus cursus tortor quis massa faucibus fermentum vel sit amet tortor. Phasellus vehicula lorem et tortor luctus, a dignissim lacus tempor. Aliquam volutpat molestie metus sit amet aliquam. Duis vestibulum quam tortor, sed ultrices orci sagittis nec.
              </p>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mattis, nulla id pretium malesuada, dui est laoreet risus, ac rhoncus eros diam id odio. Duis elementum ligula eu ipsum condimentum accumsan.
              </p>
              <p>
                Vivamus euismod elit ac libero facilisis tristique. Duis mollis non ligula vel tincidunt. Nulla consectetur libero id nunc ornare, vel vulputate tellus mollis. Sed quis nulla magna. Integer rhoncus sem quis ultrices lobortis. Maecenas tempus nulla quis dolor vulputate egestas. Phasellus cursus tortor quis massa faucibus fermentum vel sit amet tortor. Phasellus vehicula lorem et tortor luctus, a dignissim lacus tempor. Aliquam volutpat molestie metus sit amet aliquam. Duis vestibulum quam tortor, sed ultrices orci sagittis nec.
              </p>
              <h3>Sed sit amet metus sit</h3>
              <p>
                Proin fermentum, purus id eleifend molestie, nisl arcu rutrum tellus, a luctus erat tortor ut augue. Vivamus feugiat nisi sit amet dignissim fermentum. Duis elementum mattis lacinia. Sed sit amet metus sit amet leo semper feugiat. Nulla vel orci nec neque interdum facilisis egestas vitae lorem. Phasellus elit ante, posuere at augue quis, porta vestibulum magna. Nullam non mattis odio. Donec eget velit leo. Nunc et diam volutpat tellus ultrices fringilla eu a neque. Integer lectus nunc, vestibulum a turpis vitae, malesuada lacinia nibh. In sit amet leo ut turpis convallis bibendum. Nullam nec purus sapien. Quisque sollicitudin cursus felis sit amet aliquam.
              </p>
            </div>
          </div>
        </div>
        <!-- End Blog Post -->
        <!-- Sidebar -->
        <div class="col-sm-4 blog-sidebar">

          <h4>Recent Posts</h4>
          <ul class="recent-posts">
            <li><a href="#">Lorem ipsum dolor sit amet</a></li>
            <li><a href="#">Sed sit amet metus sit</a></li>
            <li><a href="#">Nunc et diam volutpat tellus ultrices</a></li>
            <li><a href="#">Quisque sollicitudin cursus felis</a></li>
          </ul>
          <h4>Categories</h4>
          <ul class="blog-categories">
            <li><a href="#">Lorem ipsum</a></li>
            <li><a href="#">Sed sit amet metus</a></li>
            <li><a href="#">Nunc et diam </a></li>
            <li><a href="#">Quisque</a></li>
          </ul>

        </div>
        <!-- End Sidebar -->
      </div>
    </div>
  </div>

@endsection 