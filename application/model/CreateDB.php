<?php


namespace application\model;
require_once('Model.php');

// create the database
class CreateDB extends Model
{
    private $createTableQueries = array(
//        "CREATE TABLE `users` (
//          `id` int(11) NOT NULL AUTO_INCREMENT,
//          `username` varchar(100) COLLATE utf8_persian_ci NOT NULL,
//          `email` varchar(100) COLLATE utf8_persian_ci NOT NULL,
//          `password` varchar(100) COLLATE utf8_persian_ci NOT NULL,
//          `admin` enum('user','admin') COLLATE utf8_persian_ci NOT NULL DEFAULT 'user',
//          `active` iint(10) NOT NULL DEFAULT 0,
//          `created_at` datetime NOT NULL,
//          `updated_at` datetime DEFAULT NULL,
//          PRIMARY KEY (`id`),
//          UNIQUE KEY (`email`,`username`)
//        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;",

//        "CREATE TABLE `users` (
//          `id` int(11) NOT NULL AUTO_INCREMENT,
//          `username` varchar(100) COLLATE utf8_persian_ci NOT NULL,
//          `email` varchar(100) COLLATE utf8_persian_ci NOT NULL,
//          `password` varchar(100) COLLATE utf8_persian_ci NOT NULL,
//          `admin` enum('user','admin') COLLATE utf8_persian_ci NOT NULL DEFAULT 'user',
//          `active` iint(10) NOT NULL DEFAULT 0,
//          `created_at` datetime NOT NULL,
//          `updated_at` datetime DEFAULT NULL,
//          PRIMARY KEY (`id`),
//          UNIQUE KEY (`email`,`username`)
//        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;",

//        "CREATE TABLE `actors` (
//          `id` int(11) NOT NULL AUTO_INCREMENT,
//          `first_name` varchar(100) COLLATE utf8_persian_ci NOT NULL,
//          `last_name` varchar(100) COLLATE utf8_persian_ci NOT NULL,
//          `picture` varchar(200) NOT NULL,
//          `birth_date` varchar(100) ,
//          `birth_place` varchar(100) ,
//          `bio` varchar(1000) COLLATE utf8_persian_ci,
//          `created_at` datetime NOT NULL,
//          `updated_at` datetime DEFAULT NULL,
//          PRIMARY KEY (`id`)
//        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;",
//
//        "CREATE TABLE `actor_pictures` (
//          `actor_id` int(11) NOT NULL ,
//          `picture` varchar(200),
//          `created_at` datetime NOT NULL,
//          `updated_at` datetime DEFAULT NULL,
//          PRIMARY KEY (`actor_id`,`picture`),
//          FOREIGN KEY (`actor_id`) REFERENCES `actors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
//        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;",
//
//
//        "CREATE TABLE `directors` (
//          `id` int(11) NOT NULL AUTO_INCREMENT,
//          `first_name` varchar(100) COLLATE utf8_persian_ci NOT NULL,
//          `last_name` varchar(100) COLLATE utf8_persian_ci NOT NULL,
//          `birth_date` varchar(100) ,
//          `birth_place` varchar(100) ,
//          `picture` varchar(200) COLLATE utf8_persian_ci,
//          `bio` varchar(1000) COLLATE utf8_persian_ci,
//          `created_at` datetime NOT NULL,
//          `updated_at` datetime DEFAULT NULL,
//          PRIMARY KEY (`id`)
//        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;",
//
//        "CREATE TABLE `director_pictures` (
//          `director_id` int(11) NOT NULL ,
//          `picture` varchar(200) COLLATE utf8_persian_ci,
//          `created_at` datetime NOT NULL,
//          `updated_at` datetime DEFAULT NULL,
//          PRIMARY KEY (`director_id`,`picture`),
//          FOREIGN KEY (`director_id`) REFERENCES `directors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
//        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;",
//
//        "CREATE TABLE `movies` (
//          `id` int(11) NOT NULL AUTO_INCREMENT,
//          `movie_name` varchar(100) COLLATE utf8_persian_ci NOT NULL,
//          `director` varchar(100) COLLATE utf8_persian_ci NOT NULL,
//          `author` varchar(100) COLLATE utf8_persian_ci NOT NULL,
//          `release_date` varchar(100),
//          `trailer` varchar(100) COLLATE utf8_persian_ci,

//          `duration` varchar(100) COLLATE utf8_persian_ci,
//          `rewards` varchar(100) COLLATE utf8_persian_ci,

//          `picture` varchar(200) COLLATE utf8_persian_ci,
//          `score` varchar(200) COLLATE utf8_persian_ci,
//          `summary` varchar(2000) COLLATE utf8_persian_ci,
//          `created_at` datetime NOT NULL,
//          `updated_at` datetime DEFAULT NULL,
//          PRIMARY KEY (`id`)
//        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;",
//
//        "CREATE TABLE `movie_pictures` (
//          `movie_id` int(11) NOT NULL ,
//          `picture` varchar(200) COLLATE utf8_persian_ci,
//          `created_at` datetime NOT NULL,
//          `updated_at` datetime DEFAULT NULL,
//          PRIMARY KEY (`movie_id`,`picture`),
//          FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
//        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;",
//
//
//        "CREATE TABLE `movie_genre` (
//          `movie_id` int(11) NOT NULL,
//          `genre` varchar(100) COLLATE utf8_persian_ci NOT NULL,
//          `created_at` datetime NOT NULL,
//          `updated_at` datetime DEFAULT NULL,
//          PRIMARY KEY (`movie_id`,`genre`),
//          FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
//        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;",
//
//        "CREATE TABLE `watchList` (
//          `movie_id` int(11) NOT NULL,
//          `user_id` int(11) NOT NULL,
//          `created_at` datetime NOT NULL,
//          `updated_at` datetime DEFAULT NULL,
//          PRIMARY KEY (`movie_id`,`user_id`),
//          FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
//          FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
//        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;",
//
//        "CREATE TABLE `movie_actor` (
//          `movie_id` int(11) NOT NULL,
//          `actor_id` int(11) NOT NULL,
//          `created_at` datetime NOT NULL,
//          `updated_at` datetime DEFAULT NULL,
//          PRIMARY KEY (`movie_id`,`actor_id`),
//          FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
//        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;",
//
//
//        "CREATE TABLE `comments` (
//          `id` int(11) NOT NULL AUTO_INCREMENT,
//          `user_id` int(11) NOT NULL,
//          `movie_id` int(11)  NOT NULL,
//          `text` text COLLATE utf8_persian_ci NOT NULL,
//          `permission` enum('unseen','seen','approved') COLLATE utf8_persian_ci NOT NULL DEFAULT 'unseen',
//          `created_at` datetime NOT NULL,
//          `updated_at` datetime DEFAULT NULL,
//          PRIMARY KEY (`id`),
//          FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
//          FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
//          )ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;",

//        "CREATE TABLE `blogs` (
//          `id` int(11) NOT NULL AUTO_INCREMENT,
//          `title` varchar(200) COLLATE utf8_persian_ci,
//          `picture` varchar(200) COLLATE utf8_persian_ci,
//          `text` text COLLATE utf8_persian_ci NOT NULL,
//          `created_at` datetime NOT NULL,
//          `updated_at` datetime DEFAULT NULL,
//          PRIMARY KEY (`id`)
//          ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;",

//        "CREATE TABLE `votes` (
//          `id` int(11) NOT NULL AUTO_INCREMENT,
//          `title` varchar(200) COLLATE utf8_persian_ci  NOT NULL,
//          `created_at` datetime NOT NULL,
//          `updated_at` datetime DEFAULT NULL,
//          PRIMARY KEY (`id`,`title`)
//          )ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;",
//
//        "CREATE TABLE `vote_candidates` (
//          `vote_id` int(11) NOT NULL AUTO_INCREMENT,
//          `candidate_id` int(11) NOT NULL,
//          `created_at` datetime NOT NULL,
//          `updated_at` datetime DEFAULT NULL,
//          PRIMARY KEY (`vote_id`,`candidate_id`),
//          FOREIGN KEY (`vote_id`) REFERENCES `votes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
//          )ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;",
////////
//        "CREATE TABLE `users_votes` (
//          `vote_id` int(11) NOT NULL AUTO_INCREMENT,
//          `candidate_id` int(11) NOT NULL,
//          `user_id` int(11) NOT NULL,
//          `created_at` datetime NOT NULL,
//          `updated_at` datetime DEFAULT NULL,
//          PRIMARY KEY (`vote_id`,`candidate_id`,`user_id`),
//          FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
//          )ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;",

    );

