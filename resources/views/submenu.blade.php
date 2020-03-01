<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
    @foreach($m->children as $m)
            <a class="dropdown-item" href="{{ route('show', ['path' => $m->path]) }}">{{$m->title}}</a>
    @endforeach
</div>
