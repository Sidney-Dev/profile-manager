This application allows a user to edit his profile and contact information. 
For the contact information, the edit, confirm and delete options are done using VueJs.


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

Content of the information tells how long the user has been in the system for, in human readable time. ie: 2 seconds ago.
