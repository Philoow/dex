<?php

namespace Dex\ManagerBundle\Admin;

use Sonata\UserBundle\Admin\Document\GroupAdmin as BaseGroupAdmin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use FOS\UserBundle\Model\GroupManagerInterface;

class GroupAdmin extends BaseGroupAdmin {

    /**
     * {@inheritdoc}
     */
    protected function configureDatagridFilters(DatagridMapper $filterMapper) {

    }

}