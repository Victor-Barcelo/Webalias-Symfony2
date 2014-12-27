<?php

namespace Vbv\WebaliasBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Vbv\WebaliasBundle\Entity\Alias;
use Vbv\WebaliasBundle\Form\AliasType;
use Vbv\WebaliasBundle\Lib\VbvUtils;

/**
 * Alias controller.
 *
 * @Route("/")
 */
class AliasController extends Controller
{
    /**
     * Search aliases by tag or tag+code.
     *
     * @Route("/", name="alias_search")
     * @Method({"POST","GET"})
     * @Template("VbvWebaliasBundle:Alias:search.html.twig")
     */ 
    public function searchAction(Request $request)
    {
        $alias = new Alias();
        $form = $this->createSearchForm($alias);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $aliasRepo = $this->getAliasRepo();
            $formTag = $form['tag']->getData();
            $formCode = $form['code']->getData();
            $searchCount = count($aliasRepo->getAliases($formTag, $formCode));
            if($searchCount > 0)
            {
                return $this->redirect($this->generateUrl('alias_list', array('tag'=> $formTag, 'code'=>$formCode)));
            }
            else
            {
                return array(
                    'form'   => $form->createView(),
                    'searchSuccess' => false,
                    'alias' => $alias
                );
            }
        }
        else
        {
            return array(
                'form'   => $form->createView()
            );
        }
    }

    /**
     * Create search form
     */
    public function createSearchForm($alias)
    {
        $form = $this->createFormBuilder($alias)
            ->add('tag', 'text', array( 'label'=>''))
            ->add('code', 'text', array('required' => false))
            ->add('save', 'submit', array('label' => 'Encuentra el alias!'))
            ->getForm();
        return $form;
    }

    /**
     *  Get alias repo
     */
    public function getAliasRepo()
    {
        return $this->getDoctrine()->getManager()->getRepository('VbvWebaliasBundle:Alias');
    }
    
    /**
     * Lists all aliases
     *
     * @Route("/list/{tag}/{code}", name="alias_list", requirements={"tag"}, defaults={"code" = null})
     * @Method("GET")
     * @Template("VbvWebaliasBundle:Alias:list.html.twig")
     */
    public function listAction($tag, $code)
    {
        $aliases = $this->getAliasRepo()->getAliases($tag, $code);
        return array('aliases' => $aliases);
    }

    /**
     * Creates a new Alias entity.
     *
     * @Route("/create", name="alias_create")
     * @Method({"POST","GET"})
     * @Template("VbvWebaliasBundle:Alias:create.html.twig")
     */
    public function createAction(Request $request)
    {
        $alias = new Alias();
        $form = $this->createCreateForm($alias);
        $form->handleRequest($request);
        if ($form->isValid()) 
        {
            $formTag = $form['tag']->getData();
            $formCode = $form['code']->getData();
            $formUrl = VbvUtils::addHttp($form['url']->getData());
            $searchCount = count($this->getAliasRepo()->getAliases($formTag, $formCode));
            if($searchCount == 0)
            {
                $alias->setUrl(VbvUtils::addHttp($form['url']->getData()));
                $em = $this->getDoctrine()->getManager();
                $em->persist($alias);
                $em->flush();
                return array('createSuccess' => true, 'form' => $form->createView());
            }
            else 
            {
                return array(
                    'form'   => $form->createView(),
                    'createSuccess' => false
                );
            }
        }
        return array(
            'form'   => $form->createView()
        );
    }

    /**
     *  Create create form
     */
    public function createCreateForm($alias)
    {
        return $this->createFormBuilder($alias)
                ->add('tag', 'text')
                ->add('code', 'text')
                ->add('url', 'text')
                ->add('save', 'submit', array('label' => 'Crea un alias!'))
                ->getForm();
    }
}