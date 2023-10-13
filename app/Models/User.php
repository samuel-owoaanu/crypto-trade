<?php
namespace MyApp\Models;

class Task
{
    private $id;
    private $title;
    private $description;

    public function __construct($data)
    {
        $this->title = $data['title'];
        $this->description = $data['description'];
    }

    public function save()
    {
        // Logic to save the task to the database
    }

    public function update($data)
    {
        // Logic to update the task in the database
    }

    public static function getAll()
    {
        // Retrieve all tasks from the database and return them as an array
    }

    public static function find($id)
    {
        // Retrieve a task from the database based on $id and return it as an object
    }

    public static function delete($id)
    {
        // Logic to delete a task from the database based on $id
    }
}

class John{}