<?php

function prime($input)
{
  // code goes here
}

function solution($input)
{
  return prime($input);
}


if (!count(debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS)))
{
  $input = $argv[1];
  var_dump(solution($input));
}
