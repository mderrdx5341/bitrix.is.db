<?php
namespace App\Data;

trait IBlockElementTrait
{
    public function editAreaId()
    {
        global $APPLICATION;
        $editAreaId = "bx_tao_entity_{$this->iblock->id()}_{$this->id()}";
        $buttons = \CIBlock::GetPanelButtons(
            $this->iblock->id(),
            $this->id()
        );
        $editUrl = $buttons["edit"]["edit_element"]["ACTION_URL"];
        $deleteUrl = $buttons["edit"]["delete_element"]["ACTION_URL"] . '&' . bitrix_sessid_get();
        $editPopup = $APPLICATION->getPopupLink(array('URL' => $editUrl, "PARAMS" => array('width' => 780, 'height' => 500)));

        $btn = array(
			'URL' => "javascript:{$editPopup}",
			'TITLE' => 'Редактировать',
			'ICON' => 'bx-context-toolbar-edit-icon',
		);

        $APPLICATION->SetEditArea($editAreaId, array($btn));

        $btn = array(
			'URL' => 'javascript:if(confirm(\'' . \CUtil::JSEscape("Удалить") . '\')) jsUtils.Redirect([], \'' . \CUtil::JSEscape($deleteUrl) . '\');',
			'TITLE' => 'Удалить',
			'ICON' => 'bx-context-toolbar-delete-icon',
		);

        $APPLICATION->SetEditArea($editAreaId, array($btn));

        return $editAreaId;
    }

    public function id()
    {
        return $this->data['ID'];
    }

    public function title(): string
    {
        return $this->data['NAME'];
    }

    public function date(): string
    {
        return $this->data['CREATED_DATE'];
    }

    public function previewText()
    {
        return $this->data['PREVIEW_TEXT'];
    }

    public function detailText()
    {
        return $this->data['DETAIL_TEXT'];
    }

    public function url()
    {
        return $this->data['DETAIL_PAGE_URL'];
    }
}