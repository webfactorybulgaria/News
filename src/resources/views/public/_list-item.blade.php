<li class="news" itemscope itemtype="http://schema.org/Article">
    <a class="news-anchor" href="{{ route($lang.'.news.slug', $news->slug) }}" itemprop="url">
        {!! $news->present()->thumb(540, 400) !!}
    </a>
    <meta itemprop="image" content="{{ $news->present()->thumbUrl() }}">
    <div class="news-info">
        <div class="news-date-wrapper">
            <span class="fa fa-clock-o fa-fw" title="@lang('news::global.Published on')"></span>
            <time class="news-date" itemprop="datePublished" datetime="{{ $news->date->toIso8601String() }}">{{ $news->present()->dateLocalized }}</time>
        </div>
        <h3 class="news-title" itemprop="name"><a class="news-anchor" href="{{ route($lang.'.news.slug', $news->slug) }}" itemprop="url">{{ $news->title }}</a></h3>
        <div class="news-summary" itemprop="headline">{{ $news->summary }}</div>
    </div>
</li>
