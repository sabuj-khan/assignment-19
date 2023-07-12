 <!-- Main Content-->
 <div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">

            @foreach ($posts as $post)
                
            
         
            <!-- Post preview-->
            <div class="post-preview">
                
                    <h2 class="post-title">{{$post->title}}</h2>
                    <h5 class="post-subtitle">{{ Str::limit($post->content, 150) }}</h5>
                    <a href="" class="btn btn-dark p-3 text-uppercase text-light">Read More</a>
                    
                
                <p class="post-meta">
                    Posted by
                    <a href="#!">{{ $post->user->name }}</a>
                    on {{ $post->created_at->format('F j, Y') }}
                </p>
            </div>
            <!-- Divider-->
            <hr class="my-4" />

            @endforeach


            <!-- Pager-->
            <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
        </div>
    </div>
</div>
