1. Clone the Repository
git clone https://github.com/Devendera/task-manager
cd task-manager
2. Set Up the Backend
Install Composer Dependencies

composer install
Set Up Environment Variables

Copy the .env.example file to .env:

cp .env.example .env
Update the .env file with your database and application settings.

Generate Application Key

php artisan key:generate
Run Migrations

php artisan migrate
Install Laravel Sanctum

composer require laravel/sanctum
Publish the Sanctum configuration and run migrations:

php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
php artisan migrate
Set Up API Routes

Ensure the routes for registration, login, and task management are defined in routes/api.php.

Start Laravel Server
php artisan serve
3. Set Up the Frontend
Install Node.js Dependencies

npm install
Compile Assets

For development:

npm run dev
For production:

npm run production
Run the React Development Server

Open another terminal window and run:

npm start
This will start the React development server and usually listens on http://localhost:3000.

API Endpoints
Registration
Endpoint: POST /api/register

Body (JSON):

json
Copy code
{
  "name": "John Doe",
  "email": "johndoe@example.com",
  "password": "password",
  "password_confirmation": "password"
}
Response:

json
Copy code
{
  "access_token": "your-access-token",
  "token_type": "Bearer"
}
Login
Endpoint: POST /api/login

Body (JSON):

json
Copy code
{
  "email": "johndoe@example.com",
  "password": "password"
}
Response:

json
Copy code
{
  "access_token": "your-access-token",
  "token_type": "Bearer"
}
Logout
Endpoint: POST /api/logout

Headers: Authorization: Bearer your-access-token

Response:

json
Copy code
{
  "message": "Logged out successfully"
}
Task Management
Create Task: POST /api/tasks
Read Tasks: GET /api/tasks
Update Task: PUT /api/tasks/{id}
Delete Task: DELETE /api/tasks/{id}
Refer to the API documentation in the TaskController for detailed request and response formats.

Frontend
The frontend is built with React and interacts with the backend API for task management. It includes:

Login and Registration Forms
Task Dashboard with filter options
Task Management Interface for creating, editing, and deleting tasks
Real-time Task Updates using Livewire
Running Tests
To run tests, use PHPUnit for backend tests:


php artisan test
For frontend tests, use Jest:

npm test