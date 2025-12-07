<?php
class Product extends BaseModel
{
    public function getAll()
    {
        $sql = 'SELECT pro.*, cat.name as cat_name FROM `products` as pro JOIN categories as cat ON pro.category_id = cat.id ORDER BY pro.id DESC;';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function insert($data)
    {
        $sql = "INSERT INTO `products` (`id`, `category_id`, `name`, `description`, `price`, `quantity`, `image`) VALUES 
        (NULL, '" . $data["category_id"] . "', '" . $data["name"] . "', '" . $data["description"] . "',
         '" . $data["price"] . "', '" . $data["quantity"] . "', '" . $data["image"] . "');";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

    }

    public function find($id)
    {
        $sql = "SELECT * FROM products WHERE id = $id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM products WHERE id = $id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
    }

    public function top4Lastest()
    {
        $sql = "SELECT * FROM products ORDER BY id DESC LIMIT 4";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function top4View()
    {
        $sql = "SELECT * FROM products ORDER BY view_count DESC LIMIT 4";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function updateViewCount($view_count, $id)
    {
        $sql = "UPDATE `products` SET `view_count` = $view_count WHERE `products`.`id` = $id;";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
    }
}

?>