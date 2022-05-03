@extends('layouts.app')
@section('content')
	<h1 class="text-4xl mb-4 text-gray-600 font-semibold">{{__('Asset scanning')}}</h1>
	<p class="text-xl leading-relaxed">{{__('We are at ')}}</p>
	<div class="relative flex flex-col justify-center py-6">
		<div class="columns-2 gap-6 [column-fill:_balance] space-y-6 box-border mx-auto before:box-inherit after:box-inherit">
			<div class="break-inside-avoid p-0 bg-gray-100 rounded-lg border-2">
				<h3 class="text-lg bg-yellow-600 text-white px-4 py-2 rounded-t-lg font-extrabold">
					{!! __('Interactivator') !!}
				</h3>
				<img src="{{asset('images/slide1.jpeg')}}"  alt=""/>
				<p class="px-4 py-2 bg-gray-300">{{__('The interactivator helps you converting ordinary objects into "interactive" assets.')}}</p>
			</div>
		</div>
	</div>
@endsection