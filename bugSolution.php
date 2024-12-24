The solution uses strict comparison (`===`) to avoid type juggling:

```php
<?php
function isValueValid($value) {
  if ($value === 1) {
    return true; 
  } else {
    return false;
  }
}

var_dump(isValueValid(1)); // bool(true) - Expected
var_dump(isValueValid('1')); // bool(false) - Correct
var_dump(isValueValid('1a')); // bool(false) - Expected
?>
```

By using strict comparison, the function now correctly identifies only the integer `1` as valid, preventing any unexpected behavior caused by type coercion.