    private $tableInitializes = array(

//        ['table' => 'movie_actor', 'fields' => ['movie_id','actor_id'], 'values' => ['1', '1']]


//        ['table' => 'actors', 'fields' => ['first_name', 'last_name', 'birth_date', 'birth_place','picture'],
//            'values' => ['??????????', '??????????????', '?? ?????? ????????', '??????????', 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/0d/Parviz_Parastui_1.jpg/220px-Parviz_Parastui_1.jpg']],
//        ], ['table' => 'actors', 'fields' => ['first_name', 'last_name', 'birth_date', 'birth_place', 'bio','picture'], 'values' => ['??????????', '??????????', '?? ?????? ????????', '??????????',
//            '?????????? ?????????? (?????????? ?? ?????? ???????? ???? ??????????) ???????????????? ???????????? ?????? ???????????? ??????. ???? ???? ???? ???????????????? ???? ??????????????????????? ????????????????????????? ???????????????? ?? ?????????? ???? ?????????????????. ???? ???? ??????????????????? ?????????????????? ?????? ?????????? ?????? ?? ???? ?????? ????????????????????? ?????????? ???????? ?????????????????. ???? ?????? ???????????? ???? ???? ???????? ???????? ???? ?????? ???????? ???????? ?????? ?? ?????? ?????????? ???????? ????????. ???????????? ???????????? ???????? ???? ????????????????? ?????????????? ???? ???????? ?????????? ?????????? ?????????? ?????? ???? ?? ????????????? ???????????? ?? ????????????????????? ?????????? ?????????? ?????????????? ?? ?????????? ???? ???????????????????. ?????????? ?????????? ?????????? ???????????????? ?????? ???????? ???? ???? ???? ?????????? ?????? ???????? ?????????? ?????????? ????. ???? ???????? ?????????????? ???????? ???? ??????????????? ???? ???????? ???????????????? ?????????? ???????? ?????? ?????????????? ?????????? ?????????????? ???????? ?????????? ?????????????? ?????????? ???????????? ?????????? ???????????? ???????????? ?????????? ?? ???????? ???????? ?????? ?????????? ??????.','http://parsino.com/wp-content/uploads/2019/07/%D9%86%D8%A7%D8%B2%D9%86%DB%8C%D9%86-%D8%A8%DB%8C%D8%A7%D8%AA%DB%8C-4.jpg']],

//        ['table' => 'movies', 'fields' => ['movie_name', 'director', 'author', 'release_date', 'picture', 'duration', 'rewards'],
//            'values' => ['???????? ???????????? ???????? ????????', '???????? ??????????????', '?????? ???????????? ?? ???????? ??????????????', '????????',
//                'https://upload.wikimedia.org/wikipedia/fa/thumb/5/58/Bedon_tarikh_bedon_emza_poster.jpg/220px-Bedon_tarikh_bedon_emza_poster.jpg',
//               '??????', '']],
//        ['table' => 'actors', 'fields' => ['first_name', 'last_name', 'birth_date', 'birth_place', 'picture', 'bio'],
//            'values' => ['??????????', '??????????', '???? ?????????????? ????????', ' ??????????', 'https://namakstan.net/wp-content/uploads/2018/11/%D8%B9%DA%A9%D8%B3-%D9%85%D8%B1%DB%8C%D9%84%D8%A7-%D8%B2%D8%A7%D8%B1%D8%B9%DB%8C.jpg',
//                '?????????? ?????????? ???? ???????? ???? ???????? ??????. ???? ????????????????????????? ?????????? ?????????? ???? ?????????????? ???????? ??????. ???? ?????????? ???????????? ?????????? ?????????? ??????. ?????????? ???????? ?????????? ?????? ???? ???????? ???????? ?????????? ?????????? ???????? ?????????????? (????????) ???? ???????? ?????????? ?????? ???? ???? ?????? ?????????????? ???????? ?????????? ?? ?????????? ???? ???? ?????? ???????? ?????????? ?????? ??????. ???????? ???? ???????? ???? ???? ?????? ???? ????????????????? ???????? ???? ??????. ???? ???? ???? ?????? ???? ?????????????????????? ?????????? ?????????????? ????????????????????? ???????? ???????????? ?? ?????????? ?????????????? ?? ???????? ?????????????? ???????????? ???????????????????.???? ???? ???? ???????? ???? ?????????? ?????????? ???? ???????? ??????????????? ???? ??????????????? ???? ???????? ???? ???????? ???????????????? ???????? ?????????? ?????????? ?????????????? ?? ???????? ?????? ?????????? ???????? ?????????? ?????????? ???????? ???? ???????? ???????? ???? ?????? ???? ???????? ???????? ???? ???????????? ?????????? ???????????? ???????????? ?????? ??????.']]


//        ['table' => 'actor_pictures', 'fields' => ['actor_id', 'picture'], 'values' => ['8', 'https://zarinbano.com/wp-content/uploads/%D9%85%D8%B1%DB%8C%D9%84%D8%A7-%D8%B2%D8%A7%D8%B1%D8%B9%DB%8C-%D8%A8%D8%A7%D8%B2%DB%8C%DA%AF%D8%B1-%D8%B3%DB%8C%D9%86%D9%85%D8%A7.jpg']]

//        ['table' => 'actors', 'fields' => ['first_name', 'last_name', 'birth_date', 'birth_place', 'bio','picture'], 'values' => ['??????????', '??????????', '???? ???????????? ????????', '????????????',
//            '?????????? ?????????? ???? 23 ???????????? 1359 ???? ???????????? ???? ???????? ??????. ???? ?????????? ???? ?????????? ?? 4 ?????????? ??????.  ???? ?????????????? ?????? ???? ???? ???????? ???? ???????? ???????????????? ???????? ?????????? ?????????? ???????? ??????. ???????????? ?????? ???????? ???? ???? ???????? ???? ???????? ?????? ?????????? ?????????????? ???? ???????? ?????? ???????????? ?????? ?????????? ?????????????? ?????????? ?????? ?? ?????????? ???????????? ???????? ??????. ???? ???? ?????? ?????????? ???? ???????? ?????? ???? ???????? ?? ?????? ???????? ???????? ???????????????? ?? ???????? ?????????? ?????????????? ???????? ??????.',''],
//        ], ['table' => 'actors', 'fields' => ['first_name', 'last_name', 'birth_date', 'birth_place', 'bio','picture'], 'values' => ['??????????', '??????????', '?? ?????? ????????', '??????????',
//            '?????????? ?????????? (?????????? ?? ?????? ???????? ???? ??????????) ???????????????? ???????????? ?????? ???????????? ??????. ???? ???? ???? ???????????????? ???? ??????????????????????? ????????????????????????? ???????????????? ?? ?????????? ???? ?????????????????. ???? ???? ??????????????????? ?????????????????? ?????? ?????????? ?????? ?? ???? ?????? ????????????????????? ?????????? ???????? ?????????????????. ???? ?????? ???????????? ???? ???? ???????? ???????? ???? ?????? ???????? ???????? ?????? ?? ?????? ?????????? ???????? ????????. ???????????? ???????????? ???????? ???? ????????????????? ?????????????? ???? ???????? ?????????? ?????????? ?????????? ?????? ???? ?? ????????????? ???????????? ?? ????????????????????? ?????????? ?????????? ?????????????? ?? ?????????? ???? ???????????????????. ?????????? ?????????? ?????????? ???????????????? ?????? ???????? ???? ???? ???? ?????????? ?????? ???????? ?????????? ?????????? ????. ???? ???????? ?????????????? ???????? ???? ??????????????? ???? ???????? ???????????????? ?????????? ???????? ?????? ?????????????? ?????????? ?????????????? ???????? ?????????? ?????????????? ?????????? ???????????? ?????????? ???????????? ???????????? ?????????? ?? ???????? ???????? ?????? ?????????? ??????.','http://parsino.com/wp-content/uploads/2019/07/%D9%86%D8%A7%D8%B2%D9%86%DB%8C%D9%86-%D8%A8%DB%8C%D8%A7%D8%AA%DB%8C-4.jpg']],

//        ['table' => 'movies', 'fields' => ['movie_name', 'director', 'release_date', 'trailer', 'picture', 'score', 'summary'],
//            'values' => ['?????? ??????????','???????? ????????????????', '????????', 'https://www.didestan.com/video/m8kmO9xG', 'https://fa.wikipedia.org/wiki/%D9%BE%D8%B1%D9%88%D9%86%D8%AF%D9%87:%D8%B7%D8%B9%D9%85_%DA%AF%DB%8C%D9%84%D8%A7%D8%B3.jpg', '8', '???????? ?????????? ????????? ?????????? ???????? ?????????????? ?????? ???????? ???? ?????????? ?????????? ???? ???????????? ?????????? ???????? ???????????? ??????. ???????? ???????????? ???????? ?????? ???? ???? ?????????? ?????? ???????????? ???? ?????????????????? ?????????? ?????? ??????????????? ???? ???????????? ?????????????? ???? ???? ???? ???????? ???????????? ?????????????? ?????????? ?????? ?????????? ??????.???????? ?????? ?????????? ?????????? ???? ???????? ?????????? ?????????????????? ???????????? ?????????? ?????????????????? ???????????? ?????? ???????? ???????????????? ???? ???????? ?????? ???????? ?????? ???? ?????? ???????? ????????????????? ?????? ???? ???????????? ?????????? ???? ?????? ?????????? ??????.']],
//        ['table' => 'actors', 'fields' => ['first_name', 'last_name', 'birth_date', 'birth_place','picture', 'bio'],
//            'values' => ['??????????','??????????','???? ?????????????? ????????', ' ??????????', 'https://namakstan.net/wp-content/uploads/2018/11/%D8%B9%DA%A9%D8%B3-%D9%85%D8%B1%DB%8C%D9%84%D8%A7-%D8%B2%D8%A7%D8%B1%D8%B9%DB%8C.jpg',
//                '?????????? ?????????? ???? ???????? ???? ???????? ??????. ???? ????????????????????????? ?????????? ?????????? ???? ?????????????? ???????? ??????. ???? ?????????? ???????????? ?????????? ?????????? ??????. ?????????? ???????? ?????????? ?????? ???? ???????? ???????? ?????????? ?????????? ???????? ?????????????? (????????) ???? ???????? ?????????? ?????? ???? ???? ?????? ?????????????? ???????? ?????????? ?? ?????????? ???? ???? ?????? ???????? ?????????? ?????? ??????. ???????? ???? ???????? ???? ???? ?????? ???? ????????????????? ???????? ???? ??????. ???? ???? ???? ?????? ???? ?????????????????????? ?????????? ?????????????? ????????????????????? ???????? ???????????? ?? ?????????? ?????????????? ?? ???????? ?????????????? ???????????? ???????????????????.???? ???? ???? ???????? ???? ?????????? ?????????? ???? ???????? ??????????????? ???? ??????????????? ???? ???????? ???? ???????? ???????????????? ???????? ?????????? ?????????? ?????????????? ?? ???????? ?????? ?????????? ???????? ?????????? ?????????? ???????? ???? ???????? ???????? ???? ?????? ???? ???????? ???????? ???? ???????????? ?????????? ???????????? ???????????? ?????? ??????.']]



//        ['table' => 'actor_pictures', 'fields' => ['actor_id', 'picture'], 'values' => ['8', 'https://zarinbano.com/wp-content/uploads/%D9%85%D8%B1%DB%8C%D9%84%D8%A7-%D8%B2%D8%A7%D8%B1%D8%B9%DB%8C-%D8%A8%D8%A7%D8%B2%DB%8C%DA%AF%D8%B1-%D8%B3%DB%8C%D9%86%D9%85%D8%A7.jpg']]

//        ['table' => 'actor_pictures', 'fields' => ['actor_id', 'picture'], 'values' => ['8', 'https://seraj24.ir/images/news/176499/thumbs/176499.jpg']],
//        ['table' => 'actor_pictures', 'fields' => ['actor_id', 'picture'], 'values' => ['8', 'https://static2.afkarnews.com/thumbnail/DM9ziLb0KNDM/rDxJk2yoXn9KV7c7C6kDweJVxtu4cY7G2hzV_1efiJea1I30PYCuRnaM5x4kKLNQXTYXaWKO8q0wfYWGdiJBEedZbU5YLDeVlqAKEfw-R6wwWxWQxIu3Fg,,/%D9%85%D8%B1%DB%8C%D9%84%D8%A7+%D8%B2%D8%A7%D8%B1%D8%B9%DB%8C.jpg']],
//        ['table' => 'actor_pictures', 'fields' => ['actor_id', 'picture'], 'values' => ['8', 'https://zarinbano.com/wp-content/uploads/%D9%85%D8%B1%DB%8C%D9%84%D8%A7-%D8%B2%D8%A7%D8%B1%D8%B9%DB%8C-%D8%A8%D8%A7%D8%B2%DB%8C%DA%AF%D8%B1-%D8%B3%DB%8C%D9%86%D9%85%D8%A7.jpg']],
//        ['table' => 'actor_pictures', 'fields' => ['actor_id', 'picture'], 'values' => ['7', 'https://saednews.com/storage/media-center/images/ac-image-Mf1590481907jP.jpeg']],
//        ['table' => 'actor_pictures', 'fields' => ['actor_id', 'picture'], 'values' => ['7', 'https://datamusic.ir/wp-content/uploads/2020/06/farzad_farzin_bon_bast.jpg']],
//        ['table' => 'actor_pictures', 'fields' => ['actor_id', 'picture'], 'values' => ['7', 'https://static1.eghtesadonline.com/servev2/zlqJk5aDtRpT/b54EPYiYwLU,/%D9%81%D8%B1%D8%B2%D8%A7%D8%AF+%D9%81%D8%B1%D8%B2%DB%8C%D9%86.jpg']],
//        ['table' => 'actor_pictures', 'fields' => ['actor_id', 'picture'], 'values' => ['7', 'https://media.mehrnews.com/d/2016/08/31/3/2193051.jpg?ts=1486462047399']]


//        ['table' => 'blogs', 'fields' => ['title', 'picture'], 'values' =>
//            ['???????? ???????????? ???? ???? ???????? ??????????', 'http://i2.tnews.ir/2020/07/26/168702856_239017728bfbac.jpg']],


    );

    public function run()
    {
        foreach ($this->createTableQueries as $createTableQuery) {
            $this->createTable($createTableQuery);
        }
//        foreach ($this->tableInitializes as $tableInitialize) {
//            $this->insert($tableInitialize['table'], $tableInitialize['fields'], $tableInitialize['values']);
//            echo "helllo";
//        }
    }
}

