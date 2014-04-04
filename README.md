FusionXBT
=========

FusionXBT is meant for use with [XBT Tracker](http://xbtt.sourceforge.net/tracker/).  It is merely a web
front-end for the XBT Tracker and is in no way affliated with Olaf van der Spek of the XBT project.

Installation
------------
- This project uses Laravel. install dependencies with [Composer](https://getcomposer.org/).
- The database needs to be set up. If using MySQL, create a file .env.php or .env.environment.php where environment is your working environment (e.g., development) in the root directory with contents

```php
<?php

return [
	'DB_HOSTNAME' => 'your mysql hostname',
	'DB_DATABASE' => 'the app database',
	'DB_USERNAME' => 'your mysql username',
	'DB_PASSWORD' => 'your mysql password'
];
```

Roadmap
-------

### Status

Currently FusionXBT is not ready for deployment.

### Planned Features

* Torrents may belong to several categories.
* Torrents may have multiple announce URLs.
* There may be an option to specify global announce URLs (i.e., URLs to which all listed torrents may announce).
* Categories may belong to one (or possibly more) categories.

License
-------

FusionXBT is Copyright © 2012 Tyler Toebe. It is free software under the Simplified BSD license and may be
used, modified, and redistributed under the terms specified in the LICENSE file.
