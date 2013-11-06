<?php 
/**
 * extends the @see GridFieldDetailForm_ItemRequest
 * @author Ryan
 *
 */
class GridFieldAddNewExtension extends DataExtension {
    
    /**
     * adds a new button allowing users
	 * to add a new record directly from the edit screen 
     * @param {Form} $form
     */
    public function updateItemEditForm($form){       
        
        //check if this DataExtension should be used
        if(Config::inst()->get('GridFieldAddNewExtension', 'use_data_extension')){
        
            if($this->owner->record->ID !== 0){
                $actionFields=$form->Actions();
            
                $link = Controller::join_links($this->owner->gridField->Link('item'), 'new');
            
                $actionFields->push(
                        new LiteralField(
                                'addNew',
                                '<a href="' .$link. '" class="action action-detail ss-ui-action-constructive ss-ui-button ui-button ui-widget ui-state-default ui-corner-all new new-link" data-icon="add">' ._t("GridFieldDetailFormAddNew.ADD", "_Add"). ' '. $this->owner->record->i18n_singular_name(). '</a>')
                );
            
            }
        }
               
    }
}

?>