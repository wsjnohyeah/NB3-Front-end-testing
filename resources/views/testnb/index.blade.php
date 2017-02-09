@extends('test')

@section('title','index page')

@section('optional_search_bar')
	<nav class="search-bar">
        <div class="nav-wrapper">
            <form id="search-form" method="get" action="https://www.bing.com/search" target="_blank" onsubmit="Bingsitesearch(this)">
                <div class="input-field">
                    <input id="search" name="q" type="hidden">
                    <input id="search" name="keyword" type="text" placeholder="Search NoticeBoard" required>
                    <label for="search"><i class="material-icons">search</i></label>
                    <i class="material-icons" onclick="do_search()">done</i>
                </div>
            </form>
        </div>
    </nav>
@endsection

@section('optional_post_form')
	<div id="new-post" class="modal modal-fixed-footer">
        <div class="modal-content row">
            <form id="new-post-form" class="col s12">
                <h4>New Post</h4>
                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="new-post-content" class="materialize-textarea"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="file-field input-field">
                        <div class="btn add-file-btn waves-effect waves-light">
                            <span>File</span>
                            <input type="file" multiple>
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" placeholder="Upload one or more files">
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button id="new-post-submit" class="btn-flat waves-effect waves-light" onclick="javascript:newPostSubmit()">Submit
                <i class="material-icons right">send</i>
            </button>
        </div>
    </div>
@endsection


