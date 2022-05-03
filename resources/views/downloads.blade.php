@extends('layouts.app')
@section('content')
	<h1 class="text-4xl mb-4 text-gray-600 font-semibold">{{__('Downloadables')}}</h1>
	<p class="text-xl leading-relaxed">{{__('Click on links to get the file or zip...')}}</p>
	<div class="mt-4 list-disc list-inside">
		@forelse(\Eutranet\Theme\Models\Downloadable::$packages as $label => $dl)
			<li class="flex flex-row">
				<div class="w-1/3">{{$label}}</div>
				<div>{{$dl}}</div>
			</li>
		@empty
			<p class="mt-4">{{__('Nothing to show')}}</p>
		@endforelse
	</div>
@endsection