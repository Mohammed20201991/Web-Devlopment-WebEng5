<?php

namespace App\Policies;

use App\Models\Project;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProjectPolicy
{
    use HandlesAuthorization;

                                                    // /**
                                                    //  * Create a new policy instance.
                                                    //  *
                                                    //  * @return void
                                                    //  */
                                                    // public function __construct()
                                                    // {
                                                    //     //
                                                    // }

    public function access(User $user, Project $project)
    {
        return $user->id  === $project->user_id; // user_id foregin key 
    }
}
