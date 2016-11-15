<ul class="news-list{{ (!empty($custom_class)) ? ' '.$custom_class : '' }}">
    @foreach ($items as $news)
    @include('news::public._list-item')
    @endforeach
</ul>
