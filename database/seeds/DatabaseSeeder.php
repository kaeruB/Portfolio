<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insertGetId(
            [
                'name' => 'Portfolio',
                'type' => 'frontend',
                'year' => '2019',
                'description' => 'The website is my interactive CV. I designed to learn Laravel framework and practice my other designing skills.',
                'source_url' => "https://github.com/kaeruB/Portfolio.git",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ]
        );

        DB::table('projects')->insertGetId(
            [
                'name' => 'Scrapla',
                'type' => 'backend',
                'year' => '2019',
                'description' => 'It\'s a library for content analysis based on web scraping solutions that I\'ve created with Kinga Kaczmarczyk as thesis project. After graduation we continue the development as a university research project (current employment).',
                //'source_url' => "",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ]
        );

        DB::table('projects')->insertGetId(
            [
                'name' => 'Japanese alphabet drill',
                'type' => 'backend',
                'year' => '2016',
                'description' => 'The application is implemented in Java Swing. It helps to learn one of Japanese alphabets called katakana. I made some monkey tests on my younger sister and she loved to play around with the program. It was my first bigger programming project.',
                'source_url' => "https://github.com/kaeruB/Katakana-Wo-Kantan-Ni-Shiyou.git",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ]
        );

        DB::table('projects')->insertGetId(
            [
                'name' => 'Operating systems C projects',
                'type' => 'backend',
                'year' => '2017',
                'description' => 'During my second year of my engineering studies I\'ve broaden my knowledge about creating sub-processes, operations on files, signals and much more what I\'ve practiced building small projects in C language on Linux. Example one under the link below.',
                'source_url' => "https://github.com/kaeruB/Operating_Systems_Signals.git",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ]
        );

        DB::table('projects')->insertGetId(
            [
                'name' => 'Tic tac toe',
                'type' => 'backend',
                'year' => '2017',
                'description' => 'The purpose of implementing this application was to check the usage of winsocks and signals on Windows after some experience with Linux and C language.',
                'source_url' => "https://github.com/kaeruB/Tic-tac-toe-.git",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ]
        );

        DB::table('projects')->insertGetId(
            [
                'name' => 'Wave player',
                'type' => 'backend',
                'year' => '2018',
                'description' => 'Wave player on STM32F4 Discovery. The program was created during laboratories and the co-author is Klaudia Knafel.',
                'source_url' => "https://github.com/kaeruB/WavePlayer.git",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ]
        );

        DB::table('projects')->insertGetId(
            [
                'name' => 'KITron',
                'type' => 'backend',
                'year' => '2018',
                'description' => 'Game created during 2 days university\'s hackaton - we worked in a group of 6 students and completed the task with great success. I was responsible for client site of application along with Karolina Biela.',
                'source_url' => "https://github.com/bielakarolina/KITron.git",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ]
        );

        $technologies = array(
          "basic" =>  array("Laravel", "JavaSwing", "C++", "Erlang/Elixir", "C#", "PHP", "JavaScript", "sbt", "JavaFX"),
            "intermediate" => array("Java", "CSS/SCSS", "MySQL", "Scala", "C", "HTML", "Selenium", "Akka", "Git"),
            "advanced" => array("T-SQL")
        );

        foreach ($technologies as $technologyLevel => $technologyList) {
            foreach ($technologyList as $technologyName) {
                DB::table('technologies')->insertGetId(
                    [
                        'name' => $technologyName,
                        'level' => $technologyLevel,
                        'created_at' => new DateTime(),
                        'updated_at' => new DateTime()
                    ]
                );
            }
        }

        $projectTechnologies = array(
          "Portfolio" => array("Laravel", "CSS/SCSS", "MySQL", "HTML", "PHP"),
            "Scrapla" => array("Scala", "Selenium", "sbt", "Akka", "Git"),
            "Japanese alphabet drill" => array("Java", "JavaSwing"),
            "Operating systems C projects" => array("C"),
            "Tic tac toe" => array("C++"),
            "Wave player" => array("C"),
            "KITron" => array("Java", "JavaFX", "Git")
        );

        foreach ($projectTechnologies as $projectName => $projectList) {
            foreach ($projectList as $technology) {
                DB::table('project_technologies')->insertGetId(
                    [
                        'project' => $projectName,
                        'technology' => $technology,
                        'created_at' => new DateTime(),
                        'updated_at' => new DateTime()
                    ]
                );
            }
        }
    }
}
