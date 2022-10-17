<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class DenisController extends Controller
{
    private $news = [
        [
            "id" => 1,
            "name" => "Prof.",
            "date" => "2014-04-07",
            "raiting" => 10,
            "authorName" => "Will Haley"
        ],
        [
            "id" => 2,
            "name" => "Prof.",
            "date" => "2009-02-07",
            "raiting" => 1,
            "authorName" => "Winnifred Moen"
        ],
        [
            "id" => 3,
            "name" => "Prof.",
            "date" => "2017-05-06",
            "raiting" => 3,
            "authorName" => "Santina Senger Jr."
        ],
        [
            "id" => 4,
            "name" => "Dr.",
            "date" => "2000-01-15",
            "raiting" => 5,
            "authorName" => "Prof. Alba Ritchie"
        ],
        [
            "id" => 5,
            "name" => "Miss",
            "date" => "1991-10-08",
            "raiting" => 5,
            "authorName" => "Prof. Kennedi Connelly"
        ],
        [
            "id" => 6,
            "name" => "Ms.",
            "date" => "2010-02-21",
            "raiting" => 0,
            "authorName" => "Vada Keebler"
        ],
        [
            "id" => 7,
            "name" => "Prof.",
            "date" => "2001-08-24",
            "raiting" => 10,
            "authorName" => "Winona O'Reilly IV"
        ],
        [
            "id" => 8,
            "name" => "Mr.",
            "date" => "1977-06-07",
            "raiting" => 1,
            "authorName" => "Sydni Kutch"
        ],
        [
            "id" => 9,
            "name" => "Dr.",
            "date" => "1988-01-14",
            "raiting" => 4,
            "authorName" => "Davin Feeney"
        ],
        [
            "id" => 10,
            "name" => "Mrs.",
            "date" => "1985-05-18",
            "raiting" => 10,
            "authorName" => "Haven Leannon"
        ],
        [
            "id" => 11,
            "name" => "Ms.",
            "date" => "2008-07-07",
            "raiting" => 10,
            "authorName" => "Prof. Cedrick Daniel I"
        ],
        [
            "id" => 12,
            "name" => "Miss",
            "date" => "1985-12-20",
            "raiting" => 2,
            "authorName" => "Mrs. Myah Gottlieb IV"
        ],
        [
            "id" => 13,
            "name" => "Dr.",
            "date" => "2002-05-21",
            "raiting" => 3,
            "authorName" => "Hilda Hartmann"
        ],
        [
            "id" => 14,
            "name" => "Mr.",
            "date" => "1997-07-20",
            "raiting" => 4,
            "authorName" => "Frank Marvin DDS"
        ],
        [
            "id" => 15,
            "name" => "Mrs.",
            "date" => "2003-06-11",
            "raiting" => 3,
            "authorName" => "Dino Harris"
        ],
        [
            "id" => 16,
            "name" => "Prof.",
            "date" => "2020-02-28",
            "raiting" => 9,
            "authorName" => "Wiley Johns"
        ],
        [
            "id" => 17,
            "name" => "Mrs.",
            "date" => "1990-07-09",
            "raiting" => 8,
            "authorName" => "Valentine Okuneva"
        ],
        [
            "id" => 18,
            "name" => "Mr.",
            "date" => "2020-08-08",
            "raiting" => 0,
            "authorName" => "Miller Bernier II"
        ],
        [
            "id" => 19,
            "name" => "Dr.",
            "date" => "1989-08-21",
            "raiting" => 8,
            "authorName" => "Ms. Selina Abbott"
        ],
        [
            "id" => 20,
            "name" => "Mr.",
            "date" => "2005-01-07",
            "raiting" => 10,
            "authorName" => "Barbara Botsford"
        ],
        [
            "id" => 21,
            "name" => "Miss",
            "date" => "1983-07-03",
            "raiting" => 5,
            "authorName" => "Bettie Morissette"
        ],
        [
            "id" => 22,
            "name" => "Ms.",
            "date" => "1998-01-02",
            "raiting" => 8,
            "authorName" => "Mr. Nico Runolfsson IV"
        ],
        [
            "id" => 23,
            "name" => "Dr.",
            "date" => "1972-02-17",
            "raiting" => 6,
            "authorName" => "Valentine Rempel"
        ],
        [
            "id" => 24,
            "name" => "Dr.",
            "date" => "2006-01-05",
            "raiting" => 1,
            "authorName" => "Tyrique Walker"
        ],
        [
            "id" => 25,
            "name" => "Prof.",
            "date" => "1998-04-25",
            "raiting" => 0,
            "authorName" => "Mr. Douglas Pouros MD"
        ],
        [
            "id" => 26,
            "name" => "Dr.",
            "date" => "2015-05-23",
            "raiting" => 6,
            "authorName" => "Malvina Fahey"
        ],
        [
            "id" => 27,
            "name" => "Dr.",
            "date" => "1983-02-06",
            "raiting" => 7,
            "authorName" => "Dr. Dejah Swaniawski"
        ],
        [
            "id" => 28,
            "name" => "Ms.",
            "date" => "2010-08-03",
            "raiting" => 7,
            "authorName" => "Eveline Runolfsson"
        ],
        [
            "id" => 29,
            "name" => "Miss",
            "date" => "1983-09-20",
            "raiting" => 10,
            "authorName" => "Erna Jerde"
        ],
        [
            "id" => 30,
            "name" => "Prof.",
            "date" => "2012-03-29",
            "raiting" => 4,
            "authorName" => "Idell Walter"
        ],
        [
            "id" => 31,
            "name" => "Prof.",
            "date" => "1997-10-23",
            "raiting" => 10,
            "authorName" => "Dax Jenkins"
        ],
        [
            "id" => 32,
            "name" => "Prof.",
            "date" => "1998-11-11",
            "raiting" => 10,
            "authorName" => "Dr. Celestino Runolfsson Jr."
        ],
        [
            "id" => 33,
            "name" => "Miss",
            "date" => "1993-12-23",
            "raiting" => 1,
            "authorName" => "Minnie Kohler"
        ],
        [
            "id" => 34,
            "name" => "Mr.",
            "date" => "1974-03-04",
            "raiting" => 3,
            "authorName" => "Hope Roberts"
        ],
        [
            "id" => 35,
            "name" => "Prof.",
            "date" => "1993-04-19",
            "raiting" => 3,
            "authorName" => "Jessy Mayert"
        ],
        [
            "id" => 36,
            "name" => "Ms.",
            "date" => "2010-10-07",
            "raiting" => 8,
            "authorName" => "Christine Grimes"
        ],
        [
            "id" => 37,
            "name" => "Prof.",
            "date" => "1971-09-23",
            "raiting" => 4,
            "authorName" => "Jared Kautzer"
        ],
        [
            "id" => 38,
            "name" => "Dr.",
            "date" => "2015-01-14",
            "raiting" => 9,
            "authorName" => "Karelle Dach"
        ],
        [
            "id" => 39,
            "name" => "Prof.",
            "date" => "2007-02-17",
            "raiting" => 5,
            "authorName" => "Camden Harber"
        ],
        [
            "id" => 40,
            "name" => "Mr.",
            "date" => "1985-10-11",
            "raiting" => 9,
            "authorName" => "Christian Murray"
        ],
        [
            "id" => 41,
            "name" => "Mrs.",
            "date" => "2019-01-21",
            "raiting" => 10,
            "authorName" => "Maiya Heathcote"
        ],
        [
            "id" => 42,
            "name" => "Prof.",
            "date" => "1996-12-22",
            "raiting" => 10,
            "authorName" => "Mrs. Maximillia O'Connell"
        ],
        [
            "id" => 43,
            "name" => "Dr.",
            "date" => "2018-04-24",
            "raiting" => 6,
            "authorName" => "August Luettgen DVM"
        ],
        [
            "id" => 44,
            "name" => "Dr.",
            "date" => "2019-04-05",
            "raiting" => 2,
            "authorName" => "Prof. Marina Pfannerstill"
        ],
        [
            "id" => 45,
            "name" => "Dr.",
            "date" => "1975-03-06",
            "raiting" => 1,
            "authorName" => "Dr. Fritz Batz"
        ],
        [
            "id" => 46,
            "name" => "Dr.",
            "date" => "1987-02-27",
            "raiting" => 3,
            "authorName" => "Ernest Tromp"
        ],
        [
            "id" => 47,
            "name" => "Prof.",
            "date" => "1976-03-29",
            "raiting" => 8,
            "authorName" => "Abe Dicki"
        ],
        [
            "id" => 48,
            "name" => "Mr.",
            "date" => "2008-03-02",
            "raiting" => 9,
            "authorName" => "Dr. Jamaal Bashirian PhD"
        ],
        [
            "id" => 49,
            "name" => "Prof.",
            "date" => "1998-11-14",
            "raiting" => 2,
            "authorName" => "Clyde Jakubowski"
        ],
        [
            "id" => 50,
            "name" => "Miss",
            "date" => "2006-07-26",
            "raiting" => 5,
            "authorName" => "Dr. Ronaldo Heller Sr."
        ],
        [
            "id" => 51,
            "name" => "Prof.",
            "date" => "1974-02-23",
            "raiting" => 1,
            "authorName" => "Milan Wiegand"
        ],
        [
            "id" => 52,
            "name" => "Dr.",
            "date" => "1998-01-01",
            "raiting" => 4,
            "authorName" => "Griffin Weimann"
        ],
        [
            "id" => 53,
            "name" => "Dr.",
            "date" => "2005-10-13",
            "raiting" => 4,
            "authorName" => "Lucas Smitham DVM"
        ],
        [
            "id" => 54,
            "name" => "Mrs.",
            "date" => "1997-09-16",
            "raiting" => 2,
            "authorName" => "Ms. Monique Ernser PhD"
        ],
        [
            "id" => 55,
            "name" => "Mr.",
            "date" => "2019-12-15",
            "raiting" => 0,
            "authorName" => "Tony Nienow"
        ],
        [
            "id" => 56,
            "name" => "Prof.",
            "date" => "1975-05-29",
            "raiting" => 8,
            "authorName" => "Clinton Kuvalis IV"
        ],
        [
            "id" => 57,
            "name" => "Dr.",
            "date" => "2021-07-30",
            "raiting" => 2,
            "authorName" => "Phyllis Pagac"
        ],
        [
            "id" => 58,
            "name" => "Dr.",
            "date" => "2001-12-11",
            "raiting" => 3,
            "authorName" => "Dr. Gerda Maggio Sr."
        ],
        [
            "id" => 59,
            "name" => "Dr.",
            "date" => "1994-06-11",
            "raiting" => 5,
            "authorName" => "Mr. Cicero Nicolas"
        ],
        [
            "id" => 60,
            "name" => "Mr.",
            "date" => "1972-04-01",
            "raiting" => 9,
            "authorName" => "Michaela Kling DDS"
        ],
        [
            "id" => 61,
            "name" => "Prof.",
            "date" => "1997-04-14",
            "raiting" => 6,
            "authorName" => "Miss Whitney Abernathy"
        ],
        [
            "id" => 62,
            "name" => "Dr.",
            "date" => "2012-10-08",
            "raiting" => 7,
            "authorName" => "Sofia Rippin II"
        ],
        [
            "id" => 63,
            "name" => "Dr.",
            "date" => "2008-10-26",
            "raiting" => 8,
            "authorName" => "Miss Drew Bogisich Jr."
        ],
        [
            "id" => 64,
            "name" => "Prof.",
            "date" => "1990-11-14",
            "raiting" => 6,
            "authorName" => "Anya Lind"
        ],
        [
            "id" => 65,
            "name" => "Dr.",
            "date" => "2000-04-03",
            "raiting" => 1,
            "authorName" => "Carlie Klocko"
        ],
        [
            "id" => 66,
            "name" => "Mr.",
            "date" => "1989-12-29",
            "raiting" => 0,
            "authorName" => "Teagan Wolf II"
        ],
        [
            "id" => 67,
            "name" => "Mr.",
            "date" => "1996-07-03",
            "raiting" => 9,
            "authorName" => "Mariah Kuhlman"
        ],
        [
            "id" => 68,
            "name" => "Prof.",
            "date" => "1972-07-24",
            "raiting" => 9,
            "authorName" => "Lew Rippin"
        ],
        [
            "id" => 69,
            "name" => "Miss",
            "date" => "2002-05-12",
            "raiting" => 6,
            "authorName" => "Ignacio Bergstrom"
        ],
        [
            "id" => 70,
            "name" => "Prof.",
            "date" => "1974-02-14",
            "raiting" => 5,
            "authorName" => "Prof. Dorothy Stamm"
        ],
        [
            "id" => 71,
            "name" => "Ms.",
            "date" => "2016-12-18",
            "raiting" => 1,
            "authorName" => "Caterina Legros"
        ],
        [
            "id" => 72,
            "name" => "Dr.",
            "date" => "2014-04-21",
            "raiting" => 7,
            "authorName" => "Clovis Gleason IV"
        ],
        [
            "id" => 73,
            "name" => "Mrs.",
            "date" => "1970-10-20",
            "raiting" => 4,
            "authorName" => "Miss Clementina Sanford PhD"
        ],
        [
            "id" => 74,
            "name" => "Mr.",
            "date" => "1970-09-13",
            "raiting" => 3,
            "authorName" => "Elaina Gerlach"
        ],
        [
            "id" => 75,
            "name" => "Miss",
            "date" => "1986-03-27",
            "raiting" => 5,
            "authorName" => "Margot Marquardt"
        ],
        [
            "id" => 76,
            "name" => "Prof.",
            "date" => "2012-08-06",
            "raiting" => 6,
            "authorName" => "Rhea Leuschke"
        ],
        [
            "id" => 77,
            "name" => "Ms.",
            "date" => "1970-12-17",
            "raiting" => 1,
            "authorName" => "Dorian Nitzsche"
        ],
        [
            "id" => 78,
            "name" => "Prof.",
            "date" => "1992-02-29",
            "raiting" => 0,
            "authorName" => "Charles Dietrich"
        ],
        [
            "id" => 79,
            "name" => "Mr.",
            "date" => "1980-03-12",
            "raiting" => 0,
            "authorName" => "Sabrina Bogisich"
        ],
        [
            "id" => 80,
            "name" => "Mr.",
            "date" => "1989-11-01",
            "raiting" => 0,
            "authorName" => "Eudora Funk"
        ],
        [
            "id" => 81,
            "name" => "Ms.",
            "date" => "2022-07-29",
            "raiting" => 5,
            "authorName" => "Mr. Ottis Zboncak"
        ],
        [
            "id" => 82,
            "name" => "Mrs.",
            "date" => "1999-06-25",
            "raiting" => 9,
            "authorName" => "Savanah Ritchie"
        ],
        [
            "id" => 83,
            "name" => "Dr.",
            "date" => "1980-03-20",
            "raiting" => 6,
            "authorName" => "Sheldon Armstrong"
        ],
        [
            "id" => 84,
            "name" => "Ms.",
            "date" => "1994-08-31",
            "raiting" => 6,
            "authorName" => "Prof. Billie Predovic"
        ],
        [
            "id" => 85,
            "name" => "Dr.",
            "date" => "1972-05-20",
            "raiting" => 7,
            "authorName" => "Mr. Martin Swaniawski V"
        ],
        [
            "id" => 86,
            "name" => "Dr.",
            "date" => "2013-01-03",
            "raiting" => 10,
            "authorName" => "Mertie Dietrich IV"
        ],
        [
            "id" => 87,
            "name" => "Dr.",
            "date" => "2021-02-14",
            "raiting" => 5,
            "authorName" => "Juliet Stamm"
        ],
        [
            "id" => 88,
            "name" => "Dr.",
            "date" => "1989-03-21",
            "raiting" => 4,
            "authorName" => "Woodrow Cruickshank"
        ],
        [
            "id" => 89,
            "name" => "Mr.",
            "date" => "1980-06-30",
            "raiting" => 4,
            "authorName" => "Prof. Robbie Johnson I"
        ],
        [
            "id" => 90,
            "name" => "Dr.",
            "date" => "1980-10-08",
            "raiting" => 10,
            "authorName" => "Dr. Quincy Hudson DDS"
        ],
        [
            "id" => 91,
            "name" => "Prof.",
            "date" => "2000-01-03",
            "raiting" => 9,
            "authorName" => "Prof. Mohammed Schmitt"
        ],
        [
            "id" => 92,
            "name" => "Dr.",
            "date" => "1995-10-20",
            "raiting" => 9,
            "authorName" => "Fabiola Stokes"
        ],
        [
            "id" => 93,
            "name" => "Mr.",
            "date" => "2003-02-22",
            "raiting" => 10,
            "authorName" => "Jabari McDermott"
        ],
        [
            "id" => 94,
            "name" => "Prof.",
            "date" => "1983-08-13",
            "raiting" => 10,
            "authorName" => "Hal Pfannerstill"
        ],
        [
            "id" => 95,
            "name" => "Miss",
            "date" => "2008-02-29",
            "raiting" => 2,
            "authorName" => "Myrtis Reinger"
        ],
        [
            "id" => 96,
            "name" => "Prof.",
            "date" => "1996-02-21",
            "raiting" => 8,
            "authorName" => "Sonny VonRueden"
        ],
        [
            "id" => 97,
            "name" => "Mrs.",
            "date" => "1978-01-09",
            "raiting" => 7,
            "authorName" => "Dagmar Fritsch"
        ],
        [
            "id" => 98,
            "name" => "Mrs.",
            "date" => "1993-05-26",
            "raiting" => 6,
            "authorName" => "Ladarius Pfeffer"
        ],
        [
            "id" => 99,
            "name" => "Miss",
            "date" => "2012-11-25",
            "raiting" => 4,
            "authorName" => "Prof. Erling Moore II"
        ],
        [
            "id" => 100,
            "name" => "Miss",
            "date" => "2006-09-20",
            "raiting" => 7,
            "authorName" => "Dr. Jonas Rippin"
        ]
    ];

    public function getPosts(Request $request)
    {
        $number = $request->get('numberPage');
        $count = $request->get('count') ?? 20;
        $sort = $request->get('sort') ?? 'desc';

        usort($this->news, function($a, $b) use ($sort) {
            if ($sort == 'desc') {
                return strtotime($a['date']) < strtotime($b['date']);
            } else {
                return strtotime($a['date']) > strtotime($b['date']);
            }
        });

        $newsPaginated = [];

        $from = ($number - 1) * $count;
        $to = $from + $count;
        for ($i = $from; $i < $to; $i++) {
            if (isset($this->news[$i])) {
                array_push($newsPaginated, $this->news[$i]);
            }
        }

        return collect($newsPaginated)->toJson();
    }

    public function getPost($id)
    {
        foreach ($this->news as $new) {
            if ($new['id'] == $id) {
                return collect($new)->toJson();
            }
        }
        return collect([])->toJson();
    }
}
