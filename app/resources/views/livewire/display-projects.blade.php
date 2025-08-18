<div>
    <div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Project Name</th>
                </tr>
            </thead>
            <tbody>
                @forelse($projects as $index => $project)
                <tr>
                    <td>{{ $index + 1 }}</td>

                    <td><a href="/projects/details/{{ $project->id }}">{{ $project->name }}</a></td>
                    
                </tr>
                @empty
                <tr>
                    <td colspan="7">No projects found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

</div>

