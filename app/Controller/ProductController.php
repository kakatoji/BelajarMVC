<?php

namespace Kakatoji\Belajar\MVC\Controller;

class ProductController
{
  public function categories(string $productID,string $categoryID):void
  {
    echo "PRODUK: $productID | catagori: $categoryID";
  }
}