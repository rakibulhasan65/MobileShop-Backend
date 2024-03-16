<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Models\Chatmessage;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class Chat extends Component
{

    use WithPagination;

    public $users;
    public $sender;
    public $message;
    public $user_id;
    public $userId;
    public $receiver_id;
    public $allmessages;
    public $searchTerm;

    public function mountData()
    {
        if (isset($this->sender->id)) {
            $this->allmessages = Chatmessage::where('user_id', Auth::user()->id)->where('receiver_id', $this->sender->id)->orWhere('user_id', $this->sender->id)->where('receiver_id', Auth::user()->id)->get();
        }
    }
    public function resetForm()
    {
        $this->message = '';
    }
    public function sendMessage()
    {
        $data = new Chatmessage();
        $data->user_id = Auth::user()->id;
        $data->receiver_id = $this->sender->id;
        $data->message = $this->message;
        $data->save();
        $this->resetForm();
    }

    public function getUser($userId)
    {


        $user = User::findorfail($userId);

        $this->sender = $user;

        $this->allmessages = Chatmessage::where('receiver_id', $userId)->orWhere('user_id', $userId)->get();
    }

    public function render()
    {
        $this->users = User::where('name', 'LIKE', '%' . $this->searchTerm . '%')

            ->paginate(10)
            ->except(Auth::id());
        $sender = $this->sender;

        $this->allmessages;

        $userId = $this->userId;
        return view('livewire.chat');
    }
}
