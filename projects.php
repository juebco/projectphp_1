<?php

require_once 'app/Models/Project.php';

use App\Models\Project;

$project1 = new Project('Proyecto 1', 'Descripción');

$project2 = new Project('Progetto 2', 'Descrizione');

$projects = [
  $project1,
  $project2
];

function printproject($project) {

  echo '<div class="project">';
  echo '<h5>' . $project->getTitle() . '</h5>';
  echo '<p>' . $project->description . '</p>';
  echo '<div class="row">';
  echo '<div class="col-3">';
  echo '<img id="profile-picture" src="img/logoh.png" alt="" class="rounded">';
  echo '</div>';
  echo '<div class="col">';
  echo '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius earum corporis at accusamus quisquam hic quos vel? Tenetur, ullam veniam consequatur esse quod cum, quam cupiditate assumenda natus maiores aperiam.</p>';
  echo '<strong>Technologies used: </strong>';
  echo '<span class="badge badge-info">PHP</span> ';
  echo '<span class="badge badge-info">HTML</span> ';
  echo '<span class="badge badge-info">CSS</span>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
}
