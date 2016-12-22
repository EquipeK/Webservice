<?php
// Routes

	// Obtenir tous les produits
    $app->get('/products', function ($request, $response, $args) {
        $sth = $this->db->prepare("SELECT * FROM product ORDER BY id");
        $sth->execute();
        $products = $sth->fetchAll();
        return $this->response->withJson($products);
    });

    // Obtenir tous les revendeurs
    $app->get('/resellers', function ($request, $response, $args) {
        $sth = $this->db->prepare("SELECT * FROM reseller ORDER BY id");
        $sth->execute();
        $resellers = $sth->fetchAll();
        return $this->response->withJson($resellers);
    });

 	// Retrouver un produit avec son id 
    $app->get('/product/[{id}]', function ($request, $response, $args) {
         $sth = $this->db->prepare("SELECT * FROM product WHERE id=:id");
        $sth->bindParam("id", $args['id']);
        $sth->execute();
        $todos = $sth->fetchObject();
        return $this->response->withJson($todos);
    });

     // Retrouver un revendeur avec son id 
    $app->get('/reseller/[{id}]', function ($request, $response, $args) {
         $sth = $this->db->prepare("SELECT * FROM reseller WHERE id=:id");
        $sth->bindParam("id", $args['id']);
        $sth->execute();
        $reseller = $sth->fetchObject();
        return $this->response->withJson($reseller);
    });

    //Lister les produits associés à un revendeur
    $app->get('/producttor/[{id}]', function ($request, $response, $args) {
         $sth = $this->db->prepare("SELECT * FROM product p,product_reseller r WHERE p.id=r.product_id AND r.reseller_id=:id");
        $sth->bindParam("id", $args['id']);
        $sth->execute();
        $products = $sth->fetchAll();
        return $this->response->withJson($products);
    });

    //Tester le mail 
    $app->get('/user/[{email}]', function ($request, $response, $args) {
         $sth = $this->db->prepare("SELECT * FROM users WHERE email=:email");
        $sth->bindParam("email", $args['email']);
        $sth->execute();
        $user = $sth->fetchObject();
        return $this->response->withJson($user);
    });


  // Retrieve todo with id 
   /* $app->get('/todo/[{id}]', function ($request, $response, $args) {
         $sth = $this->db->prepare("SELECT * FROM tasks WHERE id=:id");
        $sth->bindParam("id", $args['id']);
        $sth->execute();
        $todos = $sth->fetchObject();
        return $this->response->withJson($todos);
    });*/
