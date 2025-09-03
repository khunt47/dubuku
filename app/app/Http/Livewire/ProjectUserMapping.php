<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Projects;
use App\Models\Users;

class ProjectUserMapping extends Component
{
    public $project_id;
    public $users = [];         // all users
    public $selectedUsers = []; // users mapped to project

    public function mount($projectId)
    {
        $this->project_id = $projectId;

        $this->users = Users::select('id', 'name', 'email')->get();

        $project = Projects::with('users')->find($projectId);

        $this->selectedUsers = $project ? $project->users->pluck('id')->toArray() : [];
    }

    public function updatedSelectedUsers()
    {
        // optional: real-time save on checkbox toggle
    }

    public function save()
    {
        $project = Project::findOrFail($this->projectId);
        $project->users()->sync($this->selectedUsers);

        session()->flash('message', 'Users mapped successfully.');
    }

    public function render()
    {
        return view('livewire.project-user-mapping');
    }
}
