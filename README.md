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
