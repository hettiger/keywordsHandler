# keywordsHandler #

Handle strings and arrays of keywords for the purposes of storage in a database or output to a view.

## How to use ##

Simply require the app/KeywordsHandler.php file or autoload it with composers neat autoloader.

Once you've instantiated the class it provides easy access to all it's functions.

```
#!php

<?php

use \Hettiger\KeywordsHandler;

/**
* This path will need some customization thought...
* Remember, if you're not going to use composers autoloader
* you can allways require the app/KeywordsHandler.php file
*/
require('./../vendor/autoload.php');

$KeywordsHandler = new KeywordsHandler;
$keywordsString = 'Bb, aa, Zb ,Za ';

$keywords = $KeywordsHandler->getSeparatedKeywords($keywordsString);
$tidyKeywords = $KeywordsHandler->getTidySeparatedKeywords($keywordsString);

$listTidyKeywords = $KeywordsHandler->getKeywordsString($tidyKeywords);
```

## Testing ##

You can test this Class, with PHPUnit by Sebastian Bergmann.
Just run composer install --dev and vendor/bin/phpunit