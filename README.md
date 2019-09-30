# Laravel 6.0 CRUD Application w/ Authentication

Let's build this a **reservation management system** using Laravel 6.0 and Auth0!

You can follow along [with the tutorial](2019-09-06-build-and-secure-a-crud-application-with-laravel-6) (highly recommended) or skip straight to the goodies by following the instructions below.

![Laravel 6 crud travel app demo screenshot](https://cdn.auth0.com/blog/laravel-6-crud/home-logged-in.png)

![Laravel 6 crud travel app demo user account/dashboard screenshot](https://cdn.auth0.com/blog/laravel-6-crud/laravel-6-crud-app.png)

## Installation

**Clone the repo**

```bash
git clone https://github.com/hollylawly/travel-planet-crud.git
```

**Switch into the newly created repo folder**

```bash
cd travel-planet-crud
```

**Install the dependencies**

```bash
composer install
npm install
```

**Create the `.env` file**

```bash
mv .env.example .env
```

**Generate encryption key**

```bash
php artisan key:generate
```

**Signup for Auth0 account**

This application requires users to login. To make sure everything is works correctly, you need to [sign up for a free Auth0 account](https://auth0.com/signup).

There are three Auth0 values you'll need to fill in in your `.env` file. You can find the in the Auth0 dashboard. Check out the [tutorial](https://auth0.com/blog/build-and-secure-a-crud-application-with-laravel-6/#Adding-Authentication-to-Your-Laravel-6-0-Application) for more information on where to find them. 

```
AUTH0_DOMAIN=your-auth0-domain.auth0.com
AUTH0_CLIENT_ID=your-client-id
AUTH0_CLIENT_SECRET=your-client-secret
```

## Setup Homestead

If you don't already have VirtualBox and Vagrant setup, I recommend reading through that section of the tutorial.

Otherwise, generate your `Homestead.yaml` file now.

**Mac or Linux:**

```bash
php vendor/bin/homestead make
```

**Windows:**

```bash
vendor\\bin\\homestead make
```

You might need to updating your folder mapping. Just replace `/path/to/the/repo/travel-planet-crud` with the full path to wherever you cloned this repo.

```yaml
folders:
    -
        map: /path/to/the/repo/travel-planet-crud
        to: /home/vagrant/code
```

Once you have your updated `Homestead.yaml` file, start your VM with:

```bash
vagrant up
```

## Create, Migrate, and Seed the Database

**SSH into your VM**

```bash
vagrant ssh
cd code
```

**Run the migrations**

```bash
php artisan migrate
```

**Seed the database**

```bash
php artisan db:seed
```

**Exit the VM**

```bash
exit
```

## Book a Trip!

Now just head to [`http://localhost:8000/`](http://localhost:8000/) to check out your new Laravel 6 reservation booking system! Go ahead and sign up, head to the [hotels page](http://localhost:8000/hotels), and make a new reservations.

## Suspend the VM

Once you're done playing around, remember to suspend your VM.

```bash
vagrant suspend
```