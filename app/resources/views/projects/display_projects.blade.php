<nav aria-label="breadcrumb">
	<h2>Projects</h2>
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="/workspace">My Workspace</a></li>
		<li class="breadcrumb-item active" aria-current="page">Projects</li>
	</ol>
</nav>
<hr class="mt-4" style="color: #cbcbcb;">
<br>
@if (auth()->user()->user_role === \App\Models\Users::ROLE_ADMIN)
<p align="right"><a href="/projects/create"><button class="btn custom-btn"><i class="fa fa-plus me-2" aria-hidden="true"></i>Create Project</button></a></p>
<br>
@endif
<br>

@livewire('display-projects')

