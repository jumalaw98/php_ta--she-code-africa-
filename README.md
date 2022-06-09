# PHP Track Assessment Template

## Instructions
This is the template repo for the `Beginner Level` `PHP Track`. Please follow to the below instructions to get started.

### Settings Up

- Fork this repository.
- Clone the repository to your local computer.

#### [Optional] Install Test Dependencies
  - composer install

### Working on your solutions
Within the cloned folder you should see the [index.php](./index.php) file. This php codefile should contain the solutions to the requirement assessment exercise.
- Open the [index.php](./index.php) code file in your favourite text/code editor.
- Read the instructions or any helpful text within the code file.
- Add your solutions to the provided function. <!-- Make sure to follow this instruction very closely, if the solution is written into a different function or method that would be considered invalid -->
- Commit your solution
    - git add index.php
    - git commit -m 'solution_name: cohort 4'
    - git push origin master
- submit your forked repository URL on the provided SCA Google Form

## Example
```php
# src/index.php

function prime($input)
{
  // code goes here
}

function solution($input)
{
  return prime($input);
}


$input = (int)$argv[1];
echo solution($input);
```

## Running 
``` shell
php -f src/index.php <input>

```

## Testing
``` shell
# Install depedencies
composer install

# run test
./vendor/bin/phpunit tests
```

## Need Help

For technical issue, please contact: ***
