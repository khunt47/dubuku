<div class="table-responsive">
    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Task</th>
                <th>Priority</th>
                <th>Status</th>
                <th>Created On</th>
            </tr>
        </thead>
        <tbody>
            @forelse($project_tasks as $project_task)
            <tr class="{{ $project_task->row_class ?? '' }}">
                <td>{{ $project_task->id }}</td>
                <td><a href="/tasks/details/{{$project_task->id}}">{{ $project_task->heading }}</a></td>
                <td>
                    @if ($project_task->priority === 3)
                        Critical 
                    @elseif ($project_task->priority === 2)
                        High
                    @elseif ($project_task->priority === 1)
                        Medium
                    @else
                        Low
                    @endif
                </td>
                <td>
                    @if ($project_task->status === 5)
                        Critical 
                    @elseif ($project_task->status === 4)
                        High
                    @elseif ($project_task->status === 3)
                        Medium
                    @elseif ($project_task->status === 2)
                        Low
                    @elseif ($project_task->status === 1)
                        In Progress
                    @else
                        New
                    @endif
                </td>
                <td>{{ $project_task->created_at->format('d M Y, h:i A') }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="6">No tasks found on this project.</td>
            </tr>
            @endforelse            

        </tbody>
    </table>

    <!-- Pagination links -->
    <div>
        {{ $project_tasks->links() }}
    </div>
</div>