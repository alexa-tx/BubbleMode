<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BubbleMode</title>
    <link rel="stylesheet" href="assets/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <?php include 'include/header.php'; ?>
    <main class="main-section">
        <div class="image-container">
            <img src="../assets/images/bubblemode1.png" alt="BubbleMode">
        </div>
        <div class="info-section">
            <h1>Добро пожаловать в BubbleMode!</h1>
            <p>
            Уютное кафе, где вы сможете насладиться 
            вкуснейшими напитками с шариками тапиоки и другими уникальными вкусами. Мы предлагаем разнообразные 
            напитки и десерты для любого настроения!
            </p>
        </div>
    </main>

    <section id="about" class="about-section">
    <div class="about-content">
        <div class="about-left">
            <h2>О нас <i class='bx bx-coffee-togo'></i></h2>
            <p>
                BubbleMode — это уютное кафе, где каждый может попробовать уникальные напитки с шариками тапиоки и насладиться дружелюбной атмосферой. 
                Наше кафе открыто для всех, кто любит оригинальные вкусы и необычные десерты.
            </p>
        </div>
        <div class="about-right">
            <h3>Наша миссия<i class='bx bx-edit-alt'></i></h3>
            <p>
                Мы стремимся подарить людям радость и новые вкусовые впечатления. Каждый напиток в нашем меню — это результат тщательного подбора ингредиентов и креативного подхода к созданию рецептов.
            </p>
        </div>
    </div>
</section>

<section id="drinks" class="drinks-section">
    <h2>Наши напитки</h2>
    <div class="drink-circles">
        <div class="drink-item">
            <div class="drink-front">
                <h3>Авторские Bubble Tea</h3>
                <img src="../assets/images/drink-images/drink_custom.png" alt="Авторский Bubble Tea" class="custom-drink">
            </div>
            <div class="drink-back">
                <p>Уникальные авторские напитки с разными вкусами и добавками.</p>
            </div>
        </div>
        <div class="drink-item">
            <div class="drink-front">
                <h3>Bubble Tea с фруктами</h3>
                <img src="../assets/images/drink-images/drink_fruit.png" alt="Фруктовый Bubble Tea" class="fruit-drink">
            </div>
            <div class="drink-back">
                <p>Освежающие напитки с натуральными фруктами и ягодами.</p>
            </div>
        </div>
        <div class="drink-item">
            <div class="drink-front">
                <h3>Необычные тапиоки</h3>
                <img src="../assets/images/drink-images/drink_tapioca.png" alt="Необычные тапиоки" class="tapioca-drink">
            </div>
            <div class="drink-back">
                <p>Выбор необычных тапиок с разными вкусами и цветами.</p>
            </div>
        </div>
    </div>
</section>

</body>
</html>