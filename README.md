# Authorization Interface
`AuthorizationInterface` is abstraction for authorization checks.
Checker must return `AuthorizationResponse`.
```
$actions=['update'];

$response = AuthorizationInterface::check([...$permissions], $actions);

if($response->can('update') {
    // Do some update actions
}
```
