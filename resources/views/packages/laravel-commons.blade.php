@extends('layouts.app')
@section('content')
	<h1 class="text-4xl mb-4 text-gray-600 font-semibold">{{__('Laravel Commons')}}</h1>
	<p class="text-xl leading-relaxed">{{__('The florbela-commons package contains a lot of resources (templates, controllers and migrations) that can be used in any new installation.')}}</p>

	<h2 class="text-2xl mt-4 text-gray-800 font-semibold">{{__('Composer requirements')}}</h2>
	<p class="mb-2">{{__('Here is the list of dependencies required for the proper functioning of the package. . We would like to thank Freek @ spatie for the excellent modules he and his team offer.')}}</p>
	<pre class="p-2 bg-gray-800 text-white">
  "require": {
    "spatie/laravel-medialibrary": "^10.0",
    "spatie/laravel-translatable": "^5.2",
    "spatie/laravel-translation-loader": "^2.7"
  }</pre>
	<h2 class="text-2xl mt-4 text-gray-800 font-semibold">{{__('Prerequisites')}}</h2>
	<p class="mb-2">{{__('Here is the list of prerequisites to be met before installing the package.')}}</p>
	<ul class="list-inside list-disc">
		<li>{{__('Laravel Init installed and migrated')}}</li>
		<li>{{__('Laravel Theme installed and migrated')}}</li>
		<li>{{__('js nodes must be installed')}}</li>
	</ul>

	<h2 class="text-2xl mt-4 text-gray-800 font-semibold">{{__('Installation')}}</h2>
	<p>{{__('The installation of the package takes place with the command')}}</p>
	<pre class="p-2 bg-gray-800 text-white">php artisan eutranet:install-commons</pre>

	<h2 class="text-2xl mt-4 text-gray-800 font-semibold">{{__('Installation check-up')}}</h2>
	<p>{{__('Important points for module installation are checked by accessing the "packages/laravel-theme/check-up" route.')}}</p>

	<h2 class="text-2xl mt-4 text-gray-800 font-semibold">{{__('Configuration files')}}</h2>
	<p>{{ __('The config files should be published.') }}</p>
@endsection