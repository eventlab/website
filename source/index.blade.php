@extends('_layouts.master')

@section('body')
<section class="container max-w-2xl mx-auto px-6 py-10 md:py-12">
    <div class="flex flex-col-reverse lg:flex-row mb-4">
        <div class="mt-8 w-2/3">
            <h1 id="intro-docs-template">{{ $page->siteName }}</h1>

            <h2 id="intro-powered-by-jigsaw" class="font-light mt-4">{{ $page->siteDescription }}</h2>

            <p class="text-lg font-bold">Subscribe to know when we're starting.</p>

            <div class="flex my-10">
                E-mail form
            </div>
        </div>

        <img src="/assets/img/chemistry.svg" alt="{{ $page->siteName }} large logo" class="w-1/3 h-full mt-20">
    </div>

    {{--<div class="md:flex -mx-2 -mx-4">--}}
        {{--<div class="mb-8 mx-3 px-2 md:w-1/3">--}}
            {{--<img src="/assets/img/icon-window.svg" class="h-12 w-12" alt="window icon">--}}

            {{--<h3 id="intro-laravel" class="text-2xl text-blue-darkest mb-0">Templating with <br>Laravel's Blade engine</h3>--}}

            {{--<p>Blade is a powerful, simple, and beautiful templating language, and now you can use it for your static sites, not just your Laravel-powered apps.</p>--}}
        {{--</div>--}}

        {{--<div class="mb-8 mx-3 px-2 md:w-1/3">--}}
            {{--<img src="/assets/img/icon-terminal.svg" class="h-12 w-12" alt="terminal icon">--}}

            {{--<h3 id="intro-markdown" class="text-2xl text-blue-darkest mb-0">Use Markdown for <br>content-driven pages</h3>--}}

            {{--<p>Markdown is the web’s leading format for writing articles, blog posts, documentation, and more. Jigsaw makes it painless to work with Markdown content.</p>--}}
        {{--</div>--}}

        {{--<div class="mx-3 px-2 md:w-1/3">--}}
            {{--<img src="/assets/img/icon-stack.svg" class="h-12 w-12" alt="stack icon">--}}

            {{--<h3 id="intro-mix" class="text-2xl text-blue-darkest mb-0">Compile your assets <br>using Laravel Mix </h3>--}}

            {{--<p>Jigsaw comes pre-configured with Laravel Mix, a simple and powerful build tool. Use the latest frontend tech with just a few lines of code.</p>--}}
        {{--</div>--}}
    {{--</div>--}}
</section>
@endsection
