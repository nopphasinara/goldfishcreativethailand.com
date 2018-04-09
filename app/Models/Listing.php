<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Listing extends Model
{

  /**
   * Boot
   *
   * @return void
   */
  protected static function boot() {
    parent::boot();

    static::addGlobalScope('web_visible', function (Builder $builder) {
      $builder->where('web_visible', 1);
    });
  }
}
