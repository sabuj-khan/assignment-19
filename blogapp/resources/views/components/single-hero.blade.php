<header class="masthead" style="background-image: url('{{asset('assets/images/img/post-bg.jpg')}}')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="post-heading">
                    <h1>{{$post->title}}</h1>
                    <h2 class="subheading"></h2>
                    <span class="meta">
                        Posted by
                        <a href="#!">{{ $post->user->name }}</a>
                        on {{ $post->created_at->format('F j, Y') }}
                    </span>
                </div>
            </div>
        </div>
    </div>
</header>