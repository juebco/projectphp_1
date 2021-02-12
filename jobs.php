<?php

require_once 'app/Models/Job.php';

use App\Models\Job;

$job1 = new Job('PHP Developer', 'This is an awesome job!!!');

$job2 = new Job('Frontend Dev', 'This is an awesome job!!!');

$job3 = new Job('', 'This is an awesome job!!!');

$jobs = [
  $job1,
  $job2,
  $job3
];

function printjob($job) {

  echo '<li class="work-position">';
  echo '<h5>' . $job->getTitle() . '</h5>';
  echo '<p>' . $job->description . '</p>';
  echo '<strong>Achievements:</strong>';
  echo '<ul>';
  echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo '</ul>';
  echo '</li>';
}
