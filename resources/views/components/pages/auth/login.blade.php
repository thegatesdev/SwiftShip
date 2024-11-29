<x-slot:header>
    <x-parts.brand />
</x-slot:header>
<x-slot:footer>
    <x-parts.copyright />
    <x-parts.contact />
</x-slot:footer>
<div class="fill flex center">
    <div class="card content shadow secondary apply">
        <form class="flex center gap" wire:submit="login">
            <h3>Log in</h3>
            <x-parts.input ver type="email" value="Email" autocomplete="username" required />
            <x-parts.input ver type="password" value="Wachtwoord" autocomplete="current-password" required />
            <x-parts.input type="checkbox" name="remember" value="Ingelogd blijven" autocomplete="current-password" />
            <input type="submit" value="Inloggen" class="btn solid swap fill primary">
            @csrf
        </form>
    </div>
</div>
