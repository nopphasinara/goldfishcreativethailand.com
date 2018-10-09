<?php

namespace App\Models\Listing;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    public var $table = 'listings';

    public function addListing(): array
    {
      return [];
    }
}
