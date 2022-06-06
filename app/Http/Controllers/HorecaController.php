<?php

namespace App\Http\Controllers;

use App\Builder\Crockery;
use App\Builder\CrockeryBuilder;
use App\Builder\CutleryBuilder;
use App\Builder\Director;
use Illuminate\Http\Request;
use App\Menu\Menu;
use App\Menu\Category_Item;
use App\Products\CrockeryFactory;
use App\Products\CutleryFactory;
use App\Products\GlassWareFactory;
use App\Builder\Cutlery;
use App\Filter\Product;
use App\Filter\ProductLists;
use App\Strategy\Application;
use App\Strategy\ASC;
use App\Strategy\DESC;

class HorecaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu = new Menu(null,null,"menu__list","menu__item dropdown","menu__link"); 

        $home = new Menu("Home","#","menu__list","menu__item","menu__link"); 
        
        $products = new Menu("Products","#","dropdown-menu", "#" ,"menu__link"); 
        $products->addChildren(new Category_Item("Cutlery", "#" ,"subclass")); 
        $products->addChildren(new Category_Item("Crockery", "#" ,"subclass")); 
        $products->addChildren(new Category_Item("Glassware", "#", "subclass")); 
        $products->addChildren(new Category_Item("Housekeeping", "#", "subclass")); 
        $products->addChildren(new Category_Item("Room Amenities", "#" , "subclass")); 
        $products->addChildren(new Category_Item("Packaging", "#", "subclass")); 
        $products->addChildren(new Category_Item("Equipment", "#", "subclass")); 
        $products->addChildren(new Category_Item("Uniforms", "#" ,"subclass")); 

        $about = new Menu("About Us","#","menu__list","menu__item","menu__link"); 

        $blog = new Menu("Blog","#","menu__list","menu__item","menu__link"); 

        $contacts = new Menu("Contacts","#","menu__list","menu__item","menu__link"); 
        
        $menu->addChildren($home); 
        $menu->addChildren($products); 
        $menu->addChildren($about); 
        $menu->addChildren($contacts); 
        $menu->addChildren($blog); 
    
        
        // $menu->addChildren(new Category_Item("Contact", "#", "menu_link")); 
        
        // echo $menu->render();
    
      
    
        $res = $menu->render();
//    print_r($res); die;
        return view('layouts.index')->with('res',$res);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function display(){
        $factory = new CrockeryFactory;
        $product = $factory->makeProducts("https://static.wixstatic.com/media/b1c4ed_b3c7e3c3491f48c4b5e55c01feaeb51b~mv2.png/v1/fill/w_253,h_253,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/Bone%20China.png","Bone China");
        $product = $factory->makeProducts("https://static.wixstatic.com/media/b1c4ed_8d8fdcdac1014d15a4d7ab99fb5a3ae1~mv2.png/v1/fill/w_254,h_253,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/Ceramic.png","Ceramics");
        $product = $factory->makeProducts("https://static.wixstatic.com/media/b1c4ed_568f6f7dc2934c98ba08bf9730fe7234~mv2.png/v1/fill/w_254,h_253,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/Porcelain.png","Porcelain");
        $product = $factory->makeProducts("https://static.wixstatic.com/media/b1c4ed_592d1e46d5484839b6247ce504f8ece2~mv2.png/v1/fill/w_253,h_254,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/Acrylic.png","Acrylic");
        $product = $factory->makeProducts("https://static.wixstatic.com/media/b1c4ed_b3b935da1c9247bd874584d99ecf08fa~mv2.jpg/v1/fill/w_254,h_254,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/Melamine%20crockery%20buy%20Online.jpg","Melamine");
        
        $factory1 = new CutleryFactory;
        $product1 = $factory1->makeProducts("https://static.wixstatic.com/media/b1c4ed_4e5cfdcf8d4c4229865b02e104e204b5~mv2.png/v1/fill/w_246,h_246,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/SS.png","Stainless Steel");
        $product1 = $factory1->makeProducts("https://static.wixstatic.com/media/b1c4ed_80cc480a351b4a1d944229657c10fd29~mv2.png/v1/fill/w_246,h_246,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/Copper.png","Copper");
        $product1 = $factory1->makeProducts("https://static.wixstatic.com/media/b1c4ed_93b4240179d8484596a23defb136a480~mv2.png/v1/fill/w_254,h_253,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/Wooden.png","Wooden");
       
        $factory2 = new GlassWareFactory;
        $product2 = $factory2->makeProducts("https://static.wixstatic.com/media/b1c4ed_0689ffdde0c544bfa8a858a16d958e56~mv2.png/v1/fill/w_254,h_254,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/IndianOcean.png","Armenian Glasses ");
        $product2 = $factory2->makeProducts("https://static.wixstatic.com/media/b1c4ed_7d8766b24756465384d5bed2a4a14da6~mv2.png/v1/fill/w_254,h_254,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/Nadir.png","Imported Glasses ");
        $product2 = $factory2->makeProducts("https://static.wixstatic.com/media/b1c4ed_76415d273a9d4f26bcf3e91157b14907~mv2.jpg/v1/crop/x_841,y_0,w_3459,h_3459/fill/w_253,h_254,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/pexels-sharon-mccutcheon-1148450.jpg","Coloured Glasses");
        
        $category= (new Director())->create(new CutleryBuilder(new Cutlery) );
        $category1 = (new Director())->create(new CrockeryBuilder(new Crockery));
       print_r($category);
        echo "<hr/>";
        print_r($category1);

        print_r($product);
        print_r($product1);
        print_r($product2);die;
        return $product;

    }

    public function filter(){
        $productLists = new ProductLists();

        $productLists->addProduct(new Product("Cutlery"));
        $productLists->addProduct(new Product("Crockery"));
        $productLists->addProduct(new Product("Glassware"));
        $productLists->addProduct(new Product("Housekeeping"));
        $productLists->addProduct(new Product("Room Amenities"));
        $productLists->addProduct(new Product("Packaging"));
        $productLists->addProduct(new Product("Equipment"));
        $productLists->addProduct(new Product("Uniforms"));

          
        foreach($productLists as $product) {
            echo $product->getProduct() . PHP_EOL;
        }

        
    }


    public function ordering () {
        $data = array("Cutlery","Crockery","Glassware","Housekeeping","Room Amenities","Packaging","Equipment","Uniforms");
        $array = new Application();
        $array->order($data ,new ASC);
        $array->order($data, new DESC);
    
    }


// clientCode(new SweetWaterFactory, 20, "Ismail 22/1", 22);
// ECHO "<br/>";
// clientCode(new AlchoolFactory, 5, "Alecu Russo 3/1", 85);
// ECHO "<br/>";
// clientCode(new EnergyDrinkFactory, 8, "Miron Costin 15/1", 36);
    
}
