<?php

namespace App\Http\Middleware;

use Illuminate\Http\Middleware\TrustHosts as Middleware;

class TrustHosts extends Middleware
{
    /**
     * Get the host patterns that should be trusted.
     *
     * @return array<int, string|null>
     */
<<<<<<< HEAD
    public function hosts()
=======
    public function hosts(): array
>>>>>>> b3246b188fcf6efceccbcf2e10fbce7b4a245fc6
    {
        return [
            $this->allSubdomainsOfApplicationUrl(),
        ];
    }
}
