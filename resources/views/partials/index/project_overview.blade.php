<h1 id = 'projh1'>Project Overview</h1>

<?php include '../resources/views/modules/projinfoXML.php'; ?>

@foreach ($projInfo->project as $proj)
	<div class="proj-container-container">
		<a href="projects#{{ $proj['name'] }}" class="content-proj-container">
			<p>{{ $proj['displayname'] }}</p>
			<ul>
				<li>{{ $proj['year'] }}</li>
				<li>{{ $proj['accomplishment'] }}</li>
				<li>{{ $proj['purpose'] }}</li>
			</ul>
		</a>
	</div>
@endforeach