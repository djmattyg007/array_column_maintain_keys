array_column_maintain_keys() is a wrapper for the array_column() function
introduced in PHP 5.5 (or usable in 5.3 and 5.4 via the recommended userland
polyfill, see link below).

The default behaviour of array_column() is to trash the keys from the top-level
input array, and instead return a numerically-indexed array. You can optionally
pass it the name of a second key in the sub-arrays of the input array, and have
it use the values of those keys for the keys of the return array instead.
Unfortunately, there is no option to have it use the keys of the top-level
input array.

This wrapper function, which also uses array_combine() and array_keys(),
resolves that problem quite nicely.

See here for the recommended userlannd polyfill of array_column():
https://github.com/ramsey/array_column
