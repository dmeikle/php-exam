PHP Senior Developer - Option 1
=============================

Write pseudocode for an authentication filter to be run at the beginning of a client request.

This is not an authorization filter, it is for authentication only.

The table structure that would be queried contains the following columns:
<ul>
<li>id</li>
<li>username</li>
<li>password</li>
<li>isLocked</li>
<li>numFailedAttempts</li>
</ul>

PHP Senior Developer - Option 2
=============================

Write pseudocode for an authorization filter to be run at the beginning of a client request.

This is not an authentication filter, it is for authorization only.

This assumes the client is already authenticated (logged in) and is used for checking whether 
their roles will permit the system to complete the request based on their array of roles.
The roles could be (for example): 
<ul>
<li>IS_CLIENT</li>
<li>IS_MANAGER</li>
<li>IS_ACCOUNTING</li>
<li>IS_ADMINISTRATOR</li>
<li>IS_SUPER_USER</li>
</ul>


PHP Senior Developer - Option 3
=============================

Write the pseudocode for an Event Dispatcher

PHP Senior Developer - Option 4
=============================

Create a PHP Controller and Model that will perform the following functions:
<ul>
<li>save()</li>
<li>loadSelected(itemId)</li>
<li>listall()</li>
</ul>

Assume that the calls to the database are using a REST API (we'll call it RestConnection as a class) that uses the following format:

$conn->execute('POST','save',$params);
$conn->execute('GET','list',$params);
$conn->execute('GET','get',$params);

$params is the array of values to either save or used to query with.
The code is not intended to work - there is no class named RestConnection (please do not write one).
The purpose of this exercise is only to demonstrate your familiarity with MVC
inside of a PHP environment.



AngularJS Skill Assessment
========================
Create an AngularJS controller that will perform the following functions:
<ul>
<li>save(item)</li>
<li>loadSelected(item)</li>
<li>listall()</li>
</ul>

- Assume the view will track and display all items under a variable called 'items'.
- Assume the view will also track and display a selected item called 'selectedItem'.
- The controller will use a service called MyService to perform all of the remote
calls to the server - no need to write the service, just call its 'imaginary' methods
as if it was already written.

You can use the provided angular/controller.js as a template if desired.

The controller is not intended to work (the service doesn't exist) - the purpose of this exercise
is only to demonstrate your familiarity with AngularJS and how AngularJS shares
values with the view.