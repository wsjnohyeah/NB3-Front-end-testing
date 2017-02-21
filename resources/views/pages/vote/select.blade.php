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
                    
                        <form id="vote-form" action="testvote" method="post" accept-charset="utf-8">
                        {{--Important!!!! This form will return all IDs of selected items in JSON in the name of "selected" !--}}
                        {{--选项id结构设置为"vote-item-{id}"，其中，{id}请改为改选项在数据库中的primary key 值--}}
                        
                        <input type="hidden" name="selected" id="vote-selected">
                        {{ csrf_field() }}

                        <!-- Vote Question Block: Copy this block for multi-questions -->
                        <div class="vote-block">
                            <p class="flow-text">Choose your favorite programming language!!</p>
                            <br>
                            <div class="vote-info">
                                    <p>
                                        <input class="with-gap" name="group1" type="radio" id="vote-item-1"  />
                                        <label for="vote-item-1">ALL FOR JAVA!!!!</label>
                                    </p>
                                    <p>
                                        <input class="with-gap" name="group1" type="radio" id="vote-item-2"  />
                                        <label for="vote-item-2">PHP IS THE BEST!!!!</label>
                                    </p>
                                    <p>
                                        <input class="with-gap" name="group1" type="radio" id="vote-item-3"  />
                                        <label for="vote-item-3">C++ CHANGES THE WORLD!!!!</label>
                                    </p>
                                    <p>
                                        <input class="with-gap" name="group1" type="radio" id="vote-item-4"  />
                                        <label for="vote-item-4">JAVASCRIPT EVERYTHING!!!</label>
                                    </p>
                                    <p>
                                        <input class="with-gap" name="group1" type="radio" id="vote-item-5"  />
                                        <label for="vote-item-5">RUBY THE HELL OUT!</label>
                                    </p>
                                    <p>
                                        <input class="with-gap" name="group1" type="radio" id="vote-item-6"  />
                                        <label for="vote-item-6">PYTHON AND PY TRADE!</label>
                                    </p>
                                    <p>
                                        <input type="checkbox" class="filled-in" id="vote-item-7" />
                                        <label for="vote-item-7">SWIFT AND LIGHT-SPEED!</label>
                                    </p>
                                    <p>
                                        <input type="checkbox" class="filled-in" id="vote-item-8" />
                                        <label for="vote-item-8">C FOR CLASSIC!</label>
                                    </p>
                                    <p>
                                        <input type="checkbox" class="filled-in" id="vote-item-9" />
                                        <label for="vote-item-9">WTF? IS HTML A PROGRAMMING LANGUAGE?</label>
                                    </p>
                            </div>
                        </div>
                        <!--End Vote Question Block-->

                        <!-- Vote Question Block: Copy this block for multi-questions -->
                        <div class="vote-block">
                            <p class="flow-text">Choose your favorite programming language!!</p>
                            <br>
                            <div class="vote-info">
                                    <p>
                                        <input class="with-gap" name="group2" type="radio" id="vote-item-10"  />
                                        <label for="vote-item-10">ALL FOR JAVA!!!!</label>
                                    </p>
                                    <p>
                                        <input class="with-gap" name="group2" type="radio" id="vote-item-11"  />
                                        <label for="vote-item-11">PHP IS THE BEST!!!!</label>
                                    </p>
                                    <p>
                                        <input type="checkbox" class="filled-in" id="vote-item-12" />
                                        <label for="vote-item-12">SWIFT AND LIGHT-SPEED!</label>
                                    </p>
                                    <p>
                                        <input type="checkbox" class="filled-in" id="vote-item-13" />
                                        <label for="vote-item-13">C FOR CLASSIC!</label>
                                    </p>
                                    <p>
                                        <input type="checkbox" class="filled-in" id="vote-item-14" />
                                        <label for="vote-item-14">WTF? IS HTML A PROGRAMMING LANGUAGE?</label>
                                    </p>
                            </div>
                        </div>
                        <!--End Vote Question Block-->

                    </form>


                </div>
            </div>
            <div class="card-action">
                <div class="btn waves-effect waves-light blue no-shadow" onclick="doVote()">Submit
                    <i class="material-icons right">send</i>
                </div>
            </div>
        </div>
    </div>
	
@endsection

@section('optional_script')
    <script type="text/javascript" src="js/vote.js"></script>
@endsection

