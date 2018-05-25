<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TwitterAuthController extends Controller
{
    public function redirect()
    {
      $query = http_build_query([
        'client_id' => '1',
        'redirect' => 'http://127.0.0.1:8888/auth/twitter/callback',
        'response_type' => 'code',
        'scope' => '*'
      ]);

      return redirect('http://127.0.0.1:8000/oauth/authorize?' . $query);
    }

    public function callback()
    {

    }
}
