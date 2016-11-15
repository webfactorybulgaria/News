@extends('core::public.master')

@section('title', $model->title.' – '.trans('news::global.name').' – '.$websiteTitle)
@section('ogTitle', $model->title)
@section('description', $model->summary)
@section('image', $model->present()->thumbUrl())
@section('bodyClass', 'body-news body-news-'.$model->id.' body-page body-page-'.$page->id)

@section('main')
    {{-- @include('core::public._btn-prev-next', ['module' => 'News', 'model' => $model]) --}}

    <article class="news-details" itemscope itemtype="http://schema.org/Article">
        <div class="news-hero" style="background-image: url({!! $model->present()->thumbSrc(1920, 800) !!});">
            <div class="news-hero-inner">
                <h1 class="news-title" itemprop="name">{{ $model->title }}</h1>
                <div class="news-date-wrapper" class="date">@lang('news::global.Published on')
                    <time class="news-date" itemprop="datePublished" datetime="{{ $model->date->toIso8601String() }}">{{ $model->present()->dateLocalized }}</time>
                </div>
            </div>
        </div>
        <div class="container">
            <meta itemprop="image" content="{{ $model->present()->thumbUrl() }}">
            <p class="news-summary" itemprop="headline">{{ nl2br($model->summary) }}</p>
            <div class="news-body" itemprop="articleBody">{!! $model->present()->body !!}</div>
        </div>
    </article>
    <div class="container">
        @include('galleries::public._galleries')
    </div>
@endsection
