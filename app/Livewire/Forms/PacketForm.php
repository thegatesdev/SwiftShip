<?php

namespace App\Livewire\Forms;

use App\Models\Address;
use App\Models\Packet;
use Livewire\Attributes\Validate;
use Livewire\Form;

class PacketForm extends Form
{
    public ?Packet $packet;

    #[Validate('required|min:0')]
    public int $packet_type_id;

    #[Validate('required')]
    public string $receiver_postal_code;

    #[Validate('required')]
    public string $receiver_city;

    #[Validate('required')]
    public string $receiver_region;

    #[Validate('required')]
    public string $receiver_email;

    #[Validate('required|min:0|max:32768')]
    public int $warehouse_location;

    #[Validate('boolean')]
    public bool $is_mailbox = false;

    #[Validate('boolean')]
    public bool $needs_signature = false;


    public function set(Packet $packet)
    {
        $this->packet = $packet;
        $this->packet_type_id = $packet->packet_type_id;
        $this->receiver_postal_code = $packet->receiverAddress->postal_code;
        $this->receiver_city = $packet->receiverAddress->city;
        $this->receiver_region = $packet->receiver_region;
        $this->receiver_email = $packet->receiver_email;
        $this->warehouse_location = $packet->warehouse_location;
        $this->is_mailbox = $packet->is_mailbox;
        $this->needs_signature = $packet->needs_signature;
    }

    public function store(): Packet
    {
        $this->validate();
        $addressId = $this->updateAddressId();
        return Packet::create(array_merge($this->all(), ['receiver_address_id' => $addressId]));
    }

    
    public function update()
    {
        $this->validate();
        $addressId = $this->updateAddressId();
        $this->packet->update(array_merge($this->all(), ['receiver_address_id' => $addressId]));
    }

    private function updateAddressId(): int
    {
        $address = Address::select('id')
            ->where('postal_code', 'LIKE', $this->receiver_postal_code)
            ->where('city', 'LIKE', $this->receiver_city)
            ->first();
        if ($address == null)
        {
            $address = Address::create([
                'street' => 'Unknown',
                'house_no' => 0,
                'postal_code' => $this->receiver_postal_code,
                'city' => $this->receiver_city,
            ]);
        }
        return $address->id;
    }
}
