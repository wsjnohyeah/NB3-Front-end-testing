@extends('main')

@section('title','vote result page')

@section('content')
	<div class="post-card">
        <div class="card vertical post-card-content">
            <div class="card-action">
                <div class="row post-card-heading no-margin">
                    <div class="col s12 subheader" align="left"><h6>Ludwig van Beethoven on 2016/9/4 22:54</h6></div>                </div>
            </div>
            <div class="post-user-profile">
                <div class="card-image"><img class="circle" src="assets/images/avatar.jpg" /></div>
                <div class="post-header-container">
                    <h5 class="header post-header">Programming Languages!</h5>
                </div>
            </div>
            <div class="card-stacked">
                <div class="card-content display-all">
                    <!--Tags. Limit to 3 per post and their length-->
                    <div class="tag-container">
                        <button class="tag-btn btn-flat waves-effect waves-light">#International Day</button>
                        <button class="tag-btn btn-flat waves-effect waves-light">#Fuck PHP</button>
                    </div>
                    <br>
                    <p class="flow-text">Choose your favorite programming language!!</p>
                    <br>
                    <div class="vote-info">
                        <div class="vote-result-pack">
                            <div>ALL FOR JAVA!!!!</div>
                            <div class="progress no-margin"><div class="determinate" style="width: 70%"></div></div>
                            <div align="right">40 Votes, 70%</div>
                        </div>
                        <div class="vote-result-pack">
                            <div>ALL FOR JAVA!!!!</div>
                            <div class="progress no-margin"><div class="determinate" style="width: 70%"></div></div>
                            <div align="right">40 Votes, 70%</div>
                        </div>
                        <div class="vote-result-pack">
                            <div>ALL FOR JAVA!!!!</div>
                            <div class="progress no-margin"><div class="determinate" style="width: 70%"></div></div>
                            <div align="right">40 Votes, 70%</div>
                        </div> 
                        <div class="vote-result-pack">
                            <div>ALL FOR JAVA!!!!</div>
                            <div class="progress no-margin"><div class="determinate" style="width: 70%"></div></div>
                            <div align="right">40 Votes, 70%</div>
                        </div> 
                        <div class="vote-result-pack">
                            <div>ALL FOR JAVA!!!!</div>
                            <div class="progress no-margin"><div class="determinate" style="width: 70%"></div></div>
                            <div align="right">40 Votes, 70%</div>
                        </div> 
                        <div class="vote-result-pack">
                            <div>ALL FOR JAVA!!!!</div>
                            <div class="progress no-margin"><div class="determinate" style="width: 70%"></div></div>
                            <div align="right">40 Votes, 70%</div>
                        </div> 
                        <div class="vote-result-pack">
                            <div>ALL FOR JAVA!!!!</div>
                            <div class="progress no-margin"><div class="determinate" style="width: 70%"></div></div>
                            <div align="right">40 Votes, 70%</div>
                        </div>       
                    </div>
                </div>
            </div>
        </div>
    </div>
	
@endsection