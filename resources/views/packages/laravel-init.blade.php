@extends('layouts.app')
@section('content')
	<h1 class="text-4xl mb-4 text-gray-600 font-semibold">{{__('Laravel Init')}}</h1>
	<p class="text-xl leading-relaxed">{{__('This package is the basis for all other packages. It contains all the instructions and resources to make all the other packages work. The first package to be installed.')}}</p>

	<h2 class="text-2xl mt-4 text-gray-800 font-semibold">{{__('Benefits')}}</h2>
	<ul class="list-disc list-inside">
		<li>{{__('Install Eutranet\'s packages with ease')}}</li>
		<li>{{__('Check package installation status')}}</li>
		<li>{{__('Define specific roles and permissions for the default guards "web", "staff", "admin"')}}</li>
	</ul>

	<h2 class="text-2xl mt-4 text-gray-800 font-semibold">{{__('Support')}}</h2>
	<p>{{__('We are looking for translators and developers to join our team.')}}</p>

	<h2 class="text-2xl mt-4 text-gray-800 font-semibold">{{ __('Composer requirements') }}</h2>
	<p class="mb-2">{{__('Here is the list of dependencies required for the proper functioning of the package. . We would like to thank Freek @ spatie for the excellent modules he and his team offer.') }}</p>
	<pre class="p-2 bg-gray-800 text-white">
  "require": {
	"php": "^7.4|^8.0",
	"illuminate/contracts": "^7.0|^8.0|^9.0",
	"spatie/browsershot": "^3.52",
	"spatie/laravel-medialibrary": "^10.0",
	"spatie/laravel-permission": "^5.5",
	"spatie/laravel-translatable": "^5.2",
	"spatie/laravel-translation-loader": "^2.7",
	"spatie/test-time": "^1.2",
  },
  "require-dev": {
	"orchestra/testbench": "^5.0|^6.23|^7.0",
	"phpunit/phpunit": "^9.4",
	"mockery/mockery": "^1.4"
  },</pre>

	<h2 class="text-2xl mt-4 text-gray-800 font-semibold">{{__('Prerequisites')}}</h2>
	<p class="mb-2">{{__('This package can be used in Laravel 9 or higher. Here is the list of prerequisites to be met before installing the package.')}}</p>
	<ul class="list-inside list-disc">
		<li>{{__('js nodes must be installed')}}</li>
	</ul>

	<h2 class="text-2xl mt-4 text-gray-800 font-semibold">{{__('Installation')}}</h2>
	<p>{{__('The installation of the package takes place with the command')}}</p>
	<pre class="p-2 bg-gray-800 text-white">php artisan eutranet:init</pre>

	<h2 class="text-2xl mt-4 text-gray-800 font-semibold">{{__('Installation check-up')}}</h2>
	<p>{{__('Important points for module installation are checked by accessing the "packages/laravel-init/check-up" route.')}}</p>
	<ul class="list-inside list-disc">
		<li>
			{{__('js nodes must be installed')}}
		</li>
	</ul>

	<h2 class="text-2xl mt-4 text-gray-800 font-semibold">{{__('Configuration files')}}</h2>
	<p>{{ __('The config files should be published.') }}</p>

@endsection