<?php 
	$dirname = 'images/photography/photos/';
	$folders = glob($dirname."*");
?>

<form method="get" onsubmit="return false;">
	@foreach($folders as $foldername)
		<?php 
			$newdir = $foldername.'/';
			$value = $foldername;
			$value = str_replace(".JPG","",$value);
			$value = str_replace($dirname,"",$value);
			$folderthumb = glob($newdir."*");
		?>

		@if($folderthumb)
			<div class="album">
				<input type="image" src="{{ $folderthumb[0] }}" onclick="showPhoto('{{ $value }}')" name="folder" value='{{ $value }}'>
					<p>{{ $value }}</p>
					<span>DC</span>
				</input>
			</div>
		@endif
	@endforeach
</form>