<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    class Page
    {
        private $page = null;
        private $title;
        private $year;
        private $copyright;

        public function setYear($year)
        {
            $this->year = $year;
        }
        public function setTitle($title)
        {
            $this->title = $title;
        }
        public function setCopyright($copyright)
        {
            $this->copyright = $copyright;
        }

        public function get()
        {
            print("$this->page");
        }
        private function setHeader()
        {
            $this->page = "<h1>Welcome to my page</h1>";
            $this->page = $this->page . "<h2> Title: $this->title </h2><br>";
        }
        public function setContent($content)
        {
            $this->setHeader();
            $this->page = $this->page . $content . "<br>";
            $this->setFooter();
        }
        private function setFooter()
        {
            $this->page = $this->page . "<br> Copyright by " . $this->copyright  . " in " . $this->year . " <br>";
        }
    }

    $page = new Page();
    $page->setYear("2023");
    $page->setTitle("New blog");
    $page->setCopyright("Huy");
    $page->setContent("Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum similique quaerat, ullam explicabo dicta amet sed temporibus necessitatibus tempore, pariatur, repellat maiores cum quis voluptates? Sequi ut et provident laboriosam?");
    $page->get();

    ?>
</body>

</html>