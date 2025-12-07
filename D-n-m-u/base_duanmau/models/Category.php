<?php
class Category extends BaseModel {
    public function getAll() {
        $sql = 'SELECT * FROM categories';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}

?>