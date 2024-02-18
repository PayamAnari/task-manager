<h1 align="center">
  <img
    width="300"
    alt="task-manager"
    src="https://live.staticflickr.com/65535/53536587878_9c224bccf2_m.jpg">
</h1>

---

<h3 align="center">
  <strong>
      ⚙️ Laravel Task-Manager ⚙️

  </strong>
</h3>

---

<p align="center">
  <img 
    width="800"
    alt="home"
    src="https://live.staticflickr.com/65535/53536595268_fb8fe151c9.jpg"/>
</p>

---

## Laravel Task-Manager
### Description

Welcome to the Laravel Task Manager, a comprehensive project management system designed to streamline project organization and task tracking within your organization. This application provides a robust set of functionalities for managing projects, tasks, and user authentication.

---

## Features

### Project Management

- **CRUD Operations:** Perform Create, Read, Update, and Delete operations on projects.
- **Relationships:** Establish relationships between projects and tasks for efficient management and tracking.
- **Pagination, Filtering, and Sorting:** Efficiently handle large datasets with pagination, filtering, and sorting functionalities.
- **Resource Management:** Utilize resource collections and resources to transform project data for API responses.

### Task Management

- **CRUD Operations:** Perform Create, Read, Update, and Delete operations on tasks within projects.
- **Relationships:** Establish relationships between tasks and projects for structured task management.
- **Additional Attributes:** Compute additional attributes for tasks, enhancing their description and status.

### User Management and Authentication

- **User Registration:** Allow users to register for an account with their name, email, and password.
- **User Login:** Enable secure login to user accounts using email and password.
- **User Profile Management:** Provide endpoints for updating user information, such as name and email.
- **User Account Deletion:** Allow users to delete their accounts, including associated tasks and projects.
- **Token-based Authentication:** Authenticate users using token-based authentication with Laravel Sanctum.

---

## Project Structure

### Controllers

- **ProjectController:** Handles project-related HTTP requests, including index, store, show, update, and destroy operations.
- **TaskController:** Handles task-related HTTP requests, including index, store, show, update, and destroy operations.
- **AuthController:** Handles user authentication and account management endpoints, including login, registration, updating, and deletion.

### Requests

- **StoreProjectRequest:** Validates and handles requests for storing new projects.
- **UpdateProjectRequest:** Validates and handles requests for updating existing projects.
- **StoreTaskRequest:** Validates and handles requests for storing new tasks.
- **UpdateTaskRequest:** Validates and handles requests for updating existing tasks.

### Resources

- **ProjectCollection:** Transforms a collection of projects for API responses.
- **ProjectResource:** Transforms a single project for API responses, including associated tasks.
- **TaskCollection:** Transforms a collection of tasks for API responses.
- **TaskResource:** Transforms a single task for API responses, including additional computed attributes.

### Models

- **Project:** Represents a project entity in the database, including relationships with tasks and users.
- **Task:** Represents a task entity in the database, including relationships with projects and users.
- **User:** Represents a user entity in the database, including relationships with tasks and projects.

### Migrations

- **create_projects_table:** Defines the database schema for the projects table.
- **create_tasks_table:** Defines the database schema for the tasks table.
- **create_users_table:** Defines the database schema for the users table.

### Factories

- **ProjectFactory:** Generates fake project data for testing purposes.
- **TaskFactory:** Generates fake task data for testing purposes.
- **UserFactory:** Generates fake user data for testing purposes.

### Routes

- API routes are defined to handle user authentication, registration, updating, and deletion, as well as project and task management functionalities.

```
Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);
Route::delete('users/{userId}', [AuthController::class, 'destroy']);
Route::put('users/{userId}', [AuthController::class, 'update']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('tasks', TaskController::class);
    Route::apiResource('projects', ProjectController::class);
});

```

## Endpoints

### Authentication

- **POST /api/login:** Login with email and password.
- **POST /api/register:** Register a new user.
- **DELETE /api/users/{userId}:** Delete a user account.
- **PUT /api/users/{userId}:** Update user information.

### Projects

- **GET /api/projects:** Get a list of all projects. (Requires authentication)
- **POST /api/projects:** Create a new project. (Requires authentication)
- **GET /api/projects/{projectId}:** Get a single project by its ID. (Requires authentication)
- **PUT /api/projects/{projectId}:** Update an existing project. (Requires authentication)
- **DELETE /api/projects/{projectId}:** Delete a project by its ID. (Requires authentication)

### Tasks

- **GET /api/tasks:** Get a list of all tasks. (Requires authentication)
- **POST /api/tasks:** Create a new task. (Requires authentication)
- **GET /api/tasks/{taskId}:** Get a single task by its ID. (Requires authentication)
- **PUT /api/tasks/{taskId}:** Update an existing task. (Requires authentication)
- **DELETE /api/tasks/{taskId}:** Delete a task by its ID. (Requires authentication)

---

## Getting Started

### To get started with this project:

- Clone this repository to your local machine.
- Configure your environment variables in the .env file.
- Run migrations to set up the database schema: php artisan migrate.
- Start the development server: php artisan serve.
- Explore the project and its functionalities, including project and task management, and user authentication.

---

## Example Requests
### Create a New Post (Authenticated Request)

```
POST /api/projects HTTP/1.1
Host: example.com
Authorization: Bearer your_access_token
Content-Type: application/json

{
  "title": "New Project",
  "manager": "John Doe",
  "members": 4,
  "creator_id": 3
}

```
