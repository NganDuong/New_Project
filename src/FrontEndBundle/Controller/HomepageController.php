<?php

namespace FrontEndBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class HomepageController extends Controller
{
    /**
     * @Route ("/base")
     */
    public function baseAction()
    {
        return $this->render('FrontEndBundle::base.html.twig');
    }

    /**
     * @Route ("/homepage")
     */
    public function homepageAction()
    {
        return $this->render('FrontEndBundle::home.page.html.twig');
    }

    /**
     * @Route ("/about")
     */
    public function aboutAciton() {
        return $this->render('FrontEndBundle::about.page.html.twig');
    }

    /**
     * @Route ("/contact")
     */
    public function contactAction() {
        return $this->render('FrontEndBundle::contact.page.html.twig');
    }

    /**
     * @Route ("/shop")
     */
    public function shopAction() {
        return $this->render('FrontEndBundle::shop.page.html.twig');
    }

    /**
     * @Route ("/user")
     */
    public function userAction() {
        return $this->render('FrontEndBundle::user.profile.page.html.twig');
    }

    /**
     * @Route ("/cart")
     */
    public function cartAction() {
        return $this->render('FrontEndBundle::cart.page.html.twig');
    }

    /**
     * @Route ("/order")
     */
    public function orderAction() {
        return $this->render('FrontEndBundle::orderpage.html.twig');
    }

    /**
     * @Route ("/update")
     */
    public function updateAction() {
        return $this->render('FrontEndBundle::update.profile.page.html.twig');
    }

    /**
     * @Route ("/wishlist")
     */
    public function wishlistAction() {
        return $this->render('FrontEndBundle::wishlist.html.twig');
    }

    /**
     * @Route ("/payment")
     */
    public function paymentAction() {
        return $this->render('FrontEndBundle::payment.page.html.twig');
    }

    /**
     * @Route ("/category")
     */
    public function categoryAction() {
        return $this->render('FrontEndBundle::category.page.html.twig');
    }

    /**
     * @Route ("/example")
     */
    public function exAction() {
        return $this->render('FrontEndBundle::Example.html.twig');
    }


}
