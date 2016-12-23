<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Endpoint;

use Enm\ShopwareSdk\Endpoint\Definition\CategoryEndpointInterface;
use Enm\ShopwareSdk\Model\Category\CategoryInterface;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class CategoryEndpoint extends AbstractEndpoint implements CategoryEndpointInterface {
    /**
     * @return CategoryInterface[]
     * @throws \LogicException
     */
    public function findAll(): array {
        $response = $this->shopware()->get('/api/categories');

        $categoryWrapper = $this->deserializer()
            ->deserializeCollection(
                (string)$response->getBody()
            );

        foreach ($categoryWrapper->getData() as $category) {
            if (!$category instanceof CategoryInterface) {
                throw new \LogicException();
            }
        }

        return $categoryWrapper->getData();
    }

    /**
     * @param int $id
     *
     * @return CategoryInterface
     * @throws \LogicException
     */
    public function find(int $id): CategoryInterface {
        $response = $this->shopware()->get('/api/categories/' . (string)$id);

        $categoryWrapper = $this->deserializer()
            ->deserialize((string)$response->getBody());

        $category = $categoryWrapper->getData();
        if (!$category instanceof CategoryInterface) {
            throw new \LogicException();
        }

        return $category;
    }

    /**
     * @param CategoryInterface $category
     *
     * @return CategoryInterface
     */
    public function save(CategoryInterface $category): CategoryInterface {
        $data = $this->serializer()->serialize($category);

        if ($category->getId() !== 0) {
            $this->shopware()
                ->put('/api/categories/' . (string)$category->getId(), [], $data);
        } else {
            $response = $this->shopware()->post('/api/categories', [], $data);
            $data = json_decode((string)$response->getBody(), true);
            $category->setId((int)$data['data']['id']);
        }

        return $category;
    }
}