<div>
    If your happiness depends on money, you will never be happy with yourself.
    <main class="main">

        @if ($selectedPost)
            <main class="main">

                <div class="container">
                    <div class="row">

                        <div class="col-lg-8">

                            <section id="blog-details" class="blog-details section">
                                <button class="btn btn-danger mb-3" wire:click="back">Back</button>
                                <div class="container">

                                    <article class="article">

                                        <div class="post-img">
                                            <img src="{{ asset('assets/img/blog/1.jpg') }}" alt=""
                                                class="img-fluid">
                                        </div>

                                        <h2 class="title">{{ $post->title }}</h2>

                                        <div class="meta-top">
                                            <ul>
                                                <li><a href="#" wire:click="likePost"><i
                                                            class="bi bi-hand-thumbs-up{{ !empty($likedBy) ? '-fill' : '' }}"></i></a>
                                                </li>
                                                <li><a href="#" wire:click="dislikePost"><i
                                                            class="bi bi-hand-thumbs-down{{ !empty($disLikedBy) ? '-fill' : '' }}"></i></a>
                                                </li>
                                                <li><a href="#" style="text-decoration:none;"><i
                                                            class="bi bi-eye"></i>{{ $views }}</a></li>
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

                                    <h4 class="comments-count">
                                        {{ $commentCount == 0 ? 'No comments here yet' : $commentCount }}</h4>

                                    @php
                                        function replies($comment)
                                        {
                                            if ($comment->reply && count($comment->reply) > 0) {
                                                foreach ($comment->reply as $reply) {
                                                    echo '<div class="d-flex" style="margin-left: 20px;">';
                                                    echo '<div class="comment-img"><img src="assets/img/blog/comments-3.jpg" alt=""></div>';
                                                    echo '<div>';
                                                    echo '<h5><a href="#">' .
                                                        htmlspecialchars($reply->author) .
                                                        '</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>';
                                                    echo '<time datetime="2020-01-01">' .
                                                        htmlspecialchars($reply->created_at) .
                                                        '</time>';
                                                    echo '<p>' . htmlspecialchars($reply->content) . '</p>';

                                                    if ($reply->id == $replyTo) {
                                                        echo '
                                                                <div class="container">
                                                                    <form action="" wire:submit.prevent="commentToPost">
                                                                        <h4>Post Comment</h4>
                                                                        <div class="row">
                                                                            <div class="col-md-12 form-group">
                                                                                <input name="name" wire:model="user_name" type="text" class="form-control" placeholder="Your Name*">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col form-group">
                                                                                <textarea name="comment" wire:model="body" class="form-control" placeholder="Your Comment*"></textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="text-center">
                                                                            <button type="submit" class="btn btn-primary">Post Comment</button>
                                                                        </div>
                                                                    </form>
                                                                </div>';
                                                    }
                                                    replies($reply);
                                                    echo '</div>';
                                                    echo '</div>';
                                                }
                                            }
                                        }
                                    @endphp







                                    @foreach ($comments as $comment)
                                        <div id="comment-1" class="comment">
                                            <div class="d-flex">
                                                <div class="comment-img"><img src="assets/img/blog/comments-1.jpg"
                                                        alt=""></div>
                                                <div>
                                                    <h5><a href="#">{{ $comment->user_name }}</a> <a
                                                            href="#" class="reply"
                                                            wire:click="reply({{ $comment->id }})"><i
                                                                class="bi bi-reply-fill"></i> Reply</a>
                                                    </h5>
                                                    <time datetime="2020-01-01">{{ $comment->created_at }}</time>
                                                    <p>
                                                        {{ $comment->body }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        @if ($replyTo == $comment->id)
                                            <div class="container">

                                                <form action="#" wire:submit.prevent="replyTo">

                                                    <h4>Comment Reply</h4>
                                                    <div class="row">
                                                        <div class="col-md-12 form-group mt-2 mb-2">
                                                            <input name="name" wire:model="replyUser_name"
                                                                type="text" class="form-control"
                                                                placeholder="Your Name*">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col form-group mt-2 mb-2">
                                                            <textarea name="comment" wire:model="replyBody" class="form-control" placeholder="Your Comment*"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="text-center">
                                                        <button type="submit" class="btn btn-primary">Reply</button>
                                                    </div>
                                                </form>
                                            </div>
                                        @endif
                                        @if (optional($comment->reply)->count() > 0)
                                            @php replies($comment); @endphp
                                        @endif
                                    @endforeach
                                </div>
                            </section>
                            <section id="comment-form" class="comment-form section">
                                <div class="container">

                                    <form action="" wire:submit.prevent="commentToPost">

                                        <h4>Post Comment</h4>
                                        <div class="row">
                                            <div class="col-md-12 form-group">
                                                <input name="name" wire:model="user_name" type="text"
                                                    class="form-control" placeholder="Your Name*">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col form-group">
                                                <textarea name="comment" wire:model="body" class="form-control" placeholder="Your Comment*"></textarea>
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Post Comment</button>
                                        </div>

                                    </form>

                                </div>
                            </section>

                        </div>

                        <div class="col-lg-4 sidebar">

                            <div class="widgets-container">

                                <div class="search-widget widget-item">

                                    <h3 class="widget-title">Search</h3>
                                    <form action="">
                                        <input type="text">
                                        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                                    </form>

                                </div>

                                <div class="categories-widget widget-item">

                                    <h3 class="widget-title">Categories</h3>
                                    <ul class="mt-3">
                                        @foreach ($categories as $category)
                                            <li><a href="#">{{ $category->name }}</a></li>
                                        @endforeach
                                    </ul>

                                </div>

                                <div class="recent-posts-widget widget-item">

                                    <h3 class="widget-title">Recent Posts</h3>

                                    @foreach ($postsTo as $postTo)
                                        <div class="post-item">
                                            <img src="assets/img/blog/blog-recent-1.jpg" alt=""
                                                class="flex-shrink-0">
                                            <div>
                                                <h4><a href="blog-details.html">{{ $postTo->title }}</a>
                                                </h4>
                                                <time datetime="2020-01-01">{{ $postTo->created_at }}</time>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

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
