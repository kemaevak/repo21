<?php
// Обработка формы отзыва о товаре
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['name'], $_POST['review'], $_POST['rating'])) {
    $name = htmlspecialchars($_POST['name']);
    $review = htmlspecialchars($_POST['review']);
    $rating = htmlspecialchars($_POST['rating']);
    
    echo "<h3>Ваш отзыв:</h3>";
    echo "Имя: " . $name . "<br>";
    echo "Отзыв: " . $review . "<br>";
    echo "Рейтинг: " . $rating . "/5<br>";
}

// Обработка формы отмены заказа
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['order_id'], $_POST['reason'])) {
    $order_id = htmlspecialchars($_POST['order_id']);
    $reason = htmlspecialchars($_POST['reason']);
    
    echo "<h3>Информация об отмене заказа:</h3>";
    echo "Номер заказа: " . $order_id . "<br>";
    echo "Причина отмены: " . $reason . "<br>";
}

// Массив для хранения фиктивных отзывов
$reviews = [
    ['name' => 'Иван', 'review' => 'Отличный товар!', 'rating' => 5],
    ['name' => 'Ольга', 'review' => 'Все понравилось.', 'rating' => 4]
];

// Обработка формы добавления нового отзыва
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['name_review'], $_POST['review_content'], $_POST['rating_review'])) {
    $name_review = htmlspecialchars($_POST['name_review']);
    $review_content = htmlspecialchars($_POST['review_content']);
    $rating_review = htmlspecialchars($_POST['rating_review']);
    
    // Добавляем новый отзыв в массив
    $reviews[] = ['name' => $name_review, 'review' => $review_content, 'rating' => $rating_review];
}

// Вывод всех отзывов
echo "<h3>Отзывы:</h3>";
foreach ($reviews as $review) {
    echo "<strong>Имя:</strong> " . $review['name'] . "<br>";
    echo "<strong>Отзыв:</strong> " . $review['review'] . "<br>";
    echo "<strong>Рейтинг:</strong> " . $review['rating'] . "/5<br><br>";
}
?>
