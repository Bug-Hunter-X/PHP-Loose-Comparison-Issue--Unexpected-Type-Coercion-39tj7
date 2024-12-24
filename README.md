# PHP Loose Comparison Bug

This repository demonstrates a common but subtle bug in PHP related to loose comparison (`==`) and type coercion.  Loose comparison can lead to unexpected results when you expect strict type checking. The `bug.php` file contains the buggy code, while `bugSolution.php` provides a corrected version.

## Bug Description

The bug involves using loose comparison to validate if a variable is equal to a specific integer value.  Because of PHP's type juggling, a string representation of the integer ('1') will evaluate as true, while a stricter comparison would result in false.

## Solution

The solution uses strict comparison (`===`) to ensure that both the value and type are identical.  This prevents unexpected type coercion and ensures accurate validation.

## How to reproduce

1. Clone this repository.
2. Run `bug.php` using a PHP interpreter.  Observe the unexpected output where '1' (string) is considered true.
3. Run `bugSolution.php`. The output will reflect the corrected behavior, only accepting the integer 1 as true.