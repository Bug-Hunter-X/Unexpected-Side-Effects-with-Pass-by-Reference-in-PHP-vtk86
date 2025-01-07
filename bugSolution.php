function foo(array $arr) {
  $newArray = [];
  foreach ($arr as $value) {
    $newArray[] = $value + 1;
  }
  return $newArray;
}

$arr = [1, 2, 3];
$newArray = foo($arr);
print_r($arr); // Output: [1, 2, 3]
print_r($newArray); // Output: [2, 3, 4]

// Alternatively, use array_map:
$newArray = array_map(fn($x) => $x + 1, $arr);
print_r($newArray); // Output: [2,3,4]