# doctrine2-with-cross-db-joins
Simple example of cross database join in doctrine 2
 
## Installation

Apache rewrite module must be enable.
Just clone the project in in your www or htdocs directory.

Go into project folder
Then you can install all dependencies via Composer by running this command:
```bash
composer install

```
Composer detail:
http://rapidsol.blogspot.com/2015/03/download-composerphar.html


# Setup Database

Configure databse and import sql files which is in sql folder. 

# Note: First import database_b.sql and then database_a.sql (because of cross database relation)



# Run Applicationn

http://localhost/doctrine2-with-cross-db-joins/fetch.php

