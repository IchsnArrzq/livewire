<?php

namespace App\Http\Livewire\Tweet;

use Livewire\Component;

class Add extends Component
{
    public $body;
    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'body' => 'min:3|max:225'
        ]);
    }
    public function addTweet()
    {
        $this->validate([
            'body' => 'required|max:225'
        ]);
        $tweet = auth()->user()->tweets()->create([
            'body' => $this->body
        ]);
        $this->body = '';
        $this->emit('tweetAdd',$tweet->id);
    }
    public function render()
    {
        return view('livewire.tweet.add');
    }
}
