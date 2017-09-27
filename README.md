# products

Dokumentation för produkt APIs.


## Api Endpoint för att lista alla produkter

Accepterar parametrar för sorterad listning. Sortering tillåts enligt namn, pris och kategori. En URL utan parametrar listar alla produkter enligt id.

[http://product.arcada.nitor.zone/api/list-products.php?sort="name"](http://product.arcada.nitor.zone/api/list-products.php?sort="name")
```JSON
{  
   "status":200,
   "products":[  
      {  
         "id":0,
         "name":"Heineken",
         "price":"2",
         "description":"pale lager beer",
         "category":"lager",
         "picture":"url",
         "tags":"comma-separated-list"
      },
      {  
         "id":1,
         "name":"Carlsberg",
         "price":"2",
         "description":"Probably the best beer in the world",
         "category":"pilsner",
         "tags":"comma-separated-list"
      }
   ]
}
```

## Api Endpoint för att lista en produkt

APIn kräver id parameter.

[http://product.arcada.nitor.zone/api/products.php?id=0](http://product.arcada.nitor.zone/api/products.php?id=0)
```JSON
{  
   "status":200,
   "products":[  
      {  
         "id":0,
         "name":"Heineken",
         "price":"2",
         "description":"pale lager beer",
         "category":"lager",
         "picture":"url",
         "tags":"comma-separated-list"
      }
   ]
}
```

## Api om produkten inte är specifierad

[http://product.arcada.nitor.zone/api/products.php?id=""](http://product.arcada.nitor.zone/api/products.php?id="")
```JSON
{
   "status": "400",
   "message": "Product not specified"
}
```



## Api Endpoint för att söka efter produkter

Behöver parametern "search" (search term). Söker igenom namn och description efter söktermen och listar ut resultaten. Ersätt space med "+".

[http://product.arcada.nitor.zone/api/search.php?search="lager+beer"](http://product.arcada.nitor.zone/api/search.php?search="lager+beer")
```JSON
{  
   "status":200,
   "products":[  
      {  
         "id":0,
         "name":"Heineken",
         "price":"2",
         "description":"pale lager beer",
         "category":"lager",
         "picture":"url",
         "tags":"comma-separated-list"
      },
      {  
         "id":1,
         "name":"Carlsberg",
         "price":"2",
         "description":"Probably the best beer in the world",
         "category":"pilsner",
         "picture":"url",
         "tags":"comma-separated-list"
      }
   ]
}
```

## Api om sökfältet tomt

[http://product.arcada.nitor.zone/api/search.php?search=""](http://product.arcada.nitor.zone/api/search.php?search="")
```JSON
{
   "status": "400",
   "message": "Search field is empty!"
}
```
