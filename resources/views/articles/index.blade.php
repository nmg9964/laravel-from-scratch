@extends ('simplework')

@section ('content')
<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
            @foreach ($articles as $article)
			<div class="title">
				<h2>{{ $article->title }}</h2>
                <span class="byline"><a href="/articles/{{ $article->id }}">{{ $article->excerpt }}</a></span>
            </div>
            <p><img src="images/banner.jpg" alt="" class="image image-full" /> </p>
            @endforeach
		</div>
		<div id="sidebar">
			<div id="stwo-col">
				<div class="sbox1">
					<h2>Etiam rhoncus</h2>
					<ul class="style2">
						<li><a href="#">Semper quis egetmi dolore</a></li>
						<li><a href="#">Quam turpis feugiat dolor</a></li>
						<li><a href="#">Amet ornare hendrerit lectus</a></li>
						<li><a href="#">Quam turpis feugiat dolor</a></li>
					</ul>
				</div>
				<div class="sbox2">
					<h2>Integer gravida</h2>
					<ul class="style2">
						<li><a href="#">Semper quis egetmi dolore</a></li>
						<li><a href="#">Quam turpis feugiat dolor</a></li>
						<li><a href="#">Consequat lorem phasellus</a></li>
						<li><a href="#">Amet turpis feugiat amet</a></li>
					</ul>
				</div>
                <div class="sbox3">
                    <a class="button" href="/articles/create">New</a>
                </div>
			</div>
		</div>
	</div>
</div>
@endsection
