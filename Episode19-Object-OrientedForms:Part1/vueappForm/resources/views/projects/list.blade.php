<h1>My projects</h1>
<div class="list is-hoverable">
    @foreach ($projects as $project)
    <a class="list-item">
        {{$project->name}}
    </a>    
    @endforeach
    
  </div>