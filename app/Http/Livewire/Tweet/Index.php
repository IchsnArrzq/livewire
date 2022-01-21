<?php

namespace App\Http\Livewire\Tweet;

use App\Models\Tweet;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $listeners = [
        'tweetAdd'
    ];
    public function tweetAdd($tweetId)
    {
        
    }
    public function render()
    {
        $tweets = Tweet::with('user')->latest()->paginate(10);
        return view('livewire.tweet.index', compact('tweets'));
    }
}
