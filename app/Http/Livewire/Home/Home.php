<?php

namespace App\Http\Livewire\Home;


use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\posts;
use Illuminate\Database\Eloquent\Builder;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Collection;


class Home extends Component
{
  public $user_name;
  public $user_id;
  public $posts , $newpost;

    public function mount()
    {
        $this->user_id = Auth()->User()->id;

        $data = User::find($this->user_id);
        $this->user_name = $data->name;

        $initialposts = posts::where('user_id',$this->user_id)->latest()->get();
        $this->posts = $initialposts;
    }

    public function remove($postId)
    {
      $post = posts::find($postId);
      $post->delete();
      $this->posts = $this->posts->except($postId);
    }

    public function render()
    {
        return view('livewire.home.home');
    }

    public function addpost()
    {
      $this->validate([
          'newpost' => ['required']
      ]);

      $createdpost = posts::create(['body' => $this->newpost, 'user_id' => $this->user_id]);
      $this->posts->prepend($createdpost);
      $this->newpost = "";

    }
}
