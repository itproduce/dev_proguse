<?//как получить EDIT_LINK  DELETE_LINK

	$arButtons = CIBlock::GetPanelButtons(
	$field["IBLOCK_ID"],
	$field["ID"],
	    0,
	    array("SECTION_BUTTONS"=>false, "SESSID"=>false)
	);
	$field["EDIT_LINK"] = $arButtons["edit"]["edit_element"]["ACTION_URL"];
	$field["DELETE_LINK"] = $arButtons["edit"]["delete_element"]["ACTION_URL"];

	$this->AddEditAction($field['ID'], $field['EDIT_LINK'], CIBlock::GetArrayByID($field["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($field['ID'], $field['DELETE_LINK'], CIBlock::GetArrayByID($field["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

?>
<?
//	вывод цены отдельно 
$arPrice = CCatalogProduct::GetOptimalPrice($productID, $quantity, $USER->GetUserGroupArray(), $renewal);
		if (!$arPrice || count($arPrice) <= 0)
		{
		    if ($nearestQuantity = CCatalogProduct::GetNearestQuantityPrice($productID, $quantity, $USER->GetUserGroupArray()))
		    {
		        $quantity = $nearestQuantity;
		        $arPrice = CCatalogProduct::GetOptimalPrice($productID, $quantity, $USER->GetUserGroupArray(), $renewal);
		    }
		}
		echo "<pre>";
		print_r($arPrice);
		echo "</pre>";

?>