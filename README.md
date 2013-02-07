# GridFieldDetailFormAddNew

Adds the ability to create a new gridField item directly from the edit form.

## Maintainer Contact

Ryan McLaren (Nickname: IOTI) <ryan (at) webbuildersgroup (dot) com>

## Requirements

 * SilverStripe 3.0.3+


## Installation & Documentation

 * Download and copy folder to SilverStripe root directory.
 * Run ?flush=all
	
Use the addComponent function to add the GridFieldDetailFormAddNew component

    $config = new GridFieldConfig_Base();
	$config->addComponent(new GridFieldDetailFormAddNew());
	
When working with one of the pre-configured GridFieldConfigs you must first remove the default GridFieldDetailForm component and then add the new GridFieldDetailFormAddNew

    $config = new GridFieldConfig_RecordEditor();
    $config->removeComponentsByType('GridFieldDetailForm');
    $config->addComponent(new GridFieldDetailFormAddNew());
