<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Tasks;
use Illuminate\Support\Facades\Auth;

class DisplayProjectTasks extends Component
{

    use WithPagination;

    public $perPage = 10;
    protected $paginationTheme = 'bootstrap';

    public $project_id;

    public function mount($project_id)
    {
        $this->project_id = $project_id;
    }

    public function render()
    {

        $company_id = Auth::user()->comp_id;

        $project_tasks = Tasks::select('tasks.id', 'projects.name AS project_name', 'tasks.heading', 'priority', 'status', 'tasks.created_at')
                              ->join('projects', 'projects.id', '=', 'tasks.project_id')
                              ->where('project_id', $this->project_id)
                              ->where('tasks.company_id', $company_id)
                              ->paginate($this->perPage);

        return view('livewire.display-project-tasks', [
            'project_tasks' => $project_tasks,
        ]);
    }
}
