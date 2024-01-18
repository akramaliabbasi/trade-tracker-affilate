# trade-tracker-affilate
TradeTracker is the affiliate marketing preferred partner worldwide. From established internationals to local starters, we work with you for optimum results.


# Laravel 10 with Livewire 3 and Tailwind CSS

This is a Laravel 10 project configured with Livewire 3 and Tailwind CSS.

## Getting Started

Follow these steps to set up the project on your local machine.

### Prerequisites

Make sure you have the following software installed:

- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org/)
- [NPM](https://www.npmjs.com/)

### Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/akramaliabbasi/trade-tracker-affilate.git

Navigate to the project directory:

bash
Copy code
cd your-repository
Install PHP dependencies:

bash
Copy code
composer install
Install Node.js dependencies:

bash
Copy code
npm install
Copy the environment file:

bash
Copy code
cp .env.example .env
Generate an application key:

bash
Copy code
php artisan key:generate
Configure your database in the .env file.

Run migrations and seed the database:

bash
Copy code
php artisan migrate --seed
Usage
Run the development server:

bash
Copy code
php artisan serve
Visit http://localhost:8000 in your browser.

Development
For Livewire component development and compiling assets during development:

bash
Copy code
npm run watch
Deployment
Before deploying your application, make sure to configure your production environment in the .env file and run:

bash
Copy code
npm run production
Contributing
If you'd like to contribute, please fork the repository and create a pull request. You can also create an issue if you find any bugs or have suggestions.

License
This project is licensed under the MIT License.

Acknowledgements
Laravel - https://laravel.com
Livewire - https://livewire.dev
Tailwind CSS - https://tailwindcss.com