
HOW TO SETUP:
```
 clone the repo
```
```
 cp .env.example .env
```
```
 php artisan key:generate
```
```
 php artisan migrate
```


## RESTful URLs
```
*SignUp a User:
    * POST /api/auth/signup
      field: name, email, password,password_confirmation
      
*Login a User:
    * POST /api/auth/login
      field: email, password
      
*Logout a User:
    * GET /api/auth/logout

*Get Current User:
    * GET /api/auth/user
     
### You must Submit your Token in the Authorization Header to access the following routes

* Add a new category:
    * POST /api/auth/category/create
     field: name
     
* Edit a category:
    * POST /api/auth/category/:id
     field: name
     
* Delete a category:
    * DELETE /api/auth/category/:id
    
* Read a category:
    * GET /api/auth/category/:id 

* Read all category:
    * GET /api/auth/category
    
    
* Add a new product:
    * POST /api/auth/product/create
     field: name
     
* Edit a product:
    * PUT /api/auth/product/:id
     field: name
     
* Delete a product:
    * DELETE /api/auth/product/:id
    
* Read a product:
    * GET /api/auth/category/:id 

* Read all product:
    * GET /api/auth/product
    
* Read all product to a category:
    * GET /api/auth/category_id/product
```

## HTTP Verbs

| HTTP METHOD | POST            | GET       | PUT         | DELETE |
| ----------- | --------------- | --------- | ----------- | ------ |
| CRUD OP     | CREATE          | READ      | UPDATE      | DELETE |


### Access Token Similar Image
![Alt text](https://github.com/anje123/products/blob/master/image/token1.png "Optional Title")