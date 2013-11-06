<?php

/**
 * @extension to the @see GridFieldDetailForm
 * @package GridFieldDetailFormAddNew
 * @subpackage gridField
 */
class GridFieldDetailFormAddNew extends GridFieldDetailForm {
	
}

/**
 * extension to the @see GridFieldDetailForm_ItemRequest
 * @package GridFieldDetailFormAddNew
 * @subpackge gridField
 */
class GridFieldDetailFormAddNew_ItemRequest extends GridFieldDetailForm_ItemRequest {
    private static $allowed_actions=array(
                                        'ItemEditForm'
                                    );

	/**	
	 * adds a new button allowing users
	 * to add a new record directly from the edit screen
	 * @return {Form} 	 
	 */
	public function ItemEditForm() {
	  
		$form = parent::ItemEditForm();
		
		if($this->record->ID !== 0){		    
    		$actionFields=$form->Actions();
    		
    		$link = Controller::join_links($this->gridField->Link('item'), 'new');    		
    		    		
    		$actionFields->push(
	            new LiteralField(
                    'addNew', 
                    '<a href="' .$link. '" class="action action-detail ss-ui-action-constructive ss-ui-button ui-button ui-widget ui-state-default ui-corner-all new new-link" data-icon="add">' ._t("GridFieldDetailFormAddNew.ADD", "_Add"). ' '. $this->record->i18n_singular_name(). '</a>')
	        );
    		
		}
		
		return $form;
	}
	
}

?>