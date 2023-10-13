<?php
namespace MyApp\Controllers;
// use MyApp\Models\John;
use MyApp\Models\Task;


class TaskController
{
    public function index()
    {
        // Retrieve a list of tasks from the database
        $tasks = Task::getAll();

        // Render the task list view
        include('../resources/views/tasks/task-list.php');
    }

    public function create()
    {
        // Display a form to create a task
        include('../resources/views/tasks/create-task-form.php');
    }

    public function store()
    {
        // Handle task creation form submission
        $taskData = $_POST; // Get data from the form
        $newTask = new Task($taskData);
        $newTask->save(); // Save the new task to the database

        // Redirect back to the task list page
        header('Location: /tasks');
    }

    public function edit($taskId)
    {
        // Retrieve the task from the database based on $taskId
        $task = Task::find($taskId);

        // Display a form to edit the task
        include('../resources/views/tasks/edit-task-form.php');
    }

    public function update($taskId)
    {
        // Handle task update form submission
        $taskData = $_POST; // Get data from the form
        $existingTask = Task::find($taskId);
        $existingTask->update($taskData); // Update the task in the database

        // Redirect back to the task list page
        header('Location: /tasks');
    }

    public function delete($taskId)
    {
        // Delete the task from the database based on $taskId
        Task::delete($taskId);

        // Redirect back to the task list page
        header('Location: /tasks');
    }
}
