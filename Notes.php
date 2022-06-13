
https://blog.pusher.com/laravel-jwt/

Create a user account for testing
    Endpoint : 127.0.0.1:8000/api/register
    Method: POST
    Payload:

    name: Test Man
    email: test@email.com
    password: secret
    password_confirmation: secret

API's:-

Create a user account for testing
    Endpoint : 127.0.0.1:8000/api/register
    Method: POST
    Payload:

    name: Test Man
    email: test@email.com
    password: secret
    password_confirmation: secret

User login
    Endpoint : 127.0.0.1:8000/api/login
    Method: POST
    Payload:

    email: test@email.com
    password: secret

Accessing an unprotected route
    Endpoint : 127.0.0.1:8000/api/open
    Method: GET

Access a protected endpoint
    Endpoint : 127.0.0.1:8000/api/closed
    Method: GET
    Payload:

    Authorization: Bearer insert_user_token_here

Get the authenticated user data
    Endpoint : 127.0.0.1:8000/api/user
    Method: GET
    Payload:

    Authorization: Bearer insert_user_token_here

Use invalid token to access a users data
    Endpoint : 127.0.0.1:8000/api/user
    Method: GET
    Payload:

    Authorization: Bearer thistokeniswrong