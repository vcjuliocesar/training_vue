@extends('layout')

@section('content')
@include('projects.list')
<form action="{{route('project.store')}}" method="POST" @submit.prevent="onSubmit" @keydown="form.errors.clear($event.target.name)">
  
    <div class="field">
        <label class="label">Project Name:</label>
        <div class="control">
          <input name="name" value="{{old('name')}}" class="input" type="text" placeholder="Text input" v-model="form.name">
          <span class="help is-danger" v-if="form.errors.has('name')" v-text="form.errors.get('name')"></span>
        </div>
      </div>
    <div class="field">
        <label class="label">Project Description:</label>
        <div class="control">
          <input name="description" value="{{old('description')}}" class="input" type="text" placeholder="Text input" v-model="form.description">
          <span class="help is-danger" v-if="form.errors.has('description')" v-text="form.errors.get('description')"></span>
        </div>
    </div>
    <div class="field is-grouped">
        <div class="control">
          <button type="submit" class="button is-link" :disabled="form.errors.any()">Submit</button>
        </div>
    </div>
</form> 
@endsection