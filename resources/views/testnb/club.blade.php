@extends('test')

@section('title','article page')

@section('optional_style')
	<link rel="stylesheet" href="css/club.css" type="text/css" charset="utf-8" />
@endsection

@section('content')
	<div class="post-card club-card">
		<div class="card vertical post-card-content">
			<div class="post-user-profile">
				<div class="card-image article-avatar"><img class="circle" src="assets/images/avatar.jpg" /></div>
			</div>
			<div class="post-header-container title-container">
				<h3 class="header post-header railway">HFI Programming Club</h3>
			</div>
			<!--Club motto-->
			<div class="post-header-container">
				<h5 class="header post-header railway subheader">Inventing futures through coding</h5>
			</div>
			<div class="card-stacked">
				<div class="card-content">
					<p class="club-card-text">
						<!--Club description-->
						A spectre is haunting Europe --- the spectre of communism. All the powers of old Europe have entered into a holy alliance
						to exorcise this spectre: Pope and Tsar, Metternich and Guizot, French Radicals and German police-spies. Where is the
						party in opposition that has not been decried as communistic by its opponents in power? Where is the opposition that
						has not hurled back the branding reproach of communism, against the more advanced opposition parties, as well as against
						its reactionary adversaries? </p>
				</div>
			</div>
		</div>
	</div>
	<!--Club card container-->
	<div class="row club-card-container">
		<!--Event list-->
		<div class="post-card card club-event-list club-list col s12 l4 push-l8">
			<ul class="collection with-header">
				<li class="collection-header">
					Upcoming Events
				</li>
				<li class="collection-item">
					<span class="title">Web programming session</span>
					<p class="subheader">2016/10/20 16:06 <br> Room 205
					</p>
				</li>
				<li class="collection-item">
					<span class="title">Safety hat induction</span>
					<p class="subheader">2016/10/30 16:06 <br> Room 206
					</p>
				</li>
				<li class="collection-item">
					<span class="title">Advanced Shaji survival session</span>
					<p class="subheader">2016/11/30 16:06 <br> Room ICT
					</p>
				</li>
			</ul>
			<div class="card-action">
				<a href="">All Events</a>
			</div>
		</div>
		<!--Core member list-->
		<div class="member-list-container col s12 l8 pull-l4">
			<div class="post-card card club-member-list club-list">
				<ul class="collection with-header">
					<li class="collection-header">
						Committee Members
					</li>
					<li class="collection-item avatar">
						<img src="assets/images/ethan.png" alt="" class="circle">
						<span class="title railway">MEthan Ethanol</span>
						<p class="railway subheader italic">THE REALITY FILLER
						</p>
						<a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
					</li>
					<li class="collection-item avatar">
						<img src="assets/images/howard.png" alt="" class="circle">
						<span class="title railway">Lord Howard</span>
						<p class="railway subheader italic">1ST LORD OF HOWARD
						</p>
						<a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
					</li>
					<li class="collection-item avatar">
						<img src="assets/images/micheal.png" alt="" class="circle">
						<span class="title railway">Micheal EVA Rin</span>
						<p class="railway subheader italic">THE SUPERHACKER
						</p>
						<a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
					</li>
					<!--<li class="collection-item avatar">
						<img src="assets/images/season.png" alt="" class="circle">
						<span class="title railway">Mr. Season</span>
						<p class="railway subheader italic">A FOUNDING FATHER
						</p>
						<a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
					</li>-->
					<li class="collection-item avatar">
						<img src="assets/images/concord.png" alt="" class="circle">
						<span class="title railway">Conoha Concordia</span>
						<p class="railway subheader italic">IMPERIAL NEKO CASTER
						</p>
						<a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
					</li>
				</ul>
				<div class="card-action">
					<a href="">All Members</a>
				</div>
			</div>
		</div>
	</div>
@endsection