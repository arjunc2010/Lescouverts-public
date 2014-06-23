<?php

namespace Les\VirtualMarketBundle\Controller;

use Les\DataBundle\Form\Type\VirtualMarketSearchType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Httpfoundation\Response;
use Symfony\Component\HttpFoundation\Request;


class VirtualMarketController extends Controller
{


    public function indexAction(Request $request ){
        $maxResults = 10;
        $repository = $this->getDoctrine()->getRepository('LesDataBundle:Product');
        $this->qd = $repository->createQueryBuilder('p');
        $products = $this->qd->add('select','p')
                                ->setMaxResults($maxResults)
                                ->getQuery()
                                ->getResult();

        // For autocompleter
        $complete = null;

            for( $i=0; $i < sizeof($products) ; $i++ ){
                    $complete->name[ $i ] =  $products[$i]->getName();
                    $complete->maxPrice[ $i ] = $products[$i]->getPrice();
                    $places[ $i ] =  $products[$i]->getCountry();
            }
            $complete->maxPrice = max($complete->maxPrice);

            //no duplication of entries
            $places = array_unique( $places );
                $i=0;
                foreach( $places as $place ){
                    $complete->place[$i] = $place;
                    $i++;
                }

            $form = $this->createForm(new VirtualMarketSearchType(), array(
            'action' => $this->generateUrl('virtual_market_index'),
            'method' => 'POST',
        ));

              $form->handleRequest($request);
                 if ($form->isValid()){
                    $data = $form->getData();
                    return $this->forward("LesVirtualMarketBundle:VirtualMarket:searchMarket", array( 'data' => $data ,
                                                                                              'complete' => $complete,
                      ));
                }


//        exit(\Doctrine\Common\Util\Debug::dump($complete->name));

        return $this->render("LesVirtualMarketBundle:VirtualMarket:index.html.twig", array( 'form' => $form->createView() ,
                                                                                            'products' => $products,
                                                                                            'name' => $complete->name ,
                                                                                            'place' => $complete->place,
                                                                                            'priceMin' => 0,
                                                                                            'priceMax' => $complete->maxPrice,
                                                                                            'MAXPRICE' => $complete->maxPrice,
                                                                                            'discount' => 0
                                                                                    )
                );
    }

    /* ---------------    Search Market     ---------------------  */
    private $qd = null;
    public function searchMarketAction( $data , $complete ){
        $repository = $this->getDoctrine()->getRepository('LesDataBundle:Product');
        $this->qd = $repository->createQueryBuilder('p');
        $products = null;
        $form = $this->createForm(new VirtualMarketSearchType(), $data ,array(
            'action' => $this->generateUrl('virtual_market_index'),
            'method' => 'POST',
        ));
//        print_r($this->qd);
        $name = $data['product_name'];  $price = $data['price'];$place = $data['place'];
        $discount = $data['discount'] * 100;  $validFrom = $data['valid_from'];
        $validTill = $data['valid_till'];   $orderBy = $data['sort_by'];
        $acount=0;$bcount=0;$ccount=0;

        $this->qd->add('select','p');

                            if( $name != "" ){
                                $this->qd-> add('where','p.name LIKE :name')
                                        ->setParameter('name',"%".$name."%");
                                $acount=1;
                                $ccount=1;
                            }

                            if($place!=""){
                                if($acount!=0){
                                    $this->qd-> andWhere('p.country LIKE :country')
                                        ->setParameter('country',"%".$place."%");
                                }else{
                                    $this->qd-> add('where' ,'p.country LIKE :country')
                                        ->setParameter('country',"%".$place."%");

                                }
                                $ccount=1;
                            }


                        if($price!=""){
                            $price = explode("-",$price);
                            $priceMin = (float)$price[0];
                            $priceMax = (float)$price[1];
//                            print_r( $priceMax );

//                            $this->qd->having(':priceMin <= p.price')
//                                       ->andHaving('p.price <= :priceMax ')
//                                           ->setParameters(array('priceMin'=>$priceMin , 'priceMax' => $priceMax) );

//                            $this->qd->having(':priceMin <= p.price')
//                                ->andHaving('p.price <= :priceMax ')
//                                ->setParameters(array('priceMin'=>300 , 'priceMax' => 600) );

                            $bcount=1;
                            $ccount=1;
                        }




                        if($discount!=""){
                            if($bcount!=0){
                                $this->qd->andHaving('p.discount >= :discount')
                                    ->setParameter('discount',$discount);
                            }else{
                                $this->qd->having('p.discount >= :discount')
                                    ->setParameter('discount',$discount);
                                $bcount=1;
                            }
                        }

                        //check existence of valid from constraint
                        if($validFrom!=""){
                            $validFrom = date("Y-m-d",strtotime($validFrom));
                            if($bcount!=0){
                                  $this->qd->andHaving('p.validFrom >= :date')
                                      ->setParameter('date', $validFrom );

                            }else{
                                $this->qd->having('p.validFrom >= :date')
                                    ->setParameter('date',$validFrom );
                                $bcount=1;
                            }

                        }


                        //check existence of valid till constraint
                        if($validTill!=""){
                            $validTill = date("Y-m-d",strtotime($validTill));
                            if($bcount!=0){
                                $this->qd->andHaving('p.validTill < :date')
                                    ->setParameter('date', $validTill );
                            }else{
                                $this->qd->having('p.validTill < :date')
                                    ->setParameter('date',$validTill );
                            }
                            $ccount=5;
                        }

                //        //check existence of valid till constraint or put default value
                //        if($ccount == 0 ){
                //                $this->qd->andHaving('p.validTill >= :date')
                //                    ->setParameter('date', date("Y-m-d") );
                //        }else if($ccount != 5 && $ccount != 4){
                //                $this->qd->having('p.validTill >= :date')
                //                    ->setParameter('date', date("Y-m-d") );
                //        }






                        if(strcmp($orderBy,'a')==0){
                            $this->qd->orderBy('p.name');
                        }else if(strcmp($orderBy,"p")==0){
                            $this->qd->orderBy('p.price');
                        }else if(strcmp($orderBy,"d")==0){
                            $this->qd->orderBy('p.discount','DESC');
                        }else if(strcmp($orderBy,"v")==0){
                            $this->qd->orderBy('p.validTill');
                        }

     $query = $this->qd->getQuery();
     $products = $query->getResult();



//                            and(\Doctrine\Common\Util\Debug::dump( $test));

        return $this->render("LesVirtualMarketBundle:VirtualMarket:index.html.twig", array( 'form' => $form->createView(),
                                                                                            'products' => $products,
                                                                                            'name' => $complete->name ,
                                                                                            'place' => $complete->place,
                                                                                            'priceMin' => $priceMin,
                                                                                            'priceMax' => $priceMax,
                                                                                            'MAXPRICE' => $complete->maxPrice,
                                                                                            'discount' => $discount
                                                                                        ) );
    }



    public function focusAction( $id ){
        $repository = $this->getDoctrine()->getRepository('LesDataBundle:Product');
        $product = $repository->findById($id);
        $shopId = $product[0]->getShopId();

        $repository2 = $this->getDoctrine()->getRepository('LesDataBundle:Shop');
        $shop = $repository2->findById($shopId);

        return $this->render("LesVirtualMarketBundle:VirtualMarket:focus.html.twig", array( 'product' => $product , 'shop' => $shop ) );
    }
}



























