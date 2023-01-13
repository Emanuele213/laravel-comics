<nav>
    <ul class="flex-nav-bar">
        @foreach ($navbar as $item)
            <li class="nav-li-blue"><a href="{{route($item['route'])}}">{{ $item['label']}}</a></li>
        @endforeach
    </ul>
</nav>
