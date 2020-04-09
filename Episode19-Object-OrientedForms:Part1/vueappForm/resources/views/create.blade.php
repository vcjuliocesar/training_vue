@extends('layout')

@section('content')
@include('projects.list')
<form action="{{route('project.store')}}" method="POST" @submit.prevent="onSubmit" @keydown="errors.clear($event.target.name)">
  
    <div class="field">
        <label class="label">Project Name:</label>
        <div class="control">
          <input name="name" value="{{old('name')}}" class="input" type="text" placeholder="Text input" v-model="name">
          <span class="help is-danger" v-if="errors.has('name')" v-text="errors.get('name')"></span>
        </div>
      </div>
    <div class="field">
        <label class="label">Project Description:</label>
        <div class="control">
          <input name="description" value="{{old('description')}}" class="input" type="text" placeholder="Text input" v-model="description">
          <span class="help is-danger" v-if="errors.has('description')" v-text="errors.get('description')"></span>
        </div>
    </div>
    <div class="field is-grouped">
        <div class="control">
          <button type="submit" class="button is-link" :disabled="errors.any()">Submit</button>
        </div>
    </div>
</form> 
@endsection