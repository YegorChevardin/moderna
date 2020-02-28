
@foreach($posts as $post)
            <article class="entry">

              <div class="entry-img">
                <img src="{{ asset('storage'.DIRECTORY_SEPARATOR.$post->image) }}" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html">{{ $post->title }}</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <!--<li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html"></a></li>-->
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">{{ date('M d, Y', strtotime($post->created_at)) }}</time></a></li>
                  <li class="d-flex align-items-center"><i class="icofont-comment"></i> <a href="blog-single.html">12
                      Comments</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  {{$post->excerpt}}
                </p>
                <div class="read-more">
                  <a href="blog-single/{{$post->id}}">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry -->
@endforeach
@if($posts->lastPage() !== 1)
              <input type="submit" name="addBlog" value="Load more!" id="addBlog" class="btn btn-dark btn-lg btn-block"/>
@else
<div class="alert alert-light" role="alert">There is no more new posts</div>
@endif
              <br/>
              <style>
                  .pagination {
                      justify-content: center;
                  }
              </style>
            <div class="Page navigation example">
              {{$posts->links()}}
            </div>