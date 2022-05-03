@extends('layouts.app')
@section('content')
	<h1 class="text-4xl mb-4 text-gray-600 font-semibold">{{__('Mapping')}}</h1>
	<p class="text-xl leading-relaxed">{{__('All packages here are used on Heliagora, our mapping platform, where you can plan your family farming projects.')}}</p>
	<div class="relative flex flex-col justify-center py-6">
		<div class="columns-2 gap-6 [column-fill:_balance] space-y-6 box-border mx-auto before:box-inherit after:box-inherit">
			<div class="break-inside-avoid p-0 bg-gray-100 rounded-lg border-2">
				<h3 class="text-lg bg-green-500 text-white px-4 py-2 rounded-t-lg font-extrabold">
					{!! __('Gardenizer') !!}
				</h3>
				<img src="{{asset('images/slide1.jpeg')}}"  alt=""/>
				<p class="px-4 py-2 bg-gray-300">{{__('The gardenizer package is to be customized for cities and the public sector.')}}</p>
				<a target="_blank" href="{{url('https://www.heliagora.com/gardenizer')}}" class="rounded-b block text-center w-full py-1 bg-gray-700 text-white">{{__('Discover the gardenizer')}}</a>
			</div>
			<div class="break-inside-avoid p-0 bg-gray-100 rounded-lg border-2">
				<h3 class="text-lg bg-green-500 text-white px-4 py-2 rounded-t-lg font-extrabold">
					{!! __('Topographer') !!}
				</h3>
				<img src="{{asset('images/slide1.jpeg')}}"  alt=""/>
				<p class="px-4 py-2 bg-gray-300">{{__('The topographer helps you manage your land and calculate overhead.')}}</p>
				<a target="_blank" href="{{url('https://www.heliagora.com/topographer')}}" class="rounded-b block text-center w-full py-1 bg-gray-700 text-white">{{__('Discover the topographer')}}</a>
			</div>
		</div>
	</div>
@endsection