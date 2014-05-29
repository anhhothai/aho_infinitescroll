<?php

class aho_infinitescroll_alist extends aho_infinitescroll_alist_parent {

    protected $_sThisTemplate = 'aho_infinitescroll_list.tpl';

    /**
     * @Todo: Change the template view
     * @return string
     */
    public function render(){

        parent::render();

        return $this->_sThisTemplate;
    }

    /**
     * @todo: Get the module option of view type
     * @return string
     */
    public function getViewTypeList(){
        return $this->getConfig()->getConfigParam('sInfiniteScrollListType');
    }


}