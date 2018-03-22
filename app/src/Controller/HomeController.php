<?php

namespace App\Controller;

use App\AuthAdapters\AuthAdapterUser;

use App\Facilitator\App\SessionFacilitator;
use App\Mapper\Arena;
use App\Mapper\User;
use App\Mapper\Confrontation;
use App\Model\Consoles\CardsGame\Game\JoKenPo\Game;
use App\Model\Consoles\CardsGame\GameConsole;
use Interop\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Http\Request;
use Slim\Http\Response;
use SlimAuth\SlimAuthFacade;
use App\Validator\LoginFieldsValidator;

/**
 * Class HomeController
 * @package App\Controller
 * @Controller
 * @Router("/")
 */
class HomeController extends AbstractController
{
    /**
     * HomeController constructor.
     * @param ContainerInterface $ci
     */
    public function __construct(ContainerInterface $ci)
    {
        parent::__construct($ci);
    }

    /**
     * @param Request $request
     * @param Response $response
     * @return mixed
     * @Get(name="/", alias="catalogo.home.index")
     */
    public function indexAction(Request $request, Response $response) {
        return $this->view->render($response,"View/ListGames.twig");
    }

    /**
     * @param Request $request
     * @param Response $response
     * @return mixed
     * @Get(name="/FlashMath", alias="catalogo.home.FlashMath")
     */
    public function flashMathAction(Request $request, Response $response) {

        return $this->view->render($response,"View/FlashMath/FlashMath.twig",["game"=>"FlashMath"]);
    }



}
