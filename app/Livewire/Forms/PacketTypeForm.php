<?php

namespace App\Livewire\Forms;

use App\Models\PacketType;
use Livewire\Attributes\Validate;
use Livewire\Form;

class PacketTypeForm extends Form
{
    public ?PacketType $packetType;

    #[Validate]
    public ?int $user_id = null;

    #[Validate('required|min:5')]
    public string $name = '';

    #[Validate]
    public string $description = '';

    public function set(PacketType $packetType)
    {
        $this->packetType = $packetType;
        $this->name = $packetType->name;
        $this->description = $packetType->description;
        $this->user_id = $packetType->user_id;
    }

    public function store(): PacketType
    {
        $this->validate();
        return PacketType::create($this->all());
    }

    public function update()
    {
        $this->validate();
        $this->packetType->update($this->all());
    }
}
