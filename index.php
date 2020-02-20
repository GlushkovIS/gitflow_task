<?php

$result3 = [
    'authors' => [
        'lev@mail.ru' => [
            'name' => 'Лев',
            'surname' => 'Толстой',
            'patronymic' => 'Николаевич',
            'year' => '1876',
            'email' => 'lev@mail.ru'
        ],
        'ivan@mail.ru' => [
            'name' => 'Иван',
            'surname' => 'Тургенев',
            'patronymic' => 'Сергеевич',
            'year' => '1900',
            'email' => 'ivan@mail.ru'
        ],
        'aleksandr@mail.ru' => [
            'name' => 'Александр',
            'surname' => 'Пушкин',
            'patronymic' => 'Сергеевич',
            'year' => '1750',
            'email' => 'aleksandr@mail.ru'
        ]
    ],
    'books' => [
        'lev@mail.ru' => [
            'Война и мир том 1',
            'Война и мир том 2',
            'Война и мир том 3'
        ],
        'ivan@mail.ru' => [
            'Отцы и дети',
            'First Love: (Novella)'
        ],
        'aleksandr@mail.ru' => [
            'Всадник',
            'Ruslan and Ludmila'
        ]
    ]
];

$red = (bool)rand(0, 1);

?>

<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/templates/header.php'; ?>

    <main>
        <h1 <?php if ($red) {
            echo 'class="red";';
        } ?>>Лучшие классические книги и их авторы</h1>


        <p>
            <?php

            $arrayEmailsAuthors = array_keys($result3['authors']);

            for (
                $I = 0;
                $I < count($arrayEmailsAuthors);
                $I++
            ) {
                for ($j = 0; $j < count($result3['books'][$arrayEmailsAuthors[$I]]); $j++) {
                    echo $result3['books'][$arrayEmailsAuthors[$I]][$j] . ',' . ' ';
                } ?>


                ее написал <?= $result3['authors'][$arrayEmailsAuthors[$I]]['name'] . ' ' .
                $result3['authors'][$arrayEmailsAuthors[$I]]['surname'] . ' ' . $result3['authors'][$arrayEmailsAuthors[$I]]['patronymic'] . ' ' .
                $result3['authors'][$arrayEmailsAuthors[$I]]['year'] . ' г.р. ' .
                $result3['authors'][$arrayEmailsAuthors[$I]]['email']; ?> <br><br>
            <?php } ?>
        </p>
    </main>

<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/templates/footer.php'; ?>