@section('content')
	<div class="post-card">
        <div class="card vertical post-card-content">
            <div class="card-action">
                <h6 class="subheader post-header hide-on-med-and-down">Ludwig van Beethoven on 2016/9/4 22:54</h6>
                <a href="#">Full article</a>
            </div>
            <div class="post-user-profile">
                <div class="card-image"><img class="circle" src="assets/images/avatar.jpg" /></div>
                <div class="post-header-container">
                    <h4 class="header post-header">Recruiting PY-trade partners</h4>
                </div>
            </div>
            <div class="card-stacked">
                <div class="card-content">
                    <!--Tags. Limit to 3 per post and their length-->
                    <div class="tag-container">
                        <button class="tag-btn btn-flat waves-effect waves-light blue-text">#PYTrade</button>
                        <button class="tag-btn btn-flat waves-effect waves-light blue-text">#Beethoven</button>
                        <button class="tag-btn btn-flat waves-effect waves-light blue-text">#Meme</button>
                    </div>
                    <h6 class="subheader post-header hide-on-large-only">Ludwig van Beethoven on 2016/9/4 22:54</h6>
                    <p class="flow-text">
                        Ludwig van Beethoven was a German composer. A crucial figure in the transition between the Classical and Romantic eras in
                        Western art music, he remains one of the most famous and influential of all composers. His best-known
                        compositions include 9 symphonies, 5 piano concertos, 1 violin concerto, 32 piano sonatas, 16 string
                        quartets, his great Mass the Missa solemnis and an opera, Fidelio. Ludwig van Beethoven was a German
                        composer. A crucial figure in the transition between the Classical and Romantic eras in Western art
                        music, he remains one of the most famous and influential of all composers. His best-known compositions
                        include 9 symphonies, 5 piano concertos, 1 violin concerto, 32 piano sonatas, 16 string quartets,
                        his great Mass the Missa solemnis and an opera, Fidelio. Ludwig van Beethoven was a German composer.
                        A crucial figure in the transition between the Classical and Romantic eras in Western art music,
                        he remains one of the most famous and influential of all composers. His best-known compositions include
                        9 symphonies, 5 piano concertos, 1 violin concerto, 32 piano sonatas, 16 string quartets, his great
                        Mass the Missa solemnis and an opera, Fidelio. Ludwig van Beethoven was a German composer. A crucial
                        figure in the transition between the Classical and Romantic eras in Western art music, he remains
                        one of the most famous and influential of all composers. His best-known compositions include 9 symphonies,
                        5 piano concertos, 1 violin concerto, 32 piano sonatas, 16 string quartets, his great Mass the Missa
                        solemnis and an opera, Fidelio.</p>
                </div>
                <div class="card-content post-comment-card">
					<p class="green-text">Most Recent Comment:</p>
                    <div class="card vertical post-card-content">
                        <div class="post-user-profile">
                            <div class="card-image"><img class="circle" src="assets/images/avatar.jpg" /></div>
                            <div class="post-header-container">
                                <h6 class="header post-header">Ludwig van Beethoven</br>2016/9/20 1:29</h6>
                            </div>
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                                <p>
                                    To be, or not to be, that is the question.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="post-card">
        <div class="card vertical post-card-content">
            <div class="card-action">
                <h6 class="subheader post-header hide-on-med-and-down">Ludwig van Beethoven on 2016/9/4 22:54</h6>
                <a href="#">Full article</a>
            </div>
            <div class="post-user-profile">
                <div class="card-image"><img class="circle" src="assets/images/avatar.jpg" /></div>
                <div class="post-header-container">
                    <h4 class="header post-header">Recruiting PY-trade partners</h4>
                </div>
            </div>
            <div class="card-stacked">
                <div class="card-content">
                    <!--Tags. Limit to 3 per post and their length-->
                    <div class="tag-container">
                        <button class="tag-btn btn-flat waves-effect waves-light blue-text">#PYTrade</button>
                        <button class="tag-btn btn-flat waves-effect waves-light blue-text">#Beethoven</button>
                        <button class="tag-btn btn-flat waves-effect waves-light blue-text">#Meme</button>
                    </div>
                    <h6 class="subheader post-header hide-on-large-only">Ludwig van Beethoven on 2016/9/4 22:54</h6>
                    <p class="flow-text">
                        Ludwig van Beethoven was a German composer. A crucial figure in the transition between the Classical and Romantic eras in
                        Western art music, he remains one of the most famous and influential of all composers. His best-known
                        compositions include 9 symphonies, 5 piano concertos, 1 violin concerto, 32 piano sonatas, 16 string
                        quartets, his great Mass the Missa solemnis and an opera, Fidelio. Ludwig van Beethoven was a German
                        composer. A crucial figure in the transition between the Classical and Romantic eras in Western art
                        music, he remains one of the most famous and influential of all composers. His best-known compositions
                        include 9 symphonies, 5 piano concertos, 1 violin concerto, 32 piano sonatas, 16 string quartets,
                        his great Mass the Missa solemnis and an opera, Fidelio. Ludwig van Beethoven was a German composer.
                        A crucial figure in the transition between the Classical and Romantic eras in Western art music,
                        he remains one of the most famous and influential of all composers. His best-known compositions include
                        9 symphonies, 5 piano concertos, 1 violin concerto, 32 piano sonatas, 16 string quartets, his great
                        Mass the Missa solemnis and an opera, Fidelio. Ludwig van Beethoven was a German composer. A crucial
                        figure in the transition between the Classical and Romantic eras in Western art music, he remains
                        one of the most famous and influential of all composers. His best-known compositions include 9 symphonies,
                        5 piano concertos, 1 violin concerto, 32 piano sonatas, 16 string quartets, his great Mass the Missa
                        solemnis and an opera, Fidelio.</p>
                </div>
                <div class="card-content post-comment-card">
					<p class="green-text">Most Recent Comment:</p>
                    <div class="card vertical post-card-content">
                        <div class="post-user-profile">
                            <div class="card-image"><img class="circle" src="assets/images/avatar.jpg" /></div>
                            <div class="post-header-container">
                                <h6 class="header post-header">Ludwig van Beethoven</br>2016/9/20 1:29</h6>
                            </div>
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                                <p>
                                    To be, or not to be, that is the question.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="post-card">
        <div class="card vertical post-card-content">
            <div class="card-action">
                <h6 class="subheader post-header hide-on-med-and-down">Ludwig van Beethoven on 2016/9/4 22:54</h6>
                <a href="#">Full article</a>
            </div>
            <div class="post-user-profile">
                <div class="card-image"><img class="circle" src="assets/images/avatar.jpg" /></div>
                <div class="post-header-container">
                    <h4 class="header post-header">Recruiting PY-trade partners</h4>
                </div>
            </div>
            <div class="card-stacked">
                <div class="card-content">
                    <!--Tags. Limit to 3 per post and their length-->
                    <div class="tag-container">
                        <button class="tag-btn btn-flat waves-effect waves-light blue-text">#PYTrade</button>
                        <button class="tag-btn btn-flat waves-effect waves-light blue-text">#Beethoven</button>
                        <button class="tag-btn btn-flat waves-effect waves-light blue-text">#Meme</button>
                    </div>
                    <h6 class="subheader post-header hide-on-large-only">Ludwig van Beethoven on 2016/9/4 22:54</h6>
                    <p class="flow-text">
                        Ludwig van Beethoven was a German composer. A crucial figure in the transition between the Classical and Romantic eras in
                        Western art music, he remains one of the most famous and influential of all composers. His best-known
                        compositions include 9 symphonies, 5 piano concertos, 1 violin concerto, 32 piano sonatas, 16 string
                        quartets, his great Mass the Missa solemnis and an opera, Fidelio. Ludwig van Beethoven was a German
                        composer. A crucial figure in the transition between the Classical and Romantic eras in Western art
                        music, he remains one of the most famous and influential of all composers. His best-known compositions
                        include 9 symphonies, 5 piano concertos, 1 violin concerto, 32 piano sonatas, 16 string quartets,
                        his great Mass the Missa solemnis and an opera, Fidelio. Ludwig van Beethoven was a German composer.
                        A crucial figure in the transition between the Classical and Romantic eras in Western art music,
                        he remains one of the most famous and influential of all composers. His best-known compositions include
                        9 symphonies, 5 piano concertos, 1 violin concerto, 32 piano sonatas, 16 string quartets, his great
                        Mass the Missa solemnis and an opera, Fidelio. Ludwig van Beethoven was a German composer. A crucial
                        figure in the transition between the Classical and Romantic eras in Western art music, he remains
                        one of the most famous and influential of all composers. His best-known compositions include 9 symphonies,
                        5 piano concertos, 1 violin concerto, 32 piano sonatas, 16 string quartets, his great Mass the Missa
                        solemnis and an opera, Fidelio.</p>
                </div>
                <div class="card-content post-comment-card">
					<p class="green-text">Most Recent Comment:</p>
                    <div class="card vertical post-card-content">
                        <div class="post-user-profile">
                            <div class="card-image"><img class="circle" src="assets/images/avatar.jpg" /></div>
                            <div class="post-header-container">
                                <h6 class="header post-header">Ludwig van Beethoven</br>2016/9/20 1:29</h6>
                            </div>
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                                <p>
                                    To be, or not to be, that is the question.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="post-card">
        <div class="card vertical post-card-content">
            <div class="card-action">
                <h6 class="subheader post-header hide-on-med-and-down">Ludwig van Beethoven on 2016/9/4 22:54</h6>
                <a href="#">Full article</a>
            </div>
            <div class="post-user-profile">
                <div class="card-image"><img class="circle" src="assets/images/avatar.jpg" /></div>
                <div class="post-header-container">
                    <h4 class="header post-header">Recruiting PY-trade partners</h4>
                </div>
            </div>
            <div class="card-stacked">
                <div class="card-content">
                    <!--Tags. Limit to 3 per post and their length-->
                    <div class="tag-container">
                        <button class="tag-btn btn-flat waves-effect waves-light blue-text">#PYTrade</button>
                        <button class="tag-btn btn-flat waves-effect waves-light blue-text">#Beethoven</button>
                        <button class="tag-btn btn-flat waves-effect waves-light blue-text">#Meme</button>
                    </div>
                    <h6 class="subheader post-header hide-on-large-only">Ludwig van Beethoven on 2016/9/4 22:54</h6>
                    <p class="flow-text">
                        Ludwig van Beethoven was a German composer. A crucial figure in the transition between the Classical and Romantic eras in
                        Western art music, he remains one of the most famous and influential of all composers. His best-known
                        compositions include 9 symphonies, 5 piano concertos, 1 violin concerto, 32 piano sonatas, 16 string
                        quartets, his great Mass the Missa solemnis and an opera, Fidelio. Ludwig van Beethoven was a German
                        composer. A crucial figure in the transition between the Classical and Romantic eras in Western art
                        music, he remains one of the most famous and influential of all composers. His best-known compositions
                        include 9 symphonies, 5 piano concertos, 1 violin concerto, 32 piano sonatas, 16 string quartets,
                        his great Mass the Missa solemnis and an opera, Fidelio. Ludwig van Beethoven was a German composer.
                        A crucial figure in the transition between the Classical and Romantic eras in Western art music,
                        he remains one of the most famous and influential of all composers. His best-known compositions include
                        9 symphonies, 5 piano concertos, 1 violin concerto, 32 piano sonatas, 16 string quartets, his great
                        Mass the Missa solemnis and an opera, Fidelio. Ludwig van Beethoven was a German composer. A crucial
                        figure in the transition between the Classical and Romantic eras in Western art music, he remains
                        one of the most famous and influential of all composers. His best-known compositions include 9 symphonies,
                        5 piano concertos, 1 violin concerto, 32 piano sonatas, 16 string quartets, his great Mass the Missa
                        solemnis and an opera, Fidelio.</p>
                </div>
                <div class="card-content post-comment-card">
					<p class="green-text">Most Recent Comment:</p>
                    <div class="card vertical post-card-content">
                        <div class="post-user-profile">
                            <div class="card-image"><img class="circle" src="assets/images/avatar.jpg" /></div>
                            <div class="post-header-container">
                                <h6 class="header post-header">Ludwig van Beethoven</br>2016/9/20 1:29</h6>
                            </div>
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                                <p>
                                    To be, or not to be, that is the question.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="post-card">
        <div class="card vertical post-card-content">
            <div class="card-action">
                <h6 class="subheader post-header hide-on-med-and-down">Ludwig van Beethoven on 2016/9/4 22:54</h6>
                <a href="#">Full article</a>
            </div>
            <div class="post-user-profile">
                <div class="card-image"><img class="circle" src="assets/images/avatar.jpg" /></div>
                <div class="post-header-container">
                    <h4 class="header post-header">Recruiting PY-trade partners</h4>
                </div>
            </div>
            <div class="card-stacked">
                <div class="card-content">
                    <!--Tags. Limit to 3 per post and their length-->
                    <div class="tag-container">
                        <button class="tag-btn btn-flat waves-effect waves-light blue-text">#PYTrade</button>
                        <button class="tag-btn btn-flat waves-effect waves-light blue-text">#Beethoven</button>
                        <button class="tag-btn btn-flat waves-effect waves-light blue-text">#Meme</button>
                    </div>
                    <h6 class="subheader post-header hide-on-large-only">Ludwig van Beethoven on 2016/9/4 22:54</h6>
                    <p class="flow-text">
                        Ludwig van Beethoven was a German composer. A crucial figure in the transition between the Classical and Romantic eras in
                        Western art music, he remains one of the most famous and influential of all composers. His best-known
                        compositions include 9 symphonies, 5 piano concertos, 1 violin concerto, 32 piano sonatas, 16 string
                        quartets, his great Mass the Missa solemnis and an opera, Fidelio. Ludwig van Beethoven was a German
                        composer. A crucial figure in the transition between the Classical and Romantic eras in Western art
                        music, he remains one of the most famous and influential of all composers. His best-known compositions
                        include 9 symphonies, 5 piano concertos, 1 violin concerto, 32 piano sonatas, 16 string quartets,
                        his great Mass the Missa solemnis and an opera, Fidelio. Ludwig van Beethoven was a German composer.
                        A crucial figure in the transition between the Classical and Romantic eras in Western art music,
                        he remains one of the most famous and influential of all composers. His best-known compositions include
                        9 symphonies, 5 piano concertos, 1 violin concerto, 32 piano sonatas, 16 string quartets, his great
                        Mass the Missa solemnis and an opera, Fidelio. Ludwig van Beethoven was a German composer. A crucial
                        figure in the transition between the Classical and Romantic eras in Western art music, he remains
                        one of the most famous and influential of all composers. His best-known compositions include 9 symphonies,
                        5 piano concertos, 1 violin concerto, 32 piano sonatas, 16 string quartets, his great Mass the Missa
                        solemnis and an opera, Fidelio.</p>
                </div>
                <div class="card-content post-comment-card">
					<p class="green-text">Most Recent Comment:</p>
                    <div class="card vertical post-card-content">
                        <div class="post-user-profile">
                            <div class="card-image"><img class="circle" src="assets/images/avatar.jpg" /></div>
                            <div class="post-header-container">
                                <h6 class="header post-header">Ludwig van Beethoven</br>2016/9/20 1:29</h6>
                            </div>
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                                <p>
                                    To be, or not to be, that is the question.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="post-card">
        <div class="card vertical post-card-content">
            <div class="card-action">
                <h6 class="subheader post-header hide-on-med-and-down">Ludwig van Beethoven on 2016/9/4 22:54</h6>
                <a href="#">Full article</a>
            </div>
            <div class="post-user-profile">
                <div class="card-image"><img class="circle" src="assets/images/avatar.jpg" /></div>
                <div class="post-header-container">
                    <h4 class="header post-header">Recruiting PY-trade partners</h4>
                </div>
            </div>
            <div class="card-stacked">
                <div class="card-content">
                    <!--Tags. Limit to 3 per post and their length-->
                    <div class="tag-container">
                        <button class="tag-btn btn-flat waves-effect waves-light blue-text">#PYTrade</button>
                        <button class="tag-btn btn-flat waves-effect waves-light blue-text">#Beethoven</button>
                        <button class="tag-btn btn-flat waves-effect waves-light blue-text">#Meme</button>
                    </div>
                    <h6 class="subheader post-header hide-on-large-only">Ludwig van Beethoven on 2016/9/4 22:54</h6>
                    <p class="flow-text">
                        Ludwig van Beethoven was a German composer. A crucial figure in the transition between the Classical and Romantic eras in
                        Western art music, he remains one of the most famous and influential of all composers. His best-known
                        compositions include 9 symphonies, 5 piano concertos, 1 violin concerto, 32 piano sonatas, 16 string
                        quartets, his great Mass the Missa solemnis and an opera, Fidelio. Ludwig van Beethoven was a German
                        composer. A crucial figure in the transition between the Classical and Romantic eras in Western art
                        music, he remains one of the most famous and influential of all composers. His best-known compositions
                        include 9 symphonies, 5 piano concertos, 1 violin concerto, 32 piano sonatas, 16 string quartets,
                        his great Mass the Missa solemnis and an opera, Fidelio. Ludwig van Beethoven was a German composer.
                        A crucial figure in the transition between the Classical and Romantic eras in Western art music,
                        he remains one of the most famous and influential of all composers. His best-known compositions include
                        9 symphonies, 5 piano concertos, 1 violin concerto, 32 piano sonatas, 16 string quartets, his great
                        Mass the Missa solemnis and an opera, Fidelio. Ludwig van Beethoven was a German composer. A crucial
                        figure in the transition between the Classical and Romantic eras in Western art music, he remains
                        one of the most famous and influential of all composers. His best-known compositions include 9 symphonies,
                        5 piano concertos, 1 violin concerto, 32 piano sonatas, 16 string quartets, his great Mass the Missa
                        solemnis and an opera, Fidelio.</p>
                </div>
                <div class="card-content post-comment-card">
					<p class="green-text">Most Recent Comment:</p>
                    <div class="card vertical post-card-content">
                        <div class="post-user-profile">
                            <div class="card-image"><img class="circle" src="assets/images/avatar.jpg" /></div>
                            <div class="post-header-container">
                                <h6 class="header post-header">Ludwig van Beethoven</br>2016/9/20 1:29</h6>
                            </div>
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                                <p>
                                    To be, or not to be, that is the question.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection