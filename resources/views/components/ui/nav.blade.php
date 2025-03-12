<a href="{{ route($route) }}" class="button {{ $request == route($route) ? 'active' : 'inactive' }}">
    {{ $slot }}
</a>
