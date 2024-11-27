<form action="{{ route('logout') }}" method="post">
    @csrf
    <button type="submit">{{ $slot }}</button>
</form>