# GridFieldDetailFormAddNew

Adds the ability to create a new gridField item directly from the edit form. Use the 3.0 branch for compatability with SilverStripe 3.0.

## Maintainer Contact

Ryan McLaren (Nickname: IOTI) <ryan (at) webbuildersgroup (dot) com>

## Requirements

 * SilverStripe 3.1+


## Installation & Documentation

 * Download and copy folder to SilverStripe root directory.
 * Run ?flush=all
 
 By default the "add new" button is added to all detail forms. You can disable this functionality in your config.yml using
 
	 GridFieldAddNewExtension:
	   use_data_extension: true
	   
If you instead prefer to add the button manually to a detail form use the addComponent function to add the GridFieldDetailFormAddNew component.

    $config = new GridFieldConfig_Base();
	$config->addComponent(new GridFieldDetailFormAddNew());
	
When working with one of the pre-configured GridFieldConfigs you must first remove the default GridFieldDetailForm component and then add the GridFieldDetailFormAddNew component.

    $config = new GridFieldConfig_RecordEditor();
    $config->removeComponentsByType('GridFieldDetailForm');
    $config->addComponent(new GridFieldDetailFormAddNew());
