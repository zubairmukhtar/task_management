<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>add task</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container panel panel-default">
        <div class="row justify-content-center mt-3">
            <div class="col-md-6 card">
                <div class="alert alert-success mt-2" id="successAlert" style="display: none ;"></div>

                <!-- Form inside the modal -->
                <form id="taskForm" class="mt-3">
                    @csrf
                    <h4>Add Task</h4>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title"
                            placeholder="Enter title">
                        <div class="invalid-feedback" id="titleError"></div>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter description"></textarea>
                        <div class="invalid-feedback" id="descriptionError"></div>
                    </div>
                    <div class="form-group">
                        <label for="priority">Priority</label>
                        <input type="number" class="form-control" id="priority" name="priority"
                            placeholder="Enter priority">
                        <div class="invalid-feedback" id="priorityError"></div>
                    </div>
                    <div class="form-group">
                        <label for="due_date">Due Date</label>
                        <input type="date" class="form-control" id="due_date" name="due_date">
                        <div class="invalid-feedback" id="dueDateError"></div>
                    </div>
                    <div class="form-group ">
                        <label for="completed">Completed</label>
                        <select class="form-control" name="completed">
                            <option value="1">Pending</option>
                            <option value="2">Completed</option>
                        </select>
                        <div class="invalid-feedback" id="completedError"></div>
                    </div>
                    <!-- Add more form fields as needed -->
                    <button type="submit" class="btn btn-primary">Add Task</button>
                    <br>
                </form>

                <!-- Error message display area -->
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

    @include('tasks.includes.add_include')
</body>

</html>
