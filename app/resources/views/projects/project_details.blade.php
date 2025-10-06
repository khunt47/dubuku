<nav aria-label="breadcrumb">
	<h2>Projects</h2>
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="/workspace">My Workspace</a></li>
		<li class="breadcrumb-item"><a href="/projects">Projects</a></li>
		<li class="breadcrumb-item active" aria-current="page">Project Details</li>
	</ol>
</nav>
<hr class="mt-4" style="color: #cbcbcb;">
<br>
@livewire('project-details', ['project_id' => $project_id])
