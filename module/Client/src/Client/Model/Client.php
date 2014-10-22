<?php
/**
 * Created by PhpStorm.
 * User: Jean
 * Date: 16/10/2014
 * Time: 19:57
 */

namespace Client\Model;

use RumeauLib\Model\AbstractModel;
use RumeauLib\Model\CrudInterface;
use RumeauLib\Model\ModelManager;
use Zend\Form\FormInterface;
use ZfcDatagrid\Column;

/**
 * Class Client
 * @package Client\Model
 *
 * @method ModelManager getServiceLocator()
 */
class Client extends AbstractModel implements CrudInterface
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
     * @return mixed
     */
    public function retrieve()
    {
        $entityName = get_class($this->getEntity());
        $dql        = $this->getObjectManager()->createQueryBuilder();
        $dql->from($entityName, 'c');

        /**
         * @var \ZfcDatagrid\Datagrid $grid
         */
        $grid       = $this->getServiceLocator()->getServiceLocator()->get('ZfcDatagrid');
        $grid->setDataSource($dql);
        $grid->setDefaultItemsPerPage(AbstractModel::PAGINATOR_MAX_RESULTS);
        $grid->setTitle('Clients');

        $column = new Column\Select('name', 'c');
        $column->setLabel('Name');
        $grid->addColumn($column);

        $column = new Column\Select('email', 'c');
        $column->setLabel('E-mail');
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