@extends('layouts.app')
@section('content')
	<h1 class="text-4xl mb-4 text-gray-600 font-semibold">{{__('Maritime industry')}}</h1>
	<p class="text-xl leading-relaxed">{{__('None of these solutions are available for free, but they are available to some extent. Discover our products below.')}}</p>
	<div class="relative flex flex-col justify-center py-6">
		<div class="columns-2 gap-6 [column-fill:_balance] space-y-6 box-border mx-auto before:box-inherit after:box-inherit">
			<div class="break-inside-avoid p-0 bg-gray-100 rounded-lg border-2">
				<h3 class="text-lg bg-blue-800 text-white px-4 py-2 rounded-t-lg font-extrabold">
					{!! __('Stophover') !!}
				</h3>
				<img src="{{asset('images/slide1.jpeg')}}"  alt=""/>
				<p class="px-4 py-2 bg-gray-300">{{__('Boating ads anytime, anywhere.')}}</p>
				<a target="_blank" href="{{url('https://osyl.eutranet.com')}}" class="rounded-b block text-center w-full py-1 bg-gray-700 text-white">{{__('Find a boat')}}</a>
			</div>
			<div class="break-inside-avoid p-0 bg-gray-100 rounded-lg border-2">
				<h3 class="text-lg bg-blue-800 text-white px-4 py-2 rounded-t-lg font-extrabold">
					{!! __('Open Source Yachting Lessons')  !!}
				</h3>
				<img src="{{asset('images/slide2.jpeg')}}"  alt=""/>
				<p class="px-4 py-2 bg-gray-300">{{__('This platform is built from our core modules, which we have enhanced and tweaked in order our users to take our opensource YM lessons and train hard.')}}</p>
				<a target="_blank" href="{{url('https://osyl.eutranet.com')}}" class="rounded-b block text-center w-full py-1 bg-gray-700 text-white">{{__('Visit')}} OSYL</a>
			</div>
			<div class="break-inside-avoid p-0 bg-gray-100 rounded-lg border-2">
				<h3 class="text-lg bg-blue-800 text-white px-4 py-2 rounded-t-lg font-extrabold">
					{!! __('Open Source Yachting Maintenance')  !!}
				</h3>
				<img src="{{asset('images/slide3.jpeg')}}"  alt=""/>
				<p class="px-4 py-2 bg-gray-300">{{__('A collection of videos and tutorials gleaned from the internet.')}}</p>
				<a target="_blank" href="{{url('https://osym.eutranet.com')}}" class="rounded-b block text-center w-full py-1 bg-gray-700 text-white">{{__('Visit')}} OSYM</a>
			</div>
			<div class="break-inside-avoid p-0 bg-gray-100 rounded-lg border-2">
				<h3 class="text-lg bg-blue-800 text-white px-4 py-2 rounded-t-lg font-extrabold">
					{!! __('Open Source Sailing Log')  !!}
				</h3>
				<img src="{{asset('images/slide3.jpeg')}}"  alt=""/>
				<p class="px-4 py-2 bg-gray-300">{{__('Get the most of your GPS and navigation electronics.')}}</p>
				<a target="_blank" href="{{url('https://ossl.eutranet.com')}}" class="rounded-b block text-center w-full py-1 bg-gray-700 text-white">{{__('Visit')}} OSSL</a>
			</div>
		</div>
	</div>
@endsection