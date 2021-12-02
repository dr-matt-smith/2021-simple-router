# 2021-simple-router

my attempt to create a very simple routing system, for DIY websites with a front controller ...

only just started this project, so thoughts as code at present 

.. matt ..

my aim - to be able to write stuff like this:
```
  get('/', 'homepage.php');
  get('/news/{id}', 'newsShow.php');
  post('/user/new/{firstName}/{lastName}', 'userNew.php');
```

or:
```
  get('/', 'HomeController', 'index');
  get('/news/{id}', 'NewsController', 'show');
  post('/user/new/{firstName}/{lastName}', 'UserController', 'new');
```
 
or even:
```
  // HomeController.php
  #Route('/')
  public function homepage()
  {
    print '<h1>home page<h1>');
  }
```
  
  where routes are declares as attributes, just like Symofny !
  
