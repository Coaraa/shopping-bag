<?php
require_once('models/products.php');
class ControleurBiscuits
{
    private $products;
    private $panier;
    private $twig;
    public function __construct($twig)
    {
        $this->products = new Products();
        $this->panier = new Panier();
        $this->twig = $twig;
    }
    public function render()
    {
        if (isset($_POST['product_id'])) {
            $id = $_POST['product_id'];
            $this->panier->create_panier($id);
        }
        echo $this->twig->render('produits.twig', array(
            'products' =>$this->products->get_biscuits()->fetchAll(),
            'page_name' => "Biscuits"
        ));
    }
}
?>