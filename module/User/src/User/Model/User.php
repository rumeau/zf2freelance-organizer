<?php
/**
 * Created by PhpStorm.
 * User: Jean
 * Date: 11/10/2014
 * Time: 22:35
 */

namespace User\Model;

use RumeauLib\Model\AbstractModel;
use RumeauLib\Model\CrudInterface;
use RumeauLib\Model\ModelManager;
use Zend\Form\FormInterface;
use ZfcDatagrid\Column;

/**
 * Class User
 * @package User\Model
 *
 * @method ModelManager getServiceLocator()
 */
class User extends AbstractModel implements CrudInterface
{
    /**
     * @param FormInterface $form
     * @param array $data
     *
     * @return mixed
     */
    public function create(FormInterface $form, $data = array())
    {
        // TODO: Implement create() method.
    }

    /**
     * @return mixed|\ZfcDatagrid\Datagrid
     */
    public function retrieve()
    {
        $entityName = get_class($this->getEntity());
        $dql        = $this->getObjectManager()->createQueryBuilder();
        $dql->from($entityName, 'u');

        /**
         * @var \ZfcDatagrid\Datagrid $grid
         */
        $grid       = $this->getServiceLocator()->getServiceLocator()->get('ZfcDatagrid');
        $grid->setDataSource($dql);
        $grid->setDefaultItemsPerPage(AbstractModel::PAGINATOR_MAX_RESULTS);
        $grid->setTitle('Users');

        $column = new Column\Select('username', 'u');
        $column->setLabel('Username');
        $grid->addColumn($column);

        $column = new Column\Select('displayName', 'u');
        $column->setLabel('Name');
        $grid->addColumn($column);

        $column = new Column\Select('email', 'u');
        $column->setLabel('E-mail');
        $grid->addColumn($column);

        $column = new Column\Select('state', 'u');
        $column->setLabel('State');
        $grid->addColumn($column);

        return $grid;
    }

    /**
     * @param FormInterface $form
     * @param array $data
     *
     * @return mixed
     */
    public function update(FormInterface $form, $data = array())
    {
        // TODO: Implement update() method.
    }

    /**
     * @param FormInterface $form
     * @param array $data
     *
     * @return mixed
     */
    public function delete(FormInterface $form, $data = array())
    {
        // TODO: Implement delete() method.
    }

} 