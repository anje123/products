
HOW TO SETUP:
```
CLONE THE REPO```
```
 cp .env.example .env
```
```
 php artisan key:generate
```
```
 php artisan migrate
```
```

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
    * GET /api/logout
     
* Add a new category:
    * POST /api/category/create
     field: name
     
* Edit a category:
    * POST /api/category/:id
     field: name
     
* Delete a category:
    * DELETE /api/category/:id
    
* Read a category:
    * GET /api/category/:id 

* Read all category:
    * GET /api/category
    
    
* Add a new product:
    * POST /api/product/create
     field: name
     
* Edit a product:
    * PUT /api/product/:id
     field: name
     
* Delete a product:
    * DELETE /api/product/:id
    
* Read a product:
    * GET /api/category/:id 

* Read all product:
    * GET /api/product
    
* Read all product to a category:
    * GET /api/category_id/product
```

## HTTP Verbs

| HTTP METHOD | POST            | GET       | PUT         | DELETE |
| ----------- | --------------- | --------- | ----------- | ------ |
| CRUD OP     | CREATE          | READ      | UPDATE      | DELETE |


