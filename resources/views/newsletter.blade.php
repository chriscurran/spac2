@extends('layouts.app')

@section('content')
	<div class="panel panel-default">
		<div class="panel-heading">Newsletters</div>

		<div class="panel-body">

			<div class="col-md-6">
              <h3>
                  2017 - Newsletters
              </h3>
				@php
                  ### List Newsletters ##
                  $directory = 'Newsletters/2017';
                  if (! is_dir($directory)) {
                      exit('Invalid diretory path');
                  }
                  $files = array();
                  foreach (scandir($directory) as $file) {
                      if ('.' === $file) continue;
                      if ('..' === $file) continue;
                      $files[] = $file;
                  }
                  arsort($files);
                  foreach ($files as $value) {
                      echo "<p><a href='Newsletters/2017/$value'>$value</a></p>";
                  }
                @endphp
			</div>

			<div class="col-md-6">
              <h3>
                  2016 - Newsletters
              </h3>
				@php
                  ### List Newsletters ##
                  $directory = 'Newsletters/2017';
                  if (! is_dir($directory)) {
                      exit('Invalid diretory path');
                  }
                  $files = array();
                  foreach (scandir($directory) as $file) {
                      if ('.' === $file) continue;
                      if ('..' === $file) continue;
                      $files[] = $file;
                  }
                  arsort($files);
                  foreach ($files as $value) {
                      echo "<p><a href='Newsletters/2016/$value'>$value</a></p>";
                  }
                @endphp
			</div>

		</div>
	</div>

@endsection
