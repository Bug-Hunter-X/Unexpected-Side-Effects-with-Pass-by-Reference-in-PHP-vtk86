# PHP Pass-by-Reference Bug

This repository demonstrates a common pitfall in PHP: unexpected side effects when using pass-by-reference with arrays. The `foo()` function modifies the array in place, leading to changes being reflected outside the function's scope.  The `bar()` function showcases a safer alternative.