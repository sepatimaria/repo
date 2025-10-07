@extends('template')
   @section('main')
	<div id="warga">					
	<h2>warga</h2>				 
	@if(!empty($warga))
    <ul>
        <?php foreach($warga as $tetangga): ?>
            <li><?= $tetangga ?></li>
        <?php endforeach ?>
    </ul>
	@else
    	<p>Tidak ada data warga.</p>
	@endif
</div>
   @stop
@section('footer')
	<div id="footer">
		<p>&copy; 2025 laravelapp.dev</p>
	</div>
@stop

