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
            <span class="flex">
                <label for="email">Email</label>
                <input type="email" id="email" wire:model="email" autocomplete="username" required>
            </span>
            <span class="flex">
                <label for="password">Wachtwoord</label>
                <input type="password" id="password" wire:model="password" autocomplete="current-password" required>
            </span>
            <span>
                <label for="remember">Ingelogd blijven</label>
                <input type="checkbox" id="remember" wire:model="remember">
            </span>
            <input type="submit" value="Ok" class="btn solid swap fill primary">
            @csrf
        </form>
    </div>
</div>
