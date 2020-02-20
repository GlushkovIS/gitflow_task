<?php
function grade_sort($x, $y) {
    return ($x['sort'] > $y['sort']);
}
function visualHeaderMenu($arrayMenu)
{
    usort($arrayMenu, 'grade_sort');
    $numMenuElements = count($arrayMenu);
    for (
        $I = 0;
        $I < $numMenuElements;
        $I++
    ) {
        ?> <a href="<?= $arrayMenu[$I]['path']; ?>"><?= $arrayMenu[$I]['title']; ?></a>
    <?php }
} ?>
<?php
$arrayMenuElements = [
    [
        'title' => 'О нас',
        'path' => "/route/about/",
        'sort' => '1'
    ],
    [
        'title' => 'Новости',
        'path' => "/route/news/",
        'sort' => '3'
    ],
    [
        'title' => 'Домашняя страница',
        'path' => "/route/home/",
        'sort' => '2'
    ],
    [
        'title' => 'Вакансии',
        'path' => "/route/job/",
        'sort' => '4'
    ],
    [
        'title' => 'Оплата банковской картой',
        'path' => "/route/pay/",
        'sort' => '5'
    ]
];
