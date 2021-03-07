How To Create A Simple REST API in PHP? Step By Step Guide!
1.0 Project Overview
1.1 What is REST API?
1.2 Why do we need REST API?
1.3 Where REST API is used?
1.4 REST API in our tutorials

2.0 File structure

3.0 Setup the database
3.1 Create categories table
3.2 Dump data for categories table
3.3 Products table
3.4 Dump data for products table
3.5 Connect to database

4.0 Read products
4.1 Product object
4.2 Create a file to read products
4.3 Connect to database and products table
4.4 Read products from the database
4.5 Add Product "read()" method
4.6 Tell the user no products found
4.7 Output

5.0 Create Product
5.1 Create create.php file
5.2 Product create() method
5.3 Output

6.0 Read One Product
6.1 Create read_one.php file
6.2 Product readOne() method
6.3 Output

7.0 Update product
7.1 Create “update.php” file
7.2 Product update() method
7.3 Output

8.0 Delete Product
8.1 Create “delete.php” file
8.2 Product delete() method
8.3 Output

9.0 Search Products
9.1 Create "search.php" file
9.2 Create "search()" method
9.3 Output

10.0 Paginate Products
10.1 Create "read_paging.php" file
10.2 Create "core.php" file
10.3 Create "readPaging()" method
10.4 Create "count()" method
10.5 Get "paging" array
10.6 Output

11.0 Read Categories
11.1 Category object
11.2 Create "read.php" file
11.3 Category "read()" method
11.4 Output

12.0 Download Source Codes
13.0 What's Next?
14.0 Related Tutorials
15.0 Notes
__________________________________________________________________________

1.0 PROJECT OVERVIEW
1.1 What is REST API?
To define "REST API", we have to know what is "REST" and what is "API" first. I'll do my best to explain it in simple terms because REST has a lot of concepts inside of it that could mean a lot of things.

REST stands for "REpresentational State Transfer". It is a concept or architecture for managing information over the internet. REST concepts are referred to as resources. A representation of a resource must be stateless. It is usually represented by JSON. 

API stands for "Application Programming Interface". It is a set of rules that allows one piece of software application to talk to another. Those "rules" can include the create, read, update and delete operations.

REST API enables your application to cooperate with one or several different applications using REST concepts. If you want to learn more, watch the video below.

1.2 Why do we need REST API?
In many applications, REST API is a need because this is the lightest way to create, read, update or delete information between different applications over the internet or HTTP protocol. This information is presented to the user in an instant especially if you use JavaScript to render the data on a webpage.

1.3 Where REST API is used?
REST API can be used by any application that can connect to the internet. If data from an application can be created, read, updated or deleted using another application, it usually means a REST API is used.

1.4 REST API in our tutorials
A REST API is needed for our AJAX CRUD Tutorial. But don't mind it for now. We will do it one step at a time. You don't need to learn all of it as well. Just choose what you need to learn.

Also, please note that this PHP REST API is not yet in its final form. We still have some work to do with .htaccess for better URLs and more.

But one thing is for sure, this source code is good enough and works for our JavaScript tutorials.

_______________________________________________________________________

2.0 FILE STRUCTURE

At the end of this tutorial, we will have the following folders and files.
├─ api/
├─── config/
├────── core.php - file used for core configuration
├────── database.php - file used for connecting to the database.
├─── objects/
├────── product.php - contains properties and methods for "product" database queries.
├────── category.php - contains properties and methods for "category" database queries.
├─── product/
├────── create.php - a file that will accept posted product data to be saved to the database.
├────── delete.php - a file that will accept a product ID to delete a database record.
├────── read.php - a file that will output JSON data based on "products" database records.
├────── read_paging.php - a file that will output "products" JSON data with pagination.
├────── read_one.php - a file that will accept product ID to read a record from the database.
├────── update.php - a file that will accept a product ID to update a database record.
├────── search.php - a file that will accept keywords parameter to search "products" database.
├─── category/
├────── read.php - a file that will output JSON data based on "categories" database records.
├─── shared/
├────── utilities.php - a file that will return pagination array.

