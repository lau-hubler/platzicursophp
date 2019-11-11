<?php
   
   class Job {
      public $title;
      public $description;
      public $visible;
      public $months;
   }
   
   $job1 = new Job();
   $job1->title ='PHP Developer';
   $job1->description = 'This is an awesome job!!!';
   $job1->visible = true;
   $job1->months = 13;
   
   $job2 = new Job();
   $job2->title ='Python Dev';
   $job2->description = 'I love this job too!!!';
   $job2->visible = true;
   $job2->months = 15;
   
   $job3 = new Job();
   $job3->title ='Devops';
   $job3->visible = false;
   $job3->months = 5;
   
   $job4 = new Job();
   $job4->title ='Node Dev';
   $job4->visible = true;
   $job4->months = 25;
   
   $job = [$job1, $job2, $job3, $job4];
   
