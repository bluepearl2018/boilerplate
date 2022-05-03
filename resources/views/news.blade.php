@extends('layouts.app')
@section('content')
	<h1 class="text-4xl mb-4 text-gray-600 font-semibold">{{__('News')}}</h1>
	<p class="text-xl leading-relaxed">{{__('We don\'t publish a lot of news, but a very short monthly memo, to remember what we are doing.')}}</p>
	<div class="mt-4">
		@forelse(\Eutranet\Theme\Models\NewsItem::all() as $ni)
			{{$ni}}
		@empty
			<p class="mt-4">{{__('Nothing to show')}}</p>
		@endforelse
	</div>
@endsection