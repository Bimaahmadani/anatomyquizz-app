<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Tulangku.com

Tulangku.com is a web-based application developed using Laravel, designed to help users learn about human skeletal anatomy through interactive quizzes and educational content. This application is hosted on GitHub at [anatomyquiz-app](https://github.com/Bimaahmadani/anatomyquizz-app).

## Features

- **Quiz System**: Users can participate in quizzes to test their knowledge of human skeletal anatomy. After each level, detailed results are displayed, showing the number of correct, incorrect, and unanswered questions, along with the accuracy percentage.
- **Dynamic Progress Bar**: Displays user accuracy with a progress bar that changes color based on performance.
- **Interactive UI**: Smooth transitions and animations enhance the user experience.
- **Navigation Options**: Users can retry the quiz or return to the main menu.
- **Anatomy Learning Module**: Provides educational content about human skeletal anatomy, allowing users to learn and review before taking quizzes.

## Technologies Used

- **Laravel**: Backend framework for handling application logic and routing.
- **Blade**: Templating engine for rendering dynamic views.
- **Tailwind CSS**: For styling the application with responsive and modern UI elements.
- **Font Awesome**: Provides icons for visual feedback and navigation.
- **JavaScript**: Handles dynamic UI updates such as progress bar animations.

## Installation

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/Bimaahmadani/anatomyquizz-app.git
   cd anatomyquizz-app
   ```
2. **Install Dependencies**:
   ```bash
   composer install
   npm install
   ```
3. **Set Up Environment**:
   Copy the `.env.example` to `.env` and update the necessary configurations (e.g., database settings).
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
4. **Run Migrations**:
   Set up the database by running migrations.
   ```bash
   php artisan migrate
   ```
5. **Build Frontend Assets**:
   Compile the frontend assets using Vite.
   ```bash
   npm run dev
   ```
6. **Run the Application**:
   Start the local development server.
   ```bash
   php artisan serve
   ```

## Usage

1. **Access the Application**:
   Open your browser and navigate to `http://localhost:8000`.
2. **Start a Quiz**:
   Select a quiz level and answer the questions.
3. **View Results**:
   After completing a level, view your results with detailed statistics and a progress bar.
4. **Explore Learning Module**:
   Access educational content on human skeletal anatomy to enhance your learning before taking quizzes.
5. **Retry or Return**:
   Use the provided buttons to retry the quiz or go back to the main menu.

## File Structure

- **app/Http/Controllers**: Contains the Quiz controller handling logic for displaying results.
- **resources/views**: Blade templates for the quiz interface and result page.
- **public/css**: Compiled CSS files from Tailwind.
- **public/js**: Compiled JavaScript files.

## Contribution

Feel free to fork this repository and submit pull requests. For major changes, please open an issue first to discuss what you would like to change.

## License

This project is licensed under the MIT License. See the LICENSE file for more details.

---

Enjoy learning and quizzing with Tulangku.com!

