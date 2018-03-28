<?php
$installer = $this;

$installer->startSetup();

$setup = new Mage_Eav_Model_Entity_Setup('core_setup');



$entityTypeId     = $setup->getEntityTypeId('customer');
$attributeSetId   = $setup->getDefaultAttributeSetId($entityTypeId);
$attributeGroupId = $setup->getDefaultAttributeGroupId($entityTypeId, $attributeSetId);

$installer->addAttribute("customer", "company_name",  array(
    "type"     => "varchar",
    "backend"  => "",
    "label"    => "Company Name",
    "input"    => "text",
    "source"   => "",
    "visible"  => true,
    "required" => false,
    "default" => "",
    "frontend" => "",
    "unique"     => false,
    

        ));

        $attribute   = Mage::getSingleton("eav/config")->getAttribute("customer", "company_name");


$setup->addAttributeToGroup(
    $entityTypeId,
    $attributeSetId,
    $attributeGroupId,
    'company_name',
    '999'  //sort_order
);

$used_in_forms=array();

// $used_in_forms[]="adminhtml_customer"; <!admin customer form>
$used_in_forms[]="checkout_register";
$used_in_forms[]="customer_account_create";
$used_in_forms[]="customer_account_edit";
// $used_in_forms[]="adminhtml_checkout"; <! order in admin checkout>
        $attribute->setData("used_in_forms", $used_in_forms)
                ->setData("is_used_for_customer_segment", true)
                ->setData("is_system", 0)
                ->setData("is_user_defined", 1)
                ->setData("is_visible", 1)
                ->setData("sort_order", 201)
                ;
        $attribute->save();



$installer->addAttribute("customer", "abn",  array(
    "type"     => "varchar",
    "backend"  => "",
    "label"    => "ABN",
    "input"    => "text",
    "source"   => "",
    "visible"  => true,
    "required" => false,
    "default" => "",
    "frontend" => "",
    "unique"     => false,
    

        ));

        $attribute   = Mage::getSingleton("eav/config")->getAttribute("customer", "abn");


$setup->addAttributeToGroup(
    $entityTypeId,
    $attributeSetId,
    $attributeGroupId,
    'abn',
    '998'  //sort_order
);

$used_in_forms=array();

// $used_in_forms[]="adminhtml_customer";
$used_in_forms[]="checkout_register";
$used_in_forms[]="customer_account_create";
$used_in_forms[]="customer_account_edit";

// $used_in_forms[]="adminhtml_checkout";
        $attribute->setData("used_in_forms", $used_in_forms)
                ->setData("is_used_for_customer_segment", true)
                ->setData("is_system", 0)
                ->setData("is_user_defined", 1)
                ->setData("is_visible", 1)
                ->setData("sort_order", 202)
                ;
        $attribute->save();




$installer->endSetup();



