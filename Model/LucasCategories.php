<?php
namespace Dropshopz\LucasCategories\Model;

use Magento\Catalog\Model\Category as MagentoCategory;

class Category extends MagentoCategory
{
    /**
     * Retrieve the subcategory image URL
     *
     * @param string $attributeCode
     * @return string|null
     */
    public function getImageUrl($attributeCode = 'image')
    {
        $image = $this->getData($attributeCode);
        if (!$image) {
            return null;
        }
        return $this->_storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA) . 'catalog/category/' . $image;
    }
}
