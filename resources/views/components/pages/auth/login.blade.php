<form wire:submit="login">
    <span>
        <span>
            <label for="email">Email</label>
            <input type="email" id="email" wire:model="email" autocomplete="username" required>
        </span>
        <span>
            <label for="password">Wachtwoord</label>
            <input type="password" id="password" wire:model="password" autocomplete="current-password" required>
        </span>
        <span>
            <label for="remember">Ingelogd blijven</label>
            <input type="checkbox" id="remember" wire:model="remember">
        </span>
        <input type="submit" value="Ok" class="btn solid swap active">
        @if (session()->has('error'))
            <h1>{{ session('error') }}</h1>
        @endif
        @csrf
    </span>
</form>
