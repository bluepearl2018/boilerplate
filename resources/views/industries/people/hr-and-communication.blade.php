@extends('layouts.app')
@section('content')
	<h1 class="text-4xl mb-4 text-gray-600 font-semibold">{{__('HR & Communication')}}</h1>
	<p class="text-xl leading-relaxed">{{__('Building up on core back-end functionalities.')}}</p>
	<div class="relative flex flex-col justify-center py-6">
		<div class="columns-2 gap-6 [column-fill:_balance] space-y-6 box-border mx-auto before:box-inherit after:box-inherit">
			<div class="break-inside-avoid p-0 bg-gray-100 rounded-lg border-2">
				<h3 class="text-lg bg-red-500 text-white px-4 rounded-t-lg font-extrabold">{{__('Lead follow-up')}}</h3>
				<img src="{{asset('images/slide1.jpeg')}}"  alt=""/>
				<p class="px-4 py-2 bg-gray-300">{{__('Follow-up of new registered users in the application allows sales and marketing to work efficiently.')}}</p>
			</div>
			<div class="break-inside-avoid p-0 bg-gray-100 rounded-lg border-2">
				<h3 class="text-lg bg-red-500 text-white px-4 rounded-t-lg font-extrabold">{{__('Feedback')}}</h3>
				<img src="{{asset('images/slide2.jpeg')}}"  alt=""/>
				<p class="px-4 py-2 bg-gray-300">{{__('When it is particularly important to document feedback.')}}</p>
			</div>
			<div class="break-inside-avoid p-0 bg-gray-100 rounded-lg border-2">
				<h3 class="text-lg bg-red-500 text-white px-4 rounded-t-lg font-extrabold">{{__('SMS Messenging')}}</h3>
				<img src="{{asset('images/slide3.jpeg')}}"  alt=""/>
				<p class="px-4 py-2 bg-gray-300">{{__('In order to receive alerts regarding events or send appointment reminders, etc.')}}</p>
			</div>
		</div>
	</div>

@endsection