<nav class="navbar navbar-color-on-scroll fixed-top navbar-expand-lg navbar-transparent" color-on-scroll="100">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="https://material-blog-pro-laravel.creative-tim.com">
                Material Blog PRO with Laravel </a>
            <button class="navbar-toggler navbar-toggler-main" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation" data-target="#sectionsNav">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="sectionsNav">
            <ul class="navbar-nav ml-auto">
                
                                    <li class="button-container dropdown nav-item mr-lg-2">
                        <a href="" target="_blank" class="btn btn-info btn-round btn-block dropdown-toggle" data-toggle="dropdown">
                            Laravel Login as
                        </a>
                        <div class="dropdown-menu dropdown-with-icons">
                            <form method="get" action="https://material-blog-pro-laravel.creative-tim.com/login" style="display: none;" id="loginForm">
                                <input type="text" value="" name="role" id="roleType">
                            </form>
                            <a href="#" class="dropdown-item mx-2" onclick="document.getElementById('roleType').value='1';
                                                                       document.getElementById('loginForm').submit();">
                                <strong>Admin</strong>&nbsp;to manage the blog
                            </a>
                            <a href="#" class="dropdown-item mx-2" onclick="document.getElementById('roleType').value='2';
                                                                       document.getElementById('loginForm').submit();">
                                <strong>Author</strong>&nbsp;to manage articles
                            </a>
                            <a href="#" class="dropdown-item mx-2" onclick="document.getElementById('roleType').value='3';
                                                                       document.getElementById('loginForm').submit();">
                                <strong>Member</strong>&nbsp;to comment
                            </a>
                        </div>
                    </li>
                
                                
                <li class="button-container nav-item iframe-extern">
                    <a href="https://www.creative-tim.com/product/material-blog-pro-laravel" target="_blank" class="btn  btn-rose   btn-round btn-block">
                        <i class="material-icons">shopping_cart</i> Buy Now
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="page-header header-filter header-small" data-parallax="true"
    style="background-image: url(&quot;{{ Storage::url('/blog/dg2.jpg') }}&quot;); transform: translate3d(0px, 0px, 0px);">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto text-center">
                <h1 class="title">
                    A fully functional Laravel blog <br class="d-none d-xl-block"> with beautiful design
                    <div class=" new-feature ">
                        <h3 class="new-sub">Get three products at the price of one.</h3>
                        <h3 class="new-sub mt-0 center-small-icon"><i
                                class="material-icons small-icon-head">dashboard</i><span class="ml-0">Ready to
                                use blog with Laravel admin</span></h3>
                        <h3 class="new-sub mt-0 center-small-icon"><i
                                class="material-icons small-icon-head">dashboard</i><span
                                class="ml-0">Material Dashboard PRO</span></h3>
                        <h3 class="new-sub mt-0 center-small-icon"><i
                                class="material-icons small-icon-head">dashboard</i>Material Kit PRO</h3>
                    </div>
                </h1>
            </div>
            <div class="main main-raised">
                <nav class="navbar navbar-expand-lg bg-white">
            <div class="container">
                <div class="navbar-translate">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation" data-target="#pagesNav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon"></span>
                        <span class="navbar-toggler-icon"></span>
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
        
                <div class="collapse navbar-collapse" id="pagesNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="https://material-blog-pro-laravel.creative-tim.com" class="nav-link"><strong>Homepage</strong></a>
                        </li>
                                            <li class="nav-item">
                                <a href="https://material-blog-pro-laravel.creative-tim.com/category/travel" class="nav-link"><strong>Travel</strong></a>
                            </li>
                                            <li class="nav-item">
                                <a href="https://material-blog-pro-laravel.creative-tim.com/category/food" class="nav-link"><strong>Food</strong></a>
                            </li>
                                            <li class="nav-item">
                                <a href="https://material-blog-pro-laravel.creative-tim.com/category/technology" class="nav-link"><strong>Technology</strong></a>
                            </li>
                                            <li class="nav-item">
                                <a href="https://material-blog-pro-laravel.creative-tim.com/category/fashion" class="nav-link"><strong>Fashion</strong></a>
                            </li>
                                            <li class="nav-item">
                                <a href="https://material-blog-pro-laravel.creative-tim.com/category/health" class="nav-link"><strong>Health</strong></a>
                            </li>
                                        <li class="nav-item">
                            <a href="https://material-blog-pro-laravel.creative-tim.com/all_articles" class="nav-link"><strong>All Articles</strong></a>
                        </li>
                    </ul>
        
                    <form action="https://material-blog-pro-laravel.creative-tim.com/search" class="form-inline ml-auto">
                        <div class="form-group no-border nav-category-search bmd-form-group">
                            <input type="text" class="form-control" name="searching" placeholder="Search">
                        </div>
                        <button type="submit" style="margin-right: 30px;" class="btn btn-white btn-just-icon btn-round">
                            <i class="material-icons">search</i>
                        </button>
                    </form>
                </div>
            </div>
        </nav>            <div class="container">
                <div class="section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 ml-auto mr-auto">
                                <h2 class="title">Featured Articles</h2>
                                    <div class="card card-plain card-blog">
                                                                                    <div class="row mt-5">
            <div class="col-md-4">
                <div class="card-header card-header-image">
                    <a href="https://material-blog-pro-laravel.creative-tim.com/article/how-to-give-up-sugar-without-giving-up-the-fun">
                                            <img class="img img-raised" src="/storage/articles-seeder/26.jpg">
                                    </a>
                <div class="colored-shadow" style="background-image: url(&quot;/storage/articles-seeder/26.jpg&quot;); opacity: 1;"></div></div>
            </div>
            <div class="col-md-8">
                <h6 class="card-category">
                    <a href="https://material-blog-pro-laravel.creative-tim.com/category/food" class="text-dark">Food</a>
                </h6>
                <h3 class="card-title">
                    <a href="https://material-blog-pro-laravel.creative-tim.com/article/how-to-give-up-sugar-without-giving-up-the-fun">How to give up sugar without giving up the fun</a>
                </h3>
                <p class="card-tags">
                                    <a href="https://material-blog-pro-laravel.creative-tim.com/tag/healthy-eating"><span style="background-color: #f44336;" class="badge badge-pill">Healthy eating</span></a>
                                    <a href="https://material-blog-pro-laravel.creative-tim.com/tag/foodie"><span style="background-color: #00bcd4;" class="badge badge-pill">Foodie</span></a>
                                    <a href="https://material-blog-pro-laravel.creative-tim.com/tag/tips&amp;tricks"><span style="background-color: #e91e63;" class="badge badge-pill">Tips &amp; tricks</span></a>
                            </p>
                <p class="card-description">
                    This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn't scroll to get here.
                    <a href="https://material-blog-pro-laravel.creative-tim.com/article/how-to-give-up-sugar-without-giving-up-the-fun "> Read More </a>
                </p>
                <p class="author">
                    by
                    <a href="https://material-blog-pro-laravel.creative-tim.com/author/william-shakespeare">
                        <b>William Shakespeare</b>
                    </a> • Oct 3, 2021 • 5 min read
                </p>
            </div>
        </div>                                                                            <div class="row mt-5">
            <div class="col-md-4">
                <div class="card-header card-header-image">
                    <a href="https://material-blog-pro-laravel.creative-tim.com/article/best-bootstrap-freebies-you-should-be-bookmarking-right-now">
                                            <img class="img img-raised" src="/storage/articles-seeder/2.jpg">
                                    </a>
                <div class="colored-shadow" style="background-image: url(&quot;/storage/articles-seeder/2.jpg&quot;); opacity: 1;"></div></div>
            </div>
            <div class="col-md-8">
                <h6 class="card-category">
                    <a href="https://material-blog-pro-laravel.creative-tim.com/category/technology" class="text-dark">Technology</a>
                </h6>
                <h3 class="card-title">
                    <a href="https://material-blog-pro-laravel.creative-tim.com/article/best-bootstrap-freebies-you-should-be-bookmarking-right-now">Best Bootstrap freebies you should be bookmarking right now</a>
                </h3>
                <p class="card-tags">
                                    <a href="https://material-blog-pro-laravel.creative-tim.com/tag/web-dev"><span style="background-color: #ff9800;" class="badge badge-pill">Web dev</span></a>
                                    <a href="https://material-blog-pro-laravel.creative-tim.com/tag/open-source"><span style="background-color: #f44336;" class="badge badge-pill">Open source</span></a>
                                    <a href="https://material-blog-pro-laravel.creative-tim.com/tag/admin-dashboards"><span style="background-color: #9c27b0;" class="badge badge-pill">Admin dashboards</span></a>
                            </p>
                <p class="card-description">
                    This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn't scroll to get here.
                    <a href="https://material-blog-pro-laravel.creative-tim.com/article/best-bootstrap-freebies-you-should-be-bookmarking-right-now "> Read More </a>
                </p>
                <p class="author">
                    by
                    <a href="https://material-blog-pro-laravel.creative-tim.com/author/jane-austen">
                        <b>Jane Austen</b>
                    </a> • Oct 1, 2021 • 5 min read
                </p>
            </div>
        </div>                                                                            <div class="row mt-5">
            <div class="col-md-4">
                <div class="card-header card-header-image">
                    <a href="https://material-blog-pro-laravel.creative-tim.com/article/backpacking-101-choosing-the-right-gear">
                                            <img class="img img-raised" src="/storage/articles-seeder/30.jpg">
                                    </a>
                <div class="colored-shadow" style="background-image: url(&quot;/storage/articles-seeder/30.jpg&quot;); opacity: 1;"></div></div>
            </div>
            <div class="col-md-8">
                <h6 class="card-category">
                    <a href="https://material-blog-pro-laravel.creative-tim.com/category/travel" class="text-dark">Travel</a>
                </h6>
                <h3 class="card-title">
                    <a href="https://material-blog-pro-laravel.creative-tim.com/article/backpacking-101-choosing-the-right-gear">Backpacking 101: Choosing the right gear</a>
                </h3>
                <p class="card-tags">
                                    <a href="https://material-blog-pro-laravel.creative-tim.com/tag/budget-traveling"><span style="background-color: #e91e63;" class="badge badge-pill">Budget travelling</span></a>
                                    <a href="https://material-blog-pro-laravel.creative-tim.com/tag/nature"><span style="background-color: #00bcd4;" class="badge badge-pill">Nature</span></a>
                                    <a href="https://material-blog-pro-laravel.creative-tim.com/tag/tips&amp;tricks"><span style="background-color: #e91e63;" class="badge badge-pill">Tips &amp; tricks</span></a>
                            </p>
                <p class="card-description">
                    This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn't scroll to get here.
                    <a href="https://material-blog-pro-laravel.creative-tim.com/article/backpacking-101-choosing-the-right-gear "> Read More </a>
                </p>
                <p class="author">
                    by
                    <a href="https://material-blog-pro-laravel.creative-tim.com/author/leo-tolstoy">
                        <b>Leo Tolstoy</b>
                    </a> • Sep 30, 2021 • 5 min read
                </p>
            </div>
        </div>                                                                </div>
                                
                            </div>
                        </div>
                    </div>
        
                    <div class="section">
                        <h2 class="title text-center">Latest articles</h2>
                        <div class="row justify-content-center">
                                                    <div class="col-md-4">
            <div class="card card-plain card-blog">
                <div class="card-header card-header-image">
                    <a href="https://material-blog-pro-laravel.creative-tim.com/article/6-insights-into-the-french-fashion-landscape">
                                            <img class="img img-raised" src="/storage/articles-seeder/9.jpg">
                                    </a>
                <div class="colored-shadow" style="background-image: url(&quot;/storage/articles-seeder/9.jpg&quot;); opacity: 1;"></div></div>
                <div class="card-body">
                    <h6 class="card-category">
                    <a href="https://material-blog-pro-laravel.creative-tim.com/category/fashion" class="text-dark">Fashion</a>
                    </h6>
                    <h4 class="card-title">
                        <a href="https://material-blog-pro-laravel.creative-tim.com/article/6-insights-into-the-french-fashion-landscape">6 insights into the French Fashion landscape</a>
                    </h4>
                    <p class="card-tags">
                                            <a href="https://material-blog-pro-laravel.creative-tim.com/tag/healthy-eating"><span style="background-color: #f44336;" class="badge badge-pill">Healthy eating</span></a>
                                    </p>
                    <p class="card-description">
                        Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses.
                        <a href="https://material-blog-pro-laravel.creative-tim.com/article/6-insights-into-the-french-fashion-landscape"> Read More </a>
                    </p>
                    <p class="author">
                        by
                        <a href="https://material-blog-pro-laravel.creative-tim.com/author/virginia-woolf">
                            <b>Virginia Woolf</b>
                        </a> • Oct 6, 2021 • 2 min read
                    </p>
                </div>
            </div>
        </div>                                            <div class="col-md-4">
            <div class="card card-plain card-blog">
                <div class="card-header card-header-image">
                    <a href="https://material-blog-pro-laravel.creative-tim.com/article/make-more-out-of-your-personal-time">
                                            <img class="img img-raised" src="/storage/articles-seeder/27.jpg">
                                    </a>
                <div class="colored-shadow" style="background-image: url(&quot;/storage/articles-seeder/27.jpg&quot;); opacity: 1;"></div></div>
                <div class="card-body">
                    <h6 class="card-category">
                    <a href="https://material-blog-pro-laravel.creative-tim.com/category/health" class="text-dark">Health</a>
                    </h6>
                    <h4 class="card-title">
                        <a href="https://material-blog-pro-laravel.creative-tim.com/article/make-more-out-of-your-personal-time">Make more out of your personal time</a>
                    </h4>
                    <p class="card-tags">
                                            <a href="https://material-blog-pro-laravel.creative-tim.com/tag/wellness"><span style="background-color: #6c757d;" class="badge badge-pill">Wellness</span></a>
                                    </p>
                    <p class="card-description">
                        Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is meh.
                        <a href="https://material-blog-pro-laravel.creative-tim.com/article/make-more-out-of-your-personal-time"> Read More </a>
                    </p>
                    <p class="author">
                        by
                        <a href="https://material-blog-pro-laravel.creative-tim.com/author/ernest-hemingway">
                            <b>Ernest Hemingway</b>
                        </a> • Oct 6, 2021 • 5 min read
                    </p>
                </div>
            </div>
        </div>                                            <div class="col-md-4">
            <div class="card card-plain card-blog">
                <div class="card-header card-header-image">
                    <a href="https://material-blog-pro-laravel.creative-tim.com/article/the-10-biggest-street-style-trends-of-2019">
                                            <img class="img img-raised" src="/storage/articles-seeder/5.jpg">
                                    </a>
                <div class="colored-shadow" style="background-image: url(&quot;/storage/articles-seeder/5.jpg&quot;); opacity: 1;"></div></div>
                <div class="card-body">
                    <h6 class="card-category">
                    <a href="https://material-blog-pro-laravel.creative-tim.com/category/fashion" class="text-dark">Fashion</a>
                    </h6>
                    <h4 class="card-title">
                        <a href="https://material-blog-pro-laravel.creative-tim.com/article/the-10-biggest-street-style-trends-of-2019">The 10 biggest street style trends of 2019</a>
                    </h4>
                    <p class="card-tags">
                                            <a href="https://material-blog-pro-laravel.creative-tim.com/tag/trending"><span style="background-color: #00bcd4;" class="badge badge-pill">Trending</span></a>
                                            <a href="https://material-blog-pro-laravel.creative-tim.com/tag/street-style"><span style="background-color: #6c757d;" class="badge badge-pill">Street style</span></a>
                                    </p>
                    <p class="card-description">
                        Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses.
                        <a href="https://material-blog-pro-laravel.creative-tim.com/article/the-10-biggest-street-style-trends-of-2019"> Read More </a>
                    </p>
                    <p class="author">
                        by
                        <a href="https://material-blog-pro-laravel.creative-tim.com/author/admin-guy">
                            <b>Admin Guy</b>
                        </a> • Oct 6, 2021 • 5 min read
                    </p>
                </div>
            </div>
        </div>                                        <a href="https://material-blog-pro-laravel.creative-tim.com/all_articles" class="btn btn-rose btn-raised btn-round">
                                View All
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-5 section-image" style="background-image: url('/material/img/bg7.jpg')">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 ml-auto mr-auto text-center">
                            <h2 class="title">Our Top Authors</h2>
                            <h5 class="description">This is the paragraph where you can write more details about your team. Keep you
                                user engaged by providing meaningful information.</h5>
                        </div>
                    </div>
                    <div class="row">
                                            <div class="col-md-6">
            <div class="card card-profile card-plain">
                <div class="row">
                    <div class="col-md-5">
                        <div class="card-header card-header-image">
                            <a href="https://material-blog-pro-laravel.creative-tim.com/author/virginia-woolf">
                                <img class="img img-raised" src="/storage/authors-seeder/15.jpg">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <a href="https://material-blog-pro-laravel.creative-tim.com/author/virginia-woolf">
                                <h4 class="card-title">Virginia Woolf</h4>
                            </a>
                            <p class="card-description">
                                                            I am swimming in my head and write rather to stablize myself than to make a correct statement.
                                                    </p>
                        </div>
                        <div class="card-footer">
                                                    <a href="https://twitter.com/VWoolfBlog" class="btn btn-just-icon btn-link btn-white" target="_blank" rel="nofollow"><i class="fa fa-twitter"></i></a>
                                                                    <a href="https://www.facebook.com/VirginiaWoolfAuthor/" class="btn btn-just-icon btn-link btn-white" target="_blank" rel="nofollow"><i class="fa fa-facebook-square"></i></a>
                                                                                    </div>
                    </div>
                </div>
            </div>
        </div>                                    <div class="col-md-6">
            <div class="card card-profile card-plain">
                <div class="row">
                    <div class="col-md-5">
                        <div class="card-header card-header-image">
                            <a href="https://material-blog-pro-laravel.creative-tim.com/author/ernest-hemingway">
                                <img class="img img-raised" src="/storage/authors-seeder/17.jpg">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <a href="https://material-blog-pro-laravel.creative-tim.com/author/ernest-hemingway">
                                <h4 class="card-title">Ernest Hemingway</h4>
                            </a>
                            <p class="card-description">
                                                            In the morning I walked down the Boulevard to the rue Soufflot for coffee and brioche. It was a fine morning. The horse-chestnut trees in the Luxembourg gardens were in bloom.
                                                    </p>
                        </div>
                        <div class="card-footer">
                                                    <a href="https://twitter.com/DailyHemingway" class="btn btn-just-icon btn-link btn-white" target="_blank" rel="nofollow"><i class="fa fa-twitter"></i></a>
                                                                    <a href="https://www.facebook.com/ErnestHemingwayAuthor/" class="btn btn-just-icon btn-link btn-white" target="_blank" rel="nofollow"><i class="fa fa-facebook-square"></i></a>
                                                                                        <a href="https://www.linkedin.com/in/ernest-hemingway-91a752b3" class="btn btn-just-icon btn-link btn-white" target="_blank" rel="nofollow"><i class="fa fa-linkedin"></i></a>
                                            </div>
                    </div>
                </div>
            </div>
        </div>                                    <div class="col-md-6">
            <div class="card card-profile card-plain">
                <div class="row">
                    <div class="col-md-5">
                        <div class="card-header card-header-image">
                            <a href="https://material-blog-pro-laravel.creative-tim.com/author/william-shakespeare">
                                <img class="img img-raised" src="/storage/authors-seeder/18.jpg">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <a href="https://material-blog-pro-laravel.creative-tim.com/author/william-shakespeare">
                                <h4 class="card-title">William Shakespeare</h4>
                            </a>
                            <p class="card-description">
                                                            All the world's a stage and all the men and women merely players. They have their exits and their entrances; And one man in his time plays many parts.
                                                    </p>
                        </div>
                        <div class="card-footer">
                                                                    <a href="https://www.facebook.com/WilliamShakespeareAuthor/" class="btn btn-just-icon btn-link btn-white" target="_blank" rel="nofollow"><i class="fa fa-facebook-square"></i></a>
                                                                                        <a href="https://www.linkedin.com/in/william-shakespeare-ab549ba3" class="btn btn-just-icon btn-link btn-white" target="_blank" rel="nofollow"><i class="fa fa-linkedin"></i></a>
                                            </div>
                    </div>
                </div>
            </div>
        </div>                                    <div class="col-md-6">
            <div class="card card-profile card-plain">
                <div class="row">
                    <div class="col-md-5">
                        <div class="card-header card-header-image">
                            <a href="https://material-blog-pro-laravel.creative-tim.com/author/jane-austen">
                                <img class="img img-raised" src="/storage/authors-seeder/25.jpg">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <a href="https://material-blog-pro-laravel.creative-tim.com/author/jane-austen">
                                <h4 class="card-title">Jane Austen</h4>
                            </a>
                            <p class="card-description">
                                                            To be always firm must be to be often obstinate. When properly to relax is the trial of judgment.
                                                    </p>
                        </div>
                        <div class="card-footer">
                                                    <a href="https://twitter.com/JaneAustenLIVES" class="btn btn-just-icon btn-link btn-white" target="_blank" rel="nofollow"><i class="fa fa-twitter"></i></a>
                                                                    <a href="https://www.facebook.com/JaneAustenAuthor/" class="btn btn-just-icon btn-link btn-white" target="_blank" rel="nofollow"><i class="fa fa-facebook-square"></i></a>
                                                                                    </div>
                    </div>
                </div>
            </div>
        </div>                            </div>
                </div>
            </div>
            </div>