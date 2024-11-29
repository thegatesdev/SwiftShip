<?php

namespace App\Livewire\Forms;

use App\Models\PacketType;
use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Form;

class PacketTypeForm extends Form
{
    public ?PacketType $packetType;

    #[Validate]
    public ?User $user;

    #[Validate('required|min:5')]
    public string $name = '';

    #[Validate]
    public string $description = '';

    public function set(PacketType $packetType)
    {
        $this->packetType = $packetType;
        $this->name = $packetType->name;
        $this->description = $packetType->description;
        $this->user = $packetType->user;
    }

    public function store(): PacketType
    {
        $this->validate();
        return PacketType::create($this->only(['name', 'description', 'user_id']));
    }

    public function update()
    {
        $this->validate();
        $this->packetType->update($this->all());
    }
}
