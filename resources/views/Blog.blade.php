<x-Head>
    <section class="ftco-section" id="blog-section">
        @foreach ($posts as $post)
            <div class="container">
                <div class="row justify-content-center mb-5 pb-5">
                    <div class="col-md-7 heading-section text-center ftco-animate">
                        <h1 class="big big-2">Blog</h1>

                        <h2 class="mb-4">{{ $post->title }}</h2>
                        <p>{{ $post->text }}</p>
                    </div>
                    <a href="{{ route('post.destroy',$post->id)}}">
                        <button type="button" class="btn btn-success">Delete</button>
                    </a>
                </div>
                <a href="{{ route('post.edit', $post->id) }}">
                    <button type="button" class="btn btn-success">Edit</button>
                </a>
                <div class="col-md-4 d-flex ftco-animate">

                    <div class="blog-entry">
                        {{ $post->image }}
                        </a>
                        <div class="text mt-3 float-right d-block">
                            <div class="d-flex align-items-center mb-3 meta">
                                <p class="mb-0">
                                    <span class="mr-2">{{ $post->created_at }}</span>
                                    <a href="#" class="mr-2">Admin</a>
                                    <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                                </p>
                            </div>
                            <h3 class="heading"><a href="single.html"></a>
                            </h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia.</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </section>
</x-Head>
