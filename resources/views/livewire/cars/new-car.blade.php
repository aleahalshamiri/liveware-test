<div style="text-align: center">
    <form wire:submit.prevent="submit">
        <input type="text" wire:model="name" wire:keydown.debounce.500ms="validateName">
        @error('name') <span class="error">{{ $message }}</span> @enderror

        <input type="text" wire:model="email" wire:keydown.debounce.500ms="validateEmail">
        @error('email') <span class="error">{{ $message }}</span> @enderror

        <button type="submit">Save Contact</button>
    </form>
</div>
