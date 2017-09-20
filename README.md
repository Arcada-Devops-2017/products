# products

Dokumentation för produkt APIs.


## Api Endpoint för att lista alla produkter

Accepterar parametrar för sorterad listning. Sortering tillåts enligt namn, pris och kategori. En URL utan parametrar listar alla produkter enligt id.

[http://products.arcada.nitor.zone/api/list-products.php?sort="name"](http://products.arcada.nitor.zone/api/list-products.php?sort="name")
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


## Api Endpoint för att söka efter produkter

Behöver parametern "search" (search term). Söker igenom namn och description efter söktermen och listar ut resultaten. Ersätt space med "+".

[http://products.arcada.nitor.zone/api/search.php?search="lager+beer"](http://products.arcada.nitor.zone/api/search.php?search="lager-beer")
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
