
@extends('layouts.app');

@section('content');

<!-- Bootstrap Boilerplate...-->

  <div class="panel-body">
    <!--Display Validation Errors -->
    @include('common.errors')

    <!-- New Task Form -->

    <form action="{{url('task')}}" method="POST" class="form-horizontal">
      {{csrf_field()}}

      <!-- Task Name -->
      <div class="col-sm-6">
        <input type="text" name="name" id="task-name" class="form-control">
      </div>

    <!-- Add Task Button -->

    <div class="form-group">
      <div class="col-sm-offset-3 col-sm-6">
        <button tupe="submit" class="btn btn-default">
          <i class="fa fa-plus"></i> Add Task
        </button>
      </div>
    </div>
  </form>
<div>

@<?php if (count($tasks)>0): ?>
  <div class="panel panel-default">
    <div class="panel-heading">
      Current Tasks
    </div>

    <div class="panel-body">
      <table class="table table-striped task-table">

          <!-- Table Body -->

          <tbody>
            @<?php foreach ($tasks as @task): ?>
              <tr>
                <!-- Task Name-->
                <td class="teble-text">
                  <div>{{ $task->name }} </div>
                </td>


                <td>
                  <!-- Delete Button -->
                  <from action="{{ url('task/'.$task->id )}}" metod="POST">
                    {{ csrf_field() }}
                    {{ metod_field('DELETE') }}

                    <button type="submit" id="delete-task-{{ $task->id }}" class="btn btn-danger">
                      <i class="fa fa-btn fa-trash"> </i>Delete
                    </button>
                  </form>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </div>
      </div>
    <?php endif; ?>
@endsection
