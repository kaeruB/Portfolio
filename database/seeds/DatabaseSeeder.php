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
                'description' => 'A website about me. I designed it to learn Laravel framework and to develop intuition about web design and User Experience design.',
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
                'description' => 'A library for content analysis based on web scraping solutions that I have created with my colleague as a thesis project. After graduation we continue the development as a university research project (current employment).',
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
                'name' => 'C projects',
                'type' => 'backend',
                'year' => '2017',
                'description' => 'During my second year of my engineering studies I have broaden my knowledge about creating sub-processes, operations on files, signals and more. I have build small projects in C language on Linux. Example under the link below.',
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
                'description' => 'Wave player on STM32F4 Discovery. I worked with my colleague.',
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
                'description' => 'Game created during 2 days university hackaton - we worked in a group of 6 students and completed the task with great success. I was responsible for client site of application.',
                'source_url' => "https://github.com/bielakarolina/KITron.git",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ]
        );

        DB::table('projects')->insertGetId(
            [
                'name' => 'Music Influence',
                'type' => 'frontend',
                'year' => '2019',
                'description' => 'A website is part of a research of an influence of background music on human. A user has to complete a memory game during listening to music.',
                'source_url' => "https://github.com/kaeruB/MusicInfluenceResearch",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ]
        );

        $technologies = array(
          "basic" =>  array("Laravel", "JavaSwing", "C++", "Erlang/Elixir", "C#", "PHP", "JavaScript", "sbt", "JavaFX", "Angular7", "TypeScript"),
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
            "C projects" => array("C"),
            "Tic tac toe" => array("C++"),
            "Wave player" => array("C"),
            "KITron" => array("Java", "JavaFX", "Git"),
            "Music Influence" => array("Angular7", "TypeScript", "CSS/SCSS")
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
