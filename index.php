<?php 
    class Movie {
        public $title;

        public $director;

        public $releasedDate;
        
        public $language = 'English';

        public $overview;

        public function __construct($_title, $_director) {
            $this->title = $_title;
            $this->director = $_director;
        }

        public function setOverviewMovie($_overview) {
            $this->overview = $_overview;
        }

        public function getOverviewMovie($_overview) {
            return $this->overview;
        }
    }

    $taxiDriver = new Movie('Taxi Driver', 'Martin Scorsese');
    $taxiDriver->releasedDate = 'February 9, 1976';
    $taxiDriver->setOverviewMovie('Travis Bickle (De Niro) is an insomniac ex-marine who works the night shift as a taxi driver in 1970s New York. Chronically lonely and socially inept, he attempts to woo an attractive presidential campaign worker (Shepherd), but his misguided ideas about romance fall flat. Increasingly paranoid, Bickle fancies himself as the decaying city\'s saviour, culminating in a political assassination plot and the violent \'rescue\' of a child prostitute (Foster). A landmark portrait of psychosis from director Martin Scorsese and screenwriter Paul Schrader.');

    $drive = new Movie('Drive', 'Nicolas Winding Refn');
    $drive->releasedDate = 'May 20, 2011';
    $drive->setOverviewMovie('This film is about a \'driver\' (Ryan Gosling) who works at a garage fixing cars, but also drives stunt cars in movies. He also does some getaway driving to earn extra cash. He gets close with a woman, Irene, and her child, who is his neighbor. Her husband gets released from prison and and owes some people money, so the \'driver\' ends up doing a job with him. But it goes wrong and the \'driver\' ends up in a crime he didn\'t want to be involved in. Can he protect the people that he now cares about?');

    $nightcrawler = new Movie('Nightcrawler', 'Dan Gilroy');
    $nightcrawler->releasedDate = 'October 31, 2014';
    $nightcrawler->setOverviewMovie('NIGHTCRAWLER is a thriller set in the nocturnal underbelly of contemporary Los Angeles. Jake Gyllenhaal stars as Lou Bloom, a driven young man desperate for work who discovers the high-speed world of L.A. crime journalism. Finding a group of freelance camera crews who film crashes, fires, murder and other mayhem, Lou muscles into the cut-throat, dangerous realm of nightcrawling - where each police siren wail equals a possible windfall and victims are converted into dollars and cents. Aided by Rene Russo as Nina, a veteran of the blood-sport that is local TV news, Lou blurs the line between observer and participant to become the star of his own story.');
?>


<!DOCTYPE html>     
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-OOP-1</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
        <div class="container">
            <h1>OMG HE'S LITERALLY ME MOVIES</h1>

            <div class="row">
                <div class="col">
                    <div class="card">
                        <img src="img/taxidriver.jpg" alt="taxidriver">

                        <div>
                            <div>
                                TITLE: <?php echo $taxiDriver->title; ?>
                            </div>

                            <div>
                                DIRECTOR: <?php echo $taxiDriver->director; ?>
                            </div>
                            
                            <div>
                                RELEASED DATE: <?php echo $taxiDriver->releasedDate; ?>
                            </div>

                            <div>
                                LANGUAGE: <?php echo $taxiDriver->language; ?>
                            </div>

                            <div>
                                OVERVIEW: <?php echo $taxiDriver->overview; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                        <img src="img/drive.jpg" alt="drive">

                        <div>
                            TITLE: <?php echo $drive->title; ?>
                        </div>

                        <div>
                            DIRECTOR: <?php echo $drive->director; ?>
                        </div>
                        
                        <div>
                            RELEASED DATE: <?php echo $drive->releasedDate; ?>
                        </div>

                        <div>
                            LANGUAGE: <?php echo $drive->language; ?>
                        </div>

                        <div>
                            OVERVIEW: <?php echo $drive->overview; ?>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                        <img src="img/nightcrawler.jpg" alt="nightcrawler">

                        <div>
                            TITLE: <?php echo $nightcrawler->title; ?>
                        </div>

                        <div>
                            DIRECTOR: <?php echo $nightcrawler->director; ?>
                        </div>
                        
                        <div>
                            RELEASED DATE: <?php echo $nightcrawler->releasedDate; ?>
                        </div>

                        <div>
                            LANGUAGE: <?php echo $nightcrawler->language; ?>
                        </div>

                        <div>
                            OVERVIEW: <?php echo $nightcrawler->overview; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>