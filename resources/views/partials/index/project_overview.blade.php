<h1 id = 'projh1'>Project Overview</h1>

@foreach ($projects as $proj)
	<div class="proj-container-container">
		<a href="projects#{{ $proj['name'] }}" class="content-proj-container">
			<p>{{ $proj['name'] }}</p>
			<ul>
				<li>{{ $proj['year'] }}</li>
				<li>{{ $proj['headline'] }}</li>
				<li>{{ $proj['purpose'] }}</li>
			</ul>
		</a>
	</div>
@endforeach