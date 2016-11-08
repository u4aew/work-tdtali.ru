<?php

use yupe\components\controllers\FrontController;

/**
 * Class ProductController
 */
class ProductController extends FrontController
{
    /**
     * @var ProductRepository
     */
    protected $productRepository;

    /**
     * @var AttributeFilter
     */
    protected $attributeFilter;

    /**
     *
     */
    public function init()
    {
        $this->productRepository = Yii::app()->getComponent('productRepository');
        $this->attributeFilter = Yii::app()->getComponent('attributesFilter');

        parent::init();
    }

    /**
     *
     */
    public function actionIndex()
    {
        $criteria = new CDbCriteria();
        $criteria->addCondition("((parent_id = 0 OR parent_id IS NULL) AND id <> 25) OR (parent_id = 25)"); // Не лебедки без родителя или те, у кого родитель - эл.лебедки
        $categories = StoreCategory::model()->findAll($criteria);
        $this->render(
            'index',
            [
                'categories' => $categories,
            ]
        );
    }
    
    public function actionSearch($q)
    {
        $result = [];
        $criteria = new CDbCriteria();
        $criteria->addSearchCondition("name",$q);
        $products = Product::model()->findAll($criteria);
        $result = array_merge($result,$products);

        $criteria = new CDbCriteria();
        $criteria->with = [
            "category" => [
                "alias" => "cat",
                "condition" => "cat.name LIKE '%$q%' "
            ]
        ];
        $products = Product::model()->findAll($criteria);
        $result = array_merge($result,$products);

        $criteria = new CDbCriteria();
        $criteria->with = [
            "type" => [
                "alias" => "type",
                "condition" => "type.name LIKE '%$q%' "
            ]
        ];
        $products = Product::model()->findAll($criteria);
        
        $result = array_merge($result,$products);

        $totalResult = [];
        $usedProductIds = [];
        foreach ($result as $item)
        {
            if (array_search($item->id,$usedProductIds) !== false)
                continue;
            $totalResult[] = $item;
            $usedProductIds[] = $item->id;
        }
        
        $this->render(
            'products',
            ['products' => $totalResult]
        );
    }

    /**
     * @param $name
     * @throws CHttpException
     */
    public function actionView($name)
    {
        $product = $this->productRepository->getBySlug($name);

        if (null === $product) {
            throw new CHttpException(404, Yii::t('StoreModule.catalog', 'Product was not found!'));
        }

        $this->render('view', ['product' => $product]);
    }
}