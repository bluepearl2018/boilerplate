@extends('layouts.app')
@section('content')
	<h1 class="text-4xl mb-4 text-gray-600 font-semibold">Eutranet, software development and internationalization</h1>
	<p class="text-xl leading-relaxed">{!! __('For those who need it, we develop <strong>custom solutions</strong> based
								on the Laravel framework and our <strong>core modules</strong> made available for download on our GitHub page.') !!}</p>
	<h2 class="mt-4 border-b-4 font-extrabold text-2xl">{{__('Core modules')}}</h2>
	<p class="mb-2 text-md">{{__('Our core modules are made available to the world and for free with licenses and all you need to start a professional portal.
						This is the base we, at Eutranet, use for our projects - and there is virtually no secret behind the code but the config files. We do our best to correct any bugs as soon as possible...')}}</p>
	<h2 class="mt-4 border-b-4 font-extrabold text-2xl">{{__('Custom solutions')}}</h2>
	<p class="mb-2 text-md">{{ __('We develop custom applications for a wide range of specializations, from human resources management to farmland management, from real estate to boating...') }}</p>

	<div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
		<div class="relative rounded-lg border border-gray-300 bg-white px-6 py-5 shadow-sm flex items-center space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-0 focus-within:ring-red-500">
			<div class="flex-shrink-0 bg-gray-700 text-white text-gray-300 items-center p-2 rounded-full">
				<i class="fa fa-users inline-block mx-auto text-xl p-1 mx-auto h-8 w-8"></i>
			</div>
			<div class="flex-1 min-w-0">
				<a href="{{route('industries.hr-and-communication')}}" class="focus:outline-none">
					<span class="absolute inset-0" aria-hidden="true"></span>
					<p class="text-lg font-semibold text-gray-900">{{ __('HR & Communication') }}</p>
					<p class="text-sm text-gray-500 truncate">
						{{__('People and staff management')}}
					</p>
				</a>
			</div>
		</div>
		<div class="relative rounded-lg border border-gray-300 bg-white px-6 py-5 shadow-sm flex items-center space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-0 focus-within:ring-red-500">
			<div class="flex-shrink-0 bg-gray-700 text-white text-gray-300 items-center p-2 rounded-full">
				<i class="fa fa-map-marked-alt inline-block mx-auto text-xl p-1 mx-auto h-8 w-8"></i>
			</div>
			<div class="flex-1 min-w-0">
				<a href="{{route('industries.hr-and-communication')}}" class="focus:outline-none">
					<span class="absolute inset-0" aria-hidden="true"></span>
					<p class="text-lg font-semibold text-gray-900">{{ __('Advanced mapping solutions') }}</p>
					<p class="text-sm text-gray-500 truncate">
						{{__('Mapping with automatic interaction functionalities, with ou without external APIs.')}}
					</p>
				</a>
			</div>
		</div>
		<div class="relative rounded-lg border border-gray-300 bg-white px-6 py-5 shadow-sm flex items-center space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-0 focus-within:ring-red-500">
			<div class="flex-shrink-0 bg-gray-700 text-white text-gray-300 items-center p-2 rounded-full">
				<i class="fa fa-ship inline-block mx-auto text-xl p-1 mx-auto h-8 w-8"></i>
			</div>
			<div class="flex-1 min-w-0">
				<a href="{{route('industries.hr-and-communication')}}" class="focus:outline-none">
					<span class="absolute inset-0" aria-hidden="true"></span>
					<p class="text-lg font-semibold text-gray-900">{{ __('Maritime and boating') }}</p>
					<p class="text-sm text-gray-500 truncate">
						{{__('Survey and sell por invividuals and corporate.')}}
					</p>
				</a>
			</div>
		</div>
		<div class="relative rounded-lg border border-gray-300 bg-white px-6 py-5 shadow-sm flex items-center space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-0 focus-within:ring-red-500">
			<div class="flex-shrink-0 bg-gray-700 flex flex-col text-white text-gray-300 items-center p-2 rounded-full">
				<i class="fa fa-qrcode inline-block mx-auto text-xl p-1 mx-auto h-8 w-8"></i>
			</div>
			<div class="flex-1 min-w-0">
				<a href="{{route('industries.hr-and-communication')}}" class="focus:outline-none">
					<span class="absolute inset-0" aria-hidden="true"></span>
					<p class="text-lg font-semibold text-gray-900">{{ __('QR coding') }}</p>
					<p class="text-sm text-gray-500 truncate">
						{{__('Interaction through QR codes.')}}
					</p>
				</a>
			</div>
		</div>
	</div>

@endsection