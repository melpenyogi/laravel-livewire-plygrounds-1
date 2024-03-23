<?php

namespace App\Livewire\Shop;

use Livewire\Component;
use App\Models\Shop;
use Livewire\Attributes\On;

class ShopRecord extends Component
{
    public $search;
    public $collection = [];
    public $shop;

    #[On('modal')]
    public function handleEvent($data): void
    {
        $this->shop = $data;
    }

    public function delete($id): void
    {
        $shop = Shop::query()->find($id);
        $shop->delete();
        session()->flash('alert-message', ['message' => 'Deleted! Data has been deleted', 'type' => 'danger']);
    }

    public function render()
    {
        $this->collection = Shop::with('city')
            ->when(strlen($this->search) > 0, function ($query){
                $query->where('name', 'LIKE', "%$this->search%");
            })
            ->get();
        return view('livewire.shop.shop-record');
    }
}
