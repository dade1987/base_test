<?php
namespace Modules\Cart\Models\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Modules\LU\Models\User as User;
use Modules\Cart\Models\Cart as Post; 

use Modules\Xot\Models\Policies\XotBasePolicy;

class CartPolicy extends XotBasePolicy {
}
