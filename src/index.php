<?php

function prime($input)
{
  // code goes here
  for ($i = 2; $i <= $input - 1; $i++) {
    if ($input % $i == 0) {
        $value = True;
    }
}
// if (isset($value) && $value)

function solution($input)
{
  return prime($input);
}


if (!count(debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS)))
{
  $input = $argv[1];
  var_dump(solution($input));
}

