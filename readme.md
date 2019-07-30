In this application, built withLaravel and VueJS, a user registers on the site and is able to enter contact information such as name and phone.

To creation of the contacts is done with Laravel only. But there is a VueComponent that lists all the contacts, allows user to edit, delete and confirm. Each contact that added is linked to the user that adds it only.
A user is also able to update his profile information, and note: I created an observer that checks if the email is update. If so happens, an email is sent to the old email address.

The seeded user(only), has the ability to send a database notification to all users of the system, and such notification, contains information of how long the user has been in the system for, in human readable time. (ie: 2 seconds ago).

Run the following commands to test the application:

<p>php artisan key:generate</p>
<p>php artisan composer dump-autoload </p>
<p>composer update </p>
<p>php artisan migrate </p>
<p>php artisan db:seed </p>
<p>php artisan serve </p>

The default user logins are:
Email: fullstack@example.com
Pass: secret

Note on the default email: Only a user with this email will be able to fire the artisan command through the front-end.

Otherwise, use the below command in your prompt in order to send a database notification to all users.

php artisan notify:users

HAPPY TESTING! :)
