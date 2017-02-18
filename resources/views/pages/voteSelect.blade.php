@extends('main')

@section('title','vote selection page')

@section('content')
	<div class="post-card">
        <div class="card vertical post-card-content">
            <div class="card-action">
                <div class="row post-card-heading no-margin">
                    <div class="col s12 subheader" align="left"><h6>Ludwig van Beethoven on 2016/9/4 22:54</h6></div>                
                </div>
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
                        <form action="#">
                            <p>
                                <input class="with-gap" name="group1" type="radio" id="test1"  />
                                <label for="test1">ALL FOR JAVA!!!!</label>
                            </p>
                            <p>
                                <input class="with-gap" name="group1" type="radio" id="test2"  />
                                <label for="test2">PHP IS THE BEST!!!!</label>
                            </p>
                            <p>
                                <input class="with-gap" name="group1" type="radio" id="test3"  />
                                <label for="test3">C++ CHANGES THE WORLD!!!!</label>
                            </p>
                            <p>
                                <input class="with-gap" name="group1" type="radio" id="test4"  />
                                <label for="test4">JAVASCRIPT EVERYTHING!!!</label>
                            </p>
                            <p>
                                <input class="with-gap" name="group1" type="radio" id="test5"  />
                                <label for="test5">RUBY THE HELL OUT!</label>
                            </p>
                            <p>
                                <input class="with-gap" name="group1" type="radio" id="test6"  />
                                <label for="test6">PYTHON AND PY TRADE!</label>
                            </p>
                            <p>
                                <input type="checkbox" class="filled-in" id="test7" />
                                <label for="test7">SWIFT AND LIGHT-SPEED!</label>
                            </p>
                            <p>
                                <input type="checkbox" class="filled-in" id="test8" />
                                <label for="test8">C FOR CLASSIC!</label>
                            </p>
                            <p>
                                <input type="checkbox" class="filled-in" id="test9" />
                                <label for="test9">WTF? IS HTML A PROGRAMMING LANGUAGE?</label>
                            </p>
                      </form>
                    </div>
                </div>
            </div>
            <div class="card-action">
                <button class="btn waves-effect waves-light blue no-shadow" type="submit" name="action">Submit
                    <i class="material-icons right">send</i>
                </button>
            </div>
        </div>
    </div>
	
@endsection