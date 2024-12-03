<div>
    If your happiness depends on money, you will never be happy with yourself.
    <main class="main">

        @if ($selectedPost)
            <main class="main">

                <div class="container">
                    <div class="row">

                        <div class="col-lg-8">

                            <!-- Blog Details Section -->
                            <section id="blog-details" class="blog-details section">
                                <div class="container">

                                    <article class="article">

                                        <div class="post-img">
                                            <img src="assets/img/blog/1.jpg" alt="" class="img-fluid">
                                        </div>

                                        <h2 class="title">{{ $post->title }}</h2>

                                        <div class="meta-top">
                                            <ul>
                                                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                                        href="blog-details.html">John Doe</a></li>
                                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                                        href="blog-details.html"><time datetime="2020-01-01">Jan 1,
                                                            2022</time></a></li>
                                                <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a
                                                        href="blog-details.html">12 Comments</a></li>
                                            </ul>
                                        </div><!-- End meta top -->

                                        <div class="content">
                                            <p>{{ $post->content }}</p>

                                        </div><!-- End post content -->

                                    </article>

                                </div>
                            </section>

                            <!-- Blog Comments Section -->
                            <section id="blog-comments" class="blog-comments section">

                                <div class="container">

                                    <h4 class="comments-count">8 Comments</h4>

                                    <div id="comment-1" class="comment">
                                        <div class="d-flex">
                                            <div class="comment-img"><img src="assets/img/blog/comments-1.jpg"
                                                    alt=""></div>
                                            <div>
                                                <h5><a href="">Georgia Reader</a> <a href="#"
                                                        class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                                                <time datetime="2020-01-01">01 Jan,2022</time>
                                                <p>
                                                    Et rerum totam nisi. Molestiae vel quam dolorum vel voluptatem et
                                                    et. Est ad aut sapiente quis molestiae est qui cum soluta.
                                                    Vero aut rerum vel. Rerum quos laboriosam placeat ex qui. Sint qui
                                                    facilis et.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section><!-- /Blog Comments Section -->
                            <!-- Comment Form Section -->
                            <section id="comment-form" class="comment-form section">
                                <div class="container">

                                    <form action="">

                                        <h4>Post Comment</h4>
                                        <div class="row">
                                            <div class="col-md-12 form-group">
                                                <input name="name" type="text" class="form-control"
                                                    placeholder="Your Name*">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col form-group">
                                                <textarea name="comment" class="form-control" placeholder="Your Comment*"></textarea>
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Post Comment</button>
                                        </div>

                                    </form>

                                </div>
                            </section><!-- /Comment Form Section -->

                        </div>

                        <div class="col-lg-4 sidebar">

                            <div class="widgets-container">

                                <!-- Search Widget -->
                                <div class="search-widget widget-item">

                                    <h3 class="widget-title">Search</h3>
                                    <form action="">
                                        <input type="text">
                                        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                                    </form>

                                </div><!--/Search Widget -->

                                <!-- Categories Widget -->
                                <div class="categories-widget widget-item">

                                    <h3 class="widget-title">Categories</h3>
                                    <ul class="mt-3">
                                        <li><a href="#">General <span>(25)</span></a></li>
                                        <li><a href="#">Lifestyle <span>(12)</span></a></li>
                                        <li><a href="#">Travel <span>(5)</span></a></li>
                                        <li><a href="#">Design <span>(22)</span></a></li>
                                        <li><a href="#">Creative <span>(8)</span></a></li>
                                        <li><a href="#">Educaion <span>(14)</span></a></li>
                                    </ul>

                                </div><!--/Categories Widget -->

                                <!-- Recent Posts Widget -->
                                <div class="recent-posts-widget widget-item">

                                    <h3 class="widget-title">Recent Posts</h3>

                                    <div class="post-item">
                                        <img src="assets/img/blog/blog-recent-1.jpg" alt=""
                                            class="flex-shrink-0">
                                        <div>
                                            <h4><a href="blog-details.html">Nihil blanditiis at in nihil autem</a></h4>
                                            <time datetime="2020-01-01">Jan 1, 2020</time>
                                        </div>
                                    </div><!-- End recent post item-->

                                    <div class="post-item">
                                        <img src="assets/img/blog/blog-recent-2.jpg" alt=""
                                            class="flex-shrink-0">
                                        <div>
                                            <h4><a href="blog-details.html">Quidem autem et impedit</a></h4>
                                            <time datetime="2020-01-01">Jan 1, 2020</time>
                                        </div>
                                    </div><!-- End recent post item-->

                                    <div class="post-item">
                                        <img src="assets/img/blog/blog-recent-3.jpg" alt=""
                                            class="flex-shrink-0">
                                        <div>
                                            <h4><a href="blog-details.html">Id quia et et ut maxime similique occaecati
                                                    ut</a></h4>
                                            <time datetime="2020-01-01">Jan 1, 2020</time>
                                        </div>
                                    </div><!-- End recent post item-->

                                    <div class="post-item">
                                        <img src="assets/img/blog/blog-recent-4.jpg" alt=""
                                            class="flex-shrink-0">
                                        <div>
                                            <h4><a href="blog-details.html">Laborum corporis quo dara net para</a></h4>
                                            <time datetime="2020-01-01">Jan 1, 2020</time>
                                        </div>
                                    </div><!-- End recent post item-->

                                    <div class="post-item">
                                        <img src="assets/img/blog/blog-recent-5.jpg" alt=""
                                            class="flex-shrink-0">
                                        <div>
                                            <h4><a href="blog-details.html">Et dolores corrupti quae illo quod
                                                    dolor</a></h4>
                                            <time datetime="2020-01-01">Jan 1, 2020</time>
                                        </div>
                                    </div><!-- End recent post item-->

                                </div><!--/Recent Posts Widget -->

                                <!-- Tags Widget -->
                                <div class="tags-widget widget-item">

                                    <h3 class="widget-title">Tags</h3>
                                    <ul>
                                        <li><a href="#">App</a></li>
                                        <li><a href="#">IT</a></li>
                                        <li><a href="#">Business</a></li>
                                        <li><a href="#">Mac</a></li>
                                        <li><a href="#">Design</a></li>
                                        <li><a href="#">Office</a></li>
                                        <li><a href="#">Creative</a></li>
                                        <li><a href="#">Studio</a></li>
                                        <li><a href="#">Smart</a></li>
                                        <li><a href="#">Tips</a></li>
                                        <li><a href="#">Marketing</a></li>
                                    </ul>

                                </div><!--/Tags Widget -->

                            </div>

                        </div>

                    </div>
                </div>

            </main>
        @else
            <section id="blog-posts" class="blog-posts section">

                <div class="container">
                    <div class="row gy-4">
                        @foreach ($posts as $post)
                            <div class="col-lg-4">
                                <article>

                                    <div class="post-img">
                                        <img src="{{ asset('assets/img/blog/' . rand(1, 6) . '.jpg') }}"
                                            alt="" class="img-fluid">
                                    </div>

                                    <p class="post-category">{{ $post->category->name }}</p>

                                    <h2 class="title">
                                        <a href="#"
                                            wire:click="showPost({{ $post->id }})">{{ $post->content }}</a>
                                    </h2>

                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets/img/blog/blog-author.jpg') }}" alt=""
                                            class="img-fluid post-author-img flex-shrink-0">
                                        <div class="post-meta">
                                            <p class="post-author">Maria Doe</p>
                                            <p class="post-date">
                                                <time datetime="2022-01-01">Jan 1, 2022</time>
                                            </p>
                                        </div>
                                    </div>

                                </article>
                            </div>
                        @endforeach

                    </div>
                </div>

            </section>
        @endif

    </main>
</div>
