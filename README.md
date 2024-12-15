# PHP DateTime::createFromFormat() Silent Failure

This repository demonstrates a subtle bug in PHP's `DateTime::createFromFormat()` function.  When the provided format string doesn't perfectly match the input data, the function returns `false` instead of throwing an exception. This can lead to unexpected behavior if not explicitly checked.

The `bug.php` file shows the problematic code.  The `bugSolution.php` shows how to correctly handle the potential `false` return value.

This example highlights the importance of robust error handling when dealing with date and time manipulations in PHP.