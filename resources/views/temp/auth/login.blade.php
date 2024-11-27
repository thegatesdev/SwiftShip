<x-layouts.app>
    <form action="{{ route('login.store') }}" method="post">
        <span>
            <span>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </span>
            <span>
                <label for="password">Wachtwoord</label>
                <input type="password" id="password" name="password" required>
            </span>
            <span>
                <label for="remember">Ingelogd blijven</label>
                <input type="checkbox" id="remember" name="remember">
            </span>
            <input type="submit" value="Ok" class="btn solid swap active">
            @csrf
        </span>
    </form>
</x-layouts.app>
