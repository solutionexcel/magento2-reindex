<?php
/**
 * @package     Solutionexcel_Reindex
 * @author      SolutionExcel - https://www.solutionexcel.com/ - info@solutionexcel.com
 * @copyright   Copyright © 2018 SolutionExcel. All rights reserved.
 * @license     https://opensource.org/licenses/AFL-3.0  Academic Free License 3.0 | Open Source Initiative
**/
namespace Solutionexcel\Reindex\Controller\Adminhtml;

abstract class Indexer extends \Magento\Backend\App\Action
{
    /**
     * @return bool
	 * Check ACL permissions
     */
    protected function _isAllowed()
    {
        switch ($this->_request->getActionName()) {
            case 'reindexManually':
                return $this->_authorization->isAllowed('Magento_Indexer::changeMode');
        }

        return false;
    }
}
