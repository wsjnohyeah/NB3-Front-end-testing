@extends('main')

@section('title','index page')

@section('optional_search_bar')
	<nav class="search-bar">
        <div class="nav-wrapper">
            <form id="search-form" method="get" action="https://www.bing.com/search" target="_blank" onsubmit="Bingsitesearch(this)">
                <div class="input-field">
                    <input id="search-q" name="q" type="hidden">
                    <input id="search-key" name="keyword" type="search" placeholder="➤  Search NoticeBoard" required>
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
                <div class="row post-card-heading no-margin">
                    <div class="col l8 hide-on-med-and-down subheader" align="left"><h6>HFI on 2016/9/4 22:54</h6></div>
                    <div class="col l4 right"><a href="#">Full article</a></div>
                </div>
            </div>
            <div class="post-user-profile">
                <div class="card-image"><img class="circle" src="assets/images/avatar.jpg" /></div>
                <div class="post-header-container">
                    <h5 class="header post-header">Recruiting PY-trade partners</h5>
                </div>
            </div>
            <div class="card-stacked">
                <div class="card-content">
                    <!--Tags. Limit to 3 per post and their length-->
                    <div class="tag-container">
                        <button class="tag-btn btn-flat waves-effect waves-light">PYTrade</button>
                        <button class="tag-btn btn-flat waves-effect waves-light">#Beethoven</button>
                        <button class="tag-btn btn-flat waves-effect waves-light">#Meme</button>
                    </div>
                    <h6 class="subheader post-header hide-on-large-only">Ludwig van Beethoven on 2016/9/4 22:54</h6>
                    <p class="flow-text">Ludwig van Beethoven was a German composer and pianist. A crucial figure in the transition between the Classical and Romantic eras in Western art music, he remains one of the most famous and influential of all composers. His best-known compositions include 9 symphonies, 5 piano concertos, 1 violin concerto, 32 piano sonatas, 16 string quartets, his great Mass the Missa solemnis, and one opera, Fidelio.Born in Bonn, then the capital of the Electorate of Cologne and part of the Holy Roman Empire, Beethoven displayed his musical talents at an early age and was taught by his father Johann van Beethoven and by composer and conductor Christian Gottlob Neefe. At the age of 21 he moved to Vienna, where he began studying composition with Joseph Haydn, and gained a reputation as a virtuoso pianist. He lived in Vienna until his death. By his late 20s his hearing began to deteriorate, and by the last decade of his life he was almost totally deaf. In 1811 he gave up conducting and performing in public but continued to compose; many of his most admired works come from these last 15 years of his life.</p>
                </div>
                <div class="card-content post-comment-card">
                    <div class="card vertical post-card-content">
                        <div class="post-user-profile">
                            <div class="card-image"><img class="circle" src="assets/images/avatar.jpg" ></div>
                            <div class="post-header-container">
                                <h6 class="header post-header"><span>Ludwig van Beethoven <span class="blue-text">commented</span></span> </br> <span>2016/9/20 1:29</span></h6>
                            </div>
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                                <p>Make PYTrade Great Again!! Make PYTrade Great Again!!</p>
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
                <div class="row post-card-heading no-margin">
                    <div class="col l8 hide-on-med-and-down subheader" align="left"><h6>HFI on 2016/9/4 22:54</h6></div>
                    <div class="col l4 right"><a href="#">Full article</a></div>
                </div>
            </div>
            <div class="post-user-profile">
                <div class="card-image"><img class="circle" src="assets/images/avatar.jpg" /></div>
                <div class="post-header-container">
                    <h5 class="header post-header">Recruiting PY-trade partners</h5>
                </div>
            </div>
            <div class="card-stacked">
                <div class="card-content">
                    <!--Tags. Limit to 3 per post and their length-->
                    <div class="tag-container">
                        <button class="tag-btn btn-flat waves-effect waves-light">PYTrade</button>
                        <button class="tag-btn btn-flat waves-effect waves-light">#Beethoven</button>
                        <button class="tag-btn btn-flat waves-effect waves-light">#Meme</button>
                    </div>
                    <h6 class="subheader post-header hide-on-large-only">Ludwig van Beethoven on 2016/9/4 22:54</h6>
                    <p class="flow-text">Ludwig van Beethoven was a German composer and pianist. A crucial figure in the transition between the Classical and Romantic eras in Western art music, he remains one of the most famous and influential of all composers. His best-known compositions include 9 symphonies, 5 piano concertos, 1 violin concerto, 32 piano sonatas, 16 string quartets, his great Mass the Missa solemnis, and one opera, Fidelio.Born in Bonn, then the capital of the Electorate of Cologne and part of the Holy Roman Empire, Beethoven displayed his musical talents at an early age and was taught by his father Johann van Beethoven and by composer and conductor Christian Gottlob Neefe. At the age of 21 he moved to Vienna, where he began studying composition with Joseph Haydn, and gained a reputation as a virtuoso pianist. He lived in Vienna until his death. By his late 20s his hearing began to deteriorate, and by the last decade of his life he was almost totally deaf. In 1811 he gave up conducting and performing in public but continued to compose; many of his most admired works come from these last 15 years of his life.</p>
                </div>
                <div class="card-content post-comment-card">
                    <div class="card vertical post-card-content">
                        <div class="post-user-profile">
                            <div class="card-image"><img class="circle" src="assets/images/avatar.jpg" ></div>
                            <div class="post-header-container">
                                <h6 class="header post-header"><span>Ludwig van Beethoven <span class="blue-text">commented</span></span> </br> <span>2016/9/20 1:29</span></h6>
                            </div>
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                                <p>Make PYTrade Great Again!! Make PYTrade Great Again!!</p>
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
                <div class="row post-card-heading no-margin">
                    <div class="col l8 hide-on-med-and-down subheader" align="left"><h6>HFI on 2016/9/4 22:54</h6></div>
                    <div class="col l4 right"><a href="#">Full article</a></div>
                </div>
            </div>
            <div class="post-user-profile">
                <div class="card-image"><img class="circle" src="assets/images/avatar.jpg" /></div>
                <div class="post-header-container">
                    <h5 class="header post-header">Recruiting PY-trade partners</h5>
                </div>
            </div>
            <div class="card-stacked">
                <div class="card-content">
                    <!--Tags. Limit to 3 per post and their length-->
                    <div class="tag-container">
                        <button class="tag-btn btn-flat waves-effect waves-light">PYTrade</button>
                        <button class="tag-btn btn-flat waves-effect waves-light">#Beethoven</button>
                        <button class="tag-btn btn-flat waves-effect waves-light">#Meme</button>
                    </div>
                    <h6 class="subheader post-header hide-on-large-only">Ludwig van Beethoven on 2016/9/4 22:54</h6>
                    <p class="flow-text">Ludwig van Beethoven was a German composer and pianist. A crucial figure in the transition between the Classical and Romantic eras in Western art music, he remains one of the most famous and influential of all composers. His best-known compositions include 9 symphonies, 5 piano concertos, 1 violin concerto, 32 piano sonatas, 16 string quartets, his great Mass the Missa solemnis, and one opera, Fidelio.Born in Bonn, then the capital of the Electorate of Cologne and part of the Holy Roman Empire, Beethoven displayed his musical talents at an early age and was taught by his father Johann van Beethoven and by composer and conductor Christian Gottlob Neefe. At the age of 21 he moved to Vienna, where he began studying composition with Joseph Haydn, and gained a reputation as a virtuoso pianist. He lived in Vienna until his death. By his late 20s his hearing began to deteriorate, and by the last decade of his life he was almost totally deaf. In 1811 he gave up conducting and performing in public but continued to compose; many of his most admired works come from these last 15 years of his life.</p>
                </div>
                <div class="card-content post-comment-card">
                    <div class="card vertical post-card-content">
                        <div class="post-user-profile">
                            <div class="card-image"><img class="circle" src="assets/images/avatar.jpg" ></div>
                            <div class="post-header-container">
                                <h6 class="header post-header"><span>Ludwig van Beethoven <span class="blue-text">commented</span></span> </br> <span>2016/9/20 1:29</span></h6>
                            </div>
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                                <p>Make PYTrade Great Again!! Make PYTrade Great Again!!</p>
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
                <div class="row post-card-heading no-margin">
                    <div class="col l8 hide-on-med-and-down subheader" align="left"><h6>HFI on 2016/9/4 22:54</h6></div>
                    <div class="col l4 right"><a href="#">Full article</a></div>
                </div>
            </div>
            <div class="post-user-profile">
                <div class="card-image"><img class="circle" src="assets/images/avatar.jpg" /></div>
                <div class="post-header-container">
                    <h5 class="header post-header">Recruiting PY-trade partners</h5>
                </div>
            </div>
            <div class="card-stacked">
                <div class="card-content">
                    <!--Tags. Limit to 3 per post and their length-->
                    <div class="tag-container">
                        <button class="tag-btn btn-flat waves-effect waves-light">PYTrade</button>
                        <button class="tag-btn btn-flat waves-effect waves-light">#Beethoven</button>
                        <button class="tag-btn btn-flat waves-effect waves-light">#Meme</button>
                    </div>
                    <h6 class="subheader post-header hide-on-large-only">Ludwig van Beethoven on 2016/9/4 22:54</h6>
                    <p class="flow-text">Ludwig van Beethoven was a German composer and pianist. A crucial figure in the transition between the Classical and Romantic eras in Western art music, he remains one of the most famous and influential of all composers. His best-known compositions include 9 symphonies, 5 piano concertos, 1 violin concerto, 32 piano sonatas, 16 string quartets, his great Mass the Missa solemnis, and one opera, Fidelio.Born in Bonn, then the capital of the Electorate of Cologne and part of the Holy Roman Empire, Beethoven displayed his musical talents at an early age and was taught by his father Johann van Beethoven and by composer and conductor Christian Gottlob Neefe. At the age of 21 he moved to Vienna, where he began studying composition with Joseph Haydn, and gained a reputation as a virtuoso pianist. He lived in Vienna until his death. By his late 20s his hearing began to deteriorate, and by the last decade of his life he was almost totally deaf. In 1811 he gave up conducting and performing in public but continued to compose; many of his most admired works come from these last 15 years of his life.</p>
                </div>
                <div class="card-content post-comment-card">
                    <div class="card vertical post-card-content">
                        <div class="post-user-profile">
                            <div class="card-image"><img class="circle" src="assets/images/avatar.jpg" ></div>
                            <div class="post-header-container">
                                <h6 class="header post-header"><span>Ludwig van Beethoven <span class="blue-text">commented</span></span> </br> <span>2016/9/20 1:29</span></h6>
                            </div>
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                                <p>Make PYTrade Great Again!! Make PYTrade Great Again!!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('post_and_tinymce')
    @include('subviews.postJS')
@endsection