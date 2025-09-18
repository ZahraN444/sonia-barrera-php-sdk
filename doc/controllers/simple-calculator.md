# Simple Calculator

```php
$simpleCalculatorController = $client->getSimpleCalculatorController();
```

## Class Name

`SimpleCalculatorController`


# Get Calculate

Calculates the expression using the specified operation.

```php
function getCalculate(array $options): float
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `operation` | [`string(OperationType)`](../../doc/models/operation-type.md) | Template, Required | The operator to apply on the variables |
| `x` | `float` | Query, Required | The LHS value |
| `y` | `float` | Query, Required | The RHS value |

## Response Type

`float`

## Example Usage

```php
$collect = [
    'operation' => OperationType::MULTIPLY,
    'x' => 222.14,
    'y' => 165.14
];

$result = $simpleCalculatorController->getCalculate($collect);
```

